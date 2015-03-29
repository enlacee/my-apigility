<?php
namespace Iglesia\V1\Rest\Points\Model;

use Zend\Db\Sql\Sql;
use Zend\Db\Sql\Select;
use Zend\Db\Sql\Predicate\Expression;
use Zend\Db\TableGateway\TableGateway;
use Zend\Paginator\Adapter\DbSelect;
use Iglesia\V1\Rest\Points\PointsCollection;

class PointsTable
{
  protected $tableGateway;

  public function __construct(TableGateway $tableGateway)
  {
    $this->tableGateway = $tableGateway;
  }

  public function getTableGateway()
  {
    return $this->tableGateway;
  }

/**
 * Get position all data in db
 * @url_rest : http://localhost:8080/points?type=zone&xmin=-0.948214 xmax=0.168915 &ymin=-81.848145&ymax=-70.268555
 * @param  [type] $data [description]
 * @return [type]       [description]
 */
  public function fetchAll($data)
  {
      $exp="(".$data->xmin." ".$data->ymax.","
      .$data->xmin." ".$data->ymin.","
      .$data->xmax." ".$data->ymin.","
      .$data->xmax." ".$data->ymax.","
      .$data->xmin." ".$data->ymax
      .")";
      $sql = new Sql($this->tableGateway->getAdapter());
      $select = $sql->select('Place_points');
      $select->columns(array('id','places_id','places_type','latitude','longitude','zoom','name','created_at'));

      $type=$data->type;
      $idLogbook=$data->logbook;
      if($type==""){//all places
        if($idLogbook>0){
          $select->join('Logbook_details','Place_points.places_id=Logbook_details.places_id','logbooks_id','left');
          $select->where->expression("MBRContains(GeomFromText(?),point)=1","POLYGON($exp)");
          $select->where("logbooks_id='$idLogbook'");
        }else{
          $select->where->expression("MBRContains(GeomFromText(?),point)=1","POLYGON($exp)");
        }
      }else{
        $select->where->expression("MBRContains(GeomFromText(?),point)=1","POLYGON($exp)");
        $select->where("places_type='$type'");
      }


      $statement = $sql->prepareStatementForSqlObject($select);

      return  $statement->execute();
  }

}
