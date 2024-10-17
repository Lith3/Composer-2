<?php

require '../src/hello.php';

use App\hello;

$hello = new hello();
echo $hello->talk();
