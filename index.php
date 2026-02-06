<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>YourMobileBuyer Header</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
 <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'includes/header.php'; ?>
<!-- ===== SLIDER ===== -->
<div class="container-fluid  px-md-5 my-md-4 px-3 my-3">
  <div class="row">
    <div class="col-12">

      <!-- SLIDER -->
      <div class="ymb-slider">

        <div class="ymb-slides">


          <div class="ymb-slide">
            <a href="buy-refurbished.html">
              <img src="images/bg-2.jpg" alt="Buy Refurbished">
            </a>
          </div>

          <div class="ymb-slide">
            <a href="store.html">
              <img src="images/bg-3.jpg" alt="Visit Store">
            </a>
          </div>

          <div class="ymb-slide">
            <a href="store.html">
              <img src="images/bg-4.jpg" alt="Visit Store">
            </a>
          </div>

          
          <div class="ymb-slide">
            <a href="sell-phone.html">
              <img src="images/bg-1.jpg" alt="Sell Old Phone">
            </a>
          </div>
        </div>

    <!-- Arrows -->
<button class="ymb-arrow left" onclick="prevSlide()">
  <i class="fa-solid fa-chevron-left"></i>
</button>

<button class="ymb-arrow right" onclick="nextSlide()">
  <i class="fa-solid fa-chevron-right"></i>
</button>


      </div>

    </div>
  </div>
</div>


<!-- Dots -->
<div class="ymb-dots">
  <span class="ymb-dot active" onclick="goSlide(0)"></span>
  <span class="ymb-dot" onclick="goSlide(1)"></span>
  <span class="ymb-dot" onclick="goSlide(2)"></span>
</div>

<section class="sell-phone-section py-5">
  <div class="container text-center">

    <!-- Heading -->
    <h2 class="mb-2">
      Sell Your Old Phone in Delhi, Noida & Ghaziabad
    </h2>
    <p class="mb-4">
      Get the best price for your old mobile phone with instant pickup
      and fast payment. No repair, no exchange – we only buy old phones.
    </p>

    <!-- Search -->
    <div class="mb-4">
      <input type="text"
        class="form-control form-control-lg mx-auto"
        style="max-width:500px;"
        placeholder="Search your mobile brand or model">
    </div>

    <!-- Brand Selection -->
    <p class="mb-3">
      Select your phone brand to get price
    </p>

    <div class="d-flex flex-wrap justify-content-center gap-3">

      <!-- Apple -->
      <a href="sell-old-phone.php?brand=apple"
         class="brand-card d-flex align-items-center justify-content-center p-3 border rounded"
         style="width:100px; height:100px;">
        <img src="images/apple.svg" alt="Sell Apple Phone" style="max-width:60px;">
      </a>

      <!-- Samsung -->
      <a href="sell-old-phone.php?brand=samsung"
         class="brand-card d-flex align-items-center justify-content-center p-3 border rounded"
         style="width:100px; height:100px;">
        <img src="images/samsung.svg" alt="Sell Samsung Phone" style="max-width:60px;">
      </a>

      <!-- OnePlus -->
      <a href="sell-old-phone.php?brand=oneplus"
         class="brand-card d-flex align-items-center justify-content-center p-3 border rounded"
         style="width:100px; height:100px;">
        <img src="images/oneplus.svg" alt="Sell OnePlus Phone" style="max-width:60px;">
      </a>

      <!-- Vivo -->
      <a href="sell-old-phone.php?brand=vivo"
         class="brand-card d-flex align-items-center justify-content-center p-3 border rounded"
         style="width:100px; height:100px;">
        <img src="images/vivo.svg" alt="Sell Vivo Phone" style="max-width:60px;">
      </a>

      <!-- Oppo -->
      <a href="sell-old-phone.php?brand=oppo"
         class="brand-card d-flex align-items-center justify-content-center p-3 border rounded"
         style="width:100px; height:100px;">
        <img src="images/oppo.svg" alt="Sell Oppo Phone" style="max-width:60px;">
      </a>

      <!-- All Brands -->
      <a href="mobile-brands.php"
         class="brand-card d-flex align-items-center justify-content-center p-3 border rounded"
         style="width:100px; height:100px;">
        <span><strong>View All Brands</strong></span>
      </a>

    </div>
  </div>
</section>



