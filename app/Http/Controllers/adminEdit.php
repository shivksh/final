<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\insertModel;
use App\MagzineNews;
use App\readyData;
use App\fitnessData;
use App\FoodData;
use App\otherData;
use App\BusinessData;
use Illuminate\Support\Facades\DB;


class adminEdit extends Controller
{
    public function magzineFunc(){
        $mag= MagzineNews::all();
        return view('admin.adminMagzineEdit',['mag'=>$mag]);
    }


    public function foodFunc(){
        $food= FoodData::all();
        return view('admin.adminFoodEdit',['food'=>$food]);
    }

    public function fitFunc(){
        $fit= fitnessData::all();
        return view('admin.adminFitnessEdit',['fit'=>$fit]);
    }

    public function movieFunc(){
        $films= readyData::all();
        return view('admin.adminMovieEdit',['films'=>$films]);
    }

    public function businessFunc(){
        $business= BusinessData::all();
        return view('admin.adminBusinessEdit',['business'=>$business]);
    }

    public function otherFunc(){
        $other= otherData::all();
        return view('admin.adminOtherEdit',['other'=>$other]);
    }

    public function edit($Id){
        $student=MagzineNews::find($Id);
    return view('admin.editButton',compact('student'));
    }


    public function upd(Request $req, $Id){
    //     $magzine= MagzineNews::find($Id);
    //     $magzine->Email=$req->input('email');
    
    //     $magzine->Name=$req->input('name');
    
        
    //     if($req->hasfile('image')){
    
    //             $file = $req->file('image');
    
    //             $extension=$file->getClientOriginalExtension();
    
    //             $filename = time(). '.'.$extension;
    
    //             $file->move('uploads/logoFile/',$filename);
    
    //             $magzine->Image=$filename;
    
    //         }
    
           
    // $magzine->save();
    // return redirect("/insert")->with('success' , 'Data Saved to magzine_news table Successfully');

           


        // $student= MagzineNews::find($Id);
        // $student->Email=$req->input('email');
        // $student->Name=$req->input('name');
        // if($req->hasFile('image')){

        //     $file = $req->file('image');

        //     $extension=$file->getClientOriginalExtension();

        //     $filename = time(). '.'.$extension;

        //     $file->move('uploads/Pics/'. $filename);

        //     $student->Image=$filename;

        // }
        // $student->save();
        
        $this->validate($req,[
            'email'=>'required',
            'name'=>'required',
            'image'=>'required',
        ]);
        //   $student=completeData::find($Id);
         $firstfill=$req->input('email');
         $secondfill=$req->input('name');
         if($req->hasFile('image')){

            $file = $req->file('image');

            $extension=$file->getClientOriginalExtension();

            $filename = time(). '.'.$extension;

            $file->move('uploads/Pics/'. $filename);

            // $student->Image=$filename;
         DB::update('update magzine_news set Email=?,Name=?,Image=? where Id=? ',[$firstfill,$secondfill,$filename,$Id]);
         return redirect('/adminmag')->with('success','Data Edited SuccessFully!!');
        }
        



    }


    public function delete($Id){
        DB::delete('delete from magzine_news where Id=?',[$Id]);
        return redirect('/adminmag')->with ('success', 'Data Deleted Succcessfully');
    }



}
