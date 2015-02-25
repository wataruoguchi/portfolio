<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Wataru Oguchi | Portfolio</title>
	<!-- For Search Engines -->
	<meta name="description" content="Wataru Oguchi, software engineer | Portfolio">
	<!-- For Mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<!-- - - - - - - CSS - - - - - - -->
	<!-- Vendor -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="./lib/Animate/animate.css">
	<!-- Custom -->
	<link rel="stylesheet" href="./css/style.css">
</head>
<body data-spy="scroll" data-target="#portfolio-navbar-collapse">
	<?php include("./partials/portfolio.php"); ?>
</body>
</html>
<!-- - - - - - - JavaScript - - - - - - -->
<!-- Vendor -->
<script src='https://code.jquery.com/jquery-2.1.3.min.js'></script>
<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js'></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script>
	$('body').scrollspy({target: '#portfolio-navbar-collapse'});
</script>
<script defer src="./js/scroll.js"></script>

<script src='./lib/jQuery/jquery.fittext.js'></script>
<script>
	// https://github.com/davatron5000/FitText.js
	$('#fittext1').fitText(0.63);
	$('#fittext2').fitText(0.67);
	$('#fittext3').fitText(0.44);
</script>

<script async src="./js/validation.js"></script>
<script>
	function buttonActive(){isAbleToBeActive("input-email", "input-name", "input-message", "submit");};
	$("#input-name").blur(function(){checkNull("input-name") ? $("#input-name-error").css('display', 'none') : $("#input-name-error").css('display', 'inline-block'); buttonActive();});
	$("#input-email").blur(function(){checkEmail("input-email") ? $("#input-email-error").css('display', 'none') : $("#input-email-error").css('display', 'inline-block'); buttonActive();});
	$("#input-message").blur(function(){checkNull("input-message") ? $("#input-message-error").css('display', 'none') : $("#input-message-error").css('display', 'inline-block'); buttonActive();});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59923195-1', 'auto');
  ga('send', 'pageview');
</script>
