<?php

/**
 * @file
 * Theme settings in this file.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function rita_form_system_theme_settings_alter(&$form, \Drupal\Core\Form\FormStateInterface $form_state, $form_id = NULL) {
  if (isset($form_id)) {
    return;
  }
  $form['rita-configuraciones'] = [
    '#type' => 'details',
    '#title' => t('Configuraciones RITA'),
    '#open' => TRUE,
  ];
  $form['rita-configuraciones']['color_sitio'] = [
    '#type' => 'radios',
    '#title' => t('Color del sitio'),
    '#description' => t('Elige el color que quieres para la página del grupo de investigación'),
    '#options' => [
        'rojo' => t('Rojo'),
        'azul' => t('Azul'),
        'amarillo' => t('Amarillo'),
        'verde' => t('Verde'),
        'naranja' => t('Naranja'),
        'morado' => t('Morado'),
        'darkcyan' => t('Dark cyan'),
      ],
    '#default_value' => theme_get_setting('color_sitio'),
    '#after_build' => [
        '_rita_color_radios',
    ],
  ];
  $form['#attached']['library'][] = 'RITA/admin';
}