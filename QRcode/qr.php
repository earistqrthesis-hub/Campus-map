<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EARIST - Cavite Campus | QR Code</title>
  <link rel="icon" type="image/png" href="assets/earist-logo.png?v=2" />
  <script src="assets/qrcode.min.js"></script>
  <style>
    :root {
      --maroon-dark: #450c10;
      --maroon: #5b1317;
      --maroon-light: #7a1d23;
      --cream: #f4f0e8;
      --surface: #f7f4ee;
      --card-bg: #ffffff;
      --text-main: #1f1b1c;
      --text-muted: #645d5e;
      --border: #e3ddd3;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html,
    body {
      width: 100%;
      min-height: 100vh;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
      background: radial-gradient(circle at top, #f7f3ec 0%, #ebe6dd 70%);
      color: var(--text-main);
      -webkit-font-smoothing: antialiased;
    }

    body {
      padding: 20px 16px 32px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .app-shell {
      width: 100%;
      max-width: 460px;
      background: var(--card-bg);
      border-radius: 24px;
      border: 1px solid #ded7cb;
      box-shadow: 0 18px 48px rgba(31, 27, 28, 0.14);
      overflow: hidden;
      display: flex;
      flex-direction: column;
    }

    /* Header */
    .header {
      background: linear-gradient(135deg, var(--maroon-dark) 0%, var(--maroon) 65%, var(--maroon-light) 100%);
      color: #ffffff;
      padding: 13px 16px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 10px;
      box-shadow: 0 2px 10px rgba(69, 12, 16, 0.24);
    }

    .brand {
      display: flex;
      align-items: center;
      gap: 11px;
      min-width: 0;
    }

    .brand img {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      background: #ffffff;
      padding: 2px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.22);
      flex-shrink: 0;
      object-fit: cover;
    }

    .brand-text {
      min-width: 0;
    }

    .brand-text h1 {
      font-size: 1rem;
      font-weight: 800;
      color: #ffffff;
      line-height: 1.2;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .brand-text p {
      font-size: 0.72rem;
      color: rgba(255, 255, 255, 0.85);
      font-weight: 600;
      margin-top: 1px;
    }

    .back-map-btn {
      display: inline-flex;
      align-items: center;
      gap: 5px;
      background: rgba(255, 255, 255, 0.14);
      border: 1px solid rgba(255, 255, 255, 0.28);
      color: #ffffff;
      text-decoration: none;
      font-size: 0.74rem;
      font-weight: 700;
      padding: 6px 11px;
      border-radius: 999px;
      flex-shrink: 0;
      transition: background 0.15s ease;
    }

    .back-map-btn:hover {
      background: rgba(255, 255, 255, 0.26);
    }

    /* Card Body */
    .qr-body {
      padding: 24px 20px 22px;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      gap: 16px;
    }

    .poster-title-block h2 {
      font-size: 1.12rem;
      font-weight: 800;
      color: var(--maroon-dark);
      letter-spacing: -0.01em;
    }

    .poster-title-block p {
      font-size: 0.80rem;
      color: var(--text-muted);
      margin-top: 3px;
      font-weight: 600;
    }

    .qr-frame {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 14px;
      background: #ffffff;
      border: 3px solid var(--maroon);
      border-radius: 20px;
      box-shadow: 0 10px 28px rgba(91, 19, 23, 0.12);
    }

    #qrCanvas {
      width: 240px;
      height: 240px;
      display: block;
    }

    /* Target URL Bar */
    .url-bar {
      width: 100%;
      display: flex;
      align-items: center;
      gap: 6px;
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: 11px;
      padding: 6px 6px 6px 11px;
    }

    .target-url {
      flex: 1;
      font-size: 0.72rem;
      font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
      color: var(--text-muted);
      text-align: left;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }

    .copy-btn {
      display: inline-flex;
      align-items: center;
      gap: 4px;
      background: #ffffff;
      border: 1px solid #d6cfc4;
      color: var(--maroon-dark);
      font-size: 0.71rem;
      font-weight: 800;
      padding: 5px 10px;
      border-radius: 8px;
      cursor: pointer;
      flex-shrink: 0;
      transition: background 0.14s ease, border-color 0.14s ease;
    }

    .copy-btn:hover {
      background: #f0ebe2;
      border-color: var(--maroon);
    }

    /* Actions */
    .actions {
      width: 100%;
      display: flex;
      flex-direction: column;
      gap: 9px;
    }

    .btn {
      width: 100%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 7px;
      padding: 12px 16px;
      border-radius: 13px;
      font-size: 0.86rem;
      font-weight: 800;
      text-decoration: none;
      cursor: pointer;
      border: none;
      transition: background 0.15s ease, transform 0.12s ease;
    }

    .btn:active {
      transform: scale(0.985);
    }

    .btn-primary {
      background: var(--maroon);
      color: #ffffff;
      box-shadow: 0 4px 14px rgba(91, 19, 23, 0.24);
    }

    .btn-primary:hover {
      background: var(--maroon-dark);
    }

    .btn-secondary {
      background: var(--surface);
      color: var(--maroon-dark);
      border: 1px solid #d9d1c5;
    }

    .btn-secondary:hover {
      background: #ede7dc;
    }

    .btn-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 9px;
    }

    /* Site Legal Footer */
    .site-footer {
      padding: 14px 16px 16px;
      background: var(--surface);
      border-top: 1px solid var(--border);
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 4px;
    }

    .footer-copy {
      font-size: 0.73rem;
      font-weight: 800;
      color: var(--maroon-dark);
      line-height: 1.35;
    }

    .footer-credit {
      font-size: 0.71rem;
      font-weight: 700;
      color: var(--maroon);
      line-height: 1.35;
    }

    .footer-inst {
      font-size: 0.67rem;
      font-weight: 600;
      color: var(--text-muted);
      line-height: 1.35;
      margin-top: 2px;
    }

    .footer-disclaimer {
      font-size: 0.65rem;
      color: #7c7475;
      line-height: 1.4;
      margin-top: 2px;
    }

    /* Print Poster Styling */
    @media print {
      body {
        background: #ffffff;
        padding: 0;
        justify-content: flex-start;
      }

      .app-shell {
        max-width: 440px;
        margin: 40px auto;
        box-shadow: none;
        border: 2.5px solid var(--maroon);
        border-radius: 20px;
      }

      .back-map-btn,
      .url-bar,
      .actions,
      .footer-disclaimer {
        display: none !important;
      }
    }
  </style>
</head>

<body>
  <div class="app-shell">
    <header class="header">
      <div class="brand">
        <img src="assets/earist-logo.png" alt="EARIST Seal" />
        <div class="brand-text">
          <h1>EARIST - Cavite Campus</h1>
          <p>Campus Navigation QR Code</p>
        </div>
      </div>
      <a href="index.html" class="back-map-btn">← Campus Map</a>
    </header>

    <main class="qr-body">
      <div class="poster-title-block">
        <h2>Scan for Campus Map</h2>
        <p>Point your phone camera to open indoor &amp; campus directions</p>
      </div>

      <div class="qr-frame">
        <canvas id="qrCanvas" width="512" height="512"></canvas>
      </div>

      <div class="url-bar">
        <div class="target-url" id="targetUrlText"></div>
        <button type="button" class="copy-btn" id="copyBtn" title="Copy landing page URL">
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <rect width="14" height="14" x="8" y="8" rx="2" ry="2"/>
            <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/>
          </svg>
          <span id="copyBtnText">Copy</span>
        </button>
      </div>

      <div class="actions">
        <button type="button" class="btn btn-primary" id="downloadBtn">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
            <polyline points="7 10 12 15 17 10"/>
            <line x1="12" y1="15" x2="12" y2="3"/>
          </svg>
          Download QR Code (PNG)
        </button>

        <div class="btn-row">
          <button type="button" class="btn btn-secondary" onclick="window.print()">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <polyline points="6 9 6 2 18 2 18 9"/>
              <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/>
              <rect width="12" height="8" x="6" y="14"/>
            </svg>
            Print QR Poster
          </button>

          <a href="index.html" class="btn btn-secondary">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <polygon points="3 6 9 3 15 6 21 3 21 18 15 21 9 18 3 21"/>
              <line x1="9" y1="3" x2="9" y2="18"/>
              <line x1="15" y1="6" x2="15" y2="21"/>
            </svg>
            Open Campus Map
          </a>
        </div>
      </div>

    </main>

    <footer class="site-footer">
      <div class="footer-copy">&copy; 2027 EARIST Cavite Wayfinding Map. All Rights Reserved.</div>
      <div class="footer-credit">Made with Love for the EARIST Community by Drafting Technology</div>
      <div class="footer-inst">Eulogio &ldquo;Amang&rdquo; Rodriguez Institute of Science and Technology &mdash; Cavite Campus</div>
      <div class="footer-disclaimer">
        For general campus wayfinding and informational purposes only. Campus layouts may change without prior notice.
      </div>
    </footer>
  </div>

  <script>
    const qrCanvas = document.getElementById("qrCanvas");
    const targetUrlText = document.getElementById("targetUrlText");
    const copyBtn = document.getElementById("copyBtn");
    const copyBtnText = document.getElementById("copyBtnText");

    const isPublicHost = window.location.hostname &&
      window.location.hostname !== "localhost" &&
      window.location.hostname !== "127.0.0.1" &&
      !window.location.hostname.startsWith("192.168.");

    const liveBaseDir = window.location.href.split("?")[0].replace(/\/(qr\.(php|html))?$/, "");
    const targetLandingUrl = isPublicHost
      ? `${liveBaseDir}/index.html`
      : "https://subzer0xxx.github.io/CampusMap/QRcode/index.html";

    targetUrlText.textContent = targetLandingUrl;
    targetUrlText.title = targetLandingUrl;

    function drawQRCode(url) {
      const ctx = qrCanvas.getContext("2d");
      const size = qrCanvas.width;
      ctx.fillStyle = "#ffffff";
      ctx.fillRect(0, 0, size, size);

      const qr = qrcode(0, "H");
      qr.addData(url);
      qr.make();

      const count = qr.getModuleCount();
      const margin = 20;
      const cell = (size - margin * 2) / count;

      ctx.fillStyle = "#1f1b1c";
      for (let r = 0; r < count; r++) {
        for (let c = 0; c < count; c++) {
          if (qr.isDark(r, c)) {
            ctx.fillRect(
              Math.floor(margin + c * cell),
              Math.floor(margin + r * cell),
              Math.ceil(cell),
              Math.ceil(cell)
            );
          }
        }
      }

      const logo = new Image();
      logo.onload = () => {
        const logoSize = size * 0.22;
        const cx = size / 2;
        const cy = size / 2;
        ctx.save();
        ctx.beginPath();
        ctx.arc(cx, cy, logoSize / 2 + 8, 0, Math.PI * 2);
        ctx.fillStyle = "#ffffff";
        ctx.fill();
        ctx.beginPath();
        ctx.arc(cx, cy, logoSize / 2, 0, Math.PI * 2);
        ctx.clip();
        ctx.drawImage(logo, cx - logoSize / 2, cy - logoSize / 2, logoSize, logoSize);
        ctx.restore();
      };
      logo.src = "assets/earist-logo.png";
    }

    drawQRCode(targetLandingUrl);

    document.getElementById("downloadBtn").addEventListener("click", () => {
      const link = document.createElement("a");
      link.download = "EARIST-Cavite-Campus-QRCode.png";
      link.href = qrCanvas.toDataURL("image/png");
      link.click();
    });

    copyBtn.addEventListener("click", async () => {
      try {
        await navigator.clipboard.writeText(targetLandingUrl);
        copyBtnText.textContent = "Copied!";
        setTimeout(() => { copyBtnText.textContent = "Copy"; }, 1800);
      } catch {
        const ta = document.createElement("textarea");
        ta.value = targetLandingUrl;
        document.body.appendChild(ta);
        ta.select();
        document.execCommand("copy");
        document.body.removeChild(ta);
        copyBtnText.textContent = "Copied!";
        setTimeout(() => { copyBtnText.textContent = "Copy"; }, 1800);
      }
    });
  </script>
</body>

</html>
