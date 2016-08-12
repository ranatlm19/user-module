$(document).ready(function() {
	// Opens pop-up to add new user
	$('.add-new-user-btn').click(function(event){
		var new_user_name = $("#new-user-name").val();
		if(validate_name(new_user_name) && new_user_name.length>=3) {
			var new_user_data = {
				'user_name': new_user_name
			};
			$("#add-new-user-modal-message").show();
			$.ajax({
				url: '/addNewUser/',
				type: 'POST',
				data: new_user_data,
				success: function(recdata) {
					if(recdata['added']) {
						var new_user_html_element = create_new_user_element(new_user_name, recdata['added']);
						$("#add-new-user-modal-message").hide();
						bootbox.alert(new_user_name + " added successfully!");
						$("#new-user-name").val("");
						$("#addNewUserModal").modal("hide");
						$("#list-users").append(new_user_html_element);
					}
					else {
						bootbox.alert("Unable to add " + new_user_name);
					}
				},
				error: function(err) {
					$("#add-new-user-modal-message").hide();
					bootbox.alert("Error : " + err);
				}
			});
		} else {
			bootbox.alert("User name should contain only alphabets and spaces with minimum length of 3");
		}
	}); 
	$("#reporting-user").keyup(function(e) {
		if((e.which >= 65 && e.which <= 90) || e.which == 8)  {
			var search_text = $("#reporting-user").val();
			var user_id = $("#current_user_id").val();
			if(search_text.length>=2 && validate_name(search_text) && validate_user_id(user_id)) {
				$.ajax({
					url: '/searchNewReportingUsers/',
					type: 'POST',
					data: {
						'user_id': user_id,
						'search_text': search_text
					},
					success: function(data) {
						if(data['success']) {
							$("#rep-user-list").html("");
							var users = data['results'];
							for(var i=0; i<users.length; i++) {
								var reporting_user_list_element = create_reporting_user_list_element(users[i].user_id, users[i].user_name);
								$("#rep-user-list").append(reporting_user_list_element);
							}
						}
					},
					error: function(err) {
						bootbox.alert("Error : " + err);
					}
				});
			}
		}
	});
	$("#reporting-to-user").keyup(function(e) {
		if((e.which >= 65 && e.which <= 90) || e.which == 8)  {
			var search_text = $("#reporting-to-user").val();
			var user_id = $("#current_user_id").val();
			if(search_text.length>=2 && validate_name(search_text) && validate_user_id(user_id)) {
				$.ajax({
					url: '/searchNewUsersToReport/',
					type: 'POST',
					data: {
						'user_id': user_id,
						'search_text': search_text
					},
					success: function(data) {
						if(data['success']) {
							$("#user-rep-list").html("");
							var users = data['results'];
							for(var i=0; i<users.length; i++) {
								var reporting_user_list_element = create_reporting_user_list_element(users[i].user_id, users[i].user_name);
								$("#user-rep-list").append(reporting_user_list_element);
							}
						}
					},
					error: function(err) {
						bootbox.alert("Error : " + err);
					}
				});
			}
		}
	});
	$("#add-rep-user").click(function(){
		var search_text = $("#reporting-user").val();
		var report_to_id = $("#current_user_id").val();
		var user_id = -1;
		var flag = false;
		if(search_text.length>=2 && validate_name(search_text) && validate_user_id(report_to_id)) {
			var options = $("#rep-user-list").children();
			for(var i=0; i<options.length; i++) {
				var opt_val = options[i].value;
				if(opt_val == search_text) {
					flag = true;
					user_id = options[i].id;
				}
			}
			if(flag && user_id!=-1) {
				$.ajax({
					url: '/addNewRelationship/',
					type: 'POST',
					data: {
						'user_id': user_id,
						'report_to_id': report_to_id
					},
					success: function(data) {
						if(data['success']) {
							if(data['rel_added']) {
								bootbox.alert("Added successfully");
								var elem_string = createReportingElement(user_id, search_text);
								$("#reporting-to-user-list").append(elem_string);
							}
							else {
								bootbox.alert("Adding " + search_text + " not possible");
							}
						}
						else {
							bootbox.alert("Some error occured");
						}
						$("#reporting-user").val("");
					},
					error: function(err) {
						bootbox.alert(err);
					}
				});
			} else {
				bootbox.alert("User name doesn't match any options");
			}
		} else {
			if(search_text.length < 2)
				bootbox.alert("Minimum length of search should be 2");
			else
				bootbox.alert("Enter a valid name");
		}
	});
	$("#add-user-rep").click(function(){
		var search_text = $("#reporting-to-user").val();
		var user_id = $("#current_user_id").val();
		var report_to_id = -1;
		var flag = false;
		if(search_text.length>=2 && validate_name(search_text) && validate_user_id(user_id)) {
			var options = $("#user-rep-list").children();
			for(var i=0; i<options.length; i++) {
				var opt_val = options[i].value;
				if(opt_val == search_text) {
					flag = true;
					report_to_id = options[i].id;
				}
			}
			if(flag && user_id!=-1) {
				$.ajax({
					url: '/addNewRelationship/',
					type: 'POST',
					data: {
						'user_id': user_id,
						'report_to_id': report_to_id
					},
					success: function(data) {
						if(data['success']) {
							if(data['rel_added']) {
								bootbox.alert("Added successfully");
								var elem_string = createReportingElement(report_to_id, search_text);
								$("#user-reports-to-list").append(elem_string);
							}
							else {
								bootbox.alert("Adding " + search_text + " not possible");
							}
						}
						else {
							bootbox.alert("Some error occured");
						}
						$("#reporting-to-user").val("");
					},
					error: function(err) {
						bootbox.alert(err);
					}
				});
			} else {
				bootbox.alert("User name doesn't match any options");
			}
		} else {
			if(search_text.length < 2)
				bootbox.alert("Minimum length of search should be 2");
			else
				bootbox.alert("Enter a valid name");
		}
	});
});

