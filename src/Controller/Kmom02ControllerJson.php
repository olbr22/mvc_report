<?php

namespace App\Controller;

use App\Deck\Card;
use App\Deck\CardGraphic;
use App\Deck\CardHand;
use App\Deck\DeckOfCards;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class Kmom02ControllerJson extends AbstractController
{
    #[Route("/api", name: "api")]
    public function api(): Response
    {
        return $this->render('api/api.html.twig');
    }

    #[Route("/lucky", name: "lucky")]
    public function lucky(): Response
    {
        $url = 'https://api.thecatapi.com/v1/images/search'; // Get random image of a cat from this API
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

    #[Route("/api/deck", name: "api_deck_create", methods: ['GET'])]
    public function create_deck(
        SessionInterface $session
    ): Response {
        $json = [];
        $deck = new DeckOfCards();
        $session->set('deck', $deck);
        // create a hand
        $session->set("hand", new CardHand());

        foreach ($deck->getDeck() as $card) {
            $json[] = $card->getCardName();
        }

        $data = [
            'deck' => $json,
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );

        return $response;
    }

    #[Route("/api/deck/shuffle", name: "api_deck_shuffle_get", methods: ['GET'])]
    public function shuffleDeck(
        SessionInterface $session
    ): Response {
        return $this->render('api/api_deck_shuffle.html.twig');
    }

    #[Route("/api/deck/shuffle", name: "api_deck_shuffle_post", methods: ['POST'])]
    public function shuffleDeckCallback(
        SessionInterface $session
    ): Response {
        $deck = $session->get('deck');

        if (!$deck) {
            $deck = new DeckOfCards();
            $session->set('deck', $deck);
        }

        $deck->shuffle();

        foreach ($deck->getDeck() as $card) {
            $json[] = $card->getCardName();
        }

        $data = [
            'deck' => $json,
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );

        return $response;
    }

    #[Route("/api/deck/draw/", name: "api_deck_draw_get", methods: ['GET'])]
    public function drawGetCallback(
        SessionInterface $session
    ): Response {
        $hand = $session->get('hand');
        $deck = $session->get('deck');

        if (!$deck) {
            $deck = new DeckOfCards();
            $session->set('deck', $deck);
        }

        if (!$hand) {
            $hand = new CardHand();
            $session->set('hand', $hand);
        }
        $hand->draw($deck);

        foreach ($hand->getHand() as $card) {
            $json[] = $card->getCardName();
        }

        $data = [
            'hand' => $json,
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );

        return $response;
    }

    #[Route("/api/deck/draw/", name: "api_deck_draw", methods: ['POST'])]
    public function drawCallback(
        SessionInterface $session
    ): Response {
        $hand = $session->get('hand');
        $deck = $session->get('deck');

        if (!$deck) {
            $deck = new DeckOfCards();
            $session->set('deck', $deck);
        }

        if (!$hand) {
            $hand = new CardHand();
            $session->set('hand', $hand);
        }
        $hand->draw($deck);

        foreach ($hand->getHand() as $card) {
            $json[] = $card->getCardName();
        }

        $data = [
            'hand' => $json,
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );

        return $response;
    }

    #[Route("/api/deck/draw/{num<\d+>}", name: "api_deck_draw_num_get", methods: ['GET'])]
    public function drawNumGetCallback(
        SessionInterface $session,
        int $num
    ): Response {
        $hand = $session->get('hand');
        $deck = $session->get('deck');

        if (!$deck) {
            $deck = new DeckOfCards();
            $session->set('deck', $deck);
        }

        if (!$hand) {
            $hand = new CardHand();
            $session->set('hand', $hand);
        }
        $hand->draw($deck, $num);

        $json = [];
        foreach ($hand->getHand() as $card) {
            $json[] = $card->getCardName();
        }

        $data = [
            'crads_left_deck' => $deck->getNumCards(),
            'hand' => $json,
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );

        return $response;
    }

    #[Route("/api/deck/draw/{num<\d+>}", name: "api_deck_draw_num_post", methods: ['POST'])]
    public function drawNumPostCallback(
        SessionInterface $session,
        Request $request
    ): Response {
        $numberCards = $request->request->get('number_cards');

        $hand = $session->get('hand');
        $deck = $session->get('deck');

        if (!$deck) {
            $deck = new DeckOfCards();
            $session->set('deck', $deck);
        }

        if (!$hand) {
            $hand = new CardHand();
            $session->set('hand', $hand);
        }
        $hand->draw($deck, $numberCards);

        $json = [];
        foreach ($hand->getHand() as $card) {
            $json[] = $card->getCardName();
        }

        $data = [
            'crads_left_deck' => $deck->getNumCards(),
            'hand' => $json,
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );

        return $response;
    }

}
