<?php 

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecondPage
{
    public function secondPage(){
        return new Response("here we are 2 ");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Deuxieme page  !</title>
  <meta charset="UTF-8">
</head>
<body>
  
  
   

</body>
</html>