<?php

namespace src\App\Util;

use src\Model\Delivery;
use src\App\Routes\Request;
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
