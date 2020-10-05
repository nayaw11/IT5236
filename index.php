<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Dnaya Wilson">
	<meta name="description" content="Calculator UI">
	<meta name="keywords" content="Dnaya Wilson Calculator">
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>

	<title>Wilsonator</title>
		<script>
		function insert(num){
			document.form.textview.value=document.form.textview.value+num;
		}
		
		function clean(){ //clear button
			document.form.textview.value= "";
		}
		
		function equals(){
			var eq = document.form.textview.value;
			
			if (eq){
			document.form.textview.value=eval(eq);
			}
		}
		
		function back(){
			var b=document.form.textview.value;
				document.form.textview.value=b.substring(0, b.length -1);
		}
		
		function sin(){
			document.form.textview.value= Math.tan(document.form.textview.value);
		}
		
		function cos(){
			document.form.textview.value= Math.tan(document.form.textview.value);
		}
		
		function tan(){ 
			document.form.textview.value= Math.tan(document.form.textview.value);
		}
		
		function square(){ //squared button
			document.form.textview.value= Math.pow(document.form.textview.value, 2);
		}
		
		function sqrt2(){ //taking the square root
			document.form.textview.value= Math.pow(document.form.textview.value, 1/2);
		}
		
		function number(value){ 
			document.form.textview.value += value;
		}
		</script>
		
	<link rel="stylesheet" href="calculator_styles.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Condiment">

</head>

<body>
	<header>
		<h1>Wilsonator</h1>
	</header>
	
	<div class="container">
		<form name="form">
			<input type="text" id="input" readonly="readonly" placeholder="Type Your Equation Here..." name="textview">
		</form>
		
		<table>
			<tr>
				<td><input class="button" type="button" value="AC" style="background: #003366" onclick="clean()"></td>
				<td><input class="button" type="button" value="x&sup2;" style="background: #003366" onclick="square()"></td>
				<td><input class="button" type="button" value="&#8730;" style="background-color: #003366" onclick="sqrt2()"></td>
				<td><input class="button" type="button" value="%" style="background: linear-gradient(to bottom, #0f5298 0%, #000000 100%);"  onclick="number(value)"></td>
			
			</tr>
			
			<tr>
				<td><input class="button" type="button" value="sin" onclick="sin()"></td>
				<td><input class="button" type="button" value="cos" onclick="cos()"></td>
				<td><input class="button" type="button" value="tan" onclick="tan()"></td>
				<td><input class="button" type="button" value="&#215;" style="background: linear-gradient(to bottom, #0f5298 0%, #000000 100%);" onclick="insert('*')"></td>
			</tr>
			
			
			<tr>
				<td><input class="button" type="button" value="7" onclick="insert(7)"></td>
				<td><input class="button" type="button" value="8" onclick="insert(8)"></td>
				<td><input class="button" type="button" value="9" onclick="insert(9)"></td>
				<td><input class="button" type="button" value="&#247;" style="background: linear-gradient(to bottom, #0f5298 0%, #000000 100%);" onclick="insert('/')"></td>
			</tr>
			
			<tr>
				<td><input class="button" type="button" value="4" onclick="insert(4)"></td>
				<td><input class="button" type="button" value="5" onclick="insert(5)"></td>
				<td><input class="button" type="button" value="6" onclick="insert(6)"></td>
				<td><input class="button" type="button" value="&#43;" style="background: linear-gradient(to bottom, #0f5298 0%, #000000 100%);" onclick="insert('+')"></td>
			</tr>
			
			<tr>
				<td><input class="button" type="button" value="1" onclick="insert(1)"></td>
				<td><input class="button" type="button" value="2" onclick="insert(2)"></td>
				<td><input class="button" type="button" value="3" onclick="insert(3)"></td>
				<td><input class="button" type="button" value="&#8722;" style="background: linear-gradient(to bottom, #0f5298 0%, #000000 100%);" onclick="insert('-')"></td>
			</tr>
			
			<tr>
				<td><input class="button" type="button" value="&lArr;" onclick="back()"></td>
				<td><input class="button" type="button" style="width: 70px" value="0" onclick="insert(0)"></td>
				<td><input class="button" type="button" value="." onclick="insert('.')"></td>
				<td><input class="button" type="button" style="height: 70px; background: linear-gradient(to bottom, #0f5298 0%, #000000 100%);" value="&#61;" onclick="equals()"></td>
			</tr>
			
		</table>
	</div>
</body>
</html>
