<?php
/*
  TrimActivities
 */

$manifest = array (
  'acceptable_sugar_versions' => 
  array (
    0 => '7.*.*',
    1 => '8.*.*',
    1 => '9.*.*',
	),
  'acceptable_sugar_flavors' => 
  array (
    0 => 'PRO',
    1 => 'CORP',
    2 => 'ENT',
    3 => 'ULT',
  ),
  'readme' => '',
  'key' => '',
  'author' => 'kuske',
  'description' => 'Scheduler: TrimActivities',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'TrimActivities',
  'published_date' => '2018-09-30 00:00:00',
  'type' => 'module',
  'version' => 20180930,
  'remove_tables' => 'false',
);

$installdefs = array (
  'id' => 'TrimActivities',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/custom/',
      'to' => 'custom/',
    ),
  ),
);