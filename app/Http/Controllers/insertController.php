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
use App\companyalldetails;
use Illuminate\Support\Facades\DB;
use App\reviewall;










class insertController extends Controller
{
    public function insertData(Request $req){

        $this->validate($req,[
            'email'=>'required',
            'name'=>'required',
            'pass'=>'required',
            'image'=>'required',
            'ceo'=>'required',
            'phone'=>'required',
            'details'=>'required',
        ]);

    $magzine=new MagzineNews;
    $food=new FoodData;
    $fitness=new fitnessData;
    $other=new otherData;
    $business=new BusinessData;
    $comDetails=new companyalldetails;




        $comDetails->Email=$req->email;

        $comDetails->Name=$req->name;
        $comDetails->CEO=$req->ceo;
        $comDetails->Contact=$req->phone;
        $comDetails->Details=$req->details;
        $comDetails->Website=$req->website;
        $comDetails->Brand_Type=$req->pass;

        if($req->hasfile('image')){
    
                $file = $req->file('image');
    
                $extension=$file->getClientOriginalExtension();
    
                $filename = time(). '.'.$extension;
    
                $file->move('uploads/Pics/',$filename);
    
                $comDetails->Image=$filename;
    
            }
    
            
    $comDetails->save();
    return redirect("/insert")->with('success' , 'Data Saved to table Successfully');

           
        
        }


    
    
//     elseif($req->pass=='Fitness&Sports'){
//         $fitness->Email=$req->email;

//         $fitness->Name=$req->name;
    
//         $fitness->Brand=$req->pass;
//         if($req->hasfile('image')){
    
//                 $file = $req->file('image');
    
//                 $extension=$file->getClientOriginalExtension();
    
//                 $filename = time(). '.'.$extension;
    
//                 $file->move('uploads/Pics/',$filename);
    
//                 $fitness->Image=$filename;
    
//             }
    
            
//     $fitness->save();
//     return redirect("/insert")->with('success' , 'Data Saved to fitness_data table Successfully');

           
//         }
    

    
    
//     // --------------------------------------------


//     elseif($req->pass=='Foods'){
//         $food->Email=$req->email;

//         $food->Name=$req->name;
    
//         $food->Brand=$req->pass;
//         if($req->hasfile('image')){
    
//                 $file = $req->file('image');
    
//                 $extension=$file->getClientOriginalExtension();
    
//                 $filename = time(). '.'.$extension;
    
//                 $file->move('uploads/Pics/',$filename);
    
//                 $food->Image=$filename;
    
//             }
    
            
//     $food->save();
//     return redirect("/insert")->with('success' , 'Data Saved to food_data table Successfully');

//         }
    

    

// // -----------------

// elseif($req->pass=='Others'){
//     $other->Email=$req->email;

//     $other->Name=$req->name;

//     $other->Brand=$req->pass;
//     if($req->hasfile('image')){

//             $file = $req->file('image');

//             $extension=$file->getClientOriginalExtension();

//             $filename = time(). '.'.$extension;

//             $file->move('uploads/Pics/',$filename);

//             $other->Image=$filename;

//         }

// $other->save();
// return redirect("/insert")->with('success' , 'Data Saved to other_data table Successfully');

//     }





// // ---------------



// elseif($req->pass=='Bussiness&Entrepreneurship'){
//     $business->Email=$req->email;

//     $business->Name=$req->name;

//     $business->Brand=$req->pass;
//     if($req->hasfile('image')){

//             $file = $req->file('image');

//             $extension=$file->getClientOriginalExtension();

//             $filename = time(). '.'.$extension;

//             $file->move('uploads/Pics/',$filename);

//             $business->Image=$filename;

//         }

       
// $business->save();
// return redirect("/insert")->with('success' , 'Data Saved to business_data table Successfully');

//     }




//     elseif($req->pass=='Magzine&Books'){
//         $magzine->Email=$req->email;
    
//         $magzine->Name=$req->name;
    
//         $magzine->Brand=$req->pass;
//         if($req->hasfile('image')){
    
//                 $file = $req->file('image');
    
//                 $extension=$file->getClientOriginalExtension();
    
//                 $filename = time(). '.'.$extension;
    
//                 $file->move('uploads/Pics/',$filename);
    
//                 $magzine->Image=$filename;
    
//             }
    
           
//     $magzine->save();
//     return redirect("/insert")->with('success' , 'Data Saved to magzine_news table Successfully');

           
//         }
    
    
//     }

    public function magzineFunc(){
        $mag= companyalldetails::all();
        return view('magzinePage',['mag'=>$mag]);
    }



    public function edit($Id){
        $student=companyalldetails::find($Id);
    return view('admin.editButton',compact('student'));
    }


    // public function foodFunc(){
    //     $food= FoodData::all();
    //     return view('foodPage',['food'=>$food]);
    // }

