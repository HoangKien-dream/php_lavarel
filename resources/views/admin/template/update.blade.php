@extends('admin.template.layout')
@section('title','Form')
@section('form-layout')
    <div class="row">
        <div class="col-md-12">
            <div class="panel-body">
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                        </div>
                        <h2 class="panel-title">Form Elements</h2>
                        @if ($errors->any())
                            <div class="alert alert-danger" style="margin-top: 10px">
                                <h4 class="text-danger">List Errors</h4>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal form-bordered" method="post" action="/event/update">
                            @csrf
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="eventName">Event Name</label>
                                <div class="col-md-6">
                                    <input type="text" name="eventName" value="{{$items->eventName}}" class="form-control" id="eventName1">
                                    @error('eventName')
                                    <div class="text-danger" style="margin-top: 5px">* {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="bandNames">Band Names</label>
                                <div class="col-md-6">
                                    <input class="form-control" value="{{$items->bandNames}}" name="bandNames" id="bandNames" type="text">
                                    @error('bandName')
                                    <div class="text-danger" style="margin-top: 5px">* {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="startDate">Start Date</label>
                                <div class="col-md-6">
                                    <input type="date" name="startDate" value="{{$items->startDate}}" id="startDate"
                                           class="form-control">
                                    @error('startDate')
                                    <div class="text-danger" style="margin-top: 5px">* {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="endDate">End Date</label>
                                <div class="col-md-6">
                                    <input type="date" class="form-control" value="{{$items->endDate}}" name="endDate" id="endDate">
                                    @error('endDate')
                                    <div class="text-danger" style="margin-top: 5px">* {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="ticketPrice">Ticket Price</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" value="{{$items->ticketPrice}}" name="ticketPrice"
                                           id="ticketPrice">
                                    @error('ticketPrice')
                                    <div class="text-danger" style="margin-top: 5px">* {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="portfolio">Portfolio</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" value="{{$items->portfolio}}" name="portfolio"
                                           id="portfolio">
                                    @error('portfolio')
                                    <div class="text-danger" style="margin-top: 5px">* {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="status">Status</label>
                                <div class="col-md-6">
                                    <input class="form-control" name="status" id="status" value="{{$items->status}}" type="number">
                                    @error('status')
                                    <div class="text-danger" style="margin-top: 5px">* {{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <input  type="hidden" name="id" value="{{$items->id}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3">
                                    <button class="btn btn-primary" >Button</button>
                                    <button type="reset" class="btn btn-default">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
        <!-- col-md-6 -->
    </div>
@endsection

