<?php
    $addstack = $_POST['addstack'];
    $userid = $_POST['userid'];
    require "./dbConnect.php";
    $db = get_db();
    
    // $query = $db->prepare("INSERT INTO public.stack (userID, name)
    //     VALUES ( ( SELECT userID FROM public.user 
    //     WHERE userid='1'), 'DNA' ");
    echo "$addstack";
    echo "$userid";
?>