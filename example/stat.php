<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Faculty Union</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    
      body {
          font-family: Arial, sans-serif;
          background-image: linear-gradient(rgba(89, 85, 85, 0.5), rgba(231,47,47,0.5)), url(../images/client.jpg);
          background-position: center;
          height: 100vh;
          background-size: cover;
          padding-top: 80px;

      }
      .header {
        position: fixed;         /* Makes it stick */
        top: 0;                  /* Stick to top */
        width: 100%;             /* Full width */
        background-color: #fff;  /* Match your design */
        z-index: 1000;           /* Stay above other content */
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px 20px;
        gap: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); 
        background: #7D0A0A;
        color: white;
        font-style: italic;
        font-size: 28px;
      }   
    
      .container {
          max-width: 600px;
          margin-top: 20px;
      }
  
      .event-title {
          font-size: 20px;
          font-weight: bold;
          color: #E83F25;
      }
      
      .event-description {
          font-size: 16px;
          color: #444;
          margin-top: 5px;
      }
      .logo {
          width: 80px;
          border-radius: 50%;
          margin: 0 10px;
      }
      h3.text-center.my-4 {
          color: #D3CA79;
          font-size: 40px;
      }
      .hero {
      background: url('https://source.unsplash.com/1600x600/?nature,technology') no-repeat center center/cover;
      color: white;
      padding: 100px 20px;
      text-align: center;
    }

    .section-padding {
      padding: 60px 0;
    }

    footer {
      background-color: #343a40;
      color: #fff;
      padding: 20px 0;
    }

    footer a {
      color: #adb5bd;
      text-decoration: none;
    }

    footer a:hover {
      color:#fff;
    }
  </style>
</head>
<body>

<div class="header">
      <i>Faculty </i>
      <img src="../images/logo.jpg" alt="logo.jpg" class="logo">
      <i>Union</i>
  </div>
  <!-- Navigation -->
  
  
    <!-- Logo -->


    <!-- Toggle Button -->
  

    <!-- Navbar Links -->
    

  <!-- Hero Section -->


  <!-- About Section -->
  <section id="about" class="section-padding bg-light">
    <div class="container text-center">
      <h1>About Us</h1>
      <p class="lead mt-3">The Faculty Union is committed to representing the voices of educators, improving working conditions, and fostering professional growth for all members.</p>
    </div>
  </section>

  <!-- Past Events Carousel -->
  <section id="image-carousel" class="section-padding bg-light">
    <div class="container">
      <h2 class="text-center mb-5">Past Event Highlights</h2>
      <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <!-- Slides -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Fu.jpg" class="d-block w-100 mx-auto" alt="Fu">
          </div>
          <div class="carousel-item">
            <img src="Bu.jpg" class="d-block w-100 mx-auto" alt="Bu">
          </div>
          <div class="carousel-item">
            <img src="kU.jpg" class="d-block w-100 mx-auto" alt="kU">
          </div>
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="image-carousel" class="section-padding bg-light">
  <div class="container">
    <h2 class="text-center">Certificates</h2>

    <!-- Carousel Start -->
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">

      <!-- Indicators -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <!-- Slides -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="Award.jpg" class="d-block w-100 mx-auto" alt="Award">
        </div>
        <div class="carousel-item">
          <img src="CNU.jpg" class="d-block w-100 mx-auto" alt="CNU">
        </div>
        <div class="carousel-item">
          <img src="Un.jpg" class="d-block w-100 mx-auto" alt="UN">
        </div>
      </div>

      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>

    </div>
    <!-- Carousel End -->

  </div>
</section>


  <!-- Contact Section -->
  <section id="Certificates" class="section-padding bg-light">
    <div class="container">
      <h2 class="text-center"></h2>

    </div>
  </section>
  <!-- Footer -->
  <footer class="text-center">
    <div class="container">
      <p>&copy; 2025 Faculty Union</p>
      <p><a href="#">Privacy Policy</a> · <a href="#">Terms</a></p>
    </div>
  </footer>

  <!-- Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
