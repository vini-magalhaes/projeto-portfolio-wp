jQuery(function($){

	 var header = document.getElementById('header');
	    
	    
	    window.addEventListener('scroll', function () {
	        if (window.scrollY > 10){
	        header.classList.add('show');
	        
	        } // > 0 ou outro valor desejado
	        else{
	         header.classList.remove('show');
	        
	    	}
	    }); 
	$('#footer .scroll-top').on('click', function(){

		$('html, body').animate({
			scrollTop: 0
		},2000)

	});
});