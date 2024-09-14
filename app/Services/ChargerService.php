<?php

namespace App\Services;

use App\Models\Currency;

class ChargerService
{
    public static function changeCurrency($data): float|int
    {
        $currencyFrom = Currency::getById($data["currency_from_id"]);
        $currencyTo = Currency::getById($data["currency_to_id"]);
        $price = intval($data["price"]);
        $amount = $price / ($currencyFrom->price / 1000);
        return $amount * ($currencyTo->price / 1000);
    }

    public static function insertCurrencies($data): void
    {
        Currency::query()->truncate();
        $forInsertToCurrency = [];
        foreach ($data as $currency => $price) {
            $forInsertToCurrency[] = [
                "name" => $currency,
                "price" => intval(floatval(number_format($price, 2)) * 1000),
                "created_at" => now(),
                "updated_at" => now()
            ];
        }
        Currency::query()->insert($forInsertToCurrency);
    }

    public static function getAllCurrencies(): \Illuminate\Database\Eloquent\Collection|array
    {
        return Currency::getAll();
    }
}
