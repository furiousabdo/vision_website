<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>رؤية للتجارة</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&family=Cairo:wght@400;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['Cairo', 'Tajawal', 'sans-serif'],
          },
          colors: {
            primary: '#1a1a1a',
            accent: 'rgb(168, 150, 76)',
            navbar: '#191919',
            lightgray: '#F8F9FA'
          },
          backgroundImage: {
            'hero-pattern': "url('/images/hero.jpg')"
          },
          animation: {
            bounceY: 'bounce 2s infinite',
            pulseSlow: 'pulse 3s ease-in-out infinite'
          }
        }
      }
    }
  </script>
  <style>
    html {
      scroll-behavior: smooth;
      scroll-padding-top: 6rem; /* Fix: prevent section being hidden under navbar */
    }
    body {
      font-family: 'Cairo', 'Tajawal', sans-serif;
    }
    .active {
      color:rgb(168, 150, 76);
      font-weight: bold;
    }
  </style>
</head>
<body class="bg-[url('/images/pattern.png')] bg-top">
  <script>
    AOS.init({
      duration: 800,
      easing: 'ease-in-out',
      once: true
    });
    document.addEventListener('DOMContentLoaded', function () {
      const sections = document.querySelectorAll('section');
      const navLinks = document.querySelectorAll('nav a');
      function activateNav() {
        let index = sections.length;
        while (--index && window.scrollY + 100 < sections[index].offsetTop) {}
        navLinks.forEach((link) => link.classList.remove('active'));
        if (navLinks[index]) navLinks[index].classList.add('active');
      }
      activateNav();
      window.addEventListener('scroll', activateNav);
    });
  </script>
  <script>
  document.addEventListener('DOMContentLoaded', function () {
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('nav a');
    const navbar = document.getElementById('navbar');

    function activateNav() {
      let index = sections.length;
      while (--index && window.scrollY + 100 < sections[index].offsetTop) {}
      navLinks.forEach((link) => link.classList.remove('active'));
      if (navLinks[index]) navLinks[index].classList.add('active');
    }

    function handleNavbarBackground() {
      if (window.scrollY > 50) {
        navbar.classList.remove('bg-transparent');
        navbar.classList.add('bg-navbar', 'shadow', 'border-b', 'border-accent');
      } else {
        navbar.classList.add('bg-transparent');
        navbar.classList.remove('bg-navbar', 'shadow', 'border-b', 'border-accent');
      }
    }

    activateNav();
    handleNavbarBackground();

    window.addEventListener('scroll', () => {
      activateNav();
      handleNavbarBackground();
    });
  });
</script>

<section id="hero" class="relative bg-hero-pattern bg-cover bg-center text-white h-screen flex items-end justify-start text-right px-4 pb-24">
  <!-- Navbar -->
<header id="navbar" class="fixed top-0 right-0 left-0 z-50 bg-transparent transition-colors duration-300">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
      <div class="flex items-center gap-2">
        <img src="/images/logo.png" alt="Logo" class="h-20 w-auto">
      </div>
      <nav class="flex flex-wrap gap-4 text-sm text-white">
        <a href="#hero" class="hover:text-accent transition">الرئيسية</a>
        <a href="#about" class="hover:text-accent transition">من نحن</a>
        <a href="#values" class="hover:text-accent transition">القيم والأهداف</a>
        <a href="#achievements" class="hover:text-accent transition">الإنجازات</a>
        <a href="#systems" class="hover:text-accent transition">شركاتنا</a>
        <a href="#ceo" class="hover:text-accent transition">كلمة الرئيس</a>
        <a href="#contact" class="hover:text-accent transition">تواصل معنا</a>
      </nav>
    </div>
  </header>

  <div class="h-20"></div>

  <!-- Hero Section -->

 <div class="max-w-xl border-r-8 pr-10 rounded mr-20" style="border-color:rgb(168, 150, 76);">
  <h1 class="text-6xl md:text-8xl font-bold mb-4 drop-shadow-lg text-white">رؤية للتجارة</h1>
  <p class="text-2xl md:text-4xl leading-relaxed drop-shadow-md" style="color:rgb(168, 150, 76);">
    رؤية ملهمة وشراكات مستدامة
  </p>
</div>

