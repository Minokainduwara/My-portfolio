<footer>
  Built with ❤️ by <span><?= htmlspecialchars($portfolio['name']) ?></span> · AI/ML Engineer · <?= date('Y') ?>
</footer>

<script src="assets/js/main.js"></script>

<script>
/* ════════════════════════════════════════════
   HAMBURGER NAV
════════════════════════════════════════════ */
(function () {
  const toggle = document.getElementById('navToggle');
  const links  = document.getElementById('navLinks');
  const navbar = document.getElementById('navbar');

  function openNav() {
    links.classList.add('open');
    toggle.classList.add('open');
    toggle.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
  }

  function closeNav() {
    links.classList.remove('open');
    toggle.classList.remove('open');
    toggle.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
  }

  // Expose closeNav globally so inline onclick works
  window.closeNav = closeNav;

  toggle.addEventListener('click', function (e) {
    e.stopPropagation();
    links.classList.contains('open') ? closeNav() : openNav();
  });

  // Close on outside click
  document.addEventListener('click', function (e) {
    if (!navbar.contains(e.target)) closeNav();
  });

  // Close on Escape
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeNav();
  });

  // Scrolled state for nav background
  window.addEventListener('scroll', function () {
    navbar.classList.toggle('scrolled', window.scrollY > 40);
  });
})();

/* ════════════════════════════════════════════
   ACTIVE NAV LINK ON SCROLL
════════════════════════════════════════════ */
(function () {
  const sections = document.querySelectorAll('section[id]');
  const links    = document.querySelectorAll('.nav-links a');

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        links.forEach(a => a.classList.remove('active'));
        const active = document.querySelector(`.nav-links a[href="#${entry.target.id}"]`);
        if (active) active.classList.add('active');
      }
    });
  }, { rootMargin: '-40% 0px -55% 0px' });

  sections.forEach(s => observer.observe(s));
})();

/* ════════════════════════════════════════════
   REVEAL ON SCROLL
════════════════════════════════════════════ */
(function () {
  const els = document.querySelectorAll('.reveal');
  const io  = new IntersectionObserver(entries => {
    entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); io.unobserve(e.target); } });
  }, { threshold: 0.12 });
  els.forEach(el => io.observe(el));
})();

/* ════════════════════════════════════════════
   TYPED TEXT
════════════════════════════════════════════ */
(function () {
  const el = document.getElementById('typed-text');
  if (!el) return;
  let texts, ti = 0, ci = 0, deleting = false;
  try { texts = JSON.parse(el.dataset.texts); } catch(e) { return; }

  function tick() {
    const full = texts[ti];
    el.textContent = deleting ? full.slice(0, --ci) : full.slice(0, ++ci);
    let delay = deleting ? 50 : 90;
    if (!deleting && ci === full.length) { delay = 2000; deleting = true; }
    else if (deleting && ci === 0)       { deleting = false; ti = (ti + 1) % texts.length; delay = 400; }
    setTimeout(tick, delay);
  }
  setTimeout(tick, 800);
})();

/* ════════════════════════════════════════════
   STAT COUNTER
════════════════════════════════════════════ */
(function () {
  const nums = document.querySelectorAll('.stat-number[data-count]');
  const io   = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (!e.isIntersecting) return;
      const el     = e.target;
      const target = +el.dataset.count;
      const suffix = el.dataset.suffix || '';
      let start = 0;
      const step = Math.ceil(target / 60);
      const t = setInterval(() => {
        start = Math.min(start + step, target);
        el.textContent = start + suffix;
        if (start >= target) clearInterval(t);
      }, 25);
      io.unobserve(el);
    });
  }, { threshold: 0.5 });
  nums.forEach(n => io.observe(n));
})();

/* ════════════════════════════════════════════
   SKILL BARS
════════════════════════════════════════════ */
(function () {
  function animateBars(panel) {
    panel.querySelectorAll('.skill-bar-fill').forEach(bar => {
      bar.style.width = (bar.dataset.w || 0) + '%';
    });
  }

  // Animate active panel on load
  const firstPanel = document.querySelector('.skill-panel.active');
  if (firstPanel) setTimeout(() => animateBars(firstPanel), 300);

  // Tabs
  document.querySelectorAll('.skill-tab').forEach(tab => {
    tab.addEventListener('click', function () {
      document.querySelectorAll('.skill-tab').forEach(t => t.classList.remove('active'));
      document.querySelectorAll('.skill-panel').forEach(p => p.classList.remove('active'));
      this.classList.add('active');
      const panel = document.getElementById(this.dataset.panel);
      if (panel) {
        panel.classList.add('active');
        // Reset then animate
        panel.querySelectorAll('.skill-bar-fill').forEach(b => b.style.width = '0');
        setTimeout(() => animateBars(panel), 50);
      }
    });
  });
})();

/* ════════════════════════════════════════════
   PARTICLES CANVAS
════════════════════════════════════════════ */
(function () {
  const canvas = document.getElementById('particles-canvas');
  if (!canvas) return;
  const ctx = canvas.getContext('2d');
  let W, H, particles = [];

  function resize() {
    W = canvas.width  = window.innerWidth;
    H = canvas.height = window.innerHeight;
  }
  resize();
  window.addEventListener('resize', resize);

  function rand(a, b) { return Math.random() * (b - a) + a; }

  for (let i = 0; i < 70; i++) {
    particles.push({
      x: rand(0, window.innerWidth),
      y: rand(0, window.innerHeight),
      r: rand(.5, 1.8),
      dx: rand(-.3, .3),
      dy: rand(-.3, .3),
      o: rand(.2, .6),
    });
  }

  function draw() {
    ctx.clearRect(0, 0, W, H);
    particles.forEach(p => {
      ctx.beginPath();
      ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
      ctx.fillStyle = `rgba(0,255,200,${p.o})`;
      ctx.fill();
      p.x += p.dx; p.y += p.dy;
      if (p.x < 0 || p.x > W) p.dx *= -1;
      if (p.y < 0 || p.y > H) p.dy *= -1;
    });
    requestAnimationFrame(draw);
  }
  draw();
})();
</script>
</body>
</html>