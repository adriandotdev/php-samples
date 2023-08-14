<?php
session_start();
session_destroy();

header('Location: /php-samples/extras/login.php');
