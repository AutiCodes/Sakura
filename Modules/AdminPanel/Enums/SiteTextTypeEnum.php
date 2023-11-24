<?php

namespace Modules\AdminPanel\Enums;

enum SiteTextTypeEnum: int
{
    case TITLE = 0;
    case NAME = 1;
    case FOOTER = 2;
    case HOMETEXT = 3;
}