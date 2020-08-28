<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShippingsRequest;
use App\Models\Setting;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function updateShippingMethods(ShippingsRequest $request, $id)
    {


        try {
            $shipping_method = Setting::find($id);
            DB::beginTransaction();
            $shipping_method->update(['plain_value' => $request->plain_value]);
            //save translations
            $shipping_method->value = $request->value;
            $shipping_method->save();
            DB::commit();
            return redirect()->back()->with(['success' => 'تم التحديث بنجاح']);
        } catch (Exception $ex) {
            DB::rollBack();
            return redirect()->back()->with(['success' => 'هناك خطئ ما يرجى المحاولة مرة اخرى']);
        }
    }
}
