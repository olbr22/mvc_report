<?php

namespace App\Repository;

use App\Entity\TextileConsumption;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * Repository class for managing TextileConsumption entities.
 *
 * @extends ServiceEntityRepository<TextileConsumption>
 */
class TextileConsumptionRepository extends ServiceEntityRepository
{
    /**
     * TextileConsumptionRepository constructor.
     *
     * @param ManagerRegistry $registry The entity manager registry.
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TextileConsumption::class);
    }

    /**
     * Save the given TextileConsumption entity.
     *
     * @param TextileConsumption $entity The entity to be saved.
     * @param bool $flush Whether to flush the entity manager after persisting.
     * @return void
     */
    public function save(TextileConsumption $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Remove the given TextileConsumption entity.
     *
     * @param TextileConsumption $entity The entity to be removed.
     * @param bool $flush Whether to flush the entity manager after removing.
     * @return void
     */
    public function remove(TextileConsumption $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    // /**
    //  * Find a TextileConsumption entity by its ID.
    //  *
    //  * @param int $id The ID of the entity.
    //  * @param int|null $lockMode The lock mode.
    //  * @param int|null $lockVersion The lock version.
    //  * @return TextileConsumption|null The found entity or null if not found.
    //  */
    // public function find($id, $lockMode = null, $lockVersion = null): ?TextileConsumption
    // {
    //     return parent::find($id, $lockMode, $lockVersion);
    // }

    // /**
    //  * Find a single TextileConsumption entity by its criteria.
    //  *
    //  * @param array $criteria The criteria to search for.
    //  * @param array|null $orderBy The sorting criteria.
    //  * @return TextileConsumption|null The found entity or null if not found.
    //  */
    // public function findOneBy(array $criteria, array $orderBy = null): ?TextileConsumption
    // {
    //     return parent::findOneBy($criteria, $orderBy);
    // }

    // /**
    //  * Find all TextileConsumption entities.
    //  *
    //  * @return TextileConsumption[] The array of entities.
    //  */
    // public function findAll(): array
    // {
    //     return parent::findAll();
    // }

    // /**
    //  * Find TextileConsumption entities by criteria.
    //  *
    //  * @param array $criteria The criteria to search for.
    //  * @param array|null $orderBy The sorting criteria.
    //  * @param int|null $limit The maximum number of entities to return.
    //  * @param int|null $offset The offset to start from.
    //  * @return TextileConsumption[] The array of entities.
    //  */
    // public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null): array
    // {
    //     return parent::findBy($criteria, $orderBy, $limit, $offset);
    // }
}
