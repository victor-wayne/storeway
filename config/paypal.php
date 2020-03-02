<?php
return array(
    // set your paypal credential
    'client_id' => 'AbGbtMoFheAwBxIA3u5UtXs1u8lf63sIZDrwTHpSk_Ig4QZGG9GW15RmC2uqffo3V6k3wLpy3Spkf2PN',
    'secret' => 'EOKeTTPztsUUp09ut9gOtBsEEEgSxjn9VXfxyXVMFAbh2AMmDI7NXNxScrTjHaDPuvGdIUEkT7WllU5_',


    /**
     * SDK configuration
     */

    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */

        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,
        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,
        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',
        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);
