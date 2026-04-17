<?php
	     
	 $search = $_POST['a1'];
	 $host="localhost";
	 $username="root";
	 $password="";
	 $db_name="museum_url";
	 $con=mysqli_connect($host,$username,$password,$db_name);
	 $sql="SELECT * FROM url where animal like '%$search%'";
	 $rs=mysqli_query($con,$sql);
	 if($rs->num_rows>0)
	 {
		 #while($row = $rs->fetch_assoc()) 
		 #{
			 #echo "animal: " . $row["animal"]. "<br>";
			 #echo " url: " . $row["urlname"]."<br>";
			 $row = $rs->fetch_assoc();
		     header("location:".$row["urlname"]." ");
		 #}
	 }
	 else
     {
		 echo '<script type="text/javascript">';
		 echo " alert('TYPE CORRECT NAME.')";      
		 #header("location:http://localhost/Museumnn/index.php");
       #echo " window.location.href='".site_url('http://localhost/Museumnn/index.php')."'";
		 echo '</script>';
		
	 }
	 mysqli_close($con);
      ?>