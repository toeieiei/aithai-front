<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta Tags -->

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="Copyright" content="Inazuma" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Ranyeh" />
  <meta name="rating" content="general" />
  <meta name="language" content="English" />
  <meta name="application-name" content="Inazuma" />
  <meta name="description" content="Tailwind CSS Company Landing Page Template by Ranyeh." />
  <meta name="keywords" content="company" />
  <meta name="twitter:title" content="Inazuma | Tailwind CSS Company Landing Page" />
  <meta name="twitter:description" content="Tailwind CSS Company Landing Page Template by Ranyeh." />
  <meta name="twitter:image" content="./assets/img/inazuma-cover.png" />
  <meta content="Inazuma | Tailwind CSS Company Landing Page" property="og:title" />
  <meta content="Inazuma" property="og:site_name" />
  <meta content="Tailwind CSS Company Landing Page Template by Ranyeh." property="og:description" />
  <meta content="./assets/img/inazuma-cover.png" property="og:image" />
  <meta content="https://ranyeh24.github.io/inazuma-tailwind" property="og:url" />
  <meta content="website" property="og:type" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playwrite+AU+NSW&family=Prompt&display=swap" rel="stylesheet">
  <meta name="msapplication-TileColor" content="#a606e6ff" />
  <meta name="msapplication-TileImage" content="./assets/favicon/mstile-144x144.png" />
  <meta name="theme-color" content="#a400f1c5" />
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

  <!-- Page title -->
  <title>MeJOB</title>

  <!-- Canonical -->
  <link rel="canonical" href="https://ranyeh24.github.io/inazuma-tailwind" />

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="194x194" href="./assets/favicon/favicon-194x194.png" />
  <link rel="icon" type="image/png" sizes="192x192" href="./assets/favicon/android-chrome-192x192.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png" />
  <link rel="manifest" href="./assets/favicon/site.webmanifest.json" />
  <link rel="mask-icon" href="./assets/favicon/safari-pinned-tab.svg" color="#7b06c9ff" />

  <!-- CSS Plugins -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
  <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />

  <link rel="stylesheet" href="./assets/css/main.css" />
  <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <style>
    .logofont {
      font-family: "Playwrite AU NSW", cursive;
      font-optical-sizing: auto;
      font-weight: 900;
      font-style: normal;
    }
    body{
      font-family: "Prompt", sans-serif;
      font-weight: 400;
      font-style: normal;
    }
  
  </style>
</head>


<body>
  <!-- Page loading -->
  <div
    class="page-loading fixed top-0 bottom-0 left-0 right-0 z-[99999] flex items-center justify-center bg-primary-light-1 dark:bg-primary-dark-1 opacity-100 visible pointer-events-auto"
    role="status" aria-live="polite" aria-atomic="true" aria-label="Loading...">
    <div class="grid-loader">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>


  <!-- Navbar -->
  <nav
    class="flex justify-center fixed w-full z-20 top-0 p-5">
    <div
      class="max-w-screen-xl flex items-center justify-between p-4 w-full bg-gradient-to-r from-gray-700 via-gray-800 to-gray-900 rounded-full shadow-lg backdrop-blur-lg bg-opacity-0">
      <a href="index.php" class="flex items-center space-x-3 rtl:space-x-reverse">
        <div class="h-8 w-8 bg-blue-600 rounded-full flex items-center justify-center">
          <span class="text-white font-bold text-sm">M</span>
        </div>
        <span class="logofont self-center text-2xl font-semibold whitespace-nowrap text-white">MeJOB</span>
      </a>

    </div>
  </nav>
    <!-- Main Content -->
  <main class="main flex-grow">
<section id="home" class="min-h-screen h-full flex flex-col bg-primary text-primary-color pt-[120px] md:pt-[130px] lg:pt-[160px] ">

