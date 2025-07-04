<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Websiteemail;
use App\Models\City;
use Illuminate\Support\Facades\Hash;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class ClientController extends Controller
{
    public function ClientLogin()
    {
        return view('client.client_login');
    }

    public function ClientRegister()
    {
        return view('client.client_register');
    }

    public function ClientRegisterSubmit(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:200'],
            'email' => ['required', 'string', 'unique:clients'],
        ]);

        Client::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => Hash::make($request->password),
            'role' => 'client',
            'status' => '0',
        ]);

        $notification = array(
            'message' => 'Client Register Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('client.login')->with($notification);
    }
    // End Method

    function ClientLoginSubmit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $check = $request->all();

        $data = [
            'email' => $check['email'],
            'password' => $check['password'],
        ];

        if (Auth::guard('client')->attempt($data)) {
            return redirect()->route('client.dashboard')->with('success', 'Login Successfully');
        } else {
            return redirect()->route('client.login')->with('error', 'Invalid Credentials');
        }
    }

    public function ClientDashboard()
    {
        return view('client.index');
    }

    function ClientLogout()
    {

        Auth::guard('client')->logout();

        return redirect()->route('client.login')->with('success', 'Logout Success');
    }

    // End Method

    public function  ClientProfile()
    {
        $city = City::latest()->get();

        $id = Auth::guard('client')->id();

        $profileData = Client::find($id);

        return view('client.client_profile', compact('profileData', 'city'));
    }

    public function ClientProfileStore(Request $request)
    {
        $id = Auth::guard('client')->id();

        $data = Client::find($id);

        $data->name = $request->name;

        $data->email = $request->email;

        $data->phone = $request->phone;

        $data->address = $request->address;

        $data->city_id = $request->city_id;

        $data->shop_info = $request->shop_info;

        $oldPhotoPath = $data->photo;

        if ($request->hasFile('photo')) {

            $file = $request->file('photo');

            $filename = time() . '.' . $file->getClientOriginalExtension();

            $file->move(public_path('upload/client_images'), $filename);

            $data->photo =  $filename;

            if ($oldPhotoPath && $oldPhotoPath !== $filename) {
                $this->deleteOldImage($oldPhotoPath);
            }
        }

        if ($request->hasFile('cover_photo')) {

            $fileCover = $request->file('cover_photo');

            $filenameCover = time() . '.' . $fileCover->getClientOriginalExtension();

            $fileCover->move(public_path('upload/client_images'), $filenameCover);

            $data->cover_photo =  $filenameCover;
        }

        $data->save();

        $notification = array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    private function deleteOldImage(string $oldPhotoPath): void
    {
        $fullPath = public_path('upload/client_images/' . $oldPhotoPath);

        if (file_exists($fullPath)) {
            unlink($fullPath);
        }
    }

    public function ClientChangePassword()
    {
        $id = Auth::guard('client')->id();

        $profileData = Client::find($id);

        return view('client.client_change_password', compact('profileData'));
    }

    public function ClientPasswordUpdate(Request $request)
    {
        $client = Auth::guard('client')->user();

        $request->validate([
            'old_password' => "required",
            'new_password' => "required|confirmed",
        ]);

        if (!Hash::check($request->old_password, $client->password)) {

            $notification = array(
                'message' => 'Old Password Does not Match',
                'alert-type' => 'error',
            );

            return redirect()->back()->with($notification);
        }

        /// update the new password
        Client::whereId($client->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        $notification = array(
            'message' => 'Password Change Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
