<?php
$user_input_data = array();

foreach($_POST as $input => $user_input_data){ $_POST[$input] =mysql_real_escape_string(trim($user_input_data)); }
?>