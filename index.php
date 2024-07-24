
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Active Technologies</title>
    <link rel="icon" href="Images/1active-technologies-high-resolution-logo.png" type="image/x-icon" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">  
    <link rel="stylesheet" href="tailwind.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">        
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
 <section>
    <div class=" md:flex md:flex-row ">

        <div class="left-side md:flex md:flex-row w-3 md:w-0 lg:w-auto    ">
            <img class="img invisible w-20 lg:visible md:w-auto md:h-auto" src="Images/WhatsApp Image 2024-06-28 at 15.26.58_d58a00b3.jpg" alt="">
        </div>
        <div class="md:flex md:items-center md:w-[100%] lg:w-[73%] ">
        <img class=" px-8 md:w-auto md:h-72 md:mt-9"src="Images/active-technologies-high-resolution-logo-transparent.png" alt="" >
        </div>
        
     <div class="right-side mt-4 md:w-[100%]  ">
        <div class=" text-center md:flex-col md:py-12 md:px-12 md:text-left   ">
        <h3 class=" font[Nunito Sans, Sans-serif] text-2xl font-normal md:text-3xl md:py-2  md:px-12">// Striving for your sustainable growth</h3>
        <h1 class=" font[Fira Sans, sans-serif] text-7xl font-bold leading-[4.5rem] text-slate-800 md:text-6xl md:py-6  md:px-12">IT & Software Technologies</h1>
        <p class=" font[Fira Sans, sans-serif] font-medium text-3xl leading-10 mt-6 text-gray-700 md:px-12">Active Technologies (AT) is envisioned to serve our customers by providing complete IT services &
            Technologies.</p>
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
        
    </div>
    </section> 
    <section>

        <div class="Middle flex mt-20 px-8 md:flex md:flex-row "> 
            <div class="text">
                <H3 class=" font[Nunito Sans, Sans-serif] text-[#7141b1] text-2xl font-bold md:text-4xl md:py-2  md:px-12">//WHAT WE DO</H3>
                <h1 class=" font[Fira Sans, sans-serif] text-5xl font-bold leading-[4rem] text-black  md:text-6xl md:py-6  md:px-12">Cutting Edge Services & Technologies</h1>
            
            </div >

             <div class=" w-[48%] cursor-pointer relative top-[31px] md:flex md:top-[23px]  items-center"><button class="btn font-bold absolute right-4  text-white text-3xl bg-[#f2295b] w-[10rem] py-2 px-6 text-center h-[12vh] hover:bg-cyan-400  md:w-[14rem] ">HIRE US</button>
            </div>
            
        </div>
    </section >
    <section>
     <div class="cards mt-32 px-12 flex flex-col space-y-4 md:flex md:flex-row md:space-x-6"> 

        <div class="card  md:mt-4">
        <div class=" relative"> <img src="Images/flipbox1.jpg" alt="">
            <h1  class="heading absolute top-[35px] left-0 w-full h-full flex justify-center items-center  text-5xl font-semibold text-slate-50 md:text-5xl lg:text-6xl">Our Services </h1>
        </div>

        </div>
        <div class="card relative">
            <img  src="Images/flipbox3.jpg" alt="">
            <div class="heading absolute  top-[35px] left-0 w-full h-full flex justify-center items-center  text-5xl font-semibold text-slate-50 md:text-5xl lg:text-6xl">Our Work</div>

        </div>
        <div class="card relative">
            <img src="Images/flipbox3.jpg" alt="">
            <div class="heading absolute  top-[35px] left-0 w-full h-full flex justify-center items-center  text-5xl font-semibold text-slate-50 md:text-5xl lg:text-6xl">Our Subsidiaries</div>

        </div>
    </div>

     <section>
    
      <div class="hero mt-32   md:flex md:flex-row md:flex-auto ">   
        <div class="hero1 px-8 ">
            <img class="w-full h-full" src="Images/image1-home2.png" alt="">
        </div>
        <div class="hero2 md:w-[100%] px-8">
            <h3 class=" font[Nunito Sans, Sans-serif] text-2xl font-bold  text-[#7141b1] md:text-4xl "  >// ACTIVE TECHNOLOGIES</h3>
            <h1  class=" font[Fira Sans, sans-serif] text-5xl font-bold leading-[4.5rem] text-black  md:text-6xl">Software Development</h1>
            <p class=" font[Fira Sans, sans-serif] font-medium text-3xl leading-10 mt-6 text-gray-700 ">Active technologie is envisioned to serve our customers by providing complete branding services &
                technologies.

                Our services include Software Development, Mobile Application Development, Graphic Designing, Digital
                Marketing, Website Development, Promotional Campaigns and Business Consultancy.

                Let us build your brand !</p>
            <button class="bg-[#de7bd9] cursor-pointer align-middle text-slate-100 mt-10 h-16 font-semibold text-2xl py-4 px-6 hover:bg-slate-900">Explore our website</button>
        </div>
    </div>
    </section>
    <section>
     <div class="valuecontainer mt-36 bg-[#211e3b] md:flex md:flex-row "> 
        <div class="value px-12 pt-48 py-12 flex flex-col space-y-4 md:w-[100%] md:space-x-6">
            <h3 class=" font[Nunito Sans, Sans-serif] text-[#7141b1] text-2xl font-bold md:text-4xl md:py-2  md:px-12">// WHY ACTIVE TECHNOLOGIES</h3>
            <h1 class=" font[Fira Sans, sans-serif] text-4xl font-bold leading-[4.5rem] text-white  md:py-6  md:px-12 lg:text-5xl">Values of Active Technologies</h1>
            <p class=" font[Fira Sans, sans-serif] font-normal text-3xl leading-10 mt-6 text-slate-50 md:px-12">We at Active Technologies offer a unique advantage by having in-house sourcing of major branding services
                .
                This means that from concept to execution, our team of experts collaborates seamlessly under one roof,
                ensuring a cohesive and streamlined branding services. This approach allows us for greater creativity
                and flexibility, resulting in branding solutions that are comprehensive and tailored to your specific
                systems and goals. All of this system is further enhance with our value system</p>
        </div>
        <div class="value1 mt-32 px-12 py-12 flex flex-col space-y-4 md:grid md:grid-cols-2 md:space-y-0 md:w-[100%] md:gap-6">
            <div class="techbox relative  h-80 w-full border border-white md:h-full  ">
                <div class=" absolute left-0 top-0 w-full h-full flex flex-col justify-center items-center  hover:bg-teal-400  ">
                 <i aria-hidden="true" class="fas fa-user text-teal-400 text-6xl hover:text-white  "></i>
                 <h5 class=" text-white text-4xl " >Personalization</h5>
                </div>
            </div>
            <div class="techbox  relative h-80 w-full border border-white  md:h-full">
               <div class=" absolute left-0 top-0 w-full h-full flex flex-col justify-center items-center hover:bg-teal-400 ">
                 <i aria-hidden="true" class="fas fa-star-of-life  text-teal-400 text-6xl"></i>
                 <h5  class=" text-white text-4xl">Impact</h5>
               </div>
            </div>
            <div class="techbox  relative h-80 w-full border border-white  md:h-full">
                <div class=" absolute left-0 top-0 w-full h-full flex flex-col justify-center items-center hover:bg-teal-400 "> 
                 <i aria-hidden="true" class="fas fa-viruses  text-teal-400 text-6xl"></i>
                 <h5  class=" text-white text-4xl">Sustainability</h5>
                </div>
            </div>
             <div class="techbox  relative h-80 w-full border border-white  md:h-full">
             <div class=" absolute left-0 top-0 w-full h-full flex flex-col justify-center items-center hover:bg-teal-400 ">
                 <i aria-hidden="true" class="fas fa-university  text-teal-400 text-6xl"></i>
                 <h5  class=" text-white text-4xl">Agile</h5>
                </div>
            </div>
        </div>
     </div>
    </section>
    <main class=" px-12 mt-20"> 
        <h1 class=" font[Fira Sans, sans-serif] text-6xl font-bold leading-[4.5rem] text-black md:text-8xl  md:py-6  md:px-12">Our Clientele</h1>
        <div class="swiper-container mx-auto  relative mt-28">
            <div class="swiper-wrapper flex">
              <div class="swiper-slide ">
                <img class=" h-64 w-96 space-x-10" src="Images\WhatsApp Image 2024-06-28 at 15.26.55_ebecff08.jpg" alt="Image 1">
              </div>
              <div class="swiper-slide">
                <img  class=" h-64 w-96 space-x-10 " src="Images\WhatsApp Image 2024-06-28 at 15.26.56_b48a15f5.jpg" alt="Image 2">
              </div>
              <div class="swiper-slide">
                <img  class=" h-64 w-96 space-x-10" src="Images\WhatsApp Image 2024-06-28 at 15.26.56_fc6ce1a4.jpg" alt="Image 3">
              </div>
              <div class="swiper-slide">
                <img  class=" h-64 w-96 space-x-10" src="Images\WhatsApp Image 2024-06-28 at 15.26.57_8da6caa7.jpg" alt="Image 4">
              </div>
              <div class="swiper-slide">
                <img  class=" h-64 w-96 space-x-10" src="Images\WhatsApp Image 2024-06-28 at 15.26.57_fd30e091.jpg" alt="Image 5">
              </div>
              <div class="swiper-slide">
                <img  class=" h-64 w-96 space-x-10" src="Images\WhatsApp Image 2024-06-28 at 15.26.58_f7c72017.jpg" alt="Image 5">
              </div> 
              <div class="swiper-slide">
                <img  class=" h-64 w-96 space-x-10" src="Images\WhatsApp Image 2024-06-28 at 15.27.00_307e00ce.jpg" alt="Image 5">
              </div>
              <div  class=" h-64 w-96 space-x-10" class="swiper-slide">
                <img src="Images\WhatsApp-Image-2023-10-22-at-9.57.14-PM-1-300x146.jpeg" alt="Image 5">
              </div>
              <div class="swiper-slide ">
                <img class=" h-64 w-96 space-x-10" src="Images\WhatsApp Image 2024-06-28 at 15.26.55_ebecff08.jpg" alt="Image 1">
              </div>
              <div class="swiper-slide">
                <img  class=" h-64 w-96 space-x-10 " src="Images\WhatsApp Image 2024-06-28 at 15.26.56_b48a15f5.jpg" alt="Image 2">
              </div>
              <div class="swiper-slide">
                <img  class=" h-64 w-96 space-x-10" src="Images\WhatsApp Image 2024-06-28 at 15.26.56_fc6ce1a4.jpg" alt="Image 3">
              </div>
              <div class="swiper-slide">
                <img  class=" h-64 w-96 space-x-10" src="Images\WhatsApp Image 2024-06-28 at 15.26.57_8da6caa7.jpg" alt="Image 4">
              </div>
              <div class="swiper-slide">
                <img  class=" h-64 w-96 space-x-10" src="Images\WhatsApp Image 2024-06-28 at 15.26.57_fd30e091.jpg" alt="Image 5">
              </div>
              <div class="swiper-slide">
                <img  class=" h-64 w-96 space-x-10" src="Images\WhatsApp Image 2024-06-28 at 15.26.58_f7c72017.jpg" alt="Image 5">
              </div> 
              <div class="swiper-slide">
                <img  class=" h-64 w-96 space-x-10" src="Images\WhatsApp Image 2024-06-28 at 15.27.00_307e00ce.jpg" alt="Image 5">
              </div>
              <div  class=" h-64 w-96 space-x-10" class="swiper-slide">
                <img src="Images\WhatsApp-Image-2023-10-22-at-9.57.14-PM-1-300x146.jpeg" alt="Image 5">
              </div>
              <!-- Add more images as needed -->
            </div>
            <div class="swiper-controls">
              <button id="prevBtn" class="swiper-control h-20 w-20 text-5xl">&#8249;</button>
              <button id="nextBtn" class="swiper-control h-20 w-20  text-5xl">&#8250;</button>
            </div>
          </div>
    </main>
     <div class="counterboard grid grid-cols-2 md:grid-cols-4 gap-10 py-12"> 
        <div id="number" class=" text-8xl font-extrabold flex justify-center items-center text-cyan-400">
        
        </div>
        <div id="number2" class=" text-8xl font-extrabold flex justify-center items-center text-cyan-400">
        
        </div>
        <div id="number3" class=" text-8xl font-extrabold flex justify-center items-center text-cyan-400">
        
        </div>
        <div id="number4" class=" text-8xl font-extrabold flex justify-center items-center text-cyan-400">
        
        </div>
       
    
    </div>
    <section>
     <div class="blocks grid grid-cols-1 gap-10 md:px-12 lg:px-4 md:h-[68rem] md:border md:gap-8  w-full xl:grid xl:gap-20 xl:grid-cols-3 xl:border xl:h-[37rem] bg-gray-800 "> 
        <div class="block relative md:flex md:flex-row border rounded-2xl border-gray-800 py-4 px-4 bg-gray-900 h-[60vh] md:h-auto">
            <div class="GD absolute flex flex-col left-0 top-0 w-full h-full justify-center items-center py-4 px-8 md:ml-[13rem] md:px-12 md:py-12 md:w-auto lg:justify-start lg:items-start  ">
                <h2 class=" text-white font-bold text-6xl text-center  ">Graphic Designing</h2>
                <p class=" font[Fira Sans, sans-serif] font-normal text-3xl leading-10 mt-6 text-white
                 ">We are a design and visual marketing
                    agency here to make your dreams digital, tangible, and beautiful.</p>
            </div>
            <div class="image  ">
                <img class=" invisible md:visible md:pt-8 " src="Images/g-image.png" alt="">
            </div>
        </div>
        <div class="block1 relative md:flex md:flex-row border rounded-2xl border-gray-800 py-4 px-4  bg-gray-900 h-[60vh] md:h-auto">
            <div class="branding absolute flex flex-col left-0 top-0 w-full h-full justify-center items-center py-4 px-8 md:ml-[13rem] md:px-12 md:py-12  md:w-auto lg:justify-start lg:items-start">
                <h2 class=" text-white font-bold text-6xl text-center">Branding</h2>
                <p class=" font[Fira Sans, sans-serif] font-normal text-3xl leading-10 mt-6 text-white
                ">Grow and Develop
                    your business for the next level with us. Our team supports you in all your projects so that you can
                    achieve your objectives.</p>
            </div>
            <div class="image1">
                <img class=" invisible md:visible  md:pt-8" src="Images/b-image (1).png" alt="">
            </div>
        </div>
        <div class="block2  relative md:flex md:flex-row mt-20 lg:mt-0 border rounded-2xl border-gray-800 py-4 px-4  bg-gray-900 h-[60vh] md:h-auto">
            <div class="business absolute flex flex-col left-0 top-0 w-full h-full justify-center items-center py-4 px-8 md:ml-[13rem] md:px-12 md:py-12  md:w-auto lg:justify-start lg:items-start">
                <h2 class=" text-white font-bold text-6xl text-center" >Business Consultancy</h2>
                <p class=" font[Fira Sans, sans-serif] font-normal text-3xl leading-10 mt-6 text-white
                ">We are not only
                    qualified but also
                    experienced in
                    managing challenges like company culture,
                    internal processes or
                    need to develop a new
                    business strategy to reflect your envisioned future.</p>
            </div>
            <div class="image3">
                <img class=" invisible md:visible  md:pt-8" src="Images/b-image (1).png" alt="">
            </div>
        </div>
    </div>
    </section>
    <section>
     <div class="Contectus mt-40"> 
        <div><img class=" absolute h-[80vh] w-[100%] lg:h-[60vh]" src="Images/bg-cta-home2.jpg" alt=""></div>
        <div class="contect relative flex flex-col left-0 top-0 w-full h-[80vh] justify-center items-center lg:h-[60vh] ">
            <h3 class=" font[Nunito Sans, Sans-serif] text-white text-2xl font-bold md:text-5xl md:py-2  md:px-12 lg:text-6xl">// Ready to build your brand</h3>
            <h1 class=" font[Fira Sans, sans-serif] text-4xl font-bold leading-[4.5rem] text-white  md:py-6  md:px-12 md:text-7xl lg:text-8xl">Share your Brand Details !</h1>
            <button class=" bg-red-700 text-white font[Nunito Sans, Sans-serif] font-bold text-2xl py-4 px-6 mt-6 cursor-pointer md:text-4xl lg:text-5xl "><a href="Contactus.php">Contact US</a></button>
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
  
  <script>
     const swiperWrapper = document.querySelector('.swiper-wrapper');
        const slides = document.querySelectorAll('.swiper-slide');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        let currentIndex = 0;
        let slideWidth = slides[0].clientWidth + 20; // Include margin-right of swiper-slide
    
        function updateSlideWidth() {
          slideWidth = slides[0].clientWidth + 20; // Update slide width dynamically
        }
    
        window.addEventListener('resize', updateSlideWidth);
    
        function moveToSlide(index) {
          if (index < 0 || index >= slides.length) return;
          currentIndex = index;
          const offset = -currentIndex * slideWidth;
          swiperWrapper.style.transform = `translateX(${offset}px)`;
        }
    
        // Move to next slide
        nextBtn.addEventListener('click', () => {
          if (currentIndex < slides.length - 1) {
            currentIndex++;
            moveToSlide(currentIndex);
          }
        });
    
        // Move to previous slide
        prevBtn.addEventListener('click', () => {
          if (currentIndex > 0) {
            currentIndex--;
            moveToSlide(currentIndex);
          }
        });
    
        // Optional: Auto slide functionality
        setInterval(() => {
          if (currentIndex < slides.length - 1) {
            currentIndex++;
          } else {
            currentIndex = 0;
          }
          moveToSlide(currentIndex);
        }, 5000); // Adjust the interval (in milliseconds) as neededs
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
  
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


</body>

</html>