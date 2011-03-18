<?php include('stubs/header.php'); ?>
<p>
    <input id="redirect-url" readonly="readonly" value="<?php echo htmlspecialchars($new_url); ?>" />
	→ <span><?php echo htmlspecialchars($url); ?></span>
</p>
<p>
	<a href="http://twitter.com/?status=<?php echo urlencode($new_url); ?>">Tweet via Web</a>
    <a class="ios-links" href="twitterrific:///post?message=<?php echo urlencode($new_url); ?>">Twitterrific</a>
</p>
<script>
var input = document.getElementById('redirect-url');

input.onclick = function(){
    input.focus();
    if (navigator.appVersion.indexOf('iPhone OS ') < 0 && navigator.appVersion.indexOf('iPad') < 0)
	{   
	    input.select();
    }
};
</script>
<?php include('stubs/footer.php'); ?>