<?php

namespace src\Model;

use src\App\Util\View;

class Helper
{
    // PROTÓTIPO DE FUNÇÃO PARA DÁ REFRESH
    public static function refresh($time)
    {
        header("Refresh: $time.;");
    }

    public static function getSMessage(): mixed
    {

        if (isset($_SESSION['create'])) {
            $messageSession = View::render('Alerts/AlertCreate');
            self::refresh(3);
            session_unset();
        }

        if (isset($_SESSION['delete'])) {
            $messageSession = View::render('Alerts/AlertDelete');
            self::refresh(3);
            session_unset();
        }

        if (isset($_SESSION['edit'])) {
            $messageSession = View::render('Alerts/AlertEdit');
            self::refresh(3);
            session_unset();
        }

        return $messageSession;
    }

    public static function itSanitizeVar($varForSanitizer): string
    {
        return filter_var($varForSanitizer, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
}
