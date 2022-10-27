<?php

use App\Util\View;

function GetSessionMessage(): mixed
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
