<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Estudiante;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class InicioController extends AbstractController
{
    #[Route('/', name: 'app_inicio')]
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $materiasReportadas = array();
        function contarAreaReportada($contenido){
            if($contenido === ""){
                return 0;
            }else{
                $materiasReportadas[] = $contenido;
                return 1;
            }
        }

        $form = $this->createFormBuilder()
        ->add('documento', IntegerType::class,[
            'label' => 'Documento de identidad',
            'required' => true
        ])
        ->add('Consultar', SubmitType::class)
        ->getForm();

    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()){
        $documento = $form->get('documento')->getData();
        $estudiante = $em->getRepository(Estudiante::class)->findOneBy(['documento' => $documento]);

        if(!$estudiante){
            return $this->render('inicio/resultado_no_existe.html.twig');
        }else{
                    //Calcular cantidad de materias reportadas
        $cantidadMateriasReportadas = 0;
        $cantidadMateriasReportadas += contarAreaReportada($estudiante->getUno());
        $cantidadMateriasReportadas += contarAreaReportada($estudiante->getDos());
        $cantidadMateriasReportadas += contarAreaReportada($estudiante->getTres());
        $cantidadMateriasReportadas += contarAreaReportada($estudiante->getCuatro());
        $cantidadMateriasReportadas += contarAreaReportada($estudiante->getCinco());
        $cantidadMateriasReportadas += contarAreaReportada($estudiante->getSeis());
        $cantidadMateriasReportadas += contarAreaReportada($estudiante->getSiete());
        $cantidadMateriasReportadas += contarAreaReportada($estudiante->getOcho());
        $cantidadMateriasReportadas += contarAreaReportada($estudiante->getNueve());
        $cantidadMateriasReportadas += contarAreaReportada($estudiante->getDiez());
        $cantidadMateriasReportadas += contarAreaReportada($estudiante->getOnce());
        $cantidadMateriasReportadas += contarAreaReportada($estudiante->getDoce());
        $cantidadMateriasReportadas += contarAreaReportada($estudiante->getTrece());
        $cantidadMateriasReportadas += contarAreaReportada($estudiante->getCatorce());
        
        return $this->render('inicio/resultado_consulta.html.twig',[
            'estudiante' => $estudiante,
            'cantidadMateriasReportadas' => $cantidadMateriasReportadas,
            'materiasReportadas' => $materiasReportadas
        ]);
        }
    }

    return $this->render('inicio/index.html.twig',[
        'formulario' => $form->createView()
    ]);

    }
}
