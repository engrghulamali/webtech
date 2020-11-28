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
							<th>Title</th>
							<th>Slug</th>
							<th>Topic</th>
							<th>Author</th>
							<th>Actions</th>
							
							</th>
						</tr>
					</thead>
					<tbody>
			          	@foreach($blogs as $c)
			              <td><img src="/images/blogs/{{$c->image}}"></td>
			              <td>{{ $c->title }}</td>
			              <td>{{ $c->slug }}</td>
			              <td>{{ $c->topic }}</td>
			              <td>{{ $c->author }}</td>
			              <td>
			              	  <a href="" class="btn btn-info btn-sm">View</a>
                              <a href="{{url('edit-blog',$c->id)}}" class="btn btn-success btn-sm">Edit</a>
                              <a href="{{url('delete-blog',$c->id)}}" class="btn btn-danger btn-sm">Delete</a>
			              </td>
			            
			             
			          </tr>

			          	@endforeach
		          	</tbody>
				</table>
			</div>
			<p>{{ $blogs->links() }}</p>
		</div>
	</div> 
</div>
@endsection