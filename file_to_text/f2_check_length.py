from f1_file_to_text import extract_text_from_pdf, extract_text_from_pptx, extract_text_from_image_easyocr, extract_text_docx, extract_text_from_pdf_images, extract_text_from_docx_images, extract_text_from_pptx_images

# print(extract_text_from_pdf('/Users/keetaphatsripinta/Desktop/Axons/hack-aiforthai/data/Resume(2025)-Keetaphat.pdf'))


def extract_text_document(file_path):
    ext = file_path.lower()

    if ext.endswith('.pdf'):
        text = extract_text_from_pdf(file_path)
        if len(text.strip()) < 50:
            print("🔍 Fallback to OCR from PDF images...")
            text = extract_text_from_pdf_images(file_path)
            text = text.replace('created with an evaluation copy of aspose. words. to remove all limitations, you can use free temporary license https: products aspose .com words temporary license!', '')


    elif ext.endswith('.pptx'):
        text = extract_text_from_pptx(file_path)
        if len(text.strip()) < 50:
            text = extract_text_from_pptx_images(file_path)
            text = text.replace('created with an evaluation copy of aspose. words. to remove all limitations, you can use free temporary license https: products aspose .com words temporary license!', '')


    elif ext.endswith('.docx'):
        text = extract_text_docx(file_path)
        if len(text.strip()) < 50:
            print("🔍 Fallback to OCR from DOCX as image...")
            text = extract_text_from_docx_images(file_path)
            text = text.replace('created with an evaluation copy of aspose. words. to remove all limitations, you can use free temporary license https: products aspose .com words temporary license!', '')

    elif ext.endswith(('.png', '.jpg', '.jpeg')):
        text = extract_text_from_image_easyocr(file_path)

    else:
        raise ValueError("Unsupported file format")

    if isinstance(text, list):
        text = " ".join([str(t) for t in text])

    if len(text.strip()) < 50:
        print(text)
        raise ValueError("⚠️ Unable to extract meaningful text from the file. It may contain too little information or be image-only. Please try another file.")

    return text
    
