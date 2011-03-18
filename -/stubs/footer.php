<script>
// Javascript hotness from Glyphboard, by Neven Mrgan: mrgan.com/gb/
// Page Load setup
addEventListener("load", function()
{
	// Browser check
	
	// Look for iPhone OS
	if (navigator.appVersion.indexOf('iPhone OS ') < 0 && navigator.appVersion.indexOf('iPad') < 0)
	{ 
	    // No iOS here
	}
	else 
	{
		// We have an iPhone-type device deal!
		
		document.body.ontouchmove = function(e) { e.preventDefault(); };
	}	
}, false);
</script>
</body> 
</html>