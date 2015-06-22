<?php
require  __DIR__ . '/lib/medoo.php';
 
$database = new medoo(array(
	// required
	'database_type' => 'mysql',
	'database_name' => 'ishetbijna',
	'server' => 'localhost',
	'username' => 'ishetbijna',
	'password' => 'uWw%vy8F#MNdJ6W2ACX$',
	'charset' => 'utf8',
 
	// optional
	'port' => 3306,
	// driver_option for connection, read more from http://www.php.net/manual/en/pdo.setattribute.php
	'option' => array(
		PDO::ATTR_CASE => PDO::CASE_NATURAL
	)
));
if ($_SERVER['REQUEST_URI'] != '/') {
    $database->insert("suggestions", array(
        'request' => $_SERVER['REQUEST_URI']
    ));
}
 
?><html>
<head>
  <title>Is het bijna ...?</title>

  <link rel="shortcut icon" href="http://ishetbijna.nl/favicon.ico">

  <!-- Latest compiled and minified CSS -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> -->

  <!-- Optional theme -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> -->

  <!-- Latest compiled and minified JavaScript -->
  <script async src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

  <style>
    html, body, #map-canvas {
      height: 100%;
      margin: 0px;
      padding: 0px
    }
    body {text-align: center;}

    a#answer {
      display: inline-block;
      margin-top: 200px;
      font-weight: bold;
      font-size: 120pt;
      font-family: Arial, sans-serif;
      text-decoration: none;
      color: black;
    }
  </style>

  <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/favicon-194x194.png" sizes="194x194">
  <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#00aba9">
  <meta name="msapplication-TileImage" content="/mstile-144x144.png">
  <meta name="theme-color" content="#c0c0c0">

</head>
<body>
  <a id="answer"
    href="http://ishetbijna.nl/live"
    title="Is het bijna Live?">
    NEE
  </a>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64171457-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
