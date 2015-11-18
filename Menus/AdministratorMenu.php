<?php

namespace Modules\Dashboard\Menus;

use App\BaseMenu;

class AdministratorMenu extends BaseMenu
{
    public function name()
    {
        $this->name = 'administrator.menu';
    }

    public function items()
    {
        return [];
    }

    public function police()
    {
        return \Auth::user()->hasRole('admin');
    }

}