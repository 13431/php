<?php

require "student1.php";
require "student2.php";

use \aaa\Student;

$s = new Student();
$s->xxx();

header("Location: /index.php");

