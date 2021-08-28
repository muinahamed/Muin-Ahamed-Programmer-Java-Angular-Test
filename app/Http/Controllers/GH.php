<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\company;
use Illuminate\Support\Facades\DB;

class GH extends Controller
{

    public function error(){

        $muin=0;
         return view('First',compact('muin'));
        
       


    }
    public function first(request $request)
    {
       
   $muin=company::where('Email',$request->input('Email'))->get()->count();
   
   if($muin>0)
   {
       $muin="Email Already Taken";
       
       return view('First',compact('muin'));
   }
          
     session()->put('FirstName',$request->input('FirstName'));
     session()->put('LastName',$request->input('LastName'));
     session()->put('Email',$request->input('Email'));
     session()->put('Country',$request->input('Country'));
    
     $muin="0";
     $opol="0";
     return view('second',compact('muin','opol'));

    
       
     }

     public function finalprev()
     {
          $muin="0";
          $opol="0";
          return view('second',compact('muin','opol'));
         
     }


     public function second(request $request)
     {

        $opol=company::where('UserName',$request->input('UserName'))->get()->count();

      
     if(($request->input('Password')!=$request->input('CPassword'))||$opol>0)
     {

        if($request->input('Password')==$request->input('CPassword'))
        {
         $muin="0";
        
        }
        else{
            $muin="Password Not Match";
        }
        

           if($opol>0)
              {
                $opol="User Name Already Taken";
                
                 
              }else
              {
                  $opol="0";
              }
              

               return view('second',compact('opol','muin'));
    }  

     session()->put('UserName',$request->input('UserName'));
     session()->put('Password',$request->input('Password'));
    session()->put('CPassword',$request->input('CPassword'));     
    
     
     return view('final',['data'=>session('FirstName')],['data'=>session('LastName')],['data'=>session('Email')],['data'=>session('Country')],['data'=>session('Username')],['data'=>session('Password')]);

     }    

     public function registration()
     {


         $ab=new company;
         $ab->FirstName=session('FirstName');
         $ab->LastName=session('LastName');
         $ab->Email=session('Email');
         $ab->Country=session('Country');
         $ab->UserName=session('UserName');
         $ab->Password=session('Password');
         $ab->save();
         return redirect('/');
     }
}
