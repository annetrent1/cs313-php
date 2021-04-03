<?php 
session_start();
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
        <h1>Notecards <?php echo $_COOKIE['userid'] ?></h1>
    </div>

    <div class="section">
        <?php foreach ($db->query('SELECT firstname, password FROM public.user') as $row)
        {
        echo 'user: ' . $row['firstname'];
        echo '<br/>';
        }?>
    </div>


</body>
</html>
