<!DOCTYPE html>
<html>
<br><br>
<center>
<img src="https://upload.wikimedia.org/wikipedia/en/0/09/CSUDH_Seal.jpg"  style="width:350px;height:350px; ">
</center>

    <body>
        <?php
		$dbServername = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbName = "csc583_final";

		$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
		
	
		if($conn) 
		{
		  echo '<h1 align="center" > CSC583 Final </h1>';

				if(empty($_POST['username']))
			{
				echo""; 
				
			}
			else
			{
							$usr=$_POST['username'];
							$emi=$_POST['email'];
							$pho=$_POST['telephone'];
							$comp=$_POST['company'];
					
						if(!empty($_POST['escortName']))
						{
							
							$esc=$_POST['escortName'];

						if(!empty($_POST['checkVisit']))
						{
							$ovisit='Official visit';
							$sql = "INSERT INTO users(UserName,userEmail,userTelephone,userCompany,escortName,officialvisit) VALUES ('$usr','$emi','$pho','$comp','$esc','$ovisit')";
							
							$result = mysqli_query($conn, $sql);

						}
						else 
						{	
							$sql = "INSERT INTO users(UserName,userEmail,userTelephone,userCompany,escortName) VALUES ('$usr','$emi','$pho','$comp','$esc')";
							
							$result = mysqli_query($conn,$sql);
						}  
						}
						else {
							
						if(!empty($_POST['checkVisit']))
						{
							$ovisit='Official visit';
							$sql = "INSERT INTO users(UserName,userEmail,userTelephone,userCompany,officialvisit) VALUES ('$usr','$emi','$pho','$comp','$ovisit')";
							
							$result = mysqli_query($conn, $sql);

						}

						else 
						{	
							$sql = "INSERT INTO users(UserName,userEmail,userTelephone,userCompany) VALUES ('$usr','$emi','$pho','$comp')";
							
							$result = mysqli_query($conn,$sql);
						}
							
						}
						
					
							echo "Welcome '$usr'<br></br>";  
			}	
		} 	
		else 
		{
		   echo '<h1>Server is not connected</h1>';
		}      
?>


		<form action="http://localhost/sgin-in.php"  method="POST">
        
		<link rel="stylesheet" type="text/css" href="style.css">
  <div  class="container">
		<center>
	<header>


		<nav>
			<div>
			
					<div class ="signup-form">
		
					
		<input type="text" name="username" placeholder="User Name" required> 
		<br></br>

		<input type="text" name="email" placeholder="Email" required> 
		<br></br>
		
		<input type="text" name="telephone" placeholder="Telephone" required > 
		<br></br>
	
		<input type="text" name="company" placeholder="Company" required> 
		<br></br>

		<script type="text/javascript">
    
			function EnableDisableTextBox(checkEscort) 
			{
				var escortName = document.getElementById("escortName");
				escortName.disabled = checkEscort.checked ? false : true;
				
				if (!escortName.disabled) 
				{
					escortName.focus();
				}
			}
		</script>
	
	kindly check this box if the visit is official 
		<label for="checkVisit">
		<input type="checkbox" id="checkVisit" name="checkVisit" />
	<br/>
	<br/>
	If you have an Escort, please check this box
		<label for="checkEscort">
		<input type="checkbox" id="checkEscort" name="checkEscort" onclick="EnableDisableTextBox(this)" />
		
		</label>
		<br/>
		Escort Name:
		<input type="text" id="escortName" name="escortName" disabled="disabled" />
		<br/>
		<br/>
		 <div class="clearfix">
       
		<button  type="submit" class="signupbtn" Formaction="http://localhost/sgin-in.php"  >Submit</button>
		 </div>
		 </div>
  </div>
  
		</nav>
			</header>
			</center>
			</div>
		<br> </br>
      </form>
	  
	</body>
</html>