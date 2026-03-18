<?php
require_once 'includes/data.php';
require_once 'includes/header.php';

$typedJson = htmlspecialchars(json_encode($portfolio['typed_texts']), ENT_QUOTES, 'UTF-8');
?>

<!-- ═══════════════════════════════ HERO ═══════════════════════════════ -->
<section id="home">
  <div style="flex:1;max-width:600px;">

    <div class="reveal">
      <div class="hero-tag">
        <span class="hero-tag-dot"></span>
        Available for opportunities
      </div>
    </div>

    <div class="reveal" style="transition-delay:.1s">
      <h1 class="hero-name">
        <?= htmlspecialchars($portfolio['name']) ?><br>
        <span class="highlight">Induwara</span>
      </h1>
    </div>

    <div class="reveal" style="transition-delay:.2s">
      <div class="hero-typed">
        <span id="typed-text" data-texts="<?= $typedJson ?>">
          <?= htmlspecialchars($portfolio['typed_texts'][0]) ?>
        </span>
        <span class="typed-cursor"></span>
      </div>
    </div>

    <div class="reveal" style="transition-delay:.3s">
      <p class="hero-desc"><?= htmlspecialchars($portfolio['tagline']) ?></p>
    </div>

    <!-- Tech pill badges -->
    <div class="reveal" style="transition-delay:.35s;margin-bottom:1.8rem;">
      <div style="display:flex;flex-wrap:wrap;gap:.5rem;">
        <?php
        $pills = ['Python','Java','Flutter','React','Next.js','PHP','Dart','Firebase','React Native','Spring Boot','Unity','Unreal Engine','C#','C','Arduino'];
        $colors = ['#00ffc8','#7b61ff','#ff4d8d'];
        foreach ($pills as $i => $pill):
          $c = $colors[$i % 3];
        ?>
          <span style="font-family:'JetBrains Mono',monospace;font-size:.65rem;padding:.25rem .75rem;border-radius:100px;border:1px solid <?= $c ?>33;color:<?= $c ?>;background:<?= $c ?>0d;letter-spacing:.5px;">
            <?= htmlspecialchars($pill) ?>
          </span>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="reveal hero-btns" style="transition-delay:.4s">
      <a href="#projects" class="btn-primary">View Projects</a>
      <a href="#contact"  class="btn-outline">Get In Touch</a>
    </div>
  </div>

  <!-- Photo -->
  <div class="hero-photo reveal" style="transition-delay:.2s">
    <div class="photo-ring-wrapper">
      <div class="photo-inner">
        <?php if (!empty($portfolio['photo'])): ?>
          <img src="<?= htmlspecialchars($portfolio['photo']) ?>"
               alt="<?= htmlspecialchars($portfolio['name']) ?>">
        <?php else: ?>
          <div class="photo-placeholder">
            <svg width="56" height="56" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="1">
              <circle cx="12" cy="8" r="4"/>
              <path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/>
            </svg>
            <span>Add your photo<br>in includes/data.php</span>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <div class="float-badge fb-1">🧠 AI / ML</div>
    <div class="float-badge fb-2">📱 Full Stack</div>
    <div class="float-badge fb-3">🎮 Game Dev</div>
  </div>
</section>

<!-- ═══════════════════════════════ STATS ═══════════════════════════════ -->
<div class="stats-bar">
  <?php foreach ($portfolio['stats'] as $stat): ?>
    <div class="stat-item reveal">
      <div class="stat-number"
           data-count="<?= $stat['number'] ?>"
           data-suffix="<?= htmlspecialchars($stat['suffix']) ?>">
        0<?= htmlspecialchars($stat['suffix']) ?>
      </div>
      <div class="stat-label"><?= htmlspecialchars($stat['label']) ?></div>
    </div>
  <?php endforeach; ?>
</div>

