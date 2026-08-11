<?php

   return [
       'api_url' => env(
           'CB_API_URL',
           'https://www.cbr-xml-daily.ru/daily_json.js'
       ),

       'timeout' => env('CB_TIMEOUT', 10),
   ];