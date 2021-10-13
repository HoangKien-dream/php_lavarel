@extends('admin.template.layout')
@section('title','Tables')
@section('table')
<div class="col-md-12">
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>

            <h2 class="panel-title">Bordered</h2>
        </header>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered mb-none">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Event Name</th>
                        <th>Band Names</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Portfolio</th>
                        <th>TicketPrice</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($list as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->eventName}}</td>
                        <td>{{$item->bandNames}}</td>
                        <td>{{$item->startDate}}</td>
                        <td>{{$item->endDate}}</td>
                        <td>{{$item->portfolio}}</td>
                        <td>{{$item->ticketPrice}}</td>
                        <td>{{$item->status}}</td>
                        <td>
                            <a href="#"><i class="fa fa-trash-o"></i></a>
                            <a style="padding-left: 5px" href="detail"><i class="fa fa-pencil"></i></a>
                            <a href="#"><i class="far fa-sticky-note"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
@endsection
