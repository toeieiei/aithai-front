import os
import subprocess
import fitz  # PyMuPDF
from PIL import Image
from dotenv import load_dotenv
import aspose.words as aw
from datetime import datetime

from aift import setting
from aift.nlp import text_cleansing
from aift.image.classification import nsfw
from f2_check_length import extract_text_document

# === Load API Key ===
load_dotenv()
API_KEY = os.getenv("AIFORTH_API_KEY")
setting.set_api_key(API_KEY)

# === Constants ===
OUTPUT_DIR = "./output_images"
SUPPORTED_IMAGE_FORMATS = ["jpg", "jpeg", "png"]
os.makedirs(OUTPUT_DIR, exist_ok=True)


# === Convert pptx to pdf ===
def pptx_to_pdf(pptx_path):
    try:
        # ใช้ subprocess.run ที่ import มาจากข้างบน
        subprocess.run(["libreoffice", "--headless", "--convert-to", "pdf", pptx_path], check=True)
        return pptx_path.replace(".pptx", ".pdf")
    except subprocess.CalledProcessError as e:
        raise RuntimeError(f"Failed to convert PPTX to PDF: {e}")
    except FileNotFoundError:
        raise RuntimeError("LibreOffice command not found. Please ensure LibreOffice is installed and in your system's PATH.")


# === Convert supported document to image(s) ===
def convert_to_image(file_path):
    ext = file_path.lower().split('.')[-1]
    image_paths = []
    output_dir = "./output_images"
    os.makedirs(output_dir, exist_ok=True)

    base = os.path.splitext(os.path.basename(file_path))[0]
    timestamp = datetime.now().strftime("%Y%m%d_%H%M%S")

    if ext in SUPPORTED_IMAGE_FORMATS:
        image_paths.append(file_path)

    elif ext == "pdf":
        doc = fitz.open(file_path)
        for i, page in enumerate(doc):
            img_path = os.path.join(output_dir, f"{base}_{timestamp}_page_{i}.jpg")
            page.get_pixmap(dpi=200).save(img_path)
            image_paths.append(img_path)

    elif ext == "docx":
        doc = aw.Document(file_path)
        save_options = aw.saving.ImageSaveOptions(aw.SaveFormat.JPEG)
        for i in range(doc.page_count):
            save_options.page_set = aw.saving.PageSet(i)
            img_path = os.path.join(output_dir, f"{base}_{timestamp}_page_{i}.jpg")
            doc.save(img_path, save_options)
            image_paths.append(img_path)

    elif ext == "pptx":
        pdf_path = pptx_to_pdf(file_path)
        return convert_to_image(pdf_path)

    else:
        raise ValueError(f"❌ Unsupported file format: {ext}")

    return image_paths

def check_nsfw(img_path):
    try:
        result = nsfw.analyze(img_path)
        objects = result.get("objects", [])
        return objects[0].get("result", "unknown") if objects else "not_detected"
    except Exception as e:
        print(f"❌ NSFW Check failed on {img_path}: {e}")
        return "error"

def clean_text(text):
    try:
        result = text_cleansing.clean(text)
        return result
    except Exception as e:
        print(f"❌ Text cleansing failed: {e}")
        return ""


# === Process file end-to-end ===
def process_file_cleaned_text(file_path, verbose=True):
    try:
        image_paths = convert_to_image(file_path)
        
      
        for img in image_paths:
            nsfw_label = check_nsfw(img)
            if verbose:
                print(f"🕵️ NSFW Check on {img}: {nsfw_label}")

            if nsfw_label != "ภาพปกติ":
                print(f"⚠️ Warning: Image '{os.path.basename(img)}' is not normal (Label: '{nsfw_label}'). Continuing process anyway.")


        print("\n✅ NSFW checks complete. Proceeding to text extraction.")

        extracted_text = extract_text_document(file_path)
        if verbose:
            print("\n📄 Extracted Text:\n", extracted_text)

        cleaned = clean_text(extracted_text)
        if verbose:
            print("\n🧼 Cleaned Text:\n", cleaned)

        return cleaned

    except Exception as e:
        print(f"\n❌ An critical error occurred during processing: {e}")
        return None

