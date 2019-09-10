<form action="<?php echo base_url()?>inicio/upload" method="post" name="XD" enctype="multipart/form-data">
	<input type="file" name="imagen">
	<button type="submit">enviar</button>
</form>
<br>
<br>
<br>
<br>

<button id="btn">prueba</button>
<p id="respuesta"></p>
<script>
$(document).ready(function(){
  $("#btn").click(function(){
    $.ajax({
    	url: "<?php echo base_url(); ?>inicio/prueba_ajax1",
    	type: 'POST',
    	dataType: 'json',
    })
    .done(function(data) {
    	console.log("success");
    	return data;
    })
    .fail(function() {
    	console.log("ERRORASO");
    })
    .always(function() {
    	console.log("complete");
    });
    
  });
});
</script>
<!-- enctype="multipart/form-data" --> <!-- IMPORTANTE!!! -->