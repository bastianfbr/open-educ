<?php
//if(isset($_GET['donnees'])){

  if(isset($_GET['rosemeer']))
  {  
    if ($_GET['rosemeer']==true){
      $ecole=1;
    }
  }
  else if(isset($_GET['spindler']))
  {  
    if ($_GET['spindler']==true){
      $ecole=2;
    }
  } 
  else if(isset($_GET['fontaines']))
  {  
    if ($_GET['fontaines']==true){
      $ecole=3;
    }
  }
//}


?>