<section class="ux-action-grid py-5">
  <div class="container-fluid px-3 px-md-5">

    <!-- Heading -->
    <h2 class="ux-action-title mb-4 text-center">
      Sell Your Old Device Now
    </h2>
    <p class="text-center mb-5">
      Choose your device type and get an instant quote. Fast, safe, and doorstep pickup guaranteed.
    </p>

    <!-- GRID -->
    <div class="row g-4 justify-content-center">

      <!-- ITEM 1: Sell Phone -->
      <div class="col-lg-3 col-md-4 col-sm-6 text-center">
        <a href="sell-old-phone.php" class="ux-action-card shadow-sm rounded p-3 d-block h-100">
          <img src="images/cd13764b153e46e19f9c6551ee52b5e6.avif" class="img-fluid mb-2" alt="Sell Phone">
          <span>Sell Phone</span>
        </a>
      </div>

      <!-- ITEM 2: Sell Tablet -->
      <div class="col-lg-3 col-md-4 col-sm-6 text-center">
        <a href="sell-tablet.php" class="ux-action-card shadow-sm rounded p-3 d-block h-100">
          <img src="images/a12ac14b386b4b5286d424a83db4cad5.avif" class="img-fluid mb-2" alt="Sell Tablet">
          <span>Sell Tablet</span>
        </a>
      </div>

      <!-- ITEM 3: Sell Broken Phone -->
      <div class="col-lg-3 col-md-4 col-sm-6 text-center">
        <a href="sell-broken-phone.php" class="ux-action-card shadow-sm rounded p-3 d-block h-100">
          <img src="images/Sell-Broken-Phone.jpg" class="img-fluid mb-2" alt="Sell Broken Phone">
          <span>Sell Broken Phone</span>
        </a>
      </div>

      <!-- ITEM 4: Sell Dead Phone -->
      <div class="col-lg-3 col-md-4 col-sm-6 text-center">
        <a href="sell-dead-phone.php" class="ux-action-card shadow-sm rounded p-3 d-block h-100">
          <img src="images/Dead-Phone.jpg" class="img-fluid mb-2" alt="Sell Dead Phone">
          <span>Sell Dead Phone</span>
        </a>
      </div>

 

    </div>
  </div>
</section>






<!-- Marquee Section -->
<div class="brand-marquee py-3">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="marquee-wrapper">
          <div class="marquee-content">
            <img src="images/icon/apple-logo.png" alt="apple" class="brand-logo">
            <img src="images/icon/huawei.png" alt="huawei" class="brand-logo">
            <img src="images/icon/motorola.png" alt="motorola" class="brand-logo">
            <img src="images/icon/nokia.png" alt="nokia" class="brand-logo">
            <img src="images/icon/oppo.png" alt="Oppo" class="brand-logo">
            <img src="images/icon/plus-one.png" alt="plus-one" class="brand-logo">
            <img src="images/icon/samsung.png" alt="samsung" class="brand-logo">
            <img src="images/icon/sony.png" alt="sony" class="brand-logo">
            <img src="images/icon/vivo.png" alt="Vivo" class="brand-logo">
            <img src="images/icon/xiaomi.png" alt="xiaomi" class="brand-logo">
            <!-- repeat for smooth scroll -->
            <img src="images/icon/apple-logo.png" alt="apple" class="brand-logo">
            <img src="images/icon/huawei.png" alt="huawei" class="brand-logo">
            <img src="images/icon/motorola.png" alt="motorola" class="brand-logo">
            <img src="images/icon/nokia.png" alt="nokia" class="brand-logo">
            <img src="images/icon/oppo.png" alt="Oppo" class="brand-logo">
            <img src="images/icon/plus-one.png" alt="plus-one" class="brand-logo">
            <img src="images/icon/samsung.png" alt="samsung" class="brand-logo">
            <img src="images/icon/sony.png" alt="sony" class="brand-logo">
          </div>
        </div>

      </div>
    </div>
  </div>
</div>



