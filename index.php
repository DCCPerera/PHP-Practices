<html>
	<head>
		<script type="text/javascript">
			function validateForm() {
				var fullName = document.forms["form1"]["fname"].value;
				var email = document.forms["form1"]["email"].value;
				var nic = document.forms["form1"]["nic"].value;
				if (fullName == "" || email == "" || nic == "") {
					alert("Full Name, Email and NIC fields must be filled out");
				}
				if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(form1.email.value)))
				{
					alert("You have entered an invalid email address!");
				}
			}
		</script>
	</head>
	<body>
		<h1 align="left">Register For Courses</h1>
		<form name="form1" action="register.php" onSubmit="validateForm()" method="post">
		<table border="0">
			<tr>
				<td>Full Name:</td>
				<td><input type="text" name="fname" /></td>
			</tr>
			<tr>
				<td>Contact Number:</td>
				<td><input type="text" name="contact"/></td>
			</tr>
			<tr>
				<td>NIC:</td>
				<td><input type="text" name="nic" /></td>
			</tr>
			<tr>
				<td>Course:</td>
				<td><select name="course">
					<option value="BIT">BIT</option>
					<option value="BCS">BCS</option>
					<option value="CIMA">CIMA</option>
					<option value="AAT">AAT</option>
				</select>
				</td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="email" /></td>
			</tr>
			<tr colspan="2">
				<td><input type="submit" name="register" value="REGISTER" />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="reset" name="clear" value="CLEAR" />
				</td>
			</tr>
		</form>
	</table>
	<form name="form2" action="view.php" method="post">
	<table border="0">
			<tr colspan="2">
				<td>
				If you are already registered, View your details here...
				</td>
			</tr>
			<tr colspan="2">
				<td>
				NIC: <input type="text" name="nicview" />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="submit" name="view" value="VIEW" />
				</td>
			</tr>
	</table>
	</form>
	</body>
</html>