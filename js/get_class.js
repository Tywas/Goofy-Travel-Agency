console.log("get_class.js in play");
$(document).ready(function() {
    var country = "";
    $("path").mouseenter(function(event){
        if(null == $(event.target).attr('class')){
            country = $(event.target).attr('name')
            // console.log($(event.target).attr('name'));
        } else {
            country = $(event.target).attr('class')
            // console.log($(event.target).attr('class'));
        }
        $(event.target).attr('title', country)
        // console.log(country);
    });

    jQuery("path").mousemove(function(e) {
        jQuery(".hovertext").text(jQuery(this).attr('title'));
        jQuery(".hovertext").css({
          'top': e.pageY - 20,
          'left': e.pageX
        }).fadeIn('slow');
      });
});