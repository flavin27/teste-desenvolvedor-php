<?php

namespace App\Enums;

enum OrderStatusEnum: string
{
    case canceled = 'canceled';
    case open = 'open';
    case paid = 'paid';
}
