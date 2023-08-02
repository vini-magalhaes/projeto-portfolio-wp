jQuery(function($){

	$(".loadmore a").on('click',function(event){
		event.preventDefault();
		$(".loadmore").hide();
		$(".loadmoreProcessing").show();
		parent=$(this).parent();
		cpt=parent.data('cpt');
		busca= parent.data('busca');
		cat= parent.data('cat');
		target=parent.data('target');
		page=parseInt(parent.data('page'));
		pages=parseInt(parent.data('pages'));
		page++;
		info={
			action :'load_infinite_scroll',
			page : page,
			cpt : cpt,
			busca : busca,
			cat : cat,
		};
		parent.data('page',page);
		
		var jqxhr = $.post(ajaxTheme.url, info, function() {
			}).done(function(postsLoaded) {
				console.log(postsLoaded);
				$(".loadmoreProcessing").hide();
				$(target).append(postsLoaded);

				if(pages>page){
					$(".loadmore").show();
				}
				
			}).fail(function() {
			    console.log( "error" );
			}).always(function() {
		    
		});
	});
})