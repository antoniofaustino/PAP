<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreUpdateProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    protected $request;


    public function __construct(Request $request)
    {
    
         $this->request = $request;
        //  $this->middleware('auth');
        //$this->middleware('auth')->except(['index','show']);

         

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $products = Product::all();
        return view('Admin.pages.products.index',[
            'products'=> $products,
            ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        return view('Admin.pages.products.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(StoreUpdateProductRequest $request)
    {
       $data = $request->only('name','description','price');
       Product::create($data);
       return redirect()-> route('products.index');
    // $product->name=$request->name;
    // $product->save();

        
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show($id)

    {
        //$product = Product::where('id',$id)->first();
       //$product=Product::find($id);
        if(!$product=Product::find($id)){
            return redirect()->back();
        }
        
        return view('Admin.pages.products.show', [
            'product'=>$product
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function edit($id)
    {
        return view('Admin.pages.products.edit', compact('id'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, $id)
    {
        dd("Editando o produto {$id}");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        //
    }
}
