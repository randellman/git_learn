var $ = jQuery.noConflict();

$(document).ready(function () {
  
    $('.left-side a:not(.link)').click(function (e) {
		e.preventDefault();
	});

    
    $(".account__current li[rel]").click(function () {
      $(".tab-container").hide().removeClass("current");
      var activeTab = $(this).attr("rel");
      $("#" + activeTab)
        .fadeIn(200)
        .addClass("current");
    
      $(".account__current li").removeClass("current");
      $(this).addClass("current");
    });

    
  // show first content by default
  $('#tabs-nav li:first-child').addClass('address-active');
  //$('.content').hide();
  $('.content:first-child').show();

  // click function
  $('#tabs-nav li').click(function(){
    $('#tabs-nav li').removeClass('address-active');
    $(this).addClass('address-active');
    $('.content').hide();
    
    var activeTab = $(this).find('a').attr('href');
    $(activeTab).fadeIn();
    return false;
    
  });
/*
  $('.tab').on('click', function(evt) {
    evt.preventDefault();
    $(this).toggleClass('address-active');
    var sel = this.getAttribute('data-toggle-target');
    $('.tab-content').removeClass('address-active').filter(sel).addClass('address-active');
});*/








$('.tab-nav li').on('click', function(ev) {
  console.log($($(this).data('href'))[0]);
  
  /*.addClass('active').siblings('.active').removeClass('active');*/
  $([$(this)[0], $($(this).data('href'))[0]]).addClass('active').siblings('.active').removeClass('active');
  
});
});





