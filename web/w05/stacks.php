<?php 
session_start();
require "./dbConnect.php";
$db = get_db();
$userid = $_SESSION['userid'];
$_SESSION['userid'] = $userid;
// $userid = '1';

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
        <form method="post" action="" >
            <div class="item">
                <label for="addstack">Add New Stack</label>
                <input class="input" type="text" id="addstack" name="addstack"/>
                <input class="add-button" type="submit" value="+" name="add" id="add"/>
            </div>
        </form>
    </div>


</body>
</html>
