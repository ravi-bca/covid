<?php
$pageTitle = "Available Tests | Covid-19 Testing Management System";
include 'header.php';
?>

<!-- Page Styling -->
<style>
  body {
    background-color: #f8f9fa;
  }

  .test-card {
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: transform 0.4s ease, box-shadow 0.4s ease;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 0.6s forwards;
  }

  /* stagger animations by nth-child */
  .test-card:nth-child(1) { animation-delay: 0.1s; }
  .test-card:nth-child(2) { animation-delay: 0.2s; }
  .test-card:nth-child(3) { animation-delay: 0.3s; }
  .test-card:nth-child(4) { animation-delay: 0.4s; }
  .test-card:nth-child(5) { animation-delay: 0.5s; }
  .test-card:nth-child(6) { animation-delay: 0.6s; }
  .test-card:nth-child(7) { animation-delay: 0.7s; }
  .test-card:nth-child(8) { animation-delay: 0.8s; }
  .test-card:nth-child(9) { animation-delay: 0.9s; }

  .test-card:hover {
    transform: translateY(-10px) scale(1.05);
    box-shadow: 0 15px 30px rgba(0, 123, 255, 0.3);
  }

  .card-title {
    font-weight: 700;
    font-size: 1.4rem;
    color: #007bff;
    margin-bottom: 0.75rem;
  }

  .card-text {
    flex-grow: 1;
    color: #555;
    font-size: 1rem;
  }

  .book-btn {
    background-color: #007bff;
    color: white;
    font-weight: 600;
    border-radius: 50px;
    padding: 0.5rem 1.5rem;
    box-shadow: 0 4px 15px rgba(0,123,255,0.4);
    transition: box-shadow 0.3s ease, transform 0.3s ease;
  }

  .book-btn:hover {
    background-color: #0056b3;
    box-shadow: 0 6px 25px rgba(0,86,179,0.7);
    transform: scale(1.05);
  }

  @keyframes fadeInUp {
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
</style>

<div class="container my-5">
  <h2 class="text-center mb-5 fw-bold" style="color: #003366;">Available COVID-19 Tests</h2>
  <div class="row g-4 justify-content-center">

    <!-- Test Cards -->
    <?php
    $tests = [
      ["RT-PCR Test", "Gold standard for COVID-19 detection via nasal/throat swab."],
      ["Rapid Antigen Test", "Fast results to detect active COVID-19 infection."],
      ["Antibody (IgG/IgM) Test", "Checks past infection by detecting antibodies."],
      ["Rapid PCR Test", "Quick and accurate RT-PCR alternative with faster results."],
      ["Saliva-based RT-PCR", "Non-invasive testing using saliva samples."],
      ["COVID-19 Home Collection", "Home sample collection for convenience and safety."],
      ["COVID-19 Travel Testing", "Tests tailored to international and domestic travel requirements."],
      ["Post-COVID Health Panel", "Health checkup for recovered COVID-19 patients."],
      ["Influenza & COVID Combo", "Simultaneous testing for flu and COVID-19."],
    ];

    foreach ($tests as $index => $test) {
      echo "
      <div class='col-md-4 col-sm-6'>
        <div class='card test-card h-100'>
          <div class='card-body d-flex flex-column'>
            <h5 class='card-title'>{$test[0]}</h5>
            <p class='card-text'>{$test[1]}</p>
            <a href='book-test.php?test=" . urlencode($test[0]) . "' class='btn book-btn mt-auto align-self-start'>Book Now</a>
          </div>
        </div>
      </div>
      ";
    }
    ?>

  </div>
</div>

<?php include 'footer.php'; ?>
