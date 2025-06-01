<?php

require_once 'updateallpaylater.civix.php';

use CRM_Updateallpaylater_ExtensionUtil as E;

function updateallpaylater_civicrm_navigationMenu(&$menu) {
  _updateallpaylater_civix_insert_navigation_menu($menu, 'Administer/CiviContribute', [
    'label' => E::ts('Update all pay later instructions'),
    'name' => 'updateallpaylater',
    'url' => 'civicrm/admin/setting/updateallpaylater',
    'permission' => 'administer CiviCRM',
  ]);
}

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function updateallpaylater_civicrm_config(&$config): void {
  _updateallpaylater_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function updateallpaylater_civicrm_install(): void {
  _updateallpaylater_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function updateallpaylater_civicrm_enable(): void {
  _updateallpaylater_civix_civicrm_enable();
}