<div class="absolute bottom-0 right-20 translate-y-1/4 h-3 w-1/3 bg-accent z-10"></div>
</section>


  <!-- About Section -->
  <section id="about" class="py-20">
  
    <div class="container mx-auto px-4 max-w-6xl flex flex-col md:flex-row items-center gap-10">
      <div class="md:w-1/2 relative">
        <img src="/images/about.jpg" alt="About" class="w-full rounded shadow-lg drop-shadow-[0_8px_20px_rgba(139,106,0,0.5)]">
        <div class="absolute bottom-0 left-0 w-full h-20 bg-gradient-to-t from-accent to-transparent rounded-b-lg pointer-events-none"></div>
      </div>
      <div class="md:w-1/2 text-right">
        <h2 class="text-3xl md:text-4xl font-bold mb-6 text-accent">من نحن</h2>
        <p class="text-base md:text-lg leading-loose">
          برؤية شغوفة، انطلقت «رؤية للتجارة» من قلب العالم الإسلامي لتصنع أثراً يتجاوز السوق إلى خدمة المجتمع منذ تأسيسها أعادت تعريف دور الشراكات بين القطاعات، وقدمت تجربة ترتقي بالعميل وتعزز مفهوم الجودة بنت علاقات متينة وشراكات مستدامة، واضعة المجتمع في صميم رسالتها، ساعية في دعمه وتنميته واليوم، تمضي بثبات، توسع مجالاتها، وتبني منظومات اقتصادية تثري المجتمع وتدفع عجلة ازدهاره.
        </p>
      </div>
    </div>
          
  </section>

<img src="/images/bgshapes.png"
     class="absolute left-0"
     style="top: 1500px; width: 400px;"
     alt="Shape 1">

<img src="/images/bgshapes.png"
     class="absolute left-0"
     style="top: 2500px; width: 350px;"
     alt="Shape 2">

<img src="/images/bgshapes.png"
     class="absolute left-0"
     style="top: 3450px; width: 450px;"
     alt="Shape 3">


  <div class="flex items-center justify-start my-16 px-12">
  <!-- Wider line with padding -->
  <hr class="border-t-4 border-accent w-[50%]">

  <!-- Dot at the end -->
  <div class="w-4 h-4 rounded-full bg-accent ml-2"></div>
  
</div>



  <!-- Systems Section -->
<section id="systems" class="scroll-mt-24 py-20">
  <div class="container mx-auto px-4 text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-12 text-accent">شركاتنا</h2>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-6 items-center">
      <img src="/images/logo1.png" alt="Logo 1" class="w-full max-w-[120px] transition duration-300 hover:scale-150">
      <img src="/images/logo2.png" alt="Logo 2" class="w-full max-w-[120px] transition duration-300 hover:scale-150">
      <img src="/images/logo3.png" alt="Logo 3" class="w-full max-w-[120px] transition duration-300 hover:scale-150">
      <img src="/images/logo4.png" alt="Logo 4" class="w-full max-w-[120px] transition duration-300 hover:scale-150">
      <img src="/images/logo5.png" alt="Logo 5" class="w-full max-w-[120px] transition duration-300 hover:scale-150">
      <img src="/images/logo6.png" alt="Logo 6" class="w-full max-w-[120px] transition duration-300 hover:scale-150">
    </div>
  </div>
</section>

<div class="flex items-center justify-start my-16 px-12">
  <!-- Wider line with padding -->
  <hr class="border-t-4 border-accent w-[50%]">

  <!-- Dot at the end -->
  <div class="w-4 h-4 rounded-full bg-accent ml-2"></div>
</div>

  <!-- Achievements Section -->
  <section id="achievements" class="py-20">
    <div class="container mx-auto px-4 max-w-4xl text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-6 text-accent">الإنجازات</h2>
            <img src="/images/achievements.png" alt="Achievements" class="mx-auto mb-8">

    </div>
  </section>



<div class="flex items-center justify-start my-16 px-12">
  <!-- Wider line with padding -->
  <hr class="border-t-4 border-accent w-[50%]">

  <!-- Dot at the end -->
  <div class="w-4 h-4 rounded-full bg-accent ml-2"></div>
</div>



