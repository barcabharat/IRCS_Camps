<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--Optionaltheme-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
      <!--LatestcompiledandminifiedJavaScript-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
  </script>
  <style>
    * {
      color: #111111;
    }

    table,
    th,
    td {
      border: 1px solid black;
      border-collapse: collapse;
    }

    th,
    td {
      padding: 5px 10px;
      text-align: left;
    }

    select {
      font-size: 15px;
    }
  </style>
  <title>SortBy</title>
</head>
<body>
  <table>
    <tr>
      <th>CampCity</th>
      <th>CampDate</th>
      <th>ExpectedTurnOut</th>
      <th>ActualTurnOut</th>
      <th>SuccessRate</th>
    </tr>
<?php
    $conn = mysqli_connect("localhost","root","","redcross");
    $value = $_POST['sort'];
    if(isset($_POST['sortoption']))
    {
      if($_POST['sortoption']=='Greater than')
    {
      $sql = "SELECT * FROM campinfo where Success_Rate>$value order by Success_Rate desc";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($result))
      {
         echo '<tr><td>'.$row["Camp_Address"].'</td>
         <td>'.$row["Camp_Date"].'</td>
         <td>'.$row["Expected_Turnout"].'</td>
         <td>'.$row["Actual_Turnout"].'</td>
         <td>'.$row["Success_Rate"].'</td></tr>';
      }  
      mysqli_free_result($result);
    }
    else
    {
      $sql = "SELECT * FROM campinfo where Success_Rate<$value order by Success_Rate desc";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($result))
      {
         echo '<tr><td>'.$row["Camp_Address"].'</td>
         <td>'.$row["Camp_Date"].'</td>
         <td>'.$row["Expected_Turnout"].'</td>
         <td>'.$row["Actual_Turnout"].'</td>
         <td>'.$row["Success_Rate"].'</td></tr>';
      }  
      mysqli_free_result($result);
    }
    }
?>
</table>
</body>
</html>