<table border="1">

<tr>
    <th>User</th>
    <th>Category</th>
    <th>Status</th>
</tr>

<?php

include 'db.php';

$sql = "SELECT 
users.name,
reports.category,
reports.status

FROM reports

INNER JOIN users
ON reports.user_id = users.user_id";

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){

echo "
<tr>
<td>".$row['name']."</td>
<td>".$row['category']."</td>
<td>".$row['status']."</td>
</tr>
";

}

?>

</table>