<?php

namespace Joaocoura\UsersService\Services\Repositories;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Exception;

class Repository {
    
    protected EntityRepository $repository;

    public function __construct(
        private EntityManager $entityManager
    ) {}

    public function fetchAll() {
        $this->checkEntity();

        return $this->repository->findAll();
    }

    public function fetchBy(array $criteria, array | null $order, int | null $limit, int | null $offset) {
        $this->checkEntity();

        $this->repository->findBy($criteria, $order, $limit, $offset);
    }

    public function save($object) {
        $this->checkEntity();

        $this->entityManager->persist($object);
        $this->entityManager->flush();
    }
    
    public function remove($object) {
        $this->checkEntity();

        $this->entityManager->remove($object);
        $this->entityManager->flush();
    }

    public function get($className): Repository {
        $this->repository = $this->entityManager->getRepository($className);

        return $this;
    }

    private function checkEntity() {
        if ($this->repository === null) throw new Exception("Entity not defined.");
    }
}