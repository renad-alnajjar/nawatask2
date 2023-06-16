<?php

namespace Test;

use Jawwal\Employee as JawwalEmployee;

include_once __DIR__ . '/Greeting.php';
include_once __DIR__ . '/global.php';
include_once __DIR__ . '/Jawwal.php';

$em = new JawwalEmployee('Abood');
$em->hello();
