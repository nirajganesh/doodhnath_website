<?php

namespace App\Http\Controllers;

use App\Models\BannerModel;
use App\Models\LocationModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
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
    public function dashboard()
    {
        $banner_count=$this->bannermodel::get()->count();
        $location_count=$this->location_model::get()->count();
        $product_count=$this->product_model::get()->count();
        $data=[
            'banner'=>$banner_count,
            'location'=>$location_count,
            'product'=>$product_count
          ];
        return view('admin.dashboard')->with($data);
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login');
    }


    // banner section

    public function banner_list()
    {
        $banner_list= $this->bannermodel::get();
        return view('admin.banners.banner_list',compact('banner_list'));
    }
    public function add_banner()
    {
        return view('admin.banners.add_banner');
    }
    public function save_banner_data(Request $request)
    {
        
        $request->validate([
            'heading'=>'required',
            'content'=>'required',
            'banner_image'=>'required',
          ]
        );
      
        $heading=$request->input('heading');
        $content=$request->input('content');
        $status=$request->input('status')=="on"?'1':'0';
        if($files=$request->file('banner_image'))
        {  
            $image=$files->getClientOriginalName();  
            $image_name = explode('.', $image)[0].time();
            $files->move('uploads',$image_name); 
            $this->bannermodel->banner_image=$image_name;  
        }  
        $this->bannermodel->heading=$heading;
        $this->bannermodel->content=$content;
        $this->bannermodel->is_active=$status;
        $banner=$this->bannermodel->save();
        if($banner)
        {
            return Redirect::back()->with('success','Banner add successfull');
        }
        else
        {
            return Redirect::back()->with('error','Banner record is not add');
        }
       
    }

    public function edit_banner($id)
    {
        $user=$this->bannermodel::where('id',$id)->get()->first();
        if($user)
        {
            return view('admin.banners.edit_banner',compact('user'));
        }
        else
        {
            return Redirect::back()->with('error','record are not exist');
        }
       
    }

    public function update_banner(Request $request,$id)
    {
        $request->validate([
            'heading'=>'required',
            'content'=>'required',
          ]
        );
        $heading=$request->input('heading');
        $content=$request->input('content');
        $status=$request->input('status')=="on"?'1':'0';
        if($request->file('banner_image')!=null)
        {
            if($files=$request->file('banner_image'))
            {  
                $image=$files->getClientOriginalName();  
                $image_name = explode('.', $image)[0].time();
                $files->move('uploads',$image_name); 
            }  
        }

        $data=[];
        if($request->file('banner_image')!=null)
        {
            $data=[
                'heading'=>$heading,
                'content'=>$content,
                'is_active'=>$status,
                'banner_image'=>$image_name
             ];
        }
        else
        {
            $data=[
                'heading'=>$heading,
                'content'=>$content,
                'is_active'=>$status,
             ];
        }
       
        $banner=$this->bannermodel::where('id',$id)->update($data);
        if($banner)
        {
            return Redirect::back()->with('success','Banner update successfull');
        }
        else
        {
            return Redirect::back()->with('error','Banner record is not update');
        }

    }

    public function delete_banner($id)
    {
        $user=$this->bannermodel::where('id',$id)->get()->first();
        if($user)
        {
            $user_delete= $this->bannermodel::where('id',$id)->delete();
            if($user_delete)
            {
                return Redirect::back()->with('success','Banner record delete successfull');
            }
            else
            {
                return Redirect::back()->with('error','Record not delete');
            }
            
        }
        else
        {
            return Redirect::back()->with('error','User is not present');
        }
    }



     // location section
     public function location_list()
     {
         $location_list=  $this->location_model::get();
         return view('admin.locations.location_list',compact('location_list'));
     }

     public function edit_location($id)
     {
        $location=$this->location_model::where('id',$id)->get()->first();
        if($location)
        {
            return view('admin.locations.edit_location',compact('location'));
        }
        else
        {
            return Redirect::back()->with('error','record are not exist');
        }
     }

     public function update_location(Request $request,$id)
     {
        $request->validate([
            'location_name'=>'required',
            'service_time'=>'required',
            'margin'=>'required',
            'quantity'=>'required',
          ]
        );
        $location_name=$request->input('location_name');
        $service_time=$request->input('service_time');
        $margin=$request->input('margin');
        $quantity=$request->input('quantity');
        $data=[
            'location_name'=> $location_name,
            'service_time'=>$service_time,
            'margin'=>$margin,
            'quantity'=>$quantity,
         ];
        $location=$this->location_model::where('id',$id)->update($data);
        if($location)
        {
            return Redirect::back()->with('success','Location update successfull');
        }
        else
        {
            return Redirect::back()->with('error','Location record is not update');
        }
     }


     // Upcoming product list

     public function product_list()
     {
        $product_list= $this->product_model::get();
        return view('admin.products.products_list',compact('product_list'));  
     }

     public function add_product()
     {
         return view('admin.products.add_product');
     }

     public function edit_product($id)
     {
        $product=$this->product_model::where('id',$id)->get()->first();
        if($product)
        {
            return view('admin.products.edit_product',compact('product'));
        }
        else
        {
            return Redirect::back()->with('error','record are not exist');
        }
     }

     
     public function save_product_data(Request $request)
     {
         $request->validate([
             'heading'=>'required',
             'content'=>'required',
             'product_image'=>'required',
             'discount'=>'required',
           ]
         );
         //dd("enter");
         $heading=$request->input('heading');
         $content=$request->input('content');
         $discount=$request->input('discount');
         $status=$request->input('status')=="on"?'1':'0';
         if($files=$request->file('product_image'))
         {  
             $image=$files->getClientOriginalName();  
             $image_name = explode('.', $image)[0].time();
             $files->move('products',$image_name); 
             $this->product_model->product_image=$image_name;  
         }  

        
         $this->product_model->heading=$heading;
         $this->product_model->content=$content;
         $this->product_model->discount=$discount;
         $this->product_model->is_active=$status;
         $product=$this->product_model->save();
         if($product)
         {
             return Redirect::back()->with('success','product add successfull');
         }
         else
         {
             return Redirect::back()->with('error','product record is not add');
         }
        
     }


     public function update_product(Request $request,$id)
     {
         $request->validate([
             'heading'=>'required',
             'content'=>'required',
             'discount'=>'required',
           ]
         );
         $heading=$request->input('heading');
         $content=$request->input('content');
         $discount=$request->input('discount');
         $status=$request->input('status')=="on"?'1':'0';
         if($request->file('product_image')!=null)
         {
             if($files=$request->file('product_image'))
             {  
                 $image=$files->getClientOriginalName();  
                 $image_name = explode('.', $image)[0].time();
                 $files->move('products',$image_name); 
             }  
         }
 
         $data=[];
         if($request->file('product_image')!=null)
         {
             $data=[
                 'heading'=>$heading,
                 'content'=>$content,
                 'is_active'=>$status,
                 'product_image'=>$image_name
              ];
         }
         else
         {
             $data=[
                 'heading'=>$heading,
                 'content'=>$content,
                 'is_active'=>$status,
              ];
         }
        
         $product=$this->product_model::where('id',$id)->update($data);
         if($product)
         {
             return Redirect::back()->with('success','product update successfull');
         }
         else
         {
             return Redirect::back()->with('error','product record is not update');
         }
 
     }
 
     public function delete_product($id)
     {
         $product=$this->product_model::where('id',$id)->get()->first();
         if($product)
         {
             $product_delete= $this->product_model::where('id',$id)->delete();
             if($product_delete)
             {
                 return Redirect::back()->with('success','Products record delete successfull');
             }
             else
             {
                 return Redirect::back()->with('error','Record not delete');
             }
             
         }
         else
         {
             return Redirect::back()->with('error','User is not present');
         }
     }

     

}
