<?php
/*
 * Copyright (c) 2021. Debugger Tech
 * All Rights Reserved.
 */

namespace App\Http\Controllers\Api\SiteOption;

use App\Models\SiteOption;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Index extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @param string|null $name
     *
     * @return JsonResponse
     */
    public function __invoke(Request $request, string $name = null) : JsonResponse
    {
        $data = $name
            ? SiteOption::whereName($name)->firstOrFail()
            : SiteOption::all()
                ->whereIn('name', ['app-name', 'app-logo', 'app-description', 'app-brief', 'app-address', 'app-email', 'app-telephone'])
                ->pluck('content', 'name')
                ->all();
        ;

        return jsonSuccess($data);
    }
}
