$(document).ready(function () {
	$("#add_new").on('click', function () {
		$("#save_modal").modal();
	});

	$("#save_modal").submit(function (event) {
		var formData = {
			'name': $('input[name=name]').val(),
			'_token': $('input[name=_token]').val()
		};
		$.ajax({
			url: '/save',
			type: 'POST',
			data: formData,
			dataType: 'json'}).
				done(function (e) {
					if (e.success) {
						$("#save_modal").modal('hide');
						window.location.reload();
					}
				}).
				fail(function (f) {
					console.log(f.responseJSON);
					var allErrors = "";
					f.responseJSON.errors.forEach(function (er) {
						allErrors += f.responseJSON.errors + "<br />";
					});

					$("div[class='display_errors']").html(allErrors);
				});
		event.preventDefault();
	});
});
function update(item) {
	$("#update_modal").find("input[name='item']").val(item);
	$("#update_modal").modal();
}