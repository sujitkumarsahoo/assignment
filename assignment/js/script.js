$(document).ready(function(){
	display_menu();
	function display_menu(){
		$.ajax({
			url: 'data.php',
			type: 'POST',
			data: {res: 1},
			success: function(data){
				$('#dynamic_menu').html(data);
			}
		});
	}
	
	$('#upload').on('click', function(){
		$(this).attr('disabled', 'disabled');
		var file = $('#file');
		var file_length = file[0].files.length;
		var file_data = file.prop('files')[0];
		
		var formData = new FormData();
		formData.append('file', file_data);
		$.ajax({
			url: "upload.php",
			type: "POST",
			data: formData,
			contentType:false,
			cache: false,
			processData: false,
			success: function(data){
				if(data=="success"){
					swal("SUCCESS", "Successfully uploaded!", "success");
					$('#file').val('');
					display_menu();
				}else if(data=="error1"){
					swal("Cancelled", "Please upload file first!:)", "error");
					$('#file').val('');
				}else if(data=="error2"){
					swal("Cancelled", "File too large to upload!:)", "error");
					$('#file').val('');
				}
				$('#upload').removeAttr('disabled');
			}
		});
	});
	$("#target").click(function() {
    var value = $(this).data("custom-value");
    alert(value);
    // do other stuff.
});   
});
function doc(doc_path)
{
	//$('#para').html('');
	const myArray = doc_path.split("~");
	var path = myArray[0];
	var id = myArray[1];
	var url = 'http://localhost/assignment/'+path;
	$('#para').html('<p>DOCUMENT # '+id+'</p>')
	$('#doc_link').attr('src', url)
}