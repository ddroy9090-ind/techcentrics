<?php include 'includes/common-header.php'; ?>

<div class="page-wrapper">
  <?php include 'includes/main-header.php'; ?>

  <div class="page-content aboutprime">

    <style>
      /* ===== About (Refined) — fully scoped, no JS ===== */
      .aboutprime {
        --ink: #0e2330;
        --ink2: #173745;
        --muted: #5f7381;
        --line: #e6edf3;
        --bg: #f6fafc;
        --brand: #074da3;
        --brand2: #0b6a85;
        --accent: #10b981;
      }

      .aboutprime * {
        box-sizing: border-box
      }

      .aboutprime h1,
      .aboutprime h2,
      .aboutprime h3 {
        letter-spacing: -.01em
      }

      .aboutprime .ctn {
        max-width: 1240px;
        margin: 0 auto;
        padding: 0 22px
      }

      .aboutprime .btn {
        border-radius: 999px;
        padding: 11px 18px;
        font-weight: 700;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px
      }

      .aboutprime .btn-primary {
        background: var(--brand);
        color: #fff;
        border: 1px solid transparent
      }

      .aboutprime .btn-outline {
        border: 1px solid var(--line);
        color: var(--ink2);
        background: #fff
      }

      .aboutprime .chip {
        font-size: 12px;
        font-weight: 600;
        padding: 8px 12px;
        border-radius: 999px;
        border: 1px solid var(--line);
        background: #fff;
        color: #31525f
      }

      .aboutprime .card {
        border: 1px solid var(--line);
        border-radius: 16px;
        background: #fff
      }

      .aboutprime .shadow {
        box-shadow: 0 18px 48px rgba(12, 26, 39, .10)
      }

      .aboutprime .muted {
        color: var(--muted)
      }

      .aboutprime .kicker {
        letter-spacing: .18em;
        text-transform: uppercase;
        color: #7e93a1;
        font-size: 12px
      }

      /* Titlebar */
      .aboutprime .titlebar {
        background:
          radial-gradient(900px 320px at 10% -20%, rgba(15, 75, 95, .10), transparent 70%),
          radial-gradient(700px 220px at 95% -10%, rgba(11, 106, 133, .08), transparent 70%),
          linear-gradient(180deg, #f7fbfd 0%, #ffffff 100%);
        border-bottom: 1px solid var(--line);
        padding: 68px 0 36px
      }

      .aboutprime .titlebar h1 {
        margin: 0;
        font-size: clamp(32px, 5vw, 52px);
        color: var(--ink)
      }

      .aboutprime .crumbs {
        margin-top: 8px;
        color: #6f8795;
        font-size: 14px
      }

      .aboutprime .crumbs a {
        color: inherit;
        text-decoration: none
      }

      .aboutprime .crumbs i {
        opacity: .6;
        margin: 0 6px
      }

      /* Hero */
      .aboutprime .hero {
        padding: 60px 0 16px;
        background: #fff
      }

      .aboutprime .hero-grid {
        display: grid;
        gap: 30px;
        grid-template-columns: 1fr
      }

      @media(min-width:992px) {
        .aboutprime .hero-grid {
          grid-template-columns: 1.05fr .95fr
        }
      }

      .aboutprime .lead {
        color: #3c5663;
        max-width: 820px
      }

      .aboutprime .chips {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-top: 14px
      }

      .aboutprime .actions {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        margin-top: 16px
      }

      .aboutprime .figure {
        overflow: hidden
      }

      .aboutprime .media {
        aspect-ratio: 16/9;
        max-height: 100%;
        /* height: 100%; */
      }

      .aboutprime .media img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-top-right-radius: 10px;
        border-top-left-radius: 10px;
      }

      .aboutprime .credit {
        font-size: 11px;
        color: #6e8693;
        background: #f6fbfe;
        border-top: 1px solid var(--line);
        padding: 6px 8px
      }

      .aboutprime .credit a {
        color: var(--brand);
        text-decoration: none
      }

      /* KPI band */
      .aboutprime .kpis {
        background: #fff;
        border-top: 1px solid var(--line);
        border-bottom: 1px solid var(--line);
        padding: 22px 0
      }

      .aboutprime .kpi-grid {
        display: grid;
        gap: 12px;
        grid-template-columns: repeat(2, 1fr)
      }

      @media(min-width:768px) {
        .aboutprime .kpi-grid {
          grid-template-columns: repeat(4, 1fr)
        }
      }

      .aboutprime .kpi {
        border: 1px solid var(--line);
        border-radius: 14px;
        background: linear-gradient(180deg, #fff, rgba(255, 255, 255, .94));
        padding: 18px;
        text-align: center
      }

      .aboutprime .kpi h4 {
        margin: 0;
        font-size: 24px;
        color: var(--ink)
      }

      .aboutprime .kpi small {
        display: block;
        margin-top: 4px;
        color: #6f8894
      }

      /* Value props */
      .aboutprime .values {
        padding: 54px 0;
        background: #fff
      }

      .aboutprime .val-grid {
        display: grid;
        gap: 16px;
        grid-template-columns: 1fr
      }

      @media(min-width:992px) {
        .aboutprime .val-grid {
          grid-template-columns: repeat(3, 1fr)
        }
      }

      .aboutprime .val {
        padding: 18px;
        transition: transform .2s ease, box-shadow .2s ease
      }

      .aboutprime .val:hover {
        transform: translateY(-3px);
        box-shadow: 0 16px 34px rgba(12, 26, 39, .08)
      }

      .aboutprime .icon {
        width: 38px;
        height: 38px;
        border-radius: 12px;
        background: #f1faf7;
        border: 1px solid #cfece0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        color: #0e8f60;
        margin-bottom: 8px
      }

      .aboutprime .val h3 {
        margin: 4px 0 6px;
        font-size: 18px;
        color: var(--ink)
      }

      .aboutprime .val p {
        margin: 0;
        color: #4a6672
      }

      /* Operating Model */
      .aboutprime .ops {
        padding: 60px 0;
        background: var(--bg);
        border-top: 1px solid var(--line);
        border-bottom: 1px solid var(--line)
      }

      .aboutprime .ops-grid {
        display: grid;
        gap: 16px;
        grid-template-columns: 1fr
      }

      @media(min-width:992px) {
        .aboutprime .ops-grid {
          grid-template-columns: repeat(4, 1fr)
        }
      }

      .aboutprime .op {
        padding: 16px
      }

      .aboutprime .op b {
        display: block;
        color: var(--brand);
        margin-bottom: 6px
      }

      .aboutprime .op p {
        margin: 0;
        color: #3b5663
      }

      /* Story + Mission + Image */
      .aboutprime .story {
        padding: 60px 0;
        background: #fff
      }

      .aboutprime .story-grid {
        display: grid;
        gap: 16px;
        grid-template-columns: 1fr
      }

      @media(min-width:992px) {
        .aboutprime .story-grid {
          grid-template-columns: 1.1fr .9fr
        }
      }

      .aboutprime .badge {
        display: inline-block;
        font-weight: 700;
        font-size: 11px;
        letter-spacing: .14em;
        text-transform: uppercase;
        color: #527586;
        background: #f1faf7;
        border: 1px solid #cfece0;
        border-radius: 999px;
        padding: 6px 10px;
        margin-bottom: 10px;
        width: 130px;
      }

      .aboutprime .story .card {
        padding: 18px
      }

      .aboutprime .story .card h3 {
        margin: 0 0 6px;
        font-size: 18px;
        color: var(--ink)
      }

      .aboutprime .story .card p {
        margin: 0;
        color: #3c5663
      }

      .aboutprime .img-card {
        overflow: hidden
      }

      .aboutprime .img-card .media {
        aspect-ratio: 16/10;
        max-height: 100%;
        height: 100%;
      }

      /* Industries */
      .aboutprime .inds {
        padding: 56px 0;
        background: #fff;
        border-top: 1px solid var(--line)
      }

      .aboutprime .ind-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 10px
      }

      .aboutprime .ind {
        border: 1px solid var(--line);
        border-radius: 999px;
        background: #fff;
        color: #31525f;
        font-weight: 600;
        font-size: 12px;
        padding: 9px 12px
      }

      /* Case snapshots */
      .aboutprime .cases {
        padding: 60px 0;
        background: var(--bg);
        border-top: 1px solid var(--line);
        border-bottom: 1px solid var(--line)
      }

      .aboutprime .case-grid {
        display: grid;
        gap: 16px;
        grid-template-columns: 1fr
      }

      @media(min-width:992px) {
        .aboutprime .case-grid {
          grid-template-columns: repeat(3, 1fr)
        }
      }

      .aboutprime .case .media {
        aspect-ratio: 16/9
      }

      .aboutprime .case .body {
        padding: 14px
      }

      .aboutprime .case .body h4 {
        margin: 0 0 6px;
        font-size: 16px;
        color: var(--ink)
      }

      .aboutprime .case .body p {
        margin: 0;
        color: #516b77;
        font-size: 14px
      }

      /* Partners */
      .aboutprime .oem {
        padding: 52px 0;
        background: #fff
      }

      .aboutprime .oem-head {
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        gap: 14px;
        flex-wrap: wrap;
        margin-bottom: 14px
      }

      .aboutprime .oem h3 {
        margin: 0;
        color: var(--ink);
        font-size: clamp(20px, 3vw, 26px)
      }

      .aboutprime .logos {
        display: grid;
        gap: 12px;
        grid-template-columns: repeat(3, 1fr)
      }

      @media(min-width:768px) {
        .aboutprime .logos {
          grid-template-columns: repeat(6, 1fr)
        }
      }

      .aboutprime .logo {
        height: 56px;
        border: 1px solid var(--line);
        border-radius: 12px;
        background: linear-gradient(180deg, #fff, rgba(255, 255, 255, .92));
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 8px
      }

      .aboutprime .logo img {
        max-height: 28px;
        width: auto;
        object-fit: contain
      }

      /* Awards/Certs */
      .aboutprime .awards {
        padding: 56px 0;
        background: #fff;
        border-top: 1px solid var(--line)
      }

      .aboutprime .awd-grid {
        display: grid;
        gap: 16px;
        grid-template-columns: 1fr
      }

      @media(min-width:992px) {
        .aboutprime .awd-grid {
          grid-template-columns: repeat(3, 1fr)
        }
      }

      .aboutprime .awd {
        padding: 18px
      }

      .aboutprime .awd h4 {
        margin: 6px 0 6px;
        font-size: 16px;
        color: var(--ink)
      }

      .aboutprime .awd p {
        margin: 0;
        color: #4a6672;
        font-size: 14px
      }

      /* Leadership */
      .aboutprime .leader {
        padding: 78px 0;
        background:
          radial-gradient(900px 300px at 0% -10%, rgba(15, 75, 95, .10), transparent),
          linear-gradient(180deg, #f7fbfd 0%, #ffffff 100%)
      }

      .aboutprime .lead-card {
        display: grid;
        grid-template-columns: 450px 1fr;
        gap: 26px;
        background: rgba(255, 255, 255, .85);
        backdrop-filter: saturate(1.05) blur(6px);
        border: 1px solid var(--line);
        border-radius: 22px;
        padding: 24px
      }

      @media(max-width:991.98px) {
        .aboutprime .lead-card {
          grid-template-columns: 1fr
        }
      }

      .aboutprime .lead-photo img {
        width: 450px;
        height: 450px;
        border-radius: 50%;

        /* width: 100%;
        height: 100%;
        object-fit: cover;
        aspect-ratio: 1/1;
        max-width: 300px;
        border-radius: 50%; */
        box-shadow: 0 10px 24px rgba(0, 0, 0, .14)
      }

      .aboutprime .badges {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin: 8px 0 12px
      }

      .aboutprime .badge {
        font-size: 12px;
        padding: 7px 10px;
        border-radius: 999px;
        border: 1px solid #d8e4ea;
        background: #fff;
        color: #35515d
      }

      .aboutprime .stats {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 12px;
        margin: 14px 0 6px
      }

      @media(max-width:575.98px) {
        .aboutprime .stats {
          grid-template-columns: repeat(2, 1fr)
        }
      }

      .aboutprime .stat {
        background: #fff;
        border: 1px solid var(--line);
        border-radius: 14px;
        padding: 12px 14px;
        text-align: center
      }

      .aboutprime .stat h5 {
        margin: 0;
        font-size: 18px
      }

      .aboutprime .stat small {
        display: block;
        color: #607987;
        margin-top: 4px
      }

      /* CTA */
      .aboutprime .cta {
        background: linear-gradient(135deg, var(--brand), var(--brand2));
        color: #fff;
        padding: 38px 0;
        border-top: 1px solid #0a3a49
      }

      .aboutprime .cta .row {
        display: flex;
        gap: 18px;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between
      }

      .aboutprime .cta h3 {
        margin: 0;
        font-size: clamp(20px, 3.2vw, 26px);
        color: #fff;
      }

      .aboutprime .cta p {
        margin: 0;
        opacity: .95
      }

      .aboutprime .cta .btn {
        background: #fff;
        color: #074da3;
        border: 1px solid transparent
      }
    </style>

    <!-- Titlebar -->
    <header class="titlebar">
      <div class="ctn">
        <h1>About Us</h1>
        <div class="crumbs"><a href="/">Techcentrics</a> <i class="pbmit-base-icon-angle-right"></i> About Us</div>
      </div>
    </header>

    <!-- Hero -->
    <section class="hero">
      <div class="ctn">
        <div class="hero-grid">
          <div>
            <div class="kicker">Who We Are</div>
            <h2>Your IT Transformation Partner</h2>
            <p class="lead">Techcentrics IT Pvt. Ltd. brings 100+ years of combined experience delivering secure-by-design, observable-by-default platforms across system integration, cybersecurity, cloud infrastructure, and enterprise applications.</p>
            <div class="chips">
              <span class="chip">IBM Gold Skills</span>
              <span class="chip">Cloud & Hybrid</span>
              <span class="chip">Security & VAPT</span>
              <span class="chip">ERP: SAP / Oracle</span>
              <span class="chip">Managed Services</span>
            </div>
            <div class="actions">
              <a href="javascript:void(0);"  data-bs-toggle="modal"  data-bs-target="#staticBackdrop" class="btn btn-primary">Talk to Us</a>
              <a href="javascript:void(0);"  data-bs-toggle="modal"  data-bs-target="#staticBackdrop" class="btn btn-outline">Explore Services</a>
            </div>
          </div>

          <figure class="card figure shadow">
            <div class="media h-100">
              <img alt="Team collaborating in a modern workspace"
                src="https://i.pinimg.com/1200x/a3/51/30/a35130edc8113b0b747ed58f84fa3f8c.jpg">
            </div>

          </figure>
        </div>
      </div>
    </section>

    <!-- KPIs -->
    <section class="kpis">
      <div class="ctn">
        <div class="kpi-grid">
          <div class="kpi card">
            <h4>250+</h4><small>Projects Delivered</small>
          </div>
          <div class="kpi card">
            <h4>70+</h4><small>Enterprise Clients</small>
          </div>
          <div class="kpi card">
            <h4>50+</h4><small>Technology Partnerships</small>
          </div>
          <div class="kpi card">
            <h4>100+</h4><small>Years of Combined Experience</small>
          </div>
        </div>
      </div>
    </section>

    <!-- Value Props -->
    <section class="values">
      <div class="ctn">
        <div class="val-grid">
          <div class="val card">
            <div class="icon">✓</div>
            <h3>Customer-First Delivery</h3>
            <p>Roadmaps, SLAs, and governance designed around your business outcomes and timelines.</p>
          </div>
          <div class="val card">
            <div class="icon">★</div>
            <h3>Enterprise-Grade Engineering</h3>
            <p>Secure architectures, DR runbooks, and operational readiness from day one.</p>
          </div>
          <div class="val card">
            <div class="icon">∞</div>
            <h3>Scale & Sustainability</h3>
            <p>Cloud, hybrid, and on-prem solutions that scale without sacrificing resilience.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Operating Model -->
    <section class="ops">
      <div class="ctn">
        <div style="display:flex;justify-content:space-between;align-items:flex-end;gap:12px;flex-wrap:wrap;margin-bottom:10px">
          <h2 style="margin:0;color:var(--ink);font-size:clamp(22px,3.2vw,30px)">Our Operating Model</h2>
          <p class="muted" style="margin:0">Clarity • Ownership • Trust</p>
        </div>
        <div class="ops-grid">
          <div class="op card"><b>1) Discover</b>
            <p>Assess landscape, risks, and success measures; align stakeholders and scope.</p>
          </div>
          <div class="op card"><b>2) Design</b>
            <p>Reference architectures, security guardrails, migration & integration blueprints.</p>
          </div>
          <div class="op card"><b>3) Deliver</b>
            <p>Build, test, cutover with rollback plans, comms, and evidence for audit.</p>
          </div>
          <div class="op card"><b>4) Operate</b>
            <p>Runbooks, SLOs/SLAs, observability & continuous improvement.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Story + Mission -->
    <section class="story">
      <div class="ctn">
        <div class="story-grid">
          <div>
            <div class="card">
              <span class="badge">Our Story</span>
              <h3>Born to Solve Hard Infrastructure Problems</h3>
              <p>Founded in 2020, Techcentrics blends enterprise discipline—governance, security, reliability—into every deployment, from data center migrations to cloud-native foundations.</p>
            </div>
            <div class="card" style="margin-top:14px">
              <span class="badge">Our Mission</span>
              <h3>Make Enterprise IT Effortless to Run</h3>
              <p>We build platforms that are stable, observable, and secure—so your teams can move faster with confidence.</p>
            </div>
          </div>

          <figure class="card img-card shadow">
            <div class="media">
              <img alt="Modern infrastructure and dashboards"
                src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=1400&q=70">
            </div>
            <!-- <figcaption class="credit">Image: <a href="https://unsplash.com" target="_blank" rel="noopener">Unsplash</a></figcaption> -->
          </figure>
        </div>
      </div>
    </section>

    <!-- Industries Served -->
    <section class="inds">
      <div class="ctn">
        <div style="display:flex;justify-content:space-between;align-items:flex-end;gap:12px;flex-wrap:wrap;margin-bottom:12px">
          <h2 style="margin:0;color:var(--ink);font-size:clamp(22px,3.2vw,30px)">Industries We Serve</h2>
          <p class="muted" style="margin:0">Enterprise & mid-market across India and GCC</p>
        </div>
        <div class="ind-grid">
          <span class="ind">Banking & Financial Services</span>
          <span class="ind">Healthcare & Life Sciences</span>
          <span class="ind">Manufacturing</span>
          <span class="ind">Retail & E-commerce</span>
          <span class="ind">Education & Research</span>
          <span class="ind">Government & Public Sector</span>
          <span class="ind">Logistics & Supply Chain</span>
          <span class="ind">Energy & Utilities</span>
          <span class="ind">Telecom</span>
        </div>
      </div>
    </section>

    <!-- Case Snapshots -->
    <section class="cases">
      <div class="ctn">
        <div style="display:flex;justify-content:space-between;align-items:flex-end;gap:12px;flex-wrap:wrap;margin-bottom:12px">
          <h2 style="margin:0;color:var(--ink);font-size:clamp(22px,3.2vw,30px)">Recent Snapshots</h2>
          <p class="muted" style="margin:0">Outcome-driven engagements</p>
        </div>
        <div class="case-grid">
          <article class="case card shadow">
            <div class="media">
              <img alt="Data center migration"
                src="https://i.pinimg.com/736x/1b/62/66/1b6266079ea3ad7fd411ed388e4580f1.jpg">
            </div>
            <div class="body">
              <h4>Zero-Downtime DC Migration</h4>
              <p>Lift-and-shift with replication and cutover runbooks; compliance evidence packaged for audit.</p>
            </div>
          </article>
          <article class="case card shadow">
            <div class="media">
              <img alt="Secure collaboration workspace"
                src="https://i.pinimg.com/1200x/44/b4/2f/44b42f11e933a9e01ac0a9ea2f0b46e4.jpg">
            </div>
            <div class="body">
              <h4>Secure Collaboration at Scale</h4>
              <p>Microsoft 365 + Zimbra coexistence, SSO/MFA, DLP/IRM, and automated provisioning.</p>
            </div>
          </article>
          <article class="case card shadow">
            <div class="media">
              <img alt="Security operations"
                src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?auto=format&fit=crop&w=1400&q=70">
            </div>
            <div class="body">
              <h4>Vulnerability to Resilience</h4>
              <p>VAPT with prioritized fixes, IAM/PAM rollout, and SIEM integrations for real-time visibility.</p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- Partners & Certifications -->
    <section class="oem">
      <div class="ctn">
        <div class="oem-head">
          <h3>Partners</h3><br>
          <p class="muted">We work closely with leading OEMs and hold practitioner certifications.</p>
        </div>
        <div class="logos">
          <div class="logo"><img src="https://upload.wikimedia.org/wikipedia/commons/5/51/IBM_logo.svg" alt="IBM"></div>
          <div class="logo"><img src="https://upload.wikimedia.org/wikipedia/commons/6/64/Cisco_logo.svg" alt="Cisco"></div>
          <div class="logo"><img src="https://upload.wikimedia.org/wikipedia/commons/4/48/Dell_Logo.svg" alt="Dell"></div>
          <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiw0LfdRSFA_iTiMNmPfUZgWezZL6dZH-Iow&s" alt="HP/HPE"></div>
          <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRK7TXoe941tgoisoLFu6sMgCvMPuFE3F-nTQ&s" alt="VMware"></div>
          <div class="logo"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Red_Hat_Logo_2019.svg/1200px-Red_Hat_Logo_2019.svg.png" alt="Red Hat"></div>
          
          <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgIW-yTVHDQI3l4mcmtor3FCuaVVV8TxPU-g&s" alt="Suse"></div>
          <div class="logo"><img src="https://www.netapp.com/media/na_logo_black_rgb_reg-mark_tcm19-21014.jpg" alt="NetApp"></div>
          <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0KWcIISysoKOnecfEzsK1ohELubZALz3ECw&s" alt="Veamm"></div>
          <div class="logo"><img src="https://cybersecurity-excellence-awards.com/wp-content/uploads/482732.png" alt="Barracuda"></div>
          <div class="logo"><img src="https://www.rockwellautomation.com/bin/partner-logo?partnerId=275c0dc66e6aed119562000d3a4f7b88" alt="Fortinet"></div>
          <div class="logo"><img src="https://cdn.cookielaw.org/logos/b54aff14-9d34-4d9f-8514-c71a8f62b8d2/3a14e672-1433-42a5-bd89-adc22a2ef689/06849cac-2eea-4946-8714-ca1b509a1275/A10-NewLogos-Blue-NoReg-CMYK.png" alt="A10 Networks"></div>
          
          <div class="logo"><img src="https://upload.wikimedia.org/wikipedia/commons/9/93/Amazon_Web_Services_Logo.svg" alt="AWS"></div>
          <div class="logo"><img src="https://upload.wikimedia.org/wikipedia/commons/a/a8/Microsoft_Azure_Logo.svg" alt="Azure">></div>
          <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRa64oSicOwYYTOJGVG83BAbPfQRXciZkMJbA&s" alt="Netmagic (NTT)"></div>
          <div class="logo"><img src="https://www.gartner.com/imagesrv/apps/peerinsights/images/vendors/logos/atlassian_it-service-management-tools.png" alt="Atlassian"></div>
          <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSGIzkxflQz3XKG0Y3IGkkVCNmjmFOrmwC6w&s" alt="ip-stack"></div>
          <div class="logo"><img src="https://upload.wikimedia.org/wikipedia/commons/6/66/Tenable%2C_Inc._logo.svg" alt="Tenable"></div>
          
          <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXJSUcDwCjB3sxTJhTrPHc1Zo2_9Xe-WjWLQ&s" alt="Seclore"></div>
          <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0OE_5YTGr2ZtoQCf7Y7oYhlbG0Bbg9Ah7_Q&s" alt="HCL Tech"></div>
          <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCBnk4x6YVAhCNnRb-rFFQfQR8RsMBfeKctQ&s" alt="Sophos"></div>
          <div class="logo"><img src="https://upload.wikimedia.org/wikipedia/commons/5/59/SAP_2011_logo.svg" alt="SAP"></div>
          <div class="logo"><img src="https://upload.wikimedia.org/wikipedia/commons/5/50/Oracle_logo.svg" alt="Oracle"></div>
          <div class="logo"><img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" alt="Microsoft"></div>
          
          
      
      </div>
    </section>

    <!-- Certifications Section Start -->
    <section class="certifications-section" style="padding:60px 0; background:#f9f9f9;" id="certification">
      <div class="container">
        <div style="text-align:center; margin-bottom:40px;">
          <h2 style="font-size:32px; font-weight:700; margin:0; color:#333;">Our Certifications</h2>
          <p style="font-size:16px; color:#666; margin-top:10px;">
            Recognized expertise through industry-leading certifications.
          </p>
        </div>
        <div style="
      display:grid; 
      grid-template-columns: repeat(5, 1fr);
      gap:30px; 
      align-items:center; 
      justify-items:center;">

          <!-- 10 Certification Images -->
          <div style="width:200px; height:200px; display:flex; align-items:center; justify-content:center; background:#fff; box-shadow:0 4px 12px rgba(0,0,0,0.1); border-radius:8px;">
            <img src="images/certi/1.jpg" alt="Certification 1" style="max-width:100%; max-height:100%; object-fit:contain;">
          </div>
          <div style="width:200px; height:200px; display:flex; align-items:center; justify-content:center; background:#fff; box-shadow:0 4px 12px rgba(0,0,0,0.1); border-radius:8px;">
            <img src="images/certi/2.jpg" alt="Certification 2" style="max-width:100%; max-height:100%; object-fit:contain;">
          </div>
          <div style="width:200px; height:200px; display:flex; align-items:center; justify-content:center; background:#fff; box-shadow:0 4px 12px rgba(0,0,0,0.1); border-radius:8px;">
            <img src="images/certi/3.jpg" alt="Certification 3" style="max-width:100%; max-height:100%; object-fit:contain;">
          </div>
          <div style="width:200px; height:200px; display:flex; align-items:center; justify-content:center; background:#fff; box-shadow:0 4px 12px rgba(0,0,0,0.1); border-radius:8px;">
            <img src="images/certi/4.jpg" alt="Certification 4" style="max-width:100%; max-height:100%; object-fit:contain;">
          </div>
          <div style="width:200px; height:200px; display:flex; align-items:center; justify-content:center; background:#fff; box-shadow:0 4px 12px rgba(0,0,0,0.1); border-radius:8px;">
            <img src="images/certi/5.jpg" alt="Certification 5" style="max-width:100%; max-height:100%; object-fit:contain;">
          </div>
          <div style="width:200px; height:200px; display:flex; align-items:center; justify-content:center; background:#fff; box-shadow:0 4px 12px rgba(0,0,0,0.1); border-radius:8px;">
            <img src="images/certi/6.jpg" alt="Certification 6" style="max-width:100%; max-height:100%; object-fit:contain;">
          </div>
          <div style="width:200px; height:200px; display:flex; align-items:center; justify-content:center; background:#fff; box-shadow:0 4px 12px rgba(0,0,0,0.1); border-radius:8px;">
            <img src="images/certi/7.jpg" alt="Certification 7" style="max-width:100%; max-height:100%; object-fit:contain;">
          </div>
          <div style="width:200px; height:200px; display:flex; align-items:center; justify-content:center; background:#fff; box-shadow:0 4px 12px rgba(0,0,0,0.1); border-radius:8px;">
            <img src="images/certi/8.jpg" alt="Certification 8" style="max-width:100%; max-height:100%; object-fit:contain;">
          </div>
          <div style="width:200px; height:200px; display:flex; align-items:center; justify-content:center; background:#fff; box-shadow:0 4px 12px rgba(0,0,0,0.1); border-radius:8px;">
            <img src="images/certi/9.jpg" alt="Certification 9" style="max-width:100%; max-height:100%; object-fit:contain;">
          </div>
          <div style="width:200px; height:200px; display:flex; align-items:center; justify-content:center; background:#fff; box-shadow:0 4px 12px rgba(0,0,0,0.1); border-radius:8px;">
            <img src="images/certi/10.jpg" alt="Certification 10" style="max-width:100%; max-height:100%; object-fit:contain;">
          </div>
          <!-- 10 Certification Images -->
          <div style="width:200px; height:200px; display:flex; align-items:center; justify-content:center; background:#fff; box-shadow:0 4px 12px rgba(0,0,0,0.1); border-radius:8px;">
            <img src="images/certi/11.jpg" alt="Certification 1" style="max-width:100%; max-height:100%; object-fit:contain;">
          </div>
          <div style="width:200px; height:200px; display:flex; align-items:center; justify-content:center; background:#fff; box-shadow:0 4px 12px rgba(0,0,0,0.1); border-radius:8px;">
            <img src="images/certi/12.jpg" alt="Certification 2" style="max-width:100%; max-height:100%; object-fit:contain;">
          </div>
          <div style="width:200px; height:200px; display:flex; align-items:center; justify-content:center; background:#fff; box-shadow:0 4px 12px rgba(0,0,0,0.1); border-radius:8px;">
            <img src="images/certi/13.jpg" alt="Certification 3" style="max-width:100%; max-height:100%; object-fit:contain;">
          </div>
          <div style="width:200px; height:200px; display:flex; align-items:center; justify-content:center; background:#fff; box-shadow:0 4px 12px rgba(0,0,0,0.1); border-radius:8px;">
            <img src="images/certi/14.jpg" alt="Certification 4" style="max-width:100%; max-height:100%; object-fit:contain;">
          </div>
          <div style="width:200px; height:200px; display:flex; align-items:center; justify-content:center; background:#fff; box-shadow:0 4px 12px rgba(0,0,0,0.1); border-radius:8px;">
            <img src="images/certi/15.jpg" alt="Certification 5" style="max-width:100%; max-height:100%; object-fit:contain;">
          </div>
          <div style="width:200px; height:200px; display:flex; align-items:center; justify-content:center; background:#fff; box-shadow:0 4px 12px rgba(0,0,0,0.1); border-radius:8px;">
            <img src="images/certi/16.jpg" alt="Certification 6" style="max-width:100%; max-height:100%; object-fit:contain;">
          </div>
          <div style="width:200px; height:200px; display:flex; align-items:center; justify-content:center; background:#fff; box-shadow:0 4px 12px rgba(0,0,0,0.1); border-radius:8px;">
            <img src="images/certi/17.jpg" alt="Certification 7" style="max-width:100%; max-height:100%; object-fit:contain;">
          </div>
          <div style="width:200px; height:200px; display:flex; align-items:center; justify-content:center; background:#fff; box-shadow:0 4px 12px rgba(0,0,0,0.1); border-radius:8px;">
            <img src="images/certi/18.jpg" alt="Certification 8" style="max-width:100%; max-height:100%; object-fit:contain;">
          </div>
          <div style="width:200px; height:200px; display:flex; align-items:center; justify-content:center; background:#fff; box-shadow:0 4px 12px rgba(0,0,0,0.1); border-radius:8px;">
            <img src="images/certi/19.jpg" alt="Certification 9" style="max-width:100%; max-height:100%; object-fit:contain;">
          </div>
          <div style="width:200px; height:200px; display:flex; align-items:center; justify-content:center; background:#fff; box-shadow:0 4px 12px rgba(0,0,0,0.1); border-radius:8px;">
            <img src="images/certi/20.jpg" alt="Certification 10" style="max-width:100%; max-height:100%; object-fit:contain;">
          </div>

        </div>
      </div>
    </section>
    <!-- Certifications Section End -->
