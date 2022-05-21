<?php

namespace App\Models;

enum AvailableRoles{
    case Admin;
    case ShopManager;
    case ShopEmployee;
}
