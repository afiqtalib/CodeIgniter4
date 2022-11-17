<html>

<head>
  <title>Display records</title>
  <style>
    table,
    th,
    td {
      border: 1px solid black;
      border-collapse: collapse;
    }
  </style>
</head>

<body>
  <table width="600" cellspacing="5" cellpadding="5">
    <tr style="background:#CCC">
      <th>Sr No</th>
      <th>First_name</th>
      <th>email</th>
      <th>password</th>
      <th>gender</th>
      <th>date createdd</th>
      <th>phonee</th>
    </tr>
    <?php
    $i = 1;
    foreach ($data as $row) {
      echo "<tr>";
      echo "<td>" . $i . "</td>";
      echo "<td>" . $row->name . "</td>";
      echo "<td>" . $row->email . "</td>";
      echo "<td>" . $row->password . "</td>";
      echo "<td>" . $row->gender . "</td>";
      echo "<td>" . $row->created_date . "</td>";
      echo "<td>" . $row->phone . "</td>";


      echo "</tr>";
      $i++;
    }
    ?>
  </table>
</body>

</html>