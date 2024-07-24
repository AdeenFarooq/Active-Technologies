<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Subsidiaries|Active Technologies</title>
    <link rel="icon" href="Images/1active-technologies-high-resolution-logo.png" type="image/x-icon" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="Media.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="tailwind.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
<header class="sticky top-0 bg-white shadow-md z-50">
        <!-- Navbar -->
        <nav class="container mx-auto px-6 py-4 md:px-12">
          <div class="flex items-center justify-between">
            <div class="flex-shrink-0">
              <img class="w-64 ml-4 md:ml-0" src="Images/active-technologies-high-resolution-logo-transparent.png" alt="">
            </div>
            <div class="flex items-center md:hidden">
              <!-- Mobile menu button -->
              <button id="menuBtn" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-900 hover:text-gray-900 hover:bg-gray-300 focus:outline-none focus:bg-gray-300 focus:text-gray-900 transition duration-150 ease-in-out" aria-label="Main menu" aria-expanded="false">
                <!-- Hamburger icon -->
                <svg id="menuIcon" class="h-10 w-10 block" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <!-- Close icon (hidden initially) -->
                <svg id="closeIcon" class="h-10 w-10 hidden" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
              </button>
            </div>
            <!-- Desktop menu items and search box -->
            <div class="hidden md:flex md:items-center md:ml-6">
              <div class="flex space-x-4">
                <a href="index.php" class="text-gray-900 px-3 py-2 rounded-md text-xl font-bold lg:text-3xl hover:text-cyan-400 hover:underline">Home</a>
                <a href="ceo.php" class="text-gray-900 px-3 py-2 rounded-md text-xl font-bold lg:text-3xl hover:text-cyan-400 hover:underline">About</a>
                <!-- Dropdown menu for Services -->
                <div class="relative dropdown mt-2">
                  <a href="Service.php" class="text-gray-900 px-3 py-2 rounded-md text-xl font-bold lg:text-3xl hover:text-cyan-400 hover:underline">Services</a>
                  <div class="dropdown-menu absolute hidden bg-white shadow-lg rounded-md mt-2 w-48">
                    <a href="Development.php" class="block text-gray-900 px-4 py-2 text-lg font-bold hover:bg-gray-100">Web Development</a>
                  </div>
                </div>
                <a href="Oursubsidiries.php" class="text-gray-900 px-3 py-2 rounded-md text-xl font-bold lg:text-3xl hover:text-cyan-400 hover:underline">Subsidiaries</a>
                <a href="Contactus.php" class="text-gray-900 px-3 py-2 rounded-md text-xl font-bold lg:text-3xl hover:text-cyan-400 hover:underline">Contact</a>
              </div>
              <!-- Search box -->
              <div class="ml-6">
                <input type="text" placeholder="Search..." class="bg-slate-100 text-gray-900 placeholder-gray-700 border-0 focus:outline-none focus:ring-0 w-64 px-4 py-1 rounded-md lg:text-3xl">
              </div>
            </div>
          </div>
          <!-- Mobile menu -->
          <div id="mobileMenu" class="hidden md:hidden bg-gray-300 mt-2">
            <a href="index.php" class="block text-gray-900 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-medium">Home</a>
            <a href="ceo.php" class="block text-gray-900 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-medium">About</a>
            <!-- Dropdown for mobile -->
            <div class="block">
              <a href="Service.php" class="block text-gray-900 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-medium">Services</a>
              <a href="webdevelopment.php" class="block text-gray-900 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-medium ml-4">Web Development</a>
            </div>
            <a href="Oursubsidiries.php" class="block text-gray-900 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-medium">Our Subsidiaries</a>
            <a href="Contactus.php" class="block text-gray-900 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-medium">Contact Us</a>
          </div>
        </nav>
      </header>

    <div class="subsidiriesheading">
    <div><img class=" absolute h-[50vh] w-[100%] " src="Images/bg-pheader.jpg" alt=""></div>
        <div class="cont relative flex flex-row left-0 top-0 h-[50vh] w-full justify-start items-center">
            <h1 class=" pl-24 text-5xl font-serif font-bold text-white md:text-8xl md:pl-36">Our Subsidiaries</h1>
        </div>
   </div> 
   
    <div class="submain mt-20">
        <div><img class=" absolute  h-[60vh] w-[100%]" src="Images/bg2-art-home6.png" alt=""></div>
        <div class="subtext relative flex flex-col left-0 top-0 h-[60vh] w-full justify-center items-center">
            <h3 class=" font[Nunito Sans, Sans-serif] text-2xl font-bold  text-[#7141b1] md:text-4xl lg:text-2xl ">// WE ARE AGENCY</h3>
            <h2 class=" font[Fira Sans, sans-serif] text-3xl font-bold leading-[4.5rem] text-black md:text-6xl md:py-6 lg:text-5xl  ">We are Trusted Digital Marketing Agency</h2>
            <h1 class=" font[Fira Sans, sans-serif] text-5xl font-bold leading-[4.5rem] text-black md:text-6xl md:py-6 lg:text-7xl  ">OUR SUBSIDIARIES</h1>
        </div>
    </div> 

    <footer class=" grid grid-cols-1 gap-8 px-12 py-4 md:grid-cols-2 lg:grid-cols-4 mt-16"> 
        <div class="footerlogo lg:mt-10">
            <img class=" w-[44rem]" src="Images/active-technologies-high-resolution-logo-transparent.png" alt="" height="200px">
            <div class="flex justify-center space-x-6 mt-4">
            <a href="https://facebook.com" target="_blank" class="text-blue-600 hover:text-blue-800">
              <i class="fab fa-facebook-f fa-2x text-5xl"></i>
            </a>
            <a href="https://instagram.com" target="_blank" class="text-pink-600 hover:text-pink-800">
              <i class="fab fa-instagram fa-2x text-5xl"></i>
            </a>
            <a href="https://twitter.com" target="_blank" class="text-blue-500 hover:text-blue-700">
              <i class="fab fa-twitter fa-2x text-5xl"></i>
            </a>
            <a href="https://youtube.com" target="_blank" class="text-red-600 hover:text-red-800">
              <i class="fab fa-youtube fa-2x text-5xl"></i>
            </a>
          </div>
        </div>
        <div class="IT">
            <h2 class="text-4xl font-bold lg:mt-10 lg:text-5xl ">Active Technologies</h2>
            <ul>
                <li><a class="text-3xl font-semibold hover:text-cyan-400" href="index.php">Home</a></li>
                <li><a class="text-3xl font-semibold hover:text-cyan-400" href="ceo.php">About </a></li>
                <li><a class="text-3xl font-semibold hover:text-cyan-400" href="Contactus.php">Services</a></li>
                <li><a class="text-3xl font-semibold hover:text-cyan-400 " href="Oursubsidiries.php">Subsidiaries</a></li>
                <li><a class="text-3xl font-semibold hover:text-cyan-400" href="Contactus.php">Contact</a></li>
            </ul>
        </div>
        <div class="fcard">
        
            <div class="front">
                <i class="fa-solid fa-headset"></i>
                <h3>Contact Us</h3>
                <h4>We Endeavor To Answer All Inquiries</h4>
            </div>
            <div class="back">
                <h3>Adeenfarooq12@gmail.com</h3>
                <h3>umerarain443@gmail.com</h3>
                <h3>03131394487</h3>
                <h3>03022495603</h3>
            </div>
        </div>
     
        <div class="fcard mt-96 h-[60vh] md:mt-0">
         
            <div class="front">
                <i class="fa-solid fa-handshake-simple"></i>
                <h3>Subsidiaries</h3>
                <h4>We Are Trusted Digital Marketing Agency</h4>
            </div>
            <div class="back">
                <h3>Pakistan</h3>
                <h3>Australia</h3>
                <h3>United Kingdom</h3>
            </div>
        </div>
        
    </footer> 
    <!-- JavaScript for menu toggle -->
  <script>
    const menuBtn = document.getElementById('menuBtn');
    const menuIcon = document.getElementById('menuIcon');
    const closeIcon = document.getElementById('closeIcon');
    const mobileMenu = document.getElementById('mobileMenu');

    menuBtn.addEventListener('click', function() {
      // Toggle the menu visibility
      mobileMenu.classList.toggle('hidden');
      // Toggle the hamburger and close icons
      menuIcon.classList.toggle('hidden');
      closeIcon.classList.toggle('hidden');
    });
    
  </script> 
</body>

</html>