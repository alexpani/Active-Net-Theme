/**
 * This script adds the parallax effects to the Parallax Pro theme.
 *
 * @package Parallax\JS
 * @author StudioPress
 * @license GPL-2.0+
 */
jQuery(function($){$(window).scroll(function(){scrolltop=$(window).scrollTop(),scrollwindow=scrolltop+$(window).height(),$(".parallax-1").css("backgroundPosition","50% "+-scrolltop/6+"px"),$(".parallax-2").length&&(sectionthreeoffset=$(".parallax-2").offset().top,scrollwindow>sectionthreeoffset&&(backgroundscroll=scrollwindow-sectionthreeoffset,$(".parallax-2").css("backgroundPosition","50% "+-backgroundscroll/6+"px"))),$(".parallax-3").length&&(sectionfiveoffset=$(".parallax-3").offset().top,scrollwindow>sectionfiveoffset&&(backgroundscroll=scrollwindow-sectionfiveoffset,$(".parallax-3").css("backgroundPosition","50% "+-backgroundscroll/2+"px")))})});