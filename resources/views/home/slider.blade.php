<section id="custom-banner" class="bg-white">
    <div
        class="container flex flex-col-reverse md:flex-row justify-center items-center px-7 mx-auto min-h-[650px] w-full space-y-0 md:space-y-0">
        <!--Left item--->
        <div class="flex flex-col md:w-3/5 gap-6">
            <h1 class="max-w-md text-4xl font-bold text-center md:text-5xl md:text-left text-brightRed">
                Bring Everyone together to build better products
            </h1>
            <p class="max-w-sm text-center text-darkGrayishBlue md:text-left">
                Network infrastructure can be a mix of hardware devices, software applications, and network
                services, including: Hardware and Software infrastructure .
            </p>
        </div>
        <div class="md:w-2/5">
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <img src="assets/web.png">
                </div>

                <div class="mySlides fade">
                    <img src="assets/hero_2.png">
                </div>

                <div class="mySlides fade">
                    <img src="assets/banner.png">
                </div>

            </div>
            <div class="text-center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
            {{-- <img src="assets/hero_1.png" class="h-96" /> --}}
        </div>

    </div>
</section>
<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
</script>
