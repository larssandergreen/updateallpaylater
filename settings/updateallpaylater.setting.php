<?php

use CRM_Updateallpaylater_ExtensionUtil as E;

return [
  'updateallpaylater_pay_later_text' => [
    'name' => 'updateallpaylater_pay_later_text',
    'type' => 'String',
    'default' => '',
    'html_type' => 'text',
    'html_attributes' => ['class' => 'huge'],
    'title' => E::ts('Pay later label'),
    'is_domain' => 1,
    'is_contact' => 0,
    'settings_pages' => ['updateallpaylater' => ['weight' => 10]],
  ],
  'updateallpaylater_pay_later_receipt' => [
    'name' => 'updateallpaylater_pay_later_receipt',
    'type' => 'String',
    'default' => '',
    'html_type' => 'textarea',
    'html_attributes' => ['rows' => '4', 'class' => 'big crm-form-wysiwyg'],
    'title' => E::ts('Pay Later Instructions'),
    'is_domain' => 1,
    'is_contact' => 0,
    'settings_pages' => ['updateallpaylater' => ['weight' => 20]],
  ],
];
