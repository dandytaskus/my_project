<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<body>

<!-- <form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
 -->
    <input id="sortpicture" type="file" name="sortpic" />
	<button id="upload">Upload</button>

<!-- </form> -->

</body>
</html>

 <script type="text/javascript">

$('#upload').on('click', function() {
    var file_data = $('#sortpicture').prop('files')[0]; 
    var form_data = new FormData();                  
    form_data.append('file', file_data);
    //file_data.name="DandyMasaya.jpg";  
   	var new_name="DandyMasaya.jpg";
    alert(form_data);                             
    $.ajax({
                url: 'upload.php?new_name='+new_name, // point to server-side PHP script 
                dataType: 'text',  // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                         
                type: 'post',
                success: function(php_script_response){
                    alert(php_script_response); // display response from the PHP script, if any
                    console.log(file_data);
                    console.log(new_name);
                }
     });
});

</script>
