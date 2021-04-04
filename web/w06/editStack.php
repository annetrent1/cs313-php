<?php
   require "./dbConnect.php";
   $db = get_db();
   $stackid = $_GET['stackid'];
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./notecard.css">
</head>
<body>
    <?php echo $stackid; ?>

</body>
</html>