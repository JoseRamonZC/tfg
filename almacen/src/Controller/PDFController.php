<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Knp\Snnapy\Pdf;
use Knp\Bundle\SnnapyBundle\Snappy\Response\PdfResponse;
use Symfony\Component\Routing\Annotation\Route;

class PDFController extends AbstractController
{
    #[Route('/p/d/f', name: 'app_p_d_f')]
    public function index(Pdf $pdf): Response
    {
        $html = $this->renderView('pdf/pdf.html.twig');
        $filename = 'filename.pdf';

        // return $this->render('pdf/index.html.twig', [
        //     'controller_name' => 'PDFController',
        // ]);

        return new PdfResponse(
            $pdf->getOutputFromHtml($html),
            $filename
        );
    }
}