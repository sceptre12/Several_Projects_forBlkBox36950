window.addEventListener('DOMContentLoaded', function(){

	// adding variables to tfor javascript initialization 
	var isStreaming = false,
	v = document.getElementById('v'),
	c = document.getElementById('c'),
	grey = document.getElementById('grey');

	con = c.getContext('2d');
	w = 600,
	h = 420,
	greyscale = false;

	// an event listener is set up called canplay event 
	// (raised when the video is avalable to play) to initalize the canvas 
	v.addEventListener('canplay', function(e) {
		if(!isStreaming){
			// video width isn't always set correctly in all browsers
			if(v.videoWidth > 0) h = v.videoHeight / (v.videoWidth / w);
			c.setAttribute('width', w);
			c.setAttribute('height', h);
			// Reverse the canvas image
			con.translate (w, 0);
			con.scale(-1, 1);
			isStreaming = true;
		}

	}, false);

	// when the video stream starts to pal, we need to copy the video image to the canvas
	// element we do so by waiting for the play event and the using set Interval to call
	// our copying code every 33 milliseconds
	v.addEventListener('play', function(){
		// every 33 milliseconds copy the video image to the canvas
		setInterval(function(){
			if(v.paused || v.ended) return;
			con.fillRect(0, 0, w,h);
			con.drawImage(v, 0,0 , w, h);
			if(greyscale) goingGrey();
		},33);
	}, false);

	// this is the code for turning he video grey.. there needs to be a click handler event for that 
	// and also the function that turns the canvas contents grey 
	grey.addEventListener('click' , function(){
		greyscale = !greyscale;
	}, false);
	var goingGrey = function() {
		var imageData = can.getImageData(0,0,w,h);
		var data = imageData.data; 
		for (var i = 0; i< data.length; i += 4){
			var bright = 0.34  * data[i] + 0.5 * data[i + 1] + 0.16 * data[i + 2];
			data[i] = bright;
			data[i + 1] = [bright]; 
		}
		con.putImageData(imageData, 0, 0);
	}



	navigator.getUserMedia = (navigator.getUerMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia);
	 if(navigator.getUserMedia){
	 	// Request access to video only 
	 	navigator.getUserMedia(
		 	{
		 		video: true,
		 		audio: false
		 	},
		 	function(stream){ var url = window.URL || window.webkitURL;
		 		v.src = url ? url.createObjectURL(stream) : stream;
		 		v.play();
		 	},
		 	function(error){ alert('Something went wrong. (error code' + error.code + ')');
		 	}
	 	);
	 }
	 else
	 {
	 	alert('Sorry, the browser you are usng dosen\'t support getUserMedia');
	 	return;
	 }
 });