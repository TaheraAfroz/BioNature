
AOS.init();

// Automatically advance the sponsors carousel
$('#sponsorCarousel').carousel({
    interval: 90 // Change interval here (in milliseconds)
});

AOS.init();
$('#authorCarousel').carousel({
    interval: 3000, // 3 seconds
    pause: 'hover'
}); 