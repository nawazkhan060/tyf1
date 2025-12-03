<!DOCTYPE php>
<php lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tiny Talk Titans | The Youthopian Force</title>
  <meta name="description" content="For ages 5–15: playful workshops in storytelling, debates, and habit-awareness." />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --bg: #f9fbff;
      --text: #1e293b;
      --accent: #2563eb;
      --light: #ffffff;
      --border: #e2e8f0;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: var(--bg);
      color: var(--text);
      line-height: 1.6;
    }

    .container {
      width: 90%;
      max-width: 1100px;
      margin: 0 auto;
      padding: 0 1rem;
    }

    /* Navbar */
 /* Beautiful Navbar */
header {
  position: fixed;
  top: 0;
  background: transparent;
  left: 0;
  width: 100%;
  background: rgba(255, 255, 255, 0.95);
  padding: 1rem 0;
  z-index: 1000;
  transition: box-shadow 0.3s ease, background 0.3s ease;
  border-bottom: 1px solid rgba(226, 232, 240, 0.6);
}

header.scrolled {
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
  background: rgba(255, 255, 255, 0.98);
}

.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo {
  font-weight: 700;
  font-size: 1.75rem;
  color: var(--accent);
  display: flex;
  align-items: center;
  transition: transform 0.25s ease;
}

.logo:hover {
  transform: scale(1.03);
}

.logo img {
  height: 52px;
  margin-right: 12px;
}

.nav-links {
  display: flex;
  gap: 1.8rem;
}

.nav-links a {
  font-family: 'Poppins', sans-serif;
  font-weight: 500;
  font-size: 1.05rem;
  color: var(--text);
  text-decoration: none;
  position: relative;
  padding: 0.4rem 0;
  transition: color 0.25s ease;
}

.nav-links a::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 0;
  height: 2px;
  background: var(--accent);
  transition: width 0.3s ease;
}

.nav-links a:hover {
  color: var(--accent);
}

.nav-links a:hover::after {
  width: 100%;
}

/* Responsive (keep compact on mobile) */
@media (max-width: 768px) {
  .nav-links {
    gap: 1.2rem;
  }
  .nav-links a {
    font-size: 1rem;
  }
}

    /* Hero */
    .hero {
      height: 80vh;
      margin-top: 120px; /* Account for fixed navbar */
      background: url('images/tiny1.jpg') center/cover no-repeat;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: white;
    }

    .hero-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(51, 50, 50, 0.65);
    }

    .hero-content {
      position: relative;
      z-index: 2;
      max-width: 800px;
      padding: 0 1.5rem;
    }

    .hero-content h1 {
      font-size: 3.2rem;
      font-weight: 700;
      margin-bottom: 1.2rem;
      text-shadow: 0 2px 6px rgba(0,0,0,0.2);
    }

    .hero-content p {
      font-size: 1.4rem;
      opacity: 0.95;
      line-height: 1.5;
    }

    /* Alternating Content */
    .alternating-section {
      padding: 5rem 0;
    }

    .row {
      display: flex;
      align-items: center;
      margin-bottom: 5rem;
      gap: 3rem;
    }

    .row:nth-child(even) {
      flex-direction: row-reverse;
      text-align: right;
    }

    .row:nth-child(even) .content h3,
    .row:nth-child(even) .content p {
      margin-left: auto;
      text-align: right;
    }

    .image {
      flex: 1;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 8px 20px rgba(0,0,0,0.08);
    }

    .image img {
      width: 100%;
      height: 320px;
      object-fit: cover;
      display: block;
    }

    .content {
      flex: 1;
    }

    .content h3 {
      font-size: 1.8rem;
      margin-bottom: 1rem;
      color: var(--text);
    }

    .content p {
      font-size: 1.05rem;
      color: #334155;
      line-height: 1.7;
    }

    /* Gallery */
.gallery-section {
  padding: 3rem 0 5rem;
}

.gallery-title {
  text-align: center;
  font-size: 2rem;
  margin-bottom: 2rem;
  color: var(--text);
}

.gallery-wrapper {
  overflow: hidden;
  padding: 0 1rem;
}

.gallery.auto-scroll {
  display: flex;
  gap: 1.2rem;
  padding: 0.5rem 0;
  width: max-content;
  animation: scrollGallery 25s linear infinite;
}

.gallery.auto-scroll:hover {
  animation-play-state: paused;
}

.gallery.auto-scroll img {
  height: 240px;
  min-width: 280px;
  object-fit: cover;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}

@keyframes scrollGallery {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(calc(-50% - (1.2rem / 2)));
  }
}
.about-oaf-section {
  padding: 4rem 0;
 background-color: #1e293b;
 color: white;
  margin: 3rem 0;
  border-radius: 16px;
  box-shadow: 0 4px 20px rgba(255, 255, 255, 0.06);
}

