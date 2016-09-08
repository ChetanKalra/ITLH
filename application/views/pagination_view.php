<html>
<head>
<title>Codelgniter pagination</title>
<link rel="stylesheet" type="text/css" href="../../../public/css/style1.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
 <div id="container">
  <h1>Countries</h1>
  <div id="body">
<?php
foreach($results as $data) {
    echo $data->name . " - " . $data->id . "<br>";
}
?>
   <p><?php echo $links; ?></p>
  </div>
  <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
 </div>
</body>
</html>