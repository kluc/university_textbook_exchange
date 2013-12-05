<HTML>
	<HEAD>
		<TITLE>Sell Books</TITLE>
	</HEAD>
	<BODY>
		<h1>Enter information of book to sell</h1>
		<form action = "sellverification.php" method="POST">
		<table cellspacing="10">
			<tr>
				<td><b>Title: </b></td>
				<td><input = "text" name="title"/></td>
			</tr>
			<tr>
				<td><b>ISBN: </b></td>
				<td><input = "text" name="isbn"/></td>
			</tr>
			<tr>
				<td><b>Author: </b></td>
				<td><input = "text" name="author"/></td>
			</tr>
			<tr>
				<td><b>Price: </b></td>
				<td><input = "text" name="price"/></td>
			</tr>
			<tr>
				<td><input type="submit" value="submit"/></td>
			</td>
		</table>
		</form>
		<?php
			echo "test";
			?>
	</BODY>
</HTML>
