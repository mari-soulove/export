	$("#fac").on("change", function() {
		$.ajax({
			url: "ajax.php",
			method: "post",
			data: {facultet: $(this).val()},
			success: function (data) {
				$("#course").html(data);
				
				console.log(data);
			}
			
		})


	}); 

	$("#course").on("change", function() {
		$.ajax({
			url: "ajax.php",
			method: "post",
			data: {course: $(this).val()},
			success: function (data) {
				
				
				$("#groups").html(data);
				console.log(data);
			}
		})

	}) 

