<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($portfolio['name']) ?> — AI/ML Engineer Portfolio</title>
  <meta name="description" content="<?= htmlspecialchars($portfolio['tagline']) ?>">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<canvas id="particles-canvas"></canvas>
<div class="glow-blob glow-blob-1"></div>
<div class="glow-blob glow-blob-2"></div>

<!-- NAV -->
<nav id="navbar">
  <div class="nav-logo">&lt;<span>Minoka</span> Induwara&gt;</div>

  <!-- Hamburger (mobile only) -->
  <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation" aria-expanded="false">
    <span></span>
    <span></span>
    <span></span>
  </button>

  <div class="nav-links" id="navLinks">
    <a href="#home"       onclick="closeNav()">Home</a>
    <a href="#about"      onclick="closeNav()">About</a>
    <a href="#skills"     onclick="closeNav()">Skills</a>
    <a href="#projects"   onclick="closeNav()">Projects</a>
    <a href="#experience" onclick="closeNav()">Experience</a>
    <a href="#contact"    onclick="closeNav()">Contact</a>
  </div>
</nav>