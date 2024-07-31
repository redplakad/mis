<?php

namespace App\Helpers;

use App\Models\MisMenu;

class MenuHelper
{
    public static function getMenus()
    {
        return MisMenu::all();
    }
}
