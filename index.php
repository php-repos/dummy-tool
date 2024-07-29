<?php

use function Dummy\Sapi\sapi;

$sapi = sapi();

$v = 'v1';

echo "$v: Hello world from $sapi";
