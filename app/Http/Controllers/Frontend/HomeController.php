<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Brand;
use App\Models\CompanyImage;
use App\Models\Enterprise;
use App\Models\Gallery;
use App\Models\Menu;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index ()
    {

//        $menus = Menu::select('id', 'name')->get();
        $brands = Brand::orderBy('id', 'desc')->get();
//        return view('backend.pages.brands.index',compact('brands'));
        $sliders = Slider::orderBy('priority', 'asc')->get();
//        dd($sliders);
        $products = DB::table('products')
            ->select('products.*','product_images.image')
            ->join('product_images', 'products.id','product_images.product_id')
            ->get();
        $coms = CompanyImage::orderBy('id', 'desc')->get();
        $enterprises = Enterprise::orderBy('id', 'desc')->get();
        return view('frontend.front_index',  compact('sliders','brands', 'products', 'coms', 'enterprises'));
//        return view('frontend.header',compact('menus'));
    }
    public function header ()
    {
        $menus = Menu::select('id', 'name')->get();
        return view('frontend.header',compact('menus'));
    }
    public function profile ()
    {
        $profiles = Profile::orderBy('id', 'desc')->get();
        return view('frontend.profile',compact('profiles'));
    }
//    public function product ()
//    {
//        return view('frontend.product');
//    }
    public function gallery ()
    {
        $galleries = Gallery::orderBy('id', 'desc')->get();
        return view('frontend.gallery', compact('galleries'));
    }
    public function contact ()
    {
        return view('frontend.contact');
    }

    public function search(Request $request )
    {
        $search = $request->search;
        $products = Product::orWhere('title', 'like', '%'.$search.'%')
        ->orWhere('description', 'like', '%'.$search.'%')
        ->orWhere('slug', 'like', '%'.$search.'%')
        ->orWhere('price', 'like', '%'.$search.'%')
        ->orWhere('quantity', 'like', '%'.$search.'%')
        ->orderBy('id', 'desc')
        ->paginate(3);
        return view('frontend.pages.product.search', compact('search', 'products'));
    }

}
