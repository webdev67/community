$(document).ready(function () {
	$("#add_new").on('click', function () {
		$("#save_modal").modal();
	});
});
function update(item) {
	$("#update_modal").find("input[name='item']").val(item);
	$("#update_modal").modal();
}