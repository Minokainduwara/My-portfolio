/* ─── PARTICLES ─── */
(function () {
  const canvas = document.getElementById('particles-canvas');
  if (!canvas) return;
  const ctx = canvas.getContext('2d');
  let W, H, particles = [];
  const mouse = { x: -999, y: -999 };

  function resize() { W = canvas.width = window.innerWidth; H = canvas.height = window.innerHeight; }
  window.addEventListener('resize', resize); resize();
  window.addEventListener('mousemove', e => { mouse.x = e.clientX; mouse.y = e.clientY; });

  const COLORS = ['#00ffc8', '#7b61ff', '#ffffff', '#ff4d8d'];
  class Particle {
    constructor() { this.reset(); }
    reset() {
      this.x = Math.random() * W; this.y = Math.random() * H;
      this.vx = (Math.random() - .5) * .4; this.vy = (Math.random() - .5) * .4;
      this.r = Math.random() * 1.6 + .4;
      this.alpha = Math.random() * .5 + .1;
      this.color = COLORS[Math.floor(Math.random() * COLORS.length)];
    }
    update() {
      this.x += this.vx; this.y += this.vy;
      const dx = this.x - mouse.x, dy = this.y - mouse.y;
      const d = Math.sqrt(dx * dx + dy * dy);
      if (d < 100) { this.x += dx / d * 1.8; this.y += dy / d * 1.8; }
      if (this.x < 0 || this.x > W) this.vx *= -1;
      if (this.y < 0 || this.y > H) this.vy *= -1;
    }
    draw() {
      ctx.beginPath(); ctx.arc(this.x, this.y, this.r, 0, Math.PI * 2);
      ctx.fillStyle = this.color; ctx.globalAlpha = this.alpha; ctx.fill(); ctx.globalAlpha = 1;
    }
  }
  for (let i = 0; i < 130; i++) particles.push(new Particle());

  function connect() {
    for (let i = 0; i < particles.length; i++) {
      for (let j = i + 1; j < particles.length; j++) {
        const dx = particles[i].x - particles[j].x, dy = particles[i].y - particles[j].y;
        const d = Math.sqrt(dx * dx + dy * dy);
        if (d < 120) {
          ctx.beginPath(); ctx.moveTo(particles[i].x, particles[i].y);
          ctx.lineTo(particles[j].x, particles[j].y);
          ctx.strokeStyle = '#00ffc8'; ctx.globalAlpha = (1 - d / 120) * .13;
          ctx.lineWidth = .5; ctx.stroke(); ctx.globalAlpha = 1;
        }
      }
    }
  }
  function animate() {
    ctx.clearRect(0, 0, W, H);
    particles.forEach(p => { p.update(); p.draw(); });
    connect();
    requestAnimationFrame(animate);
  }
  animate();
})();

/* ─── TYPEWRITER ─── */
(function () {
  const el = document.getElementById('typed-text');
  if (!el) return;
  const texts = JSON.parse(el.dataset.texts || '[]');
  let ti = 0, ci = 0, deleting = false;
  function tick() {
    const cur = texts[ti];
    if (!deleting) {
      el.textContent = cur.slice(0, ++ci);
      if (ci === cur.length) { deleting = true; setTimeout(tick, 2000); return; }
    } else {
      el.textContent = cur.slice(0, --ci);
      if (ci === 0) { deleting = false; ti = (ti + 1) % texts.length; }
    }
    setTimeout(tick, deleting ? 45 : 85);
  }
  tick();
})();

/* ─── SCROLL REVEAL ─── */
(function () {
  const io = new IntersectionObserver(entries => {
    entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
  }, { threshold: .1 });
  document.querySelectorAll('.reveal').forEach(el => io.observe(el));
})();

/* ─── SKILL TABS ─── */
(function () {
  const tabs   = document.querySelectorAll('.skill-tab');
  const panels = document.querySelectorAll('.skill-panel');

  function animateBars(panel) {
    panel.querySelectorAll('.skill-bar-fill').forEach(fill => {
      fill.style.width = '0';
      requestAnimationFrame(() => requestAnimationFrame(() => {
        fill.style.width = fill.dataset.w + '%';
      }));
    });
  }

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      tabs.forEach(t => t.classList.remove('active'));
      panels.forEach(p => p.classList.remove('active'));
      tab.classList.add('active');
      const target = document.getElementById(tab.dataset.panel);
      if (target) { target.classList.add('active'); animateBars(target); }
    });
  });

  const section = document.getElementById('skills');
  let fired = false;
  if (section) {
    const io = new IntersectionObserver(entries => {
      if (entries[0].isIntersecting && !fired) {
        fired = true;
        const first = document.querySelector('.skill-panel.active');
        if (first) animateBars(first);
      }
    }, { threshold: .2 });
    io.observe(section);
  }
})();

/* ─── COUNT UP ─── */
(function () {
  const io = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (!e.isIntersecting) return;
      const el = e.target;
      const target = parseInt(el.dataset.count);
      const suffix = el.dataset.suffix || '';
      let cur = 0; const step = target / 50;
      const t = setInterval(() => {
        cur = Math.min(cur + step, target);
        el.textContent = Math.floor(cur) + suffix;
        if (cur >= target) clearInterval(t);
      }, 28);
      io.unobserve(el);
    });
  }, { threshold: .5 });
  document.querySelectorAll('.stat-number[data-count]').forEach(el => io.observe(el));
})();

/* ─── NAV SCROLL CLASS ─── */
(function () {
  const nav = document.querySelector('nav');
  window.addEventListener('scroll', () => {
    nav.classList.toggle('scrolled', window.scrollY > 40);
  });
})();

/* ─── STAGGER CARDS ─── */
(function () {
  document.querySelectorAll('.projects-grid .project-card').forEach((c, i) => {
    c.style.transitionDelay = (i * .08) + 's';
  });
  document.querySelectorAll('.about-cards .about-card').forEach((c, i) => {
    c.style.transitionDelay = (i * .1) + 's';
  });
})();
