<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>JavaScript Activity</title>
</head>
<body>

<h1>JavaScript Demo</h1>
<p id="demo">This is a JavaScript demo</p>
<button type="button" onclick="myFunction()">Try it</button>

<script src = "web_prac/activity.js">
	

</script>

<script>
	function toCelcius(fahrenheit) {
		return (5/9)* (fahrenheit-32);
	}

	document.getElementById("demo").innerHTML = toCelcius(77) +"degrees";
</script>
</body>
</html>