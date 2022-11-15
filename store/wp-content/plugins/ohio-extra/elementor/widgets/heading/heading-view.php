<div class="ohio-widget heading <?php echo $this->getWrapperClasses(); ?>">

    <?php if ( $settings['divider_position'] == 'before_title' ) : ?>
        <div class="divider" <?php echo $this->getInlineStyleAttr( 'divider' ); ?>></div>
    <?php endif; ?>

    <?php if ( $settings['subtitle_type_layout'] == 'top_subtitle' ) : ?>
        <div class="subtitle">
            <?php echo $settings['subtitle']; ?>
        </div>

        <?php if ( $settings['divider_position'] == 'middle' ) : ?>
            <div class="divider" <?php echo $this->getInlineStyleAttr( 'divider' ); ?>></div>
        <?php endif; ?>

    <?php endif; ?>

    <<?php echo $settings['heading_tag']; ?> class="title">
        <?php echo $settings['title']; ?>
    </<?php echo $settings['heading_tag']; ?>>

    <?php if ( $settings['subtitle_type_layout'] == 'bottom_subtitle' ) : ?>

        <?php if ( $settings['divider_position'] == 'middle' ) : ?>
            <div class="divider" <?php echo $this->getInlineStyleAttr( 'divider' ); ?>></div>
        <?php endif; ?>

        <div class="subtitle">
            <?php echo $settings['subtitle']; ?>
        </div>
    <?php endif; ?>

    <?php if ( $settings['divider_position'] == 'after_title' ) : ?>
        <div class="divider"></div>
    <?php endif; ?>

</div>