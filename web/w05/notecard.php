<?php 
require "./dbConnect.php";
$db = get_db();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./notecard.css">
</head>
<body>

    <div class="title">
        <h1>Notecards</h1>
    </div>

    <div class="section">
        <?php foreach ($db->query("SELECT name FROM public.stack WHERE userid='1';") as $row)
        {
        echo 'stacks: ' . $row['name'];
        echo '<br/>';
        }
        ?>
    </div>


</body>
</html>