<div class="container mx-auto max-w-3xl p-2 h-full flex flex-col">

        <!-- Chat Container -->
         <form method="POST" enctype="multipart/form-data">
        <div class="flex-1 drop-shadow-md bg-gradient-to-r from-gray-900 via-gray-800 to-gray-700 rounded-xl shadow-lg overflow-hidden flex flex-col min-h-0">

            <!-- File Upload Section -->
            <div class="p-4  bg-gradient-to-r from-gray-900 via-gray-800 to-gray-700">
                <div class="mb-4">
                    <label class="block text-md font-semibold text-purple-500 mb-2">📄 Step 1: Upload Resume</label>
                    <div id="file-upload-area" 
                         class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center cursor-pointer hover:border-blue-400 hover:bg-gray-700 transition-all duration-300">
                        <input type="file" id="resume-file" class="hidden" 
                               accept=".pdf,.docx,.pptx,.jpg,.jpeg,.png" name="uploaded_file">
                        <div id="upload-prompt">
                            <svg class="mx-auto h-8 w-8 text-white mb-2" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <p class="text-white text-sm font-medium">Click to upload</p>
                            <p class="text-white text-xs mt-1">PDF, DOCX, JPG, PNG</p>
                        </div>
                        <div id="file-success" class="hidden">
                            <svg class="mx-auto h-8 w-8 text-green-500 mb-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <p class="text-green-600 text-sm font-medium" id="file-name"></p>
                            <button onclick="resetFileUpload()" class="text-blue-600 text-xs mt-1 hover:underline">Change file</button>
                        </div>
                    </div>
                </div>

                <!-- Job Preference Input -->
                <div class="mb-4">
                    <label for="job-preference" class="block text-md font-semibold text-purple-500 mb-2">💼 Step 2: Desired Job</label>
                    <div class="relative">
                        <textarea 
                            id="job-preference"
                            name="job_preference"
                            rows="2"
                            class="w-full p-3 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent resize-none"
                            placeholder="e.g., Senior Software Engineer with React..."
                        ></textarea>
                        <div class="absolute bottom-2 right-2 text-xs text-gray-400" id="char-count">0/300</div>
                    </div>
                </div>

                <!-- Analyze Button -->
                <div class="text-center">
                    <button 
                        id="analyze-btn"
                        onclick=""
                        class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 disabled:from-gray-400 disabled:to-gray-500 text-white font-medium py-3 px-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 disabled:hover:translate-y-0 disabled:cursor-not-allowed text-sm rounded-full"
                    >
                        <span class="flex items-center justify-center">
                            <svg id="analyze-icon" class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                            <span id="analyze-text">Analyze Resume</span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        </form>

  </main>
    </section>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_FILES['uploaded_file']) || isset($_POST['job_preference']))) {
    if (isset($_FILES['uploaded_file'])){
        $targetDir = "file_to_text/data/";
        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $originalFilename = basename($_FILES['uploaded_file']['name']);
        $targetFilePath = $targetDir . $originalFilename;

        if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $targetFilePath)) {
            echo "File uploaded successfully: " . htmlspecialchars($originalFilename);

            // เก็บชื่อไฟล์ไว้ใช้ต่อ
            $filename = $originalFilename;


        } else {
            $filename = null;
        }
    }else{
        $filename = null;
    }
    if(isset($_POST['job_preference'])){
        if($_POST['job_preference'] != ''){
            $jobPreference = $_POST['job_preference'];
            echo "job uploaded successfully: " . $jobPreference;
        }else{
            $jobPreference = null;
        }
    }else{
        $jobPreference = null;
    }


    // ข้อมูลที่จะส่งไปพร้อมกับไฟล์ (ถ้ามี)
    if (($jobPreference != null) &&  ($filename != null)){
        $data = [
            'file' => $filename,
            'user_query' => $jobPreference
        ];
    }else if(($jobPreference == null) &&  ($filename != null)){
        $data = [
            'file' => $filename
        ];
    }else if(($jobPreference != null) &&  ($filename == null)){
        $data = [
            'user_query' => $jobPreference
        ];
    }

    if(isset($data)){
        $url = "http://localhost:8002/file_to_text";
        $jsonData = json_encode($data);
        $ch = curl_init($url);

        // ตั้งค่า curl
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Content-Length: ' . strlen($jsonData)
        ]);

        // รอกี่วินาที (timeout)
        curl_setopt($ch, CURLOPT_TIMEOUT, 120); // 300 วินาที (5 นาที)
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10); // รอการเชื่อมต่อนานสุด 10 วินาที

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'cURL Error: ' . curl_error($ch);
        } else {
            echo 'Response: ' . $response;
        }

        curl_close($ch);
    }

}
?>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-gray-700 via-gray-800 to-gray-900 shadow-sm">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="index.php" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <div class="h-8 w-8 bg-blue-600 rounded-full flex items-center justify-center">
                    <span class="text-white font-bold text-sm">M</span>
                    </div>
                    <span class="logofont self-center text-2xl font-semibold whitespace-nowrap text-white">MeJOB</span>
                </a>
                <p class="block text-sm text-white sm:text-center">Powered By<a href="https://flowbite.com/" class="hover:underline">🗒️ทีมวัดไร่ขิง🗒️</a> </p>
            </div>
            
        </div>
    </footer>



    <button type="button"
      class="inline-flex w-12 h-12 rounded-md items-center justify-center text-lg/none bg-primary text-primary-color hover:bg-primary-light-10 dark:hover:bg-primary-dark-10 focus:bg-primary-light-10 dark:focus:bg-primary-dark-10 fixed bottom-[117px] right-[20px] hover:-translate-y-1 opacity-100 visible z-50 is-hided"
      data-web-trigger="scroll-top" aria-label="Scroll to top">
      <i class="lni lni-chevron-up"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

    <script src="./assets/js/main.js"></script>
    <script>
      // Scroll Reveal
      const sr = ScrollReveal({
        origin: "bottom",
        distance: "16px",
        duration: 1000,
        reset: false,
      });

      sr.reveal(`.scroll-revealed`, {
        cleanup: true,
      });

      // GLightBox
      GLightbox({
        selector: ".video-popup",
        href: "https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM",
        type: "video",
        source: "youtube",
        width: 900,
        autoplayVideos: true,
      });

      const myGallery3 = GLightbox({
        selector: ".portfolio-box",
        type: "image",
        width: 900,
      });

      // Testimonial
      const testimonialSwiper = new Swiper(".testimonial-carousel", {
        slidesPerView: 1,
        spaceBetween: 30,

        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },

        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
          1280: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
        },
      });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script>
        let uploadedFile = null;

        // Character count for textarea
        document.getElementById('job-preference').addEventListener('input', function() {
            const count = this.value.length;
            document.getElementById('char-count').textContent = `${count}/300`;
            if (count > 300) {
                this.value = this.value.substring(0, 300);
                document.getElementById('char-count').textContent = '300/300';
            }
            checkFormValidity();
        });

        // File upload handling
        document.getElementById('file-upload-area').addEventListener('click', function() {
            if (!uploadedFile) {
                document.getElementById('resume-file').click();
            }
        });

        document.getElementById('resume-file').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                handleFileUpload(file);
            }
        });

        // Drag and drop functionality
        const uploadArea = document.getElementById('file-upload-area');
        
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            uploadArea.addEventListener(eventName, preventDefaults, false);
        });

        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }

        ['dragenter', 'dragover'].forEach(eventName => {
            uploadArea.addEventListener(eventName, highlight, false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
            uploadArea.addEventListener(eventName, unhighlight, false);
        });

        function highlight() {
            uploadArea.classList.add('border-blue-500', 'bg-blue-100');
        }

        function unhighlight() {
            uploadArea.classList.remove('border-blue-500', 'bg-blue-100');
        }

        uploadArea.addEventListener('drop', function(e) {
            const files = e.dataTransfer.files;
            if (files.length > 0) {
                handleFileUpload(files[0]);
            }
        });

    </script>
</body>

</html>