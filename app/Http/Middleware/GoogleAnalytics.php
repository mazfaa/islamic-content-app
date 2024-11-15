<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GoogleAnalytics
{
  /**
   * Handle an incoming request.
   *
   * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
   */
  public function handle(Request $request, Closure $next): Response
  {
    if (app()->environment('production')) {
      echo "<script>
                gtag('event', 'page_view', {
                    page_title: '" . addslashes($request->path()) . "',
                    page_path: '" . $request->url() . "'
                });
            </script>";
    }

    return $next($request);
  }
}
