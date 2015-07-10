<?php

namespace Plugin\ControllerRedirectPlugin;

class Filter
{
    public static function ipAdminMenu(array $items)
    {
        foreach ($items as $key=>$val)
        {
            if ($val->getTitle() == 'Controller Redirect Plugin')
            {
                $val->setTitle(__('Redirect Target', 'ipAdmin'));
                $val->setIcon('fa-caret-square-o-right');
            }

        }
        return $items;
    }
}