<section class="faq-section py-5">
  <div class="container-fluid px-3 px-md-5">

    <!-- Header -->
    <div class="faq-left mb-4">
      <h2>Frequently Asked Questions</h2>
      <p>Get answers to common questions about selling your old mobile phone.</p>
    </div>

    <!-- FAQ CONTENT -->
    <div class="faq-right">

      <!-- TAB CONTENT: SELL ONLY -->
      <div class="tab-content active" id="sell">
        
        <!-- FAQ 1 -->
        <div class="faq-item">
          <div class="faq-question">
            What documents do I need to sell my old phone?
            <span class="icon">+</span>
          </div>
          <div class="faq-answer">
            Valid ID proof like Aadhaar, PAN, or Driving License is required at pickup time.
          </div>
        </div>

        <!-- FAQ 2 -->
        <div class="faq-item">
          <div class="faq-question">
            How do I get a quote for my phone?
            <span class="icon">+</span>
          </div>
          <div class="faq-answer">
            Select your phone brand, model, and condition on our website to get an instant quote.
          </div>
        </div>

        <!-- FAQ 3 -->
        <div class="faq-item">
          <div class="faq-question">
            Can I sell broken or dead phones?
            <span class="icon">+</span>
          </div>
          <div class="faq-answer">
            Yes! We accept broken, damaged, or dead phones and provide the best possible value.
          </div>
        </div>

        <!-- FAQ 4 -->
        <div class="faq-item">
          <div class="faq-question">
            How long does the pickup process take?
            <span class="icon">+</span>
          </div>
          <div class="faq-answer">
            Our home pickup is scheduled within 24–48 hours after confirming the quote.
          </div>
        </div>

        <!-- FAQ 5 -->
        <div class="faq-item">
          <div class="faq-question">
            How will I receive payment?
            <span class="icon">+</span>
          </div>
          <div class="faq-answer">
            Payment is made instantly via bank transfer or UPI at the time of pickup.
          </div>
        </div>

        <!-- FAQ 6 -->
        <div class="faq-item">
          <div class="faq-question">
            Can I sell multiple phones at once?
            <span class="icon">+</span>
          </div>
          <div class="faq-answer">
            Yes, you can sell multiple devices. Just add each phone’s details to get separate quotes.
          </div>
        </div>

        <!-- FAQ 7 -->
        <div class="faq-item">
          <div class="faq-question">
            Do I need to reset my phone before selling?
            <span class="icon">+</span>
          </div>
          <div class="faq-answer">
            Yes, factory reset is recommended, but our team will also ensure data is completely erased.
          </div>
        </div>

        <!-- FAQ 8 -->
        <div class="faq-item">
          <div class="faq-question">
            Are there any hidden charges?
            <span class="icon">+</span>
          </div>
          <div class="faq-answer">
            No, there are no hidden charges. The quoted price is what you will receive.
          </div>
        </div>

        <!-- FAQ 9 -->
        <div class="faq-item">
          <div class="faq-question">
            Can I cancel the pickup after booking?
            <span class="icon">+</span>
          </div>
          <div class="faq-answer">
            Yes, you can cancel or reschedule the pickup by contacting our support team.
          </div>
        </div>

        <!-- FAQ 10 -->
        <div class="faq-item">
          <div class="faq-question">
            Is it safe to sell my phone online?
            <span class="icon">+</span>
          </div>
          <div class="faq-answer">
            Absolutely! We follow secure pickup and payment processes. Your device and personal data are safe.
          </div>
        </div>

      </div>

    </div>
  </div>
</section>



