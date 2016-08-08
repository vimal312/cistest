<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>datepicker demo</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>
<body>
 
<input id="datepicker">
    
 
<script>
$( "#datepicker" ).datepicker({
          maxDate: "+1m+1w+1d",
          numberOfMonths: 3
    });
</script>
 
</body>
</html>

