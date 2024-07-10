<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace Wisonlau\HyperfDebug;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
            ],
            'commands' => [
            ],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
	        'publish' => [
		        [
			        'id' => 'config',
			        'description' => 'The config for debug.',
			        'source' => __DIR__ . '/publish/hpdebug.php',
			        'destination' => BASE_PATH . '/config/autoload/hpdebug.php',
		        ],
	        ],
        ];
    }
}
