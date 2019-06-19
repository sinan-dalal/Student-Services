<?php

$link = mysqli_connect('localhost', 'fred', 'zap', 'misc');
if (mysqli_connect_errno()) {
    die('connecting error' . mysqli_connect_error());
}
?>