<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ProSite — Modern Professional Webpage</title>
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    /* ------------------
       Root variables & reset
    ------------------- */
    :root{
      --bg:#0f172a;        /* Main background color */
      --panel:#111827;     /* Panel background */
      --muted:#94a3b8;     /* Muted text */
      --text:#e5e7eb;      /* Primary text */
      --brand:#6366f1;     /* Indigo */
      --brand-2:#22d3ee;   /* Cyan */
      --card:#0b1220;      /* Card background */
      --ring:rgba(99,102,241,.3);
      --ok:#10b981;        /* Success green */
      --warn:#f59e0b;      /* Warning amber */
      --radius:18px;       /* Rounded corners */
      --shadow:0 10px 30px rgba(0,0,0,.35), 0 2px 10px rgba(0,0,0,.25);
    }
    *{box-sizing:border-box}
    html,body{height:100%}

    body{
      margin:0; font-family:Inter,system-ui,-apple-system,Segoe UI,Roboto,Ubuntu,"Helvetica Neue",Arial,sans-serif;
      background: radial-gradient(1200px 700px at 80% -10%, rgba(34,211,238,.15), transparent 60%),
                  radial-gradient(900px 600px at -10% 20%, rgba(99,102,241,.18), transparent 60%),
                  var(--bg);
      color:var(--text); line-height:1.6;
      -webkit-font-smoothing:antialiased; text-rendering:optimizeLegibility;
    }

    a{color:inherit; text-decoration:none}
    .container{width:min(1100px, 92%); margin-inline:auto}

    /* ------------------
       Header & Nav Bar
    ------------------- */
    header{
      position:sticky; top:0; z-index:50; backdrop-filter:saturate(180%) blur(8px);
      background:linear-gradient(to bottom, rgba(15,23,42,.9), rgba(15,23,42,.65));
      border-bottom:1px solid rgba(148,163,184,.15);
    }
    .nav{display:flex; align-items:center; justify-content:space-between; padding:14px 0}
    .brand{display:flex; align-items:center; gap:10px; font-weight:700}
    .logo{width:36px; height:36px; border-radius:12px; background:
      conic-gradient(from 180deg at 50% 50%, var(--brand) 0 40%, var(--brand-2) 40% 75%, #8b5cf6 75% 100%);
      box-shadow:0 8px 20px rgba(99,102,241,.45), inset 0 0 18px rgba(255,255,255,.08);
    }

    /* ------------------
       Buttons
    ------------------- */
    .btn{
      display:inline-flex; align-items:center; gap:10px; padding:10px 16px; border-radius:12px; font-weight:600;
      border:1px solid rgba(148,163,184,.25); background:linear-gradient(180deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
      box-shadow:var(--shadow); transition:transform .15s ease, box-shadow .2s ease, border-color .2s ease;
    }
    .btn:hover{transform:translateY(-1px); border-color:rgba(148,163,184,.4)}
    .btn.primary{background:linear-gradient(135deg, rgba(99,102,241,.95), rgba(34,211,238,.9)); border:none}

    /* ------------------
       Hero Section
    ------------------- */
    .hero{padding:72px 0 48px}
    .eyebrow{display:inline-flex; align-items:center; gap:8px; color:var(--muted); font-weight:600; letter-spacing:.08em; text-transform:uppercase; font-size:.82rem}
    .eyebrow .dot{width:8px; height:8px; border-radius:999px; background:linear-gradient(135deg, var(--brand), var(--brand-2))}
    .headline{font-size:clamp(32px, 5vw, 56px); line-height:1.1; margin:14px 0 12px; font-weight:800}
    .sub{color:var(--muted); font-size:clamp(14px, 2.5vw, 18px); max-width:700px}
    .cta{display:flex; gap:12px; margin-top:22px; flex-wrap:wrap}

    /* ------------------
       Features Grid
    ------------------- */
    .grid{display:grid; grid-template-columns:repeat(3, 1fr); gap:16px; margin:42px 0}
    .card{
      background:linear-gradient(180deg, rgba(255,255,255,.04), rgba(255,255,255,.02));
      border:1px solid rgba(148,163,184,.18);
      padding:22px; border-radius:var(--radius); box-shadow:var(--shadow);
      position:relative; overflow:hidden;
    }
    .card:before{content:""; position:absolute; inset:-1px; padding:1px; border-radius:inherit;
      background:linear-gradient(135deg, rgba(99,102,241,.35), rgba(34,211,238,.25));
      -webkit-mask:linear-gradient(#000 0 0) content-box, linear-gradient(#000 0 0);
      -webkit-mask-composite:xor; mask-composite:exclude; opacity:.5}
    .icon{width:38px; height:38px; border-radius:12px; display:grid; place-items:center; font-weight:700; background:rgba(99,102,241,.18); margin-bottom:10px}
    .card h3{margin:6px 0 8px}
    .card p{color:var(--muted)}

    /* ------------------
       Highlight Panel
    ------------------- */
    .panel{background:linear-gradient(180deg, rgba(255,255,255,.03), rgba(255,255,255,.01)); border:1px solid rgba(148,163,184,.18);
      border-radius:var(--radius); padding:28px; display:flex; align-items:center; justify-content:space-between; gap:20px}
    .panel .stat{display:flex; align-items:center; gap:12px}
    .badge{padding:6px 10px; border-radius:999px; background:rgba(16,185,129,.12); border:1px solid rgba(16,185,129,.35); color:#d1fae5; font-weight:600; font-size:.9rem}

    /* ------------------
       About Section
    ------------------- */
    .about{display:grid; grid-template-columns:1.2fr 1fr; gap:24px; align-items:center; margin:40px 0}
    .about img{width:100%; border-radius:16px; border:1px solid rgba(148,163,184,.2); box-shadow:var(--shadow)}

    /* ------------------
       Contact Section
    ------------------- */
    .contact{margin:40px 0}
    form{display:grid; grid-template-columns:1fr 1fr; gap:14px}
    form input, form textarea{
      width:100%; padding:12px 14px; border-radius:12px; border:1px solid rgba(148,163,184,.25); background:#0b1220; color:var(--text);
      outline:none; box-shadow:inset 0 1px 0 rgba(255,255,255,.03)
    }
    form textarea{grid-column:1 / -1; min-height:120px; resize:vertical}
    form .actions{grid-column:1 / -1; display:flex; gap:10px; align-items:center}

    /* ------------------
       Footer
    ------------------- */
    footer{border-top:1px solid rgba(148,163,184,.15); color:var(--muted); padding:28px 0; margin-top:48px}

    /* ------------------
       Responsive Breakpoints
    ------------------- */
    @media (max-width: 900px){
      .grid{grid-template-columns:1fr 1fr}
      .about{grid-template-columns:1fr}
    }
    @media (max-width: 620px){
      .grid{grid-template-columns:1fr}
      form{grid-template-columns:1fr}
    }
  </style>
</head>
<body>
  <!-- Header with logo and nav -->
  <header>
    <div class="container nav">
      <div class="brand">
        <div class="logo" aria-hidden="true"></div>
        <span>ProSite</span>
      </div>
      <nav>
        <a href="#features" class="btn">Features</a>
        <a href="#about" class="btn">About</a>
        <a href="#contact" class="btn primary">Contact</a>
      </nav>
    </div>
  </header>

  <main class="container">
    <!-- Hero Section -->
    <section class="hero" id="home">
      <span class="eyebrow"><span class="dot"></span> Professional Landing Page</span>
      <h1 class="headline">Make a strong first impression with a clean, modern website.</h1>
      <p class="sub">This single‑page template is fast, responsive, and looks great on any device. Use it for your portfolio, startup, service, or product — just edit the text and go live.</p>
      <div class="cta">
        <a class="btn primary" href="#contact">Get Started</a>
        <a class="btn" href="#features">See Features</a>
      </div>

      <!-- Features Grid -->
      <div class="grid" id="features">
        <article class="card">
          <div class="icon">⚡</div>
          <h3>Fast & Lightweight</h3>
          <p>No frameworks required. Pure HTML + CSS for quick loads and smooth vibes.</p>
        </article>
        <article class="card">
          <div class="icon">📱</div>
          <h3>Responsive by Default</h3>
          <p>Looks crisp on phones, tablets, and desktops with a flexible grid.</p>
        </article>
        <article class="card">
          <div class="icon">🎨</div>
          <h3>Polished Design</h3>
          <p>Modern gradients, soft shadows, and accessible contrast built in.</p>
        </article>
      </div>

      <!-- Highlight Panel -->
      <div class="panel">
        <div class="stat">
          <span class="badge">New</span>
          <div>
            <strong>Dark, professional theme</strong>
            <div style="color:var(--muted)">Easy to customize with CSS variables</div>
          </div>
        </div>
        <a class="btn" href="#about">Learn more →</a>
      </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
      <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=1600&auto=format&fit=crop" alt="Team collaborating around laptops">
      <div>
        <h2>About Us</h2>
        <p style="color:var(--muted)">We help teams and creators launch clean, high‑impact websites. Our approach blends sharp UI with real‑world performance so your brand looks pro without the bloat.</p>
        <ul>
          <li>✅ Clear layout with strong hierarchy</li>
          <li>✅ Accessible and SEO‑friendly markup</li>
          <li>✅ Ready for your content in minutes</li>
        </ul>
        <div class="cta">
          <a class="btn primary" href="#contact">Work with us</a>
          <a class="btn" href="#">Download template</a>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
      <h2>Contact</h2>
      <p style="color:var(--muted)">Tell us about your project and we’ll reply ASAP.</p>
      <form onsubmit="event.preventDefault(); alert('Thanks! This demo form is not connected to a backend.');">
        <input type="text" name="name" placeholder="Your name" required>
        <input type="email" name="email" placeholder="Email address" required>
        <textarea name="message" placeholder="Project details" required></textarea>
        <div class="actions">
          <button class="btn primary" type="submit">Send Message</button>
          <span style="color:var(--muted)">Or email us at hello@example.com</span>
        </div>
      </form>
    </section>
  </main>

  <!-- Footer -->
  <footer>
    <div class="container" style="display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:10px">
      <div>&copy; <span id="year"></span> ProSite. All rights reserved.</div>
      <div>
        <a href="#" class="btn">Privacy</a>
        <a href="#" class="btn">Terms</a>
      </div>
    </div>
  </footer>

  <script>
    // Set current year in footer automatically
    document.getElementById('year').textContent = new Date().getFullYear();
  </script>
</body>
</html>
