<?php

namespace App\Http\Controllers;

use App\Facades\ChargerFacade;
use App\Http\Requests\CurrencyRequest;
use App\Models\Currency;

class CurrencyController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $currencies = ChargerFacade::getAllCurrencies();
        return view('currencies.index', compact('currencies'));
    }

    public function currencyChanger(CurrencyRequest $request)
    {
        $result = ChargerFacade::changeCurrency($request->validated());
        return back()->with("result", $result);
    }
}
