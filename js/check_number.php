<!--Script Check Number-->
  	<script language=JavaScript>
  	function check_number() {
  	e_k=event.keyCode
  	//if (((e_k < 48) || (e_k > 57)) && e_k != 46 ) {
  	if (e_k != 13 && (e_k < 48) || (e_k > 57)) {
  	event.returnValue = false;
  	alert("กรอกได้เฉพาะตัวเลข ");
  	}
  	}	
  	</script>