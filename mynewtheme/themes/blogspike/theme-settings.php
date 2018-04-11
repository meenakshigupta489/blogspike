<?php

function blogspike_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['#attached']['library'][] = 'magazineplus/theme-settings';

  $form['mtt_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('MtT Theme Settings'),
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  );

  $form['mtt_settings']['tabs'] = array(
    '#type' => 'vertical_tabs',
    '#default_tab' => 'basic_tab',
  );
 $form['mtt_settings']['font_tab']['font'] = array(
    '#type' => 'details',
    '#title' => t('Font Settings'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );
 $form['mtt_settings']['font_tab']['font']['font_title'] = array(
    '#type' => 'item',
    '#markup' => 'For every region pick the <strong>font-family</strong> that corresponds to your needs.',
  );
 $form['mtt_settings']['font_tab']['font']['sitename_font_family'] = array(
    '#type' => 'select',
    '#title' => t('Site name'),
    '#default_value' => theme_get_setting('sitename_font_family', 'magazineplus'),
    '#options' => array(
      'sff-fyf' => t('@font-your-face'),
      'sff-31' => t('Alegreya SC, Georgia, Times, Times New Roman, Serif'),
      'sff-25' => t('Alegreya, Georgia, Times, Times New Roman, Serif'),
      'sff-40' => t('Archivo Narrow, Arial, Helvetica Neue, Sans-serif'),
      'sff-42' => t('Arimo, Arial, Helvetica Neue, Sans-serif'),
      'sff-19' => t('Cabin, Helvetica Neue, Arial, Sans-serif'),
      'sff-16' => t('Cinzel, Georgia, Times, Serif'),
      'sff-27' => t('Crimson Text, Georgia, Times, Times New Roman, Serif'),
      'sff-22' => t('Droid Serif, Georgia, Times, Times New Roman, Serif'),
      'sff-09' => t('Exo, Arial, Helvetica Neue, Sans-serif'),
      'sff-33' => t('Fira Sans, Arial, Helvetica Neue, Sans-serif'),
      'sff-28' => t('Gentium Book Basic, Georgia, Times, Times New Roman, Serif'),
      'sff-13' => t('Georgia, Times, Serif'),
      'sff-21' => t('Helvetica Neue, Arial, Sans-serif'),
      'sff-12' => t('Josefin Sans, Georgia, Times, Serif'),
      'sff-36' => t('Julius Sans One, Arial, Helvetica Neue, Sans-serif'),
      'sff-07' => t('Lato, Helvetica Neue, Arial, Sans-serif'),
      'sff-43' => t('Libre Franklin, Helvetica Neue, Arial, Sans-serif'),
      'sff-34' => t('Lora, Georgia, Times, Times New Roman, Serif'),
      'sff-01' => t('Merriweather, Georgia, Times, Serif'),
      'sff-32' => t('Montserrat SC, Arial, Helvetica Neue, Sans-serif'),
      'sff-20' => t('Noto Sans, Arial, Helvetica Neue, Sans-serif'),
      'sff-26' => t('Noto Serif, Georgia, Times, Times New Roman, Serif'),
      'sff-38' => t('Open Sans Condensed, Arial, Helvetica Neue, Sans-serif'),
      'sff-06' => t('Open Sans, Helvetica Neue, Arial, Sans-serif'),
      'sff-17' => t('Oswald, Helvetica Neue, Arial, Sans-serif'),
      'sff-15' => t('Philosopher, Georgia, Times, Serif'),
      'sff-18' => t('Playfair Display SC, Georgia, Times, Serif'),
      'sff-14' => t('Playfair Display, Times, Serif'),
      'sff-39' => t('PT Sans Narrow, Arial, Helvetica Neue, Sans-serif'),
      'sff-04' => t('PT Sans, Helvetica Neue, Arial, Sans-serif'),
      'sff-23' => t('PT Serif, Georgia, Times, Times New Roman, Serif'),
      'sff-35' => t('Quattrocento Sans, Arial, Helvetica Neue, Sans-serif'),
      'sff-11' => t('Raleway, Helvetica Neue, Arial, Sans-serif'),
      'sff-08' => t('Roboto Condensed, Arial Narrow, Arial, Sans-serif'),
      'sff-10' => t('Roboto Slab, Trebuchet MS, Sans-serif'),
      'sff-05' => t('Roboto, Helvetica Neue, Arial, Sans-serif'),
      'sff-02' => t('Source Sans Pro, Helvetica Neue, Arial, Sans-serif'),
      'sff-30' => t('Times, Times New Roman, Serif'),
      'sff-41' => t('Ubuntu Condensed, Arial, Helvetica Neue, Sans-serif'),
      'sff-03' => t('Ubuntu, Helvetica Neue, Arial, Sans-serif'),
      'sff-29' => t('Volkhov, Georgia, Times, Times New Roman, Serif'),
      'sff-24' => t('Vollkorn, Georgia, Times, Times New Roman, Serif'),
      'sff-37' => t('Work Sans, Arial, Helvetica Neue, Sans-serif'),
    ),
  );
 $form['mtt_settings']['font_tab']['font']['sitename_italic'] = array(
    '#type' => 'checkbox',
    '#title' => t('Apply italic font style to Site name'),
    '#default_value' => theme_get_setting('sitename_italic', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
}