@extends('admin.template.layout')
@section('title','Form')
@section('form-layout')
<div class="row">
    <div class="col-md-12">
        <form id="form" action="forms-validation.html" class="form-horizontal">
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
                        <label class="col-sm-3 control-label">Full Name <span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="fullname" class="form-control" placeholder="eg.: John Doe" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Email <span class="required">*</span></label>
                        <div class="col-sm-9">
                            <div class="input-group">
													<span class="input-group-addon">
														<i class="fa fa-envelope"></i>
													</span>
                                <input type="email" name="email" class="form-control" placeholder="eg.: email@email.com" required/>
                            </div>
                        </div>
                        <div class="col-sm-9">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">GitHub</label>
                        <div class="col-sm-9">
                            <input type="url" name="github" class="form-control" placeholder="eg.: https://github.com/johndoe" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Skills <span class="required">*</span></label>
                        <div class="col-sm-9">
                            <textarea name="skills" rows="5" class="form-control" placeholder="Describe your skills" required></textarea>
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

