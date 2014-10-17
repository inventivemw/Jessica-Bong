/* Smooth scrolling */
$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 400);
            return false;
        }
    }
});

$(document).ready(function() {
  if($("#snowden").css("display") != "block") {
    $('#sidebar').stickyMojo({footerID: '#work-footer', contentID: '#main #main-content'});
  }
});

$(function() {
    $("img.lazy").lazyload();
});