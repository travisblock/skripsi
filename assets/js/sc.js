$('.close').on('click', function(){
	$("#notify").animate({ height: 'toggle', opacity: 'toggle' }, '200', function(){
		$('#notify').remove();
	});
});

window.setTimeout(function(){
	$("#notify").animate({ height: 'toggle', opacity: 'toggle' }, '500', function(){
		$('#notify').remove();
	});
}, 6000);
