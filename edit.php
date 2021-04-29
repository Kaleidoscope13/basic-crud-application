<?php
$id=$_GET['id'];

?>
<!Doctype html>
<html>
<head>
    <title>

    </title>
</head>
<body>
<form method="post" action="edit_logic.php">
    <label>Edit</label></br>
    <input type="hidden" name="id">
    <input type="text" name="course">
    <button type="submit">Submit</button>
</form>
</body>
</html>
