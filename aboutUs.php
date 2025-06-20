<?php 
$pageTitle = "About Us | Covid-19 Testing Management System";
include 'header.php'; 
?>

<!-- AOS CSS (include in header.php if not already included) -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

<!-- Hero Section -->
<div class="container-fluid bg-light py-5 text-center" data-aos="fade-up">
  <h1 class="display-5 fw-bold">Your safety is our priority with secure and efficient COVID-19 test management.</h1>
  <p class="lead">With a trusted COVID-19 Testing Management System built to protect you.</p>
</div>

<!-- About Us & Mission -->
<div class="container about-section mt-5" data-aos="fade-right">
  <div class="row">
    <div class="col-md-6 mb-4">
      <h2>About Us</h2>
      <p>From the onset of the pandemic, we have remained at the forefront of response efforts—providing testing, vaccination, treatment, and post-COVID care. Our team of experienced healthcare professionals is committed to providing quality care, compassion, and safety for every patient, with strict infection control protocols to protect both patients and staff. We continue to be a trusted partner in promoting community health during and beyond the COVID-19 era.</p>
    </div>
    <div class="col-md-6 mb-4" data-aos="fade-left">
      <h2>Our Mission</h2>
      <p>Our mission is to deliver exceptional, safe, and timely healthcare services—including critical COVID-19 care—through innovative medical practices and compassionate support. We are dedicated to minimizing the impact of COVID-19 in our community by providing accessible testing, up-to-date vaccinations, expert treatment, and long-term recovery support. We strive to ensure no one is left behind in receiving the care they need.</p>
    </div>
  </div>
</div>

<!-- Vision -->
<div class="container about-section" data-aos="fade-up">
  <div class="row">
    <div class="col-md-12">
      <h2>Our Vision</h2>
      <p>Our vision is to be the leading healthcare provider in pandemic preparedness and patient-centered care, recognized for our swift COVID-19 response, advanced facilities, and unwavering commitment to health equity. We envision a future where our community is not only protected from current health threats like COVID-19, but is also empowered through preventive care, education, and resilience-building for future health challenges.</p>
    </div>
  </div>
</div>

<!-- Values -->
<div class="container about-section" data-aos="fade-right">
  <div class="row">
    <div class="col-md-12">
      <h2>Our Values</h2>
      <ul class="list-unstyled fs-5">
        <li><i class="bi bi-heart-fill text-danger me-2"></i><strong>Compassion:</strong> We care deeply for every patient, offering comfort and support throughout their COVID-19 journey.</li>
        <li><i class="bi bi-person-check text-success me-2"></i><strong>Integrity:</strong> We provide honest, transparent COVID-19 information and treatment grounded in medical ethics.</li>
        <li><i class="bi bi-trophy text-warning me-2"></i><strong>Excellence:</strong> We uphold the highest standards in COVID-19 care, safety, and clinical practices.</li>
        <li><i class="bi bi-lightbulb-fill text-warning me-2"></i><strong>Innovation:</strong> We use the latest technology and research to combat COVID-19 and support patient recovery.</li>
        <li><i class="bi bi-people-fill text-primary me-2"></i><strong>Community:</strong> We work tirelessly to protect and uplift our community through COVID-19 awareness, prevention, and care.</li>
      </ul>
    </div>
  </div>
</div>

<!-- Meet Our Team -->
<div class="container about-section mb-5" data-aos="fade-up">
  <h2 class="text-center">Meet Our Team</h2>
  <hr class="mx-auto my-4" style="width: 80%;">

  <div class="row justify-content-center justify-content-md-around">
    <!-- Team Member 1 -->
    <div class="col-12 col-sm-6 col-md-4 mb-4">
      <div class="card w-75 mx-auto shadow-lg team-card" data-aos="zoom-in">
        <img src="img/po.1.webp" class="card-img-top pb-3" alt="John Doe">
        <div class="card-body text-center">
          <h5 class="card-title">Dr.V.P.Singh</h5>
          <p class="card-text">Neurosurgeon, MBBS MD</p>
        </div>
      </div>
    </div>
    <!-- Team Member 2 -->
    <div class="col-12 col-sm-6 col-md-4 mb-4">
      <div class="card w-75 mx-auto shadow-lg team-card" data-aos="zoom-in">
        <img src="img/po.2.webp" class="card-img-top rounded-circle p-4" alt="Jane Smith">
        <div class="card-body text-center">
          <h5 class="card-title">Dr.Pooja Banerjee</h5>
          <p class="card-text">Nephrologist, MBBS MD</p>
        </div>
      </div>
    </div>
    <!-- Team Member 3 -->
    <div class="col-12 col-sm-6 col-md-4 mb-4">
      <div class="card w-75 mx-auto shadow-lg team-card" data-aos="zoom-in">
        <img src="img/po.3.jpg" class="card-img-top pb-3" alt="Alice Johnson">
        <div class="card-body text-center">
          <h5 class="card-title">Dr.Arvind Kumar</h5>
          <p class="card-text">Thoracic Surgeon, MBBS MD</p>
        </div>
      </div>
    </div>
  </div>

  <div class="row justify-content-center">
    <!-- Team Member 4 -->
    <div class="col-12 col-sm-6 col-md-4 mb-4">
      <div class="card w-75 mx-auto shadow-lg team-card" data-aos="zoom-in">
        <img src="img/po.4.jpg" class="card-img-top pb-3" alt="Bob Lee">
        <div class="card-body text-center">
          <h5 class="card-title">Dr.Ravi Cherian Mathew</h5>
          <p class="card-text">Cardiac Surgeon, MBBS MD</p>
        </div>
      </div>
    </div>
    <!-- Team Member 5 -->
    <div class="col-12 col-sm-6 col-md-4 mb-4">
      <div class="card w-75 mx-auto shadow-lg team-card" data-aos="zoom-in">
        <img src="img/po.5.jpg" class="card-img-top pb-3" alt="David Brown">
        <div class="card-body text-center">
          <h5 class="card-title">Dr.Sathyaki P Nambala</h5>
          <p class="card-text">Chief Surgeon,Robotic & Minimally invasive Cardiac Surgery, MBBS</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Optional: Additional styling for team cards -->
<style>
  .team-card:hover {
    transform: scale(1.03);
    transition: all 0.3s ease-in-out;
  }
</style>

<!-- AOS JS (include in footer.php or here before closing body tag) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: true
  });
</script>

<?php include 'footer.php'; ?>
