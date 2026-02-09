<?php
// contact-us.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
<title>Contact Us | Sell Old Phone in Delhi & Gurgaon | YourMobileBuyer</title>
<meta name="description" content="Contact YourMobileBuyer to sell your old phone in Delhi & Gurgaon. Get instant price, free pickup and same day payment for used mobiles. Call or WhatsApp now.">
<meta name="keywords" content="contact mobile buyer delhi, sell old phone gurgaon contact, used mobile buyer delhi number, phone buyer near me, sell phone fast delhi NCR">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
 <link rel="stylesheet" href="css/style.css">
 <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
 <style>
  .contact-form h4 {
    color: #04437d !important;
}
.contact-form input, 
.contact-form select{
    height: 45px;
}
 </style>
</head>

<body>
<?php include 'includes/header.php'; ?>
<!-- PAGE HEADER -->
   <section class="page-breadcrumb">
  <div class="container-fluid px-3 px-md-5 ">
    <div class="row align-items-center">
      
      <!-- LEFT CONTENT -->
      <div class="col-md-6">
        <div class="breadcrumb-content">
          <h2>Contact Us</h1>
        <p>We’re here to help you with buying & selling devices</p>
        </div>
      </div>

      <!-- RIGHT BLANK -->
   <div class="col-md-6 text-center text-md-end">
  <img src="images/img-bg1.png" alt="" class="img-fluid">
</div>


    </div>
  </div>
</section>


<div class="container-fluid px-3 px-md-5 my-5">
  <div class="row g-4">

    <!-- LEFT INFO -->
    <div class="col-lg-4">
      <div class="info-box mb-4 p-3 text-center rounded shadow" style="background: #04437d;">
        <i class="fa-solid fa-location-dot fa-2x" style="color:#4faaff;"></i>
        <h5 class="mt-2" style="color:#4faaff;"> Office Address</h5>
        <p class="mb-0 text-white">
          Tower 6, 1208, Pyramid Urban Homes 2, Sector-86, Gurgaon - 122004
        </p>
      </div>

      <div class="info-box mb-4 p-3 text-center rounded shadow" style="background: #04437d;">
        <i class="fa-solid fa-phone fa-2x" style="color:#4faaff;"></i>
        <h5 class="mt-2" style="color:#4faaff;">Call Us</h5>
        <p class="mb-0 text-white">
          +91 9729686911<br>
          Mon – Sat (10AM – 7PM)
        </p>
      </div>

      <div class="info-box p-3 text-center rounded shadow" style="background: #04437d;">
        <i class="fa-solid fa-envelope fa-2x" style="color:#4faaff;"></i>
        <h5 class="mt-2" style="color:#4faaff;">Email</h5>
        <p class="mb-0 text-white">
         bhupenderdagar15@gmail.com
        </p>
      </div>
    </div>

    <!-- RIGHT FORM -->
    <div class="col-lg-8">
      <div class="contact-form p-4 rounded shadow">
        <h4 class="fw-semibold mb-3 text-black">Send Us a Message</h4>

        <form action="contact-submit.php" method="post">

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label text-black">Your Name</label>
              <input type="text" name="name" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label text-black">Email Address</label>
              <input type="email" name="email" class="form-control" required>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label text-black">Mobile Number</label>
            <input type="text" name="phone" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label text-black">Subject</label>
            <select name="subject" class="form-control">
              <option>General Inquiry</option>
              <option>Sell Old Phone</option>
              <option>Buy Refurbished Phone</option>
              <option>Support</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label text-black">Message</label>
            <textarea name="message" rows="4" class="form-control" required></textarea>
          </div>

          <button type="submit" class="btn btn-gradient px-4" style="background: linear-gradient(90deg, #04437d, #04437d);
    color: #fff;
    border: none;
    padding: 11px;">
            <i class="fa fa-paper-plane me-1"></i> Send Message
          </button>

        </form>
      </div>
    </div>

  </div>
</div>

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