<!-- Values Section -->
<section id="values" class="py-20">
 <br>
 <br>
  <div class="container mx-auto px-4 max-w-7xl text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-12 text-accent">القيم والأهداف</h2>

    <div class="flex justify-center items-end relative -mx-10 flex-wrap">
      <!-- Card 1 -->
    <div class="relative w-64 h-64 rounded-3xl overflow-hidden drop-shadow-xl transition-transform duration-300 transform hover:scale-105 hover:z-50 -ml-20 z-20">
        <img src="/images/goal3.jpg" alt="Goal 1" class="w-full h-full object-cover rounded-3xl">
        <div class="absolute bottom-0 left-0 w-full h-20 bg-gradient-to-t from-accent to-transparent rounded-b-3xl pointer-events-none"></div>
        <div class="absolute bottom-4 right-4 text-white text-sm font-bold px-3 py-2">
          الالتزام بعلاقات تجارية متينة وطويلة الأمد
        </div>
      </div>

      <!-- Card 2 -->
      <div class="relative w-64 h-64 rounded-3xl overflow-hidden drop-shadow-xl transition-transform duration-300 transform hover:scale-105 hover:z-50 -ml-20 z-20">
        <img src="/images/goal2.jpg" alt="Goal 2" class="w-full h-full object-cover rounded-3xl">
        <div class="absolute bottom-0 left-0 w-full h-20 bg-gradient-to-t from-accent to-transparent rounded-b-3xl pointer-events-none"></div>
        <div class="absolute bottom-4 right-4 text-white text-sm font-bold px-3 py-2">
          تقديم حلول تجارية مبتكرة
        </div>
      </div>

      <!-- Card 3 -->
      <div class="relative w-64 h-64 rounded-3xl overflow-hidden drop-shadow-xl transition-transform duration-300 transform hover:scale-105 hover:z-50 -ml-20 z-20">
        <img src="/images/goal1.jpg" alt="Goal 3" class="w-full h-full object-cover rounded-3xl">
        <div class="absolute bottom-0 left-0 w-full h-20 bg-gradient-to-t from-accent to-transparent rounded-b-3xl pointer-events-none"></div>
        <div class="absolute bottom-4 right-4 text-white text-sm font-bold px-3 py-2">
          تطوير مستمر للمنتجات والخدمات لمواكبة الإبداع        
        </div>
      </div>
      

      <!-- Card 4 -->
      <div class="relative w-64 h-64 rounded-3xl overflow-hidden drop-shadow-xl transition-transform duration-300 transform hover:scale-105 hover:z-50 -ml-20 z-20">
        <img src="/images/goal5.jpg" alt="Goal 4" class="w-full h-full object-cover rounded-3xl">
        <div class="absolute bottom-0 left-0 w-full h-20 bg-gradient-to-t from-accent to-transparent rounded-b-3xl pointer-events-none"></div>
        <div class="absolute bottom-4 right-4 text-white text-sm font-bold px-3 py-2">
          توفير بيئة أعمال محفزة على التميّز والنجاح
        </div>
      </div>

      <!-- Card 5 -->
      <div class="relative w-64 h-64 rounded-3xl overflow-hidden drop-shadow-xl transition-transform duration-300 transform hover:scale-105 hover:z-50 -ml-20 z-20">
        <img src="/images/goal6.jpg" alt="Goal 5" class="w-full h-full object-cover rounded-3xl">
        <div class="absolute bottom-0 left-0 w-full h-20 bg-gradient-to-t from-accent to-transparent rounded-b-3xl pointer-events-none"></div>
        <div class="absolute bottom-4 right-4 text-white text-sm font-bold px-3 py-2">
          تعزيز المصداقية في التعامل لضمان ثقة العملاء
        </div>
      </div>
      <!-- Card 6 -->
       <div class="relative w-64 h-64 rounded-3xl overflow-hidden drop-shadow-xl transition-transform duration-300 transform hover:scale-105 hover:z-50 -ml-20 z-20">
        <img src="/images/goal4.jpg" alt="Goal 6" class="w-full h-full object-cover rounded-3xl">
        <div class="absolute bottom-0 left-0 w-full h-20 bg-gradient-to-t from-accent to-transparent rounded-b-3xl pointer-events-none"></div>
        <div class="absolute bottom-4 right-4 text-white text-sm font-bold px-3 py-2">
          تحمل المسؤولية الاجتماعية والاقتصادية تجاه المجتمع
        </div>
      </div>

    </div>
  </div>
  <br>
  <br>
</section>

<div class="flex items-center justify-start my-16 px-12">
  <!-- Wider line with padding -->
  <hr class="border-t-4 border-accent w-[50%]">

  <!-- Dot at the end -->
  <div class="w-4 h-4 rounded-full bg-accent ml-2"></div>
</div>


   <!-- CEO Message Section -->
