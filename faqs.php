<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
<title>FAQs - Mobile Selling</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
 <link rel="stylesheet" href="css/style.css">
<style>
.faq-icon::before{
  content:"+";
  font-weight:bold;
  font-size:20px;
}
.accordion-button:not(.collapsed) .faq-icon::before{
  content:"−";
}
.accordion-button::after{
  display:none;
}
</style>
</head>

<body>
<?php include 'includes/header.php'; ?>
<section class="py-5 bg-light">
<div class="container">

<div class="text-center mb-5">
<h1 class="fw-bold">Frequently Asked Questions</h1>
<p class="text-muted">Everything you need to know about selling your mobile</p>
</div>

<div class="accordion" id="mainFaq">

<!-- ================= SELL MOBILE ================= -->

<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq1">
How can I sell my phone?
<span class="faq-icon ms-auto"></span>
</button>
</h2>
<div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#mainFaq">
<div class="accordion-body">
Select your phone model, check price, schedule pickup and get instant payment.
</div>
</div>
</div>

<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq2">
Do you buy broken phones?
<span class="faq-icon ms-auto"></span>
</button>
</h2>
<div id="faq2" class="accordion-collapse collapse" data-bs-parent="#mainFaq">
<div class="accordion-body">
Yes, we buy broken, damaged and dead phones at best price.
</div>
</div>
</div>

<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq3">
Do you buy dead phones?
<span class="faq-icon ms-auto"></span>
</button>
</h2>
<div id="faq3" class="accordion-collapse collapse" data-bs-parent="#mainFaq">
<div class="accordion-body">
Yes, completely dead phones are accepted. Price depends on condition.
</div>
</div>
</div>

<!-- ================= PRICE ================= -->

<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq4">
How do I check my mobile price?
<span class="faq-icon ms-auto"></span>
</button>
</h2>
<div id="faq4" class="accordion-collapse collapse" data-bs-parent="#mainFaq">
<div class="accordion-body">
Enter phone model and condition to get instant price.
</div>
</div>
</div>

<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq5">
Is price shown final?
<span class="faq-icon ms-auto"></span>
</button>
</h2>
<div id="faq5" class="accordion-collapse collapse" data-bs-parent="#mainFaq">
<div class="accordion-body">
Final price is confirmed after inspection at pickup.
</div>
</div>
</div>

<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq6">
Is price checking free?
<span class="faq-icon ms-auto"></span>
</button>
</h2>
<div id="faq6" class="accordion-collapse collapse" data-bs-parent="#mainFaq">
<div class="accordion-body">
Yes, checking mobile price is 100% free.
</div>
</div>
</div>

<!-- ================= PAYMENT ================= -->

<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq7">
How will I get paid?
<span class="faq-icon ms-auto"></span>
</button>
</h2>
<div id="faq7" class="accordion-collapse collapse" data-bs-parent="#mainFaq">
<div class="accordion-body">
You get instant payment via UPI, bank transfer or cash.
</div>
</div>
</div>

<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq8">
Is pickup free?
<span class="faq-icon ms-auto"></span>
</button>
</h2>
<div id="faq8" class="accordion-collapse collapse" data-bs-parent="#mainFaq">
<div class="accordion-body">
Yes, doorstep pickup is free in most cities.
</div>
</div>
</div>

<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq9">
How long does it take?
<span class="faq-icon ms-auto"></span>
</button>
</h2>
<div id="faq9" class="accordion-collapse collapse" data-bs-parent="#mainFaq">
<div class="accordion-body">
Usually completed within 24–48 hours.
</div>
</div>
</div>

<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq10">
Should I reset my phone?
<span class="faq-icon ms-auto"></span>
</button>
</h2>
<div id="faq10" class="accordion-collapse collapse" data-bs-parent="#mainFaq">
<div class="accordion-body">
Yes, please backup and factory reset your phone before selling.
</div>
</div>
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
