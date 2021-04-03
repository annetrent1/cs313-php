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
        <form method="post" action="./newNotecard.php" >
                <input type="hidden" name="stackid" value="<?php echo $stackid?>"/>
                <input class="add-button" type="submit" value="+"/>
            </div>
        </form>
    </div>

    <div class="note-section">
        <?php foreach ($db->query("SELECT descriptionfront, descriptionback FROM public.notecard WHERE stackid='" . $stackid . "';") as $row)
        {
            echo '<div class="notecard-container">';
            echo '<div class="notecard">';
            echo '<p class="front face"> ' . $row['descriptionfront'] . '</p>';
            echo '<p class="back face"> ' . $row['descriptionback'] . '</p>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>


</body>
</html>
