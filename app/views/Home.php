<!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
    <div class="container">
      <a class="navbar-brand" href="#">CoffeeHouse</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navMenu">
        <ul class="navbar-nav text-center">
          <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#menu">Menu</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <header class="hero" id="home">
    <div class="hero-content" data-aos="fade-up">
      <h1 class="display-4 fw-bold">Welcome to CoffeeHouse</h1>
      <p class="lead">A perfect place to enjoy your favorite coffee</p>
      <a href="#menu" class="btn btn-outline-light btn-lg mt-3">View Menu</a>
    </div>
  </header>

  <!-- Menu Section -->
  <section id="menu" class="bg-light section-padding">
    <div class="container text-center" data-aos="fade-up">
      <h2 class="mb-4">Our Menu</h2>
      <div class="row g-4">
        <div class="col-md-4 menu-item">
          <div class="card h-100">
            <img src="<?= BASEURL; ?>/img/Hot_Kopi_Bali.jpg" class="card-img-top" alt="Latte">
            <div class="card-body">
              <h5 class="card-title">Latte</h5>
              <p class="card-text">Smooth espresso mixed with steamed milk and foam.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 menu-item">
          <div class="card h-100">
            <img src="<?= BASEURL; ?>/img/Kopi_Aceh.jpg" class="card-img-top" alt="Espresso">
            <div class="card-body">
              <h5 class="card-title">Espresso</h5>
              <p class="card-text">Bold and intense coffee shot to energize your day.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 menu-item">
          <div class="card h-100">
            <img src="<?= BASEURL; ?>/img/Kopi_Sidikalang.jpg" class="card-img-top" alt="Mocha">
            <div class="card-body">
              <h5 class="card-title">Mocha</h5>
              <p class="card-text">Rich blend of espresso, chocolate, and steamed milk.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="section-padding">
    <div class="container" data-aos="fade-right">
      <div class="row align-items-center">
        <div class="col-md-6">
          <img src="<?= BASEURL; ?>/img/thumbnail1.jpg" class="img-fluid rounded shadow" alt="About us">
        </div>
        <div class="col-md-6">
          <h2>About CoffeeHouse</h2>
          <p>At CoffeeHouse, we serve handcrafted coffee and freshly baked goods in a cozy atmosphere. Our baristas are passionate about every cup, ensuring quality in every sip.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="bg-light section-padding">
    <div class="container" data-aos="fade-up">
      <h2 class="text-center mb-4">Get in Touch</h2>
      <form class="row g-3">
        <div class="col-md-6">
          <input type="text" class="form-control" placeholder="Your Name" required>
        </div>
        <div class="col-md-6">
          <input type="email" class="form-control" placeholder="Your Email" required>
        </div>
        <div class="col-12">
          <textarea class="form-control" rows="4" placeholder="Your Message" required></textarea>
        </div>
        <div class="col-12 text-center">
          <button type="submit" class="btn btn-dark px-5">Send Message</button>
        </div>
      </form>
    </div>
  </section>
