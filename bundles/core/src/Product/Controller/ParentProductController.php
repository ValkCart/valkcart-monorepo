<?php

namespace Valkcart\Core\Product\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Exception\ORMException;
use Doctrine\ORM\OptimisticLockException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ParentProductController
{
    #[Route('/product', name: 'parent_product')]
    public function index(
        EntityManagerInterface $em
    ): Response
    {
        $em->find('App\Entity\ParentProduct', 1);
//        $classMetadata = $em->getClassMetadata('App\Entity\ParentProduct');
//        dd($classMetadata);

        return new Response('Parent Product Controller');
    }
}