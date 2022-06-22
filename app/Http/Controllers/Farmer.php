<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\eggs;
use App\Models\feeds;
use App\Models\flock;
use App\Models\poultry;
use App\Models\transactions;
use Illuminate\Support\Facades\Hash;
use Auth;

class Farmer extends Controller
{
    public function register(Request $request)
    {
        poultry::create(["fname"=>$request->fname,"lname"=>$request->lname,"phone"=>$request->phone,"email"=>$request->email,"password"=>bcrypt($request->password)]);

        return response()->json(['message'=>'registered']);
    }

    
    public function login(Request $req)
   {
     
     $credentials = $req->only('email', 'password');


        if (Auth::guard('poultry')->attempt($credentials)) 
         {
           $farmer =Auth::guard('poultry')->user();
           

            return response()->json(['data'=>$farmer], 200);

         }
         else
         {
            return response()->json(['data'=>'failed'],200);
         }
}
// add eggs
public function addEggs(Request $request)
{
    eggs::create(["batch_name"=>$request->batch_name,"quantity"=>$request->quantity]);

    return response()->json(['data'=>'saved']);
}
//add feeds
public function addFeeds(Request $request)
{
    feeds::create(["batch_name"=>$request->batch_name,"cost"=>$request->cost,"purpose"=>$request->purpose,"quantity"=>$request->quantity]);

    return response()->json(['data'=>'saved']);
}
//add flock
public function addFlock(Request $request)
{
    flock::create(["batch_name"=>$request->batch_name,"purpose"=>$request->purpose,"quantity"=>$request->quantity]);

    return response()->json(['data'=>'saved']);
}
//add transactions
public function addTransactions(Request $request)
{
    transactions::create(["purpose"=>$request->purpose,"amount"=>$request->amount,"profitloss"=>$request->profitloss]);

    return response()->json(['data'=>'saved']);
}




//get eggs
public function getEggs(Request $req)
    {

        // $farmer =Auth::guard('poultry')->user();
        // if ($farmer!=null) {
        //     $eggs = eggs::where("farmerid",$farmer->id)->get();

        //     return response()->json(['data'=>$eggs]);
        // }
        // else{
        //     return response()->json(['data'=>'Error']);
        // }
        $history = eggs::get();
        if ($history!=null) {
            return response()->json(['data'=>$history]);
    }
    else{
        return response()->json(['data'=>'No History Found']); 
    }


    }
//get feeds
public function getFeeds(Request $req)
    {

        $history = feeds::get();
        if ($history!=null) {
            return response()->json(['data'=>$history]);
    }
    else{
        return response()->json(['data'=>'No History Found']); 
    }

    }
//get flock
public function getFlock(Request $req)
    {

        $history = flock::get();
        if ($history!=null) {
            return response()->json(['data'=>$history]);
    }
    else{
        return response()->json(['data'=>'No History Found']); 
    }

    }
//get transactions
public function getTransactions(Request $req)
    {

        $history = transactions::get();
        if ($history!=null) {
            return response()->json(['data'=>$history]);
    }
    else{
        return response()->json(['data'=>'No History Found']); 
    }

    }
}
