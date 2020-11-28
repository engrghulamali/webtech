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
                <form method="post" action="{{ url('preferences') }}" id="demo-form2" class="form-horizontal form-label-left" novalidate enctype="multipart/form-data">{{ csrf_field() }}
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Logo</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="file" name="logo" class="form-control col-md-7 col-xs-12" value="" />
                        </div>
                    </div>
                    @if(isset($data['logo']) && $data['logo'] !="")
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">&nbsp;</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <img width="100px" height="100px" src="{{ asset('/images/'.$data['logo']) }}">
                        </div>
                    </div>
                    @endif
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Facebook link <span class="required">*</span> </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" id="facebook_link" name="facebook_link" required="required" class="form-control col-md-7 col-xs-12" value="{{ $data['facebook_link'] }}" />
                        </div>
                    </div>
                     <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Instagram link <span class="required">*</span> </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" id="instagram_link" name="instagram_link" required="required" class="form-control col-md-7 col-xs-12" value="{{ $data['instagram_link'] }}" />
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Twitter link <span class="required">*</span> </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" id="twitter_link" name="twitter_link" required="required" class="form-control col-md-7 col-xs-12" value="{{ $data['twitter_link'] }}" />
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">LinkedIn link <span class="required">*</span> </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" id="linkedin_link" name="linkedin_link" required="required" class="form-control col-md-7 col-xs-12" value="{{ $data['linkedin_link'] }}" />
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Pinterest   link <span class="required">*</span> </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" id="pinterest_link" name="pinterest_link" required="required" class="form-control col-md-7 col-xs-12" value="{{ $data['pinterest_link'] }}" />
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Google+   link <span class="required">*</span> </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" id="google_plus_link" name="google_plus_link" required="required" class="form-control col-md-7 col-xs-12" value="{{ $data['google_plus_link'] }}" />
                        </div>
                    </div>
                    <!-- What we do -->
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">App Development <span class="required">*</span> </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" id="app_dev" name="app_dev" required="required" class="form-control col-md-7 col-xs-12" value="{{ $data['app_dev'] }}" />
                        </div>
                    </div><div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Web Development <span class="required">*</span> </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" id="web_dev" name="web_dev" required="required" class="form-control col-md-7 col-xs-12" value="{{ $data['web_dev'] }}" />
                        </div>
                    </div><div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Design <span class="required">*</span> </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" id="design" name="design" required="required" class="form-control col-md-7 col-xs-12" value="{{ $data['design'] }}" />
                        </div>
                    </div><div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Marketing <span class="required">*</span> </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" id="marketing" name="marketing" required="required" class="form-control col-md-7 col-xs-12" value="{{ $data['marketing'] }}" />
                        </div>
                    </div><div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Software development <span class="required">*</span> </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" id="soft_dev" name="soft_dev" required="required" class="form-control col-md-7 col-xs-12" value="{{ $data['soft_dev'] }}" />
                        </div>
                    </div><div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">SEO <span class="required">*</span> </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" id="seo" name="seo" required="required" class="form-control col-md-7 col-xs-12" value="{{ $data['seo'] }}" />

                           
                        </div>
                    </div>
                    <!-- /what we do -->
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Heading1<span class="required">*</span> </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" id="heading1" name="heading1" required="required" class="form-control col-md-7 col-xs-12" value="{{ $data['heading1'] }}" />
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Heading1 Description<span class="required">*</span> </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" id="heading1_description" name="heading1_description" required="required" class="form-control col-md-7 col-xs-12" value="{{ $data['heading1_description'] }}" />
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Link1<span class="required">*</span> </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" id="link1" name="link1" required="required" class="form-control col-md-7 col-xs-12" value="{{ $data['link1'] }}" />
                        </div>
                    </div>
                    
                    <!-- About Us Data -->
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">About-Us Picture</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="file" name="aboutus_picture" class="form-control col-md-7 col-xs-12" value="" />
                        </div>
                    </div>
                    @if(isset($data['aboutus_picture']) && $data['aboutus_picture'] !="")
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">&nbsp;</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <img width="100px" height="100px" src="{{ asset('/images/'.$data['aboutus_picture']) }}">
                        </div>
                    </div>
                    @endif
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">About-Us Title<span class="required">*</span> </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" id="aboutus_title" name="aboutus_title" required="required" class="form-control col-md-7 col-xs-12" value="{{ $data['aboutus_title'] }}" />
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">About-Us Description1<span class="required">*</span> </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" id="aboutus_description1" name="aboutus_description1" required="required" class="form-control col-md-7 col-xs-12" value="{{ $data['aboutus_description1'] }}">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">About-Us Description2<span class="required">*</span> </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" id="aboutus_description2" name="aboutus_description2" required="required" class="form-control col-md-7 col-xs-12" value="{{ $data['aboutus_description2'] }}" />
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">About-Us Button Text<span class="required">*</span> </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" id="aboutus_button_text" name="aboutus_button_text" required="required" class="form-control col-md-7 col-xs-12" value="{{ $data['aboutus_button_text'] }}">
                        </div>
                    </div>


                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Contactus Title<span class="required">*</span> </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" id="contactus_meta_title" name="contactus_meta_title" required="required" class="form-control col-md-7 col-xs-12" value="{{ $data['contactus_meta_title'] }}" />
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Contactus meta Description<span class="required">*</span> </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" id="contactus_meta_description" name="contactus_meta_description" required="required" class="form-control col-md-7 col-xs-12" value="{{ $data['contactus_meta_description'] }}">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="adress">Adress<span class="required">*</span> </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" id="adress" name="adress" required="required" class="form-control col-md-7 col-xs-12" value="{{ $data['adress'] }}" />
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="telephone">Telephone<span class="required">*</span> </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" id="telephone" name="telephone" required="required" class="form-control col-md-7 col-xs-12" value="{{ $data['telephone'] }}" />
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="telephone">Email<span class="required">*</span> </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12" value="{{ $data['email'] }}" />
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="telephone">Openinig Time<span class="required">*</span> </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" id="opening_time" name="opening_time" required="required" class="form-control col-md-7 col-xs-12" value="{{ $data['opening_time'] }}" />
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Footer Copyright <span class="required">*</span> </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" id="footer_copyright" name="footer_copyright" required="required" class="form-control col-md-7 col-xs-12 textareashow" value="{{ $data['footer_copyright'] }}" />
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">VAT%<span class="required">*</span> </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="number" min="0" max="100" id="vat" name="vat" required="required" class="form-control col-md-7 col-xs-12" value="{{ $data['vat'] }}" />
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Products<span class="required">*</span> </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <select id="products" name="products" required="required" class="form-control"> 
                                <option value="disable">Disable</option>
                                <option value="enable">Enable</option>
                            </select>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Training<span class="required">*</span> </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <select id="training" name="training" required="required" class="form-control"> 
                                <option value="disable">Disable</option>
                                <option value="enable">Enable</option>
                            </select>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Media<span class="required">*</span> </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <select id="media" name="media" required="required" class="form-control"> 
                                <option value="disable">Disable</option>
                                <option value="enable">Enable</option>
                            </select>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Clients<span class="required">*</span> </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <select id="clients" name="clients" required="required" class="form-control"> 
                                <option value="disable">Disable</option>
                                <option value="enable">Enable</option>
                            </select>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">PlanTool Popup Text<span class="required">*</span> </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <textarea name="plantool_popup_text">{!! $data['plantool_popup_text'] !!}</textarea>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Main Header(Video/Slider)<span class="required">*</span> </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <select id="header" name="header" required="required" class="form-control"> 
                                <option value="video">Video</option>
                                <option value="slider">Slider</option>
                            </select>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Video Link</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" name="video_link" class="form-control col-md-7 col-xs-12" value="{{ $data['video_link'] }}" />
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Bank Name</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" name="bank_name" class="form-control col-md-7 col-xs-12" value="{{ $data['bank_name'] }}" />
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">IBAN</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" name="iban" class="form-control col-md-7 col-xs-12" value="{{ $data['iban'] }}" />
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="clear"></div>
<!-- /page content --> 
    

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
<script type="text/javascript" src="{{ asset('js/admin_js/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">

$(document).ready(function() {
    tinymce.init({
        selector: "textarea",
        theme: "modern",
        paste_data_images: true,
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        toolbar2: "print preview media | forecolor backcolor emoticons",
        image_advtab: true,
        file_picker_callback: function(callback, value, meta) {
            if (meta.filetype == 'image') {
                $('#upload').trigger('click');
                $('#upload').on('change', function() {
                    var file = this.files[0];
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        callback(e.target.result, {
                            alt: ''
                        });
                    };
                    reader.readAsDataURL(file);
                });
            }
        },
        templates: [{title: 'Test template 1',content: 'Test 1'}, {title: 'Test template 2',content: 'Test 2'}]
    });
});

$(document).ready(function() {
    $("#products").val("{{ $data['products'] }}");
    $("#media").val("{{ $data['media'] }}");
    $("#clients").val("{{ $data['clients'] }}");
    $("#training").val("{{ $data['training'] }}");
    $("#header").val("{{ $data['header'] }}");
});
</script>
@endsection