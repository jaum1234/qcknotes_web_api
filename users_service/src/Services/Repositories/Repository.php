<?php

namespace Joaocoura\UsersService\Services\Repositories;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

class Repository {
    
    protected EntityRepository $repository;

    public function __construct(
        private EntityManagerInterface $entityManager
    ) {}

    public function fetchAll() {
        return $this->repository->findAll();
    }

    public function fetchBy(array $criteria, array | null $order, int | null $limit, int | null $offset) {
        $this->repository->findBy($criteria, $order, $limit, $offset);
    }

    public function save($object) {
        $this->entityManager->persist($object);
        $this->entityManager->flush();
    }
    
    public function remove($object) {
        $this->entityManager->remove($object);
        $this->entityManager->flush();
    }

    public function get($className) {
        return $this->entityManager->getRepository($className);
    }
}