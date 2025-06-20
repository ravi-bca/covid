<?php
$pageTitle = "Contact Us | Covid-19 Testing";
include 'header.php';
?>

<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Contact Us</h2>
        <div class="row">
            <!-- Contact Info + Map -->
            <div class="col-md-6 mb-4">
                <h5>Get in Touch</h5>
                <p><i class="bi bi-geo-alt-fill me-2"></i>
                    KIMS Hospital, Vidya Nagar Road, Hubli,<br>
                    Karnataka, India - 580022
                </p>
                <p><i class="bi bi-telephone-fill me-2"></i> Landline 1: <a href="tel:0836-2221111">0836-2221111</a></p>
                <p><i class="bi bi-telephone-fill me-2"></i> Landline 2: <a href="tel:0836-2222222"> 0836-2222222 </a></p>
                <p><i class="bi bi-telephone-outbound-fill me-2"></i> Toll Free: <a href="tel:1800-123-4567">1800-123-4567 </a></p>
                <p><i class="bi bi-envelope-fill me-2"></i>
                    Email: <a href="mailto:info@securehospitals.in">principalkimshubli@gmail.com</a>
                </p>
                <p>
                    <a href="https://maps.app.goo.gl/5bM8etFC9eb6NZEX6" target="_blank" class="btn btn-outline-primary mt-2">
                        <i class="bi bi-map-fill me-2"></i>View on Google Maps
                    </a>
                </p>

                <!-- Embedded Map -->
                <div class="ratio ratio-16x9 rounded shadow-sm">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.752641947632!2d75.1124279!3d15.348902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bb8d7314dae0de1%3A0x977379937338e52f!2sSeCURE%20Hospital%2C%20Hubli!5e0!3m2!1sen!2sin!4v1713961400000!5m2!1sen!2sin"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

            </div>

            <!-- Contact Form -->
            <div class="col-md-6">
                <h5>Send Us a Message</h5>
                <form method="post" action="#">
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>