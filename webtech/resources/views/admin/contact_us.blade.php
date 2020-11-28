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
							<th>First Name</th>
							<th>Last Name</th>
							<th>Phine</th>
							<th>Email</th>
							<th>Subject</th>
							<th>Message</th>
							
							</th>
						</tr>
					</thead>
					<tbody>
			          	@foreach($contacts as $c)
			            <tr class="odd pointer">
			              <td>{{ $c->first_name }}</td>
			              <td>{{ $c->last_name }}</td>
			              <td>{{ $c->phone }}</td>
			              <td>{{ $c->email }}</td>
			              <td>{{ $c->subject }}</td>
			              <td>{{ $c->message }}</td>
			             
			          </tr>

			          	@endforeach
		          	</tbody>
				</table>
			</div>
			<p>{{ $contacts->links() }}</p>
		</div>
	</div> 
</div>
@endsection