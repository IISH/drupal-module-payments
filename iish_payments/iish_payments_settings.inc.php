<?php
/**
 * @file
 * Settings for this module.
 */

/**
 * Implements hook_form().
 */
function iish_payments_settings_form($form, &$form_state) {
  $form['general'] = array(
    '#type' => 'fieldset',
    '#title' => t('General'),
  );

  $form['general']['iish_payments_friends_email'] = array(
    '#type' => 'textfield',
    '#title' => t('Friends email'),
    '#default_value' => variable_get('iish_payments_friends_email'),
    '#description' => t('Enter the email address of IISH Friends.'),
  );

  $friendsInfo = variable_get('iish_payments_friends_information');

  $form['general']['iish_payments_friends_information'] = array(
    '#type' => 'text_format',
    '#format' => 'full_html',
    '#title' => t('Friends information text'),
    '#default_value' => $friendsInfo['value'],
    '#description' => t('Enter information about the Friend memberships and donations.'),
  );

  $invoiceInfo = variable_get('iish_payments_invoice_information');

  $form['general']['iish_payments_invoice_information'] = array(
    '#type' => 'text_format',
    '#format' => 'full_html',
    '#title' => t('Invoice information text'),
    '#default_value' => $invoiceInfo['value'],
    '#description' => t('Enter information about paying invoices online.'),
  );

  $form['payway'] = array(
    '#type' => 'fieldset',
    '#title' => t('PayWay'),
  );

  $form['payway']['iish_payments_payway_address'] = array(
    '#type' => 'textfield',
    '#title' => t('API address'),
    '#default_value' => variable_get('iish_payments_payway_address'),
    '#description' => t('Enter the address of the PayWay API.'),
  );

  $form['payway']['iish_payments_payway_passphrase_in'] = array(
    '#type' => 'textfield',
    '#title' => t('Passphrase IN'),
    '#default_value' => variable_get('iish_payments_payway_passphrase_in'),
    '#description' => t('Enter the passphrase for messages to PayWay.'),
  );

  $form['payway']['iish_payments_payway_passphrase_out'] = array(
    '#type' => 'textfield',
    '#title' => t('Passphrase OUT'),
    '#default_value' => variable_get('iish_payments_payway_passphrase_out'),
    '#description' => t('Enter the passphrase for messages from PayWay.'),
  );

  $form['payway']['iish_payments_payway_project'] = array(
    '#type' => 'textfield',
    '#title' => t('Project'),
    '#default_value' => variable_get('iish_payments_payway_project'),
    '#description' => t('Enter the project to register the orders in PayWay.'),
  );

  return system_settings_form($form);
}