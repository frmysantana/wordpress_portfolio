// responsive code snippet from andrew kao (username: drewcodesthings)
// needs jquery

// for mobile adjustments (at about 500px), try to make html/body base font as 40px so that the font is legible.
//  may also have to reset element widths so that they don't stick out to side.

// Resize script
var responsive_window = function() {
      
      //Max width is the width of the entire UI in pixels. So 1500 below is 1500px.
      var base_rem = parseInt($("html").css('font-size').substr(0, 2), 10);
      var max_width = 1450;

      $(window).resize(function(){
          if ($(window).width() <= max_width) {  
            responsive_font();
          } 
        //   else if ($("body").css("font-size") != "16px") { // '16px' must match body's base font size 
        //       $("body").css('font-size', "100%");
        //   }
      });
  
    //   debugger;

      function responsive_font() {
          var rem_perc, new_rem;
          var window_width = $("#site_content-js").width();
  
          if($(window).width() >= max_width){
              new_rem = base_rem;
          } else {
            // Take the max-width from above and divide it by 100 and insert below. So 1500 becomes 15.
              rem_perc = window_width/max_width;
              new_rem = base_rem * rem_perc; 
          }
  
          $("html").css('font-size', new_rem + "px");
      }

      responsive_font();
  }();