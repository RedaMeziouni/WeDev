<?php  session_start() ; ?>

<?php 
if (isset($_SESSION['db_nom'])) {
  

include "header.php"; 
include "db_conn.php";

  $nom= $_SESSION['db_nom'] ;
  $prenom= $_SESSION['db_prenom'];
  $db_id=$_SESSION['db_id'];
  ?>

<a href="profile.php?hello=true"  name="Logout">LOGOUT</a>
<?php
  if (isset($_GET['hello'])) {
    session_unset();
    header("location:login.php");
  
  }
  if( $db_id =='1') { 
    header("location:list.php");
    echo "<h2>".$_SESSION['db_nom']." ".$_SESSION['db_prenom']."</h2>";
  }
  else {
      
  
?>

</nav>

<?php  
  
  
   $qry="SELECT * FROM technos INNER JOIN developpeurs ON  technos.id = developpeurs.id ";
   $qry.="where nom = '$nom' and prénom = '$prenom' ";
   $qy="SELECT  * FROM formations where id = '".$_SESSION['db_id']." '";
if(!$qry)
{
die("Query Failed: ");
}
$re= mysqli_query($con , $qry);
    if (!$re) {
       die('erreur'. mysqli_error($con));
    }
    $r= mysqli_query($con , $qy);
    if (!$r) {
       die('erreur'. mysqli_error($con));
    }

    if ($re) {
     
while($row= mysqli_fetch_array($re) )
{

    echo "<h2>".$_SESSION['db_nom']." ".$_SESSION['db_prenom']."</h2>";


    echo "
    <article class='art'>
    <div> 
    <label >HTML</label>
    <label >LEVEL : <strong> ".$row['html']."</strong>  </label>
    </div>
    <div> 
    <label>CGI</label>
    <label >LEVEL :<strong> ".$row['cgi']."</strong></label>
    </div>
    <div> 
    <label >JavaScript</label>
    <label >LEVEL :<strong> ".$row['js']."</strong></label>
    </div>
    <div> 
    <label >AJAX</label>
    <label >LEVEL :<strong> ".$row['ajax']."</strong></label>
    </div>
    <div> 
    <label >PHP</label>
    <label >LEVEL :<strong> ".$row['php']."</strong></label>
    </div>";
    echo  "</article>";

}
echo "<h2>You have a formation On :</h2>";
echo "<table class='art table' border=1>";
 echo " <th>Techno name </th>
 <th >date of formation </th>
 ";
while ($ro= mysqli_fetch_array($r) ) {
  echo "<tr>";
  echo "<td ><strong> ".$ro['techno']."</strong></td>" ;
  echo "<td ><strong> ".$ro['date']."</strong></td>" ;
  echo "</tr>";
}

echo "</table>";


 
}}}
    
    else {
      echo "<h1>CONNECTION FAILED PLEASE <a href='login.php' >LOGIN</a> </h1>";
    }

    
    ?>
  </body>
</html>