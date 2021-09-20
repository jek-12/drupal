/**
 * @file
 * Global utilities.
 *
 */
(function($, Drupal) {

  'use strict';

  Drupal.behaviors.examexam = {
    attach: function (context, settings) {
      // Custom code here

      // adaptive changes the class to hide the items (links & search-bar)
      $(".navbar-toggler").click(function () {
        if ($(".navbar-toggler").attr("aria-expanded") !== false) {
          $("#block-sociallinksheader").toggleClass("check");
          $("#block-examexam-search").toggleClass("check");
        }
      });

      // hide navbar on scroll
      let prevScrollpos = window.pageYOffset;
      window.onscroll = function () {
        let currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
          $("#navbar-main").css("top", "39px");
          // $("#block-examexam-search").css("top", "-80px");
        }
        else {
          $("#navbar-main").css("top", "-200px");
          // $("#block-examexam-search").css("top", "-280px");
          $("#CollapsingNavbar").removeClass("show");
          $("#block-examexam-search").removeClass("check");
          $("#block-sociallinksheader").removeClass("check");
        }
        prevScrollpos = currentScrollPos;
      }

      // navbar items
      let ul_items = $('#header .navbar-nav li').children().toArray();
      $("#default_active").addClass("active1");
      $("#default_active span").css("color", "#010111");
      // change underlined elements
      for (let i = 0; i < ul_items.length; i++) {
        if ($(ul_items[i]).attr("href") === window.location.pathname) {
          $(ul_items[i]).addClass("active_item");
          $(ul_items[i]).css("color", "#010111");
          $("#default_active").removeClass("active1");
          $("#default_active span").css("color", "#38383e");
        } else if ($("#default_active").attr("href") === window.location.pathname) {
          $("#default_active").addClass("active1");
          $("#default_active span").css("color", "#010111");
        }
      }
    }
  }
})(jQuery, Drupal);
