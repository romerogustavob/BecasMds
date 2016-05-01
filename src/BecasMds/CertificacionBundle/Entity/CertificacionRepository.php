<?php

namespace BecasMds\CertificacionBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * CertificacionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CertificacionRepository extends EntityRepository {

    public function findIndividualCertificacion($becado_id) {
        
        $em = $this->getEntityManager();
        $dql='SELECT c FROM CertificacionBundle:Certificacion c '
                . 'JOIN c.becadobeca bb '
                . 'WHERE bb.becado= :becado '
                . 'AND bb.activo= :activo '
                . 'ORDER BY c.mesCertificacion DESC';
        
        $consulta=$em->createQuery($dql);
        $consulta->setParameter('becado', $becado_id);
        $consulta->setParameter('activo', true);
        
        return $consulta->getResult();
    }

}
