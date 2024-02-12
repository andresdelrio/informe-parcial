<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Service\CargaMasiva;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CargaMasivaController extends AbstractController
{
    #[Route('/cargamasiva', name: 'app_carga_masiva')]
    public function index(Request $request, CargaMasiva $cargaMasiva): Response
    {
        {
            $form = $this->createFormBuilder()
            ->add('csv', FileType::class,[
                'label' => 'Cargar estudiantes',
                'required' => true
            ])
            ->add('Subir', SubmitType::class)
            ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $csv_file = $form->get('csv')->getData();
            if($csv_file){
    
                $lista_estudiantes = null;
        
                if (($gestor = fopen($csv_file, "r", ";")) !== FALSE) {
                    while (($datos = fgetcsv($gestor, 0, ";" )) !== FALSE) {
                        $lista_estudiantes[] = array('sede' => $datos[0], 'grado' => $datos[1], 'grupo' => $datos[2], 'nombre' => $datos[3],
                        'documento' =>$datos[4], 'uno'=> $datos[5], 'dos'=> $datos[6], 'tres'=> $datos[7], 'cuatro'=> $datos[8],
                         'cinco'=> $datos[9],'seis'=> $datos[10], 'siete'=> $datos[11], 'ocho'=> $datos[12], 'nueve'=> $datos[13],
                          'diez'=> $datos[14], 'once'=> $datos[15], 'doce'=> $datos[16], 'trece'=> $datos[17], 'catorce'=> $datos[18],
                        'lugar' => $datos[19], 'fecha' => $datos[20], 'hora' => $datos[21], 'periodo' => $datos[22], 
                        'observaciones' => $datos[23]);     
                    }
                fclose($gestor);
                
                $cargaMasiva->registrar($lista_estudiantes);
          
                }   
                return $this->render('carga_masiva/resultado.html.twig', [
                    'contador_estudiantes_ingresados' => $cargaMasiva->getCantidadEstudiantesRegistrados(),
                    'contador_estudiantes_no_ingresados' => $cargaMasiva->getCantidadEstudiantesNoRegistrados(),
                ]);
            }
        }
        return $this->render('carga_masiva/index.html.twig',[
            'formulario' => $form->createView()
        ]);
        };
    }
}
