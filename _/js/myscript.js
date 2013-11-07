
$(".collapse").collapse();

console.log('hi');

$('.panel-title').click(function() {
	//alert('yo');
});

$('#collapseOne').on('hidden.bs.collapse', function () {
  	alert('booyah');
})
