<?php
namespace alf89\cb\Services;

class CurrencyService
{
    protected CurrencyApiClient $apiClient;

    public function __construct(CurrencyApiClient $apiClient){
        $this->apiClient = $apiClient;
    }

    /**
     * @description массив с данными конкретной валюты по коду
     * @throws \Exception
     */
    public function currency(string $code)
    {
        $json = $this->apiClient->currency();
        $array = json_decode($json, true);
        return $array['Valute'][$code];
    }

    /**
     * @description масив с всеми курсами валют
     * @throws \Exception
     */
    public function currencies():array
    {
        $json = $this->apiClient->currency();
        $array = json_decode($json, true);
        return $array['Valute'];
    }
}