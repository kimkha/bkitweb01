<?php
    include('engine/start.php');
    $vars = array('object' => NULL, 'viewtype' => 'normal');
    $html = view('user', $vars);
    page_draw('Register', $html);
?>
