<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

/**
 * Cross-Origin Resource Sharing (CORS) Configuration
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
 */
class Cors extends BaseConfig
{
    /**
     * The default CORS configuration.
     *
     * @var array{
     *      allowedOrigins: list<string>,
     *      allowedOriginsPatterns: list<string>,
     *      supportsCredentials: bool,
     *      allowedHeaders: list<string>,
     *      exposedHeaders: list<string>,
     *      allowedMethods: list<string>,
     *      maxAge: int,
     *  }
     */
    public array $default = [
        /**
         * Origins for the `Access-Control-Allow-Origin` header.
         *
         * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Access-Control-Allow-Origin
         */
        'allowedOrigins' => [
            'http://127.0.0.1:5177',
            'http://localhost:5177',
        ],

        /**
         * Origin regex patterns for the `Access-Control-Allow-Origin` header.
         *
         * NOTE: A pattern specified here is part of a regular expression. It will
         *       be actually `#\A<pattern>\z#`.
         */
        'allowedOriginsPatterns' => [],

        /**
         * Whether to send the `Access-Control-Allow-Credentials` header.
         *
         * The Access-Control-Allow-Credentials response header tells browsers whether
         * the server allows cross-origin HTTP requests to include credentials.
         */
        'supportsCredentials' => false,

        /**
         * Set headers to allow.
         *
         * The Access-Control-Allow-Headers response header is used in response to
         * a preflight request which includes the Access-Control-Request-Headers to
         * indicate which HTTP headers can be used during the actual request.
         */
        'allowedHeaders' => [
            'Content-Type',
            'Authorization',
            'X-Requested-With',
            'Accept',
            'Origin',
        ],

        /**
         * Set headers to expose.
         *
         * The Access-Control-Expose-Headers response header allows a server to
         * indicate which response headers should be made available to scripts running
         * in the browser, in response to a cross-origin request.
         */
        'exposedHeaders' => [],

        /**
         * Set methods to allow.
         *
         * The Access-Control-Allow-Methods response header specifies one or more
         * methods allowed when accessing a resource in response to a preflight
         * request.
         */
        'allowedMethods' => [
            'GET',
            'POST',
            'PUT',
            'PATCH',
            'DELETE',
            'OPTIONS',
        ],

        /**
         * Set how many seconds the results of a preflight request can be cached.
         *
         * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Access-Control-Max-Age
         */
        'maxAge' => 7200,
    ];
}
