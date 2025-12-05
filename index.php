<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Industrial Information Technology | Portfolio</title>
  <link rel="stylesheet" href="styles.css">
  <meta name="description" content="IoT • Robotics • Programming • Automation • Industrial IT">
</head>

<body>

<!-- ===== HEADER ===== -->
<header class="header">
  <div class="container nav-wrapper">
    <div class="logo">Pablo IIT</div>

    <nav class="main-nav">
      <a href="#home" class="active">Home</a>
      <a href="#about">About</a>
      <a href="#skills">Skills</a>
      <a href="#projects">Projects</a>
      <a href="#services">Services</a>
      <a href="#contact">Contact</a>
    </nav>

    <button id="themeToggle" class="theme-btn">Dark</button>
  </div>
</header>

<!-- ===== HERO ===== -->
<section id="home" class="hero container">
  <div class="hero-left">
    <img src="john.jpg" class="hero-photo" alt="Profile Photo">
  </div>

  <div class="hero-right">
    <h1>Industrial Information Technology Specialist</h1>
    <p class="tagline">IoT • Robotics • Automation • Web Systems • Embedded Devices</p>
    
    <div class="hero-actions">
      <a class="btn primary" href="#contact">Hire Me</a>
      <a class="btn outline" href="assets/CURICULUM VITAE.pdf" download>Download CV</a>
    </div>
  </div>
</section>

<!-- ===== ABOUT ===== -->
<section id="about" class="about container">
  <h2>About Me</h2>

  <div class="about-grid">
    <p class="about-text">
      I am an Industrial Information Technology specialist focused on IoT and robotics 
      development, embedded systems, automation and real-time monitoring.  
      I build intelligent systems using ESP8266/ESP32, sensors, servos, and 
      web dashboards (PHP/MySQL).
    </p>

    <div class="about-skills">
      <h3>Skills Summary</h3>
      <ul>
        <li>Embedded IoT (ESP32 / ESP8266)</li>
        <li>Robotics & servo control</li>
        <li>Web Development (PHP/MySQL/JS)</li>
        <li>Industrial electronics & troubleshooting</li>
      </ul>
    </div>
  </div>
</section>

<!-- ===== SKILLS ===== -->
<section id="skills" class="skills container">
  <h2>Key Skills</h2>

  <div class="skills-grid">
    <div class="skill-card">
      <h3>Programming & Web</h3>
      <ul>
        <li>PHP</li><li>MySQL</li><li>HTML/CSS</li>
        <li>JavaScript</li><li>API Integration</li>
      </ul>
    </div>

    <div class="skill-card">
      <h3>IoT & Robotics</h3>
      <ul>
        <li>ESP8266 / ESP32</li><li>Load Cells (HX711)</li>
        <li>Servo Control</li><li>Sensor Integration</li>
      </ul>
    </div>

    <div class="skill-card">
      <h3>Industrial IT</h3>
      <ul>
        <li>Automation</li><li>Lab Setup</li><li>Industrial Networks</li>
        <li>Troubleshooting</li>
      </ul>
    </div>
  </div>
</section>

<!-- ===== PROJECTS ===== -->
<section id="projects" class="projects container">
  <h2>Projects</h2>

  <div class="project">
    <h3>IoT Robotic Arm for Warehouse Logistics</h3>
    <p><strong>Tech:</strong> ESP8266, HX711, Servos, PHP/MySQL</p>
    <p>Robotic arm picks and weighs items, updates dashboard in real time.</p>
  </div>

  <div class="project">
    <h3>Hand-Tracking Educational Robot</h3>
    <p><strong>Tech:</strong> IR sensors, Servo motors</p>
    <p>Auto camera tracking system for lecturers.</p>
  </div>

  <div class="project">
    <h3>Pick-and-Place IoT Robot</h3>
    <p><strong>Tech:</strong> Mechanical arm + Sensors</p>
    <p>Designed for lightweight warehouse automation.</p>
  </div>
</section>

<!-- ===== SERVICES ===== -->
<section id="services" class="services container">
  <h2>Services</h2>
  <div class="services-grid">
    <div class="service-card">IoT System Development</div>
    <div class="service-card">Robotics Projects</div>
    <div class="service-card">Web Dashboard Design</div>
    <div class="service-card">IT Troubleshooting</div>
    <div class="service-card">Consultation</div>
  </div>
</section>

<!-- ===== CONTACT ===== -->
<section id="contact" class="contact container">
  <h2>Contact</h2>

  <div class="contact-grid">
    <div class="contact-info">
      <p>Email: <a href="mailto:manirumvajohn22@gmail.com">manirumvajohn22@gmail.com</a></p>
      <p>Phone: <a href="tel:+250785788100">+250 785 788 100</a></p>
      <p>WhatsApp: <a href="https://wa.me/250785788100" target="_blank">Start Chat</a></p>
    </div>

    <form action="contact.php" method="post" class="contact-form">
      <label>Name<input type="text" name="name" required></label>
      <label>Email<input type="email" name="email" required></label>
      <label>Message<textarea name="message" rows="5" required></textarea></label>
      <button class="btn primary" type="submit">Send Message</button>
    </form>
  </div>
</section>

<!-- ===== FOOTER ===== -->
<footer class="footer">
  <div class="container">© <?php echo date('Y'); ?> Pablo — Industrial IT</div>
</footer>

<script src="theme.js"></script>

</body>
</html>
