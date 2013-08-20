<!--Script Check Text-->
<?php 
	if($_GET['lg']=="th"){ ?>
		<script language="javascript">
	  	function fncSubmit()
	  	{
	  	if(document.send.name_login.value == "")
	  	{
	  	alert('กรุณากรอก Username');
	  	document.send.name_login.focus();	
	  	return false;
	  	}	
	  	if(document.send.pass_login.value == "")
	  	{
	  	alert('กรุณากรอก Password');
	  	document.send.pass_login.focus();	
	  	return false;
	  	}
	  	
	  	
	  	
	  	document.send.submit();
	  	}
	  	</script>
	<? }else{ ?>
		<script language="javascript">
	  	function fncSubmit()
	  	{
	  	if(document.send.name_login.value == "")
	  	{
	  	alert('Please Fill Username');
	  	document.send.name_login.focus();	
	  	return false;
	  	}	
	  	if(document.send.pass_login.value == "")
	  	{
	  	alert('Please Fill Password');
	  	document.send.pass_login.focus();	
	  	return false;
	  	}
	  	
	  		  	
	  	document.send.submit();
	  	}
	  	</script>
	<? }?>
  	