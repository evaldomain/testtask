<?php
    namespace App\Controller;

    
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\Routing\Annotation\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    

    class UzduotysController extends Controller {
        /**
         * @Route("/")
         */
        public function index() {
            
            return $this->render('uzduotys/index.html.twig');
        }
        /**
         * @Route("/test")
         */
        public function test() {
            
            return $this->render('uzduotys/test.html.twig');
        }
    }