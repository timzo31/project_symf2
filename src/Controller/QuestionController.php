<?php
  namespace App\Controller;

  use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
  use Symfony\Component\HttpFoundation\Response;
  use Twig\Environment;


  class QuestionController extends AbstractController
  {

    public function homepage()
    {
        //$html = $twigEnvironment->render('question/homepage.html.twig');
        //return new Response($html);
      return $this->render('question/homepage.html.twig');
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
