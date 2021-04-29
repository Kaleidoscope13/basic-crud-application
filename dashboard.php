
<?php
require 'db_conn.php';
$sql='select * from courses';
$result=$conn->query($sql);
?>

<!Doctype html>
<html>
<head>
    <title>

    </title>
</head>
<body>
<h1>Welcome</h1>
<form method="post" action="dashboard_logic.php">
    <label>Add a course</label>
    <input type="text" name="course">
    <button type="submit">Submit</button>
</form>
<table>
<tr>
    <th>course title</th>
</tr>
<?php
//fetch data to table body using array
while($row=mysqli_fetch_assoc($result))
{
    ?>
    <tr>
        <td><?php echo $row['title'] ?></td>

        <td><a href="edit.php?id=<?php echo $row['id'];?>">edit</a></td>
        <td><a href="delete.php?id=<?php echo $row['id']; ?>">delete</a></td>
    </tr>
    <?php
}
?>
</table>
<a href="logout.php">logout</a>
</body>
</html>

