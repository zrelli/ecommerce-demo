<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Exception;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function editShippingMethods($type)
    {
        // free, inner , outer for shipping methods
        $shippingMethods = [
            'free' => 'free_shipping_label',
            'inner' => 'local_label',
            'outer' => 'outer_label'
        ];

        try {
            $methodsKey = $shippingMethods[$type];
        } catch (Exception $e) {
            $methodsKey = 'free_shipping_label';
        }
        $shippingMethods = Setting::where('key', $methodsKey)->first();
        return view('dashboard.settings.shippings.edit', compact('shippingMethods'));
    }

    public function updateShippingMethods(Request $request, $id)
    {
        return $request;
    }
}
