<?php

$data = [
    'success' => true,
    'data' => [
        0 => 'info',
        1 => 'result'
     ]
];
header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);