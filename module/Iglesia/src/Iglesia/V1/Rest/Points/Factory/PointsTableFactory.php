<?php
namespace Iglesia\V1\Rest\Points\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Db\TableGateway\TableGateway;
use Zend\Stdlib\Hydrator\ObjectProperty;
use Zend\Db\ResultSet\HydratingResultSet;
use Iglesia\V1\Rest\Points\PointsEntity;
use Iglesia\V1\Rest\Points\Model\PointsTable;

class PointsTableFactory implements FactoryInterface
{
  public function createService(ServiceLocatorInterface $serviceLocator)
  {
    $db = $serviceLocator->get('db1');

    $resultSetPrototype = new HydratingResultSet(new ObjectProperty(),new PointsEntity());
    $tableGateway       = new TableGateway('Place_points', $db, null, $resultSetPrototype);
    $table              = new PointsTable($tableGateway);
    return $table;
  }
}