<!-- Events Section Start -->
<style>
.events-section {
    background: #0e4da3; /* Dark background for premium look */
    padding: 60px 0;
    color: #fff;
    font-family: 'Arial', sans-serif;
}

.events-section h2 {
    text-align: center;
    font-size: 38px;
    font-weight: 700;
    margin-bottom: 40px;
    color: #ffffff;
}

.events-slider {
    position: relative;
    max-width: 100%;
    overflow: hidden;
}

.events-container {
    display: flex;
    overflow-x: auto;
    scroll-behavior: smooth;
    padding: 0 50px;
    gap: 25px;
}
.events-container::-webkit-scrollbar {
    display: none; /* hides scrollbar */
}

.events-container img {
    width: 550px;
    height: 400px;
    object-fit: cover;
    border-radius: 12px;
    flex-shrink: 0;
    box-shadow: 0px 4px 15px rgba(0,0,0,0.4);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.events-container img:hover {
    transform: scale(1.05);
    box-shadow: 0px 6px 20px rgba(0,0,0,0.6);
    cursor: pointer;
}

/* Arrow buttons */
.events-slider .arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255,255,255,0.2);
    color: #fff;
    border: none;
    font-size: 32px;
    padding: 10px 14px;
    cursor: pointer;
    z-index: 10;
    border-radius: 50%;
    transition: background 0.3s ease;
}
.events-slider .arrow:hover {
    background: rgba(255,255,255,0.5);
}
.events-slider .arrow-left { left: 15px; }
.events-slider .arrow-right { right: 15px; }

