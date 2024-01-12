//Wedding date box
			$(document).ready(function(){
			    $('.status-radio-btn').change(function(){
			        var status = $("input[name='marital_status']:checked").val();
			        
			        if(status == 'married') {
			            $('.wedDate').show();
			            $("#wedding_date, #member_wedding_date").prop("required", true);
			        } else {
			            $('.wedDate').hide();
			            $("#wedding_date, #member_wedding_date").prop("required", false);
			        }

				   });
				});   

				//To Find City 
			    $(document).ready(function(){
				    // Function to find and update city based on selected state
				    function findCity(stateId) {
				        $.ajax({
				            url: "/family/head/city/" + stateId,
				            type: "GET",
				            dataType: 'html',
				            success: function(data) {
				                $('#head_city').html(data);
				            },
				        });
				    }

				    // Initial page load
				    var stateId = $('#head_state').find("option:selected").attr('id');
				    findCity(stateId);

				    // Change event for state dropdown
				    $('#head_state').change(function(){
				        var stateId = $(this).find("option:selected").attr('id');
				        findCity(stateId);
				    });
				});


			
			//Selected checbox values    
			$(document).ready(function(){
			    // Handle the button click
			    $("#hobbies-submit").click(function(){
			        // Initialize an array to hold checkbox values
			        var val = [];

			        $(".cbox:checked").each(function(i){
			            // Get the value of the checked checkbox
			            val[i] = $(this).val();

			            // Join the values into a comma-separated string
        				var selectedHobbies = val.join(',');
			            
			            $('#hobbies, #hidden_hobbies').val(selectedHobbies);

			            // $('#headForm').submit();
			        });
			    });
			});


     //Check Age
	 $(document).ready(function () {

        $('#head_birthdate').change(function () {
            
            var birthdate = $(this).val();

            // Validate age
            if (!isValidAge(birthdate, 21)) {
               		
               		Swal.fire({
					  icon: "error",
					  title: "Oops...",
					  text: "You must be at least 21 years old!"
					});


                // alert("You must be at least 21 years old.");
                $('#head_birthdate').val('');
            }
        });


        // Function to validate age
        function isValidAge(birthdate, minimumAge) {
            var today = new Date();
            var birthdateDate = new Date(birthdate);
            var age = today.getFullYear() - birthdateDate.getFullYear();
            return age >= minimumAge;
        }
    });


	 // Restrict Aplha characters
	  $(document).ready(function () {
        // Attach keypress event listener to the input field
        $('#head_mobile, #head_pincode').keypress(function (e) {
            // Get the pressed key code
            var keyCode = e.which;

            // Check if the key is not a numeric value (0-9)
            if ((keyCode < 48 || keyCode > 57) && keyCode !== 8) {
                // Prevent the default action (typing the character)
                e.preventDefault();
            }
        });
    });

	 // Wait for 3 seconds (3000 milliseconds) and then hide the alert
    $(document).ready(function(){
         setTimeout(function(){
            $(".head_msg, .member_msg").fadeOut("slow", function(){
                $(this).remove();
            });
        }, 3000);
    });
