    <?php include 'header.php'; ?>

<!-- Hero Section -->
<header class="bg-primary text-white text-center py-5" style="background: linear-gradient(135deg, #1e3c72, #2a5298);">
    <div class="container" data-aos="fade-down" data-aos-duration="1500">
        <h1 class="display-4 fw-bold mb-3">Covid-19 Testing Management System</h1>
        <p class="lead mb-4 fs-4">Trusted COVID-19 Testing and Comprehensive Care for Every Patient</p>
        <a href="aboutUs.php" class="btn btn-light btn-lg shadow-sm" style="border-radius: 50px;" data-aos="zoom-in" data-aos-delay="500">Learn More</a>
    </div>
</header>

<?php include 'homeCarousel.php'; ?>

<!-- About Section -->
<section id="about" class="py-5" style="background: #1a1a1a; color: #fff;">
  <div class="container" data-aos="fade-up" data-aos-duration="1500">
    <h2 class="text-center fw-bold mb-4" style="color: #f1f1f1;">About Us</h2>
    <p class="lead text-center mx-auto animate-text" style="max-width: 700px; color: #ccc;">
      At <span class="highlight">Secure</span>, your well-being is our mission — combining expert care and innovation to lead the fight against <span class="highlight">COVID-19</span>.
    </p>
  </div>
</section>

<!-- Initialize AOS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
        easing: 'ease-in-out',
    });
</script>

<?php include 'footer.php'; ?>

<!-- Registration Section -->
<section id="register" class="py-5" style="background: #121212;">
    <div class="container" data-aos="fade-up">
        <h2 class="text-center mb-4 text-light fw-bold">User Registration</h2>
        <form action="register.php" method="POST" class="p-5 rounded-4" style="background: #1f1f1f; box-shadow: 0 8px 24px rgba(0,0,0,0.6);">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="firstname" class="form-label text-light fw-semibold">First Name</label>
                    <input type="text" name="firstname" class="form-control bg-dark text-light border-secondary" required>
                </div>
                <div class="col-md-6">
                    <label for="lastname" class="form-label text-light fw-semibold">Last Name</label>
                    <input type="text" name="lastname" class="form-control bg-dark text-light border-secondary" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label text-light fw-semibold">Email Address</label>
                <input type="email" name="email" class="form-control bg-dark text-light border-secondary" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label text-light fw-semibold">Phone Number</label>
                <input type="text" name="phone" class="form-control bg-dark text-light border-secondary" required>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="dob" class="form-label text-light fw-semibold">Date of Birth</label>
                    <input type="date" name="dob" class="form-control bg-dark text-light border-secondary" required>
                </div>
                <div class="col-md-6">
                    <label for="gender" class="form-label text-light fw-semibold">Gender</label>
                    <select name="gender" class="form-select bg-dark text-light border-secondary" required>
                        <option value="" class="text-muted">-- Select Gender --</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label text-light fw-semibold">Address</label>
                <textarea name="address" rows="3" class="form-control bg-dark text-light border-secondary" required></textarea>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="password" class="form-label text-light fw-semibold">Password</label>
                    <input type="password" name="password" class="form-control bg-dark text-light border-secondary" required>
                </div>
                <div class="col-md-6">
                    <label for="confirm_password" class="form-label text-light fw-semibold">Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control bg-dark text-light border-secondary" required>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-outline-light btn-lg px-5 mt-3 shadow-sm">Register</button>
            </div>
        </form>
    </div>
</section>

<!-- AOS CSS & JS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  AOS.init({ duration: 1000, once: true });
</script>

<?php include 'footer.php'; ?>
