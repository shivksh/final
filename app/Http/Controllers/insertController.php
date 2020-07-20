<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\companyalldetails;
use Illuminate\Support\Facades\DB;
use App\reviewall;
use App\User;


// -----------------------------------------------
class insertController extends Controller           
{
    public function insertData(Request $req){                      //Insert method for admin new brand registration

        $this->validate($req,[
            'email'=>'required',
            'name'=>'required',
            'pass'=>'required',
            'image'=>'required',
            'ceo'=>'required',
            'phone'=>'required',
            'details'=>'required',
        ]);

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



        // ----------------------------------------------------------




    public function magzineFunc(){            //retrieving data from companyalldetails table
        $mag= companyalldetails::all();
        return view('magzinePage',['mag'=>$mag]);
    }


    // ----------------------------------------------



    public function dashFunc(){                   //retrieving data from comapnyalldetails table for brands data manage by admin. 
        $mag= companyalldetails::all();
        return view('admin.adminTable',['mag'=>$mag]);
    }

    //-------------------------------------------------



    public function userManage(){                   //user data manage by admin dashboard 
        $mag= DB::select('select * from users');
        return view('admin.adminUserManage',['mag'=>$mag]);
    }

// -------------------------------------------------------------


    public function myprofile(){                      //saving admin profile to dashboard
        $mag= DB::select('select * from users');
        return view('admin.myprofile',['mag'=>$mag]);
    }


// --------------------------------------------------------------


    public function edit($Id){                            
        $student=companyalldetails::find($Id);
    return view('admin.editButton',compact('student'));
    }

// ---------------------------------------------------------------

    public function userEdit($id){
        $student=User::find($id);
            return view('admin.userManageForm',compact('student'));
    }

// -----------------------------------------------

    public function userDelete($id){
        DB::delete('delete from users where id=?',[$id]);
        return redirect('/userManage')->with ('success', 'Data Deleted Succcessfully');
    }

// --------------------------------------------------------


    public function update(Request $req,$id){
        
        $this->validate($req,[
            'email'=>'required',
            'name'=>'required',
            'phone'=>'required',
        ]);
         $first=$req->input('name');
         $second=$req->input('email');
         $last=$req->input('phone');

        DB::update('update users set name=?,email=?,phone=? where Id=? ',[$first,$second,$last,$id]);
          return redirect('/userManage')->with('success', 'Data Edited SuccessFully');
    }

// ------------------------------------------------------------

            
            public function upd(Request $req, $Id){
            $this->validate($req,[
                'email'=>'required',
            'name'=>'required',
            'pass'=>'required',
            'image'=>'required',
            'ceo'=>'required',
            'phone'=>'required',
            'details'=>'required',
            ]);
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
             return redirect('/adminTable')->with('success','Data Edited SuccessFully!!');
            }
            

    
        }


        // ----------------------------------------



    
    
        public function delete($Id){               //delete data from companyalldetails table
            DB::delete('delete from companyalldetails where Id=?',[$Id]);
            return redirect('/adminTable')->with ('success', 'Data Deleted Succcessfully');
        }

// --------------------------------------------------------------------



        public function rateButton(Request $req){         //adding data to reviewall table
            $reviewDetails=new reviewall;
      $reviewDetails->Name=$req->mag;
      $reviewDetails->Brand_Type=$req->abc;
      $reviewDetails->Reviews=$req->def;
      $reviewDetails->Rating=(int)$req->ghi;
      $reviewDetails->save();
      return redirect(url('/index',$req->mag));
        }

// ===========================================================


        
        public function index($Name){                //data stored from reviewall details table to companyalldetails applying various aggregate functions 
            $data = reviewall::select('*')
            ->where('Name','=',$Name)
            ->get();
            $rating=DB::table('reviewalls')
            ->where(['Name'=>$Name])
            ->avg('Rating');
            $likes=DB::table('reviewalls')
            ->where(['Name'=>$Name])
            ->sum('Likes');
            $comm=DB::table('reviewalls')
            ->where(['Name'=>$Name])
            ->count('Reviews');

          companyalldetails  ::where('Name',$Name)->update(array('Average'=>$rating));
          companyalldetails  ::where('Name',$Name)->update(array('Likes'=>$likes));
          companyalldetails  ::where('Name',$Name)->update(array('Total_reviews'=>$comm));


          $mag=companyalldetails::all();
            return view('magzinePage',['mag'=>$mag]);
        }

    // ===============================================================




        public function homePage(){               
            $hom=companyalldetails::all();
               return view('homePage',['hom'=>$hom]);
        }


// ===================================================================

        public function reviewdata($Name){
        $names=DB::table('companyalldetails')->where('Name',$Name)->get();
        $rate=DB::table('reviewalls')->where('Name',$Name)->get();
            return view('reviewUsers',compact('names','rate','hom'));
        }


// ========================================================================


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


// ==================================================================



        public function adminCheckReview($Name){           //reviews of each brand check by admin
            $names=DB::table('companyalldetails')->where('Name',$Name)->get();
            $rate=DB::table('reviewalls')->where('Name',$Name)->get();
                return view('admin.adminCheckReview',compact('names','rate','hom'));
            }


// ==========================================================================



public function searchbar(){         //without login search for user
    $search=$_GET['query'];
    $result=companyalldetails::where('Name','LIKE','%'.$search.'%')->get();
    return view('searchHome',compact('result'));
}


// =============================================================================


public function magSearch(){        //magzinePage search for user

    $search=$_GET['query'];
    $result=companyalldetails::where('Name','LIKE','%'.$search.'%')->get();
    return view('magzineSearch',compact('result'));
}


// ==========================================================================


public function dashSearch(){         //admin search bar for brands manage
    $search=$_GET['query'];
    $result=companyalldetails::where('Name','LIKE','%'.$search.'%')->get();
    return view('admin.dashboardSearch',compact('result'));
}



}
