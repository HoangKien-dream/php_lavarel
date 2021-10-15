@extends('admin.template.layout')
@section('title','Form')
@section('form-layout')
    <div class="row">
        <div class="col-md-12">
           <div>
               Event Name: {{$items->eventName}}
           </div>
            <div>
                Band Name: {{$items->bandNames}}
            </div>
            <div>
                Start Date: {{$items->startDate}}
            </div>
            <div>
                End Date: {{$items->endDate}}
            </div>
            <div>
                Portfolio: {{$items->portfolio}}
            </div>
            <div>
                Ticket Price: {{$items->ticketPrice}}
            </div>
        </div>
        <!-- col-md-6 -->
    </div>
@endsection
