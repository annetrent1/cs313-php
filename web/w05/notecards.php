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

    <div class="title">
        <h1>Notecards</h1>
    </div>

    <div class="note-section">
        <?php foreach ($db->query("SELECT descriptionfront, descriptionback FROM public.notecard WHERE stackid='" . $stackid . "';") as $row)
        {
            echo '<div class="notecard">';
            echo '<p class="front"> ' . $row['descriptionfront'] . '</p>';
            echo '<p class="back"> ' . $row['descriptionback'] . '</p>';
            echo '</div>';
        }
        ?>
    </div>


</body>
</html>
