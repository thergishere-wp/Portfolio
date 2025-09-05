<?php
  $title = 'Pasindu Portfolio';
  $base  = '/portfolio';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= $base ?>/portfolio.css">
</head>
<body>
<a href="#main" class="skip-link">Skip to content</a>
    <header>
        <nav aria-label="Main">
            <div class="nav-inner">
                <a href="#hero" class="brand" aria-label="Home">
                    <img src="<?= $base ?>/assets/images/profile.jpg" alt="Pasindu Mahen logo" class="brand-pic" width="32" height="32">
                    Pasindu Mahen
                  </a>
                <ul class="nav-links">
                    <li><a href="#about">About</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <a class="btn-cv" href="<?= $base ?>/assets/Pasindu-CV.pdf" download>Download CV</a>
            </div>
        </nav>
    </header>
<main id="main">
    <section id="hero">
        <div class="hero-bg" aria-hidden="true"></div>
        <div class="hero-content">
          <div class="hero-text">
            <h1>IT Student & Freelance Video Editor</h1>
            <h2>Turning tech obsession into clean code and engaging edits</h2>
            <p>From building gaming PCs to editing wedding films and crafting responsive websites — I bring technical precision and creative energy into everything I do.</p>
            <div class="hero-buttons">
              <a href="#projects" class="btn">View Projects</a>
              <a href="#contact" class="btn btn-alt">Contact Me</a>
            </div>
            <ul class="proof-chips">
              <li>🎬 3+ years freelance video editing (YouTube & weddings)</li>
              <li>💻 Built 5+ websites & systems (projects & assignments)</li>
              <li>🎮 Gaming PC builder & tech enthusiast</li>
              <li>📷 Leader of University Photography Club</li>
              <li>🚁 Experience with DJI drone piloting</li>
            </ul>
          </div>
          <div class="hero-image">
            <img src="<?= $base ?>/assets/images/profile.jpg" alt="Pasindu Mahen — professional profile" width="320">
          </div>
        </div>
    </section>
    <section id="about">
  <h2>About Me</h2>
  <div class="about-content">
    <div class="about-image">
      <img src="<?= $base ?>/assets/images/profile2.jpg" alt="Pasindu Mahen at workstation" width="320">
    </div>
    <div class="about-text">
      <p>I’m a 3rd year IT undergraduate at Siam University, passionate about web development and software engineering. Beyond my studies, I’ve worked as a freelance video editor for over 3 years, specializing in editing, color grading, and final delivery. I enjoy blending my technical side with creativity, from building gaming PCs to producing engaging edits.</p>
      <ul class="quick-facts">
        <li><strong>Based:</strong> Bangkok, Thailand</li>
        <li><strong>Focus:</strong> Web development & software engineering</li>
        <li><strong>Experience:</strong> 3+ years freelance video editing</li>
        <li><strong>Projects:</strong> Hospital management system (C#), luxury car dealership site, digital games store, portfolio websites</li>
        <li><strong>Leadership:</strong> University Photography Club leader</li>
        <li><strong>Tech Hobbies:</strong> Gaming PC builder, DJI drone pilot</li>
      </ul>
      <p><a class="btn btn-alt" href="<?= $base ?>/assets/Pasindu-CV.pdf" download>View Full CV</a></p>
    </div>
  </div>
</section>
    <section id="skills">
      <div class="skills-panel">
        <p>Click an icon to visit the official site.</p>
        <ul class="skills-grid">
          <li class="skill"><a href="https://developer.mozilla.org/docs/Web/HTML" target="_blank" rel="noopener">
              <img src="<?= $base ?>/assets/icons/html5.svg" alt="HTML5" width="56" height="56"><span>HTML5</span></a></li>
          <li class="skill"><a href="https://developer.mozilla.org/docs/Web/CSS" target="_blank" rel="noopener">
              <img src="<?= $base ?>/assets/icons/css3.svg" alt="CSS3" width="56" height="56"><span>CSS3</span></a></li>
          <li class="skill"><a href="https://developer.mozilla.org/docs/Web/JavaScript" target="_blank" rel="noopener">
              <img src="<?= $base ?>/assets/icons/js.svg" alt="JavaScript" width="56" height="56"><span>JavaScript</span></a></li>
          <li class="skill"><a href="https://www.python.org/" target="_blank" rel="noopener">
              <img src="<?= $base ?>/assets/icons/python.svg" alt="Python" width="56" height="56"><span>Python</span></a></li>
          <li class="skill"><a href="https://www.adobe.com/products/premiere.html" target="_blank" rel="noopener">
              <img src="<?= $base ?>/assets/icons/premierepro.svg" alt="Adobe Premiere Pro" width="56" height="56"><span>Premiere Pro</span></a></li>
          <li class="skill"><a href="https://www.adobe.com/" target="_blank" rel="noopener">
              <img src="<?= $base ?>/assets/icons/adobe.svg" alt="Adobe Suite" width="56" height="56"><span>Adobe Suite</span></a></li>
        </ul>
      </div>
    </section>
    <section id="projects">
  <h2>Projects</h2>
  <div class="projects-inner">
    <p>Below are a couple of projects I have worked on:</p>
    <div class="project-media">
      <video controls width="480" poster="<?= $base ?>/assets/images/poster-placeholder.jpg">
        <source src="<?= $base ?>/assets/video/project-video.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <img src="<?= $base ?>/assets/images/poster-placeholder.jpg" alt="Project poster preview" width="300">
    </div>
    <ul class="project-list">
      <li><strong>Portfolio Website:</strong> A personal website to showcase my skills and projects.</li>
      <li><strong>Task Manager App:</strong> A simple app to organize and track daily tasks.</li>
      <li><strong>Freelance Video Editing Projects:</strong></li>
    </ul>
  </div>
</section>
<section id="contact">
  <h2>Contact</h2>
  <h3 class="contact-subtitle">Let’s work together</h3>

  <div class="contact-grid">
    <!-- Left: contact details + form -->
    <div class="contact-left">
      <div class="contact-quick">
        <p>You can reach me directly:</p>
        <p>Email: <a href="mailto:example@example.com">example@example.com</a></p>
        <p>Phone: <a href="tel:+1234567890">(123) 456-7890</a></p>
      </div>

      <form class="contact-form" action="mailto:example@example.com" method="post" enctype="text/plain" aria-label="Contact form">
        <div class="field">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="field">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="field">
          <label for="message">Message:</label>
          <textarea id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit">Send</button>
      </form>
    </div>

    <!-- Right: glass chat card UI only -->
    <!-- Right: glass chat UI -->
<aside class="contact-right" aria-label="Direct chat options">
  <div class="chat-card glass">
    <header class="chat-card__header">
      <span>💬 Chat with Pasindu</span>
    </header>
    <div class="chat-card__body">
      <!-- Empty chat area -->
      <div class="chat-window">
        <div class="chat-placeholder">
          <p>No messages yet. Start the conversation!</p>
        </div>
      </div>
      <!-- Chat input area -->
      <div class="chat-input">
        <input type="text" placeholder="Type your message...">
        <div class="chat-actions">
          <button class="chat-btn discord">Discord</button>
          <button class="chat-btn whatsapp">WhatsApp</button>
          <button class="chat-btn line">Line</button>
        </div>
      </div>
    </div>
  </div>
</aside>
  </div>
</section>
</main>
    <footer>
    <div class="footer-inner">
      <div class="footer-brand">
        <strong>Pasindu Mahen</strong>
        <p>Bangkok, Thailand</p>
      </div>
      <ul class="footer-links" role="list">
        <li><a href="#hero">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#projects">Projects</a></li>
      </ul>
      <ul class="footer-social" role="list">
        <li><a href="#" aria-label="Facebook">Facebook</a></li>
        <li><a href="#" aria-label="LinkedIn">LinkedIn</a></li>
        <li><a href="#" aria-label="GitHub">GitHub</a></li>
      </ul>
    </div>
    <p class="copy">© <span id="year"><?= date('Y') ?></span> Pasindu Mahen Walkuluarachchi</p>
  </footer>
<script src="<?= $base ?>/script.js"></script>
</body>
</html>    