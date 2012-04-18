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
				head.js("scripts/jquery.columnizer.min.js", function(){
					$('div.columns').columnize({ columns: 2 });
				});
			}
		});
	</script>
</body>
</html>