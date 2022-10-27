<?php

namespace App\Util;

use Model\Delivery;
use App\Routes\Request;
use WilliamCosta\DatabaseManager\Pagination as Pages;

class Pagination
{
    public static function getPagination(): mixed
    {
        $amountDeliveries = Delivery::read(null, null, null, 'COUNT(*) as qtd')->fetchObject()->qtd;
        $request = new Request();
        $queryParams = $request->getQueryParams();
        $pageActive = $queryParams['page'] ?? 1;

        $obPagination = new Pages($amountDeliveries, $pageActive, 5);

        return $obPagination;
    }
}
