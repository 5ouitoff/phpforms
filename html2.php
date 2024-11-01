<html>
<body>

<form action="welcome.php" method="POST">
Name:  <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
Website: <input type="text" name="website"><br>
Comment: <textarea name="comment" rows="5" cols="40"></textarea>
<input type="submit">
</form>



Passport <?php echo $_POST["name1"]; ?><br>
Your email address is: <?php echo $_POST["email"] ?>


</body>
</html>