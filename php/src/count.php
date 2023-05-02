<html>
<body>
<?php
$mysqli = new mysqli("mysql","username","password","redlock-db");
$query = "SELECT * FROM users";
$count = 0;

echo '<table border="0" cellspacing="2" cellpadding="2">
      <tr>
          <td> <font face="Arial">Total Users</font> </td>
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $count++;
    }

    $result->free();
}
echo '<tr>
            <td>'.$count.'</td>
          </tr>';
?>
</body>
</html>