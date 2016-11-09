<?php
return [
    'channel_big' => [
        'fields' => ['channel_big'],
    ],
    'channel' => [
        'fields' => ['channel_big', 'channel'],
    ],
    'day' => [
        'fields' => ['day'],
    ],
    'hour' => [
        'fields' => ['day', 'hour'],
    ],
    'day_channel_big' => [
        'fields' => ['day', 'channel_big'],
    ],
    'hour_channel_big' => [
        'fields' => ['day', 'hour', 'channel_big'],
    ],
    'day_channel' => [
        'fields' => ['day', 'channel_big', 'channel'],
    ],
    'hour_channel' => [
        'fields' => ['day', 'hour', 'channel_big', 'channel'],
    ],
];
