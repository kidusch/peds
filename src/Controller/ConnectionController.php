<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\BoeyRepository;

class ConnectionController extends AbstractController
{
    public  function __construct(BoeyRepository $boeyRepository)
    {
        $this->boeyRepository = $boeyRepository;
    }
  
    /**
     * @Route("/test", name="app_test", methods={"POST"})
     */
    public function index(Request $request): Response
    {
        $request_data = json_decode($request->getContent(), true);
        $result = $this->boeyRepository->add($request_data["HoldSalesIdentifierId"], $request_data["TransactionType"], $request_data["InvoiceNo"], $request_data["PaymentType"], $request_data["TableNumber"], $request_data["SalesPerson"], $request_data["HoldMemo"], $request_data["Date"], $request_data["CustomerName"], $request_data["CustomerTIN"], $request_data["CustomerVAT"], $request_data["CashierUpdated"], $request_data["POSId"]);
        return $this->json(['Success' => 'PEDS']);
    }
}
