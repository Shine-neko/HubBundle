<?php

namespace Ydle\HubBundle\Manager;

use Doctrine\ORM\EntityManager;
use Ydle\HubBundle\Manager\BaseManager;

class DataManager extends BaseManager
{

    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function findAllByName()
    {
        return $this->getRepository()->findAll();
    }

    public function getRepository()
    {
        return $this->em->getRepository('YdleHubBundle:NodeData');
    }
    
    public function findByRoom($params = array())
    {
        return $this->getRepository()->findByRoom($params);
    }
    
    public function getLastData($roomId)
    {
        return $this->getRepository()->getLastData($roomId);
    }

}
