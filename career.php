<?php include 'includes/common-header.php'; ?>

<div class="page-wrapper">
  <?php include 'includes/main-header.php'; ?>

  <div class="page-content">

    <style>
      :root{
        --ink:#1f2a37;
        --muted:#6b7785;
        --brand:#074da3;
        --line:#e9eef2;
        --card:#ffffff;
      }

      /* Page shell */
      .career-wrap{padding:32px 0 72px;}
      .career-header{
        padding:24px 0 8px; border-bottom:1px solid var(--line); margin-bottom:24px;
      }
      .career-title{
        font-size: clamp(24px, 3.6vw, 34px);
        line-height:1.2; margin:0 0 6px; color:var(--ink); font-weight:700;
      }
      .career-sub{ color:var(--muted); margin:0 0 12px; font-size:clamp(14px, 1.8vw, 16px); }
      .note-pill{
        display:inline-block; background:var(--brand); color:#fff; padding:8px 12px; border-radius:10px;
        font-weight:600; font-size:14px;
      }

      /* Form card */
      .form-card{
        max-width: 880px; margin: 24px auto 0;
        background:var(--card); border:1px solid var(--line); border-radius:16px;
        box-shadow:0 8px 24px rgba(10, 27, 40, .06);
      }
      .form-head{
        padding:16px 18px; border-bottom:1px solid var(--line); display:flex; align-items:center; gap:12px;
      }
      .form-head h2{
        margin:0; font-size:18px; color:var(--ink); font-weight:700;
      }
      .form-body{ padding:18px; }
      @media(min-width: 992px){ .form-body{ padding:24px; } }
      .form-help{ color:var(--muted); font-size:13px; margin:6px 0 0; }

      /* Inputs */
      .career-form .form-label{ font-weight:600; color:var(--ink); }
      .career-form .form-control,
      .career-form .form-select{
        border-radius:10px; border:1px solid #dfe6ec; padding:10px 12px;
      }
      .career-form .form-control:focus,
      .career-form .form-select:focus{
        border-color:var(--brand); box-shadow:0 0 0 3px rgba(15,75,95,.12);
      }

      /* Footer bar */
      .form-foot{ border-top:1px solid var(--line); padding:14px 18px; text-align:center; }
      .pbmit-btn{ border-radius:999px; padding:10px 18px; }
      .success-wrap{
        display:none; margin-top:10px; border:1px solid #cfe9d3; background:#ecf9ef; color:#1f6e2c;
        border-radius:12px; padding:10px 12px; font-size:14px;
      }

      /* Utility */
      .hp-field{ position:absolute; left:-5000px; width:1px; height:1px; overflow:hidden; }
    </style>

    <section class="career-wrap">
      <div class="container">
        <section class="careers-section">
  <div class="container">
    <h1>Careers at Techcentrics</h1>
    <p>Build secure, resilient, and scalable systems for leading enterprises.</p>
    <div class="note-btn">
      Job openings available only for the Gurgaon location
    </div>
  </div>
</section>

<style>
  .careers-section {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 80px 20px;
    background: #f8fbfd; /* optional background */
  }

  .careers-section h1 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 15px;
    color: #0f253e;
  }

  .careers-section p {
    font-size: 1.2rem;
    color: #6b7280;
    margin-bottom: 20px;
  }

  .note-btn {
    display: inline-block;
    background: #074da3;
    color: white;
    font-weight: bold;
    padding: 12px 25px;
    border-radius: 12px;
  }
