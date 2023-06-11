'use strict';
$(document).ready(function () {
    // Search Box finctionality..
    $('#search_img').on("mouseenter", function () {
        $("#search_box").css({ "width": "100%", "height": "100%", "border-radius": "15px", "box-shadow": "0px 2px 8px black" });
        $("#search_box").attr("placeholder", "Search here..");
        $("#search_box").fadeIn();
    })
    $("#search_bar").on("mouseleave", function () {
        $("#search_box").css({ "width": "0%", "height": "0%" });
        $("#search_box").fadeOut();
    })
    // Search box functionality for mobile devices
    $('.search_img').on("mouseenter", function () {
        $(".search_box").css({ "width": "100%", "height": "100%", "border-radius": "15px", "box-shadow": "0px 2px 8px black" });
        $(".search_box").attr("placeholder", "Type..");
        $(".search_box").fadeIn();
    })
    $(".search_bar").on("mouseleave", function () {
        $(".search_box").css({ "width": "0%", "height": "0%" });
        $(".search_box").fadeOut();
    })

    // Toggle Profile On/Off
    $(".profile").on("click", function () {
        $('.menu_box_right').toggleClass('hidden');
    })

    // Left Side Bar toggle
    $('.hamburger').on('click', function () {
        $('.navbar').toggleClass('leftSideToggle');
    })
    $('.closeBtn').on('click', function () {
        $('.navbar').toggleClass('leftSideToggle');
    })
})