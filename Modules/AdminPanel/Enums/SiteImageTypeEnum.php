<?php

namespace Modules\AdminPanel\Enums;

enum SiteImageTypeEnum: int
{
    case FATICON = 0;
    case MAINICON = 1;
    case SIGNIN = 2;
    case HEADER = 3;
    case FOOTER = 4;
}