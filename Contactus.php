
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContactUs|Active Technologies</title>
    <link rel="icon" href="Images/1active-technologies-high-resolution-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="Media.css">
    <link rel="stylesheet" href="tailwind.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<link rel="stylesheet" href="style.css"> 
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

    <div class="Contactheading">
        <div><img class=" absolute h-[50vh] w-[100%]" src="Images/bg-pheader.jpg" alt=""></div>
        <div class="cont relative flex flex-row left-0 top-0 h-[50vh] w-full justify-start items-center">
            <h1 class=" pl-24 text-6xl font-serif font-bold text-white md:text-8xl md:pl-36">Contact Us</h1>
        </div>
    </div>
    <div class="Contactdetail mt-12 py-12 px-12 lg:flex lg:flex-row lg:w-[100%] lg:space-x-4">
        <div class="detail lg:w-[100%]">
            <h3  class=" font[Nunito Sans, Sans-serif] text-2xl font-bold  text-[#7141b1] md:text-4xl lg:text-2xl ">// CONTACT DETAILS</h3>
            <h1 class=" font[Fira Sans, sans-serif] text-7xl font-bold leading-[4.5rem] text-slate-800 md:text-9xl md:py-6 lg:text-5xl  ">Contact us</h1>
            <p class=" font[Fira Sans, sans-serif] font-medium text-3xl leading-10 mt-6 text-black md:text-5xl lg:text-3xl ">Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days.
                We will be happy to answer your questions.</p>
            <div class="address flex flex-row space-x-4 py-12">
                <i class="fa-solid fa-globe text-5xl text-teal-400 md:text-8xl lg:text-6xl"></i>
                <div class="add">
                    <h2 class=" text-3xl font-serif font-semibold md:text-7xl lg:text-4xl">Our address:</h2>
                    <h4 class=" text-xl font-serif font-medium text-gray-400 md:text-4xl lg:text-2xl">Shahzeenabad, G.T road, Gujranwala, Pakistan</h4>
                </div>
            </div>
            <div class="address flex flex-row  space-x-4 py-6">
                <i class="fa-solid fa-envelope text-5xl text-teal-400 md:text-8xl lg:text-6xl"></i>
                <div class="add">
                    <h2  class=" text-3xl font-serif font-semibold md:text-7xl lg:text-4xl">Our Mailbox:</h2>
                    <h4 class=" text-xl font-serif font-medium text-gray-400 md:text-4xl lg:text-2xl">adeenfarooq12@gmail.com</h4>
                    <h4 class=" text-xl font-serif font-medium text-gray-400 md:text-4xl lg:text-2xl">umerarain443@gmail.com</h4>
                </div>
            </div>
            <div class="address flex flex-row  space-x-4 py-6">
                <i class="fa-solid fa-phone-volume text-5xl text-teal-400 md:text-8xl lg:text-6xl"></i>
                <div class="add">
                    <h2  class=" text-3xl font-serif font-semibold md:text-7xl lg:text-4xl">Our Phone:</h2>
                    <h4 class=" text-xl font-serif font-medium text-gray-400 md:text-4xl lg:text-2xl">03131394487</h4>
                    <h4 class=" text-xl font-serif font-medium text-gray-400 md:text-4xl lg:text-2xl">03022495603</h4>
                </div>
            </div>
        </div>
        <div class="contactform border bg-gradient-to-r from-blue-700 via-purple-500 to-teal-300">
            <h1 class=" text-center text-white text-2xl px-4 pt-4 font-mono md:text-4xl font-semibold">Ready to Get Started?</h1>
            <h4 class=" text-center text-white text-2xl px-4 font-mono md:text-4xl font-semibold">Your email address will not be published. Required fields are marked *</h4>
            <form class=" px-5 py-12 bg-gradient-to-r from-blue-700 via-purple-500 to-teal-300">
                <div class="for h-16 border border-cyan-500 md:h-28 lg:h-20  "><label for="firstname" ></label>
                    <input class="bg-gradient-to-r from-blue-700 via-purple-500 to-teal-300 h-full w-full text-white" type="text" name="text" placeholder="Your Name" required>
                </div>
                <br>
                <div class="for h-16 border border-cyan-500 md:h-28 lg:h-20 "><label for="email"></label>
                    <input class="bg-gradient-to-r from-blue-700 via-purple-500 to-teal-300 h-full w-full text-white" type="email" name="email" placeholder="Your email" required>
                </div>
                <br>
                <div class="for h-16 border border-cyan-500 md:h-28 lg:h-20"><label for="Age" > </label>
                    <input class="bg-gradient-to-r  from-blue-700 via-purple-500 to-teal-300 h-full w-full text-white" type="number" name="Age" placeholder="Your Age" required>
                </div>
                <br>
                <div class="for border border-cyan-500 h-[25vh] md:h-[35vh] lg:h-[25vh]"><label for="Message"> </label>
                    <input class="bg-gradient-to-r  from-blue-700 via-purple-500 to-teal-300 h-full w-full text-white" id="Massage" name="Massage" placeholder="Massage..." required>
                </div>
                <br>
                <button class=" bg-white border border-cyan-500 text-lg font-semibold font-serif py-2 px-4 cursor-pointer md:text-4xl">SEND MESSAGE</button>
            </form>
        </div>
        
    </div>
    <div class="map">
        <iframe class=" w-full h-[60vh] mt-28"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115348.3182428283!2d68.28433285673056!3d25.383548455677257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394c70f6d444f3c3%3A0xc00bbc183d41e285!2sHyderabad%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1719772969710!5m2!1sen!2s"
             style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
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