<section class="trend-articles py-5">
  <div class="container-fluid px-3 px-md-5">

    <!-- Header -->
    <div class="trend-head d-flex justify-content-between align-items-center mb-4">
      <h2>Trending Blog & Articles</h2>
      <a href="blog-&-articles.php" class="see-all-btn btn btn-outline-primary">See All</a>
    </div>

    <div class="trend-slider-box position-relative">

      <!-- LEFT ARROW -->
      <button class="trend-arrow trend-left position-absolute top-50 start-0 translate-middle-y">
        <i class="fa-solid fa-chevron-left"></i>
      </button>

      <!-- SLIDER WINDOW -->
      <div class="trend-window overflow-auto">
        <div class="trend-track d-flex gap-3" id="trendTrack">

          <!-- CARD 1 -->
          <div class="trend-card shadow-sm rounded bg-white p-3">
            <img src="images/Phone-4a-Safely.jpg" class="img-fluid mb-3" alt="Nothing Phone 4a Launch">
            <div class="trend-content">
              <h3>How to Sell Your Nothing Phone 4a Safely</h3>
              <p>Learn the easiest way to sell your Nothing Phone 4a online and get instant cash.</p>
              <span>16 Jan 2026</span>
            </div>
          </div>

          <!-- CARD 2 -->
          <div class="trend-card shadow-sm rounded bg-white p-3">
            <img src="images/iPhone-17-Pro.jpg" class="img-fluid mb-3" alt="iPhone 17 Pro Overheating">
            <div class="trend-content">
              <h3>iPhone 17 Pro Overheating? Sell It & Upgrade</h3>
              <p>If your iPhone 17 Pro is overheating, selling it online can help you upgrade smoothly.</p>
              <span>16 Jan 2026</span>
            </div>
          </div>

          <!-- CARD 3 -->
          <div class="trend-card shadow-sm rounded bg-white p-3">
            <img src="images/Boost-Productivity.jpg" class="img-fluid mb-3" alt="Phone on Desk & Productivity">
            <div class="trend-content">
              <h3>Boost Productivity by Selling Old Phones</h3>
              <p>Free up space and earn instant cash by selling old smartphones you no longer use.</p>
              <span>16 Jan 2026</span>
            </div>
          </div>

          <!-- CARD 4 -->
          <div class="trend-card shadow-sm rounded bg-white p-3">
            <img src="images/Top-Tips.jpg" class="img-fluid mb-3" alt="More Trending Content">
            <div class="trend-content">
              <h3>Top Tips to Get Best Price for Your Old Phone</h3>
              <p>Follow our simple steps to ensure you get the highest value when selling old mobile devices.</p>
              <span>16 Jan 2026</span>
            </div>
          </div>

          <!-- CARD 5 -->
          <div class="trend-card shadow-sm rounded bg-white p-3">
            <img src="images/Old-Phones.jpg" class="img-fluid mb-3" alt="Upgrade & Sell">
            <div class="trend-content">
              <h3>Upgrade to Latest Models by Selling Old Phones</h3>
              <p>Discover how selling old smartphones online can fund your next device seamlessly.</p>
              <span>15 Jan 2026</span>
            </div>
          </div>

        </div>
      </div>

      <!-- RIGHT ARROW -->
      <button class="trend-arrow trend-right position-absolute top-50 end-0 translate-middle-y">
        <i class="fa-solid fa-chevron-right"></i>
      </button>

    </div>
  </div>
</section>



<section class="sell-phone-section py-5">
  <div class="container-fluid px-3 px-md-5">

    <!-- Heading -->
    <div class="section-head mb-5 text-center">
      <h2>Sell Your Old Mobile Phone </h2>
      <p>
        Fast, safe, and hassle-free way to sell your old, used, or broken mobile phones. Get instant quotes, free home pickup, and instant payment.
      </p>
    </div>

    <!-- Why Sell Section -->
    <div class="row mb-5 align-items-center">
      <div class="col-lg-6">
        <h4>Why Sell Your Phone With Us?</h4>
        <p>
          We provide a simple, transparent platform to sell your mobile phone quickly. 
          Get the best price without any negotiation, all from the comfort of your home.
        </p>
        <ul>
          <li>Instant online quote for your mobile phone</li>
          <li>Free doorstep pickup in your city</li>
          <li>Instant cash payment once your phone is collected</li>
          <li>Sell old, used, broken, or dead phones from any brand</li>
        </ul>
      </div>

      <div class="col-lg-6">
        <div class="info-card p-4 shadow-sm rounded">
          <h5>How It Works</h5>
          <ol>
            <li>Submit phone details: brand, model, condition</li>
            <li>Get an instant price quote online</li>
            <li>Schedule free home pickup at your convenience</li>
            <li>Receive instant cash/payment once phone is collected</li>
          </ol>
        </div>
      </div>
    </div>

    <!-- Features -->
    <div class="row feature-row mb-5 text-center">
      <div class="col-md-3 col-6 mb-4">
        <div class="feature-box p-3 shadow-sm rounded">
          <img src="images/icon/best-price.png" alt="Best Price" class="feature-icon mb-2" width="50">
          <span>Best Price Guaranteed</span>
        </div>
      </div>

      <div class="col-md-3 col-6 mb-4">
        <div class="feature-box p-3 shadow-sm rounded">
          <img src="images/icon/hassle-free.png" alt="Hassle Free" class="feature-icon mb-2" width="50">
          <span>Hassle-Free Process</span>
        </div>
      </div>

      <div class="col-md-3 col-6 mb-4">
        <div class="feature-box p-3 shadow-sm rounded">
          <img src="images/icon/delivery-man.png" alt="Home Pickup" class="feature-icon mb-2" width="50">
          <span>Free Home Pickup</span>
        </div>
      </div>

      <div class="col-md-3 col-6 mb-4">
        <div class="feature-box p-3 shadow-sm rounded">
          <img src="images/icon/money.png" alt="Instant Payment" class="feature-icon mb-2" width="50">
          <span>Instant Cash Payment</span>
        </div>
      </div>
    </div>

    <!-- Privacy Note -->
    <div class="row mb-5">
      <div class="col-lg-12">
        <p class="text-center">
          Your privacy matters. All data on your mobile is securely wiped before resale. 
          Sell your phone from any brand safely and get instant cash without any hassle.
        </p>
      </div>
    </div>

    <!-- CTA -->
    <div class="row">
      <div class="col-lg-12 text-center">
        <a class="btn btn-success btn-lg px-5" href="contact-us.php" style="    background: #04437d;
    border: 1px solid #04437d">
          Sell Your Phone Now
