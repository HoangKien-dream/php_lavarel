@extends('admin.template.layout')
@section('title','Form')
@section('form-layout')
<div class="row">
    <div class="col-md-12">
        <form id="form" action=" " method="post" class="form-horizontal">
            @csrf
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Basic Form Validation</h2>
                    <p class="panel-subtitle">
                        Basic validation will display a label with the error after the form control.
                    </p>
                </header>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Event Name<span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="eventName" class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Band Names<span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="bandNames" class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Start Date<span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input type="date" name="startDate" class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">End Date<span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input type="date" name="endDate" class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Portfolio<span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="portfolio" class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Ticket Price<span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="ticketPrice" class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Status<span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input type="number" name="status" class="form-control" required/>
                        </div>
                    </div>
                </div>
                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-sm-9 col-sm-offset-3">
                            <button class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </div>
                    </div>
                </footer>
            </section>
        </form>
    </div>
    <!-- col-md-6 -->
</div>
@endsection

