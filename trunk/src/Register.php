<?php
    include('engine/start.php');
    $vars = array('object' => NULL, 'viewtype' => 'normal');
    $html = view('form/Register.php', $vars);
    var_dump(is_file('./views/form/Register.php'));
    echo $html;
?>
