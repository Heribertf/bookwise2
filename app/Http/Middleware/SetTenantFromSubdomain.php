<?php
// multi-tenant middleware:

namespace App\Http\Middleware;

use App\Models\Tenant;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class SetTenantFromSubdomain
{
    public function handle(Request $request, Closure $next): Response
    {
        // Extract subdomain from the host
        $host = $request->getHost();
        $parts = explode('.', $host);

        // Check if we're on a subdomain
        if (count($parts) > 2) {
            $subdomain = $parts[0];

            // Skip for 'www' or other common subdomains
            if ($subdomain !== 'www' && $subdomain !== 'app') {
                $tenant = Tenant::where('slug', $subdomain)->first();

                if ($tenant) {
                    // Store the current tenant in the app container
                    app()->instance('tenant', $tenant);

                    // Set a global tenant ID for Eloquent queries
                    config(['tenant_id' => $tenant->id]);

                    // Check if user belongs to this tenant
                    if (Auth::check() && Auth::user()->tenant_id !== $tenant->id) {
                        // User doesn't belong to this tenant, log them out
                        if ($request->expectsJson()) {
                            return response()->json(['error' => 'Unauthorized'], 403);
                        }

                        Auth::logout();
                        return redirect()->route('login');
                    }

                    return $next($request);
                }

                // Tenant not found for this subdomain
                abort(404, 'Business not found');
            }
        }

        // No tenant context needed (main site)
        return $next($request);
    }
}