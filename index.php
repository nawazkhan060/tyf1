<!DOCTYPE php>
<php lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>The Youthopian Force (TYF)</title>
  <meta name="description" content="Nagpur's youth-led public speaking & leadership movement." />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
:root {
  --dark-blue: #f9fbff;           /* Very light background */
  --navy-blue: #e6f0ff;           /* Soft sky blue */
  --light-navy: #ffffff;          /* Pure white cards */
  --accent-blue: #2563eb;         /* Vivid blue (Tailwind-like) */
  --white: #000000;               /* Black text */
  --text-light: #1e293b;          /* Near-black for readability */
  --shadow: 0 10px 30px rgba(37, 99, 235, 0.15); /* Softer, bluish shadow */
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
    
    .section-title {
      text-align: center;
      font-size: 2.8rem;
      font-weight: 700;
      margin-bottom: 4rem;
      color: var(--white);
      position: relative;
      padding-bottom: 1.5rem;
    }

    .section-title::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 100px;
      height: 4px;
      background: var(--accent-blue);
    }

    ul { 
      list-style: none; 
    }
    
    /* Header */
    header { 
      position: fixed; 
      top: 0; 
      left: 0; 
      width: 100%; 
      z-index: 1000; 
      background: transparent;
      transition: var(--transition);
      padding: 1rem 0;
    }
    
    .navbar {
      display: flex; 
      justify-content: space-between; 
      align-items: center;
      padding: 0.5rem 0;
      transition: var(--transition);
    }
    
    .logo {
      font-size: 1.8rem; 
      font-weight: 700; 
      color: var(--accent-blue);
      display: flex;
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
    
    .mobile-toggle { 
      display: none; 
      flex-direction: column; 
      cursor: pointer; 
      justify-content: center; 
      height: 24px; 
    }
    
    .bar {
      width: 25px; 
      height: 3px; 
      background: var(--white); 
      margin: 3px 0;
      transition: all 0.4s ease-in-out;
    }
    
    .mobile-toggle.active .bar:nth-child(1) { 
      transform: translateY(9px) rotate(45deg); 
    }
    
    .mobile-toggle.active .bar:nth-child(2) { 
      opacity: 0; 
    }
    
    .mobile-toggle.active .bar:nth-child(3) { 
      transform: translateY(-9px) rotate(-45deg); 
    }
    
    /* Hero Section */
    .hero {
      height: 90vh;
      position: relative;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    .hero-carousel {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: flex;
      opacity: 1;
      transition: transform 0.8s ease-in-out;
    }
    
    .hero-slide {
      min-width: 100%;
      height: 100%;
      background-size: cover;
      background-position: center;
      position: relative;
      opacity: 1; /* Keep slides visible, carousel container moves */
    }
    
    /* This class is no longer needed for the sliding effect */
    .hero-slide.active {
      opacity: 1;
    }
    
    .hero-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(1, 4, 7, 0.5);
    }
    
    .btn {
      display: inline-block; 
      padding: 0.9rem 2.5rem; 
      border-radius: 50px;
      font-weight: 600; 
      margin: 0.5rem; 
      transition: var(--transition);
      border: 2px solid transparent;
    }
    
    .btn-primary { 
      background: transparent; 
      color: var(--accent-blue);
      border: 2px solid var(--accent-blue);
    }
    
    .btn-outline { 
      color: var(--white); 
    }
    
    .btn-primary:hover { 
      background: var(--indian-blue); 
      transform: translateY(-3px); 
      box-shadow: var(--shadow); 
    }
    
    .btn-outline:hover { 
      background: var(--white); 
      color: var(--indian-blue); 
      transform: translateY(-3px); 
      box-shadow: var(--shadow); 
    }

    /* Event Ticker Section */
    .event-ticker-section {
      background-color: var(--accent-blue);
      color: var(--dark-blue);
      padding: 1rem 0;
      overflow: hidden;
      white-space: nowrap;
    }

    .ticker-wrap {
      display: inline-block;
      padding-left: 100%;
      animation: ticker-scroll 30s linear infinite;
    }

    .ticker-item {
      display: inline-block;
      font-size: 1.1rem;
      font-weight: 600;
      padding: 0 2.5rem;
    }

    .ticker-item i {
      margin-right: 10px;
    }

    @keyframes ticker-scroll {
      0% {
        transform: translateX(0);
      }
      100% {
        transform: translateX(-100%);
      }
    }
    
    /* About Section */
    .about-section { 
      padding: 8rem 0;
      background: var(--dark-blue);
    }
    
    .about-content { 
      max-width: 900px; 
      margin: 0 auto; 
      color: var(--text-light); 
      line-height: 1.8;
    }
    
    .mission-quote {
      background: var(--navy-blue);
      color: var(--text-light); 
      padding: 2.5rem;
      border-radius: 16px; 
      font-style: italic; 
      text-align: center;
      margin-top: 3rem; 
      font-size: 1.2rem;
      position: relative;
      overflow: hidden;
    }
    
    .mission-quote::before {
      content: """;
      position: absolute;
      top: -30px;
      left: 20px;
      font-size: 10rem;
      font-family: Georgia, serif;
      opacity: 0.1;
    }
    
    .about-grid {
      display: grid;
      grid-template-columns: 2fr 1fr;
      gap: 3rem;
      align-items: center;
    }

    .about-image {
      text-align: center;
    }

    .about-image img {
      max-width: 250px;
      width: 100%;
      border-radius: 20px;
    }

    @media (max-width: 768px) {
      .about-grid {
        grid-template-columns: 1fr;
      }
    }
    /* Multi-Image Project Card */
    .project-image-slider {
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
    }

    .project-image-slider img {
      width: 100%; height: 100%;
      object-fit: cover;
      position: absolute;
      transition: opacity 1s ease-in-out;
    }

    /* Founders Section */
    .founders-section {
      padding: 8rem 0;
      background: var(--navy-blue);
    }

    .founder-entry {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 3rem;
      align-items: center;
      margin-bottom: 5rem;
    }

    .founder-entry:last-child {
      margin-bottom: 0;
    }

    .founder-entry.reverse {
      grid-template-areas: "text image";
    }

    .founder-image {
      width: 100%;
      height: 450px;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: var(--shadow);
    }

    .founder-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .founder-info h3 {
      font-size: 2.2rem;
      margin-bottom: 1rem;
      color: var(--white);
    }

    @media (max-width: 992px) {
      .founder-entry, .founder-entry.reverse {
        grid-template-columns: 1fr;
        grid-template-areas: none;
      }
    }

    /* Projects Section */
    .projects-section {
      padding: 8rem 0;
      background: var(--dark-blue);
    }
    
    .projects-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 2.5rem;
      margin-top: 3rem;
    }

    .projects-grid .project-card {
      grid-column: span 2;
    }

    .projects-grid .project-card:nth-child(odd) {
      justify-self: start;
    }
    .projects-grid .project-card:nth-child(even) {
      justify-self: end;
    }

    .project-card {
      background: var(--navy-blue);
      border-radius: 20px;
      overflow: hidden;
      box-shadow: var(--shadow);
      position: relative;
      height: 400px;
      width: 80%;
      transition: var(--transition);
    }
    
    .project-content {
      padding: 2rem;
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(104, 104, 104, 0.95);
      color: var(--white);
      background: linear-gradient(to top, rgba(10, 25, 47, 0.95) 0%, transparent 100%);
      color: #ffffff;
      transition: var(--transition);
      opacity: 0;
      transform: translateY(20px);
      display: flex; flex-direction: column; justify-content: flex-end;
    }
    
    .project-content h3 {
      font-size: 1.8rem;
      margin-bottom: 1rem;
    }
    
    .project-content p {
      font-size: 1.1rem;
      line-height: 1.6;
      margin-bottom: 1.5rem;
    }
    
    .project-card:hover .project-content {
      opacity: 2;
      transform: translateY(0);
    }
    
    /* Partners */
    .partners-section {
      padding: 6rem 0;
      background: var(--navy-blue);
      position: relative;
    }
    
    .partners-scroller {
      display: flex;
      gap: 2.5rem;
      align-items: center;
      margin-top: 3rem;
      animation: partner-scroll 40s linear infinite;
    }

    .partner-logo {
      flex-shrink: 0;
      height: auto;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .partner-logo img {
      max-height: 120px;
      max-width: 180px;
      object-fit: contain;
    }

    @keyframes partner-scroll {
      from { transform: translateX(0); }
      to { transform: translateX(-100%); }
    }
    

    /* Speakers */
    .speakers-section {
      padding: 8rem 0;
      background: var(--dark-blue);
      position: relative;
    }
    
    .speakers-grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 2.5rem;
    }
    
    .speaker-card {
      background: var(--navy-blue);
      border-radius: 20px;
      overflow: hidden;
      box-shadow: var(--shadow);
      text-align: center;
      transition: var(--transition);
      position: relative;
      width: 350px; /* Fixed width for flex items */
    }
    
    .speaker-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 40px rgba(247, 247, 247, 0.15);
    }

    .speaker-photo {
      width: 100%;
      height: 400px; /* Taller photo area */
      position: relative;
      overflow: hidden;
    }
    
    .speaker-photo img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: var(--transition);
    }

    .speaker-card:hover .speaker-photo img {
      transform: scale(1.05);
    }
    
    .speaker-info {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
      padding: 2rem;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      background: linear-gradient(to top, rgba(10, 25, 47, 0.95) 0%, transparent 100%);
      opacity: 0;
      transition: var(--transition);
      transform: translateY(20px);
    }
    
    .speaker-card:hover .speaker-info {
      opacity: 1;
      transform: translateY(0);
    }
    
    .speaker-info strong {
      display: block;
      font-size: 1.3rem;
      font-weight: 700;
      margin-bottom: 0.5rem;
      color: var(--white);
      color: #ffffff;
    }
    
    .speaker-info span {
      color: var(--accent-blue);
      font-weight: 500;
      font-weight: 600;
    }
    
    /* Contact */
    .contact-section { 
      background: var(--navy-blue);
      padding: 8rem 0;
      position: relative;
      overflow: hidden;
      background-image: url('https://www.transparenttextures.com/patterns/cubes.png'), linear-gradient(var(--navy-blue), var(--dark-blue));
      background-blend-mode: overlay;
    }
    
    .social-icons { 
      text-align: center; 
      margin: 2rem 0; 
    }
    
    .social-icons a { 
      display: inline-block; 
      margin: 0 16px; 
      font-size: 1.8rem; 
      color: var(--text-light); 
      transition: var(--transition);
    }
    
    .social-icons a:hover { 
      color: var(--accent-blue); 
      transform: translateY(-5px);
    }
    
    .forms-container {
      display: grid; 
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 2.2rem; 
      margin-top: 2.5rem;
    }
    
    .form-card {
      background: var(--light-navy); 
      padding: 2.5rem; 
      border-radius: 20px;
      box-shadow: var(--shadow);
      transition: var(--transition);
    }
    
    .form-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 30px rgba(0,0,0,0.12);
    }
    
    .form-title { 
      font-size: 1.6rem; 
      margin-bottom: 1.5rem; 
      color: var(--white);
      position: relative;
      padding-bottom: 10px;
    }
    
    .form-title::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 50px;
      height: 3px;
      background: var(--accent-blue);
    }
    
    .form-group { 
      margin-bottom: 1.3rem; 
    }
    
    .form-group label { 
      display: block; 
      margin-bottom: 0.6rem; 
      font-weight: 600; 
      color: var(--text-light);
    }
    
    .form-group input, 
    .form-group textarea {
      width: 100%; 
      padding: 0.9rem; 
      border: 1px solid #ddd;
      border-radius: 10px; 
      font-family: inherit; 
      font-size: 1rem;
      transition: var(--transition);
      background: var(--dark-blue);
      color: var(--white);
    }
    
    .form-group input:focus, 
    .form-group textarea:focus {
      outline: none;
      border-color: var(--accent-blue);
      box-shadow: 0 0 0 3px rgba(58, 97, 134, 0.2);
    }
    
    .form-note { 
      color: var(--accent-blue); 
      font-size: 0.95rem; 
      margin-top: 0.6rem; 
    }
    
    /* Footer */
    footer {
      background: var(--dark-blue); 
      color: white; 
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
      background: url('1.png') no-repeat center center / contain;
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
      color: var(--text-light); 
      font-size: 1rem; 
      padding-top: 2rem;
      border-top: 1px solid var(--light-navy);
      text-align: center;
    }
    
    /* Animations */
    @keyframes fade {
      0% { opacity: 0; }
      10% { opacity: 1; }
      90% { opacity: 1; }
      100% { opacity: 0; }
    }
    
    /* Scroll Reveal Animation */
    .reveal {
      opacity: 0;
      transform: translateY(50px);
      transition: opacity 0.8s ease-out, transform 0.8s ease-out;
      will-change: opacity, transform;
    }

    .reveal.visible {
      opacity: 1;
      transform: translateY(0);
    }

    /* Scroll Progress Indicator */
    .scroll-progress {
      position: fixed;
      top: 0;
      left: 0;
      height: 4px;
      background: var(--accent-blue);
      z-index: 1001;
      transition: width 0.1s;
      width: 0;
    }
    
    /* Responsive Design */
    @media (max-width: 992px) {
      .hero h1 { font-size: 2.8rem; }
      .partners-grid { grid-template-columns: repeat(3, 1fr); }
    }
    
    @media (max-width: 768px) {
      .projects-grid { grid-template-columns: 1fr; }
      .hero-content { padding: 0 15px; }
      .hero h1 { font-size: 2.3rem; }
      .hero p { font-size: 1.1rem; }
      .nav-links {
        display: flex; 
        flex-direction: column; 
        position: absolute;
        top: 100%; 
        right: 0; 
        background: var(--navy-blue);
        width: 100%; 
        text-align: center;
        max-height: 0; 
        overflow: hidden;
        transition: max-height 0.5s ease-in-out;
      }
      .nav-links.active {
        max-height: 500px;
        padding: 1rem 0;
        box-shadow: var(--shadow);
      }
      .nav-links li { padding: 0.8rem 0; }
      .mobile-toggle { display: flex; }
      .footer-content { grid-template-columns: 1fr; }
    }
    
    @media (max-width: 480px) {
      .partners-grid { grid-template-columns: repeat(auto-fit, minmax(120px, 1fr)); }
      .hero h1 { font-size: 2rem; }
      .hero p { font-size: 1rem; }
      .speakers-grid { grid-template-columns: 1fr; }
      .btn { padding: 0.8rem 1.8rem; }
    }
  </style>
</head>
<body>

  <!-- Scroll Progress Indicator -->
  <div class="scroll-progress" id="scrollProgress"></div>

  <!-- Header -->
  <header>
    <div style="padding: 0;" class="container navbar">
      <a href="#" class="logo">
       <img style="height: 100px;" src="images/1.png" alt="">
      </a>
      <div class="mobile-toggle" id="mobileToggle" aria-label="Menu">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>
      <ul class="nav-links" id="navLinks">
        <li><a href="#about" class="active">About</a></li>
        <li><a href="#projects">Programs</a></li>
        <li><a href="#partners">Partners</a></li>
        <li><a href="#speakers">Speakers</a></li>
        <li><a href="achivers.php">Achievers</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </header>

  <!-- Hero -->
  <section class="hero">
    <div class="hero-carousel">
      <div class="hero-slide active" style="background-image: url('images/1.6.jpeg');"></div>
      <div class="hero-slide" style="background-image: url('images/3.jpeg');"></div>
      <div class="hero-slide" style="background-image: url('images/4..jpeg');"></div>
    </div>
    <div class="hero-overlay"></div>
  </section>

  <!-- Event Ticker -->
  <section class="event-ticker-section">
    <div class="ticker-wrap">
      <div class="ticker-item"><i class="fas fa-star"></i>Once a Fortnight (OAF)</div>
      <div class="ticker-item"><i class="fas fa-star"></i>Micathon</div>
      <div class="ticker-item"><i class="fas fa-star"></i>Tiny Talk Titans</div>
      <div class="ticker-item"><i class="fas fa-star"></i>Maitreearchy</div>
      <div class="ticker-item"><i class="fas fa-star"></i>Orange City Youth Conclave (OCYC)</div>
      <!-- Duplicate for seamless loop -->
      <div class="ticker-item"><i class="fas fa-star"></i>Once a Fortnight (OAF)</div>
    </div>
  </section>
  <!-- About -->
  <section id="about" class="about-section">
    <div class="container">
      <h2 class="section-title reveal">About TYF — The Youthopian Force</h2>
      <div class="about-grid reveal" style="grid-template-columns: 1fr 2fr;">
        <div class="about-image">
          <img src="images/1.png" alt="TYF Logo">
        </div>
        <div class="about-text">
          <p>Founded in Nagpur, The Youthopian Force (TYF) is a youth-led public speaking and leadership organization committed to turning communication into a daily life skill rather than a rare privilege. TYF empowers individuals across age groups by building confidence, articulation, and character through real-world speaking platforms, simulations, and mentorship. Over the years, TYF has collaborated with respected schools, colleges, NGOs, media houses, corporates, and community organizations across Nagpur, including St. John's Public School, School of Scholars, GH Raisoni University, Rotary Club of Nagpur Downtown, Make a Difference NGO, Lokmat Times, Press Club Nagpur, and several others. Our simulations, workshops, and meetups have been widely appreciated for their practical approach, immersive activities, and empowering environment. We aim to enhance confidence, elevate communication, and spark a culture where public speaking becomes as effortless as a coffee run, as routine as Sunday badminton, and as enjoyable as a late-night movie binge. At TYF, we believe youth empowerment is not a slogan — it is a system. We build that system through mentorship, structured courses, and high-impact events that give every participant a stage to grow.</p>
        </div>
      </div>
      <div class="mission-quote reveal">
        TYF is a movement shaping the next generation of confident communicators and strong leaders. At TYF, we aim to make public speaking not a privilege, but a daily practice, as effortless as a quick coffee run, as routine as a Sunday badminton match, and as comforting as a late-night movie binge.
      </div>
    </div>
  </section>

  <!-- Founders Section -->
  <section id="founders" class="founders-section" style="padding-top: 0;">
    <div class="container">
      <h2 class="section-title reveal">Meet Our Founders</h2>
      <div class="founder-entry reveal">
        <div class="founder-image">
          <img src="images/anu.jpeg" alt="Anuprabha Bansod">
        </div>
        <div class="founder-info">
          <h3>Anuprabha Bansod</h3>
          <p>Anuprabha is the Founder and Visionary Leader of The Youthopian Force, who transformed a small initiative into one of Nagpur’s most dynamic youth-led public speaking movements. Her core vision is to make public speaking an accessible, daily skill for every student.</p>
          <ul style="list-style-type: disc; padding-left: 20px; margin-top: 1.5rem; margin-bottom: 1rem; line-height: 1.8;">
            <li><b>Nationally Accredited Public Speaker</b> with over 50 titles in debating and Model United Nations (MUN).</li>
            <li><b>Experienced Adjudicator & Mentor</b>, serving on the Executive Board for conferences at BITS Pilani, Hyderabad, and Dr. D. Y. Patil International University.</li>
            <li><b>Published Legal Researcher</b> and a third-year law student.</li>
            <li>Honoured with the <b>Dronacharya Award for Best Student Mentor (2025)</b> for her excellence in training young learners.</li>
          </ul>
        </div>
      </div>
      <div class="founder-entry reveal">
        <div class="founder-info">
          <h3>Charu Panchalwar</h3>
          <p>Charu is the Co-Founder of The Youthopian Force, leading the organisation's design, human resources, and operational execution. A second-year engineering student, she is driven by a passion for youth-led dialogue and transformative conversations.</p>
          <ul style="list-style-type: disc; padding-left: 20px; margin-top: 1.5rem; margin-bottom: 1rem; line-height: 1.8;">
            <li>Leads as <b>Head of Design & Human Resources</b>, shaping TYF's visual identity and culture.</li>
            <li><b>Project Head of Operations</b> for key initiatives like Maitreearchy and Once a Fortnight, co-hosting over 10 sessions.</li>
            <li>Served on the <b>Executive Board</b> for national conferences at YCCE, Nagpur and LITU, Nagpur.</li>
            <li>Appointed <b>Secretary-General</b> of the NASA Space Apps Nagpur Model United Nations, showcasing her leadership in the student conference ecosystem.</li>
          </ul>
        </div>
        <div class="founder-image">
          <img src="images/charu.jpeg" alt="Charu Panchalwar">
        </div>
      </div>

    </div>
  </section>

  <!-- Projects -->
  <section id="projects" class="projects-section">
    <div class="container">
      <h2 class="section-title reveal">Flagship TYF Events & Projects</h2>
      <div class="projects-grid">
        <div class="project-card reveal">
          <div class="project-image-slider">
             <img src="images/1.1.jpeg" alt="Tiny Talk 1">
            <img src="images/1.2.jpeg" alt="Tiny Talk 2" style="opacity:0;">
            <img src="images/1.3.jpeg" alt="Tiny Talk 3" style="opacity:0;"> 
          </div>
          <div class="project-content">
            <h3>Once a Fortnight (OAF)</h3>
            <p>Weekly offline meetups for 16–30-year-olds in safe, judgment-free spaces. From West Coast Café to Maharajbag Zoo — 13+ sessions (Mar–Sept 2025) blending deep dialogue with real-world speaking practice.</p>
            <a href="oaf.php" class="btn btn-primary">Learn More</a>
          </div>
        </div>
        
        <div class="project-card reveal">
          <div class="project-image-slider">
            <img src="images/2.1.jpeg" alt="Micathon 1">
            <img src="images/2.5.jpeg" alt="Tiny Talk 2" style="opacity:0;">
            <img src="images/2.6.jpeg" alt="Tiny Talk 3" style="opacity:0;">   
          </div>
          <div class="project-content">
            <h3>Micathon</h3>
            <p>School-based public speaking simulations turning classrooms into arenas of debate. Conducted at St. John’s, School of Scholars, GH Raisoni Law. Builds structured thinking and stage presence under pressure.</p>
            <a href="micathon.php" class="btn btn-primary">Learn More</a>
          </div>
        </div>
        
        <div class="project-card reveal">
          <div class="project-image-slider">
            <img src="images/tiny1.jpg" alt="Tiny Talk 1">
            <img src="images/tiny2.jpg" alt="Tiny Talk 2" style="opacity:0;">
            <img src="images/tiny4.jpg" alt="Tiny Talk 2" style="opacity:0;">
          </div>
          <div class="project-content">
            <h3>Tiny Talk Titans</h3>
            <p>For ages 5–15: playful workshops in storytelling, debates, and habit-awareness. Nurtures early confidence, fluent English, and social expression in a joyful, energetic setting.</p>
            <a href="tinytalktitans.php" class="btn btn-primary">Learn More</a>
          </div>
        </div>
        
        <div class="project-card reveal">
          <div class="project-image-slider">
            <img src="images/mai1.jpg" alt="Tiny Talk 1">
            <img src="images/mai4.jpg" alt="Tiny Talk 2" style="opacity:0;">
            <img src="images/mai3.jpg" alt="Tiny Talk 3" style="opacity:0;">     
          </div>
          <div class="project-content">
            <h3>Maitreearchy</h3>
            <p>Leadership simulation for women professionals. Builds assertive communication and collaborative decision-making through workplace roleplays. Piloted with IDP Education Pvt. Ltd.</p>
            <a href="maitreearchy.php" class="btn btn-primary">Learn More</a>
          </div>
        </div>
        
        <div class="project-card reveal">
          <div class="project-image-slider">
            <img src="images/orange1.jpeg" alt="Tiny Talk 1">
            <img src="images/orange5.jpeg" alt="Tiny Talk 2" style="opacity:0;">
            <img src="images/orange3.jpeg" alt="Tiny Talk 3" style="opacity:0;">   
          </div>
          <div class="project-content">
            <h3>Orange City Youth Conclave (OCYC)</h3>
            <p>Nagpur's annual youth festival of public speaking & democracy. Features Youth Parliament, MUN, press panels. Registration under ₹150. OCYC 2025 set a benchmark for inclusive civic dialogue.</p>
            <a href="ocyc.php" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div style="text-align: center; margin-top: 4rem;" class="reveal">
        <a href="https://forms.gle/nZZx9RDgeSoKhK5a8" target="_blank" class="btn btn-primary" style="font-size: 1.2rem; padding: 1rem 3rem; border-width: 2px;">Be a Part of Our Projects & Events</a>
      </div>
    </div>
  </section>

  <!-- Partners -->
  <!-- Partners -->
<section id="partners" class="partners-section">
  <div class="container">
    <h2 class="section-title reveal">Our Clientele & Partners</h2>
    <p style="text-align:center; max-width:700px; margin:0 auto 2.5rem; color:var(--text-light);">
      Organisations that have collaborated with TYF, hosted our sessions, or supported our mission.
    </p>
    <div style="overflow: hidden; width: 100%;">
      <div class="partners-scroller">
        <!-- Duplicate the set of logos for a seamless loop -->
        <!-- <div class="partner-logo"><img src="images/1.png" alt="NCP"></div> -->
        <div class="partner-logo"><img src="images/Crossword.webp" alt="NSA Nagpur"></div>
        <div class="partner-logo"><img src="images/dr.png" alt="Youthful Pinchi"></div>
        <div class="partner-logo"><img src="images/nasa.png" alt="NASA"></div>
        <div class="partner-logo"><img src="images/ncp.png" alt="Partner 5"></div>
        <div class="partner-logo"><img src="images/st.png" alt="Partner 6"></div>
        <div class="partner-logo"><img src="images/gh.png" alt="Partner 7"></div>
        <div class="partner-logo"><img src="images/ghrstu.png" alt="Partner 8"></div>
        <div class="partner-logo"><img style="background-color: #000000;" src="images/ghs.jpg" alt="Partner 9"></div>
        <div class="partner-logo"><img src="images/sos.png" alt="Partner 10"></div>
        <div class="partner-logo"><img src="images/sti.png" alt="Partner 11"></div>
              <div class="partner-logo"><img src="images/idp.png" alt="Partner 11"></div>
        <!-- Second set for looping -->
        <!-- <div class="partner-logo"><img src="images/1.png" alt="NCP"></div> -->
        <div class="partner-logo"><img src="images/Crossword.webp" alt="NSA Nagpur"></div>
        <div class="partner-logo"><img src="images/dr.png" alt="Youthful Pinchi"></div>
        <div class="partner-logo"><img src="images/nasa.png" alt="NASA"></div>
        <div class="partner-logo"><img src="images/ncp.png" alt="Partner 5"></div>
        <div class="partner-logo"><img src="images/st.png" alt="Partner 6"></div>
        <div class="partner-logo"><img src="images/gh.png" alt="Partner 7"></div>
        <div class="partner-logo"><img src="images/ghrstu.png" alt="Partner 8"></div>
        <div class="partner-logo"><img style="background-color: #000000;" src="images/ghs.jpg" alt="Partner 9"></div>
        <div class="partner-logo"><img src="images/sos.png" alt="Partner 10"></div>
        <div class="partner-logo"><img src="images/sti.png" alt="Partner 11"></div>
                      <div class="partner-logo"><img src="images/idp.png" alt="Partner 11"></div>

      </div>
    </div>
 
  </div>
</section>

  <!-- Speakers -->
  <section id="speakers" class="speakers-section">
    <div class="container">
      <h2 class="section-title reveal">Notable Speakers & Collaborators</h2>
      <div class="speakers-grid">
        <div class="speaker-card reveal">
          <div class="speaker-photo">
            <img src="images/nanoti.jpeg"alt="Dr. Vivek Nanoti">
          </div>
          <div class="speaker-info">
            <strong>Dr. Vivek Nanoti</strong>
            <span>Director of Engineering, Priyadarshini College of Engineering</span>
          </div>
        </div>
        <div class="speaker-card reveal">
          <div class="speaker-photo">
            <img src="images/api.jpeg" alt="API Amol Dond" style="object-position: top;">
          </div>
          <div class="speaker-info">
            <strong>API Amol Dond</strong>
            <span>Nagpur Police</span>
          </div>
        </div>
        <div class="speaker-card reveal">
          <div class="speaker-photo">
            <img src="images/drishti.jpeg" alt="Drishti Sharma">
          </div>
          <div class="speaker-info">
            <strong>Drishti Sharma</strong>
            <span>Journalist, Lokmat Times</span>
          </div>
        </div>
        <div class="speaker-card reveal">
          <div class="speaker-photo">
            <img src="images/ketan.jpeg" alt="Dr. Ketan Mohitkar">
          </div>
          <div class="speaker-info">
            <strong>Dr. Ketan Mohitkar</strong>
            <span>State Secretary, ICTRD</span>
          </div>
        </div>
        <div class="speaker-card reveal">
          <div class="speaker-photo">
            <img src="images/adit.jpeg" alt="Adv. Aadit Ved">
          </div>
          <div class="speaker-info">
            <strong>Adv. Aadit Ved</strong>
            <span>Advocate, Bombay High Court, Nagpur Bench</span>
          </div>
        </div>
        <div class="speaker-card reveal">
          <div class="speaker-photo">
            <img src="images/harish.jpeg" alt="Adv. Harnish Gadhia">
          </div>
          <div class="speaker-info">
            <strong>Adv. Harnish Gadhia</strong>
            <span>Advocate, Bombay High Court, Nagpur Bench</span>
          </div>
        </div>
        <div class="speaker-card reveal">
          <div class="speaker-photo">
            <img src="images/ravi.jpeg" alt="Dr. Ravishankar Mor">
          </div>
          <div class="speaker-info">
            <strong>Dr. Ravishankar Mor</strong>
            <span>Director, Dr. Babasaheb Ambedkar School of Law</span>
          </div>
        </div>
        <div class="speaker-card reveal">
          <div class="speaker-photo">
            <img src="images/phuspa.jpeg" alt="Dr. Pushpahas Ballal">
          </div>
          <div class="speaker-info">
            <strong>Dr. Pushpahas Ballal</strong>
            <span>Former NMC Commissioner</span>
          </div>
        </div>
            <div class="speaker-card reveal">
          <div class="speaker-photo">
            <img src="images/kapur.jpg" alt="Dr. Pushpahas Ballal">
          </div>
          <div class="speaker-info">
            <strong>Dr. Vivek Kapoor</strong>
            <span>Dr. Vivek Kapur 
Director at G.H. Raisoni College of Engineering and Management, Nagpur</span>
          </div>
        </div>
      </div>
      
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="contact-section">
    <div class="container">
      <h2 class="section-title reveal">Contact Us</h2>
      <div class="social-icons">
        <a href="https://www.instagram.com/youthopia.nagpur"><i class="fab fa-instagram"></i></a>
        <a href="https://www.linkedin.com/company/the-youthopian-force/"><i class="fab fa-linkedin-in"></i></a>
        <!-- <a href="#"><i class="fab fa-youtube"></i></a> -->
        <a href="https://chat.whatsapp.com/EOJumBu4n35C73ckJuPULW"><i class="fab fa-whatsapp"></i></a>
      </div>
      <div class="forms-container reveal">
        <div class="form-card">
          <h3 class="form-title">Contact Us</h3>
          <form action="contact.php" method="post">
            <div class="form-group"><label>Name</label><input type="text" name="name" placeholder="Your full name"></div>
            <div class="form-group"><label>Email</label><input type="email" name="email" placeholder="Your email address"></div>
            <div class="form-group"><label>Message</label><textarea name="message" rows="4" placeholder="How can we help?"></textarea></div>
            <p class="form-note">Our team will get back to you within 24 hours.</p>
            <button type="submit" class="btn btn-primary" style="width:100%; margin-top:1rem;">Submit</button>
          </form>
        </div> 
        <div class="form-card">
          <h3 class="form-title">JOIN OUR NEWSLETTER</h3>
          <form action="newsletter.php" method="post">
            <div class="form-group"><label>NAME</label><input type="text" name="name"></div>
            <div class="form-group"><label>EMAIL</label><input type="email" name="email"></div>
            <div class="form-group"><label>CITY</label><input type="text" name="city"></div>
            <button type="submit" class="btn btn-outline" style="width:100%; margin-top:1rem;">Subscribe</button>
          </form>
        </div>
        <div class="form-card">
          <h3 class="form-title">Want to Join Our Team?</h3>
          <p style="margin-top:1rem;">SEND UR CV AND SOP TO<br>
          <a href="mailto:theyouthopianforce@gmail.com" style="color:var(--accent-blue); font-weight:600;">theyouthopianforce@gmail.com</a></p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
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
            <li><a href="#about">About Us</a></li>
            <li><a href="#projects">Programs</a></li>
            <li><a href="#partners">Partners</a></li>
            <li><a href="#speakers">Speakers</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h3>Our Programs</h3>
          <ul class="footer-links">
            <li><a href="#projects">Once a Fortnight</a></li>
            <li><a href="#projects">Micathon</a></li>
            <li><a href="#projects">Tiny Talk Titans</a></li>
            <li><a href="#projects">Maitreearchy</a></li>
            <li><a href="#projects">OCYC</a></li>
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

  <script>
    // Mobile Nav Toggle
    const toggle = document.getElementById('mobileToggle');
    const nav = document.getElementById('navLinks');
    toggle.addEventListener('click', () => {
      nav.classList.toggle('active');
      toggle.classList.toggle('active');
    });
    
    // Header scroll effect
    const header = document.querySelector('header');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
        header.style.background = 'var(--navy-blue)';
      } else {
        header.style.background = 'transparent';
      }
    });

    // Hero Carousel
    const carousel = document.querySelector('.hero-carousel');
    const slides = document.querySelectorAll('.hero-slide');
    let currentSlide = 0;

    function nextSlide() {
      currentSlide = (currentSlide + 1) % slides.length;
      const offset = -currentSlide * 100;
      carousel.style.transform = `translateX(${offset}%)`;
    }
    
    // Auto slide every 8 seconds for a smooth sliding effect
    setInterval(nextSlide, 8000);
    
    // Smooth Scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        
        // Close mobile menu if open
        if (nav.classList.contains('active')) {
          nav.classList.remove('active');
          toggle.classList.remove('active');
        }
        
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          window.scrollTo({
            top: target.offsetTop - 80,
            behavior: 'smooth'
          });
        }
      });
    });
    
    // Active Navigation Link Highlighting
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-links a');
    
    window.addEventListener('scroll', () => {
      let current = '';
      
      sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        
        if (pageYOffset >= (sectionTop - 100)) {
          current = section.getAttribute('id');
        }
      });
      
      navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === `#${current}`) {
          link.classList.add('active');
        }
      });
      
      // Scroll Progress Indicator
      const scrollProgress = document.getElementById('scrollProgress');
      const totalHeight = document.body.scrollHeight - window.innerHeight;
      const progress = (window.pageYOffset / totalHeight) * 100;
      scrollProgress.style.width = progress + '%';
    });

    // Project Card Multi-Image Slider
    document.querySelectorAll('.project-card').forEach(card => {
      const images = card.querySelectorAll('.project-image-slider img');
      let currentImage = 0;

      setInterval(() => {
        images[currentImage].style.opacity = '0';
        currentImage = (currentImage + 1) % images.length;
        images[currentImage].style.opacity = '1';
      }, 4000); // Change image every 4 seconds
    });

    // Scroll Reveal Animation
    const revealElements = document.querySelectorAll('.reveal');
    const revealObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.1
    });

    revealElements.forEach(el => {
      revealObserver.observe(el);
    });
  </script>

</body>
</php>