<?php

namespace App\Model;

use App\Util\View;

class Helper
{
    // PROTÓTIPO DE FUNÇÃO PARA DÁ REFRESH
    public function refresh(int $time)
    {
        header("Refresh: $time;");
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
            header("Refresh: 3; url=/");
            session_unset();
        }

        if (isset($_SESSION['edit'])) {
            $messageSession = View::render('Alerts/AlertEdit');
            header("Refresh: 3; url=/");
            session_unset();
        }

        return $messageSession;
    }

    public static function itSanitizeVar($varSanitizer): string
    {
        return filter_var($varSanitizer, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
}
