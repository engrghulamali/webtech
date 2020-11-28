@extends('layouts.adminlayout.admin_design')
@section('content')
<!-- page content -->
<div role="main">
    <div class="x_content content">
        <div class="page-title">
            <div class="title_left">
                <h3>{{ $page_title }}</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="x_content">
            <div class="x_panel">
                <form method="post" name="frm" action="{{ url('add-team') }}" id="demo-form2" class="form-horizontal form-label-left" enctype="multipart/form-data" novalidate>
                 {{ csrf_field() }}
                    @if($errors->any())
                        <div class="alert alert-danger">
                          @foreach($errors->all() as $error)
                            {{ $error }} <br>
                          @endforeach
                        </div>
                    @endif
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" name="name" required="required" class="form-control col-md-7 col-xs-12" value="{{ old('name') }}" />
                        </div>
                    </div>
                      <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="email" name="email" required="required" class="form-control col-md-7 col-xs-12" value="{{ old('email') }}" />
                        </div>
                    </div>
                      <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Phone <span class="required">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" name="phone" required="required" class="form-control col-md-7 col-xs-12" value="{{ old('phone') }}" />
                        </div>
                    </div>
                      <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Skype Link <span class="required">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" name="skype" required="required" class="form-control col-md-7 col-xs-12" value="{{ old('skype') }}" />
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">LinkedIn Link
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" name="linkedin" class="form-control col-md-7 col-xs-12" value=" {{ old('linkedin') }}" />
                        </div>                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Position 
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" name="position" class="form-control col-md-7 col-xs-12" value=" {{ old('position')  }}" />
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Picture <span class="required">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="file" id="image" name="image" class="form-control col-md-7 col-xs-12" value="" />
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<!-- dropzone -->
<script src="{{ asset('js/admin_js/validator/validator.js') }}"></script>
<script>
    // initialize the validator function
    validator.message['date'] = 'not a real date';

    // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
    $('form')
        .on('blur', 'input[required], input.optional, select.required', validator.checkField)
        .on('change', 'select.required', validator.checkField)
        .on('keypress', 'input[required][pattern]', validator.keypress);

    $('.multi.required')
        .on('keyup blur', 'input', function () {
            validator.checkField.apply($(this).siblings().last()[0]);
        });

    // bind the validation to the form submit event
    //$('#send').click('submit');//.prop('disabled', true);

    $('form').submit(function (e) {
        e.preventDefault();
        var submit = true;
        // evaluate the form using generic validaing
        if (!validator.checkAll($(this))) {
            submit = false;
        }

        if (submit)
            this.submit();
        return false;
    });

    /* FOR DEMO ONLY */
    $('#vfields').change(function () {
        $('form').toggleClass('mode2');
    }).prop('checked', false);

    $('#alerts').change(function () {
        validator.defaults.alerts = (this.checked) ? false : true;
        if (this.checked)
            $('form .alert').remove();
    }).prop('checked', false);
</script>
@endsection