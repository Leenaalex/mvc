
<!----------------------Superuser:add admin page--------------------------------------------->

<?php include("superdashboard.php");
?>
<script>
	function validate_form()
	{
		var x=document.forms['myform']['username'].value
		var y=document.forms['myform']['password'].value
		
		if(x=="" ||y=="")
		{
			alert("fill the fileds");
		}
	}
	</script>
<div class="container-fluid bg-style media1">
			
	<div class="row">
					
		<div class="col-md-12 log-style">
	<form name="addstudent" method="post" class="m-auto py-3 text-light p-3 form-style rounded">	
	
	
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='username' required="required" placeholder="username">	
	<input type="password" class="form-control inputcomponent mt-md-3 space" name='password' required="required" placeholder="password">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='adminid' required="required" placeholder="adminid">	
	<button type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit">submit</button>
								
	<button type="button" class="btn btn-default loginbutton m-t-5">
	<span class="google-button__icon"></span>
						

</form>

<?php 
if(isset($_POST['submit']))
	{
		include '../controller/MyController.php';
		$obj=new MyController();
		$obj->Saveadmindata($_POST['username'],$_POST['password'],$_POST['adminid']);
	
	}
?>

</div>
</div>
</div>