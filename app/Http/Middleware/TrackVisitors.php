<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Visitor;

class TrackVisitors
{
    public function handle($request, Closure $next)
    {
        // Check if the IP address is already stored today
        $ipAddress = $request->ip();
        $exists = Visitor::where('ip_address', $ipAddress)
            ->whereDate('visited_at', today())
            ->exists();

        // If not exists, create a new record
        if (!$exists) {
            Visitor::create([
                'ip_address' => $ipAddress,
            ]);
        }

        return $next($request);
    }
}



    // public function handle($request, Closure $next)
    // {
    //     $ipAddress = $request->ip();
    
    //     // Check if the IP address is already stored today
    //     $exists = Visitor::where('ip_address', $ipAddress)
    //         ->whereDate('visited_at', today())
    //         ->exists();
    
    //     if (!$exists) {
    //         // Get location data from IP address
    //         $locationData = Location::get($ipAddress);
            
    //         // Store visitor with the country information
    //         Visitor::create([
    //             'ip_address' => $ipAddress,
    //             'country' => $locationData ? $locationData->countryName : 'Unknown', // Store the country if available
    //             'visited_at' => now(),
    //         ]);
    //     }
    
    //     return $next($request);
    // }
