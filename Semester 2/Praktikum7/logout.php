<?php
session_start();
session_destroy();

//arahkan ke halaan login
header('Location: index.html');