<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\City;
use App\Models\Client;
use App\Models\Menu;
use App\Models\Product;
use Carbon\Carbon;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ManageController extends Controller
{
    // All Product Methode Started
    public function AdminAllProduct()
    {
        $product = Product::orderBy('id', 'desc')->get();

        return view('admin.backend.product.all_product', compact('product'));
    } // End Methode

    public function AdminAddProduct()
    {
        $category = Category::latest()->get();

        $city = City::latest()->get();

        $menu = Menu::latest()->get();

        $client = Client::latest()->get();

        return view('admin.backend.product.add_product', compact('category', 'menu', 'city', 'client'));
    } // End Methode

    public function AdminStoreProduct(Request $request)
    {
        $pcode = IdGenerator::generate(['table' => 'products', 'field' => 'code', 'length' => 5, 'prefix' => 'PC']);

        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' .
                $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(300, 300)->save(public_path('upload/product/' . $name_gen));
            $save_url = 'upload/product/' . $name_gen;

            Product::create([
                'name' => $request->name,
                'slug' => strtolower(str_replace(' ', '-',  $request->name)),
                'category_id' => $request->category_id,
                'city_id' => $request->city_id,
                'menu_id' => $request->menu_id,
                'code' => $pcode,
                'qty' => $request->qty,
                'size' => $request->size,
                'price' => $request->price,
                'discount_price' => $request->discount_price,
                'client_id' => $request->client_id,
                'best_seller' => $request->best_seller,
                'most_populer' => $request->most_populer,
                'created_at' => Carbon::now(),
                'status' => 1,
                'image' => $save_url,
            ]);
        }

        $notification = array(
            'message' => 'Product Inserted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('admin.all.product')->with($notification);
    } // End Methode

    public function AdminEditProduct($id)
    {
        $category = Category::latest()->get();

        $city = City::latest()->get();

        $menu = Menu::latest()->get();

        $client = Client::latest()->get();

        $product = Product::find($id);

        return view('admin.backend.product.edit_product', compact('category', 'menu', 'city', 'product', 'client'));
    } // End Methode

    public function AdminUpdateProduct(Request $request)
    {
        $prod_id = $request->id;

        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' .
                $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(300, 300)->save(public_path('upload/product/' . $name_gen));
            $save_url = 'upload/product/' . $name_gen;

            Product::find($prod_id)->update([
                'name' => $request->name,
                'slug' => strtolower(str_replace(' ', '-',  $request->name)),
                'category_id' => $request->category_id,
                'city_id' => $request->city_id,
                'menu_id' => $request->menu_id,
                'qty' => $request->qty,
                'size' => $request->size,
                'price' => $request->price,
                'discount_price' => $request->discount_price,
                'client_id' => $request->client_id,
                'best_seller' => $request->best_seller,
                'most_populer' => $request->most_populer,
                'created_at' => Carbon::now(),
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Admin Product Updated Successfully',
                'alert-type' => 'success',
            );

            return redirect()->route('admin.all.product')->with($notification);
        } else {

            Product::find($prod_id)->update([
                'name' => $request->name,
                'slug' => strtolower(str_replace(' ', '-',  $request->name)),
                'category_id' => $request->category_id,
                'city_id' => $request->city_id,
                'menu_id' => $request->menu_id,
                'qty' => $request->qty,
                'size' => $request->size,
                'price' => $request->price,
                'discount_price' => $request->discount_price,
                'best_seller' => $request->best_seller,
                'most_populer' => $request->most_populer,
            ]);

            $notification = array(
                'message' => 'Admin Product Updated Successfully',
                'alert-type' => 'success',
            );

            return redirect()->route('admin.all.product')->with($notification);
        }
    } // End Methode

    public function AdminDeleteProduct($id)
    {
        $item = Product::find($id);
        $img = $item->image;
        unlink($img);

        Product::find($id)->delete();

        $notification = array(
            'message' => 'Product Deleted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    } // End Methode

    ////// For All Pending and Approve Restaurant Methode

    public function PendingRestaurant()
    {
        $client = Client::where('status', 0)->get();

        return view('admin.backend.restaurant.pending_restaurant', compact('client'));
    }

    public function ApproveRestaurant()
    {
        $client = Client::where('status', 1)->get();

        return view('admin.backend.restaurant.approve_restaurant', compact('client'));
    }

    public function ClientChangeStatus(Request $request)
    {
        $client = Client::find($request->client_id);

        $client->status = $request->status;

        $client->save();

        return response()->json(['success' => "Status Change Successfully"]);
    } // End Methode

    // All methode banner in here
    public function AllBanner()
    {
        $banner = Banner::latest()->get();
        return view('admin.backend.banner.all_banner', compact('banner'));
    }

    public function BannerStore(Request $request)
    {

        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' .
                $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(400, 400)->save(public_path('upload/banner/' . $name_gen));
            $save_url = 'upload/banner/' . $name_gen;

            Banner::create([
                'url' => $request->url,
                'image' => $save_url,
            ]);
        }

        $notification = array(
            'message' => 'Banner Inserted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    } // End Method

    public function EditBanner($id)
    {
        $banner = Banner::find($id);

        if ($banner) {
            $banner->image = asset($banner->image);
        }

        return response()->json($banner);
    }

    public function BannerUpdate(Request $request)
    {
        $banner_id = $request->banner_id;

        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' .
                $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(400, 400)->save(public_path('upload/banner/' . $name_gen));
            $save_url = 'upload/banner/' . $name_gen;

            Banner::find($banner_id)->update([
                'url' => $request->url,
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Banner Updated Successfully',
                'alert-type' => 'success',
            );

            return redirect()->route('all.banner')->with($notification);
        } else {

            Banner::find($banner_id)->update([
                'url' => $request->url,
            ]);

            $notification = array(
                'message' => 'Banner Updated Successfully',
                'alert-type' => 'success',
            );

            return redirect()->route('all.banner')->with($notification);
        }
    } // End Method

    public function DeleteBanner($id)
    {
        $item = Banner::find($id);
        $img = $item->image;
        unlink($img);

        Banner::find($id)->delete();

        $notification = array(
            'message' => 'Banner Deleted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    } // End Method
}
