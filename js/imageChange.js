
var image1 = document.querySelector(".img1");
var image2 = document.querySelector(".img2");


image1.addEventListener("click", imagefunction);
image2.addEventListener("click", imageChange);

	function imagefunction(){
		var newimg= document.querySelector(".img1");
		newimg.setAttribute("src","Images/mardi-himal.jpeg");
	};

	function imageChange(){
		var newimg= document.querySelector(".img2");
		newimg.setAttribute("src","Images/poonhill.jpeg");
	};
