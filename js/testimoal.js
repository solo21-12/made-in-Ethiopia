$(document).ready(function() {
    // Set the slide duration and interval time
    var slideDuration = 1000;
    var slideInterval = 3000;

    function slideTestimonials() {
        var testimonialsSlider = $('.testimonials-slider');
        var testimonialsWidth = testimonialsSlider.outerWidth();
        var slideCount = testimonialsSlider.find('.testimonial').length;
        var slideWidth = testimonialsSlider.find('.testimonial').outerWidth();
        var currentPosition = testimonialsSlider.scrollLeft();

        var nextPosition = currentPosition + slideWidth;


        if (currentPosition + testimonialsWidth >= slideCount * slideWidth) {
            nextPosition = 0;
        }
        testimonialsSlider.animate({
            scrollLeft: nextPosition
        }, slideDuration);
    }


    var slideIntervalId = setInterval(slideTestimonials, slideInterval);

    $('.testimonials-section').hover(
        function() {
            clearInterval(slideIntervalId);
        },
        function() {
            slideIntervalId = setInterval(slideTestimonials, slideInterval);
        }
    );
});