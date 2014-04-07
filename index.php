<?php
header("HTTP/1.0 200 OK"); 
header("Status: 200 OK");
$query = explode("/",str_replace("/quotes/","",$_SERVER['REDIRECT_URL']));
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text-html; charset=utf-8">
<meta name="viewport" content="width=320; initial-scale=0.6666; maximum-scale=1.0; minimum-scale=0.6666" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta property="og:title" content="Share Quotes"/>
  <meta property="og:type" content="Web Application"/>
  <meta property="og:url" content="http://motyar.info/quotes"/>
  <meta property="og:image" content=""/>
  <meta property="og:site_name" content="Share Quotes"/>
  <meta property="og:description" content="Share Quotes"/>
  <?php if($query[0]!=''){ ?>
		<title><?=$query[0]?></title>
<?php }
else{ ?>
		<title>Share Quotes</title>
<?php
}
?>
	<meta name="title" content="Share Quotes" />
	<meta name="description" content="Share Quotes" />
	<style>
	@font-face {
  font-family: 'Droid Serif';
  font-style: normal;
  font-weight: 400;
  src: local('Droid Serif'), local('DroidSerif'), url(http://themes.googleusercontent.com/static/fonts/droidserif/v3/0AKsP294HTD-nvJgucYTaIbN6UDyHWBl620a-IRfuBk.woff) format('woff');
}
		body{
			width:55%;
			margin:10em auto;
			font-family: "Droid Serif", Calibri, "Times New Roman", serif;
		}
		a.c{
			text-decoration:none;
			position: fixed;
			top: 0;
			left: 0;
			font-size: 1em;
		}
		
		
		input{
			font-size:20px;
			width:90%;
			margin:10px auto;
			padding:5px;
		}
		.output{
			width:90%;
			margin:20 auto;
			text-align:center;
			overflow:scroll;
		}

blockquote {
	clear: both;
	display: block;
	padding: 5px 0 0 40px;
	margin: 40px 0 40px 10px;
	background: #fff url(bq.gif) no-repeat top left;
	border: none;
}

blockquote .quote-author {
	font-size: .7em;
	margin: 0;
	padding: 10px 0 0 0;
	font-style: normal;
	color: #555;
}

blockquote p {
	font-size: 2em;
	line-height: 1.2em;
	color: #111;
	margin: 0;
	
}


	</style>
	<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-9361092-10']);
		  _gaq.push(['_trackPageview']);
		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
</head>
<body>

<?php if($query[0]!=''){ 
	$pieces = explode("~", $query[0]);
	?>

<a href="/quotes/" class="c">+</a>
<blockquote><p><?=$pieces[0]?><?php if($pieces[1]){ ?><span class="quote-author"> <br />~ <strong><?=$pieces[1]?></strong></span><?php } ?></p></blockquote>
<?php }
else{ ?>
<h1>Share Quotes!</h1>
<form>
<input type="text" onkeyup="if(event.keyCode==13){window.location.href = 'http://motyar.info/quotes/'+(document.getElementById('contetns').value).replace('?', '_');};" id="contetns" placeholder="Type your quotes~author &amp; press Enter">
</form>
<?php
}
?>
 <!-- AddThis Button BEGIN -->
			<div class="addthis_toolbox addthis_default_style " style="margin:0 auto;width:400px;">
			<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
			<a class="addthis_button_tweet"></a>
			<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
			<a class="addthis_counter addthis_pill_style"></a>
			</div>
			<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4ece1a1424fed0b1"></script>
  <!-- AddThis Button END -->
</body>
</html>