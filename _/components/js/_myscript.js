$(".collapse").collapse();




$('.panel-title').click(function() {
	//alert('yo');
});



$('.panel-heading a').each(function (index) {
			
			
			
			var hashCol = $(this).attr('href');
			var grandParent = $(this).parent().parent().attr('id');
			var gString = $('.' + grandParent);
			var btn = $(this).find("button");
			var btnID = $(btn).attr("id");
			var subString2 = btnID.substring(0, 3);	
			btnString = $('.' + subString2);
			btnIDString = $('.' + btnID);
					
			//console.log(btnString);
			
			var panelTitle  = $(this).parent().attr('class');
			console.log(panelTitle);
			
			
			titleSub = panelTitle.substring(0, 6);
			//console.log(titleSub);
			titleString = $('.' + titleSub);
			//console.log(titleString);
								
			$(hashCol).on('show.bs.collapse', function () {
				
				$(gString).css("border-bottom", "none");
				//$('.btn.mobile-toggle').addClass("contraction");
				
				
			$('.panel-title').click(function () {
					//console.log(this);
					$(this).find("button").addClass("contraction");
					
					//$(btnString).addClass("contraction");
					//$(btnString).removeClass("expansion");
				});					
		});
		
		

		
			$(hashCol).on('hidden.bs.collapse', function () {
				
				$(gString).css("border-bottom", "solid 1px #bbb");
				
				
				/*$(titleString).click(function () {
					$(btnString).removeClass("contraction");
					$(btnString).addClass("expansion");
				});*/
				
		});


});



/*Navigation*/
$("#home a:contains('Home')").parent().addClass('active');
$("#our-brands a:contains('Our Brands')").parent().addClass('active');
$("#global-corporate-housing a:contains('Global Corporate Housing')").parent().addClass('active');
$("#industry-insights a:contains('Industry Insights')").parent().addClass('active');
$("#vision-leadership a:contains('Vision and Leadership')").parent().addClass('active');
$("#news a:contains('News')").parent().addClass('active');
$("#marriott a:contains('Marriott')").parent().addClass('active');
$("#careers a:contains('Careers')").parent().addClass('active');


/*if ( $(window).width() < 992) {
	
	$('nav').removeClass("navbar-fixed-top");

}

if ( $(window).width() > 992) {
	
	$('nav').addClass("navbar-fixed-top");

}*/

