$(document).ready(function(){
	$("#submit").click(function(){
		var fullname = $("#fullName").val();
		var usrname = $("#userName").val();
		var email = $("#emailAddress").val();
		var contact = $("#contact").val();
		var userstat = $("#userlevel").val();
		var address = $("#address").val();
		var password = $("#pass1").val();
        // alert("ok");
        // Returns successful data submission message when the entered information is stored in database.
        var dataString = 'name1='+ fullname + '&usrname1='+ usrname + '&email1='+ email + '&contact1='+ contact + '&userlevel1='+ userstat + '&address1='+ address + '&password1='+ password;
	    // AJAX Code To Submit Form.
		$.ajax({
			type: "POST",
			url: "savedata.php",
			data: dataString,
			cache: false,
			success: function(result){
			alert(result);
			}
		});
	});
	return false;
});