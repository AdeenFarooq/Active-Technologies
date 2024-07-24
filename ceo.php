
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEO|Active Technologies</title>
    <link rel="icon" href="Images/1active-technologies-high-resolution-logo.png" type="image/x-icon" >
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="stylesheet" href="Media.css">
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

 <div class="Aboutceo">
 <div><img class=" absolute h-[50vh] w-[100%] " src="Images/bg-pheader.jpg" alt=""></div>
        <div class="cont relative flex flex-row left-0 top-0 h-[50vh] w-full justify-start items-center">
            <h1 class=" pl-24 text-5xl font-serif font-bold text-white md:text-8xl md:pl-36">ABOUT CEO</h1>
        </div>
</div>
<section>
    <div class=" lg:grid lg:grid-cols-2   ">
     <div class="right-side mt-4 md:w-[100%] lg:ml-24 max-lg:py-12  ">
        <div class=" text-center md:flex-col md:py-12 md:px-12 md:text-left  lg:mt-40 ">
        <h3 class=" font[Nunito Sans, Sans-serif] text-[#7141b1] text-2xl font-normal md:text-3xl md:py-2  md:px-12 lg:text-4xl">// WHAT WE OFFER</h3>
        <h1 class=" font[Fira Sans, sans-serif] text-7xl font-bold leading-[4.5rem] text-black md:text-6xl md:py-6  md:px-12 lg-text-8xl">We’re Your Partner in Your Success</h1>
        <p class=" font[Fira Sans, sans-serif] font-medium text-3xl leading-10 mt-6 text-gray-700 md:px-12 lg:text-4xl ">SS is the partner of choice for many of the world’s leading enterprises, SMEs and technology challengers. We help businesses elevate their value through custom software development, product design, and consultancy services.</p>
        <h3 class=" font[Nunito Sans, Sans-serif] mt-12 text-black text-5xl font-semibold md:text-3xl md:py-2  md:px-12 lg:text-4xl">We are always strive for your Growth.
        Let us Contribute</h3>
            <div class="btn ml-20 md:items-center">
                <div class="play"></div>
                <p class="playp absolute text-xl ">Play Video</p>
            </div>
            <div class="clip">
                <video src="Images/852424-hd_1920_1080_24fps.mp4" controls></video>
                <b class="close">close</b>
            </div> 
        </div>
     </div>
     <div class="cards mt-32 px-12 grid grid-cols-1 space-y-4 md:grid md:grid-cols-2  lg:mt-16 md:space-x-6  md:w-[100%]"> 

        <div class="card md:mt-[10px] md:ml-[15px]">
        <div class=" relative "> <img src="Images/image-box1.jpg" alt="">
            <h1  class="heading absolute top-0 left-0 w-full h-full flex justify-center items-center  text-5xl font-semibold text-slate-50 md:text-4xl lg:text-6xl">Our Mission </h1></div>

        </div>
        <div class="card ">
            <div class=" relative"><img  src="Images/image-box2.jpg" alt="">
            <h1  class="heading absolute top-0 left-0 w-full h-full flex justify-center items-center  text-5xl font-semibold text-slate-50 md:text-4xl lg:text-6xl">Our Vision </h1></div>
            

        </div>
        <div class="card ">
            <div class=" relative"><img  src="Images/image-box3.jpg" alt="">
            <h1  class="heading absolute top-0 left-0 w-full h-full flex justify-center items-center  text-5xl font-semibold text-slate-50 md:text-4xl lg:text-6xl">Our Philosophy </h1></div>
            

        </div>
        <div class="card ">
            <div class=" relative"><img  src="Images/image-box4.jpg" alt="">
            <h1  class="heading absolute top-0 left-0 w-full h-full flex justify-center items-center  text-5xl font-semibold text-slate-50 md:text-4xl lg:text-6xl">Our Strategy </h1></div>
            

        </div>
    </div>
    </div>
    </section>
    <section>
    <div class="submain mt-20">
        <div><img class=" absolute  h-[60vh] w-[100%]" src="Images/bg2-art-home6.png" alt=""></div>
        <div class="subtext relative flex flex-col left-0 top-0 h-[60vh] w-full justify-center items-center">
            <h3 class=" font[Nunito Sans, Sans-serif] text-2xl font-bold  text-[#7141b1] md:text-4xl lg:text-2xl ">// WE ARE AGENCY</h3>
            <h2 class=" font[Fira Sans, sans-serif] text-3xl font-bold leading-[4.5rem] text-black md:text-6xl md:py-6 lg:text-5xl  ">We are Trusted</h2>
            <h1 class=" font[Fira Sans, sans-serif] text-5xl font-bold leading-[4.5rem] text-black md:text-6xl  lg:text-7xl  ">Digital Marketing Agency  </h1>
            </div>
        </div>
        <div class="hero1 px-8 w-[100%]  ">
            <div class=" h-full w-[full] relative flex flex-col left-0 top-0  justify-center items-center" src="Images/image1-home2.png"><img class=" " src="Images/image1-home2.png" alt="">
            </div>
        </div>
    </div> 
    </section>
    <section>
      <div class="Blocks grid grid-cols-1 md:grid md:grid-cols-2 lg:grid lg:grid-cols-3 gap-10 px-12">
        <div class="lblock flex flex-row justify-center border py-6 px-6 shadow shadow2xl  shadow-slate-400 transform transition-transform duration-300 hover:scale-95 p-4 bg-white rounded cursor-pointer  ">
        <i class="fa-solid fa-square-check text-5xl text-purple-500 py-4 px-6"></i>
          <div>
            <h1 class="text-4xl font-semibold leading-10">Brand Concept Designing</h1>
            <h2 class="text-3xl font-medium text-gray-400 leading-10 ">(Logo, Themes, Portfolio)</h2>
          </div>

        </div>
        <div class="lblock flex flex-row justify-center border py-6 px-6 shadow shadow2xl  shadow-slate-400 transform transition-transform duration-300 hover:scale-95 p-4 bg-white rounded cursor-pointer  ">
        <i class="fa-solid fa-square-check text-5xl text-cyan-500 py-4 px-6"></i>
          <div>
            <h1 class="text-4xl font-semibold leading-10 ">Mobile Application</h1>
            <h2 class="text-3xl font-medium text-gray-400 leading-10">(ISO, Android, Flutter developer.)</h2>
          </div>

        </div>
        <div class="lblock flex flex-row justify-center border py-6 px-6 shadow shadow2xl  shadow-slate-400 transform transition-transform duration-300 hover:scale-95 p-4 bg-white rounded cursor-pointer   ">
        <i class="fa-solid fa-square-check text-5xl text-blue-800 py-4 px-6"></i>
          <div>
            <h1 class="text-4xl font-semibold leading-10 ">Software Development</h1>
            <h2 class="text-3xl font-medium text-gray-400 leading-10 ">(POS, ERP, Customize, etc.)</h2>
          </div>

        </div>
      </div>
    </section>

    <section>
    <div class=" lg:flex lg:flex-row mt-24 bg-[#21203b]">

        <div class="md:flex md:items-center py-12  md:w-[100%] lg:w-[73%] ">
        <img class=" px-8 md:w-full md:h-auto md:mt-9"src=" Images/image1-about.png" alt="" >
        </div>
        
     <div class="right-side mt-4 md:w-[100%]  ">
        <div class=" text-start md:flex-col px-6 md:py-12 md:px-12 md:text-left   ">
        <h3 class=" font[Nunito Sans, Sans-serif] text-[#7141b1] text-2xl font-normal md:text-3xl md:py-2  md:px-12 md:text-center lg:text-left">// EXPERIENCE. EXECUTION. EXCELLENCE.</h3>
        <h1 class=" font[Fira Sans, sans-serif] text-6xl font-bold leading-[4.5rem] text-white md:text-6xl md:py-6  md:px-12 md:text-center lg:text-left">What We Actually Do</h1>
        <div class="box flex flex-row md:justify-center  lg:justify-start space-x-8 py-8 lg:ml-12 ">
          <div class="techbox border border-slate-50 ">
          <i class="fa-brands fa-php text-7xl py-4 px-4 text-[#43baff] cursor-pointer"></i>
          </div>
          <div class="techbox border border-slate-50">
          <i class="fa-brands fa-laravel text-7xl py-4 px-4 text-[#43baff] cursor-pointer"></i>
          </div>
          <div class="techbox border border-slate-50">
          <i class="fa-solid fa-paint-roller text-7xl py-4 px-4 text-[#43baff] cursor-pointer"></i>
          </div>
          <div class="techbox border border-slate-50">
          <i class="fa-solid fa-pen-to-square text-7xl py-4 px-4 text-[#43baff] cursor-pointer"></i>
          </div>
        </div>
        <h2 class=" font[Nunito Sans, Sans-serif] text-4xl leading-[4.5rem] text-white font-semibold md:text-6xl md:py-2  md:px-12 md:text-center lg:text-left">Software Developer</h2>
        <p class=" font[Fira Sans, sans-serif] font-medium text-3xl leading-10 mt-6 text-slate-100 md:px-12 md:text-center lg:text-left">We play a critical role in the creation and maintenance of software applications. Our journey begins with requirement analysis, where we collaborate with clients, project managers, and end-users to gather and translate business needs into technical specifications. We then design software solutions, ensuring they are scalable, reliable, and maintainable, often creating detailed design documents and diagrams.</p>
            
        </div>
     </div>
        
    </div>
    </section> 
    <section>
      <div class=" w-full bg-[#21203b] mt-[-21px]">
       <div class="counterboard grid grid-cols-2 md:grid-cols-4 gap-10 py-12 bg-gradient-to-r from-blue-700 via-purple-500 to-teal-300 xl:w-[80%] xl:ml-64"> 
        <div id="number" class=" text-8xl font-extrabold flex  justify-center items-center text-white">
        
        </div>
        <div id="number2" class=" text-8xl font-extrabold flex justify-center items-center text-white">
        
        </div>
        <div id="number3" class=" text-8xl font-extrabold flex justify-center items-center text-white">
        
        </div>
        <div id="number4" class=" text-8xl font-extrabold flex justify-center items-center text-white">
        
        </div>
       
    
    </div>
    
    </div>
    <section>
        <div class=" md:grid md:grid-cols-2 px-12">
          <div class="right xl:mt-40">
            <div class=" py-12 px-12"><h1 class=" font[Fira Sans, sans-serif] text-5xl font-bold leading-[4.5rem] text-black md:text-6xl md:py-6  md:px-12">Improve and Innovate with the SS</h1>
            <p class=" font[Fira Sans, sans-serif] font-medium text-3xl leading-[3rem] mt-6 text-gray-500 md:px-12">We hire and build your own remote dedicated development teams tailored to your specific needs.</p>
           
            <h1 class=" font[Nunito Sans, Sans-serif] text-3xl font-bold md:text-3xl md:py-2  md:px-12 leading-[4.5rem] lg:leading-[6rem] ">SOFTWARE DEVELOPMENT 97%</h1>
            <h1 class=" font[Nunito Sans, Sans-serif] text-3xl font-bold md:text-3xl md:py-2  md:px-12 leading-[4.5rem] lg:leading-[6rem] ">WEB DEVELOPMENT 93%</h1>
            <h1 class=" font[Nunito Sans, Sans-serif] text-3xl font-bold md:text-3xl md:py-2  md:px-12 leading-[4.5rem] lg:leading-[6rem] ">GRAPHIC DESIGN 88%</h1>
            </div>
          </div>
          <div class="left">
            <img class=" w-auto h-auto "src="Images/gears-isolated_134830-725.avif" alt="" >
          </div>
        </div>
    </section> 
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
  <script>
    let number = document.getElementById("number");
    let counter = 0;
    setInterval(() => {
        if(counter == 100){
            clearInterval();
        }else{
            counter += 1;
            number. innerHTML = counter + "+" ;
        }
    },20);
    let number2 = document.getElementById("number2");
    let counter2 = 0;
    setInterval(() => {
        if(counter2 == 50){
            clearInterval();
        }else{
            counter2 += 1;
            number2. innerHTML = counter2 + "+" ;
        }
    },20);
    let number3 = document.getElementById("number3");
    let counter3 = 0;
    setInterval(() => {
        if(counter3 == 20){
            clearInterval();
        }else{
            counter3 += 1;
            number3. innerHTML = counter3 + "+" ;
        }
    },20);
    let number4 = document.getElementById("number4");
    let counter4 = 0;
    setInterval(() => {
        if(counter4 == 5){
            clearInterval();
        }else{
            counter4 += 1;
            number4. innerHTML = counter4 + "+" ;
        }
    },20);
  </script>
</body>
</html>