<?php require "./test.php";
$db = get_db();
?>
<!DOCTYPE html>
<html>
<head>
    <!-- <link rel="stylesheet" href="./w05.css"> -->
</head>
<body>

    <div class="title">
        <h1>Notecards <?php echo "Hello" ?></h1>
    </div>

    <div class="section">
        <?php foreach ($db->query('SELECT firstname, password FROM notepublic.user') as $row)
        {
        echo 'user: ' . $row['firstname'];
        echo '<br/>';
        }?>
    </div>


</body>
</html>
