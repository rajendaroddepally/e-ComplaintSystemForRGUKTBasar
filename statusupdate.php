     <?php
     $statusupdate=0;
    if(isset($_POST['updatestat']))
    {
    $stat=$_POST['stat'];
    $id=$_POST['stat1'];
    include('dbConfig.php');
    $qq= "UPDATE complaint SET stata='$stat' WHERE id='$id'";
    $result1=mysql_query($qq);
    if($result1)
    {
    	$statusupdate=1;
    }
    }
    ?>

