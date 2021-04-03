<?php 
session_start();
require "./dbConnect.php";
$db = get_db();
// $userid = $_SESSION['userid'];
$userid = '1';

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./notecard.css">
</head>
<body>

    <div class="title">
        <h1>Stacks </h1>
    </div>

    <div class="section">
        <?php foreach ($db->query("SELECT name, stackid FROM public.stack WHERE userid='" . $userid . "';") as $row)
        {
            echo '<p class="item"><a href="./notecards.php?stackid=' . $row['stackid'] . '">' .  $row['name'] . '</a> </p>';
        }
        ?>
    </div>


</body>
</html>
