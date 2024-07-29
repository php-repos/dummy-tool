<?php

use function Dummy\Sapi\sapi;

$sapi = sapi();

$v = 'v2';

echo "$v: Hello world from $sapi";
