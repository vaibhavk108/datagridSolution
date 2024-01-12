@extends("layout.master")
@section('main')
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

		<div class="container mt-2 p-4 rounded shadow-lg p-4 bg-white">
				
				<h1 class="bg-info text-center text-light p-4"> Add Head of the Family</h1>


				@if ($errors->any())
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
			<form action="/family/head/store" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="container m-4">
					<div class="row">
						<div class="col-lg-6">

					<div class="form-group">
						<label for="head_name">Name:</label>
						<input type="text" class="form-control" name="head_name" id="head_name" minlength="4" maxlength="25" required>
					</div>

					<div class="form-group">
					 	<label for="head_surname">Surname:</label>
					    <input type="text" class="form-control" name="head_surname" id="head_surname" minlength="4" maxlength="25" required>
					</div>

					<div class="form-group">
						<label for="head_birthdate">Birthdate:</label>
						<input type="date" class="form-control"  name="head_birthdate" id="head_birthdate" required>
					</div>

					<div class="form-group">
						<label for="head_mobile">Mobile No:</label>
						<input type="text" class="form-control" name="head_mobile" id="head_mobile" minlength="10" maxlength="10" pattern="[0-9]{10}" title="Please enter a 10-digit mobile number" required>
					</div>

					<div class="form-group">
						<label for="head_address">Address:</label>
						<textarea class="form-control mr-3" rows="3" name="head_address" id="head_address" minlength="4" maxlength="100" required></textarea>
					</div>

				</div>

			<div class="col-lg-6">
				<div class="form-group">
					<label for="head_state">Select state: </label>
					<select name="head_state" id="head_state" class="custom-select">
					     @foreach ($states as $state)
			                <option value="{{ $state->state }}" id="{{$state->id}}">
			                	{{ ucwords($state->state) }}
			                </option>
			            @endforeach
				  	</select>
				    </div>

					<div class="form-group">
						<label for="head_city">Select city: </label>
						<select name="head_city" id="head_city" class="custom-select">
					  	</select>
				    </div>

				    <div class="form-group">
						<label for="head_pincode">pincode:</label>
						<input type="text" class="form-control" name="head_pincode" id="head_pincode" minlength="6" maxlength="6" pattern="[0-9]{6}" title="Six-digit zip code" required>
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
					<label for="wedding_date">Wedding date:</label>
				    <input type="date" class="form-control" name="wedding_date" id="wedding_date">
				</div>


				<div class="form-group">
					<label for="hobbies">Hobbies:</label>
					<div class="d-flex">
						<input type="text" class="form-control mr-3" name="hobbies" id="hobbies" required disabled> 

						<input type="hidden" name="hidden_hobbies" id="hidden_hobbies" required>
						
						<button type="button" class="btn btn-primary" id="add-hobbie-btn" data-target="#add-hobbie" data-toggle="modal"><i class="fa-solid fa-plus"></i></button>
					</div>
				</div>

				 <div class="custom-file mb-3">
			      <input type="file" class="custom-file-input" id="head_photo" name="head_photo" required>
			      <label class="custom-file-label" for="head_photo">Choose file</label>
			    </div>
			</div>

			</div>
		</div>
		
		<button type="submit" class="btn btn-primary">Submit</button>
		<button type="reset" class="btn btn-danger">Clear</button>
		<a href="/" class="btn btn-info"><i class="fa-solid fa-list"></i> Show Head List</a>
		</form>


	</div>	
	
		<!-- Add Hobbies Modal -->
		<div class="modal" id="add-hobbie">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body p-5">
					<span class="text-info">Select your hobbie:</span>
						<form>
						 <div class="container mt-2">
						 	<div class="row">
						 		<div class="col-lg-4">
								 	<div class="form-check">
									  <label class="form-check-label" >
									    <input type="checkbox" class="form-check-input cbox" value="jogging">Jogging
									  </label>
									</div>
									<div class="form-check">
									  <label class="form-check-label">
									    <input type="checkbox" class="form-check-input cbox" value="yoga">Yoga
									  </label>
									</div>
									<div class="form-check">
									  <label class="form-check-label">
									    <input type="checkbox" class="form-check-input cbox" value="gym">Gym
									  </label>
									</div>
								</div>

								<div class="col-lg-4">
									<div class="form-check">
									  <label class="form-check-label">
									    <input type="checkbox" class="form-check-input cbox" value="hiking">Hiking
									  </label>
									</div>
									<div class="form-check">
									  <label class="form-check-label">
									    <input type="checkbox" class="form-check-input cbox" value="camping">Camping
									  </label>
									</div>
									<div class="form-check">
									  <label class="form-check-label">
									    <input type="checkbox" class="form-check-input cbox" value="biking">Biking
									  </label>
									</div>
								</div>


								<div class="col-lg-4">
									<div class="form-check">
									  <label class="form-check-label">
									    <input type="checkbox" class="form-check-input cbox" value="painting">Painting
									  </label>
									</div>
									<div class="form-check">
									  <label class="form-check-label">
									    <input type="checkbox" class="form-check-input cbox" value="photography">Photography
									  </label>
									</div>
									<div class="form-check">
									  <label class="form-check-label">
									    <input type="checkbox" class="form-check-input cbox" value="dancing">Dancing
									  </label>
									</div>
								</div>
							 </div>
						   </div>



						   <div class="form-group d-flex justify-content-center mt-4">
								<button type="button" class="btn btn-primary" id="hobbies-submit" data-dismiss="modal"> Done</button>
							</div> 
						 </form>
					</div>
				</div>
			</div>
		</div>
  
@endsection