@extends('layouts.adminlayout.admin_design')
@section('content')
<div class="">
    <div class="row top_tiles">
        <div class="row">
            <div class="col-md-12">
                <h3> {{$page_title}}</h3>
                <table id="example" class="table table-striped responsive-utilities jambo_table">
                  <thead>
                    <tr class="headings">
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Position</th>
                        <th>Actiom</th>
                        
                        </th>
                    </tr>
                  </thead>
                    <tbody>
                      @foreach($teams as $c)
                      <tr class="odd pointer">
                        <td><img src="{{asset('/images/teams/'.$c->image) }}" style="width: 20px;height: 20px;"></td>
                        <td>{{ $c->name }}</td>
                         <td>{{ $c->email }}</td>
                        <td>{{ $c->phone }}</td>
                        <td>{{ $c->position }}</td>                        
                        <td>
                            <a href="{{url('edit-team',$c->id)}}" class="btn btn-success btn-sm">Edit</a>
                            <a href="{{url('delete-team',$c->id)}}" class="btn btn-danger btn-sm">Delete</a>
                        </td>                       
                      </tr>

                      @endforeach
                    </tbody>
                </table>
            </div>
          
        </div>
    </div> 
</div>
@endsection