<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CouponControlller extends Controller
{
    public function AllCoupon()
    {
        $client_id = Auth::guard('client')->id();

        $coupon = Coupon::where('client_id', $client_id)->latest()->get();

        return view('client.backend.coupon.all_coupon', compact('coupon'));
    } // End Methode

    public function AddCoupon()
    {
        return view('client.backend.coupon.add_coupon');
    } // End Methode

    public function StoreCoupon(Request $request)
    {
        Coupon::create([
            'coupon_name' => strtoupper($request->coupon_name),
            'coupon_desc' => $request->coupon_desc,
            'discount' => $request->discount,
            'validity' => $request->validity,
            'client_id' => Auth::guard('client')->id(),
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Coupon Inserted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.coupon')->with($notification);
    } // End Methode

    public function EditCoupon($id)
    {
        $coupon = Coupon::find($id);

        return view('client.backend.coupon.edit_coupon', compact('coupon'));
    }

    public function UpdateCoupon(Request $request)
    {
        $cop_id = $request->id;

        Coupon::find($cop_id)->update([
            'coupon_name' => strtoupper($request->coupon_name),
            'coupon_desc' => $request->coupon_desc,
            'discount' => $request->discount,
            'validity' => $request->validity,
            'client_id' => Auth::guard('client')->id(),
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Coupon Updated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.coupon')->with($notification);
    } // End Methode

    public function DeleteCoupon($id)
    {
        Coupon::find($id)->delete();

        $notification = array(
            'message' => 'Coupon Deleted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    } // End Methode
}
