<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataHandleController extends Controller
{
 public function  handlePathVariable($id){
     return "tham so la $id";
 }
 public function  handleQueryString(Request  $request){
       $firstName = $request->get("firstName");
        $email = $request->get("email");
        $lastName =$request->get("lastName");
        return view('datahandle', [
            'firstName' => $firstName,
            'lastName' => $lastName,
            'email' => $email
        ]);
 }
 public function handleForm(){
     return view("form-data");
 }
 public function processForm(Request  $request){
     $data = $request ->all();
//     $eventName = $request->get("eventName");
//     $bandNames = $request->get("bandNames");
//     $startDate=$request->get("startDate");
//     $endDate=$request->get("endDate");
//     $portfolio=$request->get("portfolio");
//     $ticketPrice=$request->get("ticketPrice");
//     $status=$request->get("status");
//     return view('form-success', [
//         'eventName' => $eventName,
//         'bandNames' => $bandNames,
//         'startDate' => $startDate,
//         'endDate' => $endDate,
//         'portfolio' => $portfolio,
//         'ticketPrice' => $ticketPrice,
//         'status' => $status
//     ]);
     return view('form-success', $data);
 }
}
