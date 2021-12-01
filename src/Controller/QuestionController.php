<?php
  namespace App\Controller;

  use Symfony\Component\HttpFoundation\Response;


  class QuestionController
  {

    public function list()
    {
      return new Response('
          <html>
            <body>
              <ul>
                <li><a href="#">How to install composer</a></li>
                <li><a href="#">How to fix composer installation issues</a></li>
                <li><a href="#">Solve Bugs in Symfony</a></li>
              </ul>
            </body>
          </html>
          ');
    }

    public function show($slug)
    {
      return new Response(sprintf('Future page to show the question: "%s"!',ucwords(str_replace('-', ' ', $slug))));
    }

  }
