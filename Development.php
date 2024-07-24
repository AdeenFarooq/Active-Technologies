<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Development</title>
    <link rel="icon" href="Images/1active-technologies-high-resolution-logo.png" type="image/x-icon" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">  
    <link rel="stylesheet" href="tailwind.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class=" w-[100vw] overflow-x-hidden ">
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
 <div><img class=" absolute h-[50vh] w-[100vw] " src="Images/bg-pheader.jpg" alt=""></div>
        <div class="cont relative flex flex-row left-0 top-0 h-[50vh] w-full justify-start items-center">
            <h1 class=" pl-4 sm:pl-24 text-3xl font-serif font-bold text-white md:text-6xl md:pl-36">Website Development</h1>
        </div>
</div>
<section>
    <div class="services px-8 sm:px-20">
        <h1 class="text-6xl font-bold flex justify-center my-6 text-[#2497cf] px-8">Web Development Services: Pinnacle of Innovation</h1>
        <p class=" text-xl font-bold leading-7 sm:leading-9 font-serif">At LIT, we understand the pivotal role a website plays in establishing and expanding your brand’s footprint. Our expertise lies in curating tailored web solutions that seamlessly blend aesthetics, functionality, and user experience. Whether you’re a startup navigating the digital landscape or an established enterprise seeking a revamp, our team is dedicated to turning your vision into reality</p>
    </div>
</section>
<section>
    <div class="Power mt-20 px-8 sm:px-20 md:grid md:grid-cols-2 md:gap-8">
        <div class="right">
            <h1 class="text-5xl font-bold flex justify-center my-6 text-[#2497cf] ">Unleashing the Power of Technology</h1>
        </div>
        <div class="left mt-20 md:mt-0">
            <p class=" text-xl font-bold leading-7 sm:leading-9 font-serif ">Our comprehensive suite of web development services caters to every facet of your digital journey. From conceptualization to deployment, we harness the latest technologies to create websites that are not just visually stunning but also robust in performance.</p>
        </div>
    </div>
</section>
<section>
    <div class="Middle px-8 sm:px-20">
        <h1 class="text-7xl font-bold flex justify-center my-12 text-[#2497cf]  ">Tailored Solutions for Every Need</h1>
    </div>
</section>
<section>
    <div class="card grid gap-16 px-8 md:gap-8 sm:px-20  md:grid-cols-4">
        <div class="cards">
            <h1 class=" font-bold text-xl my-4">Designing Your Digital Identity</h1>
            <p class=" font-normal text-lg leading-7 font-serif">Our website designing services go beyond aesthetics; we craft digital identities that resonate with your brand ethos. Through meticulous design, we ensure that your website is not just a platform but an experience for your audience.</p>
        </div>
        <div class="cards">
            <h1 class=" font-bold text-xl my-4">Content that Captivates</h1>
            <p class=" font-normal text-lg leading-7 font-serif">Content is the heartbeat of every website. Our seasoned content creators weave narratives that engage, inform, and convert. Elevate your brand story with compelling website content that leaves a lasting impression.</p>
        </div>
        <div class="cards">
            <h1 class=" font-bold text-xl my-4">SEO Mastery</h1>
            <p class=" font-normal text-lg leading-7 font-serif">Visibility is the key to digital success. Our SEO experts employ strategies that propel your website to the top of search engine rankings. Stay ahead of the competition with our SEO services tailored for maximum impact.</p>
        </div>
        <div class="cards">
            <h1 class=" font-bold text-xl my-4">Domain and Hosting Excellence</h1>
            <p class=" font-normal text-lg leading-7 font-serif">A seamless online experience begins with a reliable domain and hosting. Trust our experts to guide you to the optimal choices, ensuring your website is always accessible and responsive.</p>
        </div>
    </div>
</section>
<section>
    <div class="Middle px-8 sm:px-20">
        <h1 class="text-7xl font-bold  my-12 text-black  ">The Best Web Development Services Await You</h1>
    </div>
