<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function getForm(){
        return view('admin/template/form');
    }
   public function insertDB(StoreEventRequest $request){
        $event = new Event();
        $event->eventName = $request->get('eventName');
        $event->bandNames = $request->get('bandNames');
        $event->startDate = $request->get('startDate');
        $event->endDate = $request->get('endDate');
        $event->portfolio = $request->get('portfolio');
        $event->ticketPrice = $request->get('ticketPrice');
        $event->status = $request->get('status');
        $event->deleteAt=Carbon::now();
        $event->save();
        return view('admin/template/form');
   }
   public function getAll(){
        return view('admin/template/table',[
            'list' => Event::Where('status','!=',-1)->get()
        ]);
   }
   public function getDetail($id){
        return view('admin/template/detail',[
            'items'=>Event::find($id)
        ]);
   }
    public function updateDetails($id){
        return  view('admin/template/update',[
            'items'=>Event::find($id)
        ]);
    }

    public function pushDatabase(Request $request){
//        $event = Event::find($request->get('id'));
//        $event->eventName = $request->get('eventName');
//        $event->bandNames = $request->get('bandNames');
//        $event->startDate = $request->get('startDate');
//        $event->endDate = $request->get('endDate');
//        $event->portfolio = $request->get('portfolio');
//        $event->ticketPrice = $request->get('ticketPrice');
//        $event->status = $request->get('status');
//        $event->updated_at = Carbon::now();
//        $event->save();
          $request-> request -> remove('_token');
          $request-> request -> add([
             'updated_at' => Carbon::now()
          ]);
          Event::find($request->get('id'))->update($request->all());
        return view('admin/template/form');
    }
}
