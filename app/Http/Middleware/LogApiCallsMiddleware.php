<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Log;
use Illuminate\Support\Facades\Auth;

class LogApiCallsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Store request start time
        $request->attributes->set('request_start_time', now());

        return $next($request);
    }

    /**
     * Perform any final actions for the request.
     */
    public function terminate(Request $request, Response $response): void
    {
        $log = new Log();
        $log->user_id = Auth::id(); // Get authenticated user's ID
        $log->method = $request->method();
        $log->uri = $request->fullUrl();
        $log->request_time = $request->attributes->get('request_start_time');
        $log->response_status = $response->getStatusCode();

        // Check if response content is JSON and store it
        if (str_contains($response->headers->get('Content-Type'), 'application/json')) {
            $log->response_content = json_decode($response->getContent(), true);
        } else {
            // Handle non-JSON responses, e.g., store as a simple array or string
            $log->response_content = ['content' => $response->getContent()];
        }

        $log->save();
    }
}
