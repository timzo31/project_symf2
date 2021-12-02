<?php
  namespace App\Controller;

  use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
  use Symfony\Component\HttpFoundation\Response;


  class QuestionController extends AbstractController
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

      $answers = [
        'Make sure your cat is sitting perfectly still🤣',
        'Honestly, I like furry shoes better thn My cat',
        'Maybe... try saying the spell backwards?'
      ];

      return $this->render('question/show.html.twig', [
        'question' => ucwords(str_replace('-', ' ', $slug)),
        'answers' => $answers,
      ]);

    }

  }
