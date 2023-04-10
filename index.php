<!DOCTYPE html>

<html>

<head>
	<title>
		How To Create Registration Form In PHP/MySQL Using PDO Query
	</title>
	
<style type="text/css">
body {
	width:600px;
	border:red 1px solid;
	border-style:dashed;
	margin:auto;
	padding:10px;
}
td {
	text-align:center;
	padding:10px;
}
table {
	margin:auto;
}
input[type="text"] {
	width:150px;
    font-size: 18px;
    border: blue 1px solid;
    text-indent: 5px;
	cursor:pointer;
}
input[type="password"] {
	width:150px;
    font-size: 18px;
    border: blue 1px solid;
    text-indent: 5px;
	cursor:pointer;
}
label {
	font-size:18px;
	color:blue;
    font-weight: bold;
    font-family: cursive;
}
h2 {
	color:red;
	text-align:center;
}
.submit_btn {
	margin-right: 70px;
    border: blue 1px solid;
    font-size: 18px;
    font-family: cursive;
    padding: 5px;
    font-weight: bold;
    color: blue;
    background: azure;
    border-radius: 4px;
}
.submit_btn:hover {
	margin-right: 70px;
    border: red 1px solid;
    font-size: 18px;
    font-family: cursive;
    padding: 5px;
    font-weight: bold;
    color: white;
    background: blue;
    border-radius: 4px;
	cursor:pointer;
}
.cancel_btn {
    border: red 1px solid;
    font-size: 18px;
    font-family: cursive;
    padding: 5px;
    font-weight: bold;
    color: red;
    background: azure;
    border-radius: 4px;
}
.cancel_btn:hover {
    border: blue 1px solid;
    font-size: 18px;
    font-family: cursive;
    padding: 5px;
    font-weight: bold;
    color: white;
    background: red;
    border-radius: 4px;
	cursor:pointer;
}
</style>

</head>

<body>

<form method="post" action="insert_query.php">

<h2></h2>
<table border="0" cellspacing="3" cellpadding="3" width="80%">
	<tr>
		<td><label>Adyňyz</label></td>
		<td><input type="text" name="first_name" autofocus="autofocus"></td>
	</tr>
	<tr>
		<td><label>Familýaňyz</label></td>
		<td><input type="text" name="last_name" autofocus="autofocus"></td>
	</tr>
	<tr>
		<td><label>Ulanyjyň ady</label></td>
		<td><input type="text" name="user_name" autofocus="autofocus"></td>
	</tr>
	<tr>
		<td><label>Parol</label></td>
		<td><input type="password" name="password" autofocus="autofocus"></td>
	</tr>
	<tr>
		<td colspan="2">
			<button class="submit_btn" type="submit" name="submit">Hasaba al</button>
			<button class="cancel_btn" type="reset" name="cancel">Goý bolsun</button>
		</td>
	</tr>
</table>

</form>

</body>

</html>
