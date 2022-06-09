<?php
session_start();
session_destroy();
header("location: ../crud_inicio_1/index.html");
?>