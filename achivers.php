<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Our Achievers – TYF</title>
  <meta name="description" content="Celebrating the achievements of TYF participants and leaders." />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --dark-blue: #f9fbff;
      --navy-blue: #e6f0ff;
      --light-navy: #ffffff;
      --accent-blue: #2563eb;
      --white: #000000;
      --text-light: #1e293b;
      --shadow: 0 10px 30px rgba(37, 99, 235, 0.15);
      --transition: all 0.3s ease;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      color: var(--text-light);
      background: var(--dark-blue);
      line-height: 1.6;
      scroll-behavior: smooth;
      overflow-x: hidden;
    }

    .container {
      width: 90%;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 1rem;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    /* Navbar */
    header {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
      background: transparent;
      transition: var(--transition);
      padding: 1rem 0;
    }

    header.scrolled {
      background: var(--navy-blue);
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo img {
      height: 60px;
      margin-right: 10px;
    }

    .nav-links {
      display: flex;
      align-items: center;
      gap: 2rem;
    }

    .nav-links a {
      font-weight: 600;
      color: var(--white);
      transition: var(--transition);
      position: relative;
      padding: 5px 0;
    }

    .nav-links a:hover,
    .nav-links a.active {
      color: var(--accent-blue);
    }

    .nav-links a::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 0;
      height: 2px;
      background: var(--accent-blue);
      transition: var(--transition);
    }

    .nav-links a:hover::after,
    .nav-links a.active::after {
      width: 100%;
    }

    /* Page Title */
    .page-title {
      text-align: center;
      font-size: 2.8rem;
      font-weight: 700;
      margin: 100px 0 4rem;
      color: var(--white);
      position: relative;
      padding-bottom: 1.5rem;
    }

    .page-title::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 100px;
      height: 4px;
      background: var(--accent-blue);
    }

    /* Achievements Section */
    .achievement-card {
      display: flex;
      background: var(--navy-blue);
      margin-bottom: 3rem;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: var(--shadow);
    }

    .achievement-card:nth-child(even) {
      flex-direction: row-reverse;
    }

    .achievement-image {
      flex: 0 0 42%;
      min-height: 320px;
    }

    .achievement-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .achievement-content {
      padding: 2.5rem;
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .achievement-content h2 {
      font-size: 1.8rem;
      margin-bottom: 1rem;
      color: var(--white);
    }

    .achievement-content p {
      font-size: 1.05rem;
      line-height: 1.7;
      margin-bottom: 1.5rem;
    }

    .award-winners {
      list-style: none;
      padding-left: 0;
    }

    .award-winners li {
      margin-bottom: 0.7rem;
      padding-left: 1.2rem;
      position: relative;
      color: var(--text-light);
    }

    .award-winners li::before {
      content: "•";
      color: var(--accent-blue);
      position: absolute;
      left: 0;
    }

    /* Footer — EXACT COPY FROM INDEX.HTML */
    footer {
      background: var(--dark-blue);
      color: var(--white);
      padding: 5rem 0 3rem;
      position: relative;
      overflow: hidden;
    }

    footer::before {
      content: '';
      position: absolute;
      bottom: -50px;
      left: 50%;
      transform: translateX(-50%);
      width: 300px;
      height: 300px;
      background: url('images/1.png') no-repeat center center / contain;
      opacity: 0.05;
    }

    .footer-content {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 2.5rem;
      margin-bottom: 3rem;
    }

    .footer-column h3 {
      font-size: 1.5rem;
      margin-bottom: 1.5rem;
      position: relative;
      padding-bottom: 10px;
      color: var(--white);
    }

    .footer-column h3::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 40px;
      height: 3px;
      background: var(--accent-blue);
    }

    .footer-links {
      list-style: none;
    }

    .footer-links li {
      margin-bottom: 0.8rem;
    }

    .footer-links a {
      color: var(--text-light);
      transition: var(--transition);
      display: inline-block;
    }

    .footer-links a:hover {
      color: var(--accent-blue);
      transform: translateX(5px);
    }

    .footer-contact p {
      margin-bottom: 0.8rem;
      display: flex;
      align-items: center;
    }

    .footer-contact i {
      margin-right: 10px;
      color: var(--accent-blue);
    }

    .footer-logo {
      font-size: 2.2rem;
      font-weight: 700;
      color: var(--white);
      margin-bottom: 1.2rem;
      display: block;
    }

    .footer-slogan {
      max-width: 600px;
      margin: 0 auto 1.5rem;
      opacity: 0.9;
      line-height: 1.7;
    }

    .copyright {
      margin-top: 2rem;
      color: #aaa;
      font-size: 1rem;
      padding-top: 2rem;
      border-top: 1px solid var(--light-navy);
      text-align: center;
    }

    /* Scroll effect for header */
    .scroll-progress {
      position: fixed;
      top: 0;
      left: 0;
      height: 4px;
      background: var(--accent-blue);
      z-index: 1001;
      width: 0;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .achievement-card, .achievement-card:nth-child(even) {
        flex-direction: column;
      }
      .achievement-image {
        min-height: 240px;
      }
      .page-title {
        margin-top: 80px;
        font-size: 2.3rem;
      }
    }
  </style>
