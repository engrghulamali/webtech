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
                <form method="post" name="frm" action="{{ url('edit-slider/'.$sliderDetails->id) }}" id="demo-form2" class="form-horizontal form-label-left" enctype="multipart/form-data" novalidate> {{ csrf_field() }}
                    @if($errors->any())
                        <div class="alert alert-danger">
                          @foreach($errors->all() as $error)
                            {{ $error }} <br>
                          @endforeach
                        </div>
                    @endif
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">title <span class="required">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" name="title" required="required" class="form-control col-md-7 col-xs-12" value="{{ $sliderDetails->title }}" />
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Description
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <textarea name="description" class="form-control col-md-7 col-xs-12">{{ $sliderDetails->description }}</textarea>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">button Text
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" name="button_text" class="form-control col-md-7 col-xs-12" value="{{ $sliderDetails->button_text }}" />
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">button Link
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" id="link" name="link" class="form-control col-md-7 col-xs-12" value="{{ $sliderDetails->link }}" />
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Picture <span class="required">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="file" id="image" name="image" class="form-control col-md-7 col-xs-12" value="" />
                        </div>
                    </div>
                    @if(!empty($sliderDetails->image))
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">&nbsp;</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <img width="100px" height="100px" src="{{ asset('/images/slider/'.$sliderDetails->image) }}">
                        </div>
                    </div>
                    @endif
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Baner <span class="required">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="file" id="baner" name="baner" class="form-control col-md-7 col-xs-12" value="" />
                        </div>
                    </div>
                    @if(!empty($sliderDetails->baner))
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">&nbsp;</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <img width="100px" height="100px" src="{{ asset('/images/slider/'.$sliderDetails->baner) }}">
                        </div>
                    </div>
                    @endif
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success">Update</button>
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