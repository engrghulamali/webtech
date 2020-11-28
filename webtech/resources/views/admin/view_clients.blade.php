@extends('layouts.adminlayout.admin_design')
@section('content')
            <!-- page content -->
<div role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>{{ $page_title }}</h3>
            </div>
            <div class="clearfix"></div>
            @if(Session::has('flash_message_error'))
                <div class="alert alert-error alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{!! session('flash_message_error') !!}</strong>
                </div>
            @endif   
            @if(Session::has('flash_message_success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{!! session('flash_message_success') !!}</strong>
                </div>
            @endif
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_content content">
                        <div class="row">
                            @foreach($clients as $row)
                            <div class="col-md-55">
                                <div class="thumbnail">
                                    <div class="image view view-first">
                                        @if(!empty($row->image))
                                        <img style="width: 100%; display: block;" src="{{ asset('/images/clients/'.$row->image) }}">
                                        @endif
                                        <div class="mask">
                                            <p>&nbsp;</p>
                                            <div class="tools tools-bottom">                                                            
                                                <a href="{{ url('delete-client/'.$row->id) }}" onClick="return confirm('Are you sure to delete this Slider Image ?')"><i class="fa fa-times"></i></a>
                                                <a href="{{ url('edit-client/'.$row->id) }}"><i class="fa fa-pencil"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <p>{{ $row->title }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
@endsection            