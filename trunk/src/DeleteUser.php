<?php
    include_once('engine/start.php');
    $id = (int)$_GET['uid'];
    $result = db_query("DELETE FROM profile WHERE uid = $id");
    if ($result != false)
            echo 'Delete succesfully';
?>