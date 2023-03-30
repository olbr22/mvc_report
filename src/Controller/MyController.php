<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyController extends AbstractController
{
    #[Route("/", name: "presentation")]
    public function presentation(): Response
    {
        $my_name = 'Olha Bruce';

        $data = [
            'name' => $my_name
        ];

        return $this->render('presentation.html.twig', $data);
    }

    #[Route("/about", name: "about")]
    public function about(): Response
    {
        return $this->render('about.html.twig');
    }

    #[Route("/report", name: "report")]
    public function report(): Response
    {
        return $this->render('report.html.twig');
    }

    #[Route("/lucky", name: "lucky")]
    public function lucky(): Response
    {
        $url = 'https://api.thecatapi.com/v1/images/search'; // Get random image of a cat
        $response = file_get_contents($url); // Send a GET request to the API and get the response

        if ($response) {
            // Process the response data
            $data = json_decode($response, true); // Convert the JSON data to an associative array
            $result = [
                'cat' => $data[0]['url']
            ];
        } else {
            echo 'Error fetching data'; // Handle the error if the response is empty or invalid
        }
        return $this->render('lucky.html.twig', $result);
    }

    #[Route("/api/quote", name: "quote")]
    public function jsonQuote(): Response
    {
        $current_timestamp = date('Y-m-d H:i:s'); // outputs today's date and time in the format YYYY-MM-DD HH:MM:SS

        $quotes = [
            0 => "If you want light to come into your life, you need to stand where it is shining.\nGuy Finley\nWriter",
            1 => "Every day may not be good but there's something good in every day.\nAlice Morse Earle\nAmerican Historian",
            2 => "Live life to the fullest and focus on the positive.\nMatt Cameron\nMusician"
        ];

        $length = count($quotes) - 1;
        $number = random_int(0, $length);

        $quote = [
            'quote' => $quotes[$number],
            'timestamp' => $current_timestamp
        ];

        // $response = new Response();
        // $response->setContent(json_encode($quote));
        // $response->headers->set('Content-Type', 'application/json');

        // return new JsonResponse($quote);

        $response = new JsonResponse($quote);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }
}