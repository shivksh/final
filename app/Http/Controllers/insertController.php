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







class insertController extends Controller
{
    public function insertData(Request $req){

        $this->validate($req,[
            'email'=>'required',
            'name'=>'required',
            'pass'=>'required',
            'image'=>'required',
        ]);

    $movie=new readyData;
    $magzine=new MagzineNews;
    $food=new FoodData;
    $fitness=new fitnessData;
    $other=new otherData;
    $business=new BusinessData;

    if($req->pass=="Movies&Entertainment"){


        $movie->Email=$req->email;

        $movie->Name=$req->name;
    
        $movie->Brand=$req->pass;
        if($req->hasfile('image')){
    
                $file = $req->file('image');
    
                $extension=$file->getClientOriginalExtension();
    
                $filename = time(). '.'.$extension;
    
                $file->move('uploads/Pics/',$filename);
    
                $movie->Image=$filename;
    
            }
    
            else{
    
                return $req;
    
                $movie->Image='';
    
            }
    $movie->save();
    return redirect("/insert")->with('success' , 'Data Saved to ready_data table Successfully');

           
        }



    
    
    elseif($req->pass=='Fitness&Sports'){
        $fitness->Email=$req->email;

        $fitness->Name=$req->name;
    
        $fitness->Brand=$req->pass;
        if($req->hasfile('image')){
    
                $file = $req->file('image');
    
                $extension=$file->getClientOriginalExtension();
    
                $filename = time(). '.'.$extension;
    
                $file->move('uploads/Pics/',$filename);
    
                $fitness->Image=$filename;
    
            }
    
            else{
    
                return $req;
    
                $fitness->Image='';
    
            }
    $fitness->save();
    return redirect("/insert")->with('success' , 'Data Saved to fitness_data table Successfully');

           
        }
    

    
    
    // --------------------------------------------


    elseif($req->pass=='Foods'){
        $food->Email=$req->email;

        $food->Name=$req->name;
    
        $food->Brand=$req->pass;
        if($req->hasfile('image')){
    
                $file = $req->file('image');
    
                $extension=$file->getClientOriginalExtension();
    
                $filename = time(). '.'.$extension;
    
                $file->move('uploads/Pics/',$filename);
    
                $food->Image=$filename;
    
            }
    
            else{
    
                return $req;
    
                $food->Image='';
    
            }
    $food->save();
    return redirect("/insert")->with('success' , 'Data Saved to food_data table Successfully');

        }
    

    

// -----------------

elseif($req->pass=='Others'){
    $other->Email=$req->email;

    $other->Name=$req->name;

    $other->Brand=$req->pass;
    if($req->hasfile('image')){

            $file = $req->file('image');

            $extension=$file->getClientOriginalExtension();

            $filename = time(). '.'.$extension;

            $file->move('uploads/Pics/',$filename);

            $other->Image=$filename;

        }

        else{

            return $req;

            $other->Image='';

        }
$other->save();
return redirect("/insert")->with('success' , 'Data Saved to other_data table Successfully');

    }





// ---------------



elseif($req->pass=='Bussiness&Entrepreneurship'){
    $business->Email=$req->email;

    $business->Name=$req->name;

    $business->Brand=$req->pass;
    if($req->hasfile('image')){

            $file = $req->file('image');

            $extension=$file->getClientOriginalExtension();

            $filename = time(). '.'.$extension;

            $file->move('uploads/Pics/',$filename);

            $business->Image=$filename;

        }

        else{

            return $req;

            $business->Image='';

        }
$business->save();
return redirect("/insert")->with('success' , 'Data Saved to business_data table Successfully');

    }




    elseif($req->pass=='Magzine&Books'){
        $magzine->Email=$req->email;
    
        $magzine->Name=$req->name;
    
        $magzine->Brand=$req->pass;
        if($req->hasfile('image')){
    
                $file = $req->file('image');
    
                $extension=$file->getClientOriginalExtension();
    
                $filename = time(). '.'.$extension;
    
                $file->move('uploads/Pics/',$filename);
    
                $magzine->Image=$filename;
    
            }
    
            else{
    
                return $req;
    
                $magzine->Image='';
    
            }
    $magzine->save();
    return redirect("/insert")->with('success' , 'Data Saved to magzine_news table Successfully');

           
        }
    
    
    }

    public function magzineFunc(){
        $mag= MagzineNews::all();
        return view('magzinePage',['mag'=>$mag]);
    }


    public function foodFunc(){
        $food= FoodData::all();
        return view('foodPage',['food'=>$food]);
    }

    public function fitFunc(){
        $fit= fitnessData::all();
        return view('fitnessPage',['fit'=>$fit]);
    }

    public function movieFunc(){
        $films= readyData::all();
        return view('moviePage',['films'=>$films]);
    }

    public function businessFunc(){
        $business= BusinessData::all();
        return view('businessPage',['business'=>$business]);
    }

    public function otherFunc(){
        $other= otherData::all();
        return view('otherPage',['other'=>$other]);
    }



}
