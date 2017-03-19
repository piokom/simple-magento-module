<?php
class Piokom_Report_Adminhtml_ReportController extends Mage_Adminhtml_Controller_Action
{
  public function indexAction()
  {
    $this->_title($this->__('Sales'))->_title($this->__('Piokom Report'));
    $this->loadLayout();
    $this->_setActiveMenu('sales/sales');
    $this->_addContent($this->getLayout()->createBlock('piokom_report/adminhtml_report_grid'));
    $this->renderLayout();
  }

  public function gridAction()
  {
    $this->loadLayout();
    $this->getResponse()->setBody(
      $this->getLayout()->createBlock('piokom_report/adminhtml_report_grid')->toHtml()
    );
  }

  public function exportReportCsvAction()
  {
    $fileName = 'report.csv';
    $grid = $this->getLayout()->createBlock('piokom_report/adminhtml_report_grid');
    $this->_prepareDownloadResponse($fileName, $grid->getCsvFile());
  }

  public function exportReportExcelAction()
  {
    $fileName = 'report.xml';
    $grid = $this->getLayout()->createBlock('piokom_report/adminhtml_report_grid');
    $this->_prepareDownloadResponse($fileName, $grid->getExcelFile($fileName));
  }
  
}
