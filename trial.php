<html>
<head>
<title>Form</title>
<style type="text/css">
.form_look
{
background-color:#A4E1FF;
}
</style>
</head>
<body class="form_look">

<?php
$email=$_POST["txtemail"];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 echo "Invalid email format.";
?> <a href="index.html">back</a>
<?php
}
else
{
echo $email;
}
?>
<span>Test</span>
</body>
</html>