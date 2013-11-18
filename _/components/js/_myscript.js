$(".collapse").collapse();




$('.panel-title').click(function() {
	//alert('yo');
});

$('#collapseOne').on('show.bs.collapse', function () {
		$('#btn-1').css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-contract.jpg)");
});

$('#collapseOne').on('hidden.bs.collapse', function () {
		$('#btn-1').css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-expand.jpg)");
});

/*Two*/

$('#collapseTwo').on('show.bs.collapse', function () {
		$('#btn-2').css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-contract.jpg)");
});

$('#collapseTwo').on('hidden.bs.collapse', function () {
		$('#btn-2').css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-expand.jpg)");
});

/*Three*/

$('#collapseThree').on('show.bs.collapse', function () {
		$('#btn-3').css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-contract.jpg)");
});

$('#collapseThree').on('hidden.bs.collapse', function () {
		$('#btn-3').css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-expand.jpg)");
});

/*Four*/

$('#collapseFour').on('show.bs.collapse', function () {
		$('#btn-4').css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-contract.jpg)");
});

$('#collapseFour').on('hidden.bs.collapse', function () {
		$('#btn-4').css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-expand.jpg)");
});

/*Five*/

$('#collapseFive').on('show.bs.collapse', function () {
		$('#btn-5').css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-contract.jpg)");
});

$('#collapseFive').on('hidden.bs.collapse', function () {
		$('#btn-5').css("background-image", "url(http://planb-november.herokuapp.com/images/icons/icon-mobile-expand.jpg)");
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
			
			var panelTitle  = $(this).parent().attr('class');
			titleSub = panelTitle.substring(0, 6);
			titleString = $('.' + titleSub);
			
								
			/*Add and remove the bottom border from the header when collapsing and expanding the accordion*/
			
			$(hashCol).on('show.bs.collapse', function () {
				
				$(gString).css("border-bottom", "none");				
			});
		
		
			$(hashCol).on('hidden.bs.collapse', function () {
				
				$(gString).css("border-bottom", "solid 1px #bbb");
						
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

