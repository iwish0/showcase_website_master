$(document).ready(function(){
	var imgLeftSide=$('.img-left-slide');
	var imgRightSide=$('.img-right-slide');
	
	function moveImage(target){
		$(target).animate({left:"0px",opacity:1},1000);
	}
	setTimeout(function(){
		moveImage(imgLeftSide)
	},1000);
	setTimeout(function(){
		moveImage(imgRightSide)
	},1000);
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
 		$(this).animate({width:"+=10px",height:"+=10px"},300);
 	},function(){
 		$(this).animate({width:"-=10px",height:"-=10px"},300);
 	});
});