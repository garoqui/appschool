<?php
$database="aprendo";
$con=new mysqli("localhost","root","1234",$database);
if($con->connect_error>0)
{
    die("Imposible Conectar con la Base de Datos");

}
 else {
   $aprob=1;


}


        