<?php
class Piokom_Report_Model_Observer
{
  public function saveUserPresenceOnPage($observer)
  {
    $event = $observer->getEvent();
    $productId = $event->getProduct()->getId();
    $ip = $_SERVER['REMOTE_ADDR'];

    $report = Mage::getModel('piokom_report/report');

    $report->setData('ip', $ip);
    $report->setData('product_id', $productId);
    $report->save();
  }
}
