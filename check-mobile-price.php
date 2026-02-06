<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Check Mobile Price | YourMobileBuyer</title>
<meta name="description" content="Check the price of your mobile instantly. Works for old, used, broken, or dead phones. Free pickup & instant payment.">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
 <link rel="stylesheet" href="css/style.css">
<style>

/* Brand / Model Selection */
.selection-box {
  display:flex;
  gap:20px;
  flex-wrap:wrap;
  margin-bottom:30px;
}
.selection-box select {
  flex:1;
  padding:12px 15px;
  font-size:16px;
  border-radius:10px;
  border:1px solid #ccc;
}

/* Condition Questions */
.condition-box {
  display:grid;
  grid-template-columns: repeat(auto-fit,minmax(220px,1fr));
  gap:20px;
  margin-bottom:30px;
}
.condition-card {
  background:#fff;
  padding:13px;
  border-radius:15px;
  text-align:center;
  cursor:pointer;
  box-shadow:0 10px 25px rgba(0,0,0,0.08);
  transition: transform 0.3s, background 0.3s;
}
.condition-card:hover {
  transform: translateY(-3px);
  background:#04437d;
  color:#fff;
}
.condition-card.selected {
  background:#04437d;
  color:#fff;
}
.condition-card span {
  font-size:16px;
  font-weight:600;
}

/* Price Box */
.price-box {
  background:#04437d;
  color:#fff;
  padding:40px 20px;
  border-radius:20px;
  text-align:center;
  font-size:28px;
  font-weight:700;
  margin-bottom:30px;
}

/* CTA */
.cta-box {
  text-align:center;

}
.cta-box .btn {
    background: #ffffff;
    color: #000000;
    border: 1px solid #04437d;
    padding: 15px 40px;
    font-size: 18px;
    border-radius: 25px;
    font-weight: 600;
    transition: .3s;
}
.cta-box .btn:hover {
  background:#3e8534;
}

/* Extra Info Cards */
.info-grid {
  display:grid;
  grid-template-columns: repeat(auto-fit,minmax(250px,1fr));
  gap:25px;
}
.info-card {
  background:#fff;
  padding:25px 20px;
  border-radius:20px;
  box-shadow:0 12px 25px rgba(0,0,0,0.1);
  text-align:center;
}
.info-card h5 {
font-size: 18px;
    font-weight: 600;
    margin-bottom: 10px;
    color: #04437d;
    text-align: center !important;
}
.info-card p {
  font-size:14px;
  color:#555;
  line-height:1.5;
}
</style>
</head>
<body>
   <?php include 'includes/header.php'; ?>
   <section class="page-breadcrumb">
  <div class="container-fluid px-3 px-md-5">
    <div class="row align-items-center">
      
      <!-- LEFT CONTENT -->
      <div class="col-md-6">
        <div class="breadcrumb-content">
          <h1>Check Your Mobile Price Instantly</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Mobile Price
              </li>
            </ol>
          </nav>
        </div>
      </div>

      <!-- RIGHT BLANK -->
   <div class="col-md-6 text-center text-md-end">
  <img src="images/IMG-BG.png" alt="" class="img-fluid">
</div>


    </div>
  </div>
</section>

<section class="py-5">
<div class="container-fluid px-3 px-md-5">

<h2>Check Your Mobile Price Instantly</h2>

<!-- Brand & Model Selection -->
<div class="selection-box">
<select id="brand">
  <option value="">Select Brand</option>
  <option>Apple</option>
  <option>Samsung</option>
  <option>OnePlus</option>
  <option>Xiaomi</option>
  <option>Redmi</option>
  <option>Realme</option>
  <option>Vivo</option>
  <option>Oppo</option>
  <option>iQOO</option>
  <option>Motorola</option>
  <option>Nothing</option>
  <option>Google</option>
  <option>Nokia</option>
  <option>Infinix</option>
  <option>Tecno</option>
  <option>Lava</option>
  <option>Micromax</option>
  <option>Asus</option>
  <option>Poco</option>
  <option>Honor</option>
  <option>Sony</option>
  <option>Huawei</option>
