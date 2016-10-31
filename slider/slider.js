jQuery(document).ready(function() {

  var ul = $(".slider ul");
  var slide_count = ul.children().length;
  var ul_width = 100*slide_count;
  var slide_width_pc = 100.0 / slide_count;  
  var slide_index = 0;

  ul.css({"width":ul_width+"%"});

  ul.find("li").each(function(indx) {
    var left_percent = (slide_width_pc * indx) + "%";
    $(this).css({"left":left_percent});
    $(this).css({width:(100 / slide_count) + "%"});
  });

  // Listen for click of prev button
  $(".slider .prev").click(function() {
    console.log("prev button clicked");
    slide(slide_index - 1);
  });

  // Listen for click of next button
  $(".slider .next").click(function() {
    console.log("next button clicked");
    slide(slide_index + 1);
  });

  var slide = function (new_slide_index=0,slide_time =400) {

    if(new_slide_index < 0 || new_slide_index >= slide_count) return; 

    var margin_left = (new_slide_index * (-100)) + "%";

    ul.animate({"margin-left": margin_left}, slide_time, function() {

      slide_index = new_slide_index

    });

  };

    slide(new_slide_index=2,slide_time=4000);

  });