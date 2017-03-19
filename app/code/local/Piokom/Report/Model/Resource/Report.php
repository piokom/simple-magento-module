<?php
class Piokom_Report_Model_Resource_Report extends Mage_Core_Model_Resource_Db_Abstract
{
  public function _construct()
  {
    $this->_init('piokom_report/report', 'id');
  }
}
