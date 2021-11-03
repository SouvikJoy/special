<?php
/*
 * Copyright (c) 2021. Debugger Tech
 * All Rights Reserved.
 */


use Illuminate\Http\JsonResponse;

if (!function_exists('jsonSuccess')) {
    /**
     * @param array|mixed $data
     * @param string $msg
     * @param array $headers
     *
     * @return JsonResponse
     */
    function jsonSuccess($data, string $msg = 'Request Successful!', array $headers = []) : JsonResponse
    {
        return response()->json([
            'data'      => $data,
            'message'   => $msg
        ], 200, $headers);
    }

    if (!function_exists('jsonUnauthorised')) {
        /**
         * @param string $msg
         * @param array $headers
         *
         * @return JsonResponse
         */
        function jsonUnauthorised(string $msg = 'Unauthorised!', array $headers = []) : JsonResponse
        {
            return response()->json([
                'message'   => $msg
            ], 403, $headers);
        }
    }

}
