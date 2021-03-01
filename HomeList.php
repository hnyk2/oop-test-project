<?php
include ('Homes.php');
$home = new Home();
$home->connect();
?>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width:fit-content;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Homes</h2>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Address</th>
  </tr>
  <tr>
    <td>null</td>
    <td>null</td>
    <td>null</td>
  </tr>
 
</table>

</body>
</html>

