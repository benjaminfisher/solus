(function(){
	var $columns = $('div.columns');

	if($columns.hasClass('3')){
		$columns.columnize( {columns:3} ).show();
	} else {
		$columns.columnize( {columns:2} ).show();
	};
})();
