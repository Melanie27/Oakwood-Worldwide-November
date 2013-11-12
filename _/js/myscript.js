
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
					
			console.log(btnString);
			
			var panelTitle  = $(this).parent().attr('class');
			console.log(panelTitle);
			
			
			titleSub = panelTitle.substring(0, 6);
			console.log(titleSub);
			titleString = $('.' + titleSub);
			console.log(titleString);
								
			$(hashCol).on('show.bs.collapse', function () {
				
				$(gString).css("border-bottom", "none");
				//$('.btn.mobile-toggle').addClass("contraction");
				
				
			$('.panel-title').click(function () {
					console.log(this);
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

