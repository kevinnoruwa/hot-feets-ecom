<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\allshoes;
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
        $newShoes = allshoes::where('newarrival', '=', 1)->take(6)->get();
        $clothes = allshoes::where('cloth', '=', 1)->take(6)->get();
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
        $shoes = allshoes::where([
            ['brand', '=', 'Adidas'],
            ['cloth', '=', 0],
            
            ])->get();
        return view("adidas", compact('shoes'));
    }

    public function adidasshow($id)
    {
        $shoe = allshoes::where([
            ['id', $id],
            ['brand', '=', 'Adidas'],

            ])->first();

            $footwear = allshoes::where([
                ['brand', '=', 'Adidas'],
                ['cloth', '=', 0],
                ])
            ->inRandomOrder()
            ->take(4)
            ->get();

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
     $shoes =  allshoes::where([ ['cloth', '=', 0],
        ['extra', '=', 0],])
        ->inRandomOrder()
        ->get(); 
    
       return view('allShoes', compact('shoes'));
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
        
        $shoes = allshoes::where([
            ['brand', '=', 'Nike'],
            ['cloth', '=', 0],
            
            ])->get();

        return view("nike", compact("shoes"));
    }
    public function nikeshow($id)
    {
        $shoe = allshoes::where([
            ['id', $id],
            ['brand', '=', 'Nike'],

            ])->first();
       
        $footwear = allshoes::where([
            ['brand', '=', 'Nike'],
            ['cloth', '=', 0],
            ])
        ->inRandomOrder()
        ->take(4)
        ->get();

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
        $shoes = allshoes::where([
            ['brand', '=', 'Jordan'],
            ['cloth', '=', 0],
            
            ])->get();

        return view('jordan' , compact("shoes"));
    }
    public function jordanshow($id)
    {
        $shoe = allshoes::where([
            ['id', $id],
            ['brand', '=', 'Jordan'],

            ])->first();
       
        $footwear = allshoes::where([
            ['brand', '=', 'Jordan'],
            ['cloth', '=', 0],
            ])
        ->inRandomOrder()
        ->take(4)
        ->get();
        return view('jordan_show' , compact(["shoe", "footwear"]));
    }

    public function puma()
    {
        $shoes = allshoes::where([
            ['brand', '=', 'Puma'],
            ['cloth', '=', 0],
            
            ])->get();

        return view('puma', compact("shoes"));
    }
    public function pumashow($id)
    {
        $shoe = allshoes::where([
            ['id', $id],
            ['brand', '=', 'Puma'],

            ])->first();
       
        $footwear = allshoes::where([
            ['brand', '=', 'Puma'],
            ['cloth', '=', 0],
            ])
        ->inRandomOrder()
        ->take(4)
        ->get();

        return view('puma_show' , compact(["shoe", "footwear"]));
    }

    public function new()
    {
        $shoes = allshoes::where([
            ['newarrival', '=', 1],
            ['cloth', '=', 0],
            
            ])->get();
        return view('newArrivals', compact('shoes'));
    }
    public function newshow($id)
    {
        $shoe = allshoes::where([
            ['id', $id],
            ['newarrival', '=', 1],

            ])->first();
       
        $footwear = allshoes::where([
            ['newarrival', '=', 1],
            ['cloth', '=', 0],
            ])
        ->inRandomOrder()
        ->take(4)
        ->get();
        return view('new_show' , compact(["shoe", "footwear"]));
    }
    
    public function  apparel()
    {
        $clothes = allshoes::where([
            ['cloth', '=', 1],
            
            ])->get();
        return view('apparel', compact('clothes'));
    }

    public function  apparelshow($id)
    {
        $cloth = allshoes::where([
            ['id', $id],
            ['cloth', '=', 1],

            ])->first();
       
        return view('apparel_show' , compact('cloth'));
    }

    public function  shoppingcart()
    {

        // $totalPrice = Cart::where('price', $id)->first();
        $products = Cart::all();
        if(count($products) === 0){
            $message = "your cart is empty";
            session::flash("error_message", $message);
        }
    
   
       
        $items = Cart::userCartItems();
        // echo "<pre>";  print_r($items); die;

        return view('cart')->with(compact("items"));
    }

    public function  extras()
    {
        $extras = allshoes::where([
            ['extra', '=', 1],
            
            ])->get();
        return view('extra', compact('extras'));
    }
    public function  extrasshow($id)
    {
        $extras = allshoes::where([
            ['id', $id],
            ['extra', '=', 1],

            ])->first();
       
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
        'price' => $data['price'],
        ] )->count();

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
        'price' => $data['price'],
        ] );

        $message = "Product has been added in cart";

        session::flash('success_message', $message);

        return redirect()->back();

    }


    public function delete(Cart $item, $id)
    {


        $item = Cart::find($id);

      
        $item->delete();
        return redirect()->back();
      
    }
}