/* Responsive */
@media (max-width: 768px) {
    .events-container img {
        width: 240px;
        height: 170px;
    }
}
@media (max-width: 480px) {
    .events-container img {
        width: 180px;
        height: 130px;
    }
}
</style>

<section class="events-section">
    <div class="container-fluid">
        <h2>Our Events</h2>
        <div class="events-slider">
            <button class="arrow arrow-left" onclick="scrollEvents(-350)">&#10094;</button>
            <div class="events-container" id="eventsScroll">
                <img src="images/events/2.JPG" alt="Event 1">
                <img src="images/events/3.jpg" alt="Event 2">
                <img src="images/events/4.jpg" alt="Event 3">
                <img src="images/events/5.jpg" alt="Event 4">
                <img src="images/events/6.jpg" alt="Event 5">
                <img src="images/events/7.jpeg" alt="Event 6">
                <img src="images/events/8.jpg" alt="Event 7">
                <img src="images/events/9.jpg" alt="Event 5">
                <img src="images/events/10.jpg" alt="Event 6">
                <img src="images/events/11.jpg" alt="Event 7">
            </div>
            <button class="arrow arrow-right" onclick="scrollEvents(350)">&#10095;</button>
        </div>
    </div>
</section>

<script>
const scrollBox = document.getElementById('eventsScroll');

