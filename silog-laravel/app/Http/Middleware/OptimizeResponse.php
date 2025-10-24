<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class OptimizeResponse
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        
        // Add performance headers
        $response->headers->set('Cache-Control', 'public, max-age=3600');
        $response->headers->set('X-Content-Type-Options', 'nosniff');
        $response->headers->set('X-Frame-Options', 'DENY');
        
        // Minify HTML for production
        if (app()->environment('production') && $response->headers->get('Content-Type') === 'text/html; charset=UTF-8') {
            $content = $response->getContent();
            $content = preg_replace('/\s+/', ' ', $content);
            $content = preg_replace('/>\s+</', '><', $content);
            $response->setContent(trim($content));
        }
        
        return $response;
    }
}