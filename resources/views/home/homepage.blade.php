<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Uduakex Global Solutions | Technology · Real Estate · Agriculture</title>
  <meta name="description" content="Uduakex Global Solutions (BN: 3666391)  Nigerian enterprise bridging Technology, Real Estate, and Agricultural Services. IT training, cybersecurity, gadgets, property, and agribusiness.">
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome 6 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --ink: #060d17;
      --ink-soft: #0a1a2b;
      --ink-deep: #040a12;
      --cyan: #0dcaf0;
      --cyan-dark: #0aa2c0;
      --cyan-glow: rgba(13, 202, 240, 0.35);
      --surface: #f5f9fc;
      --line: rgba(255, 255, 255, 0.08);
      --txt-muted: #8ba3b8;
    }
    * { margin: 0; padding: 0; box-sizing: border-box; }
    html { scroll-behavior: smooth; }
    body {
      font-family: 'Inter', sans-serif;
      background: var(--ink-deep);
      color: #e6eef5;
      overflow-x: hidden;
    }
    h1, h2, h3, h4, h5, .brand, .display-title, .stat-num {
      font-family: 'Space Grotesk', sans-serif;
      letter-spacing: -0.02em;
    }
    ::selection { background: var(--cyan); color: var(--ink); }

    /* ---------- scrollbar ---------- */
    ::-webkit-scrollbar { width: 10px; }
    ::-webkit-scrollbar-track { background: var(--ink-deep); }
    ::-webkit-scrollbar-thumb { background: #1c3348; border-radius: 10px; }
    ::-webkit-scrollbar-thumb:hover { background: var(--cyan-dark); }

    /* ---------- utility ---------- */
    .text-cyan { color: var(--cyan) !important; }
    .bg-ink { background: var(--ink-soft) !important; }
    .glow-cyan { box-shadow: 0 0 40px -8px var(--cyan-glow); }

    /* ============ NAVBAR ============ */
    .navbar {
      background: rgba(4, 10, 18, 0.82);
      backdrop-filter: blur(14px);
      -webkit-backdrop-filter: blur(14px);
      border-bottom: 1px solid var(--line);
      padding: 0.7rem 0;
      transition: background 0.3s ease, box-shadow 0.3s ease;
    }
    .navbar.scrolled {
      background: rgba(4, 10, 18, 0.97);
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.55);
    }
    .brand-lockup {
      display: flex;
      align-items: center;
      gap: 0.7rem;
      text-decoration: none;
    }

    /* ---------- LOGO IMAGE SPOT (replace img src) ---------- */
    .logo-spot {
      width: 56px;
      height: 56px;
      border-radius: 13px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      position: relative;
      background: linear-gradient(135deg, #ffffff 0%, #b8f3ff 100%);
      box-shadow: 0 0 0 1px rgba(13, 202, 240, 0.7), 0 0 24px rgba(13, 202, 240, 0.45);
      overflow: hidden;
      transition: transform 0.35s cubic-bezier(0.2, 0.8, 0.2, 1);
    }
    .logo-spot::after {
      content: '';
      position: absolute;
      inset: 0;
      border-radius: 13px;
      border: 1px solid rgba(255, 255, 255, 0.75);
      pointer-events: none;
    }
    .logo-spot img {
      width: 100%;
      height: 100%;
      object-fit: contain;
      padding: 2px;
      border-radius: 13px;
      display: block;
    }
    .logo-spot .logo-fallback {
      font-family: 'Space Grotesk', sans-serif;
      font-weight: 700;
      font-size: 1.25rem;
      color: #04121c;
      letter-spacing: -0.04em;
      display: none;
    }
    .brand-lockup:hover .logo-spot { transform: rotate(-6deg) scale(1.06); }
    .brand-text { line-height: 1.05; }
    .brand-text .b-main {
      display: block;
      font-family: 'Space Grotesk', sans-serif;
      font-weight: 700;
      font-size: 1.18rem;
      color: #fff;
    }
    .brand-text .b-sub {
      display: block;
      font-size: 0.6rem;
      letter-spacing: 0.24em;
      text-transform: uppercase;
      color: var(--cyan);
      font-weight: 600;
      margin-top: 3px;
    }
    .nav-link {
      color: #c3d4e2 !important;
      font-weight: 500;
      font-size: 0.94rem;
      margin: 0 0.15rem;
      position: relative;
      padding: 0.5rem 0.85rem !important;
    }
    .nav-link::after {
      content: '';
      position: absolute;
      left: 0.85rem;
      right: 0.85rem;
      bottom: 0.25rem;
      height: 2px;
      background: var(--cyan);
      border-radius: 2px;
      transform: scaleX(0);
      transform-origin: left;
      transition: transform 0.3s ease;
    }
    .nav-link:hover { color: #fff !important; }
    .nav-link:hover::after, .nav-link.active::after { transform: scaleX(1); }
    .nav-link.active { color: var(--cyan) !important; }

    /* ============ BUTTONS ============ */
    .btn-cyan {
      background: var(--cyan);
      color: #04121c;
      font-weight: 700;
      padding: 0.72rem 1.7rem;
      border-radius: 50px;
      border: none;
      position: relative;
      overflow: hidden;
      transition: transform 0.25s ease, box-shadow 0.25s ease;
      z-index: 1;
    }
    .btn-cyan::before {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(120deg, #fff0 0%, #ffffff66 50%, #fff0 100%);
      transform: translateX(-120%);
      transition: transform 0.6s ease;
      z-index: -1;
    }
    .btn-cyan:hover { transform: translateY(-3px); box-shadow: 0 14px 34px -8px var(--cyan-glow); color: #04121c; }
    .btn-cyan:hover::before { transform: translateX(120%); }
    .btn-ghost {
      background: transparent;
      color: var(--cyan);
      border: 1.5px solid rgba(13, 202, 240, 0.55);
      font-weight: 600;
      padding: 0.72rem 1.7rem;
      border-radius: 50px;
      transition: all 0.25s ease;
    }
    .btn-ghost:hover {
      background: rgba(13, 202, 240, 0.1);
      border-color: var(--cyan);
      color: #fff;
      transform: translateY(-3px);
    }

    /* ============ HERO ============ */
    .hero {
      position: relative;
      min-height: 100vh;
      display: flex;
      align-items: center;
      padding: 8rem 0 5rem;
      overflow: hidden;
      background:
        radial-gradient(ellipse 60% 50% at 85% 15%, rgba(13, 202, 240, 0.16) 0%, transparent 60%),
        radial-gradient(ellipse 45% 40% at 10% 85%, rgba(13, 202, 240, 0.09) 0%, transparent 60%),
        var(--ink-deep);
    }
    /* animated grid */
    .hero::before {
      content: '';
      position: absolute;
      inset: 0;
      background-image:
        linear-gradient(rgba(13, 202, 240, 0.05) 1px, transparent 1px),
        linear-gradient(90deg, rgba(13, 202, 240, 0.05) 1px, transparent 1px);
      background-size: 56px 56px;
      mask-image: radial-gradient(ellipse 80% 70% at 50% 40%, #000 20%, transparent 75%);
      -webkit-mask-image: radial-gradient(ellipse 80% 70% at 50% 40%, #000 20%, transparent 75%);
      animation: gridDrift 22s linear infinite;
      pointer-events: none;
    }
    @keyframes gridDrift {
      from { background-position: 0 0, 0 0; }
      to { background-position: 56px 56px, 56px 56px; }
    }
    /* floating orbs */
    .orb {
      position: absolute;
      border-radius: 50%;
      filter: blur(70px);
      opacity: 0.5;
      pointer-events: none;
      animation: floatOrb 12s ease-in-out infinite alternate;
    }
    .orb-1 { width: 420px; height: 420px; background: #0a6f8c; top: -120px; right: -80px; }
    .orb-2 { width: 300px; height: 300px; background: #0dcaf0; bottom: -100px; left: -60px; opacity: 0.18; animation-delay: -5s; }
    @keyframes floatOrb {
      from { transform: translate(0, 0) scale(1); }
      to { transform: translate(40px, -35px) scale(1.12); }
    }
    .hero-eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 0.55rem;
      font-size: 0.74rem;
      letter-spacing: 0.22em;
      text-transform: uppercase;
      font-weight: 600;
      color: var(--cyan);
      border: 1px solid rgba(13, 202, 240, 0.3);
      background: rgba(13, 202, 240, 0.07);
      padding: 0.45rem 1.05rem;
      border-radius: 50px;
      margin-bottom: 1.6rem;
    }
    .hero-eyebrow .dot {
      width: 7px; height: 7px; border-radius: 50%;
      background: var(--cyan);
      box-shadow: 0 0 0 0 var(--cyan-glow);
      animation: pulseDot 2.2s infinite;
    }
    @keyframes pulseDot {
      0% { box-shadow: 0 0 0 0 var(--cyan-glow); }
      70% { box-shadow: 0 0 0 10px rgba(13, 202, 240, 0); }
      100% { box-shadow: 0 0 0 0 rgba(13, 202, 240, 0); }
    }
    .hero-title {
      font-size: clamp(2.5rem, 5.4vw, 4.4rem);
      font-weight: 700;
      line-height: 1.03;
      color: #fff;
      margin-bottom: 1.5rem;
    }
    .hero-title .grad {
      background: linear-gradient(100deg, #0dcaf0 0%, #6ee7ff 45%, #0dcaf0 100%);
      background-size: 200% auto;
      -webkit-background-clip: text;
      background-clip: text;
      -webkit-text-fill-color: transparent;
      animation: shine 5s linear infinite;
    }
    @keyframes shine {
      to { background-position: 200% center; }
    }
    .hero-sub {
      font-size: 1.1rem;
      color: #9db4c7;
      max-width: 540px;
      line-height: 1.75;
      margin-bottom: 2.2rem;
    }
    .sector-pills .pill {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      background: rgba(255, 255, 255, 0.035);
      border: 1px solid rgba(255, 255, 255, 0.1);
      color: #cfe0ec;
      font-size: 0.82rem;
      font-weight: 500;
      padding: 0.5rem 1.05rem;
      border-radius: 50px;
      margin: 0 0.5rem 0.6rem 0;
      transition: all 0.25s ease;
    }
    .sector-pills .pill i { color: var(--cyan); }
    .sector-pills .pill:hover {
      border-color: var(--cyan);
      background: rgba(13, 202, 240, 0.09);
      transform: translateY(-2px);
    }

    /* hero visual card */
    .hero-visual {
      position: relative;
      border-radius: 28px;
      padding: 1.6rem;
      background: linear-gradient(160deg, rgba(255,255,255,0.055), rgba(255,255,255,0.015));
      border: 1px solid rgba(255, 255, 255, 0.09);
      backdrop-filter: blur(6px);
      animation: heroFloat 7s ease-in-out infinite alternate;
    }
    @keyframes heroFloat {
      from { transform: translateY(0); }
      to { transform: translateY(-14px); }
    }
    .hv-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 0.9rem;
    }
    .hv-tile {
      background: rgba(4, 12, 20, 0.72);
      border: 1px solid rgba(13, 202, 240, 0.14);
      border-radius: 18px;
      padding: 1.25rem 1rem;
      text-align: center;
      transition: all 0.3s ease;
    }
    .hv-tile i {
      font-size: 1.6rem;
      color: var(--cyan);
      display: block;
      margin-bottom: 0.55rem;
      transition: transform 0.3s ease;
    }
    .hv-tile span {
      font-size: 0.72rem;
      font-weight: 600;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      color: #9db4c7;
    }
    .hv-tile:hover {
      border-color: var(--cyan);
      background: rgba(13, 202, 240, 0.07);
      transform: translateY(-4px);
    }
    .hv-tile:hover i { transform: scale(1.18); }
    .hv-foot {
      margin-top: 1.1rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      font-size: 0.76rem;
      color: #7f97ab;
      border-top: 1px solid var(--line);
      padding-top: 1rem;
    }
    .hv-foot strong { color: var(--cyan); }

    /* ============ STATS STRIP ============ */
    .stats-strip {
      border-top: 1px solid var(--line);
      border-bottom: 1px solid var(--line);
      background: rgba(255, 255, 255, 0.015);
    }
    .stat-box {
      padding: 2rem 1rem;
      text-align: center;
      border-right: 1px solid var(--line);
    }
    .stat-box:last-child { border-right: none; }
    .stat-num {
      font-size: clamp(1.8rem, 3vw, 2.6rem);
      font-weight: 700;
      color: #fff;
      line-height: 1;
    }
    .stat-num span { color: var(--cyan); }
    .stat-lbl {
      font-size: 0.7rem;
      text-transform: uppercase;
      letter-spacing: 0.16em;
      color: var(--txt-muted);
      font-weight: 600;
      margin-top: 0.55rem;
    }
    @media (max-width: 767px) {
      .stat-box { border-right: none; border-bottom: 1px solid var(--line); padding: 1.4rem 1rem; }
      .stat-box:last-child { border-bottom: none; }
    }

    /* ============ SECTION SHELL ============ */
    section { position: relative; }
    .sec-pad { padding: 6rem 0; }
    .sec-eyebrow {
      font-size: 0.72rem;
      letter-spacing: 0.24em;
      text-transform: uppercase;
      font-weight: 700;
      color: var(--cyan);
      margin-bottom: 0.9rem;
      display: inline-flex;
      align-items: center;
      gap: 0.6rem;
    }
    .sec-eyebrow::before {
      content: '';
      width: 26px; height: 2px;
      background: var(--cyan);
      display: inline-block;
    }
    .sec-title {
      font-size: clamp(1.85rem, 3.4vw, 2.7rem);
      font-weight: 700;
      color: #fff;
      line-height: 1.15;
      margin-bottom: 1rem;
    }
    .sec-sub {
      color: #93aabf;
      font-size: 1.02rem;
      max-width: 620px;
      line-height: 1.75;
    }

    /* ============ SERVICE CARDS ============ */
    .svc-card {
      position: relative;
      height: 100%;
      border-radius: 24px;
      padding: 2.1rem 1.8rem;
      background: linear-gradient(165deg, rgba(255,255,255,0.045) 0%, rgba(255,255,255,0.012) 100%);
      border: 1px solid rgba(255, 255, 255, 0.075);
      overflow: hidden;
      transition: transform 0.35s cubic-bezier(0.2, 0.8, 0.2, 1), border-color 0.35s ease, box-shadow 0.35s ease;
    }
    .svc-card::before {
      content: '';
      position: absolute;
      top: 0; left: 0; right: 0;
      height: 2px;
      background: linear-gradient(90deg, transparent, var(--cyan), transparent);
      opacity: 0;
      transition: opacity 0.35s ease;
    }
    .svc-card:hover {
      transform: translateY(-9px);
      border-color: rgba(13, 202, 240, 0.45);
      box-shadow: 0 30px 60px -25px rgba(0, 0, 0, 0.85), 0 0 50px -20px var(--cyan-glow);
    }
    .svc-card:hover::before { opacity: 1; }
    .svc-icon {
      width: 58px;
      height: 58px;
      border-radius: 16px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      color: var(--cyan);
      background: rgba(13, 202, 240, 0.09);
      border: 1px solid rgba(13, 202, 240, 0.2);
      margin-bottom: 1.5rem;
      transition: all 0.35s ease;
    }
    .svc-card:hover .svc-icon {
      background: var(--cyan);
      color: #04121c;
      transform: scale(1.06) rotate(-4deg);
      box-shadow: 0 10px 26px -6px var(--cyan-glow);
    }
    .svc-card h4 {
      font-size: 1.18rem;
      font-weight: 600;
      color: #fff;
      margin-bottom: 0.85rem;
    }
    .svc-list { list-style: none; padding: 0; margin: 0; }
    .svc-list li {
      display: flex;
      align-items: flex-start;
      gap: 0.65rem;
      font-size: 0.9rem;
      color: #9db4c7;
      margin-bottom: 0.6rem;
      line-height: 1.5;
    }
    .svc-list li i {
      color: var(--cyan);
      font-size: 0.78rem;
      margin-top: 0.28rem;
      flex-shrink: 0;
    }
    .svc-tag {
      display: inline-block;
      font-size: 0.66rem;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      font-weight: 700;
      color: var(--cyan);
      background: rgba(13, 202, 240, 0.08);
      border: 1px solid rgba(13, 202, 240, 0.22);
      padding: 0.28rem 0.7rem;
      border-radius: 6px;
      margin-bottom: 1rem;
    }

    /* ============ ABOUT ============ */
    .about-wrap { background: linear-gradient(180deg, var(--ink-deep) 0%, #07111d 100%); }
    .about-panel {
      border-radius: 26px;
      border: 1px solid var(--line);
      background: rgba(255, 255, 255, 0.022);
      padding: 2.4rem;
    }
    .feature-row {
      display: flex;
      gap: 1rem;
      padding: 1.05rem 0;
      border-bottom: 1px solid var(--line);
    }
    .feature-row:last-child { border-bottom: none; }
    .feature-row i {
      color: var(--cyan);
      font-size: 1.15rem;
      margin-top: 0.15rem;
      width: 26px;
      flex-shrink: 0;
    }
    .feature-row strong { color: #fff; font-weight: 600; font-size: 0.97rem; }
    .feature-row p { color: #8ba3b8; font-size: 0.88rem; margin: 0.15rem 0 0; }

    /* ============ FOUNDER IMAGE SPOT ============ */
    .founder-photo {
      width: 100%;
      max-width: 280px;
      aspect-ratio: 3 / 4;
      border-radius: 20px;
      overflow: hidden;
      position: relative;
      background: #08111c;
      box-shadow: 0 0 0 4px rgba(13, 202, 240, 0.16), 0 20px 50px -15px var(--cyan-glow);
      margin: 0 auto;
    }
    .founder-photo img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }
    .founder-photo .founder-fallback {
      position: absolute;
      inset: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Space Grotesk', sans-serif;
      font-weight: 700;
      font-size: 4rem;
      color: #04121c;
      background: linear-gradient(135deg, #6ee7ff, #0dcaf0 60%, #0a7d99);
    }

    .founder-card {
      border-radius: 26px;
      border: 1px solid rgba(13, 202, 240, 0.22);
      background: linear-gradient(160deg, rgba(13, 202, 240, 0.09), rgba(255, 255, 255, 0.02));
      padding: 2.3rem;
      position: relative;
      overflow: hidden;
    }
    .founder-card::after {
      content: '';
      position: absolute;
      width: 220px; height: 220px;
      background: radial-gradient(circle, rgba(13, 202, 240, 0.18), transparent 70%);
      top: -90px; right: -70px;
      border-radius: 50%;
      pointer-events: none;
    }
    .role-chip {
      display: inline-block;
      font-size: 0.68rem;
      font-weight: 600;
      letter-spacing: 0.06em;
      color: #cfe6f2;
      background: rgba(255, 255, 255, 0.06);
      border: 1px solid rgba(255, 255, 255, 0.13);
      padding: 0.32rem 0.72rem;
      border-radius: 7px;
      margin: 0 0.35rem 0.45rem 0;
      transition: all 0.25s ease;
    }
    .role-chip:hover { border-color: var(--cyan); color: var(--cyan); }
    .social-ico {
      width: 40px; height: 40px;
      border-radius: 11px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      color: #c3d4e2;
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.1);
      margin-right: 0.55rem;
      font-size: 1rem;
      transition: all 0.25s ease;
      text-decoration: none;
    }
    .social-ico:hover {
      background: var(--cyan);
      color: #04121c;
      transform: translateY(-3px);
      box-shadow: 0 10px 24px -8px var(--cyan-glow);
    }

    /* mini capability cards */
    .cap-card {
      border-radius: 18px;
      border: 1px solid var(--line);
      background: rgba(255, 255, 255, 0.025);
      padding: 1.5rem 1.4rem;
      height: 100%;
      transition: all 0.3s ease;
    }
    .cap-card:hover {
      border-color: rgba(13, 202, 240, 0.4);
      background: rgba(13, 202, 240, 0.05);
      transform: translateY(-5px);
    }
    .cap-card i { font-size: 1.4rem; color: var(--cyan); margin-bottom: 0.8rem; display: block; }
    .cap-card h6 { color: #fff; font-weight: 600; font-size: 0.97rem; margin-bottom: 0.4rem; }
    .cap-card p { color: #8ba3b8; font-size: 0.82rem; margin: 0; line-height: 1.6; }

    /* ============ REGISTRATION BADGE ============ */
    .reg-band {
      border-radius: 26px;
      border: 1px solid rgba(13, 202, 240, 0.3);
      background:
        radial-gradient(ellipse 60% 120% at 100% 50%, rgba(13, 202, 240, 0.13), transparent 65%),
        linear-gradient(120deg, #08131f, #0a1c2c);
      padding: 2.6rem;
      position: relative;
      overflow: hidden;
    }
    .reg-band::before {
      content: '';
      position: absolute;
      inset: 0;
      background-image: radial-gradient(rgba(13, 202, 240, 0.12) 1px, transparent 1px);
      background-size: 22px 22px;
      opacity: 0.4;
      pointer-events: none;
    }
    .reg-band .reg-inner { position: relative; z-index: 2; }

    /* ============ CONTACT ============ */
    .contact-panel {
      border-radius: 26px;
      border: 1px solid var(--line);
      background: rgba(255, 255, 255, 0.03);
      padding: 2.4rem;
    }
    .form-control, .form-control:focus {
      background: rgba(255, 255, 255, 0.045);
      border: 1px solid rgba(255, 255, 255, 0.12);
      color: #fff;
      border-radius: 13px;
      padding: 0.85rem 1.05rem;
      font-size: 0.94rem;
      transition: all 0.25s ease;
    }
    .form-control::placeholder { color: #6d8598; }
    .form-control:focus {
      background: rgba(255, 255, 255, 0.07);
      border-color: var(--cyan);
      box-shadow: 0 0 0 4px rgba(13, 202, 240, 0.13);
      color: #fff;
    }
    .contact-line {
      display: flex;
      align-items: flex-start;
      gap: 0.95rem;
      padding: 0.95rem 0;
      border-bottom: 1px solid var(--line);
    }
    .contact-line:last-of-type { border-bottom: none; }
    .contact-line i {
      color: var(--cyan);
      font-size: 1.05rem;
      width: 26px;
      margin-top: 0.2rem;
      flex-shrink: 0;
    }
    .contact-line .cl-label {
      font-size: 0.68rem;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--txt-muted);
      font-weight: 600;
      margin-bottom: 0.18rem;
    }
    .contact-line .cl-val { color: #e6eef5; font-size: 0.92rem; }

    /* ============ FOOTER ============ */
    footer {
      background: #040a12;
      border-top: 1px solid var(--line);
      padding: 4rem 0 2rem;
    }
    .foot-title {
      font-size: 0.72rem;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: #fff;
      font-weight: 700;
      margin-bottom: 1.2rem;
    }
    .foot-link {
      display: block;
      color: #8ba3b8;
      text-decoration: none;
      font-size: 0.9rem;
      padding: 0.32rem 0;
      transition: color 0.2s, padding-left 0.2s;
    }
    .foot-link:hover { color: var(--cyan); padding-left: 5px; }
    .foot-bottom {
      border-top: 1px solid var(--line);
      margin-top: 3rem;
      padding-top: 1.6rem;
      font-size: 0.82rem;
      color: #6d8598;
    }

    /* reveal animation */
    .reveal {
      opacity: 0;
      transform: translateY(34px);
      transition: opacity 0.8s cubic-bezier(0.2, 0.8, 0.2, 1), transform 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);
      will-change: opacity, transform;
    }
    .reveal.in { opacity: 1; transform: translateY(0); }

    @media (max-width: 991px) {
      .hero { min-height: auto; padding: 7rem 0 4rem; }
      .sec-pad { padding: 4.2rem 0; }
      .navbar-collapse {
        background: rgba(4, 10, 18, 0.98);
        border: 1px solid var(--line);
        border-radius: 18px;
        margin-top: 0.9rem;
        padding: 1rem 1.1rem;
      }
      .founder-photo { max-width: 240px; margin-bottom: 2rem; }
    }
    @media (max-width: 575px) {
      .about-panel, .founder-card, .reg-band, .contact-panel { padding: 1.6rem; }
      .hero-title { font-size: 2.35rem; }
      .brand-text .b-main { font-size: 1.02rem; }
      .brand-text .b-sub { font-size: 0.54rem; letter-spacing: 0.18em; }
      .logo-spot { width: 48px; height: 48px; }
      .founder-photo { max-width: 200px; }
    }
    @media (prefers-reduced-motion: reduce) {
      *, *::before, *::after { animation-duration: 0.001s !important; transition-duration: 0.001s !important; }
      .reveal { opacity: 1; transform: none; }
    }
  </style>
</head>
<body>

<!-- ==================== NAVBAR ==================== -->
<nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
  <div class="container">
    <a class="brand-lockup" href="#home">
      <!-- ================= LOGO IMAGE SPOT ================= -->
      <div class="logo-spot" title="Uduakex Global Solutions Logo">
        <img src="{{ asset('images/logo.png') }}" alt="Uduakex Global Solutions Logo" id="siteLogo"
             onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
        <span class="logo-fallback">U</span>
      </div>
      <!-- ==================================================== -->
    </a>

    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style="filter: invert(1) brightness(1.6);"></span>
    </button>

    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
        <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#founder">Founder</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
          <a href="#contact" class="btn btn-cyan w-100">Get in touch <i class="fas fa-arrow-right ms-1" style="font-size:0.8em;"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- ==================== HERO ==================== -->
<section class="hero" id="home">
  <div class="orb orb-1"></div>
  <div class="orb orb-2"></div>
  <div class="container position-relative" style="z-index:2;">
    <div class="row align-items-center g-5">
      <div class="col-lg-7">
        <div class="hero-eyebrow reveal"><span class="dot"></span> BN 3666391 · CAC Registered · Nigeria</div>
        <h1 class="hero-title reveal">
          Building the future<br>
          <span class="grad">across three worlds.</span>
        </h1>
        <p class="hero-sub reveal">
          Uduakex Global Solutions unites <strong style="color:#d7e6f1;">technology, real estate, and agricultural services</strong>  delivering future-ready, end-to-end solutions from Port Harcourt to the world.
        </p>

        <div class="sector-pills reveal">
          <span class="pill"><i class="fas fa-microchip"></i> Technology</span>
          <span class="pill"><i class="fas fa-building"></i> Real Estate</span>
          <span class="pill"><i class="fas fa-seedling"></i> Agriculture</span>
          <span class="pill"><i class="fas fa-shield-halved"></i> Cybersecurity</span>
        </div>

        <div class="d-flex flex-wrap gap-3 mt-4 reveal">
          <a href="#services" class="btn btn-cyan">Explore services <i class="fas fa-arrow-right ms-2"></i></a>
          <a href="#contact" class="btn btn-ghost">Talk to us</a>
        </div>
      </div>

      <div class="col-lg-5">
        <div class="hero-visual reveal">
          <div class="hv-grid">
            <div class="hv-tile"><i class="fas fa-laptop-code"></i><span>IT Training</span></div>
            <div class="hv-tile"><i class="fas fa-shield-halved"></i><span>Cyber Security</span></div>
            <div class="hv-tile"><i class="fas fa-mobile-screen-button"></i><span>Gadgets</span></div>
            <div class="hv-tile"><i class="fas fa-house-chimney"></i><span>Real Estate</span></div>
            <div class="hv-tile"><i class="fas fa-seedling"></i><span>Agriculture</span></div>
            <div class="hv-tile"><i class="fas fa-store"></i><span>Procurement</span></div>
          </div>
          <div class="hv-foot">
            <span><i class="fas fa-location-dot me-1"></i> Oyigbo · Obio/Akpor</span>
            <span><strong>2020</strong> founded</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== STATS STRIP ==================== -->
<div class="stats-strip">
  <div class="container">
    <div class="row g-0">
      <div class="col-6 col-md-3"><div class="stat-box">
        <div class="stat-num">3<span>+</span></div>
        <div class="stat-lbl">Industry Sectors</div>
      </div></div>
      <div class="col-6 col-md-3"><div class="stat-box">
        <div class="stat-num">2022</div>
        <div class="stat-lbl">CAC Registered</div>
      </div></div>
      <div class="col-6 col-md-3"><div class="stat-box">
        <div class="stat-num">BN<span>:</span>3666391</div>
        <div class="stat-lbl">Business Number</div>
      </div></div>
      <div class="col-6 col-md-3"><div class="stat-box">
        <div class="stat-num"><i class="fas fa-location-dot" style="font-size:0.6em; color:var(--cyan);"></i> PH</div>
        <div class="stat-lbl">Port Harcourt, NG</div>
      </div></div>
    </div>
  </div>
</div>

<!-- ==================== SERVICES ==================== -->
<section class="sec-pad" id="services">
  <div class="container">
    <div class="row align-items-end mb-5">
      <div class="col-lg-8">
        <div class="sec-eyebrow reveal">What we do</div>
        <h2 class="sec-title reveal">Integrated solutions,<br>one trusted partner.</h2>
        <p class="sec-sub reveal">From cybersecurity and IT coaching to property advisory and agribusiness  every service is built to move your world forward.</p>
      </div>
      <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
        <a href="#contact" class="btn btn-ghost reveal">Request a service <i class="fas fa-arrow-up-right-from-square ms-2" style="font-size:0.8em;"></i></a>
      </div>
    </div>

    <div class="row g-4">
      <!-- Tech & Global Services -->
      <div class="col-md-6 col-lg-4 reveal">
        <div class="svc-card">
          <div class="svc-icon"><i class="fas fa-globe"></i></div>
          <span class="svc-tag">Tech &amp; Global</span>
          <h4>Tech &amp; Global Services</h4>
          <ul class="svc-list">
            <li><i class="fas fa-check"></i> IT training &amp; tech coaching</li>
            <li><i class="fas fa-check"></i> Procurement &amp; equipment sourcing</li>
            <li><i class="fas fa-check"></i> Gadgets, electronics &amp; mobile phones</li>
            <li><i class="fas fa-check"></i> Importation of premium tech products</li>
          </ul>
        </div>
      </div>

      <!-- Cybersecurity -->
      <div class="col-md-6 col-lg-4 reveal" style="transition-delay:0.06s;">
        <div class="svc-card">
          <div class="svc-icon"><i class="fas fa-shield-halved"></i></div>
          <span class="svc-tag">Cyber &amp; Systems</span>
          <h4>Cybersecurity &amp; Systems</h4>
          <ul class="svc-list">
            <li><i class="fas fa-check"></i> System security &amp; hardening</li>
            <li><i class="fas fa-check"></i> Vulnerability identification</li>
            <li><i class="fas fa-check"></i> Penetration testing</li>
            <li><i class="fas fa-check"></i> Ethical hacking &amp; security audits</li>
          </ul>
        </div>
      </div>

      <!-- Real Estate -->
      <div class="col-md-6 col-lg-4 reveal" style="transition-delay:0.12s;">
        <div class="svc-card">
          <div class="svc-icon"><i class="fas fa-house-chimney"></i></div>
          <span class="svc-tag">Real Estate</span>
          <h4>Real Estate Solutions</h4>
          <ul class="svc-list">
            <li><i class="fas fa-check"></i> Property acquisition &amp; advisory</li>
            <li><i class="fas fa-check"></i> Land development &amp; smart housing</li>
            <li><i class="fas fa-check"></i> End-to-end property transactions</li>
            <li><i class="fas fa-check"></i> Tech-driven real estate innovation</li>
          </ul>
        </div>
      </div>

      <!-- Agriculture -->
      <div class="col-md-6 col-lg-4 reveal">
        <div class="svc-card">
          <div class="svc-icon"><i class="fas fa-seedling"></i></div>
          <span class="svc-tag">Agriculture</span>
          <h4>Agricultural Services</h4>
          <ul class="svc-list">
            <li><i class="fas fa-check"></i> Agricultural development services</li>
            <li><i class="fas fa-check"></i> Agribusiness &amp; sustainable farming</li>
            <li><i class="fas fa-check"></i> Modern farming technology</li>
            <li><i class="fas fa-check"></i> Community empowerment programs</li>
          </ul>
        </div>
      </div>

      <!-- Gadgets -->
      <div class="col-md-6 col-lg-4 reveal" style="transition-delay:0.06s;">
        <div class="svc-card">
          <div class="svc-icon"><i class="fas fa-mobile-screen-button"></i></div>
          <span class="svc-tag">Sales &amp; Import</span>
          <h4>Gadgets &amp; Equipment</h4>
          <ul class="svc-list">
            <li><i class="fas fa-check"></i> Laptops, phones &amp; electronics</li>
            <li><i class="fas fa-check"></i> Automotive &amp; home products</li>
            <li><i class="fas fa-check"></i> Premium gadgets &amp; accessories</li>
            <li><i class="fas fa-check"></i> Bulk procurement for businesses</li>
          </ul>
        </div>
      </div>

      <!-- Digital Presence -->
      <div class="col-md-6 col-lg-4 reveal" style="transition-delay:0.12s;">
        <div class="svc-card">
          <div class="svc-icon"><i class="fas fa-hashtag"></i></div>
          <span class="svc-tag">Social</span>
          <h4>Digital Presence</h4>
          <p style="color:#8ba3b8; font-size:0.86rem; margin-bottom:0.8rem;">Explore active listings &amp; updates:</p>
          <ul class="svc-list">
            <li><i class="fab fa-tiktok"></i> <a href="#" target="_blank" style="color:#cfe0ec; text-decoration:none;">Uduakex Global Solutions</a>&nbsp;on TikTok</li>
            <li><i class="fab fa-threads"></i> <a href="#" target="_blank" style="color:#cfe0ec; text-decoration:none;">Uduak Ben</a>&nbsp;on Threads</li>
            <li><i class="fab fa-instagram"></i> <a href="#" target="_blank" style="color:#cfe0ec; text-decoration:none;">Uduak Ben</a>&nbsp;on Instagram</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== ABOUT ==================== -->
<section class="sec-pad about-wrap" id="about">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6">
        <div class="sec-eyebrow reveal">About the company</div>
        <h2 class="sec-title reveal">Innovation, integrity &amp;<br>sustainable growth.</h2>
        <p class="sec-sub reveal mb-4">
          Uduakex Global Solutions is a dynamically integrated Nigerian enterprise registered with the Corporate Affairs Commission under Business Name <strong style="color:#fff;">BN: 3666391</strong>.
        </p>

        <div class="about-panel reveal">
          <div class="feature-row">
            <i class="fas fa-rocket"></i>
            <div>
              <strong>Forward-thinking by design</strong>
              <p>We harness modern technology to revolutionise property acquisition and agricultural development.</p>
            </div>
          </div>
          <div class="feature-row">
            <i class="fas fa-people-group"></i>
            <div>
              <strong>Built to empower</strong>
              <p>End-to-end solutions for individuals, corporate clients, and communities across Nigeria.</p>
            </div>
          </div>
          <div class="feature-row">
            <i class="fas fa-calendar-check"></i>
            <div>
              <strong>Since 2020 · CAC 2022</strong>
              <p>Founded by Uduak Ben  a Nigerian technology and general services company.</p>
            </div>
          </div>
          <div class="feature-row">
            <i class="fas fa-location-dot"></i>
            <div>
              <strong>Headquarters &amp; operations</strong>
              <p>HQ: Oyigbo, Nigeria · Operations from 14 Iriebe, Obio/Akpor (near Port Harcourt).</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="row g-3">
          <div class="col-6 reveal">
            <div class="cap-card">
              <i class="fas fa-code"></i>
              <h6>Python Development</h6>
              <p>Custom scripts, automation, and software solutions.</p>
            </div>
          </div>
          <div class="col-6 reveal" style="transition-delay:0.06s;">
            <div class="cap-card">
              <i class="fas fa-user-shield"></i>
              <h6>Ethical Hacking</h6>
              <p>Security-first mindset across every engagement.</p>
            </div>
          </div>
          <div class="col-6 reveal" style="transition-delay:0.12s;">
            <div class="cap-card">
              <i class="fas fa-chalkboard-user"></i>
              <h6>Tech Coaching</h6>
              <p>Empowering the next generation of developers.</p>
            </div>
          </div>
          <div class="col-6 reveal" style="transition-delay:0.18s;">
            <div class="cap-card">
              <i class="fas fa-lightbulb"></i>
              <h6>Entrepreneurship</h6>
              <p>Turning technology into real-world opportunity.</p>
            </div>
          </div>
        </div>

        <!-- Registration band -->
        <div class="reg-band mt-4 reveal">
          <div class="reg-inner">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
              <div>
                <div class="d-flex align-items-center gap-2 mb-2">
                  <i class="fas fa-building-columns text-cyan fs-5"></i>
                  <span style="font-size:0.7rem; letter-spacing:0.18em; text-transform:uppercase; color:var(--cyan); font-weight:700;">Registered &amp; Trusted</span>
                </div>
                <h5 class="text-white mb-1" style="font-size:1.15rem;">Corporate Affairs Commission, Nigeria</h5>
                <p class="mb-0" style="color:#9db4c7; font-size:0.88rem;">Business Name (BN): <strong style="color:#fff;">3666391</strong></p>
              </div>
              <div class="text-center">
                <div style="width:64px; height:64px; border-radius:18px; display:flex; align-items:center; justify-content:center; background:rgba(13,202,240,0.12); border:1px solid rgba(13,202,240,0.3);">
                  <i class="fas fa-certificate text-cyan fs-3"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== FOUNDER ==================== -->
<section class="sec-pad" id="founder">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-5">
        <div class="sec-eyebrow reveal">Leadership</div>
        <h2 class="sec-title reveal">Meet the founder.</h2>
        <p class="sec-sub reveal">
          Uduak Ben combines deep technical expertise with entrepreneurial drive  leading Uduakex Global Solutions with a vision to make technology accessible and impactful across every sector.
        </p>
        <div class="mt-4 reveal">
          <a href="#contact" class="btn btn-cyan">Work with us <i class="fas fa-arrow-right ms-2"></i></a>
        </div>
      </div>

      <div class="col-lg-7">
        <div class="founder-card reveal">
          <div class="row align-items-center g-4">
            <!-- ================= FOUNDER IMAGE SPOT ================= -->
            <div class="col-md-5 text-center">
              <div class="founder-photo">
                <img src="{{ asset('images/founder.webp') }}" alt="Uduak Ben, Founder and CEO of Uduakex Global Solutions"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="founder-fallback" style="display:none;">UB</div>
              </div>
            </div>
            <!-- ====================================================== -->
            <div class="col-md-7">
              <h3 class="text-white mb-1" style="font-size:1.45rem;">Uduak Ben</h3>
              <p class="mb-3" style="color:var(--cyan); font-size:0.82rem; font-weight:600; letter-spacing:0.08em; text-transform:uppercase;">Founder &amp; CEO</p>
              <div class="mb-3">
                <span class="role-chip"><i class="fas fa-code me-1"></i> Python Developer</span>
                <span class="role-chip"><i class="fas fa-shield-halved me-1"></i> Ethical Hacker</span>
                <span class="role-chip"><i class="fas fa-chalkboard-user me-1"></i> Tech Coach</span>
                <span class="role-chip"><i class="fas fa-rocket me-1"></i> Entrepreneur</span>
              </div>
              <p style="color:#b6cadb; font-size:0.94rem; line-height:1.7; border-left:3px solid var(--cyan); padding-left:1rem; margin-bottom:1.4rem;">
                "We don't just adopt technology  we use it to transform real estate, agriculture, and everyday business across Nigeria."
              </p>
              <div class="d-flex flex-wrap gap-2">
                <a href="#" class="social-ico" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-ico" target="_blank" aria-label="Threads"><i class="fab fa-threads"></i></a>
                <a href="#" class="social-ico" target="_blank" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
                <a href="#" class="social-ico" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="social-ico" target="_blank" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== CONTACT ==================== -->
<section class="sec-pad" id="contact" style="background: linear-gradient(180deg, #040a12 0%, #06121f 100%);">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-6">
        <div class="sec-eyebrow reveal">Get in touch</div>
        <h2 class="sec-title reveal">Let's build something<br><span class="text-cyan">together.</span></h2>
        <p class="sec-sub reveal mb-4">
          Whether you need IT training, cybersecurity, property advisory, agricultural solutions, or premium gadgets  our team is ready to help.
        </p>

        <div class="reveal">
          <div class="contact-line">
            <i class="fas fa-location-dot"></i>
            <div>
              <div class="cl-label">Headquarters</div>
              <div class="cl-val">Oyigbo, Nigeria · Operations: 14 Iriebe, Obio/Akpor (near Port Harcourt)</div>
            </div>
          </div>
          <div class="contact-line">
            <i class="fas fa-id-card"></i>
            <div>
              <div class="cl-label">Registration</div>
              <div class="cl-val">BN: 3666391  Corporate Affairs Commission, Nigeria</div>
            </div>
          </div>
          <div class="contact-line">
            <i class="fas fa-envelope"></i>
            <div>
              <div class="cl-label">Email</div>
              <div class="cl-val">uduakben@uduakexglobalsolutions.online</div>
            </div>
          </div>
          <div class="contact-line">
            <i class="fas fa-globe"></i>
            <div>
              <div class="cl-label">Website</div>
              <div class="cl-val">uduakexglobalsolutions.online</div>
            </div>
          </div>
        </div>

        <div class="d-flex flex-wrap gap-3 mt-4 reveal">
          <a href="#" class="btn btn-cyan"><i class="fab fa-whatsapp me-2"></i> WhatsApp</a>
          <a href="#" class="btn btn-ghost"><i class="fas fa-paper-plane me-2"></i> Message</a>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="contact-panel reveal">
          <h4 class="text-white mb-1" style="font-size:1.25rem;">Send a quick message</h4>
          <p style="color:#8ba3b8; font-size:0.88rem; margin-bottom:1.6rem;">We typically respond within 24 hours.</p>
          @if (session('contact_success'))
            <div class="alert alert-success" role="status">{{ session('contact_success') }}</div>
          @endif
          @if ($errors->any())
            <div class="alert alert-danger" role="alert">
              <ul class="mb-0">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <form id="contactForm" action="{{ route('contact.quick-message') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label class="cl-label d-block mb-2" for="cName">Full name</label>
              <input type="text" class="form-control" id="cName" name="name" value="{{ old('name') }}" maxlength="120" placeholder="Your name" required>
            </div>
            <div class="mb-3">
              <label class="cl-label d-block mb-2" for="cEmail">Email address</label>
              <input type="email" class="form-control" id="cEmail" name="email" value="{{ old('email') }}" maxlength="255" placeholder="you@example.com" required>
            </div>
            <div class="mb-3">
              <label class="cl-label d-block mb-2" for="cMsg">Message</label>
              <textarea class="form-control" id="cMsg" name="message" rows="4" maxlength="5000" placeholder="How can we help?" required>{{ old('message') }}</textarea>
            </div>
            <button type="submit" class="btn btn-cyan w-100">
              Send message <i class="fas fa-arrow-right ms-2" style="font-size:0.85em;"></i>
            </button>
            <p class="mt-3 mb-0" style="color:#6d8598; font-size:0.76rem;">
              <i class="fas fa-lock me-1"></i> Your message will be sent securely to our team.
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== FOOTER ==================== -->
<footer>
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-4">
        <a class="brand-lockup mb-3" href="#home" style="text-decoration:none;">
          <!-- Footer logo spot - same image path -->
          <div class="logo-spot" title="Uduakex Global Solutions Logo">
            <img src="logo.png" alt="Uduakex Logo"
                 onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
            <span class="logo-fallback">U</span>
          </div>
          <div class="brand-text">
            <span class="b-main">Uduakex</span>
            <span class="b-sub">Global Solutions</span>
          </div>
        </a>
        <p style="color:#8ba3b8; font-size:0.88rem; line-height:1.75; max-width:320px;">
          Technology · Real Estate · Agricultural Services. A Nigerian enterprise registered with the CAC under BN 3666391.
        </p>
        <div class="d-flex gap-2 mt-3">
          <a href="#" class="social-ico" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" class="social-ico" aria-label="Threads"><i class="fab fa-threads"></i></a>
          <a href="#" class="social-ico" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
          <a href="#" class="social-ico" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>

      <div class="col-6 col-lg-2">
        <div class="foot-title">Explore</div>
        <a href="#home" class="foot-link">Home</a>
        <a href="#services" class="foot-link">Services</a>
        <a href="#about" class="foot-link">About</a>
        <a href="#founder" class="foot-link">Founder</a>
        <a href="#contact" class="foot-link">Contact</a>
      </div>

      <div class="col-6 col-lg-3">
        <div class="foot-title">Services</div>
        <a href="#services" class="foot-link">IT Training &amp; Coaching</a>
        <a href="#services" class="foot-link">Cybersecurity</a>
        <a href="#services" class="foot-link">Gadgets &amp; Equipment</a>
        <a href="#services" class="foot-link">Real Estate</a>
        <a href="#services" class="foot-link">Agricultural Services</a>
      </div>

      <div class="col-lg-3">
        <div class="foot-title">Contact</div>
        <p style="color:#8ba3b8; font-size:0.88rem; margin-bottom:0.7rem;">
          <i class="fas fa-location-dot text-cyan me-2"></i>Oyigbo, Nigeria<br>
          <span style="padding-left:1.35rem;">14 Iriebe, Obio/Akpor</span>
        </p>
        <p style="color:#8ba3b8; font-size:0.88rem; margin-bottom:0.7rem;">
          <i class="fas fa-envelope text-cyan me-2"></i>uduakben@uduakexglobalsolutions.online
        </p>
        <p style="color:#8ba3b8; font-size:0.88rem; margin:0;">
          <i class="fas fa-globe text-cyan me-2"></i>uduakexglobalsolutions.online
        </p>
      </div>
    </div>

    <div class="foot-bottom d-flex flex-wrap justify-content-between align-items-center gap-2">
      <span>© <span id="year"></span> Uduakex Global Solutions · BN 3666391. All rights reserved.</span>
      <span style="font-size:0.78rem;">Built for <span class="text-cyan">uduakexglobalsolutions.online</span></span>
    </div>
  </div>
</footer>

<!-- Bootstrap Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
  (function () {
    'use strict';

    /* ---------- current year ---------- */
    document.getElementById('year').textContent = new Date().getFullYear();

    /* ---------- navbar scrolled state ---------- */
    const nav = document.getElementById('mainNav');
    const onScroll = () => nav.classList.toggle('scrolled', window.scrollY > 30);
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    /* ---------- scrollspy (manual, safe with fixed navbar) ---------- */
    const navLinks = Array.from(document.querySelectorAll('.navbar .nav-link[href^="#"]'));
    const sections = navLinks
      .map(l => document.querySelector(l.getAttribute('href')))
      .filter(Boolean);

    function setActiveLink() {
      const pos = window.scrollY + 140;
      let current = sections[0];
      for (const sec of sections) {
        if (sec.offsetTop <= pos) current = sec;
      }
      navLinks.forEach(l => {
        l.classList.toggle('active', l.getAttribute('href') === '#' + current.id);
      });
    }
    window.addEventListener('scroll', setActiveLink, { passive: true });
    setActiveLink();

    /* ---------- smooth scroll + close mobile menu ---------- */
    const collapseEl = document.getElementById('navMenu');
    document.querySelectorAll('a[href^="#"]').forEach(link => {
      link.addEventListener('click', e => {
        const href = link.getAttribute('href');
        if (!href || href === '#') return;
        const target = document.querySelector(href);
        if (!target) return;
        e.preventDefault();
        const top = target.getBoundingClientRect().top + window.scrollY - 80;
        window.scrollTo({ top, behavior: 'smooth' });
        if (collapseEl.classList.contains('show')) {
          bootstrap.Collapse.getOrCreateInstance(collapseEl).hide();
        }
      });
    });

    /* ---------- reveal on scroll ---------- */
    const revealEls = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window) {
      const io = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('in');
            io.unobserve(entry.target);
          }
        });
      }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
      revealEls.forEach(el => io.observe(el));
    } else {
      revealEls.forEach(el => el.classList.add('in'));
    }

  })();
</script>
</body>
</html>