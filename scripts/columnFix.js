(function(){
	var $columns = $('div.columns');

	if($columns.hasClass('3')){
		$columns.columnize( {columns:3} );
	} else {
		$columns.columnize( {columns:2} );
	};
})();
