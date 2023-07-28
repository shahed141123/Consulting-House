<?php

namespace App\Http\Middleware;

use App\Models\User;
use GeoIP;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class DetectGeolocation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $geoData = GeoIP::getLocation($request->ip());
        $user = User::findorFail(Auth::user()->id);
        $user->update([
            'timezone' => $geoData->timezone,
            'country' => $geoData->country,
            'currency' => $this->getCurrencyFromCountry($geoData->country),
        ]);

        return $next($request);
    }

    // Helper function to get the currency code based on the country
    private function getCurrencyFromCountry($country)
    {
        // You can implement your logic here to map country to currency code
        // For example, you can use an array or a lookup table.
        // For simplicity, we'll assume the currency is USD for all countries.
        return 'USD';
    }
}
