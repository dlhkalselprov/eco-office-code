  <!-- CoreUI and necessary plugins-->
  {{-- <script src="vendors/@coreui/coreui-pro/js/coreui.bundle.min.js"></script> --}}
  {{-- <script src="vendors/simplebar/js/simplebar.min.js"></script> --}}
  {{-- <script src="vendors/i18next/js/i18next.min.js"></script> --}}
  {{-- <script src="vendors/i18next-http-backend/js/i18nextHttpBackend.js"></script> --}}
  {{-- <script src="vendors/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.js"></script> --}}
  {{-- <script src="js/i18next.js"></script> --}}

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
      const header = document.querySelector('header.header');

      document.addEventListener('scroll', () => {
          if (header) {
              header.classList.toggle('shadow-sm', document.documentElement.scrollTop > 0);
          }
      });
  </script>

  <!-- Plugins and scripts required by this view-->
  {{-- <script src="vendors/chart.js/js/chart.umd.js"></script> --}}
  {{-- <script src="vendors/@coreui/chartjs/js/coreui-chartjs.js"></script> --}}
  {{-- <script src="vendors/@coreui/utils/js/index.js"></script> --}}
  {{-- <script src="js/main.js"></script> --}}
