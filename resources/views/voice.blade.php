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
            <button class="navbar-toggler border-0 px-0 me-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="icon-base ti tabler-menu-2 icon-lg align-middle text-heading fw-medium"></i>
            </button>
            <!-- Mobile menu toggle: End-->
            <a href="/" class="app-brand-link">
              <span class="app-brand-logo demo">
                <span class="text-primary">
                  <img src="img/clone-voice-logo.png" width="32" alt="CloneVoice">
                </span>
              </span>
              <span class="app-brand-text demo menu-text fw-bold ms-2 ps-1">CloneSpeak</span>
            </a>
          </div>
          <!-- Menu logo wrapper: End -->
          <!-- Menu wrapper: Start -->
          <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
           <button class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="icon-base ti tabler-x icon-lg"></i>
            </button>
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link fw-medium" aria-current="page" href="/#">Ana Sayfa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium active" href="#">Uygulama</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="/#landingFAQ">Proje Hakkında</a>
              </li>

              <li class="nav-item">
                <a class="nav-link fw-medium" href="/#landingTeam">Takım</a>
              </li>
            </ul>
          </div>
          <div class="landing-menu-overlay d-lg-none"></div>
          <!-- Menu wrapper: End -->
          <!-- Toolbar: Start -->
          <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Style Switcher -->
            <li class="nav-item me-2 me-xl-1">
              <a class="nav-link hide-arrow" id="openQrModal" style="cursor:pointer;" >
                <i class="icon-base ti tabler-qrcode icon-lg "></i>
              </a>
            </li>
            <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-1">
              <a class="nav-link dropdown-toggle hide-arrow" id="nav-theme" href="javascript:void(0);" data-bs-toggle="dropdown">
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
                ><span class="d-none d-md-block">Giriş/Kayıt</span></a
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
        <div id="landingHero" class="section-py landing-hero position-relative  min-vh-100 d-flex align-items-center" style="border-radius:0;">
          <img src="../../assets/img/front-pages/backgrounds/hero-bg.png" alt="hero background" class="position-absolute top-0 start-50 translate-middle-x object-fit-cover w-100 h-100" data-speed="1" />
          <div class="container">
            <div class="hero-text-box text-center position-relative">
              <h1 id="liveText" class="text-primary hero-title display-6 fw-extrabold">
                Konuşmaya Başlamak İçin Butona Tıklayın
              </h1>
              <div class="landing-hero-btn d-inline-block position-relative">
                <button id="startBtn"
                        class="btn btn-xl rounded-pill btn-icon btn-primary waves-effect waves-light mt-3"
                        style="width: 77px; height: 77px;">
                  <span class="icon-base ti tabler-microphone icon-22px"></span>
                </button>
                <button id="stopBtn"
                        class="btn btn-xl rounded-pill btn-icon btn-primary waves-effect waves-light mt-3 d-none"
                        style="width: 77px; height: 77px;">
                  <span class="icon-base ti tabler-microphone-off icon-22px"></span>
                </button>
              </div>
              <!-- LOADER -->
              <div id="loader" class="mt-4 d-none">
                <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;">
                  <span class="visually-hidden">Loading...</span>
                </div>
                <p class="mt-2 text-primary fw-bold">İşleniyor…</p>
              </div>

            </div>
          </div>
        </div>
      </section>
      <!-- Hero: End -->
    </div>

    <!-- QR MODAL -->
    <div class="modal fade" id="qrModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-4 shadow-lg">

          <div class="modal-header border-0 pb-0">
            <h5 class="modal-title fw-bold">Oturumu Paylaş</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <div class="modal-body text-center pt-0">

            <!-- QR Gradient Box -->
            <div class="qr-box mx-auto my-3 p-3 rounded-4">
              <div id="qrCodeContainer"></div>
            </div>

            <!-- Short Link -->
            <div class="input-group mt-3 mb-2">
                <input type="text" id="qrLinkInput" class="form-control text-center" readonly>
                <button class="btn btn-primary" id="copyQrLinkBtn">
                    <i class="icon-base ti tabler-copy"></i>
                </button>
            </div>

            <small class="text-muted">
              Bu bağlantıyı paylaşabilir veya QR kodu okutabilirsiniz.
            </small>

          </div>

        </div>
      </div>
    </div>
    <!-- QR MODAL END -->


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
    <script src="https://cdn.jsdelivr.net/npm/qrcodejs/qrcode.min.js"></script>


    <!-- Page JS -->
    {{-- <script src="../../assets/js/front-page-landing.js"></script> --}}
  </body>

