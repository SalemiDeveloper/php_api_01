<?php

class Response {
    
    public static function json($status = 200, $message = 'success', $data = null) {
        header('Content-Type: application/json');
        return json_encode([
            'status'  => $status,
            'message' => $message,
            'data'    => $data
        ]);
    }
}