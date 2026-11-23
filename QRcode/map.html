<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes" />
  <title>EARIST - Cavite Campus | Campus Map</title>
  <link rel="icon" type="image/png" href="assets/earist-logo.png?v=2" />
  <style>
    :root {
      --maroon-dark: #450c10;
      --maroon: #5b1317;
      --maroon-light: #7a1d23;
      --gold: #d97706;
      --gold-soft: #fef3c7;
      --blue: #2563eb;
      --body-bg: #ebe6dd;
      --card-bg: #ffffff;
      --surface: #f7f4ee;
      --text-main: #1f1b1c;
      --text-muted: #645d5e;
      --border: #e3ddd3;
      --map-bg: #e7e7f0;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      -webkit-tap-highlight-color: transparent;
      scrollbar-width: none;
      -ms-overflow-style: none;
    }

    *::-webkit-scrollbar {
      display: none;
      width: 0;
      height: 0;
    }

    html,
    body {
      width: 100%;
      min-height: 100vh;
      overflow-x: hidden;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
      background: radial-gradient(circle at top, #f3efe7 0%, var(--body-bg) 70%);
      color: var(--text-main);
      -webkit-font-smoothing: antialiased;
    }

    body {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .app-shell {
      width: 100%;
      max-width: 480px;
      min-height: 100vh;
      background: var(--card-bg);
      display: flex;
      flex-direction: column;
      box-shadow: 0 0 36px rgba(31, 27, 28, 0.14);
      position: relative;
    }

    @media (min-width: 520px) {
      body {
        padding: 20px 16px;
        justify-content: center;
      }

      .app-shell {
        min-height: auto;
        border-radius: 24px;
        overflow: hidden;
        border: 1px solid #ded7cb;
        box-shadow: 0 18px 48px rgba(31, 27, 28, 0.14);
      }
    }

    /* Top Header */
    .header {
      background: linear-gradient(135deg, var(--maroon-dark) 0%, var(--maroon) 65%, var(--maroon-light) 100%);
      color: #ffffff;
      padding: 13px 16px;
      display: flex;
      align-items: center;
      gap: 12px;
      position: sticky;
      top: 0;
      z-index: 50;
      box-shadow: 0 2px 10px rgba(69, 12, 16, 0.24);
    }

    .brand {
      display: flex;
      align-items: center;
      gap: 12px;
      min-width: 0;
      cursor: pointer;
    }

    .brand img {
      width: 46px;
      height: 46px;
      border-radius: 50%;
      background: #ffffff;
      padding: 2px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.22);
      flex-shrink: 0;
      object-fit: cover;
    }

    .brand-title {
      font-size: 1.08rem;
      font-weight: 800;
      letter-spacing: 0.01em;
      color: #ffffff;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    /* Main Content */
    .content {
      padding: 14px 14px 18px;
      display: flex;
      flex-direction: column;
      gap: 12px;
      flex: 1;
    }

    /* Search Bar */
    .search-wrap {
      position: relative;
      z-index: 40;
    }

    .search-box {
      display: flex;
      align-items: center;
      gap: 9px;
      background: var(--surface);
      border: 1.5px solid var(--border);
      border-radius: 999px;
      padding: 9px 14px;
      transition: border-color 0.15s ease, background 0.15s ease, box-shadow 0.15s ease;
    }

    .search-box:focus-within {
      border-color: var(--maroon);
      background: #ffffff;
      box-shadow: 0 0 0 3px rgba(91, 19, 23, 0.10);
    }

    .search-icon {
      color: #78716c;
      flex-shrink: 0;
      display: inline-flex;
      align-items: center;
    }

    .search-box input {
      border: none;
      background: transparent;
      outline: none;
      width: 100%;
      font-size: 0.86rem;
      color: var(--text-main);
    }

    .search-box input::placeholder {
      color: #857e78;
    }

    .search-clear {
      display: none;
      border: none;
      background: #ded8ce;
      color: var(--text-main);
      width: 20px;
      height: 20px;
      border-radius: 50%;
      font-size: 0.72rem;
      font-weight: 700;
      cursor: pointer;
      flex-shrink: 0;
      align-items: center;
      justify-content: center;
    }

    .search-clear.show {
      display: inline-flex;
    }

    /* Auto-suggest & Quick-Pick Dropdown */
    .search-results {
      display: none;
      position: absolute;
      left: 0;
      right: 0;
      top: calc(100% + 6px);
      background: #ffffff;
      border: 1.5px solid var(--border);
      border-radius: 14px;
      box-shadow: 0 14px 32px rgba(0, 0, 0, 0.16);
      max-height: 280px;
      overflow-y: auto;
      z-index: 60;
    }

    .search-results.open {
      display: block;
    }

    .search-section-label {
      padding: 8px 13px 4px;
      font-size: 0.67rem;
      font-weight: 800;
      color: var(--text-muted);
      text-transform: uppercase;
      letter-spacing: 0.06em;
      background: #faf8f4;
      border-bottom: 1px solid #f2ede4;
    }

    .search-item {
      width: 100%;
      text-align: left;
      background: none;
      border: none;
      border-bottom: 1px solid #f4efe6;
      padding: 10px 13px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 8px;
      cursor: pointer;
    }

    .search-item:last-child {
      border-bottom: none;
    }

    .search-item:hover {
      background: #faf7f2;
    }

    .search-item-title {
      font-size: 0.84rem;
      font-weight: 700;
      color: var(--text-main);
    }

    .search-item-sub {
      font-size: 0.71rem;
      color: var(--text-muted);
      margin-top: 2px;
    }

    .search-item-badge {
      font-size: 0.67rem;
      font-weight: 800;
      color: var(--maroon);
      background: #fdf2f2;
      border: 1px solid #f3d2d4;
      padding: 2px 7px;
      border-radius: 999px;
      white-space: nowrap;
      flex-shrink: 0;
    }

    /* 4 Quick-Access Category Tiles */
    .categories-bar {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 8px;
    }

    .cat-btn {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 6px;
      background: none;
      border: none;
      cursor: pointer;
      padding: 2px 0;
      transition: transform 0.12s ease;
    }

    .cat-btn:active {
      transform: scale(0.95);
    }

    .cat-icon-box {
      width: 56px;
      height: 52px;
      border-radius: 14px;
      display: flex;
      align-items: center;
      justify-content: center;
      border: none;
      color: #ffffff;
      box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.22), 0 4px 12px rgba(0, 0, 0, 0.12);
      transition: transform 0.16s ease, box-shadow 0.16s ease, filter 0.16s ease;
    }

    .cat-btn[data-cat="main"] {
      --tile-ring: #5b1317;
    }

    .cat-btn[data-cat="main"] .cat-icon-box {
      background: linear-gradient(135deg, #8b1e24 0%, #5b1317 100%);
      box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.22), 0 5px 14px rgba(91, 19, 23, 0.28);
    }

    .cat-btn[data-cat="annex"] {
      --tile-ring: #d97706;
    }

    .cat-btn[data-cat="annex"] .cat-icon-box {
      background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
      box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.22), 0 5px 14px rgba(217, 119, 6, 0.28);
    }

    .cat-btn[data-cat="research"] {
      --tile-ring: #1d4ed8;
    }

    .cat-btn[data-cat="research"] .cat-icon-box {
      background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
      box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.22), 0 5px 14px rgba(29, 78, 216, 0.26);
    }

    .cat-btn[data-cat="others"] {
      --tile-ring: #334155;
    }

    .cat-btn[data-cat="others"] .cat-icon-box {
      background: linear-gradient(135deg, #64748b 0%, #334155 100%);
      box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.22), 0 5px 14px rgba(51, 65, 85, 0.26);
    }

    .cat-btn:hover .cat-icon-box {
      transform: translateY(-2px);
      filter: brightness(1.06);
    }

    .cat-btn.active .cat-icon-box {
      transform: translateY(-2px);
      box-shadow: 0 0 0 2.5px #ffffff, 0 0 0 4.5px var(--tile-ring), 0 8px 18px rgba(0, 0, 0, 0.18);
    }

    .cat-label {
      font-size: 0.72rem;
      font-weight: 700;
      color: #3f3a3b;
      text-align: center;
      line-height: 1.18;
    }

    .cat-btn.active .cat-label {
      color: var(--tile-ring);
      font-weight: 800;
    }

    /* "Others" Facilities Drawer */
    .others-drawer {
      display: none;
      padding: 11px 12px 12px;
      background: var(--surface);
      border: 1.5px solid var(--border);
      border-radius: 14px;
    }

    .others-drawer.show {
      display: block;
    }

    .others-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 9px;
    }

    .others-title {
      font-size: 0.74rem;
      font-weight: 800;
      color: var(--maroon-dark);
      text-transform: uppercase;
      letter-spacing: 0.05em;
    }

    .others-close-btn {
      background: none;
      border: none;
      font-size: 0.74rem;
      font-weight: 700;
      color: var(--text-muted);
      cursor: pointer;
      padding: 2px 4px;
    }

    .others-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 7px;
    }

    .other-facility-btn {
      padding: 8px 10px;
      background: #ffffff;
      border: 1px solid var(--border);
      border-radius: 10px;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 0.75rem;
      font-weight: 700;
      color: var(--text-main);
      text-align: left;
      transition: all 0.14s ease;
    }

    .other-facility-btn svg {
      color: var(--maroon);
      flex-shrink: 0;
    }

    .other-facility-btn:hover,
    .other-facility-btn.active {
      border-color: var(--maroon);
      background: #fdf6f6;
      color: var(--maroon-dark);
    }

    /* Unified Map Card Container */
    .map-card {
      border: 1.5px solid var(--border);
      border-radius: 18px;
      background: #ffffff;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      box-shadow: 0 6px 20px rgba(31, 27, 28, 0.06);
    }

    .map-card-top {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 8px;
      padding: 10px 12px;
      border-bottom: 1px solid #ede7de;
      background: #ffffff;
    }

    .map-title-group {
      display: flex;
      align-items: center;
      gap: 7px;
      min-width: 0;
      flex: 1;
    }

    .back-campus-btn {
      display: none;
      align-items: center;
      gap: 4px;
      background: var(--surface);
      border: 1px solid #d6cfc4;
      color: var(--maroon-dark);
      border-radius: 999px;
      padding: 4px 9px;
      font-size: 0.72rem;
      font-weight: 800;
      cursor: pointer;
      flex-shrink: 0;
      transition: background 0.14s ease, border-color 0.14s ease;
    }

    .back-campus-btn.show {
      display: inline-flex;
    }

    .back-campus-btn:hover {
      background: #efe9de;
      border-color: var(--maroon);
    }

    .section-title {
      font-size: 0.87rem;
      font-weight: 800;
      color: var(--maroon-dark);
      letter-spacing: -0.01em;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    /* Floor Switcher Row */
    .floor-pills-row {
      display: none;
      grid-template-columns: repeat(3, 1fr);
      gap: 6px;
      padding: 8px 12px;
      background: #faf8f4;
      border-bottom: 1px solid #ede7de;
    }

    .floor-pills-row.show {
      display: grid;
    }

    .floor-pill-btn {
      padding: 7px 6px;
      border-radius: 9px;
      border: 1.5px solid var(--border);
      background: #ffffff;
      color: #3f3a3b;
      font-size: 0.75rem;
      font-weight: 700;
      text-align: center;
      cursor: pointer;
      transition: all 0.14s ease;
    }

    .floor-pill-btn.active {
      background: var(--maroon);
      border-color: var(--maroon);
      color: #ffffff;
      box-shadow: 0 2px 8px rgba(91, 19, 23, 0.2);
    }

    /* In-Floor Turn-by-Turn Bar */
    .floor-nav-bar {
      display: none;
      padding: 8px 12px;
      background: #f4f7fd;
      border-bottom: 1px solid #dbe5f7;
    }

    .floor-nav-bar.show {
      display: block;
    }

    .floor-nav-row {
      display: grid;
      grid-template-columns: 1fr 1fr auto;
      gap: 6px;
      align-items: end;
    }

    .floor-nav-field {
      display: flex;
      flex-direction: column;
      gap: 2px;
      min-width: 0;
    }

    .floor-nav-field label {
      font-size: 0.64rem;
      font-weight: 800;
      color: #1e3a8a;
      text-transform: uppercase;
      letter-spacing: 0.03em;
    }

    .floor-nav-select {
      width: 100%;
      padding: 5px 7px;
      border-radius: 7px;
      border: 1px solid #bfdbfe;
      background: #ffffff;
      color: var(--text-main);
      font-size: 0.73rem;
      font-weight: 700;
      font-family: inherit;
      outline: none;
    }

    .floor-nav-swap {
      padding: 0 8px;
      border-radius: 7px;
      border: 1px solid #bfdbfe;
      background: #ffffff;
      color: #1e3a8a;
      font-size: 0.85rem;
      font-weight: 800;
      cursor: pointer;
      height: 29px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
    }

    /* Map Viewport */
    .map-stage {
      position: relative;
      width: 100%;
      aspect-ratio: 4 / 3;
      min-height: 350px;
      background: var(--map-bg);
      overflow: hidden;
      touch-action: none;
      cursor: grab;
      user-select: none;
    }

    .map-stage.dragging {
      cursor: grabbing;
    }

    .map-stage.fullscreen {
      position: fixed;
      inset: 0;
      width: 100vw !important;
      height: 100vh !important;
      min-height: 100vh !important;
      aspect-ratio: auto !important;
      border-radius: 0;
      border: none;
      z-index: 9999;
      background: #1c1917;
    }

    .map-transform {
      position: relative;
      width: 100%;
      height: 100%;
      transform-origin: center center;
      transition: transform 0.16s ease-out;
    }

    .map-stage.dragging .map-transform,
    .map-stage.pinching .map-transform {
      transition: none;
    }

    .map-image {
      width: 100%;
      height: 100%;
      object-fit: contain;
      display: block;
      pointer-events: none;
    }

    .map-overlay {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      pointer-events: auto;
    }

    /* Subtle Bottom-Left Map Hint Pill */
    .map-hint-pill {
      position: absolute;
      left: 10px;
      bottom: 12px;
      z-index: 25;
      background: rgba(31, 27, 28, 0.78);
      backdrop-filter: blur(6px);
      -webkit-backdrop-filter: blur(6px);
      color: #ffffff;
      font-size: 0.70rem;
      font-weight: 600;
      padding: 5px 10px;
      border-radius: 999px;
      border: 1px solid rgba(255, 255, 255, 0.16);
      pointer-events: none;
      transition: opacity 0.18s ease;
    }

    .map-hint-pill.hidden {
      opacity: 0;
    }

    /* Fullscreen Top Bar (Title + Exit) */
    .fs-top-bar {
      display: none;
      position: absolute;
      top: 14px;
      left: 14px;
      right: 14px;
      z-index: 40;
      align-items: center;
      justify-content: space-between;
      gap: 10px;
      pointer-events: none;
    }

    .map-stage.fullscreen .fs-top-bar {
      display: flex;
    }

    .fs-title-pill {
      pointer-events: auto;
      background: rgba(24, 24, 27, 0.82);
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      color: #ffffff;
      border: 1px solid rgba(255, 255, 255, 0.22);
      border-radius: 999px;
      padding: 8px 14px;
      font-size: 0.78rem;
      font-weight: 800;
      box-shadow: 0 4px 14px rgba(0, 0, 0, 0.3);
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .fs-close-btn {
      pointer-events: auto;
      background: rgba(91, 19, 23, 0.92);
      color: #ffffff;
      border: 1px solid rgba(255, 255, 255, 0.28);
      border-radius: 999px;
      padding: 8px 14px;
      font-size: 0.78rem;
      font-weight: 800;
      cursor: pointer;
      box-shadow: 0 4px 14px rgba(0, 0, 0, 0.35);
      flex-shrink: 0;
    }

    /* Floating Zoom Controls Capsule — Bottom Right (+, -, Recenter) */
    .floating-zoom {
      position: absolute;
      right: 12px;
      bottom: 12px;
      display: flex;
      flex-direction: column;
      background: rgba(255, 255, 255, 0.96);
      backdrop-filter: blur(6px);
      -webkit-backdrop-filter: blur(6px);
      border-radius: 14px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.18);
      border: 1px solid rgba(0, 0, 0, 0.10);
      overflow: hidden;
      z-index: 30;
    }

    .floating-zoom button {
      width: 38px;
      height: 36px;
      border: none;
      background: transparent;
      color: var(--text-main);
      font-size: 1.08rem;
      font-weight: 800;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: background 0.14s ease, color 0.14s ease;
    }

    .floating-zoom button:not(:last-child) {
      border-bottom: 1px solid #ece7df;
    }

    .floating-zoom button:hover {
      background: #faf7f2;
      color: var(--maroon);
    }

    .floating-zoom button:active {
      background: #f0ebe2;
    }

    /* Bottom Action Button: View Full Map */
    .view-full-btn {
      width: 100%;
      padding: 13px 16px;
      border-radius: 14px;
      background: var(--maroon);
      color: #ffffff;
      border: none;
      font-size: 0.90rem;
      font-weight: 800;
      letter-spacing: 0.01em;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      cursor: pointer;
      box-shadow: 0 4px 14px rgba(91, 19, 23, 0.24);
      transition: background 0.15s ease, transform 0.12s ease;
    }

    .view-full-btn:hover {
      background: var(--maroon-dark);
    }

    .view-full-btn:active {
      transform: scale(0.985);
    }

    /* Compact Helpful Footer Tip Strip */
    .footer-tip-strip {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 8px;
      padding: 8px 10px 8px 12px;
      border-radius: 12px;
      background: var(--surface);
      border: 1px solid var(--border);
      color: var(--text-muted);
      font-size: 0.72rem;
      font-weight: 600;
      line-height: 1.3;
    }

    .qr-mini-link {
      display: inline-flex;
      align-items: center;
      gap: 5px;
      background: #ffffff;
      border: 1px solid #d6cfc4;
      color: var(--maroon-dark);
      text-decoration: none;
      font-size: 0.71rem;
      font-weight: 800;
      padding: 5px 10px;
      border-radius: 999px;
      white-space: nowrap;
      flex-shrink: 0;
      transition: background 0.14s ease, border-color 0.14s ease;
    }

    .qr-mini-link:hover {
      background: #fdf6f6;
      border-color: var(--maroon);
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
      max-width: 400px;
      margin-top: 2px;
    }

    .footer-legal-links {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      margin-top: 4px;
      font-size: 0.69rem;
      color: var(--text-muted);
    }

    .legal-link-btn {
      background: none;
      border: none;
      padding: 2px 4px;
      font-family: inherit;
      font-size: 0.69rem;
      font-weight: 700;
      color: var(--maroon-dark);
      text-decoration: underline;
      text-underline-offset: 2px;
      cursor: pointer;
    }

    .legal-link-btn:hover {
      color: var(--maroon);
    }

    /* Legal Info Modal */
    .legal-modal {
      display: none;
      position: fixed;
      inset: 0;
      z-index: 10000;
      background: rgba(31, 27, 28, 0.56);
      backdrop-filter: blur(4px);
      -webkit-backdrop-filter: blur(4px);
      padding: 20px 16px;
      align-items: center;
      justify-content: center;
    }

    .legal-modal.open {
      display: flex;
    }

    .legal-modal-card {
      width: 100%;
      max-width: 420px;
      background: #ffffff;
      border-radius: 18px;
      border: 1px solid var(--border);
      box-shadow: 0 20px 48px rgba(0, 0, 0, 0.24);
      overflow: hidden;
    }

    .legal-modal-head {
      background: linear-gradient(135deg, var(--maroon-dark) 0%, var(--maroon) 100%);
      color: #ffffff;
      padding: 12px 16px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 10px;
    }

    .legal-modal-head h3 {
      font-size: 0.92rem;
      font-weight: 800;
    }

    .legal-modal-close {
      background: rgba(255, 255, 255, 0.16);
      border: 1px solid rgba(255, 255, 255, 0.28);
      color: #ffffff;
      width: 28px;
      height: 28px;
      border-radius: 50%;
      font-size: 0.80rem;
      font-weight: 800;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      justify-content: center;
    }

    .legal-modal-body {
      padding: 16px;
      font-size: 0.80rem;
      color: #3f3a3b;
      line-height: 1.55;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    /* Selected Destination Card */
    .selected-card {
      display: none;
      padding: 13px 14px;
      border-radius: 14px;
      background: #fffbeb;
      border: 1.5px solid #f59e0b;
      box-shadow: 0 4px 14px rgba(217, 119, 6, 0.12);
    }

    .selected-card.show {
      display: block;
    }

    .selected-card-top {
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      gap: 10px;
    }

    .selected-close-btn {
      background: rgba(120, 53, 15, 0.10);
      color: #78350f;
      border: none;
      width: 24px;
      height: 24px;
      border-radius: 50%;
      font-size: 0.74rem;
      font-weight: 800;
      cursor: pointer;
      flex-shrink: 0;
      display: inline-flex;
      align-items: center;
      justify-content: center;
    }

    .room-code-pill {
      display: inline-block;
      background: var(--maroon);
      color: #ffffff;
      font-size: 0.68rem;
      font-weight: 800;
      padding: 2px 8px;
      border-radius: 999px;
      margin-bottom: 4px;
    }

    .selected-card h2 {
      font-size: 0.94rem;
      font-weight: 800;
      color: #451a03;
    }

    .selected-card p {
      font-size: 0.75rem;
      color: #78350f;
      margin-top: 2px;
    }

    .selected-card-actions {
      display: flex;
      flex-wrap: wrap;
      gap: 6px;
      margin-top: 10px;
    }

    .action-btn {
      border: none;
      border-radius: 8px;
      padding: 6px 11px;
      font-size: 0.74rem;
      font-weight: 700;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 5px;
    }

    .action-btn-primary {
      background: var(--maroon);
      color: #ffffff;
    }

    .action-btn-secondary {
      background: #ffffff;
      color: var(--maroon);
      border: 1px solid #d6b2b5;
    }

    .directions-box {
      width: 100%;
      margin-top: 8px;
      padding: 9px 11px;
      border-radius: 10px;
      background: rgba(255, 255, 255, 0.94);
      border: 1px solid #fcd34d;
    }

    .directions-title {
      font-size: 0.71rem;
      font-weight: 800;
      color: #1e3a8a;
      margin-bottom: 5px;
    }

    .directions-list {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 4px;
    }

    .directions-list li {
      font-size: 0.73rem;
      color: #334155;
      line-height: 1.38;
      font-weight: 600;
    }

    /* Floor Directory Section */
    .directory-section {
      display: none;
    }

    .directory-section.show {
      display: block;
    }

    .directory-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 8px;
    }

    .directory-header h3 {
      font-size: 0.80rem;
      font-weight: 800;
      color: var(--text-main);
    }

    .directory-count {
      font-size: 0.70rem;
      color: var(--text-muted);
      font-weight: 600;
    }

    .room-list {
      display: flex;
      flex-direction: column;
      gap: 6px;
    }

    .room-card {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 8px;
      width: 100%;
      text-align: left;
      padding: 9px 11px;
      border-radius: 11px;
      border: 1.5px solid var(--border);
      background: #ffffff;
      cursor: pointer;
      transition: border-color 0.14s ease, background 0.14s ease;
    }

    .room-card:hover {
      border-color: var(--maroon);
      background: #fdfbfa;
    }

    .room-card.active {
      border-color: var(--gold);
      background: #fffbeb;
    }

    .room-card-left {
      display: flex;
      align-items: center;
      gap: 9px;
      min-width: 0;
    }

    .room-num-box {
      min-width: 66px;
      padding: 4px 7px;
      border-radius: 7px;
      background: #f4f1ea;
      color: var(--maroon-dark);
      font-size: 0.70rem;
      font-weight: 800;
      text-align: center;
      flex-shrink: 0;
    }

    .room-card.active .room-num-box {
      background: var(--maroon);
      color: #ffffff;
    }

    .room-info {
      min-width: 0;
    }

    .room-name {
      font-size: 0.81rem;
      font-weight: 700;
      color: var(--text-main);
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .room-loc {
      font-size: 0.69rem;
      color: var(--text-muted);
      margin-top: 2px;
    }

    .room-arrow {
      font-size: 0.73rem;
      font-weight: 700;
      color: var(--maroon);
      flex-shrink: 0;
    }

    /* Clean Non-Cluttered Hotspot SVG Styling */
    .hotspot-bldg rect {
      fill: transparent;
      stroke: transparent;
      stroke-width: 3;
      cursor: pointer;
      transition: fill 0.18s ease, stroke 0.18s ease;
    }

    .hotspot-bldg:hover rect {
      fill: rgba(91, 19, 23, 0.18);
      stroke: rgba(91, 19, 23, 0.85);
    }

    .hotspot-bldg.selected rect {
      fill: rgba(217, 119, 6, 0.24);
      stroke: var(--gold);
      stroke-width: 4;
    }

    .hotspot-fac rect {
      fill: transparent;
      stroke: transparent;
      stroke-width: 3;
      cursor: pointer;
      transition: fill 0.18s ease, stroke 0.18s ease;
    }

    .hotspot-fac:hover rect {
      fill: rgba(37, 99, 235, 0.16);
      stroke: rgba(37, 99, 235, 0.80);
    }

    .hotspot-fac.selected rect {
      fill: rgba(217, 119, 6, 0.25);
      stroke: var(--gold);
      stroke-width: 4;
    }

    .hotspot-room rect {
      fill: rgba(37, 99, 235, 0.05);
      stroke: rgba(37, 99, 235, 0.35);
      stroke-width: 2;
      cursor: pointer;
      transition: all 0.16s ease;
    }

    .hotspot-room:hover rect {
      fill: rgba(37, 99, 235, 0.20);
      stroke: var(--blue);
      stroke-width: 3;
    }

    .hotspot-room.selected rect {
      fill: rgba(217, 119, 6, 0.30);
      stroke: #b45309;
      stroke-width: 4;
    }

    @keyframes dashFlow {
      to {
        stroke-dashoffset: -36;
      }
    }

    .route-flow {
      animation: dashFlow 1.1s linear infinite;
    }

    @keyframes pulseRing {
      0% {
        opacity: 0.85;
        transform: scale(0.5);
      }
      100% {
        opacity: 0;
        transform: scale(1.65);
      }
    }

    .pulse-ring {
      animation: pulseRing 1.7s infinite ease-out;
      transform-origin: center;
      transform-box: fill-box;
    }
  </style>
</head>

<body>
  <div class="app-shell">
    <!-- Top Header -->
    <header class="header">
      <div class="brand" id="brandHome" title="Return to Campus Map">
        <img src="assets/earist-logo.png" alt="EARIST Logo" />
        <h1 class="brand-title">EARIST - Cavite Campus</h1>
      </div>
    </header>

    <main class="content">
      <!-- Search Bar -->
      <div class="search-wrap">
        <div class="search-box">
          <span class="search-icon" aria-hidden="true">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="11" cy="11" r="8"/>
              <path d="m21 21-4.3-4.3"/>
            </svg>
          </span>
          <input type="text" id="searchInput" placeholder="Search room, office, or facility..." autocomplete="off" />
          <button type="button" class="search-clear" id="searchClear" aria-label="Clear search">✕</button>
        </div>
        <div class="search-results" id="searchResults"></div>
      </div>

      <!-- 4 Quick-Access Tiles -->
      <nav class="categories-bar" aria-label="Campus destinations">
        <button type="button" class="cat-btn" data-cat="main" id="btnMainBldg">
          <div class="cat-icon-box" aria-hidden="true">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M3 21h18"/>
              <path d="M5 21V7l7-4 7 4v14"/>
              <path d="M9 21v-5h6v5"/>
              <path d="M9 10h.01"/><path d="M15 10h.01"/><path d="M12 10h.01"/>
            </svg>
          </div>
          <span class="cat-label">Main Building</span>
        </button>

        <button type="button" class="cat-btn" data-cat="annex" id="btnAnnexBldg">
          <div class="cat-icon-box" aria-hidden="true">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect width="14" height="19" x="5" y="2" rx="2"/>
              <path d="M9 21v-4h6v4"/>
              <path d="M9 7h.01"/><path d="M15 7h.01"/>
              <path d="M9 11h.01"/><path d="M15 11h.01"/>
              <path d="M9 15h.01"/><path d="M15 15h.01"/>
            </svg>
          </div>
          <span class="cat-label">Annex Building</span>
        </button>

        <button type="button" class="cat-btn" data-cat="research" id="btnResearchBldg">
          <div class="cat-icon-box" aria-hidden="true">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M9 3h6"/>
              <path d="M10 3v6.5L5.2 18a2 2 0 0 0 1.7 3h10.2a2 2 0 0 0 1.7-3L14 9.5V3"/>
              <path d="M8.5 14h7"/>
            </svg>
          </div>
          <span class="cat-label">Research Building</span>
        </button>

        <button type="button" class="cat-btn" data-cat="others" id="btnOthers">
          <div class="cat-icon-box" aria-hidden="true">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="5" cy="12" r="1.5" fill="currentColor"/>
              <circle cx="12" cy="12" r="1.5" fill="currentColor"/>
              <circle cx="19" cy="12" r="1.5" fill="currentColor"/>
            </svg>
          </div>
          <span class="cat-label">Others</span>
        </button>
      </nav>

      <!-- "Others" Facilities Drawer -->
      <section class="others-drawer" id="othersDrawer" aria-label="Other campus facilities">
        <div class="others-header">
          <span class="others-title">Campus Facilities</span>
          <button type="button" class="others-close-btn" id="othersCloseBtn">✕ Close</button>
        </div>
        <div class="others-grid" id="othersGrid"></div>
      </section>

      <!-- Map Card -->
      <section class="map-card">
        <div class="map-card-top">
          <div class="map-title-group">
            <button type="button" class="back-campus-btn" id="backCampusBtn" title="Back to Campus Map">
              ← Campus
            </button>
            <div class="section-title" id="sectionTitle">Campus Map (Main)</div>
          </div>
        </div>

        <!-- Floor Switcher Pills (Main & Annex only) -->
        <div class="floor-pills-row" id="floorPillsRow">
          <button type="button" class="floor-pill-btn active" data-floor="1f">1st Floor</button>
          <button type="button" class="floor-pill-btn" data-floor="2f">2nd Floor</button>
          <button type="button" class="floor-pill-btn" data-floor="3f">3rd Floor</button>
        </div>

        <!-- In-Floor Turn-by-Turn Route Bar -->
        <div class="floor-nav-bar" id="floorNavBar">
          <div class="floor-nav-row">
            <div class="floor-nav-field">
              <label for="floorFromSelect">From</label>
              <select id="floorFromSelect" class="floor-nav-select"></select>
            </div>
            <div class="floor-nav-field">
              <label for="floorToSelect">To</label>
              <select id="floorToSelect" class="floor-nav-select"></select>
            </div>
            <button type="button" class="floor-nav-swap" id="floorSwapBtn" title="Swap From &amp; To">⇄</button>
          </div>
        </div>

        <!-- Interactive Map Viewport -->
        <div class="map-stage" id="mapStage">
          <div class="fs-top-bar">
            <div class="fs-title-pill" id="fsTitlePill">Campus Map (Main)</div>
            <button type="button" class="fs-close-btn" id="fsCloseBtn">✕ Exit Fullscreen</button>
          </div>

          <div class="map-transform" id="mapTransform">
            <img src="assets/campus-site-plan.png" alt="EARIST Campus Map" class="map-image" id="mapImage" />
            <svg class="map-overlay" id="mapOverlay" viewBox="0 0 1539 1199" preserveAspectRatio="xMidYMid meet"></svg>
          </div>

          <div class="map-hint-pill" id="mapHintPill">Tap any building to explore</div>

          <!-- Bottom-Right Floating Zoom Controls (+, -, Recenter) -->
          <div class="floating-zoom">
            <button type="button" id="zoomInBtn" title="Zoom In" aria-label="Zoom In">+</button>
            <button type="button" id="zoomOutBtn" title="Zoom Out" aria-label="Zoom Out">−</button>
            <button type="button" id="zoomResetBtn" title="Recenter Map" aria-label="Recenter Map">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <circle cx="12" cy="12" r="7"/>
                <circle cx="12" cy="12" r="2" fill="currentColor"/>
                <line x1="12" y1="2" x2="12" y2="5"/>
                <line x1="12" y1="19" x2="12" y2="22"/>
                <line x1="2" y1="12" x2="5" y2="12"/>
                <line x1="19" y1="12" x2="22" y2="12"/>
              </svg>
            </button>
          </div>
        </div>
      </section>

      <!-- View Full Map Button -->
      <button type="button" class="view-full-btn" id="viewFullMapBtn">
        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <path d="M15 3h6v6"/>
          <path d="M9 21H3v-6"/>
          <path d="M21 3l-7 7"/>
          <path d="M3 21l7-7"/>
        </svg>
        View Full Map
      </button>

      <!-- Compact Helpful Footer Strip -->
      <div class="footer-tip-strip" id="footerTipStrip">
        <span>Main Gate Entrance • Pinch to zoom</span>
        <a href="qr.html" class="qr-mini-link" title="Open QR Code Poster">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <rect width="5" height="5" x="3" y="3" rx="1"/>
            <rect width="5" height="5" x="16" y="3" rx="1"/>
            <rect width="5" height="5" x="3" y="16" rx="1"/>
            <path d="M21 16h-3a2 2 0 0 0-2 2v3"/>
            <path d="M21 21v.01"/>
            <path d="M12 7v3a2 2 0 0 1-2 2H7"/>
            <path d="M3 12h.01"/><path d="M12 3h.01"/><path d="M12 16v.01"/>
            <path d="M16 12h1"/><path d="M21 12v.01"/><path d="M12 21v-1"/>
          </svg>
          QR Code
        </a>
      </div>

      <!-- Selected Details Card (contextual) -->
      <section class="selected-card" id="selectedCard">
        <div class="selected-card-top">
          <div>
            <span class="room-code-pill" id="selectedBadge">CAMPUS</span>
            <h2 id="selectedTitle">Destination Name</h2>
            <p id="selectedLocation">Location • Floor • Wing</p>
          </div>
          <button type="button" class="selected-close-btn" id="selectedCloseBtn" aria-label="Close details">✕</button>
        </div>
        <div class="selected-card-actions" id="selectedActions"></div>
      </section>

      <!-- Floor Room Directory -->
      <section class="directory-section" id="directorySection">
        <div class="directory-header">
          <h3 id="directoryTitle">Floor Directory</h3>
          <span class="directory-count" id="directoryCount"></span>
        </div>
        <div class="room-list" id="directoryBody"></div>
      </section>
    </main>

    <footer class="site-footer">
      <div class="footer-copy">&copy; 2027 EARIST Cavite Wayfinding Map. All Rights Reserved.</div>
      <div class="footer-credit">Made with Love for the EARIST Community by Drafting Technology</div>
      <div class="footer-inst">Eulogio &ldquo;Amang&rdquo; Rodriguez Institute of Science and Technology &mdash; Cavite Campus, General Mariano Alvarez, Cavite</div>
      <div class="footer-disclaimer">
        For general campus wayfinding and informational purposes only. Room assignments, pathways, and campus layouts may change without prior notice.
      </div>
      <div class="footer-legal-links">
        <button type="button" class="legal-link-btn" data-legal="terms">Terms of Use</button>
        <span aria-hidden="true">&bull;</span>
        <button type="button" class="legal-link-btn" data-legal="privacy">Privacy Notice</button>
      </div>
    </footer>
  </div>

  <!-- Legal Modal -->
  <div class="legal-modal" id="legalModal" role="dialog" aria-modal="true" aria-labelledby="legalModalTitle">
    <div class="legal-modal-card">
      <div class="legal-modal-head">
        <h3 id="legalModalTitle">Legal Notice</h3>
        <button type="button" class="legal-modal-close" id="legalModalClose" aria-label="Close legal notice">✕</button>
      </div>
      <div class="legal-modal-body" id="legalModalBody"></div>
    </div>
  </div>

  <script>
    const CAMPUS_VIEW_W = 1539;
    const CAMPUS_VIEW_H = 1199;
    const FLOOR_VIEW_W = 1684;
    const FLOOR_VIEW_H = 1190;
    const MAIN_GATE = { x: 600, y: 1048 };

    // Pixel-calibrated Buildings & Floors
    const BUILDINGS = {
      main: {
        id: "main",
        name: "Main Building",
        subtitle: "Hall A & Hall B • 3 Floors",
        hotspots: [
          { x: 609, y: 978, w: 452, h: 55, label: "Main Bldg Hall A" },
          { x: 1030, y: 768, w: 50, h: 238, label: "Main Bldg Hall B" }
        ],
        pin: { x: 830, y: 1005 },
        floors: {
          "1f": {
            id: "1f",
            label: "1st Floor",
            src: "assets/floor-main-1f.png",
            viewBox: "0 0 1684 1190",
            nav: { entry: { x: 808, y: 874, label: "Main 1F Entrance / Stairs" }, corridorY: 874, hallBX: 1425 },
            rooms: [
              { number: "ROTC", name: "ROTC Quarter", location: "Main Building • 1st Floor • West Wing (Hall A)", box: { x: 668, y: 856, w: 92, h: 36 } },
              { number: "STORAGE", name: "Storage Room", location: "Main Building • 1st Floor • West Hallway (Hall A)", box: { x: 668, y: 896, w: 116, h: 100 } },
              { number: "T&B 1F", name: "Comfort Rooms (CR / T&B)", location: "Main Building • 1st Floor • Central Hall A", box: { x: 836, y: 896, w: 116, h: 100 } },
              { number: "MB 101", name: "Classroom MB 101", location: "Main Building • 1st Floor • South Hallway (Hall A)", box: { x: 956, y: 896, w: 116, h: 100 } },
              { number: "MB 102", name: "Classroom MB 102", location: "Main Building • 1st Floor • South Hallway (Hall A)", box: { x: 1076, y: 896, w: 116, h: 100 } },
              { number: "MB 103", name: "Classroom MB 103", location: "Main Building • 1st Floor • South Hallway (Hall A)", box: { x: 1196, y: 896, w: 112, h: 100 } },
              { number: "MB 104", name: "Auto Diesel Shop (MB 104)", location: "Main Building • 1st Floor • East Wing (Hall B)", box: { x: 1448, y: 628, w: 100, h: 112 } },
              { number: "MB 105", name: "Classroom MB 105", location: "Main Building • 1st Floor • East Wing (Hall B)", box: { x: 1448, y: 512, w: 100, h: 112 } },
              { number: "MB RM 106", name: "Electrical Room (MB RM 106)", location: "Main Building • 1st Floor • East Wing (Hall B)", box: { x: 1448, y: 396, w: 100, h: 112 } },
              { number: "MB R107", name: "Electronics Laboratory (MB R107)", location: "Main Building • 1st Floor • East Wing North (Hall B)", box: { x: 1448, y: 224, w: 112, h: 168 } },
              { number: "STAGE", name: "Quadrangle Stage", location: "Campus Grounds • North of Main Building Hall A", box: { x: 780, y: 190, w: 190, h: 86 } }
            ]
          },
          "2f": {
            id: "2f",
            label: "2nd Floor",
            src: "assets/floor-main-2f.png",
            viewBox: "0 0 1684 1190",
            nav: { entry: { x: 472, y: 815, label: "Main 2F West Stairs" }, corridorY: 815, hallBX: 1468, upperX: 544, upperY: 815 },
            rooms: [
              { number: "FACULTY BLDG", name: "Faculty Building", location: "Main Building • 2nd Floor Adjacent • West Wing", box: { x: 100, y: 668, w: 236, h: 176 } },
              { number: "ADMISSION", name: "Admission Office", location: "Main Building • 2nd Floor • Upper Hall A (Offices)", box: { x: 492, y: 716, w: 50, h: 84 } },
              { number: "CONF", name: "Conference Room", location: "Main Building • 2nd Floor • Upper Hall A (Offices)", box: { x: 544, y: 716, w: 50, h: 84 } },
              { number: "ADMIN", name: "Admin Office", location: "Main Building • 2nd Floor • Upper Hall A (Offices)", box: { x: 596, y: 716, w: 52, h: 84 } },
              { number: "REGISTRAR", name: "Registrar Office", location: "Main Building • 2nd Floor • Lower Hall A (West)", box: { x: 540, y: 832, w: 100, h: 84 } },
              { number: "MB 201", name: "Speech Laboratory (MB 201)", location: "Main Building • 2nd Floor • South Hallway (Hall A)", box: { x: 644, y: 832, w: 100, h: 84 } },
              { number: "MB 202", name: "Property Management (MB 202)", location: "Main Building • 2nd Floor • South Hallway (Hall A)", box: { x: 748, y: 832, w: 96, h: 84 } },
              { number: "MB 203", name: "Classroom MB 203", location: "Main Building • 2nd Floor • South Hallway (Hall A)", box: { x: 848, y: 832, w: 92, h: 84 } },
              { number: "MB 204", name: "Classroom MB 204", location: "Main Building • 2nd Floor • South Hallway (Hall A)", box: { x: 980, y: 832, w: 100, h: 84 } },
              { number: "MB 205", name: "Classroom MB 205", location: "Main Building • 2nd Floor • South Hallway (Hall A)", box: { x: 1084, y: 832, w: 96, h: 84 } },
              { number: "MB 206", name: "Classroom MB 206", location: "Main Building • 2nd Floor • South Hallway (Hall A)", box: { x: 1184, y: 832, w: 92, h: 84 } },
              { number: "MB 207", name: "Classroom MB 207", location: "Main Building • 2nd Floor • South-East Hall A", box: { x: 1280, y: 832, w: 96, h: 84 } },
              { number: "T&B 2F", name: "Comfort Room (CR / T&B)", location: "Main Building • 2nd Floor • Corner Junction", box: { x: 1432, y: 788, w: 96, h: 92 } },
              { number: "MB 208", name: "Food Tech. Room (MB 208)", location: "Main Building • 2nd Floor • East Wing (Hall B)", box: { x: 1488, y: 612, w: 84, h: 92 } },
              { number: "MB 209", name: "Food Tech. Room (MB 209)", location: "Main Building • 2nd Floor • East Wing (Hall B)", box: { x: 1488, y: 516, w: 84, h: 92 } },
              { number: "MB 210", name: "BSE Lab (MB 210)", location: "Main Building • 2nd Floor • East Wing (Hall B)", box: { x: 1488, y: 420, w: 84, h: 92 } },
              { number: "MB 211", name: "Drafting Tech. (MB Room 211)", location: "Main Building • 2nd Floor • East Wing North (Hall B)", box: { x: 1488, y: 276, w: 92, h: 140 } }
            ]
          },
          "3f": {
            id: "3f",
            label: "3rd Floor",
            src: "assets/floor-main-3f.png",
            viewBox: "0 0 1684 1190",
            nav: { entry: { x: 505, y: 795, label: "Main 3F West Stairs" }, corridorY: 795, hallBX: 1442, upperX: 636, upperY: 795 },
            rooms: [
              { number: "FACULTY BLDG", name: "Faculty Building", location: "Main Building • 3rd Floor Adjacent • West Wing", box: { x: 164, y: 660, w: 232, h: 164 } },
              { number: "LIB-UG", name: "Library (Undergraduate Prog.)", location: "Main Building • 3rd Floor • Upper Hall A", box: { x: 588, y: 704, w: 96, h: 76 } },
              { number: "INET", name: "Internet Room", location: "Main Building • 3rd Floor • West Wing (Near Canopy)", box: { x: 528, y: 835, w: 56, h: 95 } },
              { number: "LIB-GR", name: "Library (Graduate Prog.)", location: "Main Building • 3rd Floor • South Hallway (West)", box: { x: 588, y: 812, w: 96, h: 84 } },
              { number: "MB 301", name: "Graduate Office (MB 301)", location: "Main Building • 3rd Floor • South Hallway", box: { x: 688, y: 812, w: 84, h: 80 } },
              { number: "MB 302", name: "Computer Lab (MB 302)", location: "Main Building • 3rd Floor • South Hallway", box: { x: 776, y: 812, w: 88, h: 76 } },
              { number: "MB 303", name: "Computer Lab (MB 303)", location: "Main Building • 3rd Floor • South Hallway", box: { x: 868, y: 812, w: 88, h: 76 } },
              { number: "MPH 1", name: "Multi-Purpose Hall 1", location: "Main Building • 3rd Floor • South Hallway", box: { x: 996, y: 812, w: 88, h: 76 } },
              { number: "MPH 2", name: "Multi-Purpose Hall 2", location: "Main Building • 3rd Floor • South Hallway", box: { x: 1088, y: 812, w: 86, h: 76 } },
              { number: "MPH 3", name: "Multi-Purpose Hall 3", location: "Main Building • 3rd Floor • South-East Hall A", box: { x: 1178, y: 812, w: 86, h: 76 } },
              { number: "T&B 3F", name: "Comfort Room (CR / T&B)", location: "Main Building • 3rd Floor • Corner Junction", box: { x: 1410, y: 770, w: 88, h: 86 } },
              { number: "MB 304", name: "Criminology Lab (MB 304)", location: "Main Building • 3rd Floor • East Wing (Hall B)", box: { x: 1460, y: 608, w: 76, h: 88 } },
              { number: "MB 305", name: "Forensic Lab (MB 305)", location: "Main Building • 3rd Floor • East Wing (Hall B)", box: { x: 1460, y: 520, w: 76, h: 84 } },
              { number: "MB 306", name: "Biology Lab (MB 306)", location: "Main Building • 3rd Floor • East Wing (Hall B)", box: { x: 1460, y: 412, w: 80, h: 104 } },
              { number: "MB 307", name: "Chemistry Lab (MB 307)", location: "Main Building • 3rd Floor • East Wing North", box: { x: 1460, y: 300, w: 84, h: 108 } }
            ]
          }
        }
      },
      annex: {
        id: "annex",
        name: "Annex Building",
        subtitle: "West Wing • 3 Floors",
        hotspots: [
          { x: 612, y: 657, w: 52, h: 267, label: "Annex Building" }
        ],
        pin: { x: 638, y: 790 },
        floors: {
          "1f": {
            id: "1f",
            label: "1st Floor",
            src: "assets/floor-annex-1f.png",
            viewBox: "0 0 1684 1190",
            nav: { entry: { x: 120, y: 562, label: "Annex 1F West Stairs" }, corridorY: 562, eastX: 980 },
            rooms: [
              { number: "T&B A1F", name: "Comfort Room (CR / T&B)", location: "Annex Building • 1st Floor • West End", box: { x: 98, y: 408, w: 82, h: 42 } },
              { number: "OSA", name: "Office of Student Affairs (OSA)", location: "Annex Building • 1st Floor • West Wing", box: { x: 184, y: 408, w: 68, h: 124 } },
              { number: "ISG", name: "Institutional Student Gov. (ISG)", location: "Annex Building • 1st Floor • West Wing", box: { x: 254, y: 408, w: 70, h: 124 } },
              { number: "GUIDANCE", name: "Guidance & Publication Office", location: "Annex Building • 1st Floor • Central Wing", box: { x: 328, y: 412, w: 140, h: 120 } },
              { number: "ANNEX 101", name: "Classroom Annex 101", location: "Annex Building • 1st Floor • Central Wing", box: { x: 472, y: 412, w: 140, h: 124 } },
              { number: "ANNEX 102", name: "Classroom Annex 102", location: "Annex Building • 1st Floor • East-Central", box: { x: 616, y: 412, w: 144, h: 124 } },
              { number: "ANNEX 103", name: "Classroom Annex 103", location: "Annex Building • 1st Floor • East Wing", box: { x: 764, y: 412, w: 148, h: 124 } },
              { number: "CLINIC", name: "Campus Clinic", location: "Annex Grounds • Adjacent Courtyard • East", box: { x: 1204, y: 612, w: 344, h: 204 } },
              { number: "RESEARCH BLDG", name: "Research Building", location: "Annex Grounds • Courtyard (Behind Annex)", box: { x: 1112, y: 876, w: 176, h: 144 } }
            ]
          },
          "2f": {
            id: "2f",
            label: "2nd Floor",
            src: "assets/floor-annex-2f.png",
            viewBox: "0 0 1684 1190",
            nav: { entry: { x: 145, y: 526, label: "Annex 2F West Stairs" }, corridorY: 526, eastX: 990 },
            rooms: [
              { number: "T&B A2F", name: "Comfort Room (CR / T&B)", location: "Annex Building • 2nd Floor • West End", box: { x: 116, y: 368, w: 96, h: 38 } },
              { number: "ANNEX 201", name: "Classroom Annex 201", location: "Annex Building • 2nd Floor • West Wing", box: { x: 220, y: 372, w: 140, h: 128 } },
              { number: "ANNEX 202", name: "Classroom Annex 202", location: "Annex Building • 2nd Floor • West-Central", box: { x: 364, y: 372, w: 140, h: 128 } },
              { number: "ANNEX 203", name: "Classroom Annex 203", location: "Annex Building • 2nd Floor • Central Wing", box: { x: 508, y: 372, w: 140, h: 128 } },
              { number: "ANNEX 204", name: "Classroom Annex 204", location: "Annex Building • 2nd Floor • East-Central", box: { x: 652, y: 372, w: 144, h: 128 } },
              { number: "ANNEX 205", name: "Classroom Annex 205", location: "Annex Building • 2nd Floor • East Wing", box: { x: 800, y: 372, w: 144, h: 128 } }
            ]
          },
          "3f": {
            id: "3f",
            label: "3rd Floor",
            src: "assets/floor-annex-3f.png",
            viewBox: "0 0 1684 1190",
            nav: { entry: { x: 285, y: 918, label: "Annex 3F West Stairs" }, corridorY: 918, eastX: 1160 },
            rooms: [
              { number: "T&B A3F", name: "Comfort Room (CR / T&B)", location: "Annex Building • 3rd Floor • West End", box: { x: 266, y: 760, w: 98, h: 38 } },
              { number: "ANNEX 301", name: "Classroom Annex 301", location: "Annex Building • 3rd Floor • West Wing", box: { x: 372, y: 764, w: 140, h: 128 } },
              { number: "ANNEX 302", name: "Classroom Annex 302", location: "Annex Building • 3rd Floor • Central Wing", box: { x: 516, y: 764, w: 140, h: 128 } },
              { number: "BLEACHERS", name: "Bleachers / Evacuation Site 6", location: "Annex Grounds • Courtyard East", box: { x: 1208, y: 184, w: 108, h: 456 } },
              { number: "NEW CANTEEN", name: "New Canteen (Stalls 1–3)", location: "Annex Grounds • Adjacent Grounds • East", box: { x: 1458, y: 126, w: 40, h: 564 } }
            ]
          }
        }
      }
    };

    // SVG Icons for Facilities
    const FAC_ICONS = {
      canteen: `<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2"/><path d="M7 2v20"/><path d="M21 15V2a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7"/></svg>`,
      clinic: `<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="3"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>`,
      quadrangle: `<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="12" x="3" y="6" rx="2"/><line x1="12" y1="6" x2="12" y2="18"/><circle cx="12" cy="12" r="2.5"/></svg>`,
      cr: `<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="6" r="2"/><path d="M7 11h4l1 5h-1.5v5h-3v-5H6l1-5Z"/><circle cx="17" cy="6" r="2"/><path d="M15 11h4v5h-1v5h-2v-5h-1v-5Z"/></svg>`,
      court: `<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M3.6 9h16.8"/><path d="M3.6 15h16.8"/><path d="M12 3a14 14 0 0 0 0 18"/><path d="M12 3a14 14 0 0 1 0 18"/></svg>`,
      stage: `<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 18h20"/><path d="M4 18V8l8-4 8 4v10"/><path d="M9 18v-5h6v5"/></svg>`,
      parking: `<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="3"/><path d="M9 17V7h4a3 3 0 0 1 0 6H9"/></svg>`,
      bleachers: `<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18h18"/><path d="M5 14h14"/><path d="M7 10h10"/><path d="M9 6h6"/></svg>`,
      faculty: `<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18"/><path d="M5 21V7l7-4 7 4v14"/></svg>`,
      criminology: `<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="12" x="3" y="4" rx="2"/><line x1="2" y1="20" x2="22" y2="20"/></svg>`
    };

    // Research Building (dedicated 3rd top tile)
    const RESEARCH_FACILITY = {
      id: "research",
      name: "Research Building",
      category: "Academics & Research",
      location: "East Courtyard (North-East of Clinic)",
      box: { x: 729, y: 681, w: 51, h: 60 },
      pin: { x: 754, y: 711 },
      walk: [
        { x: 600, y: 1048 },
        { x: 600, y: 936 },
        { x: 673, y: 936 },
        { x: 673, y: 748 },
        { x: 735, y: 748 },
        { x: 754, y: 728 }
      ],
      directions: [
        "1. Enter through Main Gate and walk north to the courtyard stone walkway.",
        "2. Turn right (east) and follow the path past the Annex Building corner.",
        "3. Turn left (north) up the Annex east walkway past the Clinic.",
        "4. Turn right into the courtyard to arrive at Research Building."
      ]
    };

    // Other Campus Facilities (Canteen, Clinic, Quadrangle, CR first)
    const OTHER_FACILITIES = [
      {
        id: "canteen",
        name: "Canteen",
        icon: FAC_ICONS.canteen,
        category: "Dining / New Canteen",
        location: "North-West Grounds (Above Bleachers)",
        box: { x: 416, y: 574, w: 192, h: 28 },
        pin: { x: 512, y: 586 },
        walk: [
          { x: 600, y: 1048 },
          { x: 600, y: 936 },
          { x: 673, y: 936 },
          { x: 673, y: 648 },
          { x: 580, y: 648 },
          { x: 580, y: 605 },
          { x: 512, y: 596 }
        ],
        directions: [
          "1. Enter through Main Gate and walk north to the main courtyard walkway.",
          "2. Turn right (east), then left (north) along the Annex Building walkway.",
          "3. At the north end of Annex, turn left (west) past Criminology/Tech Bldg.",
          "4. Walk past the Bleachers area to reach the New Canteen stalls."
        ]
      },
      {
        id: "clinic",
        name: "Clinic",
        icon: FAC_ICONS.clinic,
        category: "Health & Wellness",
        location: "Central Courtyard (East of Annex Bldg)",
        box: { x: 693, y: 723, w: 28, h: 34 },
        pin: { x: 707, y: 740 },
        walk: [
          { x: 600, y: 1048 },
          { x: 600, y: 936 },
          { x: 673, y: 936 },
          { x: 673, y: 740 },
          { x: 695, y: 740 }
        ],
        directions: [
          "1. Enter through Main Gate and walk north to the courtyard walkway.",
          "2. Turn right (east), then turn left (north) along the Annex Building path.",
          "3. Continue past the garden & bleachers; the Clinic is on your right."
        ]
      },
      {
        id: "quadrangle",
        name: "Quadrangle",
        icon: FAC_ICONS.quadrangle,
        category: "Open Grounds",
        location: "Center Campus (Between Court & Parking)",
        box: { x: 822, y: 798, w: 62, h: 120 },
        pin: { x: 853, y: 858 },
        walk: [
          { x: 600, y: 1048 },
          { x: 600, y: 936 },
          { x: 853, y: 936 },
          { x: 853, y: 858 }
        ],
        directions: [
          "1. Enter through Main Gate and walk north onto the courtyard stone walkway.",
          "2. Turn right (east) along the walkway in front of Main Building Hall A.",
          "3. Turn left (north) between the Court and Parking Lot into the Quadrangle."
        ]
      },
      {
        id: "cr",
        name: "CR (Comfort Rooms)",
        icon: FAC_ICONS.cr,
        category: "Restrooms",
        location: "Main Bldg (1F–3F) & Annex Bldg (1F–3F)",
        box: { x: 715, y: 978, w: 65, h: 55 },
        pin: { x: 745, y: 1005 },
        walk: [
          { x: 600, y: 1048 },
          { x: 600, y: 936 },
          { x: 745, y: 936 },
          { x: 745, y: 992 }
        ],
        quickJumps: [
          { buildingId: "main", floorId: "1f", roomNumber: "T&B 1F", label: "Main 1F CR Map" },
          { buildingId: "annex", floorId: "1f", roomNumber: "T&B A1F", label: "Annex 1F CR Map" }
        ],
        directions: [
          "1. Enter Main Gate and head north to the walkway in front of Main Building Hall A.",
          "2. Turn right (east) and enter Central Hall A for the ground-floor Comfort Rooms.",
          "3. Comfort Rooms are also available on Main 2F/3F (corner junction) and Annex 1F–3F (west end)."
        ]
      },
      {
        id: "court",
        name: "Court",
        icon: FAC_ICONS.court,
        category: "Sports Grounds",
        location: "West Side of Quadrangle",
        box: { x: 734, y: 759, w: 80, h: 158 },
        pin: { x: 774, y: 838 },
        walk: [
          { x: 600, y: 1048 },
          { x: 600, y: 936 },
          { x: 774, y: 936 },
          { x: 774, y: 838 }
        ],
        directions: [
          "1. Enter through Main Gate and walk north to the courtyard walkway.",
          "2. Turn right (east) past the Annex walkway.",
          "3. Turn left (north) directly onto the Campus Court."
        ]
      },
      {
        id: "stage",
        name: "Stage",
        icon: FAC_ICONS.stage,
        category: "Events & Assembly",
        location: "North End of Quadrangle",
        box: { x: 825, y: 762, w: 57, h: 27 },
        pin: { x: 853, y: 775 },
        walk: [
          { x: 600, y: 1048 },
          { x: 600, y: 936 },
          { x: 853, y: 936 },
          { x: 853, y: 780 }
        ],
        directions: [
          "1. Enter through Main Gate and walk north to the courtyard walkway.",
          "2. Turn right (east) along Hall A walkway to the Quadrangle entrance.",
          "3. Walk straight north across the Quadrangle to the Stage."
        ]
      },
      {
        id: "parking",
        name: "Parking Lot",
        icon: FAC_ICONS.parking,
        category: "Campus Parking",
        location: "East Side of Quadrangle (Near Hall B)",
        box: { x: 889, y: 759, w: 80, h: 158 },
        pin: { x: 929, y: 838 },
        walk: [
          { x: 600, y: 1048 },
          { x: 600, y: 936 },
          { x: 929, y: 936 },
          { x: 929, y: 838 }
        ],
        directions: [
          "1. Enter through Main Gate and walk north to the courtyard walkway.",
          "2. Turn right (east) past the Court and Quadrangle.",
          "3. Turn left (north) into the Parking Lot beside Hall B."
        ]
      },
      {
        id: "bleachers",
        name: "Bleachers",
        icon: FAC_ICONS.bleachers,
        category: "Sports & Assembly",
        location: "West Grounds (Below New Canteen)",
        box: { x: 441, y: 678, w: 141, h: 30 },
        pin: { x: 512, y: 693 },
        walk: [
          { x: 600, y: 1048 },
          { x: 600, y: 936 },
          { x: 673, y: 936 },
          { x: 673, y: 648 },
          { x: 580, y: 648 },
          { x: 580, y: 693 },
          { x: 520, y: 693 }
        ],
        directions: [
          "1. Enter through Main Gate and walk north to the courtyard walkway.",
          "2. Turn right (east), then left (north) along the Annex Building path.",
          "3. At the north end of Annex, turn left (west) and continue south to the Bleachers."
        ]
      },
      {
        id: "faculty",
        name: "Faculty Building",
        icon: FAC_ICONS.faculty,
        category: "Faculty Offices",
        location: "South-West Wing (Left of Main Gate)",
        box: { x: 483, y: 927, w: 105, h: 75 },
        pin: { x: 535, y: 964 },
        walk: [
          { x: 600, y: 1048 },
          { x: 600, y: 964 },
          { x: 560, y: 964 }
        ],
        directions: [
          "1. Enter through Main Gate.",
          "2. Turn immediately left (west) before the Hall A canopy.",
          "3. Arrive at the Faculty Building on your left."
        ]
      },
      {
        id: "criminology",
        name: "Criminology / Tech Bldg",
        icon: FAC_ICONS.criminology,
        category: "Technical & Criminology",
        location: "North of Annex Building",
        box: { x: 621, y: 594, w: 39, h: 48 },
        pin: { x: 640, y: 618 },
        walk: [
          { x: 600, y: 1048 },
          { x: 600, y: 936 },
          { x: 673, y: 936 },
          { x: 673, y: 618 },
          { x: 656, y: 618 }
        ],
        directions: [
          "1. Enter through Main Gate and walk north to the courtyard walkway.",
          "2. Turn right (east), then left (north) all the way up the Annex walkway.",
          "3. Turn left at the top end to arrive at the Criminology / Tech Building."
        ]
      }
    ];

    const ALL_FACILITIES = [RESEARCH_FACILITY, ...OTHER_FACILITIES];
    const CLICKABLE_MAP_FACILITIES = ALL_FACILITIES.filter(f => f.id !== "cr");

    // Master Flattened List for Instant Search
    const SEARCH_ENTRIES = [];
    Object.values(BUILDINGS).forEach(bldg => {
      Object.values(bldg.floors).forEach(fl => {
        fl.rooms.forEach(rm => {
          SEARCH_ENTRIES.push({
            type: "room",
            key: `${bldg.id}-${fl.id}-${rm.number}`,
            roomNumber: rm.number,
            title: `${rm.number} — ${rm.name}`,
            subtitle: rm.location,
            buildingId: bldg.id,
            floorId: fl.id,
            category: `${bldg.name.split(" ")[0]} ${fl.id.toUpperCase()}`
          });
        });
      });
    });
    ALL_FACILITIES.forEach(fac => {
      SEARCH_ENTRIES.push({
        type: "facility",
        key: fac.id,
        title: fac.name,
        subtitle: `${fac.category} • ${fac.location}`,
        facility: fac,
        category: "Facility"
      });
    });

    // Quick-Pick Popular Destinations when Search is focused empty
    const QUICK_PICKS = [
      { type: "room", key: "main-2f-REGISTRAR", label: "Registrar Office", sub: "Main Building • 2nd Floor", badge: "Main 2F" },
      { type: "facility", key: "clinic", label: "Campus Clinic", sub: "Central Courtyard (East of Annex)", badge: "Facility" },
      { type: "facility", key: "canteen", label: "New Canteen", sub: "North-West Grounds (Above Bleachers)", badge: "Facility" },
      { type: "room", key: "main-3f-LIB-UG", label: "Library (Undergraduate)", sub: "Main Building • 3rd Floor", badge: "Main 3F" },
      { type: "room", key: "annex-1f-OSA", label: "OSA (Student Affairs)", sub: "Annex Building • 1st Floor", badge: "Annex 1F" },
      { type: "facility", key: "cr", label: "CR (Comfort Rooms)", sub: "Main Bldg & Annex Bldg", badge: "Restroom" },
      { type: "room", key: "main-2f-ADMIN", label: "Admin Office", sub: "Main Building • 2nd Floor", badge: "Main 2F" }
    ];

    // App State
    const state = {
      view: "campus",          // "campus" | "floor"
      building: null,          // "main" | "annex" | null
      floor: "1f",             // "1f" | "2f" | "3f"
      facility: null,
      selectedRoom: null,
      floorStartRoom: "__entry__",
      scale: 1,
      panX: 0,
      panY: 0,
      activePointers: new Map(),
      dragCandidate: null,     // { id, downX, downY, startPanX, startPanY, activated }
      pinchStart: null,        // { dist, scale, panX, panY }
      lastTapTime: 0,
      lastTapPos: null
    };

    // DOM References
    const mapStage = document.getElementById("mapStage");
    const mapTransform = document.getElementById("mapTransform");
    const mapImage = document.getElementById("mapImage");
    const mapOverlay = document.getElementById("mapOverlay");
    const sectionTitle = document.getElementById("sectionTitle");
    const fsTitlePill = document.getElementById("fsTitlePill");
    const backCampusBtn = document.getElementById("backCampusBtn");
    const floorPillsRow = document.getElementById("floorPillsRow");
    const floorNavBar = document.getElementById("floorNavBar");
    const floorFromSelect = document.getElementById("floorFromSelect");
    const floorToSelect = document.getElementById("floorToSelect");
    const floorSwapBtn = document.getElementById("floorSwapBtn");
    const searchInput = document.getElementById("searchInput");
    const searchClear = document.getElementById("searchClear");
    const searchResults = document.getElementById("searchResults");
    const othersDrawer = document.getElementById("othersDrawer");
    const othersGrid = document.getElementById("othersGrid");
    const othersCloseBtn = document.getElementById("othersCloseBtn");
    const selectedCard = document.getElementById("selectedCard");
    const selectedBadge = document.getElementById("selectedBadge");
    const selectedTitle = document.getElementById("selectedTitle");
    const selectedLocation = document.getElementById("selectedLocation");
    const selectedActions = document.getElementById("selectedActions");
    const selectedCloseBtn = document.getElementById("selectedCloseBtn");
    const directorySection = document.getElementById("directorySection");
    const directoryTitle = document.getElementById("directoryTitle");
    const directoryCount = document.getElementById("directoryCount");
    const directoryBody = document.getElementById("directoryBody");
    const viewFullMapBtn = document.getElementById("viewFullMapBtn");
    const fsCloseBtn = document.getElementById("fsCloseBtn");
    const mapHintPill = document.getElementById("mapHintPill");
    const footerTipStrip = document.getElementById("footerTipStrip");

    function updateActiveCategoryTile(activeCat = null) {
      document.querySelectorAll(".cat-btn").forEach(btn => {
        btn.classList.toggle("active", btn.dataset.cat === activeCat);
      });
    }

    function updateHelperChrome() {
      const hasSelection = selectedCard.classList.contains("show");
      const showCampusHint = state.view === "campus" && !hasSelection;
      mapHintPill.classList.toggle("hidden", !showCampusHint);
    }

    // Initialize "Others" Grid
    function initOthersGrid() {
      othersGrid.innerHTML = OTHER_FACILITIES.map(fac => `
        <button type="button" class="other-facility-btn" data-fac="${fac.id}">
          ${fac.icon}
          <span>${fac.name}</span>
        </button>
      `).join("");

      othersGrid.querySelectorAll(".other-facility-btn").forEach(btn => {
        btn.addEventListener("click", () => {
          const fac = OTHER_FACILITIES.find(f => f.id === btn.dataset.fac);
          if (fac) selectFacility(fac, "others");
        });
      });
    }

    // Exact Transform Math for object-fit: contain & preserveAspectRatio="xMidYMid meet"
    function getFitScale(viewBoxW, viewBoxH) {
      const stageW = mapStage.clientWidth || 440;
      const stageH = mapStage.clientHeight || 350;
      return Math.min(stageW / viewBoxW, stageH / viewBoxH);
    }

    function applyTransform() {
      mapTransform.style.transform = `translate(${state.panX}px, ${state.panY}px) scale(${state.scale})`;
    }

    function focusPoint(cx, cy, targetScale, viewBoxW, viewBoxH) {
      const fit = getFitScale(viewBoxW, viewBoxH);
      state.scale = targetScale;
      state.panX = (viewBoxW / 2 - cx) * fit * targetScale;
      state.panY = (viewBoxH / 2 - cy) * fit * targetScale;
      applyTransform();
    }

    function zoomToBox(box, viewBoxW = CAMPUS_VIEW_W, viewBoxH = CAMPUS_VIEW_H) {
      const cx = box.x + box.w / 2;
      const cy = box.y + box.h / 2;
      focusPoint(cx, cy, 2.05, viewBoxW, viewBoxH);
    }

    function resetZoom() {
      if (state.view === "campus" && !mapStage.classList.contains("fullscreen")) {
        // Smart default framing on the actual EARIST campus grounds (avoiding empty outer margins)
        focusPoint(760, 770, 1.55, CAMPUS_VIEW_W, CAMPUS_VIEW_H);
      } else {
        state.scale = 1;
        state.panX = 0;
        state.panY = 0;
        applyTransform();
      }
    }

    // Switch View
    function setView(viewType, bldgId = null, floorId = "1f") {
      state.view = viewType;
      state.building = bldgId;
      state.floor = floorId;
      state.selectedRoom = null;
      state.facility = null;
      state.floorStartRoom = "__entry__";
      othersDrawer.classList.remove("show");
      selectedCard.classList.remove("show");

      if (viewType === "campus") {
        sectionTitle.textContent = "Campus Map (Main)";
        fsTitlePill.textContent = "Campus Map (Main)";
        backCampusBtn.classList.remove("show");
        floorPillsRow.classList.remove("show");
        floorNavBar.classList.remove("show");
        directorySection.classList.remove("show");
        mapStage.style.aspectRatio = "4 / 3";
        mapStage.style.minHeight = "350px";
        updateActiveCategoryTile(null);
      } else {
        const bldg = BUILDINGS[bldgId];
        const fl = bldg.floors[floorId];
        const titleStr = `${bldg.name} (${fl.label})`;
        sectionTitle.textContent = titleStr;
        fsTitlePill.textContent = titleStr;
        backCampusBtn.classList.add("show");
        floorPillsRow.classList.add("show");
        floorNavBar.classList.add("show");
        directorySection.classList.add("show");
        mapStage.style.aspectRatio = "1684 / 1190";
        mapStage.style.minHeight = "300px";
        updateActiveCategoryTile(bldgId);

        document.querySelectorAll(".floor-pill-btn").forEach(btn => {
          btn.classList.toggle("active", btn.dataset.floor === floorId);
        });
        renderFloorNavBar();
      }

      updateHelperChrome();
      renderMap();
      renderDirectory();
      requestAnimationFrame(() => resetZoom());
    }

    // Render Map & SVG Overlays
    function renderMap() {
      if (state.view === "campus") {
        mapImage.src = "assets/campus-site-plan.png";
        mapOverlay.setAttribute("viewBox", `0 0 ${CAMPUS_VIEW_W} ${CAMPUS_VIEW_H}`);

        let svgHtml = `
          <defs>
            <radialGradient id="goldGlow" cx="50%" cy="50%" r="50%">
              <stop offset="0%" stop-color="#f59e0b" stop-opacity="0.9"/>
              <stop offset="100%" stop-color="#f59e0b" stop-opacity="0"/>
            </radialGradient>
          </defs>
        `;

        // CR highlight box only when CR is selected (underneath Hall A click target)
        if (state.facility && state.facility.id === "cr") {
          const crBox = state.facility.box;
          svgHtml += `
            <g class="hotspot-fac selected">
              <rect x="${crBox.x}" y="${crBox.y}" width="${crBox.w}" height="${crBox.h}" rx="8" />
            </g>
          `;
        }

        // Building Hotspots (transparent at rest, highlighted on hover)
        Object.values(BUILDINGS).forEach(bldg => {
          bldg.hotspots.forEach(hs => {
            svgHtml += `
              <g class="hotspot-bldg" data-bldg="${bldg.id}">
                <rect x="${hs.x}" y="${hs.y}" width="${hs.w}" height="${hs.h}" rx="8">
                  <title>${bldg.name} — Click to view floor plans</title>
                </rect>
              </g>
            `;
          });
        });

        // Standalone Facility Hotspots (transparent at rest, highlighted on hover/select)
        CLICKABLE_MAP_FACILITIES.forEach(fac => {
          const isSel = state.facility && state.facility.id === fac.id;
          svgHtml += `
            <g class="hotspot-fac ${isSel ? "selected" : ""}" data-fac="${fac.id}">
              <rect x="${fac.box.x}" y="${fac.box.y}" width="${fac.box.w}" height="${fac.box.h}" rx="6">
                <title>${fac.name}</title>
              </rect>
            </g>
          `;
        });

        // Main Gate Pin at (600, 1048) with compact pill below at y=1068 center
        svgHtml += `
          <g transform="translate(${MAIN_GATE.x}, ${MAIN_GATE.y})" id="mainEntrancePin">
            <circle cx="0" cy="0" r="14" fill="rgba(220, 38, 38, 0.25)" class="pulse-ring"/>
            <path d="M 0 0 C -8 -13 -12 -20 -12 -28 A 12 12 0 0 1 12 -28 C 12 -20 8 -13 0 0 Z" fill="#dc2626" stroke="#ffffff" stroke-width="2.2"/>
            <circle cx="0" cy="-28" r="4.5" fill="#ffffff"/>
            <g transform="translate(-48, 9)">
              <rect x="0" y="0" width="96" height="22" rx="6" fill="#450c10" stroke="#ffffff" stroke-width="1.6"/>
              <text x="48" y="14.5" fill="#ffffff" font-size="9.5" font-weight="900" text-anchor="middle" letter-spacing="0.8">MAIN GATE</text>
            </g>
          </g>
        `;

        // Active facility animated walking route & destination pin
        if (state.facility) {
          const fac = state.facility;
          if (fac.walk && fac.walk.length > 1) {
            const pts = fac.walk.map(p => `${p.x},${p.y}`).join(" ");
            svgHtml += `
              <polyline points="${pts}" fill="none" stroke="#ffffff" stroke-width="9" stroke-linecap="round" stroke-linejoin="round" opacity="0.85"/>
              <polyline points="${pts}" fill="none" stroke="#2563eb" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="10 8" class="route-flow"/>
              <circle cx="${fac.walk[0].x}" cy="${fac.walk[0].y}" r="8" fill="#16a34a" stroke="#ffffff" stroke-width="2.5"/>
            `;
          }
          const pillW = Math.max(96, fac.name.length * 6.8 + 22);
          svgHtml += `
            <g transform="translate(${fac.pin.x}, ${fac.pin.y})">
              <circle cx="0" cy="0" r="24" fill="url(#goldGlow)" class="pulse-ring"/>
              <circle cx="0" cy="0" r="10" fill="#d97706" stroke="#ffffff" stroke-width="2.8"/>
              <rect x="${-pillW / 2}" y="-36" width="${pillW}" height="22" rx="6" fill="#1e293b" stroke="#ffffff" stroke-width="1.4" opacity="0.96"/>
              <text x="0" y="-21.5" fill="#ffffff" font-size="10" font-weight="800" text-anchor="middle">${fac.name}</text>
            </g>
          `;
        }

        mapOverlay.innerHTML = svgHtml;

        mapOverlay.querySelectorAll("[data-bldg]").forEach(el => {
          el.addEventListener("click", () => setView("floor", el.dataset.bldg, "1f"));
        });
        mapOverlay.querySelectorAll("[data-fac]").forEach(el => {
          el.addEventListener("click", () => {
            const fac = ALL_FACILITIES.find(f => f.id === el.dataset.fac);
            if (fac) selectFacility(fac, fac.id === "research" ? "research" : "others");
          });
        });

      } else {
        const bldg = BUILDINGS[state.building];
        const floorData = bldg.floors[state.floor];
        mapImage.src = floorData.src;
        mapOverlay.setAttribute("viewBox", floorData.viewBox);

        let svgHtml = "";
        const routeData = buildFloorRoute(state.building, state.floor, state.floorStartRoom, state.selectedRoom);

        if (routeData.points.length > 1) {
          const pts = routeData.points.map(p => `${p.x},${p.y}`).join(" ");
          svgHtml += `
            <polyline points="${pts}" fill="none" stroke="#ffffff" stroke-width="11" stroke-linecap="round" stroke-linejoin="round" opacity="0.85"/>
            <polyline points="${pts}" fill="none" stroke="#2563eb" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="12 8" class="route-flow"/>
            <circle cx="${routeData.startPt.x}" cy="${routeData.startPt.y}" r="11" fill="#16a34a" stroke="#fff" stroke-width="3"/>
            <circle cx="${routeData.points[routeData.points.length - 1].x}" cy="${routeData.points[routeData.points.length - 1].y}" r="12" fill="#dc2626" stroke="#fff" stroke-width="3.5"/>
          `;
        }

        floorData.rooms.forEach(rm => {
          const isSel = state.selectedRoom && state.selectedRoom.number === rm.number;
          svgHtml += `
            <g class="hotspot-room ${isSel ? "selected" : ""}" data-room="${rm.number}">
              <rect x="${rm.box.x}" y="${rm.box.y}" width="${rm.box.w}" height="${rm.box.h}" rx="6">
                <title>${rm.number} — ${rm.name}</title>
              </rect>
            </g>
          `;
        });

        mapOverlay.innerHTML = svgHtml;

        mapOverlay.querySelectorAll(".hotspot-room").forEach(el => {
          el.addEventListener("click", () => {
            const rm = floorData.rooms.find(r => r.number === el.dataset.room);
            if (rm) selectRoom(rm);
          });
        });
      }
    }

    // In-floor corridor router calibrated to drawn hallways
    function getFloorPointOnSpine(bldgId, floorId, nav, pt) {
      if (bldgId === "main") {
        if (pt.x > 1380) {
          return { zone: "hallB", pts: [{ x: nav.hallBX, y: pt.y }, { x: nav.hallBX, y: nav.corridorY }] };
        }
        if (pt.x < 440) {
          const bridgeX = floorId === "2f" ? 370 : 425;
          return { zone: "faculty", pts: [{ x: bridgeX, y: pt.y }, { x: bridgeX, y: nav.corridorY }] };
        }
        if (pt.y < 790 && pt.x >= 460 && pt.x <= 720) {
          return { zone: "upper", pts: [{ x: pt.x, y: nav.corridorY }] };
        }
        return { zone: "hallA", pts: [{ x: pt.x, y: nav.corridorY }] };
      }
      if (bldgId === "annex" && pt.x > 1050) {
        return { zone: "courtyard", pts: [{ x: nav.eastX, y: pt.y }, { x: nav.eastX, y: nav.corridorY }] };
      }
      return { zone: "annex", pts: [{ x: pt.x, y: nav.corridorY }] };
    }

    function buildFloorRoute(bldgId, floorId, startRoomNum, targetRoom) {
      const floorData = BUILDINGS[bldgId].floors[floorId];
      const nav = floorData.nav;
      const startRoom = startRoomNum !== "__entry__"
        ? floorData.rooms.find(r => r.number === startRoomNum)
        : null;

      const startPt = startRoom
        ? { x: Math.round(startRoom.box.x + startRoom.box.w / 2), y: Math.round(startRoom.box.y + startRoom.box.h / 2) }
        : { x: nav.entry.x, y: nav.entry.y };
      const startLabel = startRoom ? `${startRoom.number} (${startRoom.name})` : nav.entry.label;

      if (!targetRoom) return { startPt, startLabel, points: [], steps: [] };

      const endPt = {
        x: Math.round(targetRoom.box.x + targetRoom.box.w / 2),
        y: Math.round(targetRoom.box.y + targetRoom.box.h / 2)
      };

      const startSpine = getFloorPointOnSpine(bldgId, floorId, nav, startPt);
      const endSpine = getFloorPointOnSpine(bldgId, floorId, nav, endPt);
      const sJoin = startSpine.pts[startSpine.pts.length - 1];
      const eJoin = endSpine.pts[endSpine.pts.length - 1];

      const rawPts = [startPt, ...startSpine.pts, ...endSpine.pts.slice().reverse(), endPt];
      const points = rawPts.filter((p, idx) => idx === 0 || p.x !== rawPts[idx - 1].x || p.y !== rawPts[idx - 1].y);

      const steps = [`1. Start at ${startLabel}.`];
      let stepNo = 2;
      if (startRoom) steps.push(`${stepNo++}. Exit into the main corridor.`);
      const dx = eJoin.x - sJoin.x;
      if (Math.abs(dx) > 35) {
        steps.push(`${stepNo++}. Walk ${dx > 0 ? "east (right)" : "west (left)"} along the corridor.`);
      }
      if (endSpine.zone === "upper") {
        steps.push(`${stepNo++}. Enter the upper Hall A section on your north side.`);
      } else if (endSpine.zone === "faculty") {
        steps.push(`${stepNo++}. Cross the west connecting walkway into the Faculty Building.`);
      } else if (endSpine.zone === "hallB") {
        steps.push(`${stepNo++}. Turn north along the Hall B east wing corridor.`);
      } else if (endSpine.zone === "courtyard") {
        steps.push(`${stepNo++}. Exit east from Annex toward the adjacent courtyard.`);
      }
      steps.push(`${stepNo}. Arrive at ${targetRoom.number} — ${targetRoom.name}.`);

      return { startPt, startLabel, points, steps };
    }

    function renderFloorNavBar() {
      if (!state.building || !state.floor) return;
      const floorData = BUILDINGS[state.building].floors[state.floor];
      const entryLabel = floorData.nav ? floorData.nav.entry.label : "Stairs / Entry";

      floorFromSelect.innerHTML = [
        `<option value="__entry__">${entryLabel}</option>`,
        ...floorData.rooms.map(rm => `<option value="${rm.number}">${rm.number} — ${rm.name}</option>`)
      ].join("");

      floorToSelect.innerHTML = [
        `<option value="">Select destination...</option>`,
        ...floorData.rooms.map(rm => `<option value="${rm.number}">${rm.number} — ${rm.name}</option>`)
      ].join("");

      floorFromSelect.value = state.floorStartRoom;
      floorToSelect.value = state.selectedRoom ? state.selectedRoom.number : "";
    }

    // Select Room
    function selectRoom(rm) {
      state.selectedRoom = rm;
      floorToSelect.value = rm.number;

      selectedBadge.textContent = rm.number;
      selectedTitle.textContent = rm.name;
      selectedLocation.textContent = rm.location;

      const routeData = buildFloorRoute(state.building, state.floor, state.floorStartRoom, rm);
      const stepsHtml = routeData.steps.length
        ? `<div class="directions-box">
             <div class="directions-title">Turn-by-Turn Directions</div>
             <ul class="directions-list">${routeData.steps.map(s => `<li>${s}</li>`).join("")}</ul>
           </div>`
        : "";

      selectedActions.innerHTML = `
        <button type="button" class="action-btn action-btn-primary" id="btnFocusRoom">Zoom to Room</button>
        <button type="button" class="action-btn action-btn-secondary" id="btnResetFloorView">Full Floor</button>
        ${stepsHtml}
      `;

      selectedCard.classList.add("show");
      updateHelperChrome();
      document.getElementById("btnFocusRoom")?.addEventListener("click", () => zoomToBox(rm.box, FLOOR_VIEW_W, FLOOR_VIEW_H));
      document.getElementById("btnResetFloorView")?.addEventListener("click", () => resetZoom());

      renderMap();
      renderDirectory();
      zoomToBox(rm.box, FLOOR_VIEW_W, FLOOR_VIEW_H);
    }

    // Select Facility on Campus Map
    function selectFacility(fac, activeTile = null) {
      if (state.view !== "campus") setView("campus");
      state.facility = fac;
      othersDrawer.classList.remove("show");
      updateActiveCategoryTile(activeTile || (fac.id === "research" ? "research" : "others"));

      selectedBadge.textContent = fac.category.toUpperCase();
      selectedTitle.textContent = fac.name;
      selectedLocation.textContent = `EARIST Cavite Campus • ${fac.location}`;

      const dirItems = (fac.directions || []).map(d => `<li>${d}</li>`).join("");
      const quickJumpBtns = (fac.quickJumps || []).map((qj, i) =>
        `<button type="button" class="action-btn action-btn-secondary" data-qj="${i}">${qj.label}</button>`
      ).join("");

      selectedActions.innerHTML = `
        <button type="button" class="action-btn action-btn-primary" id="btnFocusFac">Focus Location</button>
        <button type="button" class="action-btn action-btn-secondary" id="btnResetCampusView">Overview</button>
        ${quickJumpBtns}
        <div class="directions-box">
          <div class="directions-title">Walking Directions from Main Gate</div>
          <ul class="directions-list">${dirItems}</ul>
        </div>
      `;

      selectedCard.classList.add("show");
      updateHelperChrome();
      document.getElementById("btnFocusFac")?.addEventListener("click", () => zoomToBox(fac.box, CAMPUS_VIEW_W, CAMPUS_VIEW_H));
      document.getElementById("btnResetCampusView")?.addEventListener("click", () => resetZoom());

      selectedActions.querySelectorAll("[data-qj]").forEach(btn => {
        btn.addEventListener("click", () => {
          const qj = fac.quickJumps[Number(btn.dataset.qj)];
          if (!qj) return;
          setView("floor", qj.buildingId, qj.floorId);
          const rm = BUILDINGS[qj.buildingId].floors[qj.floorId].rooms.find(r => r.number === qj.roomNumber);
          if (rm) selectRoom(rm);
        });
      });

      renderMap();
      zoomToBox(fac.box, CAMPUS_VIEW_W, CAMPUS_VIEW_H);
    }

    // Floor Directory
    function renderDirectory() {
      if (state.view !== "floor") {
        directoryBody.innerHTML = "";
        return;
      }
      const bldg = BUILDINGS[state.building];
      const floorData = bldg.floors[state.floor];
      directoryTitle.textContent = `${bldg.name} — ${floorData.label}`;
      directoryCount.textContent = `${floorData.rooms.length} Rooms`;

      directoryBody.innerHTML = floorData.rooms.map(rm => {
        const isAct = state.selectedRoom && state.selectedRoom.number === rm.number;
        return `
          <div class="room-card ${isAct ? "active" : ""}" data-room="${rm.number}">
            <div class="room-card-left">
              <div class="room-num-box">${rm.number}</div>
              <div class="room-info">
                <div class="room-name">${rm.name}</div>
                <div class="room-loc">${rm.location}</div>
              </div>
            </div>
            <span class="room-arrow">Locate →</span>
          </div>
        `;
      }).join("");

      directoryBody.querySelectorAll("[data-room]").forEach(el => {
        el.addEventListener("click", () => {
          const rm = floorData.rooms.find(r => r.number === el.dataset.room);
          if (rm) selectRoom(rm);
        });
      });
    }

    // Navigate helper for Search & Quick Picks
    function navigateToEntry(type, key) {
      searchResults.classList.remove("open");
      searchInput.value = "";
      searchClear.classList.remove("show");

      if (type === "facility") {
        const fac = ALL_FACILITIES.find(f => f.id === key);
        if (fac) selectFacility(fac, fac.id === "research" ? "research" : "others");
      } else {
        const entry = SEARCH_ENTRIES.find(e => e.type === "room" && e.key === key);
        if (entry) {
          setView("floor", entry.buildingId, entry.floorId);
          const rm = BUILDINGS[entry.buildingId].floors[entry.floorId].rooms.find(r => r.number === entry.roomNumber);
          if (rm) selectRoom(rm);
        }
      }
    }

    function renderQuickPicks() {
      searchResults.innerHTML = `
        <div class="search-section-label">Popular Destinations</div>
        ${QUICK_PICKS.map(p => `
          <button type="button" class="search-item" data-key="${p.key}" data-type="${p.type}">
            <div>
              <div class="search-item-title">${p.label}</div>
              <div class="search-item-sub">${p.sub}</div>
            </div>
            <span class="search-item-badge">${p.badge}</span>
          </button>
        `).join("")}
      `;
      searchResults.classList.add("open");
      searchResults.querySelectorAll(".search-item").forEach(btn => {
        btn.addEventListener("click", () => navigateToEntry(btn.dataset.type, btn.dataset.key));
      });
    }

    // Event Listeners
    document.getElementById("brandHome").addEventListener("click", () => setView("campus"));
    backCampusBtn.addEventListener("click", () => setView("campus"));

    document.getElementById("btnMainBldg").addEventListener("click", () => {
      if (state.view === "floor" && state.building === "main") setView("campus");
      else setView("floor", "main", "1f");
    });

    document.getElementById("btnAnnexBldg").addEventListener("click", () => {
      if (state.view === "floor" && state.building === "annex") setView("campus");
      else setView("floor", "annex", "1f");
    });

    document.getElementById("btnResearchBldg").addEventListener("click", () => {
      if (state.view === "campus" && state.facility && state.facility.id === "research") {
        setView("campus");
      } else {
        selectFacility(RESEARCH_FACILITY, "research");
      }
    });

    document.getElementById("btnOthers").addEventListener("click", () => {
      const willOpen = !othersDrawer.classList.contains("show");
      othersDrawer.classList.toggle("show", willOpen);
      if (willOpen) updateActiveCategoryTile("others");
      else if (state.view === "campus" && !state.facility) updateActiveCategoryTile(null);
    });

    othersCloseBtn.addEventListener("click", () => {
      othersDrawer.classList.remove("show");
      if (state.view === "campus" && !state.facility) updateActiveCategoryTile(null);
    });

    selectedCloseBtn.addEventListener("click", () => {
      selectedCard.classList.remove("show");
      updateHelperChrome();
      if (state.view === "campus") {
        state.facility = null;
        updateActiveCategoryTile(null);
        resetZoom();
        renderMap();
      } else {
        state.selectedRoom = null;
        floorToSelect.value = "";
        resetZoom();
        renderMap();
        renderDirectory();
      }
    });

    // Floor Pills
    document.querySelectorAll(".floor-pill-btn").forEach(btn => {
      btn.addEventListener("click", () => setView("floor", state.building, btn.dataset.floor));
    });

    // In-Floor Navigation Selects
    floorFromSelect.addEventListener("change", (e) => {
      state.floorStartRoom = e.target.value;
      renderMap();
      if (state.selectedRoom) selectRoom(state.selectedRoom);
    });

    floorToSelect.addEventListener("change", (e) => {
      const val = e.target.value;
      if (!val) {
        state.selectedRoom = null;
        selectedCard.classList.remove("show");
        updateHelperChrome();
        renderMap();
        renderDirectory();
      } else {
        const rm = BUILDINGS[state.building].floors[state.floor].rooms.find(r => r.number === val);
        if (rm) selectRoom(rm);
      }
    });

    floorSwapBtn.addEventListener("click", () => {
      if (!state.selectedRoom) return;
      const prevDest = state.selectedRoom.number;
      const prevStart = state.floorStartRoom;
      state.floorStartRoom = prevDest;
      if (prevStart !== "__entry__") {
        const rm = BUILDINGS[state.building].floors[state.floor].rooms.find(r => r.number === prevStart);
        if (rm) selectRoom(rm);
      } else {
        state.selectedRoom = null;
        selectedCard.classList.remove("show");
        renderFloorNavBar();
        renderMap();
        renderDirectory();
      }
    });

    // Search Input & Quick Picks
    searchInput.addEventListener("focus", () => {
      if (!searchInput.value.trim()) renderQuickPicks();
    });

    searchInput.addEventListener("input", () => {
      const q = searchInput.value.trim().toLowerCase();
      searchClear.classList.toggle("show", q.length > 0);
      if (!q) {
        renderQuickPicks();
        return;
      }

      const matches = SEARCH_ENTRIES.filter(item =>
        item.title.toLowerCase().includes(q) ||
        item.subtitle.toLowerCase().includes(q) ||
        item.category.toLowerCase().includes(q)
      ).slice(0, 10);

      if (!matches.length) {
        searchResults.innerHTML = `<div style="padding:12px; font-size:0.78rem; color:#888; text-align:center;">No matching rooms or facilities found</div>`;
        searchResults.classList.add("open");
        return;
      }

      searchResults.innerHTML = matches.map(item => `
        <button type="button" class="search-item" data-key="${item.key}" data-type="${item.type}">
          <div>
            <div class="search-item-title">${item.title}</div>
            <div class="search-item-sub">${item.subtitle}</div>
          </div>
          <span class="search-item-badge">${item.category}</span>
        </button>
      `).join("");

      searchResults.classList.add("open");
      searchResults.querySelectorAll(".search-item").forEach(btn => {
        btn.addEventListener("click", () => navigateToEntry(btn.dataset.type, btn.dataset.key));
      });
    });

    searchClear.addEventListener("click", () => {
      searchInput.value = "";
      searchClear.classList.remove("show");
      renderQuickPicks();
      searchInput.focus();
    });

    document.addEventListener("click", (e) => {
      if (!e.target.closest(".search-wrap")) searchResults.classList.remove("open");
    });

    // Zoom Controls
    document.getElementById("zoomInBtn").addEventListener("click", () => {
      state.scale = Math.min(state.scale + 0.35, 4.5);
      applyTransform();
    });

    document.getElementById("zoomOutBtn").addEventListener("click", () => {
      state.scale = Math.max(state.scale - 0.30, 0.85);
      applyTransform();
    });

    document.getElementById("zoomResetBtn").addEventListener("click", () => resetZoom());

    // View Full Map (Fullscreen)
    viewFullMapBtn.addEventListener("click", () => {
      mapStage.classList.toggle("fullscreen");
      state.scale = 1;
      state.panX = 0;
      state.panY = 0;
      applyTransform();
    });

    fsCloseBtn.addEventListener("click", () => {
      mapStage.classList.remove("fullscreen");
      resetZoom();
    });

    // Touch & Pointer Gestures: 6px Drag Threshold + Pinch-to-Zoom + Double-Tap
    function getPinchMetrics() {
      const pts = Array.from(state.activePointers.values());
      const dx = pts[1].x - pts[0].x;
      const dy = pts[1].y - pts[0].y;
      return {
        dist: Math.hypot(dx, dy) || 1,
        midX: (pts[0].x + pts[1].x) / 2,
        midY: (pts[0].y + pts[1].y) / 2
      };
    }

    mapStage.addEventListener("pointerdown", (e) => {
      if (e.target.closest(".floating-zoom") || e.target.closest(".fs-top-bar")) return;

      state.activePointers.set(e.pointerId, { x: e.clientX, y: e.clientY });

      if (state.activePointers.size === 2) {
        // Transition to pinch-to-zoom
        state.dragCandidate = null;
        mapStage.classList.remove("dragging");
        mapStage.classList.add("pinching");
        const metrics = getPinchMetrics();
        state.pinchStart = {
          dist: metrics.dist,
          midX: metrics.midX,
          midY: metrics.midY,
          scale: state.scale,
          panX: state.panX,
          panY: state.panY
        };
      } else if (state.activePointers.size === 1) {
        state.dragCandidate = {
          id: e.pointerId,
          downX: e.clientX,
          downY: e.clientY,
          startPanX: state.panX,
          startPanY: state.panY,
          activated: false
        };
      }
    });

    mapStage.addEventListener("pointermove", (e) => {
      if (!state.activePointers.has(e.pointerId)) return;
      state.activePointers.set(e.pointerId, { x: e.clientX, y: e.clientY });

      if (state.activePointers.size === 2 && state.pinchStart) {
        const metrics = getPinchMetrics();
        const factor = metrics.dist / state.pinchStart.dist;
        state.scale = Math.min(Math.max(state.pinchStart.scale * factor, 0.85), 4.5);
        state.panX = state.pinchStart.panX + (metrics.midX - state.pinchStart.midX);
        state.panY = state.pinchStart.panY + (metrics.midY - state.pinchStart.midY);
        applyTransform();
        return;
      }

      if (state.dragCandidate && state.dragCandidate.id === e.pointerId) {
        const dx = e.clientX - state.dragCandidate.downX;
        const dy = e.clientY - state.dragCandidate.downY;
        if (!state.dragCandidate.activated) {
          if (Math.hypot(dx, dy) < 6) return; // Allow clean taps without capture
          state.dragCandidate.activated = true;
          mapStage.classList.add("dragging");
          try { mapStage.setPointerCapture(e.pointerId); } catch (_) { }
        }
        state.panX = state.dragCandidate.startPanX + dx;
        state.panY = state.dragCandidate.startPanY + dy;
        applyTransform();
      }
    });

    function handlePointerUp(e) {
      state.activePointers.delete(e.pointerId);

      if (state.activePointers.size < 2) {
        state.pinchStart = null;
        mapStage.classList.remove("pinching");
      }

      if (state.dragCandidate && state.dragCandidate.id === e.pointerId) {
        const wasActivated = state.dragCandidate.activated;
        state.dragCandidate = null;
        mapStage.classList.remove("dragging");
        try { mapStage.releasePointerCapture(e.pointerId); } catch (_) { }

        // Double-tap zoom on non-hotspot empty map surface
        if (!wasActivated && e.type === "pointerup" && !e.target.closest("[data-bldg], [data-fac], [data-room], .floating-zoom, .fs-top-bar")) {
          const now = Date.now();
          if (state.lastTapPos && now - state.lastTapTime < 300 && Math.hypot(e.clientX - state.lastTapPos.x, e.clientY - state.lastTapPos.y) < 28) {
            state.lastTapTime = 0;
            state.lastTapPos = null;
            if (state.scale > 1.7) {
              resetZoom();
            } else {
              state.scale = Math.min(state.scale + 0.7, 3.0);
              applyTransform();
            }
          } else {
            state.lastTapTime = now;
            state.lastTapPos = { x: e.clientX, y: e.clientY };
          }
        }
      }
    }

    mapStage.addEventListener("pointerup", handlePointerUp);
    mapStage.addEventListener("pointercancel", handlePointerUp);

    // Mouse Wheel Zoom
    mapStage.addEventListener("wheel", (e) => {
      e.preventDefault();
      const delta = e.deltaY < 0 ? 0.2 : -0.2;
      state.scale = Math.min(Math.max(state.scale + delta, 0.85), 4.5);
      applyTransform();
    }, { passive: false });

    // Window resize keeps smart framing accurate
    window.addEventListener("resize", () => {
      if (!selectedCard.classList.contains("show") && !mapStage.classList.contains("fullscreen")) {
        resetZoom();
      }
    });

    // Legal Notice Modal
    const legalModal = document.getElementById("legalModal");
    const legalModalTitle = document.getElementById("legalModalTitle");
    const legalModalBody = document.getElementById("legalModalBody");
    const legalModalClose = document.getElementById("legalModalClose");

    const LEGAL_CONTENT = {
      terms: {
        title: "Terms of Use",
        paragraphs: [
          "The 2027 EARIST Cavite Wayfinding Map is a non-commercial campus navigation tool created by Drafting Technology for students, faculty, staff, and visitors of EARIST Cavite Campus.",
          "Campus maps, floor layouts, room directories, and walking directions are provided \"as is\" for general orientation only and may change without prior notice. Please follow posted campus signage and official advisories when on site.",
          "Institutional seals, campus plans, and interface materials remain the property of EARIST Cavite Campus and Drafting Technology."
        ]
      },
      privacy: {
        title: "Privacy Notice",
        paragraphs: [
          "This wayfinding application runs entirely client-side in your browser.",
          "It does not collect, store, or transmit personal information, location history, or tracking cookies, and no account or sign-in is required."
        ]
      }
    };

    function openLegalModal(type) {
      const data = LEGAL_CONTENT[type];
      if (!data) return;
      legalModalTitle.textContent = data.title;
      legalModalBody.innerHTML = data.paragraphs.map(p => `<p>${p}</p>`).join("");
      legalModal.classList.add("open");
    }

    function closeLegalModal() {
      legalModal.classList.remove("open");
    }

    document.querySelectorAll("[data-legal]").forEach(btn => {
      btn.addEventListener("click", () => openLegalModal(btn.dataset.legal));
    });
    legalModalClose.addEventListener("click", closeLegalModal);
    legalModal.addEventListener("click", (e) => {
      if (e.target === legalModal) closeLegalModal();
    });
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape" && legalModal.classList.contains("open")) closeLegalModal();
    });

    // Startup
    initOthersGrid();
    setView("campus");
  </script>
</body>

</html>
