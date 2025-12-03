<!doctype html>

<html lang="tr" class="layout-navbar-fixed layout-wide" dir="ltr" data-skin="default" data-assets-path="../../assets/" data-template="front-pages" data-bs-theme="light">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Ses Klonu İle Çeviri</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="../../assets/vendor/fonts/iconify-icons.css" />

    <!-- Core CSS -->
    <!-- build:css assets/vendor/css/theme.css  -->

    <link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />

    <link rel="stylesheet" href="../../assets/vendor/libs/pickr/pickr-themes.css" />

    <link rel="stylesheet" href="../../assets/vendor/css/core.css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />

    <link rel="stylesheet" href="../../assets/vendor/css/pages/front-page.css" />

    <!-- Vendors CSS -->

    <!-- endbuild -->

    <link rel="stylesheet" href="../../assets/vendor/libs/nouislider/nouislider.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/swiper/swiper.css" />

    <!-- Page CSS -->

    <link rel="stylesheet" href="../../assets/vendor/css/pages/front-page-landing.css" />

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    {{-- <script src="../../assets/vendor/js/template-customizer.js"></script> --}}

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

    <script src="../../assets/js/front-config.js"></script>
  </head>
  <body>
    <script src="../../assets/vendor/js/dropdown-hover.js"></script>
    <script src="../../assets/vendor/js/mega-dropdown.js"></script>
    <!-- Navbar: Start -->
    <nav class="layout-navbar shadow-none py-0">
      <div class="container">
        <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-8">
          <!-- Menu logo wrapper: Start -->
          <div class="navbar-brand app-brand demo d-flex py-0 me-4 me-xl-8 ms-0">
            <!-- Mobile menu toggle: Start-->
            <button
              class="navbar-toggler border-0 px-0 me-4"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation">
              <i class="icon-base ti tabler-menu-2 icon-lg align-middle text-heading fw-medium"></i>
            </button>
            <!-- Mobile menu toggle: End-->
            <a href="landing-page.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <span class="text-primary">
                  <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                      fill="currentColor" />
                    <path
                      opacity="0.06"
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                      fill="#161616" />
                    <path
                      opacity="0.06"
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                      fill="#161616" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                      fill="currentColor" />
                  </svg>
                </span>
              </span>
              <span class="app-brand-text demo menu-text fw-bold ms-2 ps-1">Vuexy</span>
            </a>
          </div>
          <!-- Menu logo wrapper: End -->
          <!-- Menu wrapper: Start -->
          <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
            <button
              class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl p-2"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation">
              <i class="icon-base ti tabler-x icon-lg"></i>
            </button>
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link fw-medium" aria-current="page" href="landing-page.html#landingHero">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="landing-page.html#landingFeatures">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="landing-page.html#landingTeam">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="landing-page.html#landingFAQ">FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="landing-page.html#landingContact">Contact us</a>
              </li>
              <li class="nav-item mega-dropdown">
                <a
                  href="javascript:void(0);"
                  class="nav-link dropdown-toggle navbar-ex-14-mega-dropdown mega-dropdown fw-medium"
                  aria-expanded="false"
                  data-bs-toggle="mega-dropdown"
                  data-trigger="hover">
                  <span data-i18n="Pages">Pages</span>
                </a>
                <div class="dropdown-menu p-4 p-xl-8">
                  <div class="row gy-4">
                    <div class="col-12 col-lg">
                      <div class="h6 d-flex align-items-center mb-3 mb-lg-5">
                        <div class="avatar flex-shrink-0 me-3">
                          <span class="avatar-initial rounded bg-label-primary"
                            ><i class="icon-base ti tabler-layout-grid icon-lg"></i
                          ></span>
                        </div>
                        <span class="ps-1">Other</span>
                      </div>
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link mega-dropdown-link" href="pricing-page.html">
                            <i class="icon-base ti tabler-circle me-1 icon-12px"></i>
                            <span data-i18n="Pricing">Pricing</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link mega-dropdown-link" href="payment-page.html">
                            <i class="icon-base ti tabler-circle me-1 icon-12px"></i>
                            <span data-i18n="Payment">Payment</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link mega-dropdown-link" href="checkout-page.html">
                            <i class="icon-base ti tabler-circle me-1 icon-12px"></i>
                            <span data-i18n="Checkout">Checkout</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link mega-dropdown-link" href="help-center-landing.html">
                            <i class="icon-base ti tabler-circle me-1 icon-12px"></i>
                            <span data-i18n="Help Center">Help Center</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-12 col-lg">
                      <div class="h6 d-flex align-items-center mb-3 mb-lg-5">
                        <div class="avatar flex-shrink-0 me-3">
                          <span class="avatar-initial rounded bg-label-primary"
                            ><i class="icon-base ti tabler-lock-open icon-lg"></i
                          ></span>
                        </div>
                        <span class="ps-1">Auth Demo</span>
                      </div>
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-login-basic.html"
                            target="_blank">
                            <i class="icon-base ti tabler-circle me-1 icon-12px"></i>
                            Login (Basic)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-login-cover.html"
                            target="_blank">
                            <i class="icon-base ti tabler-circle me-1 icon-12px"></i>
                            Login (Cover)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-register-basic.html"
                            target="_blank">
                            <i class="icon-base ti tabler-circle me-1 icon-12px"></i>
                            Register (Basic)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-register-cover.html"
                            target="_blank">
                            <i class="icon-base ti tabler-circle me-1 icon-12px"></i>
                            Register (Cover)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-register-multisteps.html"
                            target="_blank">
                            <i class="icon-base ti tabler-circle me-1 icon-12px"></i>
                            Register (Multi-steps)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-forgot-password-basic.html"
                            target="_blank">
                            <i class="icon-base ti tabler-circle me-1 icon-12px"></i>
                            Forgot Password (Basic)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-forgot-password-cover.html"
                            target="_blank">
                            <i class="icon-base ti tabler-circle me-1 icon-12px"></i>
                            Forgot Password (Cover)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-reset-password-basic.html"
                            target="_blank">
                            <i class="icon-base ti tabler-circle me-1 icon-12px"></i>
                            Reset Password (Basic)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-reset-password-cover.html"
                            target="_blank">
                            <i class="icon-base ti tabler-circle me-1 icon-12px"></i>
                            Reset Password (Cover)
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-12 col-lg">
                      <div class="h6 d-flex align-items-center mb-3 mb-lg-5">
                        <div class="avatar flex-shrink-0 me-3">
                          <span class="avatar-initial rounded bg-label-primary"
                            ><i class="icon-base ti tabler-file-analytics icon-lg"></i
                          ></span>
                        </div>
                        <span class="ps-1">Other</span>
                      </div>
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/pages-misc-error.html"
                            target="_blank">
                            <i class="icon-base ti tabler-circle me-1 icon-12px"></i>
                            Error
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/pages-misc-under-maintenance.html"
                            target="_blank">
                            <i class="icon-base ti tabler-circle me-1 icon-12px"></i>
                            Under Maintenance
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/pages-misc-comingsoon.html"
                            target="_blank">
                            <i class="icon-base ti tabler-circle me-1 icon-12px"></i>
                            Coming Soon
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/pages-misc-not-authorized.html"
                            target="_blank">
                            <i class="icon-base ti tabler-circle me-1 icon-12px"></i>
                            Not Authorized
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-verify-email-basic.html"
                            target="_blank">
                            <i class="icon-base ti tabler-circle me-1 icon-12px"></i>
                            Verify Email (Basic)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-verify-email-cover.html"
                            target="_blank">
                            <i class="icon-base ti tabler-circle me-1 icon-12px"></i>
                            Verify Email (Cover)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-two-steps-basic.html"
                            target="_blank">
                            <i class="icon-base ti tabler-circle me-1 icon-12px"></i>
                            Two Steps (Basic)
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link mega-dropdown-link"
                            href="../vertical-menu-template/auth-two-steps-cover.html"
                            target="_blank">
                            <i class="icon-base ti tabler-circle me-1 icon-12px"></i>
                            Two Steps (Cover)
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-lg-4 d-none d-lg-block">
                      <div class="bg-body nav-img-col p-2">
                        <img
                          src="../../assets/img/front-pages/misc/nav-item-col-img.png"
                          alt="nav item col image"
                          class="w-100" />
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="../vertical-menu-template/index.html" target="_blank">Admin</a>
              </li>
            </ul>
          </div>
          <div class="landing-menu-overlay d-lg-none"></div>
          <!-- Menu wrapper: End -->
          <!-- Toolbar: Start -->
          <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Style Switcher -->
            <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-1">
              <a
                class="nav-link dropdown-toggle hide-arrow"
                id="nav-theme"
                href="javascript:void(0);"
                data-bs-toggle="dropdown">
                <i class="icon-base ti tabler-sun icon-lg theme-icon-active"></i>
                <span class="d-none ms-2" id="nav-theme-text">Toggle theme</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="nav-theme-text">
                <li>
                  <button
                    type="button"
                    class="dropdown-item align-items-center active"
                    data-bs-theme-value="light"
                    aria-pressed="false">
                    <span><i class="icon-base ti tabler-sun icon-md me-3" data-icon="sun"></i>Light</span>
                  </button>
                </li>
                <li>
                  <button
                    type="button"
                    class="dropdown-item align-items-center"
                    data-bs-theme-value="dark"
                    aria-pressed="true">
                    <span><i class="icon-base ti tabler-moon-stars icon-md me-3" data-icon="moon-stars"></i>Dark</span>
                  </button>
                </li>
                <li>
                  <button
                    type="button"
                    class="dropdown-item align-items-center"
                    data-bs-theme-value="system"
                    aria-pressed="false">
                    <span
                      ><i
                        class="icon-base ti tabler-device-desktop-analytics icon-md me-3"
                        data-icon="device-desktop-analytics"></i
                      >System</span
                    >
                  </button>
                </li>
              </ul>
            </li>
            <!-- / Style Switcher-->

            <!-- navbar button: Start -->
            <li>
              <a href="{{ route('dashboard') }}" class="btn btn-primary" target="_self"
                ><span class="tf-icons icon-base ti tabler-login scaleX-n1-rtl me-md-1"></span
                ><span class="d-none d-md-block">Login/Register</span></a
              >
            </li>
            <!-- navbar button: End -->
          </ul>
          <!-- Toolbar: End -->
        </div>
      </div>
    </nav>
    <!-- Navbar: End -->

    <!-- Sections:Start -->

    <div data-bs-spy="scroll" class="scrollspy-example">
      <!-- Hero: Start -->
      <section id="hero-animation">
        <div id="landingHero" class="section-py landing-hero position-relative  min-vh-100 d-flex align-items-center">
          <img src="../../assets/img/front-pages/backgrounds/hero-bg.png" alt="hero background" class="position-absolute top-0 start-50 translate-middle-x object-fit-cover w-100 h-100" data-speed="1" />
          <div class="container">
            <div class="hero-text-box text-center position-relative">
              <h1 id="liveText" class="text-primary hero-title display-6 fw-extrabold">
                Konuşmaya Başlamak İçin Butona Tıklayın
              </h1>
              <div class="landing-hero-btn d-inline-block position-relative">
                <button id="startBtn" class="btn btn-xl rounded-pill btn-icon btn-primary waves-effect waves-light mt-3" style="width: 77px; height: 77px;">
                  <span class="icon-base ti tabler-microphone icon-22px"></span>
                </button>
                <button id="stopBtn" class="btn btn-xl rounded-pill btn-icon btn-primary waves-effect waves-light mt-3 d-none" style="width: 77px; height: 77px;">
                  <span class="icon-base ti tabler-microphone-off icon-22px"></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Hero: End -->
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/theme.js -->

    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>

    <script src="../../assets/vendor/libs/@algolia/autocomplete-js.js"></script>

    <script src="../../assets/vendor/libs/pickr/pickr.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/nouislider/nouislider.js"></script>
    <script src="../../assets/vendor/libs/swiper/swiper.js"></script>

    <!-- Main JS -->

    <script src="../../assets/js/front-main.js"></script>



    <!-- Page JS -->
    {{-- <script src="../../assets/js/front-page-landing.js"></script> --}}
  </body>

