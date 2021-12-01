<?php
if (!session_id()) session_start();

// memanggil seluruh fungsi yang ada di file app init.php
require_once '../app/init.php';

$app = new App;
