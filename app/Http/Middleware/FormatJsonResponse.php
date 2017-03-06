<?php

namespace App\Http\Middleware;

use Closure;

class FormatJsonResponse
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        $resource = json_decode($response->getContent());

        if (empty($resource->status))
        {
            $content = [
                'status' => 'success',
                'message' => null,
                'resource' => (!$resource) ? $response->getContent() : $resource
            ];
        }
        else
            $content = $resource;

        $response->setContent(json_encode($content));

        return $response;
    }
}
