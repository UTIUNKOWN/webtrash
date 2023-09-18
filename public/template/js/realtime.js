$(document).ready(function() {
    selesai();
});

function selesai() {
	setTimeout(function() {
		update();
		selesai();
	}, 200);
}

function update() {
	$.getJSON("", function(data) {
		$("table").empty();
		var no = 1;
		$.each(data.result, function() {
			$("table").append("<tr><td>"+(no++)+"</td><td>"+this['nama']+"</td><td>"+this['jurusan']+"</td></tr>");
		});
	});
}
