<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\Cors;
class Filters extends BaseConfig
{
    public array $aliases = [
        'csrf' => \CodeIgniter\Filters\CSRF::class,
        'toolbar' => \CodeIgniter\Filters\DebugToolbar::class,
        'honeypot' => \CodeIgniter\Filters\Honeypot::class,
        'jwt' => \App\Filters\JwtAuthFilter::class,
        'cors'          => Cors::class,

    ];

    public array $globals = [
        'before' => [
            'cors',
        ],
        'after'  => [
            'toolbar',
        ],
    ];

    public array $methods = [];
    public array $filters = [];
}
