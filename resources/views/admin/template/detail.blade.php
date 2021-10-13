@extends('admin.template.layout')
@section('title','Form')
@section('form-layout')
    <div class="row">
        <div class="col-md-12">
           <div>
               Event Name: {{$eventName}}
           </div>
            <div>
                Band Name: {{$bandNames}}
            </div>
            <div>
                Start Date: {{$startDate}}
            </div>
            <div>
                End Date: {{$endDate}}
            </div>
            <div>
                Portfolio: {{$portfolio}}
            </div>
            <div>
                Ticket Price: {{$ticketPrice}}
            </div>
        </div>
        <!-- col-md-6 -->
    </div>
@endsection
