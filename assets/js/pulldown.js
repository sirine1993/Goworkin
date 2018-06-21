$('#your_link_button').click(function () {
     
    $("#container").slideToggle('fast');
      
    if ($('.icon-button').hasClass('fa-angle-double-down')) {
          $('.icon-button').removeClass('fa-angle-double-down').addClass('fa-angle-double-up');
      } 
    
    else if ($('.icon-button').hasClass('fa-angle-double-up')) {
          $('.icon-button').removeClass('fa-angle-double-up').addClass('fa-angle-double-down');
      }
  
  });