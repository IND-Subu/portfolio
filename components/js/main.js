'use strict';
$(document).ready(function(){
   if($(window).width() < 415){
    $('.hamburger').on('click', function(){
        $('.navbar').css('display',"flex");
    })
    $('.close-btn').on('click', function(){
        $('.navbar').css('display','none');
    })
   }
   $('.profile').on('click', function(){
    $('.profile-menu').toggleClass('hidden');
   })
})
