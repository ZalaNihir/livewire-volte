<?php

namespace App\Enums;

use NunoMaduro\Collision\Adapters\Phpunit\State;

enum StatusEnum:string
{
    case STARTED = 'started';
    case IN_PROGRESS = 'in progress';
    case DONE = 'done';
}
