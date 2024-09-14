<?php

namespace App\Console\Commands;

use App\Facades\ChargerFacade;
use GuzzleHttp\Client;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class LoadCurrencies extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'load:currencies';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run this command to load currencies and insert to DB';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $key = config("services.free_currency.key");
        $request = Http::get(config("services.free_currency.url").$key);
        $currencies = json_decode($request->body(), true)["data"];
        ChargerFacade::insertCurrencies($currencies);
    }
}
