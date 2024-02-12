<?php

namespace App\Service;

use App\Entity\Estudiante;
use Doctrine\ORM\EntityManagerInterface;


class CargaMasiva {
    private $em = null;
    private $contador_estudiantes_no_ingresados = 0;
    private $contador_estudiantes_ingresados =0;
    public function __construct(EntityManagerInterface $em){
        $this->em = $em;
    }

    public function registrar(array $estudiantes){ 
            
        foreach($estudiantes as $dato){
            
            $estudiante = $this->em->getRepository(Estudiante::class)->findOneBy(['documento' => $dato['documento']]);
            if($estudiante){
                $this->contador_estudiantes_no_ingresados += 1;
                continue;
            }
                //Crear estudiante
                $estudiante = new Estudiante();
                $estudiante->setSede($dato['sede']);
                $estudiante->setGrado($dato['grado']);
                $estudiante->setGrupo($dato['grupo']);
                $estudiante->setNombre($dato['nombre']);
                $estudiante->setDocumento($dato['documento']);
                $estudiante->setUno($dato['uno']);
                $estudiante->setDos($dato['dos']);
                $estudiante->setTres($dato['tres']);
                $estudiante->setCuatro($dato['cuatro']);
                $estudiante->setCinco($dato['cinco']);
                $estudiante->setSeis($dato['seis']);
                $estudiante->setSiete($dato['siete']);
                $estudiante->setOcho($dato['ocho']);
                $estudiante->setNueve($dato['nueve']);
                $estudiante->setDiez($dato['diez']);
                $estudiante->setOnce($dato['once']);
                $estudiante->setDoce($dato['doce']);
                $estudiante->setTrece($dato['trece']);
                $estudiante->setCatorce($dato['catorce']);
                $estudiante->setLugar($dato['lugar']);
                $estudiante->setFecha($dato['fecha']);
                $estudiante->setHora($dato['hora']);
                $estudiante->setPeriodo($dato['periodo']);
                $estudiante->setObservaciones($dato['observaciones']);
                $this->em->persist($estudiante);
                $this->em->flush();
                $this->contador_estudiantes_ingresados += 1;
        }

    }

    public function getCantidadEstudiantesRegistrados(): ?string{
        return $this->contador_estudiantes_ingresados;
    }
    public function getCantidadEstudiantesNoRegistrados(): ?string{
        return $this->contador_estudiantes_no_ingresados;
    }
}