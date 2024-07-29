<?php

namespace Dummy\Sapi;

function sapi(): string
{
    return php_sapi_name();
}
