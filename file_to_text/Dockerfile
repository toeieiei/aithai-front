FROM python:3.11

WORKDIR /app

RUN apt-get update && apt-get install -y \
    libreoffice \
    --no-install-recommends \
    && rm -rf /var/lib/apt/lists/*
RUN apt-get update && apt-get install -y git && rm -rf /var/lib/apt/lists/*

COPY . .
RUN pip install --no-cache-dir -r requirements.txt

CMD ["python", "app.py"] 