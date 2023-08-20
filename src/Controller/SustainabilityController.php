<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\TextileConsumption;
use App\Repository\TextileConsumptionRepository;
use App\Entity\FoodWaste;
use App\Repository\FoodWasteRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * Controller for handling sustainability-related pages.
 *
 * @SuppressWarnings(PHPMD)
 */
class SustainabilityController extends AbstractController
{
    /**
     * Display the index page of the project.
     *
     * @return Response
     */
    #[Route('/proj', name: 'project')]
    public function index(): Response
    {
        return $this->render('project/index.html.twig');
    }

    /**
     * Display the about page of the project.
     *
     * @return Response
     */
    #[Route('/proj/about', name: 'sustainability')]
    public function about(): Response
    {
        return $this->render('project/about.html.twig');
    }

    /**
     * Get textile consumption data from the database and render the corresponding page.
     *
     * @param TextileConsumptionRepository $textileConsumptionRepository
     * @return Response
     */
    #[Route('/proj/textile', name: 'textile')]
    public function getTextileConsumptionData(TextileConsumptionRepository $textileConsumptionRepository): Response
    {
        $dataFromDatabase = $textileConsumptionRepository->findAll();

        // Transform data to an array of associative arrays
        $dataArray = [];
        foreach ($dataFromDatabase as $item) {
            $dataArray[] = [
                'year' => $item->getYear(),
                'male' => $item->getMale(),
                'female' => $item->getFemale(),
                'unisex' => $item->getUnisex(),
                'total' => $item->getTotal(),
                'household' => $item->getHousehold()
            ];
        }

        $data = json_encode($dataArray);
        return $this->render('project/textile.html.twig', ['textile' => $data]);
    }

    /**
     * Get food waste data from the database and render the corresponding page.
     *
     * @param FoodWasteRepository $foodWasteRepository
     * @return Response
     */
    #[Route('/proj/food', name: 'food')]
    public function getFoodWasteData(FoodWasteRepository $foodWasteRepository): Response
    {
        $dataFromDatabase = $foodWasteRepository->findAll();

        // Transform data to an array of associative arrays
        $dataArray = [];
        foreach ($dataFromDatabase as $item) {
            $dataArray[] = [
                'year' => $item->getYear(),
                'source' => $item->getSource(),
                'value' => $item->getValue()
            ];
        }

        $data = json_encode($dataArray);
        return $this->render('project/food.html.twig', ['food' => $data]);
    }
}
