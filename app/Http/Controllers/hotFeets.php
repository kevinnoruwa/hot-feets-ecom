<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\new_arrivals;
use App\Models\clothes;
use App\Models\adidas;
use App\Models\nikes;
use App\Models\pumas;
use App\Models\jordans;
use App\Models\extras;
use App\Models\Cart;
use Session;

class hotFeets extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newShoes = new_arrivals::limit(6)->get();
        $clothes = clothes::limit(6)->get();
        return view('index', compact(['newShoes', 'clothes']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function adidas()
    {
        $shoes = adidas::all();
        return view("adidas", compact('shoes'));
    }

    public function adidasshow($id)
    {
        $shoe = adidas::where('id', $id)->first();
        $footwear = adidas::limit(4)->get();
        return view('adidas_show' , compact(["shoe", "footwear"]));
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     
        return view('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
     $nike = nikes::all();
     $jordan = jordans::all();
     $puma = pumas::all();
     $adidas = adidas::all();
      
       return view('allShoes', compact(["nike", "jordan", "puma", "adidas"]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function nike()
    {
        $shoes = nikes::all();
        return view("nike", compact("shoes"));
    }
    public function nikeshow($id)
    {
        $shoe = nikes::where('id', $id)->first();
        $footwear = nikes::limit(4)->get();
        return view('nike_show' , compact(["shoe", "footwear"]));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function jordan()
    {
        $shoes = jordans::all();

        return view('jordan' , compact("shoes"));
    }
    public function jordanshow($id)
    {
        $shoe = jordans::where('id', $id)->first();
        $footwear = jordans::limit(4)->get();
        return view('jordan_show' , compact(["shoe", "footwear"]));
    }

    public function puma()
    {
        $shoes = pumas::all();
        return view('puma', compact("shoes"));
    }
    public function pumashow($id)
    {
        $shoe = pumas::where('id', $id)->first();
        $footwear = pumas::limit(4)->get();
        return view('puma_show' , compact(["shoe", "footwear"]));
    }

    public function new()
    {
        $shoes = new_arrivals::all();
        return view('newArrivals', compact('shoes'));
    }
    public function newshow($id)
    {
        $shoe = new_arrivals::where('id', $id)->first();
        $footwear = new_arrivals::limit(4)->get();
        return view('new_show' , compact(["shoe", "footwear"]));
    }
    
    public function  apparel()
    {
        $clothes = clothes::all();
        return view('apparel', compact('clothes'));
    }

    public function  apparelshow($id)
    {
        $cloth = clothes::where('id', $id)->first();
        return view('apparel_show' , compact('cloth'));
    }

    public function  shoppingcart()
    {
        $products = Cart::all();
        if(count($products) === 0){
            $message = "your cart is empty";
            session::flash("error_message", $message);
        }
    
   
        return view('cart', compact("products"));
    }

    public function  extras()
    {
        $extras = extras::all();
        return view('extra', compact('extras'));
    }
    public function  extrasshow($id)
    {
        $extras = extras::where('id', $id)->first();
        return view('extras_show', compact('extras'));
    }
    

    public function  addtocart(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();     
        }
        // Generate Sesson id
        $session_id = Session::get('session_id');
        if(empty($session_id)){
            $session_id = Session::getId();
            Session::put('session_id', $session_id);
        }

        // Check if product exist in cart

        $countProducts = Cart::where(['session_id'=>$session_id, 
        'product_id'=>$data["product_id"], 
        'size' => $data['size'], 
        'quantity' => $data['quantity'], 
        'brand' => $data['brand'],
        'name' => $data['name'],
        'price' => $data['price'],
        'image' => $data['image']] )->count();

        if($countProducts > 0 ){

            $message = "Product already exist in cart";

            session::flash('error_message', $message);

            return redirect()->back();

        }

        // Save product to cart

        Cart::insert(['session_id'=>$session_id, 
        'product_id'=>$data["product_id"], 
        'size' => $data['size'], 
        'quantity' => $data['quantity'],
        'brand' => $data['brand'],
        'name' => $data['name'],
        'price' => $data['price'],
        'image' => $data['image']] );

        $message = "Product has been added in cart";

        session::flash('success_message', $message);

        return redirect()->back();

    }
}
