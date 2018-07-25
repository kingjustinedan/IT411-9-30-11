<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
@if($operation=="add")
<h1 style="color: red;">Operation: Addition</h1>
<h3>Addend: {{$num1}}</h3>
<h3>Addend: {{$num2}}</h3>
<h3>Sum: {{$sum}}</h3>

@elseif($operation=="sub")
<h1>Operation: Subtraction</h1>
<h3>Minuend: {{$num1}}</h3>
<h3>Subtrahend: {{$num2}}</h3>
<h3>Difference: {{$diff}}</h3>
@elseif($operation=="mul")
<h1>Operation: Multiplication</h1>
<h3>Multiplicand: {{$num1}}</h3>
<h3>Multiplier: {{$num2}}</h3>
<h3>Product: {{$mul}}</h3>
@elseif($operation=="div")
<h1>Operation: Multiplication</h1>
<h3>Dividend: {{$num1}}</h3>
<h3>Divisor: {{$num2}}</h3>
<h3>Qoutient: {{$div}}</h3>
@endif
</center>
</body>
</html>
