<?php

namespace App\Services;


abstract class AbstractService
{
    public function respondWithJson($data, $status)
    {
        return response()->json($data, $status, []);
        //return response()->json($data, $status, [], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }
}
