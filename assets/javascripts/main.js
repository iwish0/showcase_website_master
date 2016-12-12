$(document).ready(function(){
	var showCaseImgLeftSide=$('.showcase .img-left-slide');
	var showCaseImgRightSide=$('.showcase .img-right-slide');
	var companyDescriptionImgLeftSide=$('#companyDescription .img-left-slide');
	var companyDescriptionImgRightSide=$('#companyDescription .img-right-slide');
	
	function moveImage(target){
		$(target).animate({left:"0px",opacity:1},800);
	}
	
	setTimeout(function(){
		moveImage(companyDescriptionImgLeftSide)
	},800);
	setTimeout(function(){
		moveImage(companyDescriptionImgRightSide)
	},800);
	setTimeout(function(){
		$('#social-media ul > li > a > img').animate({width:'50px',height:'50px'},800);
	},1800);

	$(window).scroll( function () {
		showCaseImgLeftSide.each ( function () {
        	if ( ( $(this).offset().top - ($(this).height()*1.5) ) < $(window).scrollTop() )
         		moveImage($(this));
    	});
   		showCaseImgRightSide.each ( function () {
        	if ( ( $(this).offset().top - ($(this).height()*1.5) ) < $(window).scrollTop() )
          		moveImage($(this));
    	});
    });




	
/**
	$(window).on('scroll',function(){
 		if($(imgLeftSide).offset().top>400){
 				moveImage($(this));
 				alert($(this));
 				
 		}
 	});
	

	$(window).on('scroll',function(){
 		if($(this).scrollTop()>400){
 				moveImage(imgLeftSide);
 				moveImage(imgRightSide);
 		}
 	});


	
	/**
	$("a").click(function(e){
 		e.preventDefault();
 		$('html,body').animate({scrollTop:$($(this).attr('href')).offset().top - $('.fixed-container-class').outerHeight()},1000);
	});
	**/


	$("a").click(function(e){
		
 		e.preventDefault();
 	//	$('li.current_sub').prevAll("li.par_cat:first");
 		
 	
 		// je récupère les coordonnées de l'ancre (position par rapport au haut de page)
 		// et je sctocke cette valeur dans la propriété scrollTop pour que le scroll se positionne à cette hauteur
 		// scrollTop: propriété pour définir ou récpurer la hauteur du scroll :exemple (le scroll est à 400px du haut de la page)
 	
 		
 			$('html,body').animate({scrollTop:($(this).closest('.tab-content')).offset().top-$('.navbar').outerHeight()},600);
 	});

 	$('#social-media img').hover(function(){
 		$(this).animate({width:"+=5px",height:"+=5px"},200);
 	},function(){
 		$(this).animate({width:"-=5px",height:"-=5px"},200);
 	});
});