<?php 

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Homepage
{
    public function homepage(){
        return new Response("here we are ");
        
    
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Bienvenue sur ma première  !</title>
  <meta charset="UTF-8">
</head>
<body>
  <h1>Hello World !</h1> 
   <!-- <img src="">  -->
  <p>
    Le Hello World est un grand classique en programmation.
    Il signifie énormément, car cela veut dire que vous avez
    réussi à exécuter le programme pour accomplir une tâche simple :
    afficher ce hello world !
  </p>


</body>
</html>

