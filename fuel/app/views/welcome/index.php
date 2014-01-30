<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Closetbean</title>
	<?php echo Asset::css('bootstrap.css'); ?>
	<style>
            @import url(http://fonts.googleapis.com/css?family=Ultra);
            html
            {
                height: 100%;
            }
            body
            {
                font-family: Ultra;
                min-height: 100%;
            }
            #upper_half
            {
                height:50%;
                width:100%;
                background-color: #ecf0f1;
            }
            #lower_half
            {
                height:50%;
                width:100%;
                background-color: #e74c3c;
            }
	</style>
</head>
<body>
    <div id="upper_half">upper half</div>
    <div id="lower_half">lower half</div>
</body>
</html>
