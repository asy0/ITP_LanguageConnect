<?php
include_once '../backend/db_connect.php';


//$username=$_SESSION['username'];

/*if($_SESSION["valid_user"] != 1){
  echo "Bitte logge dich zuerst ein!";
  header("location: login.php");
}
*/
?>



<head>

<style>

    table{

    //position: center;
    //left: 50%;
    //transform: translate(-50%);
        margin-left: 300px;


        width: 300px;
        height: 100px;
        background-color: #9ad0ed;
        border: 1px solid #666;
        box-shadow: 2px 2px 12px rgba(0,0,0,0.2), -1px -1px 8px rgba(0,0,0,0.2);

    }


    th,td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #666;
    }


    #header{
        background-color: #1e7b7b;
    }

    tr:hover{
        background-color:#85adad;
        transform: scale(1.02);
        box-shadow: 2px 2px 12px rgba(0,0,0,0.2), -1px -1px 8px rgba(0,0,0,0.2);

    }


</style>
</head>

<body>
<?php
include_once 'adminnav.php';
?>


<?php
$sql = "SELECT * from users;";
$stmt = mysqli_stmt_init(getdbConnection());
mysqli_stmt_prepare($stmt, $sql);

mysqli_stmt_execute($stmt);
$resultData = mysqli_stmt_get_result($stmt);

?>
<br><br><br><h2 text align="center" "><strong>Alle Benutzer</strong></h2>
<table class="table responsive table-sm" style='border: 1px solid #DDDDDD'>
    <thead>
    <tr>
        <th>UserID   </th>
        <th>Anrede   </th>
        <th>Vorname  </th>
        <th>Nachname </th>
        <th>Username </th>
        <th>Usermail </th>
        <th>Rolle</th>
    </tr>
    </thead>
    <tbody><br><br><br>
    <?php
    // fetch rows of the executed sql query
    while ($row = $resultData->fetch_assoc()) {
        echo "<tr>";

        echo "<td>" . $row['user_id'] ."</td>";
        echo "<td>" . $row['anrede'] ."</td>";
        echo "<td>" . $row['firstname'] .	"</td>";
        echo "<td>" . $row['lastname'] . "</td>";
        echo "<td>" . $row['username'] ."</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['role'] . "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>


<?php
mysqli_stmt_close($stmt);
?>
</body>

