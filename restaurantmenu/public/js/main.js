/**
* Template Name: EstateAgency
* Updated: Jul 27 2023 with Bootstrap v5.3.1
* Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
    "use strict";
  
    /**
     * Easy selector helper function
     */
    const select = (el, all = false) => {
      el = el.trim()
      if (all) {
        return [...document.querySelectorAll(el)]
      } else {
        return document.querySelector(el)
      }
    }
  

    /**
     * Easy on scroll event listener 
     */
    const onscroll = (el, listener) => {
      el.addEventListener('scroll', listener)
    }
  
  

  
    /**
     * Preloader
     */
    let preloader = select('#preloader');
    if (preloader) {
      window.addEventListener('load', () => {
        preloader.remove()
      });
    }
  

    /**
     * Intro Carousel
     */
    new Swiper('.intro-carousel', {
      speed: 600,
      loop: true,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false
      },
      slidesPerView: 'auto',
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
      }
    });
  

  
  })()