<section id="ceo" class="py-20">
  <div class="container mx-auto px-4 max-w-6xl flex flex-col md:flex-row items-center gap-10">
    
    <!-- CEO Image on the left -->
    <div class="md:w-1/2 w-full">
      <img src="/images/ceo.jpg" alt="CEO" class="w-full h-auto rounded-3xl drop-shadow-[12px_0_20px_rgba(139,106,0,0.4)]">
      <p class="text-lg font-semibold mt-1 mb-4 text-center">مصلح بن صالح السني<br><span class="text-primary">رئيس مجلس الإدارة</span></p>
    </div>

    <!-- CEO Text -->
    <div class="w-full text-right">
      <h2 class="text-3xl md:text-4xl font-bold text-accent mb-2">كلمة الرئيس</h2>
      
      <p class="text-base md:text-lg leading-loose text-gray-800">
        تشهد المملكة العربية السعودية في هذه المرحلة تحولات جوهرية على مختلف الأصعدة والقطاعات، وذلك انطلاقاً من التطلعات الطموحة لرؤية المملكة 2030، 
        وبما يتوافق مع هذا التغيير، قمنا بإعادة هيكلة سياساتنا الإدارية لتتماشى مع الإنجازات والأهداف المنشودة للرؤية، 
        ونطمح من خلال هذا التوجه إلى تحقيق الريادة والتميز في مجالات أعمالنا الحديثة.
      </p>
    </div>
    
  </div>
</section>

 <!-- Footer Section -->
<section class="bg-navbar text-white py-16">
  <div class="container mx-auto px-4 flex flex-col lg:flex-row items-center lg:items-start justify-between gap-16">

    <!-- Left Side: Company Name & Contact Info -->
    <div class="text-center lg:text-right space-y-4 lg:w-1/4">
      <h3 class="text-accent font-bold text-xl mb-2">المقر الرئيسي</h3>
      <p class="text-base leading-relaxed">
        المملكة العربية السعودية - جدة - طريق الملك عبد الله<br>
        برج الزقزوق للأعمال - الطابق العاشر - مكتب رقم 1003
      </p>
      <div class="mt-6">
        <img src="/images/vision2030.png" alt="Vision 2030" class="h-28 mx-auto lg:mx-0" />
      </div>
    </div>

    <!-- Center: Logos List + Small logos below -->
    <div class="flex flex-col items-center lg:items-center space-y-6 lg:w-1/3">

      <ul class="space-y-4 font-semibold text-lg text-white rtl">
        <li class="flex items-center gap-2">
          <span class="w-1.5 h-7 bg-accent inline-block rounded"></span>قطرة خير
        </li>
        <li class="flex items-center gap-2">
          <span class="w-1.5 h-7 bg-accent inline-block rounded"></span>Vision Global
        </li>
        <li class="flex items-center gap-2">
          <span class="w-1.5 h-7 bg-accent inline-block rounded"></span>رؤية للتسويق
        </li>
        <li class="flex items-center gap-2">
          <span class="w-1.5 h-7 bg-accent inline-block rounded"></span>Vision IT Solution
        </li>
        <li class="flex items-center gap-2">
          <span class="w-1.5 h-7 bg-accent inline-block rounded"></span>أميدالا
        </li>
        <li class="flex items-center gap-2">
          <span class="w-1.5 h-7 bg-accent inline-block rounded"></span>Vision Logistic
        </li>
      </ul>

      <!-- Small logos below the list -->
      <div class="flex gap-6 mt-6 rtl flex-wrap justify-center">
        <img src="/images/logo1.png" alt="Vision Logistic" class="h-10" />
        <img src="/images/logo2.png" alt="Amidala" class="h-10" />
        <img src="/images/logo3.png" alt="Vision IT Solution" class="h-10" />
        <img src="/images/logo4.png" alt="Vision Marketing" class="h-10" />
        <img src="/images/logo5.png" alt="Vision Global" class="h-10" />
        <img src="/images/logo6.png" alt="قطرة خير" class="h-10" />
      </div>

      <!-- Main Trade Vision Logo below -->
      <div class="mt-6">
        <img src="/images/logo.png" alt="Trade Vision Logo" class="h-20 mx-auto" />
      </div>
    </div>
  </div>
</section>


<footer class="bg-[#d6b94a] text-white py-8">  
  <div class="text-center">
        <p class="text-xs text-white-400">&copy; 2025 رؤية للتجارة – جميع الحقوق محفوظة</p>
      </div>
    </div>
  </div>
</footer>


  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 800,
      easing: 'ease-in-out',
      once: true
    });
  </script>
</body>
</html>
