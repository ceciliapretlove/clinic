simPost(null, 'GET', '/patient/readPatientAppointment', readPatientResponse);

function readPatientResponse ( response )
{

// 	// Get Data for Update
// 	$("button.editPatient").on('click', function(e)
// 	{
// 		$('#createPatientForm')[0].reset();
// 		$('.modal-message').html('');
// 		$('.error-message').html(""); //reset messages
// 		$('.form-group').removeClass('has-error');
// 		var id = this.id;
// 		simPost({id:id}, 'POST', '/logistics/maintenance/getPatient', getPatientResponse);
// 		e.preventDefault();
// 	});

// 	// Disable
// 	$("button.deactivatePatient").on('click', function(e)
// 	{
// 	  var id = this.id;
// 	  simPost({id:id}, 'POST', '/deactivatePatient', updatePatientFormResponse);
// 	  e.preventDefault();
// 	});

// 	// Enable
// 	$("button.activatePatient").on('click', function(e)
// 	{
// 	  var id = this.id;
// 	  simPost({id:id}, 'POST', '/activatePatient', updatePatientFormResponse);
// 	  e.preventDefault();
// 	});  
// }

// function getPatientResponse(response)
// {
// 	$.each( response, function( key, value )
// 	{
// 		$("input#id").val(value.id);
// 		$("input#Patient_code").val(value.Patient_code);
// 		$("input#Patient_name").val(value.Patient_name);
// 		$("input#location").val(value.location);
// 	});
// }

$('#patientAppointment').on('submit', function(e)
{
  $('.modal-message').html('');
  $('.error-message').html(""); //reset messages
  $('.form-group').removeClass('has-error');
  var post_data = $('#patientAppointment').serialize();
  simPost(post_data, 'POST', '/patient/createPatientAppointmentForm', createPatientResponse); 
  e.preventDefault();
  return false;
});

function createPatientResponse ( response )
{
	$('.modal-message').html('');
	$.each( response, function( key, value )
	{
	$('#error-'+key).html(value);
	$('.border-'+key).addClass('has-error');
	});

	if(response=="")
	{
		$('#createPatientForm')[0].reset();
		$('#patientAppointment').modal('hide');
		window.setInterval(function(){
        location.reload();
        }, 2500);
        swal("Success!","You successfully created an patientAppointment!", "success");

	} else {
		pageNotification('modal-message', 'danger', 'fa-times', 'Validation Error!', 'Please complete the required fields below');
	}

	return false;
}

// $('#updatePatientForm').on('submit', function(e)
// {
//   $('.modal-message').html('');
//   $('.error-message').html(""); //reset messages
//   $('.form-group').removeClass('has-error');
//   var post_data = $('#updatePatientForm').serialize();
//   simPost(post_data, 'POST', '/logistics/maintenance/updatePatientForm', updatePatientFormResponse); 
//   // window.setInterval(function(){
//   // location.reload();
//   // }, 2500);
//   // swal("Success!","You successfully updated a Patient!", "success");
//   e.preventDefault();
//   return false;
// });

// function updatePatientFormResponse(response)
// {
// 	if (response == true) 
// 	{
// 		$('#updatePatientForm')[0].reset();
// 		$('#editPatientModal').modal('hide');
// 		swal("Success!", "You successfully updated a Patient!", "success");
// 		simPost(null, 'GET', '/logistics/maintenance/readPatient', readPatientResponse);
// 	} 
// 	else if (response == "") 
// 	{
// 		$('#updatePatientForm')[0].reset();
// 		$('#editPatientModal').modal('hide');
// 		swal("Success!", "You successfully updated a Patient!", "success");
// 		simPost(null, 'GET', '/logistics/maintenance/readPatient', readPatientResponse);
// 	} 
// 	else 
// 	{
// 		pageNotification('modal-message', 'danger', 'fa-times', 'Validation Error!', 'Action Failed!');      
// 	}
// 	return false;
// }