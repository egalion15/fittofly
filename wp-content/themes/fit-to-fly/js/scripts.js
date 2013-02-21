jQuery(document).ready(function() {


    $(".question").click(function() {
       $(this).next().toggle();
       
    });

 $("#show").mouseover(function(){
    $("#hwrap").css('display','block');
  });
$("#hiblock").mouseleave(function(){
  $("#hwrap").css('display','none');
});

 $("#filter").click(function(){
    $("#fliterblock").css("display",'block');
  });
$("#hidefilter").click(function(){
  $("#fliterblock").css("display",'none');
});




});


    $(document).ready(function() {

    var interval;

    $('#slides').roundabout({
         btnNext: '#arrowleft',
         btnPrev: '#arrowright',
         minOpacity: 1.0,
         minScale: 0.85
 
})
      
    .hover(
    function() {
// oh no, it's the cops!
    clearInterval(interval);
    },
    function() {
// false alarm: PARTY!
    interval = startAutoPlay();
    }
    );
// let's get this party started
    interval = startAutoPlay();
    });
    function startAutoPlay() {
    return setInterval(function() {
    $('ul').roundabout_animateToNextChild();
    }, 3000);



    }