</select>
<select id="model">
  <option value="">Select Model</option>

  <!-- Apple -->
  <option>iPhone 15 Pro Max</option>
  <option>iPhone 15 Pro</option>
  <option>iPhone 15</option>
  <option>iPhone 14 Pro Max</option>
  <option>iPhone 14</option>
  <option>iPhone 13</option>
  <option>iPhone 12</option>
  <option>iPhone 11</option>

  <!-- Samsung -->
  <option>Galaxy S24 Ultra</option>
  <option>Galaxy S23 Ultra</option>
  <option>Galaxy S23</option>
  <option>Galaxy A54</option>
  <option>Galaxy A34</option>
  <option>Galaxy M34</option>
  <option>Galaxy F54</option>

  <!-- OnePlus -->
  <option>OnePlus 12</option>
  <option>OnePlus 11</option>
  <option>OnePlus Nord CE 3</option>
  <option>OnePlus Nord 2</option>

  <!-- Xiaomi / Redmi -->
  <option>Redmi Note 13 Pro+</option>
  <option>Redmi Note 12</option>
  <option>Redmi 12</option>
  <option>Xiaomi 13 Pro</option>

  <!-- Realme -->
  <option>Realme 12 Pro+</option>
  <option>Realme 11 Pro</option>
  <option>Realme Narzo 60</option>

  <!-- Vivo / iQOO -->
  <option>Vivo V29</option>
  <option>Vivo Y200</option>
  <option>iQOO Neo 7</option>
  <option>iQOO Z7</option>

  <!-- Oppo -->
  <option>Oppo Reno 10</option>
  <option>Oppo F23</option>

  <!-- Motorola -->
  <option>Moto Edge 40</option>
  <option>Moto G84</option>

  <!-- Nothing -->
  <option>Nothing Phone (2)</option>
  <option>Nothing Phone (1)</option>

  <!-- Google -->
  <option>Pixel 8 Pro</option>
  <option>Pixel 7</option>
  <option>Pixel 6a</option>

  <!-- Others -->
  <option>Nokia G42</option>
  <option>Infinix Zero 30</option>
  <option>Tecno Spark 20</option>
  <option>Lava Agni 2</option>
  <option>Micromax In Note 2</option>
  <option>Asus ROG Phone 7</option>
  <option>Poco X6 Pro</option>
  <option>Sony Xperia 1</option>
</select>

</div>

<!-- Condition Questions -->
<div class="condition-box">

  <!-- Display -->
  <div class="condition-card">Screen Working</div>
  <div class="condition-card">Touch Working</div>
  <div class="condition-card">Screen Cracked</div>
  <div class="condition-card">Display Lines / Dead Pixels</div>
  <div class="condition-card">Display Replaced</div>

  <!-- Body -->
  <div class="condition-card">No Physical Damage</div>
  <div class="condition-card">Minor Scratches</div>
  <div class="condition-card">Heavy Dents</div>
  <div class="condition-card">Back Panel Broken</div>
  <div class="condition-card">Phone Bent</div>

  <!-- Battery & Charging -->
  <div class="condition-card">Battery Working</div>
  <div class="condition-card">Battery Drains Fast</div>
  <div class="condition-card">Charging Working</div>
  <div class="condition-card">Charging Issue</div>

  <!-- Buttons & Sensors -->
  <div class="condition-card">Power Button Working</div>
  <div class="condition-card">Volume Button Working</div>
  <div class="condition-card">Fingerprint Working</div>
  <div class="condition-card">Face Unlock Working</div>

  <!-- Camera -->
  <div class="condition-card">Front Camera Working</div>
  <div class="condition-card">Rear Camera Working</div>
  <div class="condition-card">Camera Issue</div>

  <!-- Audio -->
  <div class="condition-card">Speaker Working</div>
  <div class="condition-card">Mic Working</div>

  <!-- Network -->
  <div class="condition-card">SIM Network Working</div>
  <div class="condition-card">WiFi / Bluetooth Working</div>

  <!-- Software -->
  <div class="condition-card">Phone Switches ON</div>
  <div class="condition-card">Phone Does Not Switch ON</div>
  <div class="condition-card">Google / iCloud Lock</div>
  <div class="condition-card">IMEI Valid</div>

  <!-- Water / Internal -->
  <div class="condition-card">No Water Damage</div>
  <div class="condition-card">Water Damaged</div>
  <div class="condition-card">Motherboard Issue</div>

