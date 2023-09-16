<?php

declare(strict_types=1);

return [
    /*
     * ------------------------------------------------------------------------
     * Default Firebase project
     * ------------------------------------------------------------------------
     */
    'default' => env('FIREBASE_PROJECT', 'app'),

    /*
     * ------------------------------------------------------------------------
     * Firebase project configurations
     * ------------------------------------------------------------------------
     */
    'projects' => [
        'app' => [
            /*
             * ------------------------------------------------------------------------
             * Credentials / Service Account
             * ------------------------------------------------------------------------
             *
             * In order to access a Firebase project and its related services using a
             * server SDK, requests must be authenticated. For server-to-server
             * communication this is done with a Service Account.
             *
             * If you don't already have generated a Service Account, you can do so by
             * following the instructions from the official documentation pages at
             *
             * https://firebase.google.com/docs/admin/setup#initialize_the_sdk
             *
             * Once you have downloaded the Service Account JSON file, you can use it
             * to configure the package.
             *
             * If you don't provide credentials, the Firebase Admin SDK will try to
             * auto-discover them
             *
             * - by checking the environment variable FIREBASE_CREDENTIALS
             * - by checking the environment variable GOOGLE_APPLICATION_CREDENTIALS
             * - by trying to find Google's well known file
             * - by checking if the application is running on GCE/GCP
             *
             * If no credentials file can be found, an exception will be thrown the
             * first time you try to access a component of the Firebase Admin SDK.
             *
            $ */

            'credentials' => [
                'file' => '{
                                 "type": "service_account",
                                 "project_id": "aema-a9a4b",
                                 "private_key_id": "72f250a0231a99ba48598a179760e449d5fb7645",
                                 "private_key": "-----BEGIN PRIVATE KEY-----\nMIIEvwIBADANBgkqhkiG9w0BAQEFAASCBKkwggSlAgEAAoIBAQDGzAPfhc3F/m4t\n4Lt4TGU49OVwm+dxHS3WEEbYumQNjpqBmZ0GnCjbUFiDSMUWPro7xwyAY/YPqbJ0\nwkepjpoMbRvABI6z47sRNw7XIvXG7KrBV8ZCw+uHheukoqbxcgROfJ8bbqlUBEhs\nK1vdpTzSmAV50xLNTLimVoOqX9cWUK7Lq82EZkASCOWu1/RRfRYCqOgz2qqiKkS/\nYhTZx97qPet0ES2pU6vyjruOX5FlYL/wmlrw4yz7rPETOA/3UXa+vUU3cwedL8RK\nJYt/g4cLsfUr5MeqDzLBAl1c1paBpSfWg40YMbtYWrRSHzK2AXlVuWEYNEvjQGfd\ngfa3CXZBAgMBAAECggEAC/GGIovaB+UQNsinjrPNSYmaDsTJGABEKJYYAY2aNP/O\nK87gMp1XbYyzUqjgsWRRoUWFTGHlDr4X4wComEjhW7GC7yt+7NMX4jID/dwjdsDx\nhdXpiwmVCRJ8TKr6e2tJk7MURoxEl0/+D2Sf+24h3DemrZHnMWckeVbdiHMDW7tg\nLtHhY3IwvF2ppNTTS4koJgarZC8LZZhqCrIqA7q6XB/p0WABKvG25h1K16+GnRxV\ng5Wu3QeHqg3w0WSF/sWrzWjmU7ZlCxmn1T5jdUpiAEpGTQOFdNiR3BKt4xbzO7lB\ntcoZX5YQxmIEV8rkgqdAT4HQXP1DT/yX9Su5M7odIQKBgQD7bYnUSz2Izooj7BLY\nzL2n+td4DJQHUEYvT1hrhjD/YT+NSMOvOUXRKxG/tJHAYqpYWjELy4+65Bl73wqp\n1HfsA5wv7w8Tcai6QCqtUlHjQc1TVESl10CzSrMOCKe2CJSOIxk9djGYk16d7FcR\nprV+qbXm8ZGFs77IhFE4C1XfcQKBgQDKaXdSBlFp1O481QBYzIGeRzjxo1eq3Gpz\nXXpdTZeIqAexi0XJV3oUO9Vg492teCu6wkcMT09ivgwwLHmTJE9bkkr/BelUX13K\nKEOPoaCCSPgO+wPUuIeQ82jwCzgc3xQhxbKd3q63z2jEPETMLxkSjq6xrk/bTuya\n3o4HiN870QKBgQCyMcAtpeXGwBtHuljhLrp8A1wSyVdgl5Qmk6WnD0RKuzG/gIKv\n/Xdt94hsxh1GrKbuV33LTkpfuqoVEM8N7nfP3f8kOdoFfdiHqFKW5HEFD+3l0SOW\nJijE6XxdxeSXLx2aX2XUGaCs8kVsx8Qtzmlzi/RP6YWprOraUmz9u4rxAQKBgQCF\nY817Y6iBWw6JTkGFQ3hkC0GulFtwwQLx9fdux3SGXV18lnCuCBTugqPSzzfGWrxO\nvjs+FIIXa3DyykxwOGyHxzffKlEjBhnz4Gbtn7D8SwQWMzvKErVcQ9yy3GHlPOmy\ne+uC+D4h6fB76c/Y02ztetQLSflcaH2qbeIhewTKEQKBgQC6a9FTxPXo+ej/LQy3\nP6xxT4cAYcGiWuKxaOpHXEgCjem0M+y2LLPUkOsQeAa2jKuHTAHpulOjgkyxhN+5\n2olRCHOHeWIdGnUxMddbMFLdVtCuR5p+4tTw7ZEYSBE/6cST0upn9m1MQPZ5vNNL\nixmP1FXhmTirbUB6FjaylyFkfg==\n-----END PRIVATE KEY-----\n",
                                 "client_email": "firebase-adminsdk-hlqvv@aema-a9a4b.iam.gserviceaccount.com",
                                 "client_id": "118335088215997640712",
                                 "auth_uri": "https://accounts.google.com/o/oauth2/auth",
                                 "token_uri": "https://oauth2.googleapis.com/token",
                                 "auth_provider_x509_cert_url": "https://www.googleapis.com/oauth2/v1/certs",
                                 "client_x509_cert_url": "https://www.googleapis.com/robot/v1/metadata/x509/firebase-adminsdk-hlqvv%40aema-a9a4b.iam.gserviceaccount.com",
                                 "universe_domain": "googleapis.com"
                               }',
            ],

            /*
             * ------------------------------------------------------------------------
             * Firebase Auth Component
             * ------------------------------------------------------------------------
             */

            'auth' => [
                'tenant_id' => env('FIREBASE_AUTH_TENANT_ID'),
            ],

            /*
             * ------------------------------------------------------------------------
             * Firebase Realtime Database
             * ------------------------------------------------------------------------
             */

            'database' => [
                /*
                 * In most of the cases the project ID defined in the credentials file
                 * determines the URL of your project's Realtime Database. If the
                 * connection to the Realtime Database fails, you can override
                 * its URL with the value you see at
                 *
                 * https://console.firebase.google.com/u/1/project/_/database
                 *
                 * Please make sure that you use a full URL like, for example,
                 * https://my-project-id.firebaseio.com
                 */
                'url' => env('FIREBASE_DATABASE_URL'),

                /*
                 * As a best practice, a service should have access to only the resources it needs.
                 * To get more fine-grained control over the resources a Firebase app instance can access,
                 * use a unique identifier in your Security Rules to represent your service.
                 *
                 * https://firebase.google.com/docs/database/admin/start#authenticate-with-limited-privileges
                 */
                // 'auth_variable_override' => [
                //     'uid' => 'my-service-worker'
                // ],
            ],

            'dynamic_links' => [
                /*
                 * Dynamic links can be built with any URL prefix registered on
                 *
                 * https://console.firebase.google.com/u/1/project/_/durablelinks/links/
                 *
                 * You can define one of those domains as the default for new Dynamic
                 * Links created within your project.
                 *
                 * The value must be a valid domain, for example,
                 * https://example.page.link
                 */
                'default_domain' => env('FIREBASE_DYNAMIC_LINKS_DEFAULT_DOMAIN'),
            ],

            /*
             * ------------------------------------------------------------------------
             * Firebase Cloud Storage
             * ------------------------------------------------------------------------
             */

            'storage' => [
                /*
                 * Your project's default storage bucket usually uses the project ID
                 * as its name. If you have multiple storage buckets and want to
                 * use another one as the default for your application, you can
                 * override it here.
                 */

                'default_bucket' => env('FIREBASE_STORAGE_DEFAULT_BUCKET'),
            ],

            /*
             * ------------------------------------------------------------------------
             * Caching
             * ------------------------------------------------------------------------
             *
             * The Firebase Admin SDK can cache some data returned from the Firebase
             * API, for example Google's public keys used to verify ID tokens.
             *
             */

            'cache_store' => env('FIREBASE_CACHE_STORE', 'file'),

            /*
             * ------------------------------------------------------------------------
             * Logging
             * ------------------------------------------------------------------------
             *
             * Enable logging of HTTP interaction for insights and/or debugging.
             *
             * Log channels are defined in config/logging.php
             *
             * Successful HTTP messages are logged with the log level 'info'.
             * Failed HTTP messages are logged with the log level 'notice'.
             *
             * Note: Using the same channel for simple and debug logs will result in
             * two entries per request and response.
             */

            'logging' => [
                'http_log_channel' => env('FIREBASE_HTTP_LOG_CHANNEL'),
                'http_debug_log_channel' => env('FIREBASE_HTTP_DEBUG_LOG_CHANNEL'),
            ],

            /*
             * ------------------------------------------------------------------------
             * HTTP Client Options
             * ------------------------------------------------------------------------
             *
             * Behavior of the HTTP Client performing the API requests
             */
            'http_client_options' => [
                /*
                 * Use a proxy that all API requests should be passed through.
                 * (default: none)
                 */
                'proxy' => env('FIREBASE_HTTP_CLIENT_PROXY'),

                /*
                 * Set the maximum amount of seconds (float) that can pass before
                 * a request is considered timed out
                 *
                 * The default time out can be reviewed at
                 * https://github.com/kreait/firebase-php/blob/6.x/src/Firebase/Http/HttpClientOptions.php
                 */
                'timeout' => env('FIREBASE_HTTP_CLIENT_TIMEOUT'),

                'guzzle_middlewares' => [

                ]
            ],
        ],
    ],
];
