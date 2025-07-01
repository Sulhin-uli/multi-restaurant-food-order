<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\City;
use App\Models\Gallery;
use App\Models\Menu;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class RestaurantController extends Controller
{
    public function AllMenu()
    {
        $menu = Menu::latest()->get();

        return view('client.backend.menu.all_menu', compact('menu'));
    }

    public function AddMenu()
    {

        return view('client.backend.menu.add_menu');
    }


    public function StoreMenu(Request $request)
    {

        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' .
                $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(300, 300)->save(public_path('upload/menu/' . $name_gen));
            $save_url = 'upload/menu/' . $name_gen;

            Menu::create([
                'menu_name' => $request->menu_name,
                'image' => $save_url,
            ]);
        }

        $notification = array(
            'message' => 'Menu Inserted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.menu')->with($notification);
    } // End Method

    public function EditMenu($id)
    {
        $menu = Menu::find($id);

        return view('client.backend.menu.edit_menu', compact('menu'));
    } // End Method

    public function UpdateMenu(Request $request)
    {
        $menu_id = $request->id;

        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' .
                $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(300, 300)->save(public_path('upload/menu/' . $name_gen));
            $save_url = 'upload/menu/' . $name_gen;

            Menu::find($menu_id)->update([
                'menu_name' => $request->menu_name,
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Menu Updated Successfully',
                'alert-type' => 'success',
            );

            return redirect()->route('all.category')->with($notification);
        } else {
            Menu::find($menu_id)->update([
                'menu_name' => $request->menu_name,
            ]);

            $notification = array(
                'message' => 'Menu Updated Successfully',
                'alert-type' => 'success',
            );

            return redirect()->route('all.menu')->with($notification);
        }
    } // End Method

    public function DeleteMenu($id)
    {
        $item = Menu::find($id);
        $img = $item->image;
        unlink($img);

        Menu::find($id)->delete();

        $notification = array(
            'message' => 'Maenu Deleted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    } // End Methode


    // All Product Methode Started
    public function AllProduct()
    {
        $product = Product::latest()->get();

        return view('client.backend.product.all_product', compact('product'));
    } // End Methode

    public function AddProduct()
    {
        $category = Category::latest()->get();
        $city = City::latest()->get();
        $menu = Menu::latest()->get();

        return view('client.backend.product.add_product', compact('category', 'menu', 'city'));
    } // End Methode

    public function StoreProduct(Request $request)
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
                'client_id' => Auth::guard('client')->id(),
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

        return redirect()->route('all.product')->with($notification);
    } // End Methode

    public function EditProduct($id)
    {
        $category = Category::latest()->get();

        $city = City::latest()->get();

        $menu = Menu::latest()->get();

        $product = Product::find($id);

        return view('client.backend.product.edit_product', compact('category', 'menu', 'city', 'product'));
    } // End Methode

    public function UpdateProduct(Request $request)
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
                'best_seller' => $request->best_seller,
                'most_populer' => $request->most_populer,
                'created_at' => Carbon::now(),
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Product Updated Successfully',
                'alert-type' => 'success',
            );

            return redirect()->route('all.product')->with($notification);
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
                'message' => 'Product Updated Successfully',
                'alert-type' => 'success',
            );

            return redirect()->route('all.product')->with($notification);
        }
    } // End Methode

    public function DeleteProduct($id)
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

    public function changeStatus(Request $request)
    {
        $product = Product::find($request->product_id);

        $product->status = $request->status;

        $product->save();

        return response()->json(['success' => "Status Change Successfully"]);
    } // End Methode

    public function AllGallery()
    {
        $gallery = Gallery::latest()->get();

        return view('client.backend.gallery.all_gallery', compact('gallery'));
    } // End Methode

    public function AddGallery()
    {
        return view('client.backend.gallery.add_gallery');
    } // End Methode

    public function StoreGallery(Request $request)
    {
        $images = $request->file('gallery_img');

        foreach ($images as $image) {

            $manager = new ImageManager(new Driver());

            $name_gen = hexdec(uniqid()) . '.' .
                $image->getClientOriginalExtension();

            $img = $manager->read($image);

            $img->resize(500, 500)->save(public_path('upload/gallery/' . $name_gen));

            $save_url = 'upload/gallery/' . $name_gen;

            Gallery::insert([
                'client_id' => Auth::guard('client')->id(),
                'gallery_img' => $save_url
            ]);
        } // end foreach

        $notification = array(
            'message' => 'Gallery Inserted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.gallery')->with($notification);
    } // End Methode


    public function EditGallery($id)
    {
        $gallery = Gallery::find($id);

        return view('client.backend.gallery.edit_gallery', compact('gallery'));
    } // End Methode

    public function UpdateGallery(Request $request)
    {
        $gallery_id = $request->id;

        if ($request->hasFile('gallery_img')) {

            $image = $request->file('gallery_img');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' .
                $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(500, 500)->save(public_path('upload/gallery/' . $name_gen));
            $save_url = 'upload/gallery/' . $name_gen;

            $gallery =  Gallery::find($gallery_id);

            if ($gallery->gallery_img) {

                $img = $gallery->gallery_img;

                unlink($img);
            }

            $gallery->update([
                'gallery_img' => $save_url,
            ]);

            $notification = array(
                'message' => 'Gallery  Updated Successfully',
                'alert-type' => 'success',
            );

            return redirect()->route('all.gallery')->with($notification);
        } else {

            $notification = array(
                'message' => 'No image selected for update',
                'alert-type' => 'warning',
            );

            return redirect()->back()->with($notification);
        }
    } // End Methode

    public function DeleteGallery($id)
    {
        $item = Gallery::find($id);
        $img = $item->gallery_img;
        unlink($img);

        Gallery::find($id)->delete();

        $notification = array(
            'message' => 'Image Deleted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    } // End Methode
}