</a>
      </div>
    </div>

  </div>
</section>

  <?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script>
let currentSlide = 0;
const slides = document.querySelector('.ymb-slides');
const totalSlides = document.querySelectorAll('.ymb-slide').length;
const dots = document.querySelectorAll('.ymb-dot');

function updateSlider() {
  slides.style.transform = `translateX(-${currentSlide * 100}%)`;
  dots.forEach(d => d.classList.remove('active'));
  dots[currentSlide].classList.add('active');
}

function nextSlide() {
  currentSlide = (currentSlide + 1) % totalSlides;
  updateSlider();
}

function prevSlide() {
  currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
  updateSlider();
}

function goSlide(index) {
  currentSlide = index;
  updateSlider();
}

/* AUTO SLIDE */
setInterval(nextSlide, 4000);
</script>
<script>
function ymbSlide(dir) {
  const track = document.getElementById("ymbTrack");
  track.scrollLeft += dir * 260;
}
</script>

<script>
  // Tabs
  document.querySelectorAll('.tab-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
      document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));

      btn.classList.add('active');
      document.getElementById(btn.dataset.tab).classList.add('active');
    });
  });

  // Accordion
  document.querySelectorAll('.faq-question').forEach(q => {
    q.addEventListener('click', () => {
      const answer = q.nextElementSibling;
      const icon = q.querySelector('.icon');

      if (answer.classList.contains('show')) {
        answer.classList.remove('show');
        icon.textContent = '+';
      } else {
        document.querySelectorAll('.faq-answer').forEach(a => a.classList.remove('show'));
        document.querySelectorAll('.icon').forEach(i => i.textContent = '+');

        answer.classList.add('show');
        icon.textContent = '−';
      }
    });
  });
</script>

<script>
  const track = document.getElementById("trendTrack");
  const nextBtn = document.querySelector(".trend-right");
  const prevBtn = document.querySelector(".trend-left");

  let index = 0;

  function step() {
    return track.children[0].offsetWidth + 24;
  }

  function visible() {
    if (window.innerWidth < 520) return 1;
    if (window.innerWidth < 900) return 2;
    return 3;
  }

  nextBtn.onclick = () => {
    const max = track.children.length - visible();
    if (index < max) {
      index++;
      track.style.transform = `translateX(-${index * step()}px)`;
    }
  };

  prevBtn.onclick = () => {
    if (index > 0) {
      index--;
      track.style.transform = `translateX(-${index * step()}px)`;
    }
  };

  window.addEventListener("resize", () => {
    index = 0;
    track.style.transform = "translateX(0)";
  });
</script>

<script>
  function sliderControl(prev, next, slider) {
    prev.onclick = () => slider.scrollLeft -= 300;
    next.onclick = () => slider.scrollLeft += 300;
  }

  sliderControl(
    document.querySelector(".rn-prev"),
    document.querySelector(".rn-next"),
    document.getElementById("rnSlider")
  );

  sliderControl(
    document.querySelector(".rr-prev"),
    document.querySelector(".rr-next"),
    document.getElementById("rrSlider")
  );
</script>
<script>
function openLocationPopup() {
  document.getElementById('locationPopup').style.display = 'flex';
}

function closeLocationPopup() {
  document.getElementById('locationPopup').style.display = 'none';
}

function openEnquiryPopup() {
  document.getElementById('enquiryPopup').style.display = 'flex';
}

function closeEnquiryPopup() {
  document.getElementById('enquiryPopup').style.display = 'none';
}
</script>
<script>
  var swiper = new Swiper('.swiper-testimonial', {
  slidesPerView: 3,
  spaceBetween: 30,
  loop: true,

  navigation: {
    nextEl: '.swiper-button-next-test',
    prevEl: '.swiper-button-prev-test',
  },

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  breakpoints: {
    0: { slidesPerView: 1 },
    768: { slidesPerView: 2 },
    1024: { slidesPerView: 3 }
  }
});

</script>



</body>
</html>
