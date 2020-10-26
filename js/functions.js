//LAZYLOADING TEST 2

document.addEventListener("DOMContentLoaded", function() {
	var lazyloadImages = document.querySelectorAll("img.lazy");    
	var lazyloadThrottleTimeout;
	
	function lazyload () {
	  if(lazyloadThrottleTimeout) {
		clearTimeout(lazyloadThrottleTimeout);
	  }    
	  
	  lazyloadThrottleTimeout = setTimeout(function() {
		  var scrollTop = window.pageYOffset;
		  lazyloadImages.forEach(function(img) {
			  if(img.offsetTop < (window.innerHeight + scrollTop)) {
				img.src = img.dataset.src;
				img.classList.remove('lazy');
			  }
		  });
		  if(lazyloadImages.length == 0) { 
			document.removeEventListener("scroll", lazyload);
			window.removeEventListener("resize", lazyload);
			window.removeEventListener("orientationChange", lazyload);
		  }
	  }, 20);
	}
	
	document.addEventListener("scroll", lazyload);
	window.addEventListener("resize", lazyload);
	window.addEventListener("orientationChange", lazyload);
  });


  //LAZYLOADING TEST 1
/*<img src="blank.png" class="lazyload" data-src="img/DSC00532-l.jpg" alt="Lazy Loading mit IntersectionObserver">

var io = new IntersectionObserver ( (entry) => {
		console.log(entry);
		document.querySelector(".lazyload").src = document.querySelector(".lazyload").dataset.src;
	},
	{}
);

io.observe (document.querySelector(".lazyload"));








<img src="blank.png" data-src="deco-medium.jpg" width="480" height="480" alt="scene10-s">
…

const items = document.querySelectorAll(".item img");
const li = items.length;
var io = new IntersectionObserver ( function (entries) {	
	console.log (entries);
	for (let i=0; i<li; i++) {
		items[i].src = items[i].dataset.src;
	}
},{});

for (let i=0; i<items.length; i++) {
	io.observe (items[i]);
}
      */