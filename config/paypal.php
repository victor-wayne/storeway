<?php
return array(
    // set your paypal credential
    'client_id' => 'AS9B63p25XnKYR4IDj9LlnYC4KftBXH_WoS2vS4rUSAvRSaTQg2Jmyy3wx7e2xJrS7E5gRDfQpY7qvDk',
    'secret' => 'EIxZOuCsaBdM1Fq2D96nh68MQkOmhcY_adpgDqqWjamZaZu3GTN2FDHHmqszlHeg7yMGB10dLLhIZwbK',


    /**
     * SDK configuration
     */

    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */

        'mode' => 'live',

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
