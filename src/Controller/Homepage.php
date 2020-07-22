<?php 

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class Homepage
{
    public function homepage(Environment $twig){
        
        $content = $twig->render('Advert/base.html.twig');

        return new Response($content);
        
    
    }
}
?>



