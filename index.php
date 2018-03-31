<!DOCTYPE html>
<html>
<head>
	<title>Olah nilai html</title>
	<!-- Bootstrap CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<table>
		<form action="tampil.php" method="post">
		<h1 style="font-family : Century Gothic;">Olah nilai mahasiswa</h1>
		<tr>
			<td>UTS </td>
			<td> : <input type="text" name="uts"></td>
		</tr>
		<tr>
			<td>UAS </td>
			<td> : <input type="text" name="uas"></td>
		</tr>
		<tr>
			<td>QUIZ </td>
			<td> : <input type="text" name="quiz"></td>
		</tr>
		<tr>
			<td>TUGAS </td>
			<td>: <input type="text" name="tugas"></td>
		</tr>
		<tr>
			<td colspan="2">
    				<input type="submit" name="poses">
			</td>
		</tr>
		<tr>
			<td colspan="2"><hr></td>
		</tr>
		</form>
	</table>
</body>
</html>
