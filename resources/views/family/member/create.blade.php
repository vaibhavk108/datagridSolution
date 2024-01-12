@extends("layout.master")
@section('main')
	
		<div class="container border mt-4 p-4 rounded shadow-lg p-4 bg-white" style="width: 45%;">
				
			<h1 class="bg-info text-center text-light p-4"> Add Family Member</h1>

				@if($errors->any())
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif

				@if(session('success'))
				    <div class="alert alert-success alert-dismiss member_msg">
				        {{ session('success') }}
				    </div>
				@endif


			<form action="/family/member/store" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="container m-4">
					<div class="row">
						<div class="col-lg">

					<input type="hidden" name="family_id" id="family_id" value="{{$id}}">

					<div class="form-group">
						<label for="name">Member Name:</label>
						<input type="text" class="form-control" name="member_name" id="member_name" minlength="4" maxlength="25" required>
					</div>

					<div class="form-group">
						<label for="member_birthdate">Birthdate:</label>
						<input type="date" class="form-control"  name="member_birthdate" id="member_birthdate" required>
					</div>

					<div class="form-group">
						<label>Marital Status:</label><br>

						<div class="form-check-inline">
						  <label class="form-check-label"  for="unmarried">
						    <input type="radio" class="form-check-input status-radio-btn" name="marital_status" id="unmarried" value="unmarried" checked>Unmarried
						  </label>
						</div>

						<div class="form-check-inline">
					      <label class="form-check-label" for="married">
					        <input type="radio" class="form-check-input status-radio-btn" name="marital_status" id="married" value="married">Married
					      </label>
					    </div>
				    </div>

				    <div class="form-group wedDate">
						<label for="member_wedding_date">Wedding date:</label>
				    	<input type="date" class="form-control" name="member_wedding_date" id="member_wedding_date">
					</div>

					<div class="form-group">
						<label for="education">Education:</label>
						<input type="text" class="form-control" name="education" id="education" minlength="5" maxlength="40" required>
					</div>
						
					<div class="custom-file mb-3">
				      <input type="file" class="custom-file-input" id="member_photo" name="member_photo" required>
				      <label class="custom-file-label" for="member_photo">Choose file</label>
				    </div>

				</div>

			</div>
		</div>
			
			<div class="container d-flex justify-content-center">
				<button type="submit" class="btn btn-primary mr-1">Submit</button>
				<button type="reset" class="btn btn-danger mr-1">Clear</button>
				<a href="/family/member/list/{{$id}}" class="btn btn-info mr-1"><i class="fa-solid fa-list"></i> Show Members</a>
			</div>
		</form>
		</div>
			
	<script src="/assets/js/family.js"></script>

@endsection