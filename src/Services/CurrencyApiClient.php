<?php

namespace alf89\cb\Services;

use Illuminate\Support\Facades\Http;

class CurrencyApiClient
{
    protected string $url;
    protected int $timeout;

    public function __construct(){
        $this->url = config('cb.api_url');
        $this->timeout = config('cb.timeout');
    }

    /**
     * @throws \Exception
     */
    public function currency()
    {
        $response = Http::timeout($this->timeout)->get($this->url, []);
        if ($response->successful()) {
            return $response->body();
        }

        throw new \Exception(
            "Ошибка запроса к API. HTTP статус:  {$response->status()}"
        );
    }
}