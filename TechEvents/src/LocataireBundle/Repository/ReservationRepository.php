<?php

namespace LocataireBundle\Repository;

use LocataireBundle\Entity\Reservation;

/**
 * ReservationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ReservationRepository extends \Doctrine\ORM\EntityRepository
{
    public function findByIsFree(Reservation $reservation)
    {

    }
}