    // public function fitFunc(){
    //     $fit= fitnessData::all();
    //     return view('fitnessPage',['fit'=>$fit]);
    // }

    // public function movieFunc(){
    //     $films= readyData::all();
    //     return view('moviePage',['films'=>$films]);
    // }

    // public function businessFunc(){
    //     $business= BusinessData::all();
    //     return view('businessPage',['business'=>$business]);
    // }

    // public function otherFunc(){
    //     $other= otherData::all();
    //     return view('otherPage',['other'=>$other]);
    // }


    // public function edit($Id){
    //     $student=completeData::find($Id);
    // return view('edit',compact('student'));
        
    // }

    // public function upd(Request $req,$Id){
        
    //     $this->validate($req,[
    //         'fname'=>'required',
    //         'lname'=>'required',
    //     ]);
    //     //   $student=completeData::find($Id);
    //      $firstname=$req->input('fname');
    //      $lastname=$req->input('lname');
    //     //   $student->save();
    //     DB::update('update complete_data set firstname=?,lastname=? where Id=? ',[$firstname,$lastname,$Id]);
    //       return redirect('/rn')->with('success', 'Data Edited SuccessFully');
    //     //   dd($student);
    // }


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
            'pass'=>'required',
            'image'=>'required',
            'ceo'=>'required',
            'phone'=>'required',
            'details'=>'required',
            ]);
            //   $student=completeData::find($Id);
             $firstfill=$req->input('email');
             $secondfill=$req->input('name');
             $thirdfill=$req->input('pass');
             $web=$req->input('website');
             $fourthfill=$req->input('ceo');
             $fifthfill=$req->input('phone');
             $sixthfill=$req->input('details');


             if($req->hasFile('image')){
    
                $file = $req->file('image');
    
                $extension=$file->getClientOriginalExtension();
    
                $filename = time(). '.'.$extension;
    
                $file->move('uploads/Pics/'. $filename);
    
                // $student->Image=$filename;
             DB::update('update companyalldetails set Email=?,Name=?,Image=?,Brand_Type=?,Website=?,CEO=?,Contact=?,Details=? where Id=? ',[$firstfill,$secondfill,$filename,$thirdfill,$web,$fourthfill,$fifthfill,$sixthfill,$Id]);
             return redirect('/reading')->with('success','Data Edited SuccessFully!!');
            }
            

    
        }
    
    
        public function delete($Id){
            DB::delete('delete from companyalldetails where Id=?',[$Id]);
            return redirect('/reading')->with ('success', 'Data Deleted Succcessfully');
        }



        public function rateButton(Request $req){
            $reviewDetails=new reviewall;
      $reviewDetails->Name=$req->mag;
      $reviewDetails->Brand_Type=$req->abc;
      $reviewDetails->Reviews=$req->def;
      $reviewDetails->Rating=(int)$req->ghi;
      $reviewDetails->save();
      return redirect(url('/index',$req->mag));
        }


        
        public function index($Name){
            $data = reviewall::select('*')
            ->where('Name','=',$Name)
            ->get();
            $rating=DB::table('reviewalls')
            ->where(['Name'=>$Name])
            ->avg('Rating');
            $likes=DB::table('reviewalls')
            ->where(['Name'=>$Name])
            ->sum('Likes');
          companyalldetails  ::where('Name',$Name)->update(array('Average'=>$rating));
          companyalldetails  ::where('Name',$Name)->update(array('Likes'=>$likes));

          $mag=companyalldetails::all();
            return view('magzinePage',['mag'=>$mag]);
        }

    



        public function homePage(){
            $hom=companyalldetails::all();
               return view('homePage',['hom'=>$hom]);
        }


        public function reviewdata($Name){
            // $names=companyalldetails::find($Name);
            // $names = companyalldetails::select('*')
            // ->where('Name','=',$Name)
            // ->get();
            // $rate = reviewall::select('*')
            // ->where('Name','=',$Name)
            // ->get();
        $names=DB::table('companyalldetails')->where('Name',$Name)->get();
        $rate=DB::table('reviewalls')->where('Name',$Name)->get();


            // $names=DB::table('companyalldetails')
            // ->where(['Name'=>$Name]);
            // // $student=completeData::find($Id);
            // $rate=DB::table('reviewalls')
            // ->where(['Name'=>$Name]);
            // $rate=DB::table('reviewalls')
            // ->where(['Name'=>$Name]);

            // dd($names);
            // $names=$names[0];
            // $rate=$rate[0];
            return view('reviewUsers',compact('names','rate','hom'));
        }


        public function addrev(Request $req){

            $addRev=new reviewall;
            $addRev->Name=$req->mag;
            $addRev->Brand_Type=$req->abc;
            $addRev->Reviews=$req->def;
            $addRev->Rating=(int)$req->ghi;
            $addRev->Likes=(int)$req->in;
            $addRev->save();
            return redirect(url('/index',$req->mag));


        }

}
