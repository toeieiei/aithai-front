<nav class="m-2 rounded-2xl sticky top-0 z-10" style ='font-family: "Arya", system-ui;'>
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
    <a href="index.php" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="..." class="w-12 h-auto transition duration-500 hover:scale-125" />
    </a>
    <button data-collapse-toggle="navbar-solid-bg" type="button" class="bg-white  rounded-full inline-flex items-center w-10 h-10 justify-center text-sm md:hidden" aria-controls="navbar-solid-bg" aria-expanded="false">
        <span class="sr-only bg-red-400">Open main menu</span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10" stroke="#2F6F57" stroke-width=".6" fill="rgba(0,0,0,0)" stroke-linecap="round" style="cursor: pointer">
  <path d="M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7">
    <animate dur="0.2s" attributeName="d" values="M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7;M3,3L5,5L7,3M5,5L5,5M3,7L5,5L7,7" fill="freeze" begin="start.begin" />
    <animate dur="0.2s" attributeName="d" values="M3,3L5,5L7,3M5,5L5,5M3,7L5,5L7,7;M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7" fill="freeze" begin="reverse.begin" />
  </path>
  <rect width="10" height="10" stroke="none">
    <animate dur="2s" id="reverse" attributeName="width" begin="click" />
  </rect>
  <rect width="10" height="10" stroke="none">
    <animate dur="0.001s" id="start" attributeName="width" values="10;0" fill="freeze" begin="click" />
    <animate dur="0.001s" attributeName="width" values="0;10" fill="freeze" begin="reverse.begin" />
  </rect>
</svg>
    </button>
    <div class="hidden w-full md:block md:w-auto md:bg-white md:backdrop-filter md:backdrop-blur-lg md:bg-opacity-80 md:rounded-full md:p-1" id="navbar-solid-bg">
      <ul class="bg-white backdrop-filter backdrop-blur-lg bg-opacity-80 md:bg-trasparent md:bg-opacity-0 md:backdrop-blur-none md:backdrop-filter-none rounded-2xl p-2 flex flex-col font-medium mt-4 bg-inherit md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent ">
        <li>
          <a href="index.php" class=" <?php if($_SESSION['page'] == 'home'){ echo 'border-2 border-blue-700'; } ?> rounded-full
          block font-semibold text-blue py-2 px-2  hover:text-blue  hover:bg-slate-300/75
          transition delay-75 duration-300 ease-in-out">Home</a>
        </li>
        <li>
          <a href="camera.php" class=" <?php if($_SESSION['page'] == 'started'){ echo 'border-2 border-blue-700'; } ?> rounded-full
          block font-semibold text-blue py-2 px-2  hover:text-blue hover:bg-slate-300/75
          transition delay-75 duration-300 ease-in-out">Get Started</a>
        </li>

        <?php 
        if (isset($_SESSION['username'])){
          echo '<li>
          <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full rounded-full font-semibold text-black py-2 px-2 hover:text-blue hover:bg-slate-300/75 transition delay-75 duration-300 ease-in-out">
          '.$_SESSION['username'].'<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
          </svg></button>
                    <div id="dropdownNavbar" class="z-10 hidden font-normal divide-y divide-gray-100 rounded-lg shadow w-44 bg-white backdrop-filter backdrop-blur-lg bg-opacity-80">
                        <form action="index.php" method="post">
                        <div class="py-1">
                          <button type="submit" name="log_out" value="true" class="flex w-full px-4 py-2 text-sm font-bold text-red-600 hover:bg-slate-300/75 transition delay-75 duration-300 ease-in-out">Log out</a>
                        </div>
                        </form>
                    </div>
                </li>';
        }else{
          echo '<li>
          <a href="login.php" class="';
          if($_SESSION['page'] == 'log_in'){ echo 'border-2 border-blue-700'; }
          echo ' rounded-full block font-semibold text-blue py-2 px-2  hover:text-blue hover:bg-slate-300/75 
            transition delay-75 duration-300 ease-in-out">Log In</a>
          </li>';
        } 
?>
        
      </ul>
      </div>
  </div>
</nav>
