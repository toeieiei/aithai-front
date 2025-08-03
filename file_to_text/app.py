from fastapi import FastAPI, Body, File, UploadFile
from pydantic import BaseModel
import json
import os
from f3_api_4_th import process_file_cleaned_text  # ใช้แปลงไฟล์เป็นข้อความ
import requests
import logging

# Configure logging
logging.basicConfig(level=logging.INFO)
logger = logging.getLogger(__name__)

app = FastAPI()

class FilePathInput(BaseModel):
    file: str | None = None
    user_query: str | None = None

@app.post("/file_to_text")
def file_to_text(data: FilePathInput):
    file_path = "data/"+data.file
    user_query = data.user_query

    if not os.path.exists(file_path):
        return {"error": "File not found", "path": file_path}
        
    url_1 = "https://api.hackathon2025.ai.in.th/team21-1/ask/"
    url_2 = "https://api.hackathon2025.ai.in.th/team21-1/get_job"

    #finish 1st endpoint  (resume to text)
    resume = process_file_cleaned_text(file_path)['cleansing_text']
    #-----------------------------------------------------
    def build_prompt(resume=None, user_query=None):
        if resume and user_query:
            # ✅ Case 1: Resume + User Query
            prompt = f'''
    You are an expert in resume analysis and career advising.

    Given:
    - A resume (plain text or structured JSON)
    - A user query in Thai (e.g. อยากทำงานด้าน Data Science แถวกรุงเทพ เงินเดือน 40,000)

    Your tasks:

    1. **Skill Analysis**:
    - Extract only skills explicitly mentioned in the resume.
    - Classify into:
        - strengths: at least 4 clearly demonstrated skills.
        - weaknesses: at least 3 missing or weakly presented skills.

    2. **Resume Evaluation**:
    - Score the resume from 0–100 based on structure, clarity, and alignment with the user's query.
    - Provide a concise comment in Thai (ไม่เกิน 100 คำ) with resume feedback.

    3. **Job Match Summary**:
    - From the user query and resume, determine the most suitable job title and key skills.
    - Return a short sentence in **Thai** that clearly states:
        - desired job title (from user_query)
        - key matching skills (from resume)
    - Avoid location, salary, or long descriptions.

    ✅ Return results in this exact JSON structure:

    {{
    "skill_analysis": {{
        "strengths": ["..."],
        "weaknesses": ["..."]
    }},
    "resume_evaluation": {{
        "score": 0–100,
        "comment": "..."
    }},
    "job_match": "..."
    }}

    Constraints:
    - Use only information from the resume and user query.
    - Be honest and constructive.
    - Use Thai for both `comment` and `job_match` values.

    ---

    Resume:
    {resume}

    User Query:
    {user_query}
            '''.strip()

        elif user_query and not resume:
            # ✅ Case 2: Only user query
            prompt = f'''
    You are a career advisor and Thai language assistant.

    Given a user query in Thai describing their job interest, e.g.:
    "อยากทำงานเป็น Data Analyst แถวกรุงเทพ เงินเดือน 35,000"

    Your task:

    - Extract the desired **job title** and the implied **key skills** (if any).
    - Use your general knowledge to infer the typical skills required for the job mentioned in the query.
    - Output a short sentence in **natural Thai**, summarizing:
    - job title
    - key related skills
    - Do NOT include location or salary.

    ✅ Output format (JSON):

    {{
    "job_match": "..."
    }}

    Examples:

    Input: "อยากทำงานด้าน Marketing Online ที่เชียงใหม่"
    Output: {{ "job_match": "สนใจตำแหน่ง Digital Marketing โดยใช้ทักษะ Content, SEO และ Social Media" }}

    ---

    User Query:
    {user_query}
            '''.strip()

        elif resume and not user_query:
            # ✅ Case 3: Only resume
            prompt = f'''
    You are a professional resume analyst.

    Given a resume (in plain text or structured JSON):

    Your tasks:

    1. **Skill Analysis**:
    - Extract only the explicitly stated skills from the resume.
    - Classify them as:
        - strengths: at least 4 strong or repeated skills
        - weaknesses: at least 3 missing, weak, or less focused skills

    2. **Resume Evaluation**:
    - Score the resume between 0–100 based on structure, clarity, and overall professionalism
    - Write a short comment in Thai (ไม่เกิน 100 คำ) summarizing resume strengths and what could be improved

    3. **Job Match Summary**:
    - From the resume content only, suggest a suitable **job title** and **key skills**
    - Return a single sentence in **Thai** mentioning just:
        - appropriate job title
        - relevant or prominent skills from the resume

    ✅ Output JSON format:

    {{
    "skill_analysis": {{
        "strengths": ["..."],
        "weaknesses": ["..."]
    }},
    "resume_evaluation": {{
        "score": 0–100,
        "comment": "..."
    }},
    "job_match": "..."
    }}

    Constraints:
    - Do NOT make up skills or career goals not found in the resume
    - Do NOT assume user's intention — only describe what's evident from resume
    - Use Thai for both `comment` and `job_match`

    ---

    Resume:
    {resume}
            '''.strip()

        else:
            raise ValueError("At least one of 'resume' or 'user_query' must be provided.")

        return prompt



    # payload = json.dumps({
    #   "q": build_prompt(resume=resume, user_query=user_query) + ' /no_think'
    # })
    # headers = {
    #   'Content-Type': 'application/json'
    # }

    # response = requests.request("POST", url, headers=headers, data=payload)
    # # Extract llm_answer string from response JSON

    # response_json =  json.loads(response.text)
    # llm_answer = response_json.get('llm_answer', '')
    # if llm_answer:
    #     # Remove <think> tags if any
    #     llm_answer = llm_answer.replace('<think>', '').replace('</think>', '').strip()

    #     try:
    #         # Convert string (which looks like JSON) into real dictionary
    #         llm_answer_json = json.loads(llm_answer)

    #         # ✅ Now you can access the "job_match" field safely
    #         job_match_text = llm_answer_json.get("job_match", "")
    #         print("---" * 20)
    #         print("Job Match Summary:", job_match_text)

    #         # ✅ Example: send to another endpoint
    #         url_2 = "https://api.hackathon2025.ai.in.th/team21-1/get_job"
    #         payload_2 = json.dumps({"q": job_match_text + ' /no_think'})
    #         response_2 = requests.post(url_2, headers=headers, data=payload_2)
    #         print("Job Portal Response:")
    #         print(response_2.text)

    #     except json.JSONDecodeError as e:
    #         print("⚠️ Error decoding llm_answer as JSON:", e)
    # else:
    #     print("⚠️ llm_answer not found in response")

    # 🔸 Prepare prompt
    prompt = build_prompt(resume=resume, user_query=user_query) + ' /no_think'
    payload = json.dumps({"q": prompt})
    headers = {'Content-Type': 'application/json'}

    # 🔹 First API call — Resume analysis
    response = requests.post(url_1, headers=headers, data=payload)
    response_json = response.json()
    llm_answer = response_json.get('llm_answer', '').replace('<think>', '').replace('</think>', '').strip()

    try:
        llm_answer_json = json.loads(llm_answer)
        job_match_text = llm_answer_json.get("job_match", "")

        # 🔹 Second API call — Get job listings based on job match
        payload_2 = json.dumps({"q": job_match_text + ' /no_think'})
        response_2 = requests.post(url_2, headers=headers, data=payload_2)
        
        try:
            job_results = response_2.json()
        except:
            job_results = {"error": "Failed to parse job response", "raw": response_2.text}

        # ✅ Final combined result
        combined_result = {
            "resume_analysis": llm_answer_json,  # includes skill_analysis, resume_evaluation, job_match
            "job_results": job_results           # list or object returned from second endpoint
        }

        print(json.dumps(combined_result, ensure_ascii=False, indent=2))
        return combined_result
    except json.JSONDecodeError as e:
        print("⚠️ Error decoding LLM answer as JSON:", e)
        print("Raw LLM answer:", llm_answer)

if __name__ == "__main__":
    import uvicorn
    port = 8002
    uvicorn.run(app, host="0.0.0.0", port=port) 


