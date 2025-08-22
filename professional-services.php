<?php include 'includes/common-header.php'; ?>

<div class="page-wrapper">
  <?php include 'includes/main-header.php'; ?>

  <div class="page-content">

    <style>
      /* ===== Professional Services — ultra-refined & scoped ===== */
      :root {
        --ink: #0d2230;
        --muted: #5e7482;
        --line: #e7edf2;
        --bg: #f7fafc;
        --brand: #074da3;
        --brand-2: #0b6a85;
        --accent: #10b981;
        --ink-2: #173646;
      }

      .psx {
        font-feature-settings: "ss01" on, "ss02" on;
        line-height: 1.55;
      }

      .contain {
        max-width: 1200px;
        margin: 0 auto;
        padding: 22px;
      }

      .shadow-s {
        box-shadow: 0 8px 24px rgba(12, 26, 39, .06);
      }

      .shadow-m {
        box-shadow: 0 16px 40px rgba(12, 26, 39, .10);
      }

      .pbmit-btn {
        border-radius: 999px;
        padding: 11px 18px;
      }

      .btn-outline {
        border: 1px solid var(--line);
        background: #fff;
      }

      .btn-light {
        background: #fff;
        color: var(--brand);
      }

      /* Decorative line */
      .grad-line {
        height: 2px;
        background: linear-gradient(90deg, transparent, rgba(16, 185, 129, .45), transparent);
        border-radius: 2px;
      }

      /* Hero */
      .hero {
        position: relative;
        background:
          radial-gradient(1200px 380px at 50% -40%, rgba(15, 75, 95, .06), transparent 70%),
          #ffffff;
        border-bottom: 1px solid var(--line);
        overflow: hidden;
      }

      .hero-grid {
        position: relative;
        z-index: 1;
        display: grid;
        gap: 30px;
        grid-template-columns: 1fr;
        padding: 90px 0 52px;
      }

      @media(min-width:992px) {
        .hero-grid {
          grid-template-columns: 1.05fr .95fr;
        }
      }

      .kicker {
        letter-spacing: .18em;
        text-transform: uppercase;
        color: #7e93a1;
        font-size: 12px;
      }

      .hero-title {

        letter-spacing: -.02em;
        color: var(--ink);
        margin: 10px 0 10px;
      }

      .hero-sub {
        color: #45606f;
        font-size: clamp(15px, 2vw, 18px);
        max-width: 780px;
        margin-bottom: 16px;
      }

      .hero-actions {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        margin-top: 12px;
      }

      /* Chips */
      .chips {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-top: 12px;
      }

      .chip {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-weight: 600;
        font-size: 12px;
        padding: 8px 13px;
        border-radius: 999px;
        border: 1px solid var(--line);
        background: #fff;
        color: var(--ink-2);
      }

      .chip svg {
        width: 16px;
        height: 16px;
        color: var(--brand);
      }

      /* Media wrappers (no stretching) */
      .media {
        border: 1px solid var(--line);
        border-radius: 18px;
        overflow: hidden;
        background: #fff;
      }

      .media--hero {
        aspect-ratio: 16 / 9;
        max-height: 420px;
      }

      .media--section {
        aspect-ratio: 16 / 10;
        max-height: 380px;
      }

      .media img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
      }

      .credit {
        font-size: 11px;
        color: #6e8693;
        background: #f6fbfe;
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

      @media (max-width: 575.98px) {

        .media--hero,
        .media--section {
          aspect-ratio: 4/3;
          max-height: 320px;
        }
      }

      /* KPI + trust logos */
      .strip {
        background: #fff;
      }

      .kpis {
        display: grid;
        gap: 12px;
        grid-template-columns: repeat(2, 1fr);
        margin: 12px 0 26px;
      }

      @media(min-width:768px) {
        .kpis {
          grid-template-columns: repeat(4, 1fr);
        }
      }

      .kpi {
        border: 1px solid var(--line);
        border-radius: 16px;
        padding: 16px 14px;
        background: linear-gradient(180deg, #fff, rgba(255, 255, 255, .94));
        display: flex;
        gap: 12px;
        align-items: center;
      }

      .kpi .dot {
        width: 18px;
        height: 18px;
        border-radius: 6px;
        background: #10b98133;
        box-shadow: inset 0 0 0 2px #10b981;
      }

      .kpi b {
        font-size: 18px;
        color: var(--ink);
        display: block;
      }

      .kpi small {
        color: var(--muted);
        display: block;
        margin-top: 2px;
      }

      .logos {
        display: grid;
        gap: 12px;
        grid-template-columns: repeat(3, 1fr);
        padding: 18px 0;
      }

      @media(min-width:768px) {
        .logos {
          grid-template-columns: repeat(6, 1fr);
        }
      }

      .logo {
        height: 56px;
        border: 1px solid var(--line);
        border-radius: 12px;
        background: linear-gradient(180deg, #fff, rgba(255, 255, 255, .92));
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 8px;
        transition: transform .2s ease, box-shadow .2s ease;
      }

      .logo:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 22px rgba(12, 26, 39, .08);
      }

      .logo img {
        max-height: 28px;
        width: auto;
        object-fit: contain;
        filter: saturate(1.05);
      }

      /* Sticky subnav */
      .subnav {
        position: sticky;
        top: 0;
        z-index: 8;
        background: rgba(255, 255, 255, .97);
        backdrop-filter: saturate(1.1) blur(6px);
        border-bottom: 1px solid var(--line);
      }

      .tabs {
        display: flex;
        gap: 10px;
        overflow: auto;
        padding: 12px 0;
        scrollbar-width: none;
      }

      .tabs::-webkit-scrollbar {
        display: none;
      }

      .tabs a {
        white-space: nowrap;
        font-weight: 600;
        color: #476170;
        border: 1px solid var(--line);
        padding: 9px 13px;
        border-radius: 10px;
        background: #fff;
        text-decoration: none;
        transition: background .2s ease, color .2s ease, border-color .2s ease;
      }

      .tabs a.active {
        background: var(--brand);
        color: #fff;
        border-color: transparent;
      }

      .tabs a:focus-visible {
        outline: 2px solid #7bd1ff;
        outline-offset: 2px;
      }

      /* Sections */
      .sec {
        padding: 30px 0;
        background: #fff;
      }

      .sec.alt {
        background: var(--bg);
      }

      .head {
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        gap: 14px;
        margin-bottom: 24px;
        flex-wrap: wrap;
      }

      .h2 {
        margin: 0;
        color: var(--ink);
        font-size: clamp(24px, 3.6vw, 34px);
        letter-spacing: -.01em;
      }

      .sub {
        margin: 0;
        color: var(--muted);
      }

      .split {
        display: grid;
        gap: 26px;
        grid-template-columns: 1fr;
      }

      @media(min-width:992px) {
        .split {
          grid-template-columns: 1.15fr .85fr;
        }

        .split.rev {
          grid-template-columns: .85fr 1.15fr;
        }
      }

      /* Body text & lists */
      .para {
        color: #3c5663;
        font-size: 16px;
      }

      .checks {
        display: grid;
        gap: 10px;
        margin: 16px 0 0;
      }

      .checks li {
        list-style: none;
        position: relative;
        padding-left: 26px;
        color: #2f4b58;
      }

      .checks li:before {
        content: "";
        position: absolute;
        left: 0;
        top: 4px;
        width: 16px;
        height: 16px;
        border-radius: 6px;
        background: #10b98133;
        box-shadow: inset 0 0 0 2px #10b981;
      }

      .checks li:after {
        content: "✓";
        position: absolute;
        left: 3px;
        top: 1px;
        color: #0e8f60;
        font-weight: 800;
        font-size: 12px;
      }

      /* Timeline */
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
        background: linear-gradient(180deg, #fff, rgba(255, 255, 255, .9));
        border-radius: 12px;
        padding: 14px;
      }

      .step b {
        display: block;
        color: var(--brand-2);
        margin-bottom: 4px;
      }

      /* CTA */
      .cta {
        background: linear-gradient(135deg, var(--brand), var(--brand-2));
        color: #fff;
        padding: 40px 0;
        border-top: 1px solid #0a3a49;
      }

      /* Anchor offset for sticky subnav */
      #erp,
      #migrations,
      #collab,
      #adsec,
      #vapt,
      #governance {
        scroll-margin-top: 96px;
      }

      /* Motion safety */
      @media (prefers-reduced-motion: reduce) {

        .logo,
        .tabs a {
          transition: none !important;
        }
      }
    </style>

    <div class="psx">

      <!-- HERO -->
      <section class="hero" id="top">
        <div class="contain">
          <div class="hero-grid">
            <div>
              <div class="kicker">Professional Services</div>
              <h1 class="hero-title">Plan • Implement • Govern</h1>
              <p class="hero-sub">End-to-end ERP implementations, full-stack migrations, secure collaboration, identity & security services — delivered with a governance model that de-risks timelines and locks in outcomes.</p>

              <div class="chips">
                <span class="chip"><?php /* icon */ ?><svg viewBox="0 0 24 24" fill="currentColor">
                    <path d="M20 7h-8l-2-2H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h16a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1z" />
                  </svg> ERP: SAP & Oracle</span>
                <span class="chip"><svg viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 3l7 7-7 7-7-7 7-7z" />
                  </svg> App & DB Migrations</span>
                <span class="chip"><svg viewBox="0 0 24 24" fill="currentColor">
                    <path d="M4 4h16v4H4zM4 10h10v4H4zM4 16h16v4H4z" />
                  </svg> MS / HCL / Zimbra</span>
                <span class="chip"><svg viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2a5 5 0 0 1 5 5v3h1a2 2 0 0 1 2 2v8H4v-8a2 2 0 0 1 2-2h1V7a5 5 0 0 1 5-5z" />
                  </svg> AD • Endpoint • Mail Sec</span>
                <span class="chip"><svg viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2l9 5-9 5-9-5 9-5zm9 9l-9 5-9-5v6l9 5 9-5v-6z" />
                  </svg> VAPT & IAM</span>
              </div>

              <div class="hero-actions">
                <a href="javascript:void(0);"  data-bs-toggle="modal"  data-bs-target="#staticBackdrop" class="pbmit-btn pbmit-btn-light">Talk to an Expert</a>
                <a href="javascript:void(0);"  data-bs-toggle="modal"  data-bs-target="#staticBackdrop" class="pbmit-btn pbmit-btn-light">See How We Deliver</a>
              </div>
            </div>

            <figure class="media media--hero shadow-m">
              <img loading="lazy" alt="Consulting team planning on a whiteboard"
                src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&w=1600&q=70">
              <figcaption class="credit">Image: <a href="https://unsplash.com" target="_blank" rel="noopener">Unsplash</a></figcaption>
            </figure>
          </div>
        </div>
        <div class="grad-line"></div>
      </section>

      <!-- KPI + TRUST -->
      <section class="strip">
        <div class="contain">
          <div class="kpis">
            <div class="kpi"><span class="dot"></span>
              <div><b>250+ Projects</b><small>Delivered across industries</small></div>
            </div>
            <div class="kpi"><span class="dot"></span>
              <div><b>70+ Enterprises</b><small>Served with SLAs</small></div>
            </div>
            <div class="kpi"><span class="dot"></span>
              <div><b>50+ Partners</b><small>OEM & ISV ecosystem</small></div>
            </div>
            <div class="kpi"><span class="dot"></span>
              <div><b>100+ Years</b><small>Collective expertise</small></div>
            </div>
          </div>
          <div class="logos">
            <a class="logo shadow-s" href="https://www.sap.com" target="_blank" rel="noopener"><img src="https://upload.wikimedia.org/wikipedia/commons/5/59/SAP_2011_logo.svg" alt="SAP"></a>
            <a class="logo shadow-s" href="https://www.oracle.com/applications/erp/" target="_blank" rel="noopener"><img src="https://upload.wikimedia.org/wikipedia/commons/5/50/Oracle_logo.svg" alt="Oracle"></a>
            <a class="logo shadow-s" href="https://www.microsoft.com/microsoft-365" target="_blank" rel="noopener"><img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" alt="Microsoft"></a>
            <a class="logo shadow-s" href="https://www.hcltechsw.com" target="_blank" rel="noopener"><img src="https://www.hcl-software.com/wps/wcm/connect/a185b95a-12cc-4252-9140-2b0ba40af651/hcl-software-logo.svg?MOD=AJPERES&CACHEID=ROOTWORKSPACE-a185b95a-12cc-4252-9140-2b0ba40af651-pvKajzP" alt="HCL Software"></a>
            <a class="logo shadow-s" href="https://www.zimbra.com" target="_blank" rel="noopener"><img src="https://www.zimbra.com/wp-content/uploads/2023/07/logo.png" alt="Zimbra"></a>
            <div class="logo" aria-hidden="true"><img src="https://upload.wikimedia.org/wikipedia/commons/5/51/IBM_logo.svg" alt="IBM"></div>
          </div>
        </div>
        <div class="grad-line"></div>
      </section>

      <!-- Sticky Subnav -->
      <nav class="subnav" aria-label="Section navigation">
        <div class="contain">
          <div class="tabs" id="psTabs">
            <a href="#erp" class="active">ERP (SAP/Oracle)</a>
            <a href="#migrations">App & DB Migrations</a>
            <a href="#collab">Messaging & Collaboration</a>
            <a href="#adsec">Active Directory & Security</a>
            <a href="#vapt">VAPT & IAM</a>
            <a href="#governance">Governance & Delivery</a>
          </div>
        </div>
      </nav>

      <!-- ERP -->
      <section class="sec" id="erp">
        <div class="contain">
          <div class="head">
            <h2 class="h2">End-to-End SAP & Oracle ERP Implementation</h2>
            <p class="sub">Focused on Oracle / SAP</p>
          </div>
          <div class="split">
            <div>
              <p class="para">We deliver greenfield and brownfield ERP programs with tight process alignment, data readiness, and disciplined cutovers — from blueprint to go-live & hypercare.</p>
              <ul class="checks">
                <li>Process discovery, fit-gap & solution design</li>
                <li>Data migration strategy, cleansing & reconciliation</li>
                <li>Integrations (APIs/ESB), customizations & reporting</li>
                <li>Performance hardening, security & compliance readiness</li>
                <li>Cutover planning, go-live support & hypercare</li>
              </ul>
              <div class="logos" style="padding:10px 0 0">
                <a class="logo shadow-s" href="https://www.sap.com" target="_blank" rel="noopener"><img src="https://upload.wikimedia.org/wikipedia/commons/5/59/SAP_2011_logo.svg" alt="SAP"></a>
                <a class="logo shadow-s" href="https://www.oracle.com/applications/erp/" target="_blank" rel="noopener"><img src="https://upload.wikimedia.org/wikipedia/commons/5/50/Oracle_logo.svg" alt="Oracle"></a>
              </div>
            </div>

            <figure class="media media--section shadow-m">
              <img loading="lazy" alt="ERP workshop with process mapping"
                src=" https://i.pinimg.com/1200x/32/c8/21/32c82184200d608a0aac966f5b72f4d3.jpg">
              <figcaption class="credit">Image: <a href="https://unsplash.com" target="_blank" rel="noopener">Unsplash</a></figcaption>
            </figure>
          </div>
        </div>
      </section>




      <section class="sec" id="collab">
        <div class="contain">
          <div class="head">
            <h2 class="h2">Application & Database Migrations</h2>

          </div>
          <div class="split">
            <figure class="media media--section shadow-m">
              <img loading="lazy" alt="Team collaborating across tools"
                src="https://i.pinimg.com/736x/54/59/ab/5459ab4675eab6ec7664914c31e9d58a.jpg">
              <figcaption class="credit">Image: <a href="https://unsplash.com" target="_blank" rel="noopener">Unsplash</a></figcaption>
            </figure>
            <div>
              <p class="para">We undertake complete app/DB migrations — discovery → validation — with rollback plans, cutover playbooks, and audit-ready evidence</p>
              <ul class="checks">
                <li>AS-IS discovery, dependency mapping & risk register</li>
                <li>DB upgrades & cross-platform moves (on-prem ↔ cloud)</li>
                <li>Zero/low-downtime methods, replication & log shipping</li>
                <li>Functional, performance & security validation</li>
                <li>Runbooks & knowledge transfer to ops</li>
              </ul>
              <div class="logos" style="padding:10px 0 0">
                <a class="logo shadow-s" href="https://www.microsoft.com/microsoft-365" target="_blank" rel="noopener"><img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" alt="Microsoft 365"></a>
                <a class="logo shadow-s" href="https://www.hcltechsw.com" target="_blank" rel="noopener"><img src="https://www.hcl-software.com/wps/wcm/connect/a185b95a-12cc-4252-9140-2b0ba40af651/hcl-software-logo.svg?MOD=AJPERES&CACHEID=ROOTWORKSPACE-a185b95a-12cc-4252-9140-2b0ba40af651-pvKajzP" alt="HCL Software"></a>
                <a class="logo shadow-s" href="https://www.zimbra.com" target="_blank" rel="noopener"><img src="https://www.zimbra.com/wp-content/uploads/2023/07/logo.png" alt="Zimbra"></a>
              </div>
            </div>



          </div>
        </div>
      </section>


      <!-- Collaboration -->
      <section class="sec" id="collab">
        <div class="contain">
          <div class="head">
            <h2 class="h2">Customized Mailing, Messaging & Automation</h2>

          </div>
          <div class="split">
            <div>
              <p class="para">Secure, compliant collaboration platforms tailored to scale and governance — with automated provisioning and retention controls.</p>
              <ul class="checks">
                <li>Microsoft 365 / Exchange, Teams, SharePoint deployments</li>
                <li>HCL Notes/Domino & Zimbra design, upgrades & coexistence</li>
                <li>Directory integration, SSO/MFA & automated onboarding</li>
                <li>Archival, eDiscovery, DLP/IRM & backup/restore</li>
              </ul>
              <div class="logos" style="padding:10px 0 0">
                <a class="logo shadow-s" href="https://www.microsoft.com/microsoft-365" target="_blank" rel="noopener"><img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" alt="Microsoft 365"></a>
                <a class="logo shadow-s" href="https://www.hcltechsw.com" target="_blank" rel="noopener"><img src="https://www.hcl-software.com/wps/wcm/connect/a185b95a-12cc-4252-9140-2b0ba40af651/hcl-software-logo.svg?MOD=AJPERES&CACHEID=ROOTWORKSPACE-a185b95a-12cc-4252-9140-2b0ba40af651-pvKajzP" alt="HCL Software"></a>
                <a class="logo shadow-s" href="https://www.zimbra.com" target="_blank" rel="noopener"><img src="https://www.zimbra.com/wp-content/uploads/2023/07/logo.png" alt="Zimbra"></a>
              </div>
            </div>

            <figure class="media media--section shadow-m">
              <img loading="lazy" alt="Team collaborating across tools"
                src="https://i.pinimg.com/1200x/eb/66/1c/eb661ca45e4d79b0876db1640112de0b.jpg">
              <figcaption class="credit">Image: <a href="https://unsplash.com" target="_blank" rel="noopener">Unsplash</a></figcaption>
            </figure>
          </div>
        </div>
      </section>

      <!-- AD & Security -->
      <section class="sec" id="vapt">
        <div class="contain">
          <div class="head">
            <h2 class="h2">Active Directory, Endpoint & Mail Security</h2>

          </div>
          <div class="split">
            <div>
              <p class="para">Harden AD/Azure AD, secure endpoints, and protect mail with layered defenses and continuous monitoring..</p>
              <ul class="checks">
                <li>AD domain design, consolidation, conditional access & MFA</li>
                <li>Endpoint security (EDR/XDR), patch compliance & posture</li>
                <li>Mail security: anti-phish/spoof, sandboxing, DKIM/DMARC</li>
                <li>Policy baselines, auditing & SIEM integration</li>
              </ul>
            </div>

            <figure class="media media--section shadow-m">
              <img loading="lazy" alt="Identity access and security review"
                src="https://i.pinimg.com/1200x/f3/73/f5/f373f5105337420ce06d74bae5ddee65.jpg">
              <figcaption class="credit">Image: <a href="https://unsplash.com" target="_blank" rel="noopener">Unsplash</a></figcaption>
            </figure>
          </div>
        </div>
      </section>

      <!-- VAPT & IAM -->
      <section class="sec" id="vapt">
        <div class="contain">
          <div class="head">
            <h2 class="h2">Security Assessment (VAPT) & Identity Access Management</h2>

          </div>
          <div class="split">
            <div>
              <p class="para">We perform vulnerability assessments and penetration testing with prioritized remediation, and implement IAM/PAM for least-privilege access and auditability.</p>
              <ul class="checks">
                <li>Scope, threat model & methodology (app / infra / cloud)</li>
                <li>Risk-based findings, remediation guidance & re-test</li>
                <li>IAM/PAM rollout (provisioning, RBAC/ABAC, approvals)</li>
                <li>Audit trails, certifications & compliance reporting</li>
              </ul>
            </div>

            <figure class="media media--section shadow-m">
              <img loading="lazy" alt="Identity access and security review"
                src="https://i.pinimg.com/736x/a4/92/36/a49236c47100f56228606d878cf47f50.jpg">
              <figcaption class="credit">Image: <a href="https://unsplash.com" target="_blank" rel="noopener">Unsplash</a></figcaption>
            </figure>
          </div>
        </div>
      </section>

      <!-- Project Planning Section -->
      <section class="project-planning">
        <div class="container">
          <h2 class="section-title">Complete Project Planning, Design, Deployment & Support</h2>
          <p class="section-subtitle">
            A holistic project governance approach from discovery to steady state.
            Our governance model aligns scope, risk, and delivery with clear roles, change control,
            and measurable outcomes.
          </p>

          <div class="steps-grid">
            <div class="step-box">
              <div class="step-icon">🔍</div>
              <h4>1. Discover</h4>
              <p>Requirements, success criteria, risks & baselines</p>
            </div>
            <div class="step-box">
              <div class="step-icon">🛠️</div>
              <h4>2. Design</h4>
              <p>Architecture, security guardrails & migration plan</p>
            </div>
            <div class="step-box">
              <div class="step-icon">🚀</div>
              <h4>3. Deliver</h4>
              <p>Build, test, cutover with rollback & communication plan</p>
            </div>
            <div class="step-box">
              <div class="step-icon">⚙️</div>
              <h4>4. Operate</h4>
              <p>Runbooks, SLAs, monitoring & continuous improvement</p>
            </div>
          </div>


        </div>
      </section>

      <style>
        .project-planning {
          background: #f9fbfc;
          padding: 60px 20px;
          text-align: center;
          font-family: "Segoe UI", sans-serif;
        }

        .section-title {
          font-size: 28px;
          font-weight: 700;
          color: #0d2b3e;
          margin-bottom: 10px;
        }

        .section-subtitle {
          max-width: 750px;
          margin: 0 auto 40px;
          font-size: 16px;
          color: #4a5b67;
        }

        .steps-grid {
          display: grid;
          grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
          gap: 25px;
          margin-bottom: 30px;
        }

        .step-box {
          background: #ffffff;
          border-radius: 10px;
          padding: 25px 20px;
          box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
          transition: transform 0.3s ease;
        }

        .step-box:hover {
          transform: translateY(-5px);
        }

        .step-icon {
          font-size: 32px;
          margin-bottom: 15px;
        }

        .step-box h4 {
          font-size: 18px;
          font-weight: 600;
          color: #074da3;
          margin-bottom: 8px;
        }

        .step-box p {
          font-size: 14px;
          color: #555;
        }

        .checklist {
          list-style: none;
          padding: 0;
          margin: 0;
        }

        .checklist li {
          font-size: 15px;
          margin: 8px 0;
          color: #2a3d4f;
        }
      </style>

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

    </div>

    <script>
      // IntersectionObserver for active tabs (smooth & accurate)
      (function() {
        const links = Array.from(document.querySelectorAll('#psTabs a'));
        const ids = links.map(a => a.getAttribute('href'));
        const sections = ids.map(id => document.querySelector(id));

        const setActive = (hash) => {
          links.forEach(a => a.classList.toggle('active', a.getAttribute('href') === hash));
        };

        const io = new IntersectionObserver((entries) => {
          // pick the entry nearest to the top and intersecting
          const on = entries
            .filter(e => e.isIntersecting)
            .sort((a, b) => a.boundingClientRect.top - b.boundingClientRect.top)[0];
          if (on) setActive('#' + on.target.id);
        }, {
          rootMargin: "-50% 0px -40% 0px",
          threshold: [0, 0.25, 0.5, 1]
        });

        sections.forEach(s => s && io.observe(s));
        // Also update on click
        links.forEach(a => a.addEventListener('click', () => setActive(a.getAttribute('href'))));
      })();
    </script>

  </div>

  <?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/common-footer.php'; ?>