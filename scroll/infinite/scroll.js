
$(document).ready(function(){

	function lastAddedLiveFunc()
	{
		$('div#lastPostsLoader').html('<img src="bigLoader.gif">');

		$.get("loadmore.php", function(data){
			if (data != "") {
				//console.log('add data..');
				$(".items").append(data);
			}
			$('div#lastPostsLoader').empty();
		});
	}

	//lastAddedLiveFunc();
	$(window).scroll(function(){

		var wintop = $(window).scrollTop(), docheight = $(document).height(), winheight = $(window).height();
		var  scrolltrigger = 0.95;

		if  ((wintop/(docheight-winheight)) > scrolltrigger) {
			//console.log('scroll bottom');
			lastAddedLiveFunc();
		}
	});
});