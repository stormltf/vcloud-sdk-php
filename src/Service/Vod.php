<?php
namespace Vcloud\Service;

use Vcloud\Base\V4Curl;

class Vod extends V4Curl {
	protected function getConfig()
    {
        return [
            'host' => 'https://vod.bytedanceapi.com',
            'config' => [
                'timeout' => 5.0,
                'headers' => [
                    'Accept' => 'application/json'
                ],
                'v4_credentials' => [
                    'region' => 'cn-north-1',
                    'service' => 'vod',
                ],
            ],
        ];
    }

    protected $apiList = [
        'GetSpace' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'GetSpace',
                    'Version' => '2018-12-01',
                ],
            ]
        ],
        'ApplyUpload' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'ApplyUpload',
                    'Version' => '2019-03-05',
                ],
            ]
        ],
        'CommitUpload' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'CommitUpload',
                    'Version' => '2019-03-05',
                ],
            ]
        ],
        'GetPlayInfo' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'GetPlayInfo',
                    'Version' => '2019-03-15',
                ],
            ]
        ],
        'UploadMediaByURL' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'UploadMediaByURL',
                    'Version' => '2018-01-01',
                ],
            ]
        ],
    ];
}
