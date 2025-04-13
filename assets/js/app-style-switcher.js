$(function () {
  "use strict";

  function handlesidebarposition() {
    $("#sidebar-position").change(function () {
      if ($(this).is(":checked")) {
        $("#main-wrapper").attr("data-sidebar-position", "fixed");
        $(".topbar .top-navbar .navbar-header").attr("data-navheader", "fixed");
      } else {
        $("#main-wrapper").attr("data-sidebar-position", "absolute");
        $(".topbar .top-navbar .navbar-header").attr(
          "data-navheader",
          "relative"
        );
      }
    });
  }
  handlesidebarposition();

  function handleheaderposition() {
    $("#header-position").change(function () {
      if ($(this).is(":checked")) {
        $("#main-wrapper").attr("data-header-position", "fixed");
      } else {
        $("#main-wrapper").attr("data-header-position", "relative");
      }
    });
  }
  handleheaderposition();

  function handlesidebarbg() {
    $(".theme-color .theme-item .theme-link").on("click", function () {
      var sidebarbgskin = $(this).attr("data-sidebarbg");
      $(".left-sidebar").attr("data-sidebarbg", sidebarbgskin);
    });
  }
  handlesidebarbg();

  function handleboxedlayout() {
    $("#boxed-layout").change(function () {
      if ($(this).is(":checked")) {
        $("#main-wrapper").attr("data-boxed-layout", "boxed");
      } else {
        $("#main-wrapper").attr("data-boxed-layout", "full");
      }
    });
  }
  handleboxedlayout();
});
