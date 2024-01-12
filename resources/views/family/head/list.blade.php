@extends('layout.master')
@section('main')
<section class="head-list">
<div class="container-fluid main m-4">
	
	<div class="container-fluid">
		<h2 class="display-2 text-center mb-4">Family Head's List</h2>
		  
		  <a href="/family/head/create" class="btn btn-primary mb-4">
		  	<i class="fa-solid fa-plus"></i> Add Head
		  </a>

		  <table class="table table-hover rounded shadow-lg p-4 bg-white">
		    <thead>
		      <tr>
		      	<th>Sr No</th>
		        <th>Firstname</th>
		        <th>Lastname</th>
		        <th>Birthdate</th>
		        <th>mobile no</th>
		        <th>Address</th>
		        <th>State</th>
		        <th>City</th>
		        <th>Pincode</th>
		        <th>marital status</th>
		        <th>wedding_date</th>
		        <th>hobbies</th>
		        <th>Photo</th>
		        <th>Members</th>
		      </tr>
		    </thead>
		    <tbody>
		    	<?php $count = 1; ?>
		    	@foreach($familyHead as $head)

		      <tr>
		        <td>{{ $count++ }}</td>
				<td>{{ $head->head_name }}</td>
				<td>{{ $head->head_surname }}</td>
				<td>{{ $head->head_birthdate }}</td>
				<td>{{ $head->head_mobile }}</td>
				<td>{{ $head->head_address }}</td>
				<td>{{ $head->head_state }}</td>
				<td>{{ $head->head_city }}</td>
				<td>{{ $head->head_pincode }}</td>
				<td>{{ $head->marital_status }}</td>


				@if(isset($head->wedding_date))
				<td>{{ $head->wedding_date }}</td>
				@else
				<td><span class="text-muted">N.A</span></td>
				@endif

				@if(isset($head->hobbies))
				<td>{{ $head->hobbies }}</td>
				@else
				<td><span class="text-muted">N.A</span></td>
				@endif
				<td>
					<img src="/assets/images/{{ $head->head_photo }}" class="rounded-circle" width="50" height="50">
				</td>

                    <td>


                 		@foreach($familyHeadsCounts as $familyMember)

						        <a href="/family/member/list/{{$head->id}}" class="btn btn-primary" data-toggle="tooltip" title="Click for member details !">
						            member

						           @if($familyMember->id == $head->id)
						            <span class="badge bg-light text-dark">{{$familyMember->family_members_count}}</span>						       
						        	@else
						        	 <span class="badge bg-light text-dark">0</span>
						        	@endif	

						        </a>
												   
						@endforeach


                    	</td>
		      		</tr>



		      		@endforeach

		    		


		    </tbody>
		  </table>
	{{ $familyHead->links() }}

	</div>
</div>
</section>
@endsection