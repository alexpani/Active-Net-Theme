/**
 * This script adds the jquery effects to the Infinity Pro Theme.
 *
 * @package Infinity\JS
 * @author StudioPress
 * @license GPL-2.0+
 */
!function($){function e(e){return $(e).css("position")}function t(t,i){"fixed"==e(".site-header")?i.css("margin-top",t+"px"):i.removeAttr("style")}var i=$("body"),n=$(".offscreen-content"),s=$(".site-header").height(),o=$(".site-header"),r=$(".site-inner"),h=!1,a=$(window).height();$(document).on("scroll",function(){$(document).scrollTop()>50?$(".site-header").addClass("white"):$(".site-header").removeClass("white")}),i.hasClass("front-page")||(t(s,r),$(window).resize(function(){s=o.height(),t(s,r)}))}(jQuery);