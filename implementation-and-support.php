<?php include 'includes/common-header.php'; ?>

<div class="page-wrapper">
  <?php include 'includes/main-header.php'; ?>

  <div class="page-content">

    <style>
      /* ===== Implementation & Support — ultra refined & scoped ===== */
      :root {
        --ink: #0c2230;
        --ink-2: #163746;
        --muted: #5f7381;
        --line: #e6eef3;
        --bg: #f6fafc;
        --brand: #074da3;
        --brand-2: #0b6a85;
        --accent: #10b981;
        --warm: #ffb454;
      }

      .isx {
        font-feature-settings: "ss01" on, "ss02" on;
        line-height: 1.55;
      }

      .contain {
        max-width: 1240px;
        margin: 0 auto;
        padding: 0 22px;
      }

      .shadow-s {
        box-shadow: 0 8px 24px rgba(12, 26, 39, .06);
      }

      .shadow-m {
        box-shadow: 0 18px 48px rgba(12, 26, 39, .12);
      }

      .btn {
        border-radius: 999px;
        padding: 11px 18px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-weight: 600;
      }

      .btn-outline {
        border: 1px solid var(--line);
        background: #fff;
        color: var(--ink-2);
      }

      .btn-light {
        background: #fff;
        color: var(--brand);
      }

      .btn svg {
        width: 16px;
        height: 16px
      }

      /* micro separators */
      .grad-line {
        height: 2px;
        background: linear-gradient(90deg, transparent, rgba(16, 185, 129, .45), transparent);
        border-radius: 2px;
      }

      /* HERO */
      .hero {
        position: relative;
        background:
          radial-gradient(1200px 420px at 60% -40%, rgba(15, 75, 95, .08), transparent 70%),
          radial-gradient(900px 320px at -10% 0%, rgba(11, 106, 133, .06), transparent 70%),
          #ffffff;
        border-bottom: 1px solid var(--line);
        overflow: hidden;
      }

      .hero-grid {
        position: relative;
        z-index: 1;
        display: grid;
        gap: 32px;
        grid-template-columns: 1fr;
        padding: 92px 0 56px;
      }

      @media(min-width:992px) {
        .hero-grid {
          grid-template-columns: 1.05fr .95fr;
        }
      }

      .kicker {
        letter-spacing: .18em;
        text-transform: uppercase;
        color: #7f95a3;
        font-size: 12px;
      }

      .hero-title {
        font-size: clamp(36px, 5.2vw, 58px);
        letter-spacing: -.02em;
        color: var(--ink);
        margin: 10px 0 8px;
      }

      .hero-sub {
        color: #45606f;
        font-size: clamp(15px, 2vw, 18px);
        max-width: 820px;
      }

      .chips {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-top: 14px;
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

      .hero-actions {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        margin-top: 16px;
      }

      /* HERO media (no stretching) */
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

      /* CAPABILITIES STRIP */
      .strip {
        background: #fff;
      }

      .caps {
        display: grid;
        gap: 12px;
        grid-template-columns: repeat(2, 1fr);
        margin: 14px 0 28px;
      }

      @media(min-width:768px) {
        .caps {
          grid-template-columns: repeat(4, 1fr);
        }
      }

      .cap {
        border: 1px solid var(--line);
        border-radius: 16px;
        padding: 16px 14px;
        background: linear-gradient(180deg, #fff, rgba(255, 255, 255, .94));
        display: flex;
        gap: 12px;
        align-items: flex-start;
      }

      .cap .dot {
        width: 18px;
        height: 18px;
        border-radius: 6px;
        background: #10b98133;
        box-shadow: inset 0 0 0 2px #10b981;
      }

      .cap b {
        font-size: 16px;
        color: var(--ink);
        display: block;
      }

      .cap small {
        color: var(--muted);
        display: block;
        margin-top: 2px;
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
        outline: 2px solid #84d8ff;
        outline-offset: 2px;
      }

      /* Sections */
      .sec {
        padding: 76px 0;
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
          grid-template-columns: .88fr 1.12fr;
        }
      }

      /* Body & lists */
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
        padding-left: 28px;
        color: #2f4b58;
      }

      .checks li:before {
        content: "";
        position: absolute;
        left: 0;
        top: 4px;
        width: 18px;
        height: 18px;
        border-radius: 6px;
        background: #10b98133;
        box-shadow: inset 0 0 0 2px #10b981;
      }

      .checks li:after {
        content: "✓";
        position: absolute;
        left: 4px;
        top: 1px;
        color: #0e8f60;
        font-weight: 800;
        font-size: 13px;
      }

      /* Logos */
      .logos {
        display: grid;
        gap: 12px;
        grid-template-columns: repeat(3, 1fr);
        padding: 14px 0 0;
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
      }

      /* CTA */
      .cta {
        background: linear-gradient(135deg, var(--brand), var(--brand-2));
        color: #fff;
        padding: 42px 0;
        border-top: 1px solid #0a3a49;
      }

      /* Anchor offset for sticky nav */
      #infra,
      #storage,
      #privatecloud,
      #p2v,
      #utility,
      #support {
        scroll-margin-top: 96px;
      }

      @media (prefers-reduced-motion: reduce) {

        .logo,
        .tabs a {
          transition: none !important;
        }
      }
    </style>

    <div class="isx">

      <!-- HERO -->
      <section class="hero" id="top">
        <div class="contain">
          <div class="hero-grid">
            <div>
              <div class="kicker">Implementation & Support</div>
              <h1 class="hero-title">Build • Migrate • Stabilize</h1>
              <p class="hero-sub">Infrastructure deployment across UNIX, Windows and Linux; storage & server migrations; private cloud builds; and physical-to-virtual transitions—delivered with production-ready runbooks, SLAs and seamless handover.</p>

              <div class="chips">
                <span class="chip"><?php /* icons */ ?><svg viewBox="0 0 24 24" fill="currentColor">
                    <path d="M3 6h18v12H3z" />
                  </svg> UNIX / Windows / Linux</span>
                <span class="chip"><svg viewBox="0 0 24 24" fill="currentColor">
                    <path d="M20 6l-8 6-8-6" />
                  </svg> Storage & Server Migration</span>
                <span class="chip"><svg viewBox="0 0 24 24" fill="currentColor">
                    <path d="M4 7h16v10H4z" />
                  </svg> Private Cloud</span>
                <span class="chip"><svg viewBox="0 0 24 24" fill="currentColor">
                    <path d="M7 7h10v10H7z" />
                  </svg> Physical → Virtual (P2V)</span>
              </div>

              <div class="hero-actions">
                <a href="/contact.php" class="btn btn-outline">
                  <svg viewBox="0 0 24 24" fill="currentColor">
                    <path d="M21 8v8a2 2 0 0 1-2 2H5l-2 2V6a2 2 0 0 1 2-2h8" />
                  </svg>
                  Talk to Delivery Lead
                </a>
                <a href="#support" class="btn btn-light">
                  <svg viewBox="0 0 24 24" fill="currentColor">
                    <path d="M3 12h18M12 3v18" />
                  </svg>
                  View Support Model
                </a>
              </div>
            </div>

            <figure class="media media--hero shadow-m">
              <img loading="lazy" alt="Engineers deploying infrastructure"
                src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1600&q=70">
              <figcaption class="credit">Image: <a href="https://unsplash.com" target="_blank" rel="noopener">Unsplash</a></figcaption>
            </figure>
          </div>
        </div>
        <div class="grad-line"></div>
      </section>

      <!-- CAPABILITIES STRIP -->
      <section class="strip">
        <div class="contain">
          <div class="caps">
            <div class="cap"><span class="dot"></span>
              <div><b>250+ Deployments</b><small>Servers, clusters & networks</small></div>
            </div>
            <div class="cap"><span class="dot"></span>
              <div><b>70+ Enterprises</b><small>SLA-backed operations</small></div>
            </div>
            <div class="cap"><span class="dot"></span>
              <div><b>50+ Tech Partners</b><small>OEM & Open Source</small></div>
            </div>
            <div class="cap"><span class="dot"></span>
              <div><b>100+ Person-Years</b><small>Implementation expertise</small></div>
            </div>
          </div>
        </div>
        <div class="grad-line"></div>
      </section>

      <!-- SUBNAV -->
      <nav class="subnav" aria-label="Section navigation">
        <div class="contain">
          <div class="tabs" id="isTabs">
            <a href="#infra" class="active">Infrastructure Deployment</a>
            <a href="#storage">Storage & Server Migration</a>
            <a href="#privatecloud">Private Cloud & Modernization</a>
            <a href="#p2v">Physical → Virtual</a>
            <a href="#utility">Utility Expertise</a>
            <a href="#support">Support & Governance</a>
          </div>
        </div>
      </nav>

      <!-- INFRASTRUCTURE -->
      <section class="sec" id="infra">
        <div class="contain">
          <div class="head">
            <h2 class="h2">Infrastructure Deployment for UNIX, Windows & Linux</h2>

          </div>
          <div class="split">
            <div>
              <p class="para">Turn-key provisioning of compute, storage, and network stacks for AIX/UNIX, Windows Server, and Enterprise Linux. We standardize images, baseline security, and deliver runbooks for day-2 operations.</p>
              <ul class="checks">
                <li>OS builds, hardening baselines & patch strategy</li>
                <li>Directory join, identity, RBAC & MFA integration</li>
                <li>HA clustering & load balancing patterns</li>
                <li>Monitoring, logging & backups (Veeam / Spectrum Protect)</li>
                <li>Handover: SOPs, runbooks & knowledge transfer</li>
              </ul>
              <div class="logos">
                <div class="logo"><img src="https://upload.wikimedia.org/wikipedia/commons/5/51/IBM_logo.svg" alt="IBM AIX"></div>
                <div class="logo"><img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" alt="Microsoft"></div>
                <div class="logo"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Red_Hat_Logo_2019.svg/1200px-Red_Hat_Logo_2019.svg.png" alt="Red Hat"></div>
                <div class="logo"><img src="data:image/jpeg;base64,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" alt="SUSE"></div>
                <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRK7TXoe941tgoisoLFu6sMgCvMPuFE3F-nTQ&s" alt="VMware"></div>
                <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0KWcIISysoKOnecfEzsK1ohELubZALz3ECw&s" alt="Veeam"></div>
              </div>
            </div>

            <figure class="media media--section shadow-m">
              <img loading="lazy" alt="Racks and bare-metal provisioning"
                src="https://i.pinimg.com/1200x/53/75/08/5375082f5c4787caa60715ed0e42faa8.jpg">
              <figcaption class="credit">Image: <a href="https://unsplash.com" target="_blank" rel="noopener">Unsplash</a></figcaption>
            </figure>
          </div>
        </div>
      </section>

      <!-- STORAGE & SERVER MIGRATION -->

      <section class="sec" id="privatecloud">
        <div class="contain">
          <div class="head">
            <h2 class="h2">Storage & Server Migration (Proprietary & Open-Source Tools)</h2>

          </div>
          <div class="split">
            <div>
              <p class="para">From block/file/object storage to compute re-platforming, we execute migrations using OEM and open-source tooling—rehearsal cutovers included.</p>
              <ul class="checks">
                <li>Cluster design, storage fabrics & software-defined networking</li>
                <li>Template catalog, IaC automation & golden images</li>
                <li>Backup/DR (Spectrum Protect / Veeam) & recovery drills</li>
                <li>FinOps baselines & utilization dashboards</li>
                <li>Migration waves with rollback & comms plan</li>
              </ul>
              <div class="logos">
                <div class="logo"><img src="https://upload.wikimedia.org/wikipedia/commons/5/51/IBM_logo.svg" alt="IBM Storage"></div>
                <div class="logo"><img src="https://www.netapp.com/media/na_logo_black_rgb_reg-mark_tcm19-21014.jpg" alt="NetApp"></div>
                <div class="logo"><img src="https://upload.wikimedia.org/wikipedia/commons/4/48/Dell_Logo.svg" alt="Dell EMC"></div>
              </div>
            </div>

            <figure class="media media--section shadow-m">
              <img loading="lazy" alt="Data migration pipelines"
                src="https://i.pinimg.com/1200x/a9/b7/e6/a9b7e636b07c3b34c5c95482e6d8381d.jpg">
              <figcaption class="credit">Image: <a href="https://unsplash.com" target="_blank" rel="noopener">Unsplash</a></figcaption>
            </figure>
          </div>
        </div>
      </section>




      <!-- PRIVATE CLOUD -->
      <section class="sec" id="privatecloud">
        <div class="contain">
          <div class="head">
            <h2 class="h2">Private Cloud Infrastructure & Modernization</h2>

          </div>
          <div class="split">
            <div>
              <p class="para">We design and deploy secure private cloud platforms using VMware, Red Hat, or IBM stacks—landing zones, automation, self-service, and policy guardrails included.</p>
              <ul class="checks">
                <li>Cluster design, storage fabrics & software-defined networking</li>
                <li>Template catalog, IaC automation & golden images</li>
                <li>Backup/DR (Spectrum Protect / Veeam) & recovery drills</li>
                <li>FinOps baselines & utilization dashboards</li>
                <li>Migration waves with rollback & comms plan</li>
              </ul>
              <div class="logos">
                <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRK7TXoe941tgoisoLFu6sMgCvMPuFE3F-nTQ&s" alt="VMware"></div>
                <div class="logo"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Red_Hat_Logo_2019.svg/1200px-Red_Hat_Logo_2019.svg.png" alt="Red Hat"></div>
                <div class="logo"><img src="https://upload.wikimedia.org/wikipedia/commons/5/51/IBM_logo.svg" alt="IBM"></div>
              </div>
            </div>

            <figure class="media media--section shadow-m">
              <img loading="lazy" alt="Private cloud cluster design"
                src="https://i.pinimg.com/736x/8a/a2/55/8aa2551a396208fd5838aea856ce6a58.jpg">
              <figcaption class="credit">Image: <a href="https://unsplash.com" target="_blank" rel="noopener">Unsplash</a></figcaption>
            </figure>
          </div>
        </div>
      </section>

      <!-- P2V -->

      <section class="sec" id="utility">
        <div class="contain">
          <div class="head">
            <h2 class="h2">Physical → Virtual Migration (P2V)</h2>

          </div>
          <div class="split">
            <div>
              <p class="para">We transition physical workloads to virtual platforms using both proprietary and open-source tooling, ensuring application integrity and performance parity.</p>
              <ul class="checks">
                <li>Inventory & compatibility checks, sizing & rightsizing</li>
                <li>Tooling: VMware Converter, image-based backups, rsync/DRBD</li>
                <li>Network & storage re-mapping, driver/agent alignment</li>
                <li>Cutover rehearsal with rollback checkpoints</li>
                <li>Post-cutover tuning & acceptance sign-off</li>
              </ul>
            </div>

            <figure class="media media--section shadow-m">
              <img loading="lazy" alt="P2V migration execution"
                src="https://i.pinimg.com/1200x/94/51/1d/94511d7cae3947b970a2f71d93e65c65.jpg">
              <figcaption class="credit">Image: <a href="https://unsplash.com" target="_blank" rel="noopener">Unsplash</a></figcaption>
            </figure>
          </div>
        </div>
      </section>

      <!-- UTILITY EXPERTISE -->
      <section class="sec" id="utility">
        <div class="contain">
          <div class="head">
            <h2 class="h2">Utility Domain Expertise</h2>

          </div>
          <div class="split">
            <div>
              <p class="para">Drawing from programs highlighted in your deck, we’ve executed turnkey projects for state energy utilities—spanning IAM, DAM, DC migrations and compliance-ready delivery.</p>
              <ul class="checks">
                <li>Control-room & OT/IT segregation patterns</li>
                <li>Identity governance for workforce & contractors</li>
                <li>Disaster-recovery runbooks & periodic DR drills</li>
                <li>Regulatory reporting, evidence packs & audits</li>
              </ul>
            </div>

            <figure class="media media--section shadow-m">
              <img loading="lazy" alt="Utility operations & governance"
                src="https://i.pinimg.com/736x/cd/3c/42/cd3c42a12bd7c1a3e64dd3d332df7982.jpg">
              <figcaption class="credit">Image: <a href="https://unsplash.com" target="_blank" rel="noopener">Unsplash</a></figcaption>
            </figure>
          </div>
        </div>
      </section>

      <!-- SUPPORT & GOVERNANCE -->
      <section class="sec alt" id="support">
        <div class="contain">
          <div class="head">
            <h2 class="h2">Support & Project Governance</h2>

          </div>
          <div class="split">
            <div>
              <p class="para">We provide complete planning, design, deployment and ongoing support with a holistic governance model—change control to stakeholder reporting, all evidence-driven.</p>
              <ul class="checks">
                <li>L1–L3 support with incident, request & problem workflows</li>
                <li>Release cadence, CAB, RACI & runbook ownership</li>
                <li>Observability: SLI/SLOs, alerts & monthly service reviews</li>
                <li>Documentation, knowledge transfer & support transition</li>
              </ul>
            </div>

            <figure class="media media--section shadow-m">
              <img loading="lazy" alt="Operations center & service governance"
                src="https://i.pinimg.com/736x/cc/29/8c/cc298cdcab287b0c76befff4b84066bd.jpg">
              <figcaption class="credit">Image: <a href="https://unsplash.com" target="_blank" rel="noopener">Unsplash</a></figcaption>
            </figure>
          </div>
        </div>
      </section>

      <!-- CTA -->
      <section class="cta">
        <div class="contain">
          <div class="head" style="align-items:center;">
            <div>
              <h3 class="h2" style="color:#fff; margin:0;">Ready to plan your Implementation & Support engagement?</h3>
              <p class="sub" style="color:rgba(255,255,255,.92); margin-top:6px;">Share your current stack and target state—we’ll propose a phased migration and support model with clear SLAs.</p>
            </div>
            <a href="javascript:void(0);"  data-bs-toggle="modal"  data-bs-target="#staticBackdrop" class="btn btn-light">Request a Callback</a>
          </div>
        </div>
      </section>

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
            <form method="post" action="mail.php">
              <div class="row">
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Your Name*" name="name">
                </div>
                <div class="col-md-6">
                  <input type="email" class="form-control" placeholder="Your Email*" name="email">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Your Phone*" name="phone">
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
      // IntersectionObserver for active tabs (stable + smooth)
      (function() {
        const links = Array.from(document.querySelectorAll('#isTabs a'));
        const sections = links.map(a => document.querySelector(a.getAttribute('href')));
        const setActive = (hash) => links.forEach(a => a.classList.toggle('active', a.getAttribute('href') === hash));

        const io = new IntersectionObserver((entries) => {
          const on = entries.filter(e => e.isIntersecting).sort((a, b) => a.boundingClientRect.top - b.boundingClientRect.top)[0];
          if (on) setActive('#' + on.target.id);
        }, {
          rootMargin: "-50% 0px -40% 0px",
          threshold: [0, 0.25, 0.5, 1]
        });

        sections.forEach(s => s && io.observe(s));
        links.forEach(a => a.addEventListener('click', () => setActive(a.getAttribute('href'))));
      })();
    </script>

  </div>

  <?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/common-footer.php'; ?>