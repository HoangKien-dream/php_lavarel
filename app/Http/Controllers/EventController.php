<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function getForm(){
        return view('admin/template/form');
    }
   public function insertDB(Request $request){
        $event = new Event();
        $event->eventName = $request->get('eventName');
        $event->bandNames = $request->get('bandNames');
        $event->startDate = $request->get('startDate');
        $event->endDate = $request->get('endDate');
        $event->portfolio = $request->get('portfolio');
        $event->ticketPrice = $request->get('ticketPrice');
        $event->status = $request->get('status');
        $event->save();
        return view('admin/template/form');
   }
   public function getAll(){
        return view('admin/template/table',[
            'list' => Event::Where('status','!=',-1)->get()
        ]);
   }
   public function getDetail($eventName){
        return view('admin/template/detail',[
            'list'=>Event::Where('eventName','=',$eventName)->get()
        ]);
   }
}
