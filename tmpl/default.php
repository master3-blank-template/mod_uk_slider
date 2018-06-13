<?php defined('_JEXEC') or die;
/*
 * @package     mod_uk_slider
 * @copyright   Copyright (C) 2018 Aleksey A. Morozov (AlekVolsk). All rights reserved.
 * @license     GNU General Public License version 3 or later; see http://www.gnu.org/licenses/gpl-3.0.txt
 */

?>

<div class="mod_uk_slider uk-position-relative<?php echo $slider_class; ?>" data-uk-slider<?php echo $sw_params; ?>>
    <div class="uk-slider-container">
        <ul class="uk-slider-items<?php echo $classes; ?>">
            <?php
            foreach ($items as $item)
            {
                $item_slide_class = trim($item->class) ? ' ' . trim($item->class) : '';
                $item_class = $item_class || $item_slide_class ? ' class="' . $item_class . $item_slide_class . '"' : '';
            ?>
            <li>
                <div<?php echo $item_class; ?>>
                    <?php if ($item->img) { ?>
                    <img src="<?php echo $item->img; ?>" alt="<?php echo $item->title; ?>">
                    <?php } ?>
                    
                    <?php if ($item->title) { ?>
                    <h3><?php echo $item->title; ?></h3>
                    <?php } ?>
                    
                    <?php if ($item->content) { ?>
                    <div><?php echo $item->content; ?></div>
                    <?php } ?>
                    
                    <?php if ($item->link) { ?>
                    <div class="uk-margin-small-top"><a class="uk-button uk-button-primary" href="<?php echo $item->link; ?>"><?php echo $item->link_text; ?></a></div>
                    <?php } ?>
                </div>
            </li>
            <?php } ?>
        </ul>
    </div>
    
    <?php if ($slidenav) { ?>
    <a class="uk-position-center-left-out uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-previous data-uk-slider-item="previous"></a>
    <a class="uk-position-center-right-out uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-next data-uk-slider-item="next"></a>
    <?php } ?>
    
    <?php if ($dotnav) { ?>
    <div class="uk-flex uk-flex-center uk-margin-small-top">
        <ul class="uk-slider-nav uk-dotnav"></ul>
    </div>
    <?php } ?>
    
</div>
