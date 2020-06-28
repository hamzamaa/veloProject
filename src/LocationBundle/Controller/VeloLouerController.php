<?php

namespace LocationBundle\Controller;

use LocationBundle\Entity\VeloLouer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class VeloLouerController extends Controller
{

    public function getAllLVelotAction()
    {
        $em=$this->getDoctrine()->getManager();
        $velo=$em->getRepository(VeloLouer::class)->findAll();
        $data=$this->get('jms_serializer')->serialize($velo,'json');
        $response=new Response($data);
        return $response;
    }


    public function addVeloAction(Request $request)
    {
        $data=$request->getContent();
        $velo=$this->get('jms_serializer')->deserialize($data,'LocationBundle\Entity\VeloLouer','json');
        $em=$this->getDoctrine()->getManager();
        $em->persist($velo);
        $em->flush();
        return new Response('velo ajouté avec succès');
    }

    public function deleteVeloAction(Request $request)
    {
        $id=$request->get('id');
        $em=$this->getDoctrine()->getManager();
        $velo=$em->getRepository(VeloLouer::class)->find($id);
        if (!empty($velo)) {
            $em->remove($velo);
        }
        $em->flush();
        return new JsonResponse(["msg"=>"deleted with success"],200);
    }


    public function getOneVeloAction(VeloLouer $velo)
    {
        $data=$this->get('jms_serializer')->serialize($velo,'json');
        $response=new Response($data);
        return $response;
    }

    public function updategetVeloAction(Request $request, $id)
    {
        $em=$this->getDoctrine()->getManager();
        $velo=$em->getRepository(VeloLouer::class)->find($id);
        $data=$request->getContent();
        $newdata=$this->get('jms_serializer')->deserialize($data,'LocationBundle\Entity\VeloLouer','json');
        $velo->setNom($newdata->getNom());
        $em->persist($velo);
        $em->flush();
        return new JsonResponse(["msg"=>"success"],200);
    }









}
