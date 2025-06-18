<?php

return [
    'enabled' => env('S3_COLD_STORAGE_ARCHIVER_ENABLED', true),
    'timeout' => env('S3_COLD_STORAGE_ARCHIVER_TIMEOUT', 30),
    'log_channel' => env('S3_COLD_STORAGE_ARCHIVER_LOG', 'stack'),
];
