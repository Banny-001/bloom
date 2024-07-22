<?php

namespace App\Http\Controllers;

use App\Models\Bouquet;
use Illuminate\Http\Request;
use IlValidator;

class BouquetController extends Controller
{
    public function index()
    { //get all Boquets
        $bouquets=Bouquet::get();
        // return $bouquets;
        return view ('bouquets.index',compact('bouquets'));
    }
    public function create(){
        return view('bouquets.create');
    }
    //from post 
    public function store(Request $request)
    {
       $request->validate([
        'name'=>['string','required'],
        'description'=>['string','required'],
        'amount'=>['string','required'],
        'is_active'=>'sometimes'

       ]);
       Bouquet::create([
        'name'=>$request->name,
        'description'=>$request->description,
        'amount'=>$request->amount,
        'is_active'=>$request->is_active==true ? 1:0,
       ]);
       return redirect('bouquet/create')->with('status','Bouquet created');
    }
    public function edit(int $id)
    {
        $bouquet =Bouquet::findorfail($id);
        // return $bouquet;
        return view('bouquets.edit',compact('bouquet'));
    }
     public function update(Request $request, int $id)
     {
        $request->validate([
            'name'=>['string','required'],
            'description'=>['string','required'],
            'amount'=>['string','required'],
            'is_active'=>'sometimes'
    
           ]);
           Bouquet:: findorfail($id)->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'amount'=>$request->amount,
            'is_active'=>$request->is_active==true ? 1:0,
           ]);
           return redirect ()->back()->with('status','Bouquet Updated');
     }
     public function destroy( int $id)
     {
           $bouquet=Bouquet::findorfail($id);
           $bouquet->delete();

           return redirect()->back()->with('status','Bouquet Deleted');
     }
}

