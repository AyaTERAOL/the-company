<?php
include "../classes/user.php";

$user = new User;

$user->store($_POST); //いくつかファイルを渡る場合、これでhtmlのボタンクリックしたら～になるisset使わない　
?>