<?php

namespace App\Model;

use App\Util\View;

class Helper
{

    public static function getSMessage(): mixed
    {
        if (isset($_SESSION['create'])) {
            $v = View::render('Alerts/AlertCreate');
            header("Refresh: 5; url=/");
            session_unset();
        }

        if (isset($_SESSION['delete'])) {
            $v = View::render('Alerts/AlertDelete');
            header("Refresh: 5; url=/");
            session_unset();
        }

        if (isset($_SESSION['edit'])) {
            $v = View::render('Alerts/AlertEdit');
            header("Refresh: 5; url=/");
            session_unset();
        }

        return $v;
    }

    public static function itSanitizeVar($var): string
    {
        return filter_var($var, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
}
