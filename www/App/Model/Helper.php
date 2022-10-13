<?php

namespace App\Model;

use App\Util\View;

class Helper
{

    public static function getSMessage()
    {
        if (isset($_SESSION['Create'])) {
            $v = View::render('Alerts/AlertCreate');
            header("Refresh: 5; url=/");
            session_unset();
        }

        if (isset($_SESSION['Delete'])) {
            $v = View::render('Alerts/AlertDelete');
            header("Refresh: 5; url=/");
            session_unset();
        }

        if (isset($_SESSION['Edit'])) {
            $v = View::render('Alerts/AlertEdit');
            header("Refresh: 5; url=/");
            session_unset();
        }

        return $v;
    }
}