</style>


        <!-- Form card -->
        <div class="form-card">
          <div class="form-head">
            <h2>Application Form</h2>
          </div>

          <div class="form-body">
            <form id="careerForm" class="career-form" action="career-mail.php" method="post" enctype="multipart/form-data" novalidate>
              <!-- honeypot -->
              <input type="text" name="website" tabindex="-1" autocomplete="off" class="hp-field" aria-hidden="true">

              <div class="row g-3">
                <div class="col-md-6">
                  <label for="full_name" class="form-label">Full Name</label>
                  <input id="full_name" name="name" type="text" class="form-control" placeholder="Your full name" required>
                </div>
                <div class="col-md-6">
                  <label for="email" class="form-label">Email</label>
                  <input id="email" name="email" type="email" class="form-control" placeholder="you@example.com" required>
                </div>

                <div class="col-md-6">
                  <label for="phone" class="form-label">Phone Number</label>
                  <input id="phone" name="phone" type="tel" class="form-control" placeholder="+91 9XXXXXXXXX" pattern="[\d\+\-\s]{7,}" required>
                </div>
                <div class="col-md-6">
                  <label for="position" class="form-label">Position Applied For</label>
                  <select id="position" name="position" class="form-select" required>
                    <option value="">Select a position</option>
                    <option>System Integration Engineer</option>
                    <option>Cloud Engineer (AWS/Azure)</option>
                    <option>Network & Security Engineer</option>
                    <option>IBM SPSS Specialist</option>
                    <option>Sales</option>
                    <option>Consulting</option>
                    <option>Others</option>
                  </select>
                </div>

                <div class="col-md-6">
                  <label for="experience" class="form-label">Years of Experience</label>
                  <select id="experience" name="experience" class="form-select" required>
                    <option value="">Select experience</option>
                    <option>Fresher</option>
                    <option>1–2 years</option>
                    <option>3–5 years</option>
                    <option>6–9 years</option>
                    <option>10+ years</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="ctc" class="form-label">Current CTC</label>
                  <select id="ctc" name="ctc" class="form-select" required>
                    <option value="">Select your CTC</option>
                    <option>&lt; 5 LPA</option>
                    <option>5–10 LPA</option>
                    <option>10–20 LPA</option>
                    <option>&gt; 20 LPA</option>
                  </select>
                </div>

                <div class="col-md-6">
                  <label for="org" class="form-label">Current Organization Name</label>
                  <input id="org" name="organization" type="text" class="form-control" placeholder="Leave blank if fresher">
                </div>
                <div class="col-md-6">
                  <label for="city" class="form-label">Current City</label>
                  <input id="city" name="city" type="text" class="form-control" placeholder="Type your city">
                </div>

                <div class="col-md-6">
                  <label for="photo" class="form-label">Upload Passport-size Photo</label>
                  <input id="photo" name="photo" type="file" class="form-control" accept=".jpg,.jpeg,.png,.webp">
                  <div class="form-help">Optional • JPG/PNG/WebP</div>
                </div>
                <div class="col-md-6">
                  <label for="resume" class="form-label">Upload Resume</label>
                  <input id="resume" name="resume" type="file" class="form-control" accept=".pdf,.doc,.docx" required>
                  <div class="form-help">PDF/DOC • Max 5MB (not validated here)</div>
                </div>

                <div class="col-12">
                  <label for="message" class="form-label">Message</label>
                  <textarea id="message" name="message" class="form-control" rows="5" placeholder="Share role interest, notice period, and availability."></textarea>
                </div>
              </div>
            </form>
          </div>

          <div class="form-foot">
            <button form="careerForm" type="submit" class="pbmit-btn pbmit-btn-primary">Submit Application</button>
            <div id="successMsg" class="success-wrap" role="status" aria-live="polite">
              ✅ Thanks! Your application has been noted (demo mode).
            </div>
            <div class="form-help mt-2">Front-end only — no data is sent to a server.</div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/common-footer.php'; ?>

<script>
  // Front-end only: show confirmation without sending data
  (function(){
    const form = document.getElementById('careerForm');
    const msg  = document.getElementById('successMsg');
    if(!form) return;

    form.addEventListener('submit', function(e){
      e.preventDefault();

      // Basic required validation
      const required = form.querySelectorAll('[required]');
      for (const el of required){
        if(!el.value){
          el.focus();
          el.reportValidity && el.reportValidity();
          return;
        }
      }

      msg.style.display = 'inline-block';
      form.reset();
      setTimeout(()=>{ msg.style.display='none'; }, 6000);
    });
  })();
</script>
