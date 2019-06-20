var v = $("#v");

// calling function on scroll
$("#videoWrap").on('mousewheel','#v',function(){
    var playVideoByScrollv = new PlayVideoByScrollv(v);
});

var PlayVideoByScrollv = function(video,e){

var evt=window.event || e //equalize event object
//delta returns +120 when wheel is scrolled up, -120 when scrolled down
var delta = evt.detail ? evt.detail*(-120) : evt.wheelDelta 

if(delta<=-120){
   video.currentTime += (1 / 24);
   video.play();
   setTimeout(function(){
   video.pause();
},40);
}
else{
   video.currentTime -= (1 / 24);
   video.play();
   setTimeout(function(){
   video.pause();
},40);

}

if (evt.preventDefault) //disable default wheel action of scrolling page
evt.preventDefault()
else
return false

}