<html>
<head>
<link rel="stylesheet" type="text/css" href="select_style.css">
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
function fetch_select(val){
 $.ajax({
 type: 'post',
 url: 'fetch_problem.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("new_select_problem").innerHTML=response; 
 }
 });
}
</script>
</head>
<body>
<p id="heading">Dynamic Select Option Menu Using Ajax and PHP</p>
<center>
	<div id="select_box">
		<select onchange="fetch_select(this.value);">
			<option>Select Dept</option>
			  <?php
			  include('dbConfig.php');
    			$q1="SELECT * FROM dept_name;";
    			$res=mysql_query($q1);
    			$rc= mysql_num_rows($res);
			if($rc>0)
			{
			  while($row=mysql_fetch_assoc($res)) 
			   {
			   echo "<option value=".$row['name'].">".$row['name']."</option>";
			  }
			 }
			 else
			 {
			 	 echo "<option>"."No option"."</option>";
			 } 
			 ?>
		 </select>
		 H
		 <div id="new_select_problem">		 </div>
		
	</div>     
</center>
</body>
</html>
