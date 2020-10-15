<?php
$link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
// get the redirection url from GET variable

$re = !empty($_GET['url'])
? trim(strip_tags(stripslashes($_GET['url'])))
: '';

$img = !empty($_GET['img'])
? trim(strip_tags(stripslashes($_GET['img'])))
: '';

$wait = 6000; // time to wait before redirection occurs, in milliseconds

?>

<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<meta property="og:title" content="Title" />
	<meta property="og:site_name" content="Site name">
	<meta property="og:type" content="article" />
	<meta property="og:locale" content="pl_PL">
	<meta property="og:image" content="<?php echo $img;?>" />
	<meta property="og:image:width" content="800" />
	<meta property="og:image:height" content="800" />
	<meta property="og:url" content="<?php echo $link;?>" />
	<meta property="og:image:type" content="image/jpg">
</head>
<body>

<?php echo"
<script>
		var delay = ".$wait.";
		setTimeout(function(){ window.location = '".$re."'; }, delay);
</script>
";?>

</html>
