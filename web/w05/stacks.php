<?php 
session_start();
require "./dbConnect.php";
$db = get_db();
$_SESSION['userid'] = $_GET['userid'];

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./notecard.css">
</head>
<body>

    <div class="title">
        <h1>Stacks <?php echo $_SESSION['userid']?></h1>
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
