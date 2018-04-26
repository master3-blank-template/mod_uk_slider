<?php defined('_JEXEC') or die; ?>

<div class="mod_uk_slider<?php echo $moduleclass_sfx; ?> uk-position-relative" data-uk-slider<?php echo $sw_params; ?>>
    <div class="uk-slider-container">
        <ul class="uk-slider-items<?php echo $classes; ?>">
            <?php foreach ($items as $item) { ?>
            <li>
                <div>
                    <?php if ($item->img_front) { ?>
                    <img src="<?php echo $item->img_front; ?>" alt="<?php echo $item->title; ?>">
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