function create_reporting_user_list_element(user_id, user_name) {
	var element="";
	element+='<option value="'+user_name+'" id="'+user_id+'"></option>';
	return element;
}

function validate_name(name) {
	var regex = /^[a-zA-Z ]{2,100}$/;
	if(regex.test(name)) {
		return true;
	}
	return false;
}

function validate_user_id(id) {
	var regex = /^[0-9]{1,10}$/;
	if(regex.test(id)) {
		return true;
	}
	return false;
}

function create_new_user_element(user_name, user_id) {
	var new_user_html_element = "";
	new_user_html_element += '<li class="list-group-item">';
	new_user_html_element += '<div class="row">';
	new_user_html_element += '<div class="col-sm-8"> ' + user_name + ' </div>';
	new_user_html_element += '<input type="hidden" value="' + user_id + '">';
	new_user_html_element += '<div class="col-sm-4"> <a href="#" data-toggle="modal" data-target="#myModal">Reporting Rights</a> </div>';
	new_user_html_element += '</div>';
	new_user_html_element += '</li>';
	return new_user_html_element;
}

function openModal(event) {
	event.preventDefault();
	var flag = 0;
	var target = event.target || event.srcElement;
	while(target.nodeName != "ul") {
		if(target.nodeName == "LI") {
			flag = 1;
			break;
		}
		target = target.parentNode;
	}
	if(flag == 1) {
		var inputElem = target.getElementsByClassName("this-user-id")[0];
		var user_id = $(inputElem).val();
		var inputElem = target.getElementsByClassName("this-user-name")[0];
		var user_name = $(inputElem).val();
		$("#reporting-to-user-list").html("");
		$("#user-reports-to-list").html("");

		$.ajax({
			url: '/getReportingTo/',
			type: 'POST',
			data: {
				'user_id': user_id
			},
			success: function(data) {
				if(data['success']) {
					var reporting_to_users = data['users'];

					for(var index in reporting_to_users) {
						var elem_string = createReportingElement(reporting_to_users[index].user_id, reporting_to_users[index].user_name);
						$("#user-reports-to-list").append(elem_string);
					}

					$.ajax({
						url: '/getReportingFrom/',
						type: 'POST',
						data: {
							'user_id': user_id
						},
						success: function(data) {
							if(data['success']) {
								var reporting_from_users = data['users'];

								for(var index in reporting_from_users) {

									var elem_string = createReportingElement(reporting_from_users[index].user_id, reporting_from_users[index].user_name);
									$("#reporting-to-user-list").append(elem_string);
								}
								$("#user-report-to-heading").html("People " + user_name + " reports to");
								$("#user-report-to-label").html("Add people " + user_name + " reports to");
								$("#report-to-heading").html("People reporting to " + user_name);
								$("#report-to-label").html("Add people reporting to " + user_name);
								$("#current_user_id").val(user_id);
								$("#current_user_name").val(user_name);

								$("#reporting-rights-modal").modal("show");
							} else {
								bootbox.alert("Error - Can't show reporting rights");
							}
						},
						error: function(err) {
							bootbox.alert("Error : " + err);
						}
					});
				} else {
					bootbox.alert("Error - Can't show reporting rights");
				}
			},
			error: function(err) {
				bootbox.alert("Error : " + err);
			}
		});
	} else {
		bootbox.alert("Can't show reporting rights");
	}
}

function deleteRelationship(event) {
	var target = event.target || event.srcElement;
	while(target.nodeName != 'LI') {
		target = target.parentNode;
	}
	var user_name = $(target.getElementsByClassName("list-user-name")[0]).html();
	var user_id_1 = $(target.getElementsByClassName("rep_user_id")[0]).val();

	bootbox.confirm("Are you sure you want to delete the relation with " + user_name + "?", function(result) {
		if(result) {
			var user_id_2 = $("#current_user_id").val();
			$.ajax({
				url: '/deleteRelationship/',
				type: 'POST',
				data: {
					'user_id_1': user_id_1,
					'user_id_2': user_id_2
				},
				success: function(data) {
					if(data['success']) {
						if(data['deleted']) {
							bootbox.alert("Delete successful!");
							$(target).remove();
						}
						else {
							bootbox.alert("Unable to delete!");
						}
					}
					else {
						bootbox.alert("Unable to delete!");
					}
				}
			});
		}
	});
}

function createReportingElement(user_id, user_name) {
	var elem_String = "";
	elem_String += '<li class="list-group-item">';
	elem_String += '<div class="row">';
	elem_String += '<div class="col-sm-10 list-user-name">' + user_name + '</div>';
	elem_String += '<input type="hidden" class="rep_user_id" value="' + user_id + '">';
	// elem_String += '<div class="col-sm-1"> <span class="glyphicon glyphicon-pencil"></span> </div>';
	elem_String += '<div class="col-sm-2"> <span class="glyphicon glyphicon-trash delete-relationship" onclick="deleteRelationship(event)"></span> </div>';
	elem_String += '</div>';
	elem_String += '</li>';
	return elem_String;
}