<!-- ═══════════════════════════════ ABOUT ═══════════════════════════════ -->
<section id="about" class="section-pad">
  <div class="section-label">About Me</div>
  <h2 class="section-title">
    Engineer. Builder. <span class="dim">Creator.</span>
  </h2>

  <div class="about-grid">
    <div class="reveal">
      <div class="about-text">
        <p>I'm a full-spectrum engineer who lives at the intersection of AI research and software craftsmanship. From training neural networks to shipping production mobile apps and crafting immersive game experiences — I build it all.</p>
        <p>My stack spans 15+ technologies including Python, Java, Flutter, React, Next.js, PHP, Dart, Firebase, React Native, Spring Boot, Unity, Unreal Engine, C#, C, and Arduino.</p>
        <p>Whether it's an LLM pipeline, a cross-platform mobile app, a real-time game engine, or an IoT embedded system — I obsess over clean code, great UX, and real impact.</p>
      </div>
    </div>

    <div class="about-cards">
      <?php foreach ($portfolio['about_cards'] as $i => $card): ?>
        <div class="about-card reveal" style="transition-delay:<?= $i * 0.08 ?>s">
          <div class="icon"><?= $card['icon'] ?></div>
          <h4><?= htmlspecialchars($card['title']) ?></h4>
          <p><?= htmlspecialchars($card['desc']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════ SKILLS ═══════════════════════════════ -->
<section id="skills" class="section-pad-alt">
  <div class="section-label">Technical Skills</div>
  <h2 class="section-title reveal">
    Expertise &amp; <span class="dim">Proficiency</span>
  </h2>

  <!-- Tabs -->
  <div class="skills-tabs reveal">
    <?php foreach ($portfolio['skill_categories'] as $ci => $cat):
      $panelId = 'panel-' . $ci;
    ?>
      <button
        class="skill-tab <?= $ci === 0 ? 'active' : '' ?>"
        data-panel="<?= $panelId ?>">
        <?= $cat['icon'] ?> <?= htmlspecialchars($cat['label']) ?>
      </button>
    <?php endforeach; ?>
  </div>

  <!-- Panels -->
  <?php foreach ($portfolio['skill_categories'] as $ci => $cat):
    $panelId = 'panel-' . $ci;
  ?>
    <div id="<?= $panelId ?>"
         class="skill-panel <?= $ci === 0 ? 'active' : '' ?>">
      <?php foreach ($cat['skills'] as $skill): ?>
        <div class="skill-bar-item reveal">
          <div class="skill-bar-top">
            <span class="skill-bar-name"><?= htmlspecialchars($skill['name']) ?></span>
            <span class="skill-bar-pct"><?= $skill['pct'] ?>%</span>
          </div>
          <div class="skill-bar-track">
            <div class="skill-bar-fill" data-w="<?= $skill['pct'] ?>"></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  <?php endforeach; ?>
</section>

<!-- ══════════════════════════════ PROJECTS ══════════════════════════════ -->
<section id="projects" class="section-pad">
  <div class="section-label">Portfolio</div>
  <h2 class="section-title reveal">
    Featured <span class="dim">Projects</span>
  </h2>

  <div class="projects-grid">
    <?php foreach ($portfolio['projects'] as $i => $project): ?>
      <div class="project-card reveal" style="transition-delay:<?= ($i % 3) * 0.08 ?>s">
        <div class="project-card-top">
          <div class="project-icon"><?= $project['icon'] ?></div>
          <div style="display:flex;align-items:center;gap:.8rem;">
            <span style="font-family:'JetBrains Mono',monospace;font-size:.62rem;
              letter-spacing:1px;padding:.2rem .65rem;border-radius:100px;
              border:1px solid <?= $project['color'] ?>44;
              color:<?= $project['color'] ?>;
              background:<?= $project['color'] ?>11;">
              <?= htmlspecialchars($project['category']) ?>
            </span>
            <div class="project-links">
              <?php if (!empty($project['demo'])): ?>
                <a href="<?= htmlspecialchars($project['demo']) ?>"
                   class="project-link" target="_blank" title="Demo">↗</a>
              <?php endif; ?>
              <?php if (!empty($project['code'])): ?>
                <a href="<?= htmlspecialchars($project['code']) ?>"
                   class="project-link" target="_blank" title="Code">⌥</a>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <h3 class="project-title"><?= htmlspecialchars($project['title']) ?></h3>
        <p class="project-desc"><?= htmlspecialchars($project['desc']) ?></p>
        <div class="project-tags">
          <?php foreach ($project['tags'] as $tag): ?>
            <span class="tag"><?= htmlspecialchars($tag) ?></span>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- ═════════════════════════════ EXPERIENCE ════════════════════════════ -->
<section id="experience" class="section-pad-alt">
  <div class="section-label">Experience</div>
  <h2 class="section-title reveal">
    Work <span class="dim">History</span>
  </h2>

  <div class="timeline">
    <?php foreach ($portfolio['experience'] as $exp): ?>
      <div class="timeline-item reveal">
        <div class="timeline-date"><?= htmlspecialchars($exp['date']) ?></div>
        <div class="timeline-role"><?= htmlspecialchars($exp['role']) ?></div>
        <div class="timeline-company"><?= htmlspecialchars($exp['company']) ?></div>
        <div class="timeline-desc"><?= htmlspecialchars($exp['desc']) ?></div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- ══════════════════════════════ CONTACT ══════════════════════════════ -->
<section id="contact" class="section-pad">
  <div class="contact-inner">
    <div class="section-label" style="justify-content:center">Contact</div>
    <h2 class="section-title reveal">
      Let's Build <span class="dim">Something Together</span>
    </h2>
    <p class="reveal">
      Whether you have an exciting AI project, a mobile app idea, a game to build,
      or just want to talk tech — my inbox is always open.
    </p>
    <a href="mailto:<?= htmlspecialchars($portfolio['email']) ?>"
       class="btn-primary reveal">
      Say Hello →
    </a>
    <div class="contact-links reveal">
      <a href="<?= htmlspecialchars($portfolio['github'])  ?>" class="contact-link" target="_blank">⌥ GitHub</a>
      <a href="<?= htmlspecialchars($portfolio['linkedin'])?>" class="contact-link" target="_blank">in LinkedIn</a>
      <a href="<?= htmlspecialchars($portfolio['twitter']) ?>" class="contact-link" target="_blank">✦ Twitter / X</a>
      <a href="<?= htmlspecialchars($portfolio['resume'])  ?>" class="contact-link" target="_blank">📄 Resume</a>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
