<?php include 'includes/common-header.php'; ?>

<div class="page-wrapper">
  <?php include 'includes/main-header.php'; ?>

  <div class="page-content">

    <style>
      /* ---- FRESH SYSTEM INTEGRATION PAGE (scoped) ---- */
      :root {
        --ink: #0e2330;
        --muted: #5f7381;
        --line: #e7edf2;
        --bg: #f7fafc;
        --brand: #074da3;
        --accent: #a7d3e3;
      }

      .si {
        font-feature-settings: "ss01" on, "ss02" on;
      }

      .contain {
        max-width: 1160px;
        margin: 0 auto;
        padding: 0 18px;
      }

      /* HERO */
      .hero {
        position: relative;
        overflow: hidden;
        background: #fff;
        border-bottom: 1px solid var(--line);
      }

      .hero-grid {
        display: grid;
        gap: 26px;
        grid-template-columns: 1fr;
        padding: 78px 0 42px;
      }

      @media(min-width:992px) {
        .hero-grid {
          grid-template-columns: 1.1fr .9fr;
        }
      }

      .kicker {
        letter-spacing: .18em;
        text-transform: uppercase;
        color: #7e93a1;
        font-size: 12px;
      }

      .h1 {
        font-size: clamp(32px, 5vw, 56px);
        letter-spacing: -.02em;
        color: var(--ink);
        margin: 6px 0 8px;
      }

      .lead {
        color: #475f6c;
        font-size: clamp(15px, 2vw, 18px);
        max-width: 720px;
      }

      .meta {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-top: 16px;
      }

      .chip {
        border: 1px solid var(--line);
        border-radius: 999px;
        padding: 7px 11px;
        background: #fff;
        color: #2f4b58;
        font-size: 12px;
      }

      .hero-figure {
        border: 1px solid var(--line);
        border-radius: 16px;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 12px 30px rgba(10, 27, 40, .08);
      }

      .hero-figure img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .credit {
        font-size: 11px;
        color: #6d8592;
        background: #f4fbfe;
        border-top: 1px solid var(--line);
        padding: 6px 8px;
      }

      .credit a {
        color: var(--brand);
        text-decoration: none;
      }

      .credit a:hover {
        text-decoration: underline;
      }

      /* STRIPE SUBNAV */
      .stripe {
        position: sticky;
        top: 0;
        z-index: 7;
        background: linear-gradient(90deg, #ffffffcc, #ffffffcc),
          repeating-linear-gradient(90deg, #e9f3f7 0 8px, #ffffff 8px 16px);
        backdrop-filter: saturate(1.1) blur(6px);
        border-bottom: 1px solid var(--line);
      }

      .tabs {
        display: flex;
        gap: 8px;
        overflow: auto;
        padding: 10px 0;
      }

      .tabs a {
        white-space: nowrap;
        font-weight: 600;
        color: #466170;
        border: 1px solid var(--line);
        padding: 8px 12px;
        border-radius: 10px;
        background: #fff;
        text-decoration: none;
      }

      .tabs a.active {
        background: var(--brand);
        color: #fff;
        border-color: transparent;
      }

      /* SECTION SHELL */
      .section {
        padding: 60px 0;
        background: #fff;
      }

      .alt {
        background: var(--bg);
      }

      .head {
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        gap: 14px;
        margin-bottom: 16px;
      }

      .h2 {
        margin: 0;
        color: var(--ink);
        font-size: clamp(22px, 3.6vw, 32px);
        letter-spacing: -.01em;
      }

      .sub {
        color: var(--muted);
        margin: 0;
      }

      /* 2-COL LAYOUT */
      .split {
        display: grid;
        gap: 22px;
        grid-template-columns: 1fr;
      }

      @media(min-width:992px) {
        .split {
          grid-template-columns: 1.25fr .75fr;
        }

        .split.rev {
          grid-template-columns: .9fr 1.1fr;
        }
      }

      .figure {
        border: 1px solid var(--line);
        border-radius: 16px;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 8px 24px rgba(10, 27, 40, .06);
      }

      .figure img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      /* CHECKS / PILLS */
      .checks {
        display: grid;
        gap: 10px;
        margin: 12px 0 0;
      }

      .checks li {
        list-style: none;
        position: relative;
        padding-left: 26px;
        color: #3c5663;
      }

      .checks li:before {
        content: "✓";
        position: absolute;
        left: 0;
        top: 0;
        color: #0f7a4b;
        font-weight: 800;
      }

      .pills {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin: 10px 0 16px;
      }

      .pill {
        border: 1px solid #dfe7ee;
        padding: 6px 10px;
        border-radius: 999px;
        background: #fff;
        color: #294b57;
        font-size: 12px;
      }

      /* OEM GRID */
      .oem-title {
        font-size: 12px;
        letter-spacing: .12em;
        text-transform: uppercase;
        color: #6a8391;
        margin: 14px 0 8px;
      }

      .oems {
        display: grid;
        gap: 12px;
        grid-template-columns: repeat(2, 1fr);
      }

      @media(min-width:576px) {
        .oems {
          grid-template-columns: repeat(3, 1fr);
        }
      }

      @media(min-width:992px) {
        .oems {
          grid-template-columns: repeat(6, 1fr);
        }
      }

      .oem {
        height: 54px;
        border: 1px solid var(--line);
        border-radius: 12px;
        background: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 8px;
      }

      .oem img {
        max-height: 28px;
        width: auto;
        object-fit: contain;
      }

      /* INFO CARDS */
      .cards {
        display: grid;
        gap: 14px;
        grid-template-columns: 1fr;
      }

      @media(min-width:992px) {
        .cards {
          grid-template-columns: repeat(3, 1fr);
        }
      }

      .card {
        border: 1px solid var(--line);
        border-radius: 14px;
        background: #fff;
        padding: 14px;
      }

      .card h4 {
        margin: 0 0 6px;
        font-size: 16px;
        color: var(--ink);
      }

      .card p {
        margin: 0;
        color: #4b6673;
        font-size: 14px;
      }

      /* PROCESS TIMELINE */
      .timeline {
        display: grid;
        gap: 14px;
        grid-template-columns: repeat(2, 1fr);
      }

      @media(min-width:992px) {
        .timeline {
          grid-template-columns: repeat(4, 1fr);
        }
      }

      .step {
        border: 1px dashed #d6e3ea;
        background: #fff;
        border-radius: 12px;
        padding: 12px;
      }

      .step b {
        display: block;
        color: var(--brand);
        margin-bottom: 4px;
      }

      /* OUTCOMES */
      .proof {
        border: 1px solid var(--line);
        border-radius: 16px;
        padding: 14px;
        background: #fff;
      }

      .stats {
        display: grid;
        gap: 10px;
        grid-template-columns: repeat(2, 1fr);
      }

      @media(min-width:768px) {
        .stats {
          grid-template-columns: repeat(4, 1fr);
        }
      }

      .stat {
        text-align: center;
        border: 1px dashed #d6e3ea;
        border-radius: 12px;
        padding: 12px;
      }

      .stat h3 {
        margin: 0;
        font-size: 22px;
        color: var(--ink);
      }

      .stat small {
        display: block;
        color: #6f8593;
      }

      /* CTA */
      .cta {
        background: var(--brand);
        color: #fff;
        padding: 30px 0;
        border-top: 1px solid #0c3a49;
      }

      .pbmit-btn {
        border-radius: 999px;
        padding: 10px 16px;
      }
    </style>

    <div class="si">

      <!-- HERO -->
      <section class="hero" id="top">
        <div class="contain">
          <div class="hero-grid">
            <div>
              <div class="kicker">Service</div>
              <h1 class="h1">System Integration</h1>
              <p class="lead">We connect servers, storage, networks, cloud, and security into one governed architecture—built for uptime, scale, and cost efficiency. As an IBM Gold Partner, we bring deep AIX/Power, Spectrum Protect, and analytics expertise.</p>
              <div class="meta">
                <span class="chip">IBM Gold</span>
                <span class="chip">SPSS Deployments</span>
                <span class="chip">Tanflow IAM/PAM</span>
                <span class="chip">Hybrid & Multi-Cloud</span>
              </div>
            </div>
            <figure class="hero-figure">
              <img loading="lazy" alt="Datacenter integration"
                src="https://i.pinimg.com/736x/7d/19/fd/7d19fdea9ea93c3138420058323123ff.jpg">
              <figcaption class="credit">Image: <a href="https://unsplash.com" target="_blank" rel="noopener">Unsplash</a></figcaption>
            </figure>
          </div>
        </div>
      </section>

      <!-- SUBNAV -->
      <div class="stripe">
        <div class="contain">
          <div class="tabs" id="tabs">
            <a href="#partners" class="active">Partnerships</a>
            <a href="#compute">Compute & Backup</a>
            <a href="#network">Network & Firewalls</a>
            <a href="#cloud">Cloud</a>
            <a href="#security">Security</a>
            <a href="#process">Process</a>
            <a href="#outcomes">Outcomes</a>
          </div>
        </div>
      </div>

      <!-- PARTNERSHIPS -->
      <section class="section" id="partners">
        <div class="contain">
          <div class="head">
            <h2 class="h2">Strategic Partnerships</h2>
            <a href="javascript:void(0);"  data-bs-toggle="modal"  data-bs-target="#staticBackdrop" class="pbmit-btn pbmit-btn-outline">Talk to an Architect</a>
          </div>
          <p class="sub">Tier-1 ecosystems that power secure, scalable, and data-driven outcomes.</p>

          <div class="cards" style="margin-top:12px; display:flex; gap:20px; flex-wrap:wrap;">

            <article class="card" style="flex:1; min-width:300px; padding:20px; border:1px solid #eee; border-radius:10px; background:#fff; text-align:left;">
              <div style="margin-bottom:12px;">
                <img src="https://positivethinking.tech/wp-content/uploads/2020/09/IBM-Gold-Partners-France-Positive-Thiking-Company.svg" alt="IBM Logo" style="height:90px;">
              </div>
              <h4>IBM Gold Partner</h4>
              <p>Design & delivery across AIX/LPAR, Power Systems, Storage, Spectrum Protect, and automation—aligned to governance, HA/DR, and observability.</p>
              <p style="margin-top:8px;">
                <a href="https://www.ibm.com/partnerplus/directory/company/7734" target="_blank" rel="noopener" style="color:var(--brand); font-weight:600;">IBM Gold Partner →</a>
              </p>
            </article>

            <article class="card" style="flex:1; min-width:300px; padding:20px; border:1px solid #eee; border-radius:10px; background:#fff; text-align:left;">
              <div style="margin-bottom:12px;">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTk1U8onMWPjAXc62JfLLEc8syLO-B3EsbL7A&s" alt="IBM SPSS Logo" style="height:90px;">
              </div>
              <h4>IBM SPSS (Statistics & Modeler)</h4>
              <p>Assessment, sizing, deployment, and enablement for predictive modeling & statistical analysis across BFSI, healthcare, and education.</p>
              <p style="margin-top:8px;">
                <a href="https://www.ibm.com/account/reg/us-en/signup?formid=urx-19774&bpid=ad6sx" target="_blank" rel="noopener" style="color:var(--brand); font-weight:600;">Start SPSS Trial →</a>
              </p>
            </article>

            <article class="card" style="flex:1; min-width:300px; padding:20px; border:1px solid #eee; border-radius:10px; background:#fff; text-align:left;">
              <div style="margin-bottom:12px;">
                <img src="https://tanflow.com/assets/imgs/logo/logo-black.png" alt="Tanflow Logo" style="height:60px;">
              </div>
              <h4>Tanflow — IAM • PAM • AAA</h4>
              <p>Identity lifecycle, access governance, directory, and AAA integrated with your apps & infra to reduce privilege risk and simplify audits.</p>
              <p style="margin-top:8px;">
                <a href="https://www.tanflow.com" target="_blank" rel="noopener" style="color:var(--brand); font-weight:600;">Visit the Website →</a>
              </p>
            </article>

          </div>

        </div>
      </section>

      <!-- COMPUTE / STORAGE / BACKUP -->
      <section class="section alt" id="compute">
        <div class="contain">
          <div class="head">
            <h2 class="h2">Compute • Storage • Backup</h2>

          </div>
          <div class="split">
            <div>
              <p class="lead">We consolidate and right-size estates, modernize virtualization (VMware/KVM/Power), and implement immutable backups & air-gapped copies. DR runbooks map to clear RTO/RPOs with tested failover drills.</p>
              <ul class="checks">
                <li>AIX & LPAR design, Power capacity planning</li>
                <li>Remote Copy, Metro/Global Mirror with app-aware consistency</li>
                <li>Spectrum Protect & Veeam automation, VTL & offsite copies</li>
                <li>Enterprise mailing/Connections with HA, archival & retention</li>
                <li>DR playbooks, evidence packs & compliance reporting</li>
              </ul>

              <div class="oem-title">Major OEMs</div>
              <div class="oems">
                <a class="oem" href="https://www.ibm.com" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/5/51/IBM_logo.svg" alt="IBM"></a>
                <a class="oem" href="https://www.dell.com" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/4/48/Dell_Logo.svg" alt="Dell"></a>
                <a class="oem" href="https://www.hpe.com" target="_blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAATYAAACjCAMAAAA3vsLfAAAAmVBMVEX///8AAAAAqYLU1NRNTU0ICAgAnnj///65ubl4eHgApHqY1MXF7OYAqID6///6+vpMsplkZGR8yLXm5uav4dTc3Nzz8/P0//9ycnK66N/Ozs4UpYLs7OxVVVXHx8cAn3UYGBgtLS1JSUmjo6Oampo8PDyurq4mJia8vLyJiYk3NzdpaWnW7umd0scAn24ApnlcwauHx7k3spNJW6VHAAADXElEQVR4nO3cbVvaMBiGYSoqQy0dQ0ELIiCgTje2/f8ftx77MJ+0SUhaIhGu02/WPG1vgyUv0moBAAAAAAAAAAAAAAAAAAAAAAAAAAAAaCJvv7txbZTZWk3kQZubwXDrmZyLaeW+aThLhHvXRpls9Vo6uE48rLpr6y/Lq1hVrUhcnImT9F0bKbF1Swe/+N7brGvuFd7FFGd1U9kqgtgK87XhTMRm9/SsPROxbfOqe0AQ21azQfVMxOag+lAlNheV/kZsTia7LHY8sa12Wex4YkuWuyz2aUcJi1OTxWKuvdOJudjKWMwk20VEOoFj07ynECbPt8XPyEtIkhdzsXAjc2+BY9s6qTJclrub8q5XKTZ1vb7w9h1b0eW+q7Epw1NiM1sosZ0aixGbYqJ2N/kqJTaLpfJYkOlMX2//67ddry+8KGJT6iWPPte/J1HE1rq3FYxRHLE9yjZiSaPT6bhek06jxlZxxDaVbebv3/8XW6euVq/4CiOO2G5km5k40LS/HHZsA9lGzlu8XTbxoxfqdVorNmV1NWhvu/65uahtcz5yviNP6jjalWwV8m9b6/ripL50HFls0s6fpHJ0RWw2xvdtxGahjhLkBC+xWahzbnJMWsSW1s/tsGMrzYDIaXFiMxrOlXoLeYzYTPJSPWUChNj08n65nrKWIGNLvQMcj5pNBZgFjq2dDY0G+br7VCmnrlwpvW3sO0yIbZTgHJs/dZ1U6W2/vnn6HVlsroMr/+qlVXkRW/pw5313oV6jSmz3A0fKyDvoHhDZ24rYws07eopsD0h5RyWxuajsfSjFFo2oYquu6BHbVnPNPhsZ2zmxabzodlURm91CvwuL2Gz6pq1rxGa0WpY3Or8jNp3T7mNu/e/II42tbRzIZ5nLxtojjc35P3sNiK2W8ttdvz0g4Xyu2Hpegu0A+VSxbf589TXqxbQHZD+xnaSb1MtmPIpq68x+YvNfixnT22pIi9gant+E2Gohtlrij62BI46twaL8B63KH2BsoXpbctixNTy9UfSxNUjtg2Jz/kStoWx1Wzq43mVslw/n9YXbA2L9JDZzq6ml1UCUzM3ztm7e7q7qu7vK4lmQ/kjNbzrcJEjcGkybhZ1yAwAAAAAAAAAAAAAAAAAAAAAAAAAA2Ju/NTVwxD4pd8cAAAAASUVORK5CYII=" alt="HP/HPE"></a>
                <a class="oem" href="https://www.suse.com" target="_blank"><img src="data:image/jpeg;base64,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" alt="SUSE"></a>
                <a class="oem" href="https://www.redhat.com" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Red_Hat_Logo_2019.svg/1200px-Red_Hat_Logo_2019.svg.png" alt="Red Hat"></a>
                <a class="oem" href="https://www.netapp.com" target="_blank"><img src="https://www.netapp.com/media/na_logo_black_rgb_reg-mark_tcm19-21014.jpg" alt="NetApp"></a>
                <a class="oem" href="https://www.veeam.com" target="_blank"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0KWcIISysoKOnecfEzsK1ohELubZALz3ECw&s" alt="Veeam"></a>
              </div>
            </div>
            <figure class="figure">
              <img loading="lazy" alt="Servers & storage"
                src="https://i.pinimg.com/1200x/d3/45/b7/d345b7fcd6c71461f2984701c55cfab1.jpg">
              <figcaption class="credit">Image: <a href="https://unsplash.com" target="_blank" rel="noopener">Unsplash</a></figcaption>
            </figure>
          </div>
        </div>
      </section>

      <!-- NETWORK -->
      <section class="section" id="network">
        <div class="contain">
          <div class="head">
            <h2 class="h2">Network • Firewalls • Switches</h2>

          </div>
          <div class="split rev">
            <div>
              <p class="lead">We implement resilient cores, SD-WAN for branch continuity, identity-aware segmentation (NAC), and always-on observability (NMS/NetFlow). Baselines & change control keep infra auditable and compliant.</p>
              <ul class="checks">
                <li>Core & distribution architectures, stacking & MLAG</li>
                <li>NGFW/IPS, VPN & SASE in HA pairs</li>
                <li>SD-WAN overlays, QoS & path conditioning</li>
                <li>NAC (802.1X), guest onboarding & posture control</li>
                <li>Telemetry, syslog & SNMP baselines with alerting</li>
              </ul>

              <div class="oem-title">Major OEMs</div>
              <div class="oems">
                <a class="oem" href="https://www.cisco.com" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/6/64/Cisco_logo.svg" alt="Cisco"></a>
                <a class="oem" href="https://www.barracuda.com" target="_blank"><img src="https://cybersecurity-excellence-awards.com/wp-content/uploads/482732.png" alt="Barracuda"></a>
                <a class="oem" href="https://www.fortinet.com" target="_blank"><img src="https://www.rockwellautomation.com/bin/partner-logo?partnerId=275c0dc66e6aed119562000d3a4f7b88" alt="Fortinet"></a>
                <a class="oem" href="https://www.a10networks.com" target="_blank"><img src="https://cdn.cookielaw.org/logos/b54aff14-9d34-4d9f-8514-c71a8f62b8d2/3a14e672-1433-42a5-bd89-adc22a2ef689/06849cac-2eea-4946-8714-ca1b509a1275/A10-NewLogos-Blue-NoReg-CMYK.png" alt="A10 Networks"></a>
              </div>
            </div>
            <figure class="figure">
              <img loading="lazy" alt="Core networking"
                src="https://i.pinimg.com/736x/d6/6e/ea/d66eeaf6317890424833dc09cad5bbfb.jpg">
              <figcaption class="credit">Image: <a href="https://unsplash.com" target="_blank" rel="noopener">Unsplash</a></figcaption>
            </figure>
          </div>
        </div>
      </section>

      <!-- CLOUD -->
      <section class="section alt" id="cloud">
        <div class="contain">
          <div class="head">
            <h2 class="h2">Cloud Software & Solutions</h2>

          </div>
          <div class="split">
            <div>
              <p class="lead">Landing zones with policy-as-code guardrails, near-zero-downtime migrations, cross-cloud backup/DR, and IAM. FinOps baselines for predictable costs; SRE-aligned monitoring for SLIs/SLOs.</p>
              <div class="pills">
                <span class="pill">Landing zones & guardrails (IaC)</span>
                <span class="pill">Migration factories</span>
                <span class="pill">Cross-cloud backup/DR</span>
                <span class="pill">Observability & incident playbooks</span>
                <span class="pill">FinOps budgets & rightsizing</span>
              </div>

              <div class="oem-title">Major OEMs</div>
              <div class="oems">
                <a class="oem" href="https://aws.amazon.com" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/9/93/Amazon_Web_Services_Logo.svg" alt="AWS"></a>
                <a class="oem" href="https://azure.microsoft.com" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/a/a8/Microsoft_Azure_Logo.svg" alt="Azure"></a>
                <a class="oem" href="https://www.ibm.com/cloud" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/5/51/IBM_logo.svg" alt="IBM Cloud"></a>
                <a class="oem" href="https://www.vmware.com" target="_blank"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRK7TXoe941tgoisoLFu6sMgCvMPuFE3F-nTQ&s" alt="VMware"></a>
                <a class="oem" href="https://www.netmagic.com" target="_blank"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRa64oSicOwYYTOJGVG83BAbPfQRXciZkMJbA&s" alt="Netmagic (NTT)"></a>
                <a class="oem" href="https://www.atlassian.com" target="_blank"><img src="data:image/png;base64,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" alt="Atlassian"></a>
                <a class="oem" href="https://ipstack.com" target="_blank"><img src="data:image/png;base64,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" alt="ipstack"></a>
              </div>
            </div>
            <figure class="figure">
              <img loading="lazy" alt="Cloud dashboard"
                src="https://i.pinimg.com/1200x/26/f5/fb/26f5fb5e21572744721f57fe18dd1513.jpg">
              <figcaption class="credit">Image: <a href="https://unsplash.com" target="_blank" rel="noopener">Unsplash</a></figcaption>
            </figure>
          </div>
        </div>
      </section>

      <!-- SECURITY -->
      <section class="section" id="security">
        <div class="contain">
          <div class="head">
            <h2 class="h2">Vulnerability • Endpoint • Security</h2>

          </div>
          <div class="split rev">
            <div>
              <p class="lead">Operationalize exposure (scan→prioritize→remediate), protect data at source (IRM), and integrate XDR with SIEM. Identity controls via Tanflow IAM/PAM reduce privilege risk and simplify audits.</p>
              <ul class="checks">
                <li>Tenable VM: discovery, CVSS, exceptions & SLAs</li>
                <li>Seclore IRM: persistent file protection & usage analytics</li>
                <li>Endpoint & XDR with automation playbooks</li>
                <li>Splunk SIEM: onboarding, detections, dashboards</li>
                <li>IAM/PAM & AAA with Tanflow</li>
              </ul>

              <div class="oem-title">Major OEMs</div>
              <div class="oems">
                <a class="oem" href="https://www.ibm.com/security" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/5/51/IBM_logo.svg" alt="IBM Security"></a>
                <a class="oem" href="https://www.tenable.com" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/6/66/Tenable%2C_Inc._logo.svg" alt="Tenable"></a>
                <a class="oem" href="https://www.seclore.com" target="_blank"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXJSUcDwCjB3sxTJhTrPHc1Zo2_9Xe-WjWLQ&s" alt="Seclore"></a>
                <a class="oem" href="https://www.hcltech.com" target="_blank"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0OE_5YTGr2ZtoQCf7Y7oYhlbG0Bbg9Ah7_Q&s" alt="HCL Tech"></a>
                <a class="oem" href="https://www.sophos.com" target="_blank"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCBnk4x6YVAhCNnRb-rFFQfQR8RsMBfeKctQ&s" alt="Sophos"></a>
                <a class="oem" href="https://www.splunk.com" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/f/f8/Splunk_logo.png" alt="Splunk"></a>
              </div>
            </div>
            <figure class="figure">
              <img loading="lazy" alt="Security operations"
                src="https://i.pinimg.com/1200x/79/6c/81/796c81f20793d7513cacb0fe3bc17689.jpg">
              <figcaption class="credit">Image: <a href="https://unsplash.com" target="_blank" rel="noopener">Unsplash</a></figcaption>
            </figure>
          </div>
        </div>
      </section>

      <!-- PROCESS -->
      <section class="section alt" id="process">
        <div class="contain">
          <div class="head">
            <h2 class="h2">Our Process</h2>

          </div>
          <div class="timeline">
            <div class="step"><b>1. Discover</b>Infra & app discovery, risk & cost baselines</div>
            <div class="step"><b>2. Design</b>HA/DR blueprints, security guardrails, success metrics</div>
            <div class="step"><b>3. Deliver</b>Build, migrate, integrate; cutovers with rollback plans</div>
            <div class="step"><b>4. Operate</b>Runbooks, SLAs, monitoring & optimization (FinOps/SRE)</div>
          </div>
        </div>
      </section>

      <!-- Fid Start -->
      <section class="section-xl">
        <div class="container">
          <div class="row">
            <div class="col-md-4 fid-two-col_1">
              <div class="pbmit-subheading">
                <h4 class="pbmit-subtitle">Why Techcentrics</h4>
              </div>
            </div>

            <div class="col-md-8 fid-two-col_2">
              <div class="row">
                <div class="col-md-7">
                  <div class="pbmit-heading-subheading animation-style2">
                    <h2 class="pbmit-title">Outcomes You Can Measure</h2>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="fid-two_desc">
                    IBM Gold Partner expertise across AIX/LPAR, Power & Storage — plus SPSS and Tanflow IAM.
                    We integrate compute, network, cloud, and security with governed delivery and ROI.
                  </div>
                </div>
              </div>

              <div class="fid-two_main">
                <div class="row">
                  <!-- Projects Delivered -->
                  <div class="pbminfotech-ele-fid-style-2 col-md-6">
                    <div class="pbmit-fld-contents">
                      <div class="pbmit-fld-wrap">
                        <div class="pbmit-title-wrap">
                          <span class="pbmit-fid-number"><span>01.</span></span>
                          <div class="pbmit-fid-title">Projects Delivered</div>
                        </div>
                        <h4 class="pbmit-fid-inner">
                          <span class="pbmit-number-rotate numinate"
                            data-appear-animation="animateDigits" data-from="0" data-to="250" data-interval="5">250</span>
                          <span class="pbmit-fid"><span>+</span></span>
                        </h4>
                      </div>
                    </div>
                  </div>

                  <!-- Enterprise Customers -->
                  <div class="pbminfotech-ele-fid-style-2 col-md-6">
                    <div class="pbmit-fld-contents">
                      <div class="pbmit-fld-wrap">
                        <div class="pbmit-title-wrap">
                          <span class="pbmit-fid-number"><span>02.</span></span>
                          <div class="pbmit-fid-title">Enterprise Customers</div>
                        </div>
                        <h4 class="pbmit-fid-inner">
                          <span class="pbmit-number-rotate numinate"
                            data-appear-animation="animateDigits" data-from="0" data-to="70" data-interval="5">70</span>
                          <span class="pbmit-fid"><span>+</span></span>
                        </h4>
                      </div>
                    </div>
                  </div>

                  <!-- Technology Partnerships -->
                  <div class="pbminfotech-ele-fid-style-2 col-md-6">
                    <div class="pbmit-fld-contents">
                      <div class="pbmit-fld-wrap">
                        <div class="pbmit-title-wrap">
                          <span class="pbmit-fid-number"><span>03.</span></span>
                          <div class="pbmit-fid-title">Technology Partnerships</div>
                        </div>
                        <h4 class="pbmit-fid-inner">
                          <span class="pbmit-number-rotate numinate"
                            data-appear-animation="animateDigits" data-from="0" data-to="50" data-interval="5">50</span>
                          <span class="pbmit-fid"><span>+</span></span>
                        </h4>
                      </div>
                    </div>
                  </div>

                  <!-- Years of Collective Experience -->
                  <div class="pbminfotech-ele-fid-style-2 col-md-6">
                    <div class="pbmit-fld-contents">
                      <div class="pbmit-fld-wrap">
                        <div class="pbmit-title-wrap">
                          <span class="pbmit-fid-number"><span>04.</span></span>
                          <div class="pbmit-fid-title">Years of Collective Experience</div>
                        </div>
                        <h4 class="pbmit-fid-inner">
                          <span class="pbmit-number-rotate numinate"
                            data-appear-animation="animateDigits" data-from="0" data-to="100" data-interval="5">100</span>
                          <span class="pbmit-fid"><span>+</span></span>
                        </h4>
                      </div>
                    </div>
                  </div>

                </div><!-- /.row -->
              </div><!-- /.fid-two_main -->
            </div>
          </div>
        </div>
      </section>
      <!-- Fid End -->




    </div>

    <!-- Appoinment Start -->
    <section class="appoinment-three_bg pbmit-bg-color-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 col-xl-6">
            <div class="appoinment-three_img">
              <img src="images/homepage-3/contact-img.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-md-12 col-xl-6">
            <div class="pbmit-heading-subheading animation-style2">
              <h4 class="pbmit-subtitle">Become A Client</h4>
              <h2 class="pbmit-title">Ready to Get Started?</h2>
            </div>
            <form>
              <div class="row">
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Your Name*" name="your-name">
                </div>
                <div class="col-md-6">
                  <input type="email" class="form-control" placeholder="Your Email*" name="email-address">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Your Phone*" name="your-phone">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Subject" name="subject">
                </div>
                <div class="col-md-12">
                  <textarea name="message" cols="40" rows="10" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="col-md-12">
                  <button class="pbmit-btn">
                    <span>Submit Now</span>
                    <svg class="pbmit-svg-arrow" xmlns="http://www.w3.org/2000/svg" width="10" height="19" viewBox="0 0 19 19">
                      <line x1="1" y1="18" x2="17.8" y2="1.2"></line>
                      <line x1="1.2" y1="1" x2="18" y2="1"></line>
                      <line x1="18" y1="17.8" x2="18" y2="1"></line>
                    </svg>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Appoinment End -->

    <script>
      // Sticky subnav: highlight current section
      (function() {
        const nav = document.querySelectorAll('#tabs a');
        const ids = Array.from(nav).map(a => a.getAttribute('href'));
        const secs = ids.map(id => document.querySelector(id));
        const set = (hash) => nav.forEach(a => a.classList.toggle('active', a.getAttribute('href') === hash));
        const onScroll = () => {
          const top = window.scrollY + 120;
          for (let i = secs.length - 1; i >= 0; i--) {
            if (secs[i] && top >= secs[i].offsetTop) {
              set('#' + secs[i].id);
              break;
            }
          }
        };
        window.addEventListener('scroll', onScroll, {
          passive: true
        });
        nav.forEach(a => a.addEventListener('click', () => set(a.getAttribute('href'))));
        onScroll();
      })();
    </script>

  </div>

  <?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/common-footer.php'; ?>