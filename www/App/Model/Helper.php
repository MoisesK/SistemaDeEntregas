<?php

namespace App\Model;

use App\Util\View;

class Helper{

    public static function getSMessage(){
        if(isset($_SESSION['Create'])){
            $v = View::render('Modals/AlertCreate');
            header("Refresh: 5; url=/");
            session_unset();
        }

        if(isset($_SESSION['Delete'])){
            $v = View::render('Modals/AlertDelete');
            header("Refresh: 5; url=/");
            session_unset();
        }

        if(isset($_SESSION['Edit'])){
            $v = View::render('Modals/AlertEdit');
            header("Refresh: 5; url=/");
            session_unset();
        }

        return $v;
    
    }

}




?>