function scrollEvents(amount) {
    scrollBox.scrollBy({ left: amount, behavior: 'smooth' });
}

// Auto-scroller (moves every 3s)
setInterval(() => {
    if (scrollBox.scrollLeft + scrollBox.clientWidth >= scrollBox.scrollWidth - 10) {
        scrollBox.scrollTo({ left: 0, behavior: 'smooth' }); // Loop back to start
    } else {
        scrollBox.scrollBy({ left: 350, behavior: 'smooth' });
    }
}, 3000);
</script>
<!-- Events Section End -->


    <!-- Awards & Certifications -->
    <section class="awards">
      <div class="ctn">
        <div style="display:flex;justify-content:space-between;align-items:flex-end;gap:12px;flex-wrap:wrap;margin-bottom:12px">
          <h2 style="margin:0;color:var(--ink);font-size:clamp(22px,3.2vw,30px)">Awards & Certifications</h2>
          <p class="muted" style="margin:0">Proof of capability and consistency</p>
        </div>
        <div class="awd-grid">
          <div class="awd card">
            <h4>IBM Partner Expertise</h4>
            <p>Deep skills across AIX/Power, Storage, Spectrum Protect, and automation programs.</p>
          </div>
          <div class="awd card">
            <h4>Cloud Practitioner Team</h4>
            <p>AWS/Azure certified engineers across architecture, security, and operations.</p>
          </div>
          <div class="awd card">
            <h4>Security Accreditations</h4>
            <p>Practitioner-level experience implementing VAPT, SIEM integrations, and IAM/PAM.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Leadership -->
    <section class="leader" id="leadership">
      <div class="ctn">
        <div style="text-align:center;margin-bottom:26px">
          <h2 style="margin:0;color:var(--ink);font-size:clamp(22px,3.2vw,30px)">Leadership Behind Techcentrics</h2>
          <p class="muted" style="margin:6px 0 0">Deep engineering meets pragmatic IT strategy.</p>
        </div>

        <div class="lead-card">
          <div class="lead-photo" style="text-align:center">
            <img src="images/sunny.jpg" alt="Sunny Varma, Founder & Managing Director">
          </div>
          <div>
            <small class="muted" style="letter-spacing:.12em;text-transform:uppercase;">Founder & Managing Director</small>
            <h3 style="margin:.2rem 0 .1rem;font-size:26px;color:var(--ink)">Sunny Varma</h3>
            <div style="color:var(--brand);font-weight:600;margin-bottom:10px">Driving reliability, resilience & ROI in enterprise IT</div>

            <div class="badges">
              <span class="badge">IBM</span>
              <span class="badge">SIEMENS</span>
              <span class="badge">HCL</span>
              <span class="badge">Author</span>
              <span class="badge">20+ Years </span>
            </div>

            <p style="color:#425863;margin-bottom:12px">
              Two decades across IBM and large SI programs — focused on building platforms that are secure by design, observable by default, and effortless to run.
            </p>

            <div class="stats">
              <div class="stat">
                <h5>250+</h5><small>Projects Delivered</small>
              </div>
              <div class="stat">
                <h5>70+</h5><small>Enterprise Clients</small>
              </div>
              <div class="stat">
                <h5>50+</h5><small>Tech Partnerships</small>
              </div>
              <div class="stat">
                <h5>13+ </h5><small> Years at IBM India</small>
              </div>
            </div>

            <div style="display:flex;gap:10px;flex-wrap:wrap;margin-top:14px">
              <a href="https://www.linkedin.com/in/sunnyvarma/"  class="btn btn-outline">LinkedIn</a>
              <a href="javascript:void(0);"  data-bs-toggle="modal"  data-bs-target="#staticBackdrop" class="btn btn-outline">Company Profile</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="cta">
      <div class="ctn">
        <div class="row">
          <div>
            <h3>Ready to modernize your IT?</h3>
            <p>Tell us about your integration, cloud, or security goals—we’ll propose a precise plan.</p>
          </div>
          <div>
            <a href="javascript:void(0);"  data-bs-toggle="modal"  data-bs-target="#staticBackdrop" class="btn">Request a Callback</a>
          </div>
        </div>
      </div>
    </section>

  </div>

  <?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/common-footer.php'; ?>