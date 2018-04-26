<?php defined('_JEXEC') or die;

$vars = [
    'moduleclass_sfx', 
    'dotnav', 'slidenav', 
    'velocity', 'autoplay', 'autoplay_interval', 'finite', 'pause_on_hover', 'index', 'center', 'sets', 
    'grid', 'grid_divider', 'cols', 'cols_all', 'cols_s', 'cols_m', 'cols_l', 'cols_xl',
    'items'
];
foreach ($vars as $var)
    $$var = $params->get($var);

$sw_params = [];
if ((int)$velocity > 1) $sw_params[] = 'velocity:' . (int)$velocity;
if ($autoplay)
{
    $sw_params[] = 'autoplay:true';
    if ((int)$autoplay_interval != 7000 && (int)$autoplay_interval > 0) $sw_params[] = 'autoplay_interval:' . (int)$autoplay_interval;
}
if ($finite) $sw_params[] = 'finite:true';
if ($pause_on_hover) $sw_params[] = 'pause-on-hover:true';
if ((int)$index > 0) $sw_params[] = 'index:' . (int)$index;
if ((int)$center > 0) $sw_params[] = 'center:true';
if ((int)$sets > 0) $sw_params[] = 'sets:true';
$sw_params = $sw_params ? '="' . implode(';', $sw_params) . '"' : '';

$classes = [];
if ($grid != '')
{
    $classes[] = $grid;
    if ((int)$grid_divider) $classes[] = 'uk-grid-divider';
}
if ((int)$cols)
{
    $classes[] = $cols_all;
    $classes[] = $cols_s;
    $classes[] = $cols_m;
    $classes[] = $cols_l;
    $classes[] = $cols_xl;
}
$classes = $classes ? ' ' . implode(' ', $classes) : '';

require(JModuleHelper::getLayoutPath('mod_uk_slider', $params->get('layout', 'default')));
