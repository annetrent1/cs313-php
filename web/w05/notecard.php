<?php 
require "./dbConnect.php";
$db = get_db();
$userid = $_GET['userid'];
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./notecard.css">
</head>
<body>

    <div class="title">
        <h1>Notecards <?php echo "hello".$_SESSION['sql_query'] ?></h1>
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
