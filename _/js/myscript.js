
$(".collapse").collapse();

console.log('hi');

$('.panel-title').click(function() {
	//alert('yo');
});

$('#myCollapsible').on('hidden.bs.collapse', function () {
  	alert('booyah');
})