.about-oaf-content {
  max-width: 850px;
  margin: 0 auto;
  text-align: center;
}

.about-oaf-content h2 {
  font-size: 2.2rem;
  color: var(--text);
  margin-bottom: 1.2rem;
  font-weight: 700;
}

.divider {
  width: 70px;
  height: 4px;
  background: var(--accent);
  margin: 1rem auto;
  border-radius: 2px;
}

.about-oaf-content p {
  font-size: 1.1rem;
  color: #ffffff;
  line-height: 1.8;
  margin-bottom: 1.4rem;
}

.about-oaf-content p:last-child {
  font-style: italic;
  color: var(--accent);
  font-weight: 600;
  margin-top: 1rem;
}
   /* Footer — Same as index.php */


/* Responsive */
@media (max-width: 768px) {
  .footer-grid {
    gap: 2rem;
  }
  .footer-tagline {
    font-size: 0.9rem;
  }
}

    /* Responsive */
    @media (max-width: 768px) {
      .hero {
        height: 70vh;
        margin-top: 60px;
      }
      .hero-content h1 { font-size: 2.3rem; }
      .hero-content p { font-size: 1.15rem; }
      .row { flex-direction: column !important; text-align: center; gap: 1.5rem; }
      .row:nth-child(even) .content h3,
      .row:nth-child(even) .content p {
        margin: 0 auto;
        text-align: center;
      }
      .image img { height: 240px; }
      .content h3 { font-size: 1.6rem; }
    }

    @media (max-width: 480px) {
      .hero-content h1 { font-size: 2rem; }
      .hero-content p { font-size: 1rem; }
      .gallery img { min-width: 240px; height: 200px; }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
<!-- Beautiful Navbar -->
<header id="mainHeader">
  <div class="container navbar">
    <a href="../index.php" class="logo">
      <img style="height: 100px;" src="images/1.png" alt="TYF Logo">
    </a>
    <nav class="nav-links">
      <a href="../index.php#about">About</a>
      <a href="../index.php#projects">Programs</a>
      <a href="../index.php#partners">Partners</a>
      <a href="../achivers.php">Achievers</a>
      <a href="../index.php#contact">Contact</a>
    </nav>
  </div>
</header>

  <!-- Hero -->
  <section class="hero" style="background-image: url('images/tiny2.jpg');">
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <h1>Tiny Talk Titans</h1>
      <p>For ages 5–15: playful workshops in storytelling, debates, and habit-awareness.</p>
    </div>
  </section>
  <!-- About OAF Section -->
<section class="about-oaf-section">
  <div class="container">
    <div class="about-oaf-content">
      <h2 style="color: #2563eb;">About Tiny Talk Titans</h2>
      <div class="divider"></div>
      <p>
        <strong>Tiny Talk Titans</strong> is Nagpur's first Ever series of playful and engaging Public Speaking workshops designed for children and teenagers aged 5–15. Our program nurtures early confidence, fluent English, and social expression in a joyful, energetic setting.
      </p>
      <p>
        Through activities like storytelling, debates, and habit-awareness exercises, we help young minds develop crucial communication and life skills. Our goal is to make learning a fun and interactive experience, empowering the next generation to become confident and articulate individuals.
      </p>
      <p>
        Join us to unlock your child's potential and watch them become a Tiny Talk Titan!
      </p>
    </div>
  </div>
</section>

  <!-- Alternating Content -->
  <section class="alternating-section">
    <div class="container">
      <div class="row">
        <div class="image"><img src="images/tiny33.jpeg" alt="Tiny Talk Titans Session 1"></div>
        <div class="content">
          <h3>Storytelling Workshops</h3>
          <p>Children learn to craft and narrate compelling stories, boosting their creativity and confidence.</p>
        </div>
      </div>

      <div class="row">
        <div class="image"><img src="images/tiny2.jpg" alt="Tiny Talk Titans Session 2"></div>
        <div class="content">
          <h3>Playful Debates</h3>
          <p>Engaging in fun and age-appropriate debates helps children develop critical thinking and persuasive skills.</p>
        </div>
      </div>

      <div class="row">
        <div class="image"><img src="images/tiny4.jpg" alt="Tiny Talk Titans Session 3"></div>
        <div class="content">
          <h3>Habit Awareness</h3>
          <p>We focus on building positive habits, such as active listening and clear articulation, in a supportive environment.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Scrolling Gallery -->
<!-- Scrolling Gallery -->
<section class="gallery-section">
  <div class="container">
    <h2 class="gallery-title">More from Tiny Talk Titans</h2>
    <div class="gallery-wrapper">
      <div class="gallery auto-scroll">
        <!-- Original set -->
        <img src="images/tiny1.jpg" alt="Tiny Talk Titans 1">
        <img src="images/tiny2.jpg" alt="Tiny Talk Titans 2">
        <img src="images/tiny3.jpg" alt="Tiny Talk Titans 3">
        <img src="images/tiny1.jpg" alt="Tiny Talk Titans 4">
        <img src="images/tiny2.jpg" alt="Tiny Talk Titans 5">
        <img src="images/tiny33jpeg" alt="Tiny Talk Titans 6">
        <!-- Duplicate for seamless loop -->
        <img src="images/tiny1.jpg" alt="Tiny Talk Titans 1">
        <img src="images/tiny2.jpg" alt="Tiny Talk Titans 2">
        <img src="images/tiny3.jpg" alt="Tiny Talk Titans 3">
        <img src="images/tiny1.jpg" alt="Tiny Talk Titans 4">
        <img src="images/tiny2.jpg" alt="Tiny Talk Titans 5">
        <img src="images/tiny33jpeg" alt="Tiny Talk Titans 6">
      </div>
    </div>
  </div>
</section>

  <!-- Professional Footer -->
<footer>
  <div class="container">
    <div class="footer-grid">
      <div class="footer-col">
        <div class="footer-logo">TYF</div>
        <p class="footer-slogan">
          The Youthopian Force — Where every voice finds its stage. Empowering Nagpur's youth through public speaking and leadership since 2025.
        </p>
      </div>
      <div class="footer-col">
        <h3>Quick Links</h3>
        <ul class="footer-links">
          <li><a href="../index.php#about">About Us</a></li>
          <li><a href="../index.php#projects">Programs</a></li>
          <li><a href="../index.php#partners">Partners</a></li>
          <li><a href="../index.php#speakers">Speakers</a></li>
          <li><a href="../index.php#contact">Contact</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h3>Our Programs</h3>
        <ul class="footer-links">
          <li><a href="../projects/once-a-fortnight.php">Once a Fortnight</a></li>
          <li><a href="../projects/micathon.php">Micathon</a></li>
          <li><a href="../projects/tiny-talk-titans.php">Tiny Talk Titans</a></li>
          <li><a href="../projects/maitreearchy.php">Maitreearchy</a></li>
          <li><a href="../projects/ocyt.php">OCYC</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h3>Contact Us</h3>
        <div class="footer-contact horizontal">
          <p><i class="fas fa-map-marker-alt"></i> Nagpur, Maharashtra</p>
          <p><i class="fas fa-envelope"></i> theyouthopianforce@gmail.com</p>
          <p><i class="fas fa-phone"></i> +91 XXXXXXXXXX</p>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© 2025 The Youthopian Force. All rights reserved. Nagpur, India.</p>
    </div>
  </div>

  <style>
    /* Footer Styles – Professional & Clean */
    footer {
      background: #f9fbff;
      color: #1e293b;
      padding: 4rem 0 2rem;
      margin-top: 4rem;
      font-family: 'Poppins', sans-serif;
      border-top: 1px solid #e2e8f0;
    }

    .container {
      width: 90%;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 1rem;
    }

    .footer-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 2.5rem;
      margin-bottom: 2.5rem;
    }

    .footer-col h3 {
      font-size: 1.4rem;
      margin-bottom: 1.2rem;
      color: #0f172a;
      position: relative;
      padding-bottom: 8px;
    }

    .footer-col h3::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 40px;
      height: 3px;
      background: #2563eb;
      border-radius: 2px;
    }

    .footer-logo {
      font-size: 2rem;
      font-weight: 700;
      color: #2563eb;
      margin-bottom: 1rem;
    }

    .footer-slogan {
      font-size: 0.95rem;
      line-height: 1.6;
      color: #475569;
      opacity: 0.9;
    }

    .footer-links {
      list-style: none;
      padding: 0;
    }

    .footer-links li {
      margin-bottom: 0.7rem;
    }

    .footer-links a {
      text-decoration: none;
      color: #334155;
      font-size: 0.95rem;
      transition: color 0.2s ease, padding 0.2s ease;
    }

    .footer-links a:hover {
      color: #2563eb;
      padding-left: 4px;
    }

    /* Horizontal Contact */
    .footer-contact.horizontal {
      display: flex;
      flex-wrap: wrap;
      gap: 1.5rem;
      align-items: center;
    }

    .footer-contact.horizontal p {
      margin: 0;
      display: flex;
      align-items: center;
      font-size: 0.95rem;
      color: #334155;
    }

    .footer-contact.horizontal i {
      margin-right: 6px;
      color: #2563eb;
      min-width: 18px;
      text-align: center;
    }

    .footer-bottom {
      text-align: center;
      padding-top: 2rem;
      border-top: 1px solid #e2e8f0;
      color: #64748b;
      font-size: 0.9rem;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .footer-contact.horizontal {
        flex-direction: column;
        align-items: flex-start;
        gap: 0.7rem;
      }
      .footer-grid {
        gap: 2rem;
      }
    }
  </style>
</footer>

</body>
</php>