$(".collapse").collapse();$(".panel-title").click(function(){});$(".panel-heading a").each(function(e){var t=$(this).attr("href"),n=$(this).parent().parent().attr("id"),r=$("."+n),i=$(this).find("button"),s=$(i).attr("id"),o=s.substring(0,3);btnString=$("."+o);btnIDString=$("."+s);var u=$(this).parent().attr("class");console.log(u);titleSub=u.substring(0,6);titleString=$("."+titleSub);$(t).on("show.bs.collapse",function(){$(r).css("border-bottom","none");$(".panel-title").click(function(){$(this).find("button").addClass("contraction")})});$(t).on("hidden.bs.collapse",function(){$(r).css("border-bottom","solid 1px #bbb")})});$("#home a:contains('Home')").parent().addClass("active");$("#our-brands a:contains('Our Brands')").parent().addClass("active");$("#global-corporate-housing a:contains('Global Corporate Housing')").parent().addClass("active");$("#industry-insights a:contains('Industry Insights')").parent().addClass("active");$("#vision-leadership a:contains('Vision and Leadership')").parent().addClass("active");$("#news a:contains('News')").parent().addClass("active");$("#marriott a:contains('Marriott')").parent().addClass("active");$("#careers a:contains('Careers')").parent().addClass("active");