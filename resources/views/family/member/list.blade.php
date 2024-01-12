
@extends("layout.master")
@section('main')
<section class="member-list">
<div class="container-fluid m-4">
		<h2 class="display-2 text-center mb-4">Family Member Details</h2>

		   <div class="member-btn-group  d-flex justify-content-center mb-4">

			   <a href="/family/member/create/{{ $family_id; }}" class="btn btn-primary mr-2">
			  	<i class="fa-solid fa-plus"></i> Add Members
			  </a>

		  	  <a href="/" class="btn btn-danger"><i class="fa-solid fa-list"></i> Show Head List</a>
		   </div>


	@if(isset($familyMember))
        @foreach($familyMember as $familyMembers)
        <div class="container">
            <div class="card rounded shadow-lg p-4 mb-4 bg-white">
                <div class="card-body">
                    <h4 class="card-title ml-3">{{ strtoUpper($familyMembers->member_name) }}</h4>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <p class="card-text">Birthdate: <span class="text-secondary">{{ $familyMembers->member_birthdate }}</span></p>
                                <p class="card-text">Marital status: <span class="text-secondary">{{ $familyMembers->member_marital_status }}</span></p>

                                @if(isset($familyMembers->member_wedding_date))
                                <p class="card-text">Wedding date: <span class="text-secondary">{{ $familyMembers->member_wedding_date }}</span></p>
                                @else
                                <p class="card-text">Wedding date: <span class="text-secondary">N.A</span></p>
                                @endif

                                <p class="card-text">Education: <span class="text-secondary">{{ $familyMembers->education }}</span></p>
                            </div>

                            <div class="col-lg-4">
                                <!-- Assuming you have a path for the image -->
                                <img class="img-fluid rounded" src="/assets/images/member/{{ $familyMembers->member_photo }}" alt="Card image" height="450px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif

    @if($familyMember->isEmpty())
    <div class="container">
        <div class="card rounded shadow-lg p-4 mb-4 bg-white">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg">
                            <h1><i class="fa-solid fa-circle-info text-primary"></i> No Member details available here</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
<!-- Scroll To Top Button arrow -->

<button type="button" class="btn btn-primary" id="scrollToTopButton">&#9650;</button>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    // Wait for the document to be ready
    $(document).ready(function () {
        // Show or hide the scroll to top button based on the scroll position
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#scrollToTopButton').fadeIn();
            } else {
                $('#scrollToTopButton').fadeOut();
            }
        });

        // Scroll to the top when the button is clicked
        $('#scrollToTopButton').click(function () {
            $('html, body').animate({ scrollTop: 0 }, 'slow');
        });
    });
</script>


</div>
@endsection