$(function() {
    $(document).scroll(function() {
        var $nav = $("#contactIfo");
        var $chairAnimation =$('#chairAnimation');
        var $tableAnimation =$('#tableAnimation');
        var $bedAnimation =$('#bedAnimation');
        var $ligthAnimation =$('#ligthAnimation');
        var $doorAnimation =$('#doorAnimation');
        var $gateAnimation =$('#gateAnimation');
        var $purposeAnimate =$('#purposeAnimate');
        $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
        $purposeAnimate.addClass("active", $(this).scrollTop() > $purposeAnimate.height());
        $chairAnimation.addClass("active", $(this).scrollTop() > $chairAnimation.height());
        $tableAnimation.addClass("active", $(this).scrollTop() > $tableAnimation.height());
        $bedAnimation.addClass("active", $(this).scrollTop() > $bedAnimation.height());
        $ligthAnimation.addClass("active", $(this).scrollTop() > $ligthAnimation.height());

        $doorAnimation.addClass("active", $(this).scrollTop() > $doorAnimation.height());
        $gateAnimation.addClass("active", $(this).scrollTop() > $gateAnimation.height());
        
    });
});
// // scrolltrigger
// function scrollTrigger(selector, options = {}) {
//     let selectScroll = document.querySelectorAll(selector)
//     selectScroll = Array.from(selectScroll)
//     selectScroll.forEach(selectScrollEach => {
//         addObserver(selectScrollEach, options)
//     })
// }

// function addObserver(selectScrollEach, options) {
//     if (!('IntersectionObserver' in window)) {
//         if (options.cb) {
//             options.cb(selectScrollEach)
//         } else {
//             entry.target.classList.add('active')
//         }
//         return
//     }
//     if (!('IntersectionObserver' in mobile)) {
//         if (options.cb) {
//             options.cb(selectScrollEach)
//         } else {
//             entry.target.classList.add('active')
//         }
//         return
//     }
//     let observer = new IntersectionObserver((entries, observer) => { //this takes a callback function which receives two arguments: the elemts list and the observer instance
//         entries.forEach(entry => {
//             if (entry.isIntersecting) {
//                 if (options.cb) {
//                     options.cb(selectScrollEach)
//                 } else {
//                     entry.target.classList.add('active')
//                 }
//                 observer.unobserve(entry.target)
//             }
//         })
//     }, options)
//     observer.observe(selectScrollEach)
// }
// scrollTrigger('.text-animation')
// setInterval(function() {
//     scrollTrigger('.text-animation-h1')
// }, 3000)
// scrollTrigger('.scroll-reveal', {
//     rootMargin: '-200px',
// })

$(function() {
    $(document).scroll(function() {
        var $nav = $("#contactInfo");
        var $navbar = $("#navbar");
        var $cover = $('#carouselFurniture');
        $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
        $navbar.toggleClass("scrolled-nav", $(this).scrollTop() > $cover.height());
    });
});
// document.onreadystatechange = function() {
//     if (document.readyState !== "complete") {
     
//         // document.querySelector("body").style.visibility = "hidden";
//         document.querySelector("nav").style.visibility = "hidden";
//         document.querySelector("#loader-section").style.visibility = "visible";
//         document.querySelector(".row").style.visibility = "none";
//     } else {
//         setInterval(function() {
//             $('body').addClass('loaded');
//         }, 2000)
//         setInterval(function() {
//             document.querySelector("nav").style.visibility = "visible";
         
//         }, 2200)



//     }
// };
$(document).ready(function() {
	
	setTimeout(function(){
		$('body').addClass('loaded');
	
	}, 1500);
	
});