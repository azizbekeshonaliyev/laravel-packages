<?php

namespace App\Ecommerce\User\Entity;

enum UserBalanceStatus
{
    case NEW;
    case BLOCKED;
    case ACTIVE;
}
