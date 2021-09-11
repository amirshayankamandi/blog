<?php

namespace App\Services;

interface Newslatter
{
    public function subscribe(string $email, string $list = null);
}
