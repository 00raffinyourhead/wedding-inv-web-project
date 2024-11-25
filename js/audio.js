

//AUDIO start

var audio = document.getElementById("audio");

var playPause = document.getElementById("playPauseBTN");
var count = 0;
  function playAudio(){
    if (count == 0){
      count = 1;
      audio.play();
      playPause.innerHTML = "<i class='bx bx-pause-circle audio-icon'></i>";
    }
    else{
      count = 0;
      audio.pause();
      playPause.innerHTML = "<i class='bx bx-play-circle audio-icon'></i>";
    }
  };
//AUDIO end

//AUTOHIDE BUTTON AUDIO end
$(document).ready(function(){
	$(window).scroll(function(){
		if($(window).scrollTop()>300){
			$('.btnAudio').fadeIn(250);
		}
		else{
			$('.btnAudio').fadeOut(250);
		}
	});
});

//FIXED HEADER start
   $(window).scroll(function(){
      if ($(this).scrollTop() > 20) {
         $(".header").addClass("fixed");
      }
      else {
         $(".header").removeClass("fixed");
      }
   })
//FIXED HEADER end
//lightGallery

    lightGallery(document.querySelector('.gallery-item'));
