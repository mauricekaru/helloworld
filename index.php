<?php 
$now = time();
$secondsDelay = 86400; //one-day

?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="language" content="en" /> 
  <meta http-equiv="expires" content="<?php echo date('D, d M Y H:i:s O \G\M\T', ($now-$secondsDelay)) ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  
  <title>Maurice Test Page</title>
</head>
<body>
  <h1>Hello World!</h1>
</body>
</html>
