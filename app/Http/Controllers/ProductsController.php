<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use Illuminate\Support\Facades\Storage;
use Validator;
use Illuminate\Support\Facades\DB;
use Session;

class ProductsController extends Controller
{
    public function show()
    {
        $products = products::all();
        return view('Admin.products',compact('products'));
    }

    public function productsave(Request $request)
    {
       $validator =  Validator::make($request->all(),[
            'product_name'=>'required',
            'size'=>'required',
            'type'=>'required',
            'price'=>'required|integer',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
        ]);
       
       if($validator->fails()) {
            return response()->json(array('msg'=>'Please Check Your Entry'), 200);
        }

        if ($request->hasFile('image')) {
            $name = rand()."-{$request->image->getClientOriginalName()}";
            $path = $request->image->storeAs('products', $name, 'local');
        }
            
        // products::create([
        //     'product_name' => $request->product_name,
        //     'product_size' => $request->size,
        //     'type' => $request->type,
        //     'category' => $request->category,
        //     'price' => $request->price,
        //     'discount' => $request->discount,
        //     'image' => $path,
        // ]);
        $msg = 'Product Add  Successful!';
        return response()->json(array('msg'=> $msg), 200);
    }

    public function showproduct($id)
    {
      $product = products::find($id)->toJson();
      return response()->json(array('product'=> $product), 200); 
    }

    public function productupload()
    {
        $upload = DB::select('SELECT date(created_at)udate,count(*)uno FROM products group by date(created_at)');
        return view('Admin.productupload',compact('upload'));
    }

    public function productfileupload(Request $request)
    {
         $filepath = $request->product_file->getRealPath();
         $file = fopen($filepath,"r");
         $importData_arr = array();
         $i = 0;
         while (($filedata = fgetcsv($file, 10000, ",")) !== FALSE) {
            $num = count($filedata);
            for ($c=0; $c < $num; $c++) {
                 $importData_arr[$i][] = $filedata [$c];
             }
             products::create([
            'itemcode' => $importData_arr[$i][0],
            'itemdesc' => $importData_arr[$i][1],
            'brand' => $importData_arr[$i][2],
            'sections' => $importData_arr[$i][3],
            'sizes' => $importData_arr[$i][4],
            'slno' => $importData_arr[$i][5],
            'rate' => $importData_arr[$i][6],
            'MRP' => $importData_arr[$i][7],
            'tax' => $importData_arr[$i][8],
            'taxtype' => $importData_arr[$i][9],
            'design' => $importData_arr[$i][10],
            'style' => $importData_arr[$i][11],
            'supplier' => $importData_arr[$i][12],
            'Category' => $importData_arr[$i][13],
            'colour' => $importData_arr[$i][14],
            'stock' => $importData_arr[$i][15],
            'HSN' => $importData_arr[$i][17],
        ]);
             $i++;
         }
         
         return redirect()->route('productupload');  
    }

    public function updateproduct(Request $request)
    {
        

        if ($request->hasFile('front_image')) {
            $name =  $request->pid."-front_image.{$request->front_image->getClientOriginalExtension()}";
            $frontimages = $request->front_image->storeAs('frontimages', $name, 'local');
            products::where('id', $request->pid)->update(['front_image'=>$frontimages]);
        }

        $add_image = '';

        if ($request->hasFile('add_image')) {
            foreach ($request->add_image as $images) {
            $name1 =  rand().$request->pid.".{$images->getClientOriginalExtension()}";
            $store = $images->storeAs('addimages', $name1, 'local');
            $add_image = $add_image.$name1.'|';
            products::where('id', $request->pid)->update(['add_image'=>$add_image]);
         }

        }

         products::where('id', $request->pid)->update([
            'stock'=>$request->stock,
            ]);

        return response()->json(array('msg'=>'Images Add  Successful!'), 200);
    }

    public function productdelete($id)
    {
        $deleted = products::where('id', $id)->delete();
        return response()->json(array('msg'=>'Item deleted  Successful!'), 200);
    }
    public function singleproduct($pid,$barnd)
    {

        $product = products::find($pid);
        $add_images =  explode('|', $product->add_image);

        $raltive = DB::select("SELECT * FROM products where id != '$pid' and brand='$barnd' and front_image is not null limit 4");
        return view('singleproduct',compact('product','raltive','add_images'));
    }

    public function cartdelete($cid)
    {
    if(!empty(Session::get('cart')))
    {
    Session::forget('cart.'.$cid.'');
    $c = Session::get('cart');
    Session::put('cart',$c);
    }
    return response()->json(array('msg'=>'Item Remove Successful!'), 200);
    }
}