{{-- JS Recorder wav için --}}
<script src="/js/recorder.js"></script>

<script>
  console.log("Recorder:", Recorder);
document.addEventListener("DOMContentLoaded", async () => {

    const startBtn = document.getElementById("startBtn");
    const stopBtn = document.getElementById("stopBtn");
    const liveText = document.getElementById("liveText");

    let recorder;
    let audioContext;
    let intervalId;

    startBtn.addEventListener("click", async () => {

        // Mikrofon izni
        const stream = await navigator.mediaDevices.getUserMedia({audio:true});
        audioContext = new AudioContext();
        const input = audioContext.createMediaStreamSource(stream);

        recorder = new Recorder(input, { numChannels: 1 });

        recorder.record();
        liveText.textContent = "🎙 Dinleniyor...";

        startBtn.classList.add("d-none");
        stopBtn.classList.remove("d-none");

        // Her 2 saniyede bir chunk oluştur
        intervalId = setInterval(() => {

            recorder.exportWAV(async (blob) => {

                recorder.clear(); // eski buffer'ı temizle

                let formData = new FormData();
                formData.append("audio", blob, "chunk.wav");

                try {
                    const response = await fetch("http://127.0.0.1:5001/stt", {
                        method: "POST",
                        body: formData
                    });

                    const data = await response.json();
                    if (data.text) liveText.textContent = data.translated || data.text;

                } catch (err) {
                    console.error("STT hatası:", err);
                }
            });

        }, 2000);

    });

    stopBtn.addEventListener("click", () => {
        clearInterval(intervalId);
        recorder.stop();

        startBtn.classList.remove("d-none");
        stopBtn.classList.add("d-none");

        liveText.textContent = "Konuşma durduruldu.";
    });

});
</script>






</html>
