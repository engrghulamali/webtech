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
							<th>Name</th>
							<th>Email</th>
							
							</th>
						</tr>
					</thead>
					<tbody>
			          	@foreach($news as $c)
			              <td>{{ $c->phone }}</td>
			              <td>{{ $c->email }}</td>
			             
			          </tr>

			          	@endforeach
		          	</tbody>
				</table>
			</div>
			<p>{{ $news->links() }}</p>
		</div>
	</div> 
</div>
@endsection