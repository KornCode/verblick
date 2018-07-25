@extends('admin.layout.backend')
 
@section('title')
Create a new Component
@endsection

@section('content')

@include('admin.components.errors_box')

<div class="row">
	<form action="{{ route('admin.components.create.post') }}" method="POST" role="form">
		{{ csrf_field() }}
		<div class="col-sm-4">
			<div class="box box-warning">
				<div class="box-header with-border">
					<h3 class="box-title">Component Profile</h3>
				</div>
				<div class="box-body">
					<div class="form-group">
						<label>Name and Icon</label>
						<br>
						<select name="icon" class="selectpicker" data-live-search="true" data-width="100%">
							<option disabled selected value> -- select an option -- </option>
							<option data-icon="fa fa-facebook" value="facebook">Facebook</option>
							<option data-icon="fa fa-google-plus" value="google">Google</option>
							<option data-icon="fa fa-comment" value="line">Line</option>
							<option data-icon="fa fa-phone" value="call">Call</option>
							<option data-icon="fa fa-envelope" value="email">Email</option>
							<option data-icon="fa fa-commenting-o" value="messenger">Messenger</option>
						</select>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Icon Size</label>
								<br>
								<select name="size" class="selectpicker">
									<option data-subtext="px" value="32">32</option>
									<option data-subtext="px" value="35">35</option>
									<option data-subtext="px" value="38">38</option>
									<option selected data-subtext="px" value="40">40</option>
									<option data-subtext="px" value="42">42</option>
									<option data-subtext="px" value="44">44</option>
									<option data-subtext="px" value="46">46</option>
									<option data-subtext="px" value="48">48</option>
								</select>		  
							</div>

							<div class="form-group">
								<label>Icon Color</label>
								<div class="input-group bs-colorpicker colorpicker-element">
									<input name="iconColor" type="text" class="form-control">
									<div class="input-group-addon">
										<i></i>
									</div>
								</div>
								<!-- /.input group -->
							</div>
							<div class="form-group">
								<label>Tooltip Color</label>
								<div class="input-group bs-colorpicker colorpicker-element">
									<input name="tooltipColor" type="text" class="form-control">
									<div class="input-group-addon">
										<i></i>
									</div>
								</div>
								<!-- /.input group -->
							</div>
							<div class="form-group">
								<label>Background Color</label>
								<div class="input-group bs-colorpicker colorpicker-element">
									<input name="backgroundColor" type="text" class="form-control">
									<div class="input-group-addon">
										<i></i>
									</div>
								</div>
								<!-- /.input group -->
							</div>
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-block btn-warning">Create New Component</button>
				</div>
			</div>
		</div>
	</form>
</div>
	
@endsection