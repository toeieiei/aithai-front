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
      <div class="flex justify-center item ml-10 md:order-2 hover:text-white  rtl:space-x-reverse bg-gradient-to-r from-purple-700 to-blue-700 hover:from-blue-700 hover:to-purple-700 font-medium rounded-full text-md px-6 py-2 text-center transform hover:scale-105 motion-reduce:transform-none">
        <a href="get_started.php"
          class="text-white ">Get started</a>
      </div>

    </div>
  </nav>


  <main class="main relative">
    <!-- Hero section -->
    <section id="home"
      class="relative overflow-hidden bg-primary text-primary-color pt-[120px] md:pt-[130px] lg:pt-[160px]">
      <div class="container">
        <div class="-mx-5 flex flex-wrap items-center">
          <div class="w-full px-5">
            <div class="scroll-revealed mx-auto max-w-[780px] text-center">
              <h1
                class="logofont mb-6 text-5xl font-extrabold leading-snug text-primary-color sm:text-4xl sm:leading-snug lg:text-5xl lg:leading-tight">
                MeJOB
              </h1>

              <p class="mx-auto mb-9 max-w-[900px] text-base text-primary-color sm:text-lg sm:leading-normal">
                  A comprehensive resume analysis and job matching system built with microservices architecture. This system helps analyze users' resumes and find job openings that match their interests using AI-powered natural language processing.
              </p>

              <ul class="mb-10 flex flex-wrap items-center justify-center gap-4 md:gap-5">
                <li>
                  <a href="get_started.php"
                    class="inline-flex items-center justify-center rounded-full bg-primary-color text-primary px-5 py-3 text-center text-base font-medium shadow-md hover:bg-blue-400 hover:text-white md:px-7 md:py-[14px] transform hover:scale-110 motion-reduce:transform-none"
                    role="button">Get Started</a>
                </li>
              </ul>

              <div>
                <p class="mb-4 text-center text-white">Powered by</p>
                <div class="scroll-revealed flex items-center justify-center gap-4 text-center">
                  <a href="" target="_blank"
                    class="text-xl font-bold text-primary-color/60 hover:text-primary-color text">
                    🗒️ทีมวัดไร่ขิง🗒️
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full px-5">
            <div class="scroll-revealed relative z-10 mx-auto max-w-[845px]">
              <figure class="mt-16">
                <img src="./assets/img/hero.png" alt="Hero image"
                  class="mx-auto max-w-full rounded-t-xl rounded-tr-xl" />
              </figure>

              <div class="absolute -left-9 bottom-0 z-[-1]">
                <img src="./assets/img/dots.svg" alt class="w-[120px] opacity-75" />
              </div>

              <div class="absolute -right-6 -top-6 z-[-1]">
                <img src="./assets/img/dots.svg" alt class="w-[120px] opacity-75" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About section -->
    <section id="about" class="section-area bg-gradient-to-r from-gray-900 via-gray-800 to-gray-700">
      <div class="container">
        <div class="grid grid-cols-1 gap-14 lg:grid-cols-2">
          <div class="w-full">
            <figure class="scroll-revealed max-w-[480px] mx-auto">
              <img src="./assets/img/about-img.jpg" alt="About image" class="rounded-xl" />
            </figure>
          </div>

          <div class="w-full">
            <div class="scroll-revealed">
              <h6 class="mb-2 block text-lg font-semibold text-primary">
                About Us
              </h6>
              <h2 class="mb-6 text-purple-500">
                Our team comes with the experience and knowledge
              </h2>
            </div>

            <div class="tabs scroll-revealed">

              <div class="tabs-content mt-4 text-white" id="tabs-panel-profile" tabindex="-1" role="tabpanel"
                aria-labelledby="tabs-list-profile">
                <p>
                  It is a long established fact that a reader will be
                  distracted by the readable content of a page when looking at
                  its layout. The point of using Lorem Ipsum is that it has a
                  more-or-less normal distribution of letters, look like
                  readable English.
                </p>
                <p>
                  There are many variations of passages of Lorem Ipsum
                  available, but the majority have in some form, by injected
                  humour.
                </p>
              </div>

              <div class="tabs-content mt-4 text-white" id="tabs-panel-vision" tabindex="-1" role="tabpanel"
                aria-labelledby="tabs-list-vision">
                <p>
                  It is a long established fact that a reader will be
                  distracted by the readable content of a page when looking at
                  its layout. The point of using Lorem Ipsum is that it has a
                  more-or-less normal distribution of letters, look like
                  readable English.
                </p>
                <p>
                  There are many variations of passages of Lorem Ipsum
                  available, but the majority have in some form, by injected
                  humour.
                </p>
              </div>

              <div class="tabs-content mt-4 text-white" id="tabs-panel-history" tabindex="-1" role="tabpanel"
                aria-labelledby="tabs-list-history">
                <p>
                  It is a long established fact that a reader will be
                  distracted by the readable content of a page when looking at
                  its layout. The point of using Lorem Ipsum is that it has a
                  more-or-less normal distribution of letters, look like
                  readable English.
                </p>
                <p>
                  There are many variations of passages of Lorem Ipsum
                  available, but the majority have in some form, by injected
                  humour.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Services section -->
    <section id="services" class="section-area bg-gradient-to-r from-gray-900 via-gray-800 to-gray-700">
      <div class="container">
        <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
          <h6 class="mb-2 block text-lg font-semibold text-primary">
            Services
          </h6>
          <h2 class="mb-6 text-purple-500">Our Best Services</h2>
          <p class="text-white">
            There are many variations of passages of Lorem Ipsum available but
            the majority have suffered alteration in some form.
          </p>
        </div>

        <div class="row">
          <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
            <div class="group hover:-translate-y-1">
              <div
                class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color">
                <i class="lni lni-capsule"></i>
              </div>
              <div class="w-full">
                <h4 class="text-[1.25rem]/tight font-semibold mb-5 text-purple-500">
                  Refreshing Design
                </h4>
                <p class="text-white">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Voluptatum dolores autem quidem odit beatae perspiciatis!
                  Rem.
                </p>
              </div>
            </div>
          </div>

          <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
            <div class="group hover:-translate-y-1">
              <div
                class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color">
                <i class="lni lni-tailwindcss"></i>
              </div>
              <div class="w-full">
                <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                  Solid Tailwind CSS
                </h4>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Voluptatum dolores autem quidem odit beatae perspiciatis!
                  Rem.
                </p>
              </div>
            </div>
          </div>

          <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
            <div class="group hover:-translate-y-1">
              <div
                class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color">
                <i class="lni lni-gift"></i>
              </div>
              <div class="w-full">
                <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                  Free and Open-Source
                </h4>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Voluptatum dolores autem quidem odit beatae perspiciatis!
                  Rem.
                </p>
              </div>
            </div>
          </div>

          <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
            <div class="group hover:-translate-y-1">
              <div
                class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color">
                <i class="lni lni-layout"></i>
              </div>
              <div class="w-full">
                <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                  Multipurpose Template
                </h4>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Voluptatum dolores autem quidem odit beatae perspiciatis!
                  Rem.
                </p>
              </div>
            </div>
          </div>

          <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
            <div class="group hover:-translate-y-1">
              <div
                class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color">
                <i class="lni lni-layers"></i>
              </div>
              <div class="w-full">
                <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                  Fully Customizable
                </h4>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Voluptatum dolores autem quidem odit beatae perspiciatis!
                  Rem.
                </p>
              </div>
            </div>
          </div>

          <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
            <div class="group hover:-translate-y-1">
              <div
                class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color">
                <i class="lni lni-grid-alt"></i>
              </div>
              <div class="w-full">
                <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                  All Essential Elements
                </h4>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Voluptatum dolores autem quidem odit beatae perspiciatis!
                  Rem.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- Team section -->
    <section id="team" class="section-area">
      <div class="container">
        <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
          <h6 class="mb-2 block text-lg font-semibold text-primary">Team</h6>
          <h2 class="mb-6">Our Creative Team</h2>
          <p>
            There are many variations of passages of Lorem Ipsum available but
            the majority have suffered alteration in some form.
          </p>
        </div>

        <div class="row">
          <div class="scroll-revealed col-12 sm:col-6 md:col-4 lg:col-3">
            <figure
              class="group rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 pb-10 pt-12 shadow-card-2 hover:shadow-lg hover:-translate-y-1">
              <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                <img src="./assets/img/avatar/avatar-1.jpg" alt="Team picture"
                  class="h-full w-full rounded-full object-cover" />
                <span
                  class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-red-500 opacity-0 group-hover:opacity-100"></span>
                <span
                  class="absolute top-0 right-0 -z-10 h-10 w-10 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100"></span>
              </div>
              <figcaption class="text-center block">
                <h4 class="mb-1 text-lg font-semibold text-body-light-12 dark:text-body-dark-12">
                  Garret Edwards
                </h4>
                <p class="mb-5 text-sm text-body-light-11 dark:text-body-dark-11">
                  Art Director
                </p>
                <div class="flex items-center justify-center gap-5">
                  <a href="javascript:void(0)" class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                    <i class="lni lni-facebook-fill"></i>
                  </a>
                  <a href="javascript:void(0)" class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                    <i class="lni lni-twitter-original"></i>
                  </a>
                  <a href="javascript:void(0)" class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                    <i class="lni lni-instagram-original"></i>
                  </a>
                </div>
              </figcaption>
            </figure>
          </div>

          <div class="scroll-revealed col-12 sm:col-6 md:col-4 lg:col-3">
            <figure
              class="group rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 pb-10 pt-12 shadow-card-2 hover:shadow-lg hover:-translate-y-1">
              <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                <img src="./assets/img/avatar/avatar-2.jpg" alt="Team picture"
                  class="h-full w-full rounded-full object-cover" />
                <span
                  class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-red-500 opacity-0 group-hover:opacity-100"></span>
                <span
                  class="absolute top-0 right-0 -z-10 h-10 w-10 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100"></span>
              </div>
              <figcaption class="text-center block">
                <h4 class="mb-1 text-lg font-semibold text-body-light-12 dark:text-body-dark-12">
                  Jonathan Leeson
                </h4>
                <p class="mb-5 text-sm text-body-light-11 dark:text-body-dark-11">
                  Web Developer
                </p>
                <div class="flex items-center justify-center gap-5">
                  <a href="javascript:void(0)" class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                    <i class="lni lni-facebook-fill"></i>
                  </a>
                  <a href="javascript:void(0)" class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                    <i class="lni lni-twitter-original"></i>
                  </a>
                  <a href="javascript:void(0)" class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                    <i class="lni lni-instagram-original"></i>
                  </a>
                </div>
              </figcaption>
            </figure>
          </div>

          <div class="scroll-revealed col-12 sm:col-6 md:col-4 lg:col-3">
            <figure
              class="group rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 pb-10 pt-12 shadow-card-2 hover:shadow-lg hover:-translate-y-1">
              <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                <img src="./assets/img/avatar/avatar-3.jpg" alt="Team picture"
                  class="h-full w-full rounded-full object-cover" />
                <span
                  class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-red-500 opacity-0 group-hover:opacity-100"></span>
                <span
                  class="absolute top-0 right-0 -z-10 h-10 w-10 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100"></span>
              </div>
              <figcaption class="text-center block">
                <h4 class="mb-1 text-lg font-semibold text-body-light-12 dark:text-body-dark-12">
                  Joe Russell
                </h4>
                <p class="mb-5 text-sm text-body-light-11 dark:text-body-dark-11">
                  UX Designer
                </p>
                <div class="flex items-center justify-center gap-5">
                  <a href="javascript:void(0)" class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                    <i class="lni lni-facebook-fill"></i>
                  </a>
                  <a href="javascript:void(0)" class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                    <i class="lni lni-twitter-original"></i>
                  </a>
                  <a href="javascript:void(0)" class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                    <i class="lni lni-instagram-original"></i>
                  </a>
                </div>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </section>



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
</body>

</html>