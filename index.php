<?php

use function Dummy\Sapi\sapi;

$sapi = sapi();

$v = 'Specific commit';

echo "$v: Hello world from $sapi";
