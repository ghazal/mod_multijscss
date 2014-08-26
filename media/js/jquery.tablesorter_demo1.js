/* modele a respecter

	(function($){
			$(document).ready(function() {
				// code ici
	
					
				});
	})(jQuery);
*/
	
	(function($){
			$(document).ready(function() {
		$("#tablesorter-demo").tablesorter({sortList:[[0,0],[2,1]], widgets: ['zebra']});
		$("#options").tablesorter({sortList: [[0,0]], headers: { 3:{sorter: false}, 4:{sorter: false}}});
	
					
				});
	})(jQuery);