<?php

namespace Modules\News\Enums;

enum ArticleStatusEnum: int
{
    case DRAFT = 0;
    case PUBLISHED = 1;
    case ARCHIVED = 2;
}