</section>
<section>
    <div class="boxs px-8 grid sm:px-20 md:gap-12   md:grid-cols-2">
        <div class="box">
            <h2 class=" font-bold text-xl my-5">Unparalleled Expertise</h2>
            <p class=" font-normal text-lg leading-7 font-serif">With a team of seasoned developers, designers, and digital strategists, LIT boasts a reservoir of expertise. Our professionals are committed to delivering web solutions that align with your objectives and surpass industry standards.</p>
        </div>
        <div class="box">
            <h2 class=" font-bold text-xl my-5">Client-Centric Approach </h2>
            <p class=" font-normal text-lg leading-7 font-serif">Your satisfaction is our priority. We adopt a client-centric approach, ensuring that your inputs are not just heard but integrated into the fabric of our solutions. Collaborate with us, and witness your ideas come to life.</p>
        </div>
    </div>
</section>
<section>
    <div class="Middle px-8 sm:px-20">
        <h1 class="text-6xl font-extrabold  my-4 text-black  ">Approach: Crafting Excellence, One Pixel at a Time</h1>
        <p class=" font-normal text-lg leading-7 font-serif mt-6">At LIT, our approach to web development is a harmonious blend of creativity, technology, and strategic thinking. Our process is transparent, collaborative, and tailored to meet the unique needs of each client.</p>
    </div>
</section>
<section>
    <div class="blocks px-8 grid sm:px-20 md:gap-8  md:grid-cols-2">
        <div class="block">
            <h1 class=" font-bold text-xl my-5 text-[#6d6d6d] font-serif">1.Discovery Phase: Understanding Your Vision</h1>
            <p class=" font-medium text-lg leading-7 text-[#6d6d6d] font-serif">Every project begins with an in-depth understanding of your goals, target audience, and industry landscape. We believe in laying a strong foundation before embarking on the creative journey.</p>
        </div>
        <div class="block">
            <h1  class=" font-bold text-xl my-5 text-[#6d6d6d] font-serif">2.Design and Development: Bringing Ideas to Life</h1>
            <p class=" font-medium text-lg leading-7 text-[#6d6d6d] font-serif">Our design and development phase is where concepts take shape. With a focus on user experience and functionality, we ensure that your website not only looks impressive but also performs seamlessly.</p>
        </div>
        <div class="block">
            <h1  class=" font-bold text-xl my-5 text-[#6d6d6d] font-serif">3.Testing and Quality Assurance: Ensuring Perfection</h1>
            <p class=" font-medium text-lg leading-7 text-[#6d6d6d] font-serif">Rigorous testing is an integral part of our process. We leave no room for errors, ensuring that your website functions flawlessly across devices and platforms.</p>
        </div>
        <div class="block">
            <h1  class=" font-bold text-xl my-5 text-[#6d6d6d] font-serif">4.Deployment and Beyond: Launching Your Success</h1>
            <p class=" font-medium text-lg leading-7 text-[#6d6d6d] font-serif">Post-launch, our commitment doesn’t waver. We monitor performance, gather insights, and provide ongoing support to ensure your digital presence continues to evolve and thrive.</p>
        </div>
    </div>
</section>
<section>
    <div class="services mt-28 px-8 sm:px-20 flex flex-col items-center justify-center space-y-5">
        <h2 class=" font-extrabold text-base   text-[#7141b1] font-serif">//OUR SERVICES</h2>
        <h1 class=" text-3xl sm:text-6xl font-extrabold  text-black  ">Website Development</h1>
        <p  class=" font-medium text-xl leading-7 text-[#6d6d6d] font-serif ">We provide technology support services to our customers, enabling them to achieve superior business outcomes including software and app development solutions</p>
    </div>
