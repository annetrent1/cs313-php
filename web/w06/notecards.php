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
    <div class="logout-button"><a href='./logout.php'>Logout</a></div>

    <div class="title">
        <h1>Notecards</h1>
        <form method="post" action="./newNotecard.php" >
                <input type="hidden" name="stackid" value="<?php echo $stackid?>"/>
                <input class="add-button" type="submit" value="+"/>
        </form>
    </div>

    <div class="note-section">
        <?php foreach ($db->query("SELECT descriptionfront, descriptionback FROM public.notecard WHERE stackid='" . $stackid . "';") as $row)
        {
            echo '<div class="notecard-container">';
            echo '<div class="notecard">';
            echo '<div class="front face"> ' . $row['descriptionfront'] . '</div>';
            echo '<div class="back face"> ' . $row['descriptionback'] . '';
            // echo '<a href="./editNotecard.php?stackid=' . $stackid . '&name=' . $row['name'] . '"> Edit </a></div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>


</body>
</html>
