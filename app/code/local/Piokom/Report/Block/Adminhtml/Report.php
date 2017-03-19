<?php
class Piokom_Report_Block_Adminhtml_Report extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_blockGroup = 'piokom_report';
    $this->_controller = 'adminhtml_report';
    $this->_headerText = Mage::helper('piokom_report')->__('Report');

    parent::__construct();
    $this->_removeButton('add')
  }
}