</section>
<section>
    <div class="IT hub  px-8 sm:px-20 mt-12 lg:grid lg:grid-cols-3 xl:grid-cols-3">
        <div class="box  flex flex-col items-end space-y-10  lg:justify-center">
            <div class="it flex flex-row space-x-8 ">
                <h2 class=" font-extrabold text-3xl font-serif">Content Development</h2>
                <img class=" w-12 bg-purple-300 rounded-xl hover:bg-cyan-300" src="Images/typewriter.png" alt="">
            </div>
            <div class="it flex flex-row space-x-8">
                <h2 class=" font-extrabold text-3xl font-serif">Website Promotion (Adwords, Affiliate Marketing etc.)</h2>
                <img class=" w-12 bg-purple-300 rounded-xl hover:bg-cyan-300" src="Images/smartphone.png" alt="">
            </div>
            <div class="it flex flex-row space-x-8">
                <h2 class=" font-extrabold text-3xl font-serif">Website Development</h2>
                <img class=" w-12 bg-purple-300 rounded-xl hover:bg-cyan-300" src="Images/analytics.png" alt="">
            </div>
        </div>
        <div class="box1 flex justify-center">
            <img src="Images/app-watch-1.jpg" alt="">
        </div>
        <div class="box2 flex flex-col space-y-10 lg:justify-center">
            <div class="it flex flex-row space-x-8">
                <img class=" w-12 bg-purple-300 rounded-xl hover:bg-cyan-300" src="Images/ui.png" alt="">
                <h2 class=" font-extrabold text-3xl font-serif">Website Designing</h2>
            </div>
            <div class="it flex flex-row space-x-8">
                <img class=" w-12 bg-purple-300 rounded-xl hover:bg-cyan-300" src="Images/content-management.png" alt="">
                <h2 class=" font-extrabold text-3xl font-serif">SEO Optimization</h2>
            </div>
            <div class="it flex flex-row space-x-8">
                <img class=" w-12 bg-purple-300 rounded-xl hover:bg-cyan-300" src="Images/online-support.png" alt="">
                <h2 class=" font-extrabold text-3xl font-serif">E-Commerce Support & Solutions</h2>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="counterboard px-8 md:px-20 grid grid-cols-2 md:grid-cols-4 gap-10 py-12"> 
        <div id="number" class=" text-6xl sm:text-8xl font-extrabold flex justify-center items-center text-black">
        
        </div>
        <div id="number2" class="text-6xl sm:text-8xl font-extrabold flex justify-center items-center text-black">
        
        </div>
        <div id="number3" class=" text-6xl sm:text-8xl font-extrabold flex justify-center items-center text-black">
        
        </div>
        <div id="number4" class=" text-6xl sm:text-8xl font-extrabold flex justify-center items-center text-black">
        
        </div>
       
    
    </div> 
</section>
<section>
    <div class="Our mt-20 px-8 md:px-20 flex flex-col items-center justify-center space-y-3">
        <h1 class=" text-3xl sm:text-6xl font-extrabold  text-black  ">Our Projects</h1>
        <p class=" font-medium text-xl mt-6 leading-7 text-[#6d6d6d] font-serif ">We help businesses elevate their value through Social media marketing,
            product design, web designing and consultancy services.</p>
    </div>
</section>
<section>
     <div class="Contectus mt-40"> 
       <div><img class=" absolute h-[80vh] w-[100vw] lg:h-[60vh]" src="Images/bg-cta-home2.jpg" alt=""></div>
       <div class="contect relative flex flex-col left-0 top-0 w-full h-[80vh] justify-center items-center lg:h-[60vh] ">
           <h3 class=" font[Nunito Sans, Sans-serif] text-xs text-white sm:text-xl font-bold  md:py-2  md:px-12 lg:text-3xl">// Drop us a line! We are here to answer your questions 24/7</h3>
           <h1 class=" font[Fira Sans, sans-serif] text-2xl sm:text-4xl font-bold leading-[4.5rem] text-white  md:py-6  md:px-12 md:text-4xl lg:text-6xl">NEED A CONSULTATION?</h1>
           <button class=" bg-cyan-400 hover:bg-purple-500 text-white font[Nunito Sans, Sans-serif] font-bold text-2xl py-4 px-6 mt-6 cursor-pointer md:text-3xl lg:text-4xl "><a href="Contactus.php">Contact US</a></button>
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