 /**
   * Slider Home
   */

  /**
   * Mobile Slider
   */

   let slideIndex = 1;
   showSlides(slideIndex);
 
   function plusSlides(n) {
     showSlides((slideIndex += n));
   }
 
   function showSlides(n) {
     let i;
     let slides = document.getElementsByClassName("slider-clients-reviews");
     if (n > slides.length) {
       slideIndex = 1;
     }
     if (n < 1) {
       slideIndex = slides.length;
     }
     for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
     }
     slides[slideIndex - 1].style.display = "flex";
   }
 
   /**
    * Desktop Slider
    */
 
   let sliderIndexDesktop = 1;
   showSlidesDesktop(slideIndex);
   function plusSlidesDesktop(n) {
     showSlidesDesktop((sliderIndexDesktop += n));
   }
   function showSlidesDesktop(n) {
     let i;
     let slides = document.getElementsByClassName("reviews-slider");
     if (n > slides.length) {
       sliderIndexDesktop = 1;
     }
     if (n < 1) {
       sliderIndexDesktop = slides.length;
     }
     for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
     }
     slides[sliderIndexDesktop - 1].style.display = "flex";
   }