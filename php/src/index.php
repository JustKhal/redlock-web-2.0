<html>
<body>
<?php
$mysqli = new mysqli("mysql","username","password","redlock-db");
$query = "SELECT * FROM users";


echo '<table border="0" cellspacing="2" cellpadding="2">
      <tr>
          <td> <font face="Arial">ID</font> </td>
          <td> <font face="Arial">Nama</font> </td>
          <td> <font face="Arial">Alamat</font> </td>
          <td> <font face="Arial">Jabatan</font> </td>
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["ID"];
        $field2name = $row["Nama"];
        $field3name = $row["Alamat"];
        $field4name = $row["Jabatan"];

        echo '<tr>
                  <td>'.$field1name.'</td>
                  <td>'.$field2name.'</td>
                  <td>'.$field3name.'</td>
                  <td>'.$field4name.'</td>
              </tr>';
    }
    $result->free();
}
?>
</body>
</html>