</head>
<body>

  <!-- Scroll Progress Indicator -->
  <div class="scroll-progress" id="scrollProgress"></div>

  <!-- Navbar -->
  <header id="mainHeader">
    <div class="container navbar">
      <a href="index.php" class="logo">
        <img style="height: 130px;" src="images/1.png" alt="TYF Logo">
      </a>
      <ul class="nav-links">
        <li><a href="index.php#about">About</a></li>
        <li><a href="index.php#projects">Programs</a></li>
        <li><a href="index.php#partners">Partners</a></li>
        <li><a href="index.php#speakers">Speakers</a></li>
        <li><a href="achivers.php" class="active">Achievers</a></li>
        <li><a href="index.php#contact">Contact</a></li>
      </ul>
    </div>
  </header>

  <!-- Title -->
  <div style="margin-top: 220px;" class="container">
    <h1 class="page-title">TYF’s Wall of Achievements</h1>

    <!-- Achievement 1 -->
    <div class="achievement-card">
      <div class="achievement-image">
        <img src="images/zentih.jpeg" alt="House of Zenith">
      </div>
      <div class="achievement-content">
        <h2>🌟 House of Zenith Youth Parliament</h2>
        <p>Our delegates truly shined at House of Zenith 2.3 Youth Parliament held at Yeshwantrao Chavan College of Engineering Nagpur.</p>
        <ul class="award-winners">
          <li><strong>Ishita:</strong> Best Delegate in Standing Committee on Environment, Forests & Climate Change × Finance</li>
          <li><strong>Disha:</strong> High Commendation in Environment & Finance</li>
          <li><strong>Parth:</strong> High Commendation in IT × Home Affairs</li>
          <li><strong>Prem:</strong> Special Mention in IT × Home Affairs</li>
        </ul>
      </div>
    </div>

    <!-- Achievement 2 -->
    <div class="achievement-card">
      <div class="achievement-image">
        <img src="images/infacto.jpeg" alt="Infacto Debate">
      </div>
      <div class="achievement-content">
        <h2>💡 Community Partner at Infacto Debate</h2>
        <p>TYF was a proud community partner at Infacto Debate 4.0, organised by the Orator Club of IIIT Nagpur. Our core speakers — Charu, Sakina, Karis, and Manogyaa — participated and shined.</p>
      </div>
    </div>

    <!-- Achievement 3 -->
    <div class="achievement-card">
      <div class="achievement-image">
        <img src="images/aanu.jpeg" alt="Anuprabha at LITUMUN">
      </div>
      <div class="achievement-content">
        <h2>Anuprabha at LITUMUN</h2>
        <p>Congratulations to our founder, Anuprabha, for her stellar participation and performance at LITUMUN, showcasing exceptional debating and leadership skills.</p>
      </div>
    </div>

    <!-- Achievement 4 -->
    <div class="achievement-card">
      <div class="achievement-image">
        <img src="images/tiny4.jpg" alt="Nayra Patel">
      </div>
      <div class="achievement-content">
        <h2>Nayra Patel — 2nd Runner-Up</h2>
        <p>Nayra Patel from Grade 2 earned the 2nd Runner-Up position at the Elocution Competition held by Delhi Public School, Lava, Nagpur. Her well-structured delivery highlights the impact of Tiny Talk Titans.</p>
      </div>
    </div>
  </div>

  <!-- EXACT SAME FOOTER AS INDEX.HTML -->
  <footer>
    <div class="container">
      <div class="footer-content">
        <div class="footer-column">
          <span class="footer-logo">TYF</span>
          <p class="footer-slogan">The Youthopian Force — Where every voice finds its stage. Empowering Nagpur's youth through public speaking and leadership development since 2025.</p>
        </div>
        <div class="footer-column">
          <h3>Quick Links</h3>
          <ul class="footer-links">
            <li><a href="index.php#about">About Us</a></li>
            <li><a href="index.php#projects">Programs</a></li>
            <li><a href="index.php#partners">Partners</a></li>
            <li><a href="index.php#speakers">Speakers</a></li>
            <li><a href="index.php#contact">Contact</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h3>Our Programs</h3>
          <ul class="footer-links">
            <li><a href="oaf.php">Once a Fortnight</a></li>
            <li><a href="micathon.php">Micathon</a></li>
            <li><a href="tinytalktitans.php">Tiny Talk Titans</a></li>
            <li><a href="maitreearchy.php">Maitreearchy</a></li>
            <li><a href="ocyc.php">OCYC</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h3>Contact Us</h3>
          <div class="footer-contact">
            <p><i class="fas fa-map-marker-alt"></i> Nagpur, Maharashtra, India</p>
            <p><i class="fas fa-envelope"></i> theyouthopianforce@gmail.com</p>
            <p><i class="fas fa-phone"></i> +91 90960 85771</p>
          </div>
        </div>
      </div>
      <div class="copyright">
        © 2025 The Youthopian Force. All rights reserved. Nagpur, India.
      </div>
    </div>
  </footer>

  <!-- Scripts (Scroll Progress + Header Effect) -->
  <script>
    // Header scroll effect
    const header = document.getElementById('mainHeader');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }

      // Scroll progress
      const totalHeight = document.body.scrollHeight - window.innerHeight;
      const progress = (window.pageYOffset / totalHeight) * 100;
      document.getElementById('scrollProgress').style.width = progress + '%';
    });
  </script>

</body>
</html>