<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>SKM</title>
	<meta name="author" content="name" />
	<meta name="description" content="description here" />
	<meta name="keywords" content="keywords,here" />
	@vite('resources/css/app.css')
    <link href="logo-skm.png" rel="icon">
	<!-- <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/> -->
	<!--Replace with your tailwind.css once created-->
    @livewireStyles
</head>


<body class="font-sans antialiased text-gray-900 leading-normal tracking-wider bg-cover pt-20" 
{{-- style="background-image:url('https://source.unsplash.com/1L71sPT5XKc');"> --}}
style="background-image:url('bg.jpg');">
    <nav id="header" class="fixed w-full z-0 top-0">

		<div id="progress" class="h-1 z-20 top-0"
			style="background:linear-gradient(to right, #f7fafa var(--scroll), transparent 0);"></div>

		<div class="w-full md:max-w-4xl mx-auto flex flex-wrap items-center justify-between mt-0 py-3">

			<div class="pl-4">
				<a class="text-green-500 text-base no-underline hover:no-underline font-extrabold text-xl" href="#">
                    <img src="logo-skm.png" alt="" style="width: 50px;" class="z-20">
					SKM
				</a>
			</div>

			<div class="block lg:hidden pr-4">
                
			</div>

		</div>
	</nav>

    {{ $slot }}
    
    <!-- ======= Footer ======= -->
    <footer id="footer" class="text-center">

        

        <div class="text-center mb-2">
            {{-- <div class="credits"> --}}
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
                {{-- © Copyright @2023 <a href="https://dpmptsp.jatengprov.go.id/">by DPMPTSP JATENG</a> --}}
            {{-- </div> --}}
        </div>
    </footer><!-- End Footer -->
    @livewireScripts

    <div id="">
        <div class="bubble x1"></div>
        <div class="bubble x2"></div>
        <div class="bubble x3"></div>
        <div class="bubble x4"></div>
        <div class="bubble x5"></div>
        <div class="bubble x6"></div>
        <div class="bubble x7"></div>
        <div class="bubble x8"></div>
        <div class="bubble x9"></div>
        <div class="bubble x10"></div>
    </div>

    

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <script>
        function scrollToDownload() {
    
            if ($('.section-download').length != 0) {
                $("html, body").animate({
                    scrollTop: $('.section-download').offset().top
                }, 1000);
            }
        }
    </script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script>
        window.TrackJS &&
        TrackJS.install({
            token: "ee6fab19c5a04ac1a32a645abde4613a",
            application: "argon-design-system-pro"
        });
    </script>
        <!--jQuery-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!--Plugin JavaScript file-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>
        {{-- <script>
            $(".js-range-slider").ionRangeSlider({
                skin: "big",
                from: "4",
                grid : "true",
                values : ['Tidak Baik', 'Kurang Baik', 'Baik', 'Sangat Baik']
            });
        </script> --}}
        <script>
            $(".js-range-slider").ionRangeSlider({
                skin: "big",
                from: "4",
                grid : "true",
                values : ['Tidak Baik', 'Kurang Baik', 'Baik', 'Sangat Baik']
            });
        </script>

        <script>
            const svgs = document.querySelector('.rating1').children;
            for(let i = 0;i<svgs.length;i++){ 
                svgs[i].onclick = ()=>{
                    for(let j = 0;j<=i;j++){
                        svgs[j].classList.add("fill-yellow-200"); // this class should be added to whitelist while in production mode
                    }
                    for(let k = i + 1;k<svgs.length;k++){
                        svgs[k].classList.remove("fill-yellow-200"); // this class should be added to whitelist while in production mode
                    }
                }
            }
        </script>


      <script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
      <script src="https://unpkg.com/tippy.js@4"></script>
      <script>
          //Init tooltips
          tippy('.link',{
            placement: 'bottom'
          })
  
          //Toggle mode
          const toggle = document.querySelector('.js-change-theme');
          const body = document.querySelector('body');
          const profile = document.getElementById('profile');
          
          
          toggle.addEventListener('click', () => {
  
            if (body.classList.contains('text-gray-900')) {
              toggle.innerHTML = "☀️";
              body.classList.remove('text-gray-900');
              body.classList.add('text-gray-100');
              profile.classList.remove('bg-white');
              profile.classList.add('bg-gray-900');
            } else
            {
              toggle.innerHTML = "🌙";
              body.classList.remove('text-gray-100');
              body.classList.add('text-gray-900');
              profile.classList.remove('bg-gray-900');			
              profile.classList.add('bg-white');
              
            }
          });
          
      </script>

</body>

</html>