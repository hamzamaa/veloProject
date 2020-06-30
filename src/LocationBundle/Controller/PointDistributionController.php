<?php

namespace LocationBundle\Controller;

use Doctrine\DBAL\Types\BooleanType;
use LocationBundle\Entity\PointDistribution;
use LocationBundle\Entity\VeloLouer;
use LocationBundle\LocationBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class PointDistributionController extends Controller
{

    public function getAllLPointAction()
    {
        $em=$this->getDoctrine()->getManager();
        $point=$em->getRepository(PointDistribution::class)->findAll();
        $data=$this->get('jms_serializer')->serialize($point,'json');
        $response=new Response($data);
        return $response;
    }


    public function addPointDistributionAction(Request $request)
    {
        $data=$request->getContent();
        $point=$this->get('jms_serializer')->deserialize($data,'LocationBundle\Entity\PointDistribution','json');
        $em=$this->getDoctrine()->getManager();
        $em->persist($point);
        $em->flush();
        return new Response('PointDistribution ajouté avec succès');
    }

    public function deletePointDistributionAction(Request $request)
    {
        $id=$request->get('id');
        $em=$this->getDoctrine()->getManager();
        $point=$em->getRepository(PointDistribution::class)->find($id);
        if (!empty($point)) {
            $em->remove($point);
        }
        $em->flush();
        return new JsonResponse(["msg"=>"deleted with success"],200);
    }


    public function getOnePointDistributionAction(PointDistribution $point)
    {
        $data=$this->get('jms_serializer')->serialize($point,'json');
        $response=new Response($data);
        return $response;
    }

    public function updategetPointDistributionAction(Request $request, $id)
    {
        $em=$this->getDoctrine()->getManager();
        $point=$em->getRepository(PointDistribution::class)->find($id);
        $data=$request->getContent();
        $newdata=$this->get('jms_serializer')->deserialize($data,'LocationBundle\Entity\PointDistribution','json');
        $point->setCapacite($newdata->getCapacite());
$em->persist($point);
$em->flush();
return new JsonResponse(["msg"=>"success"],200);
}


    public function louerVeloAction(Request $request, $id)
{
    $em=$this->getDoctrine()->getManager();
    $velo=$em->getRepository(VeloLouer::class)->find($id);
    $data=$request->getContent();
    $velo->setDisponible(false);
    $em->persist($velo);
    $em->flush();
    return new JsonResponse(["velo louer "],200);
}

    public function annulerLocationVeloAction(Request $request, $id)
    {
        $em=$this->getDoctrine()->getManager();
        $velo=$em->getRepository(VeloLouer::class)->find($id);
        $data=$request->getContent();
        $velo->setDisponible(true);
        $em->persist($velo);
        $em->flush();
        return new JsonResponse(["location annuler"],200);
    }
















}
