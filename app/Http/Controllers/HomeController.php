<?php

namespace App\Http\Controllers;

use App\Models\BannerModel;
use App\Models\LocationModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $bannermodel;
    protected $location_model;
    protected $product_model;
    function __construct()
    {
        $this->bannermodel = new BannerModel();
        $this->location_model = new LocationModel();
        $this->product_model = new ProductModel();
    }
    public function index()
    {
        $banner=$this->bannermodel::get();
        $location=$this->location_model::get()->first();
        $product=$this->product_model::get();
        $data=[
          'banner'=>$banner,
          'location'=>$location,
          'product'=>$product
        ];
        return view('user.home')->with($data);
    }
}
