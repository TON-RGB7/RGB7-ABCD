<!--Script Check Text-->
<?php 
	if($_GET['lg']=="th"){ ?>
		<script language="javascript">
	  	function fncSubmit()
	  	{
	  	if(document.send.name.value == "")
	  	{
	  	alert('กรุณากรอกชื่อ');
	  	document.send.name.focus();	
	  	return false;
	  	}	
	  	if(document.send.email.value == "")
	  	{
	  	alert('กรุณากรอกอีเมล์');
	  	document.send.email.focus();	
	  	return false;
	  	}	
	  		
	  	if(document.send.comment.value == "")
	  	{
	  	alert('กรุณากรอกรายละเอียด ');
	  	document.send.comment.focus();	
	  	return false;
	  	}
	  	
	  	
	  	document.send.submit();
	  	}
	  	</script>
	<? }else{ ?>
		<script language="javascript">
	  	function fncSubmit()
	  	{
	  	if(document.send.name.value == "")
	  	{
	  	alert('Please Fill Name');
	  	document.send.name.focus();	
	  	return false;
	  	}	
	  	if(document.send.email.value == "")
	  	{
	  	alert('Please Fill Email');
	  	document.send.email.focus();	
	  	return false;
	  	}	
	  		
	  	if(document.send.comment.value == "")
	  	{
	  	alert('Please Fill Description ');
	  	document.send.comment.focus();	
	  	return false;
	  	}
	  	
	  	
	  	document.send.submit();
	  	}
	  	</script>
	<? }?>
  	