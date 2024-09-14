<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;
use mysql_xdevapi\Statement;

/**
 *
 * @method static changeCurrency($data)
 * @method static insertCurrencies($data): void
 * @method static getAllCurrencies(): \Illuminate\Database\Eloquent\Collection|array
 */
class ChargerFacade extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return 'charger';
    }
}
