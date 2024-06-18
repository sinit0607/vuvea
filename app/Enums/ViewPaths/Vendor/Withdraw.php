<?php

namespace App\Enums\ViewPaths\Vendor;

enum Withdraw
{
    const INDEX = [
        URI => 'index',
        VIEW => 'vendor-views.withdraw.index',
        TABLE_VIEW => 'vendor-views.withdraw._table',
    ];
    const CLOSE_REQUEST = [
        URI => 'close',
        VIEW => ''
    ];

}
