<?php

namespace Modules\AdminPanel\Enums;

enum PageStatusEnum: int
{
    case DRAFT = 0;
    case PUBLISHED = 1;
    case ARCHIVED = 2;
}