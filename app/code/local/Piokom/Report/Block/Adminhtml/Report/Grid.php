<?php
class Piokom_Report_Block_Adminhtml_Report_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
  public function __construct()
  {
    parent::__construct();

    $this->setId('piokom_report_report_grid');
    $this->setDefaultSort('id');
    $this->setDefaultDir('asc');
    $this->setSaveParameterInSession(true);
    $this->setUseAjax(true);
  }

  protected function _getCollectionClass()
  {
    return 'piokom_report/report_collection';
  }

  protected function _prepareCollection()
  {
    $collection = Mage::getResourceModel($this->_getCollectionClass());
    $this->setCollection($collection);
    
    return parent::_prepareCollection();
  }

  protected function _prepareColumns()
  {
    $this->addColumn('id',
      array(
        'header' => $this->__('ID'),
        'align' => 'center',
        'width' => '50px',
        'index' => 'id'
      )
    );

    $this->addColumn('ip',
      array(
        'header' => $this->__('Visitor\'s IP address'),
        'align' => 'center',
        'index' => 'ip'
      )
    );

    $this->addColumn('timestamp',
      array(
        'header' => $this->__('Date of visit'),
        'align' => 'center',
        'index' => 'timestamp'
      )
    );

    $this->addColumn('productId',
      array(
        'header' => $this->__('Product ID'),
        'align' => 'center',
        'index' => 'product_id'
      )
    );

    return parent::_prepareColumns();
  }

  public function getGridUrl()
  {
    return $this->getUrl('*/*/grid', array('_current' => true));
  }
}
