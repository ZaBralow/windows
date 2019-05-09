<?php
require "db.php";

$data = $_POST;
if (isset($data['do_signup'])) {
    if (trim($data['email']) == '') {
        $errors[] = 'Email is empty!';
    }
    if (trim($data['name']) == '') {
        $errors[] = 'Name is empty!';
    }
    if (empty($errors)) {
        $user = R::dispense('users');
        $user->name = $data['name'];
        $user->email = $data['email'];
        R::store($user);
    }
}

?>