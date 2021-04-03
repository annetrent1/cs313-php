<?php 
session_start();
require "./dbConnect.php";
$db = get_db();
$userid = $_SESSION["userid"];
// $_SESSION['userid'] = $userid;

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./notecard.css">
</head>
<body>

    <div class="title">
        <h1>Stacks </h1>
        <?php 
            echo "<h2>" . $userid . "</h2>";
        ?>
    </div>

    <div class="section">
        <?php foreach ($db->query("SELECT name, stackid FROM public.stack WHERE userid='1';") as $row)
        {
            echo '<a href="./notecards.php?stackid=' . $row['stackid'] . '">' .  $row['name'] . '</a>';
        }
        ?>
    </div>


</body>
</html>
