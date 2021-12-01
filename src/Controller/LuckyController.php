<?php
    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;

    class LuckyController
    {
      public function number()
      {
        $num = random_int(0, 100);

        return new Response("<html><body><h3>number: ".$num." </h3></body></html>");
      }
    }
