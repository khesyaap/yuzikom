<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Location;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    // Master Category
    public function category(){

        $category = Category::get();
        
        return view('master.category', ['data' => $category]);

    }

    public function tambah(){
        return view('master.form_category');
    }

    public function simpan(Request $request){
        $data = [
            'name_item'=>$request->name_item
        ];

        Category::create($data);

        return redirect()->route('category');
    }

    public function edit($id){
        $category = Category::find($id);

        return view('master.form_category', ['category'=>$category]);
    }

    public function update($id, Request $request){
        $category = $request->all();
        $category = Category::find($id);
        $category -> update([
            'name_item' => $request->name_item,
        ]);

        return redirect()->route('category');
    }

    public function hapus($id){
        $category = Category::find($id);
        $category->delete();
        
        return redirect()->route('category');
    }
    // End Master Category



    // Master Location
    public function location(){

        $location = Location::get();
        
        return view('master.location', ['dataL' => $location]);

    }

    public function tambahL(){
        return view('master.form_location');
    }

    public function simpanL(Request $request){
        $dataL = [
            'lokasi'=>$request->location,
            'status'=>$request->status
        ];

        Location::create($dataL);

        return redirect()->route('location');
    }

    public function editL($id){
        $location = Location::find($id);

        return view('master.form_location', ['location'=>$location]);
    }

    public function updateL($id, Request $request){
        $location = $request->all();
        $location = Location::find($id);
        $location -> update([
            'lokasi' => $request->location,
            'status'=>$request->status
        ]);

        return redirect()->route('location');
    }

    public function hapusL($id){
        $location = Location::find($id);
        $location->delete();
        
        return redirect()->route('location');
    }
    // End Master Location

}
