<?php
// Basic info variables
$name = "Marielle Soliman";
$title = "Aspiring IT Professional";
$email = "yellsoliman4@gmail.com";
$github = "https://github.com/marielle09";

// Education (array for easy editing)
$education = [
  "BS Information Technology – Tarlac State University (Expected 2026)",
  "Senior High School (Academic Track – HUMSS Strand) – Precious High Academy Inc. (2020–2022)",
  "Junior High School – Benigno S. Aquino National High School (2016–2020)",
  "Elementary – San Nicolas Balas, Elementary School (2010–2016)"
];

// Skills
$skills = ["HTML5/CSS3", "PHP & MySQL", "Git & GitHub", "IT Fundamentals", "Team Collaboration"];

// Experience
$experience = [
  "Developed academic projects and responsive web pages using PHP, HTML, and CSS",
  "Collaborated with classmates on system development and design",
  "Applied database management and problem-solving in IT coursework",
  "Worked with teams to create practical technology-driven solutions"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $name ?> – Portfolio</title>
  <link rel="stylesheet" href="soliman.css">
</head>
<body>

  <!-- Header / Intro -->
  <header class="hero">
    <div class="container">
      <img src="yell.jpg" alt="Profile Photo" class="profile-pic">
      <h1><?= $name ?></h1>
      <p class="tagline"><?= $title ?></p>
      <a href="#contact" class="btn">Contact Me</a>
    </div>
  </header>

  <!-- About Section -->
  <section id="about" class="section">
    <h2>About Me</h2>
    <p>
      I am <?= $name ?>, an Information Technology student who is eager to explore 
      the world of technology and innovation.  
      I enjoy creating simple, responsive, and user-friendly web solutions using PHP, 
      HTML, CSS, and databases.  
      I am passionate about improving my technical and problem-solving skills 
      to prepare for a career in the IT industry.
    </p>
  </section>

  <!-- Education Section -->
  <section id="education" class="section bg-light">
    <h2>Education</h2>
    <ul>
      <?php foreach ($education as $edu): ?>
        <li><strong><?= $edu ?></strong></li>
      <?php endforeach; ?>
    </ul>
  </section>

  <!-- Skills Section -->
  <section id="skills" class="section">
    <h2>Skills</h2>
    <div class="skills-grid">
      <?php foreach ($skills as $skill): ?>
        <span><?= $skill ?></span>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- Experience Section -->
  <section id="experience" class="section bg-light">
    <h2>Experience</h2>
    <p>
      <?php foreach ($experience as $exp): ?>
        • <?= $exp ?><br>
      <?php endforeach; ?>
    </p>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="section">
    <h2>Contact Me</h2>
    <p>Email: <a href="mailto:<?= $email ?>"><?= $email ?></a></p>
    <p>GitHub: <a href="<?= $github ?>" target="_blank"><?= $github ?></a></p>