{{-- JS Recorder wav için --}}
<script src="/js/recorder.js"></script>
<script src="https://cdn.socket.io/4.7.2/socket.io.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", async () => {

    const startBtn = document.getElementById("startBtn");
    const stopBtn   = document.getElementById("stopBtn");
    const liveText  = document.getElementById("liveText");

    let audioContext;
    let stream;

    let recorderStream;  
    let recorderFull;    
    let intervalId;

    let firstChunkArrived = false; // Listening yazısını kaldırmak için
    const sessionId = "{{ $session_id }}";
    // WebSocket bağlantısı
    const socket = io("http://127.0.0.1:5001", {
        query: { session_id: sessionId }
    });
    // Odaya katıl
    socket.emit("joinSession", { session_id: sessionId });

    function playBase64Audio(b64) {
        const audio = new Audio("data:audio/mp3;base64," + b64);
        audio.play();
    }

    // ================================================================
    // START
    // ================================================================
    startBtn.addEventListener("click", async () => {

        stream = await navigator.mediaDevices.getUserMedia({ audio: true });
        audioContext = new AudioContext();
        const source = audioContext.createMediaStreamSource(stream);

        recorderStream = new Recorder(source, { numChannels: 1 });
        recorderStream.record();

        recorderFull = new Recorder(source, { numChannels: 1 });
        recorderFull.record();

        liveText.textContent = "🎙 Listening...";
        firstChunkArrived = false;

        startBtn.classList.add("d-none");
        stopBtn.classList.remove("d-none");

        // Chunk STT
        intervalId = setInterval(() => {
            recorderStream.exportWAV(async (blob) => {
                recorderStream.clear();

                try {
                    let form = new FormData();
                    form.append("audio", blob, "chunk.wav");

                    const res = await fetch("http://127.0.0.1:5001/stt", {
                        method: "POST",
                        body: form
                    });

                    const data = await res.json();

                    // İlk çeviri geldiğinde "Listening" mesajını temizle
                    if (!firstChunkArrived && data.translated) {
                        liveText.textContent = "";
                        firstChunkArrived = true;
                    }

                    // Chunk çevirisini yaz
                    if (data.translated) {
                        liveText.textContent += data.translated + "\n";
                    }

                } catch (err) {
                    console.error("STREAM STT ERROR:", err);
                }
            });

        }, 2000);
    });

    // ================================================================
    // STOP
    // ================================================================
    stopBtn.addEventListener("click", () => {

        clearInterval(intervalId);

        recorderStream.stop();
        recorderFull.stop();

        stream.getTracks().forEach(t => t.stop());

        startBtn.classList.remove("d-none");
        stopBtn.classList.add("d-none");

        // Final TTS mesajı göster
        liveText.textContent = "⏳ Preparing final TTS...";

        // FULL WAV → TTS
        recorderFull.exportWAV(async (blob) => {

            let form = new FormData();
            form.append("audio", blob, "full.wav");

            try {
                const res = await fetch("http://127.0.0.1:5001/stt_translate_tts", {
                    method: "POST",
                    body: form
                });

                const data = await res.json();

                // "Preparing..." mesajını kaldır
                liveText.textContent = "";

                // Final çeviri
                liveText.textContent = data.translated || "";

                socket.emit("final_text", {
                  session_id: "{{ $session_id }}",
                  text: data.translated
                });

                // Final TTS
                if (data.tts_audio_base64) {
                    playBase64Audio(data.tts_audio_base64);

                    socket.emit("final_tts", {
                      session_id: "{{ $session_id }}",
                      audio_base64: data.tts_audio_base64
                    });
                }

            } catch (err) {
                console.error("FINAL TTS ERROR:", err);
                liveText.textContent = "❌ Final TTS error.";
            }

        });

    });

});




// QR MODAL
document.getElementById("openQrModal").addEventListener("click", function () {

    const qrModal = new bootstrap.Modal(document.getElementById('qrModal'));
    qrModal.show();

    // QR container tamamen temizle (garantili)
    const qrContainer = document.getElementById("qrCodeContainer");
    while (qrContainer.firstChild) {
        qrContainer.removeChild(qrContainer.firstChild);
    }

    // QR URL
    const qrUrl = "{{ url('/live/' . $session_id) }}";

    // Input'a yaz
    document.getElementById("qrLinkInput").value = qrUrl;

    // QR oluştur
    new QRCode(qrContainer, {
        text: qrUrl,
        width: 220,
        height: 220
    });
});


// COPY BUTTON
document.getElementById("copyQrLinkBtn").addEventListener("click", function () {
    const input = document.getElementById("qrLinkInput");
    input.select();
    input.setSelectionRange(0, 99999); // iOS için

    navigator.clipboard.writeText(input.value)
        .then(() => {
            this.innerHTML = '<i class="icon-base ti tabler-check"></i>';
            setTimeout(() => {
                this.innerHTML = '<i class="icon-base ti tabler-copy"></i>';
            }, 1200);
        })
        .catch(err => console.error("Copy failed:", err));
});


</script>

<style>
  /* Gradient border box */
  .qr-box {
      background: white;
      border-radius: 20px;
      padding: 20px;
      display: inline-block;

      /* Gradient border */
      border: 4px solid transparent;
      background-image:
          linear-gradient(white, white),
          linear-gradient(135deg, #4f46e5, #06b6d4);
      background-origin: border-box;
      background-clip: padding-box, border-box;

      /* Shadow */
      box-shadow: 0 8px 28px rgba(0,0,0,0.12);
  }


</style>




</html>
