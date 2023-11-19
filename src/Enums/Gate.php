<?php

namespace Atin\LaravelPages\Enums;

enum Gate: string
{
    case LoggedIn = 'logged-in';
    case LoggedOut = 'logged-out';
}
