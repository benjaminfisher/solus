	</div><!--End Content Div -->
	
	<footer>
		<p class="copy">Copyright &copy; Solus Inc, 2010</p>
		<a class="credit_link" title="Media Drink" href="http://mediadrink.com">
        	<img alt="site design by media drink" src="http://media.mediadrink.com/media_drink_wave_dark_brown.png" />
      	</a>
	</footer>
	
	<script>
		head.js("http://code.jquery.com/jquery.min.js", "http://use.typekit.com/byh6yog.js",
		function(){
			try{Typekit.load();}catch(e){};
			
			if(head.browser.ie){
				head.js("scripts/jquery.columnizer.min.js",
				function(){
					$columns = $('div.columns');
					
					if($columns.hasClass('3')){
						$columns.columnize( {columns:3} ).show();
					} else {
						$columns.columnize( {columns:2} ).show();
					};
				});
				
				head.js("https://ajax.googleapis.com/ajax/libs/mootools/1.4.5/mootools.js",
						"scripts/selectivizr-min.js");
			};
		});
	</script>
</body>
</html>