</div>


<!-- Price Display -->
<div class="price-box" id="priceBox">₹0</div>



<!-- Extra Info -->
<div class="info-grid pb-5">
  <div class="info-card">
    <h5>Free Pickup</h5>
    <p>We pick up your phone for free from your location.</p>
  </div>
  <div class="info-card">
    <h5>Instant Payment</h5>
    <p>Get payment instantly via your preferred method.</p>
  </div>
  <div class="info-card">
    <h5>Data Safety</h5>
    <p>All personal data is securely erased before processing.</p>
  </div>
  <div class="info-card">
    <h5>Resale / Recycling</h5>
    <p>Phones are refurbished or recycled responsibly.</p>
  </div>
</div>
</div>
</section>

<section class="sellfaq-section py-5 bg-light">
  <div class="container">
    <div class="text-center mb-4">
      <h2 class="fw-bold">Check Mobile Price – FAQs</h2>
    </div>

    <div class="accordion sellfaq-accordion" id="pricefaqMain">

      <!-- 1 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#pricefaq1">
            How can I check my mobile price?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="pricefaq1" class="accordion-collapse collapse show" data-bs-parent="#pricefaqMain">
          <div class="accordion-body">
            Select your mobile brand, model, storage and condition. Our system will instantly show the estimated price for your device.
          </div>
        </div>
      </div>

      <!-- 2 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#pricefaq2">
            Is the price shown final?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="pricefaq2" class="accordion-collapse collapse" data-bs-parent="#pricefaqMain">
          <div class="accordion-body">
            The price shown is an estimated value. Final price is confirmed after a quick physical inspection during pickup.
          </div>
        </div>
      </div>

      <!-- 3 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#pricefaq3">
            Does checking price cost anything?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="pricefaq3" class="accordion-collapse collapse" data-bs-parent="#pricefaqMain">
          <div class="accordion-body">
            No, checking your phone price is completely free. You can check the value anytime without any charges.
          </div>
        </div>
      </div>

      <!-- 4 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#pricefaq4">
            What affects my phone's price?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="pricefaq4" class="accordion-collapse collapse" data-bs-parent="#pricefaqMain">
          <div class="accordion-body">
            Price depends on brand, model, storage, physical condition, working status and current market demand.
          </div>
        </div>
      </div>

      <!-- 5 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#pricefaq5">
            Can I check price for a damaged phone?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="pricefaq5" class="accordion-collapse collapse" data-bs-parent="#pricefaqMain">
          <div class="accordion-body">
            Yes, you can check the price for broken, dead or damaged phones. Just select the correct condition while checking price.
          </div>
        </div>
      </div>

      <!-- 6 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#pricefaq6">
            What should I do after checking the price?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="pricefaq6" class="accordion-collapse collapse" data-bs-parent="#pricefaqMain">
          <div class="accordion-body">
            If you're happy with the price, you can proceed to book a free pickup, confirm details and get paid instantly at doorstep.
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CTA -->
<div class="cta-box text-center  bg-light rounded shadow ">
  <h3 class="mb-2">Upgrade Your Device Today!</h3>
  <p class="mb-3">Don’t let your old phone gather dust. Get the best value instantly and enjoy a hassle-free selling experience.</p>
  <a href="contact-us.php" class="btn btn-primary btn-lg">Sell Your Phone Now</a>
</div>

  <?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- JS -->
<script>
const basePrices = {
  apple: {
    iphone14: 60000,
    iphone13: 45000
  },
  samsung: {
    s23: 40000
  },
  oneplus: {
    op11: 35000
  }
};

function toggleSelection(card){
  card.classList.toggle('selected');
  calculatePrice();
}

function calculatePrice(){
  const brand = document.getElementById('brand').value;
  const model = document.getElementById('model').value;

  if(!brand || !model){
    document.getElementById('priceBox').innerText = "₹0";
    return;
  }

  let price = basePrices[brand][model] || 0;

  document.querySelectorAll('.condition-card.selected').forEach(card=>{
    price -= parseInt(card.dataset.price);
  });

  if(price < 0) price = 0;

  document.getElementById('priceBox').innerText = "₹" + price;
}
</script>


</body>
</html>
