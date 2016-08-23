<?php

include 'class/users.php';
$post = $_POST;

$firstname = $post['first_name'];
$lastname = $post['last_name'];
$address = $post['address'];
$phone = $post['phone'];

$user = new users();
$user->setFirstName($firstname);
$user->setLastName($lastname);
$user->setAddress($address);
$user->setPhone($phone);

var_dump($user);
