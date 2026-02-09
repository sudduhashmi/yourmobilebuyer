<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sell Any Mobile Phone in Delhi & Gurgaon | Instant Cash | YourMobileBuyer</title>
<meta name="description" content="Sell any mobile phone in Delhi & Gurgaon. We buy old, used, broken and dead phones of all brands with free pickup and instant payment. Get the best price today.">

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
.card{border-radius:20px;padding:20px;background:#fff;box-shadow:0 12px 30px rgba(0,0,0,0.08);margin-bottom:20px;}
.card h4{text-align:center;margin-bottom:20px;font-weight:700;}
select, button{border-radius:12px;}
.condition-row{display:flex;gap:10px;margin-bottom:15px;}
.condition-btn{flex:1;padding:12px 0;font-weight:500;transition:.3s;}
.condition-btn.active{background:#04437d;color:#fff;border-color:#04437d;}
#priceBox{text-align:center;font-size:22px;font-weight:700;color:#f05a28;margin-top:15px;}
.brand-pill{display:inline-block;background:#fff;border-radius:25px;padding:8px 15px;margin:3px;box-shadow:0 5px 15px rgba(0,0,0,0.08);transition:.3s;}
.brand-pill:hover{transform:scale(1.05);}
</style>
</head>
<body>
  <?php include 'includes/header.php'; ?>
<div class="container-fluid px-3 px-md-5">

<!-- HERO CARD -->
<div class="card">
<h4>Sell Your Mobile From Any Brand</h4>
<p class="text-center">Select your brand & model, answer simple questions, and get your instant price.</p>

<!-- Brand Select -->
<select id="brand" class="form-select mb-3">
<option value="">Select Brand</option>
<option value="Apple">Apple</option>
<option value="Samsung">Samsung</option>
<option value="Xiaomi">Xiaomi / Redmi</option>
<option value="Vivo">Vivo</option>
<option value="Oppo">Oppo</option>
<option value="OnePlus">OnePlus</option>
<option value="Realme">Realme</option>
<option value="Pixel">Google Pixel</option>
<option value="Motorola">Motorola</option>
<option value="Nokia">Nokia</option>
</select>

<!-- Model Select -->
<select id="model" class="form-select mb-3">
<option value="">Select Model</option>
<option value="Model 1">Model 1</option>
<option value="Model 2">Model 2</option>
<option value="Model 3">Model 3</option>
</select>

<!-- Condition Questions -->
<div class="condition-row">
<button class="btn btn-outline-success condition-btn" data-value="yes">Switching ON: Yes</button>
<button class="btn btn-outline-danger condition-btn" data-value="no">Switching ON: No</button>
</div>

<div class="condition-row">
<button class="btn btn-outline-success condition-btn" data-value="yes">Screen Working: Yes</button>
<button class="btn btn-outline-danger condition-btn" data-value="no">Screen Working: No</button>
</div>

<div class="condition-row">
<button class="btn btn-outline-success condition-btn" data-value="yes">Touch Working: Yes</button>
<button class="btn btn-outline-danger condition-btn" data-value="no">Touch Working: No</button>
</div>

<div class="condition-row">
<button class="btn btn-outline-success condition-btn" data-value="no">Physical Damage: No</button>
<button class="btn btn-outline-danger condition-btn" data-value="yes">Physical Damage: Yes</button>
</div>

<div class="condition-row">
<button class="btn btn-outline-success condition-btn" data-value="no">Water Damage: No</button>
<button class="btn btn-outline-danger condition-btn" data-value="yes">Water Damage: Yes</button>
</div>

<button class="btn btn-primary w-100 mt-3" onclick="calculatePrice()">Get Price</button>

<h3 id="priceBox">Your Price: ₹0</h3>
</div>

<!-- TOP BRANDS CARD -->
<div class="card text-center">
<h4>Popular Brands We Buy</h4>
<div>
<span class="brand-pill">Apple</span>
<span class="brand-pill">Samsung</span>
<span class="brand-pill">Xiaomi / Redmi</span>
<span class="brand-pill">Vivo</span>
<span class="brand-pill">Oppo</span>
<span class="brand-pill">OnePlus</span>
<span class="brand-pill">Realme</span>
<span class="brand-pill">Pixel</span>
<span class="brand-pill">Motorola</span>
<span class="brand-pill">Nokia</span>
</div>
</div>

<!-- CTA -->
<div class="card text-center">
<h4>Ready to Sell?</h4>
<button class="btn btn-success w-100" onclick="alert('Proceed to Sell')">Sell Now</button>
</div>

</div>
  <?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- JS -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
let basePrice = 5000;
let finalPrice = basePrice;

// Toggle active class
$(".condition-btn").click(function(){
  $(this).siblings().removeClass("active");
  $(this).addClass("active");
});

// Price calculation
function calculatePrice(){
  finalPrice = basePrice;
  $(".condition-btn.active").each(function(){
    let val = $(this).data("value");
    let text = $(this).text();
    if(val=="no" && text.includes("Switching ON")) finalPrice -= 2000;
    if(val=="no" && text.includes("Screen Working")) finalPrice -= 1000;
    if(val=="no" && text.includes("Touch Working")) finalPrice -= 1000;
    if(val=="yes" && text.includes("Physical Damage")) finalPrice -= 1500;
    if(val=="yes" && text.includes("Water Damage")) finalPrice -= 2000;
  });
  if(finalPrice < 500) finalPrice = 500;
  $("#priceBox").text("Your Price: ₹" + finalPrice);
}
</script>

</body>
</html>
