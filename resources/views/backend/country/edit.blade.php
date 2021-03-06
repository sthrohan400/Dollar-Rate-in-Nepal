@extends('backend.layouts.master')
@section('title')
Countries
@endsection
@section('site_map')
Dashboard / forex / country
@endsection

@section('content')

<div class="col-md-3">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">Edit Country</h3>
			<a href="{{url('admin/forex/country/')}}" data-toggle="tooltip" title="Create!" class="btn btn-primary btn-xs pull-right"><i class="glyphicon glyphicon-plus"></i></a> 
		</div>
		<div class="box-body">
			<form role="form" action="{{url('admin/forex/country/update/'.$selected_country['id'])}}" method="post" enctype="multipart/form-data" class="">
				{!! csrf_field() !!}
				<div class="form-group">

					<label for="name" >Country Name:</label>


					<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{$selected_country['name']}}" required>


				</div>
				<div class="form-group">

					<label for="flag" >Country Flag:</label>


					<input type="file" id="flag" name="flag" class="form-control"
					onchange="document.getElementById('profile').src = window.URL.createObjectURL(this.files[0])">

				</div>
				<div class="form-group">

					<label for="amount" >Conversion Amount:</label>


					<input type="text" class="form-control" id="amount" placeholder="Enter Conversion Amount" name="amount" value="{{$selected_country['amount']}}" required>


				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary btn-flat btn-sm">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="col-md-9">

	<div class="col-md-12 col-xs-12">

		<div class="box box-primary">
			<div class="box-header">




				<h3 class="box-title"><i class="fa fa-bars"></i> Countries</h3>


			</div>
			<!-- /.box-header -->
			<div class="box-body">

				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>SN</th>
							<th>Name</th>
							<th>Flag</th>

							<th>Amount</th>
							<th>Action</th>

						</tr>
					</thead>
					<tbody>
						<?php $i=1; ?>
						@foreach($countries as $country)
							<tr>

								<td>{{$i}}</td>
								<td>{{$country['name']}}</td>
								<td> <img src="{{'/uploads/flag/'.$country['flag']}}" alt="{{$country['flag']}}"> </td>
								<td>{{$country['amount']}}</td>
								<td>
							<div class="btn-group btn-group-xs">
									
									<a href="{{url('admin/forex/country/delete/'.$country['id'])}}" class="btn btn-danger" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this Notice Permanently?')">Delete</a>


								</div>
		
								</td>



							</tr>
							<?php $i ++;?>
							@endforeach


					</tbody>
					<tfoot>
						<tr>
							<th>SN</th>
							<th>Name</th>
							<th>Flag</th>

							<th>Amount</th>
							<th>Action</th>

						</tr>
					</tfoot>
				</table>



			</div>
			<div class="box-footer"> 

			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>

</div>









@endsection