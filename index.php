<?php

use function Dummy\Sapi\sapi;

$sapi = sapi();

$v = 'Latest commit';

echo "$v: Hello world from $sapi";
