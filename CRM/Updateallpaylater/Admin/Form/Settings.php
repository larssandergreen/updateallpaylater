<?php

use CRM_Updateallpaylater_ExtensionUtil as E;

class CRM_Updateallpaylater_Admin_Form_Settings extends CRM_Admin_Form_Generic {


  function buildQuickForm() {
    parent::buildQuickForm();
    CRM_Core_Region::instance('form-top')->add(array(
    'markup' => '<div id="help">To update pay later instrutions for all Contribution Pages that are set to allow pay later, enter the new details and save.</div',
  ));
  }

  function postProcess() {
    $params = $this->controller->exportValues($this->_name);

    $pagesupdated = \Civi\Api4\ContributionPage::update(FALSE)
      ->addValue('pay_later_text', $params['updateallpaylater_pay_later_text'])
      ->addValue('pay_later_receipt', html_entity_decode($params['updateallpaylater_pay_later_receipt']))
      ->addWhere('is_pay_later', '=', TRUE)
      ->execute()->count();

    if ($pagesupdated) {
      CRM_Core_Session::setStatus('Updated pay later instructions on ' . $pagesupdated . ' Contribution Pages.', '', 'success');
    } else {
      CRM_Core_Session::setStatus("No Contribution Page pay later instructions updated. Maybe pay later isn't enabled?", '', 'alert');
    }

    parent::postProcess();
  }

}
