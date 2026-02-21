<?php
/**
 * Block styles (NEG’ MAWON)
 */

if (function_exists('register_block_style')) {
  add_action('init', function () {

    // COVER (Hero / banners)
    register_block_style('core/cover', ['name'  => 'nm-hero-musee','label' => 'NM — Hero musée']);
    register_block_style('core/cover', ['name'  => 'nm-banner-musee','label' => 'NM — Bannière musée']);

    // GROUP (sections / cards / layout wrappers)
    register_block_style('core/group', ['name'  => 'nm-section-creme','label' => 'NM — Section crème']);
    register_block_style('core/group', ['name'  => 'nm-ruban','label' => 'NM — Ruban']);
    register_block_style('core/group', ['name'  => 'nm-event','label' => 'NM — Evénement']);
    register_block_style('core/group', ['name'  => 'nm-a-la-une','label' => 'NM — A la une']);
    register_block_style('core/group', ['name'  => 'nm-brand','label' => 'NM — Brand']);
    register_block_style('core/group', ['name'  => 'nm-regard-sur-nos-actions','label' => 'NM — Regard sur nos actions']);
    register_block_style('core/group', ['name'  => 'nm-timeline__item','label' => 'NM — Timeline item']);
    register_block_style('core/group', ['name'  => 'nm-timeline__year','label' => 'NM — Timeline year']);
    register_block_style('core/group', ['name'  => 'nm-show-more__item','label' => 'NM — Show more Item']);

    // COLUMN 
    register_block_style('core/column', ['name'  => 'nm-event-date','label' => 'NM — Date événement']);
    register_block_style('core/column', ['name'  => 'nm-event-body','label' => 'NM — Corps événement']);
    register_block_style('core/column', ['name'  => 'nm-fade-l-r','label' => 'NM — Dégradé G-D']);
    register_block_style('core/column', ['name'  => 'nm-fade-r-l','label' => 'NM — Dégradé D-G']);
    register_block_style('core/column', ['name'  => 'nm-fade-l-r-green','label' => 'NM — Dégradé G-D vert']);
    register_block_style('core/column', ['name'  => 'nm-show-more','label' => 'NM — Show more']);
    
    // BUTTON
    register_block_style('core/button', ['name'  => 'nm-btn-outline','label' => 'NM — Bouton contour']);

    // IMAGE
    register_block_style('core/image', ['name'  => 'nm-image-rounded','label' => 'NM — Image arrondie']);

    // QUERY
    register_block_style('core/query', ['name'  => 'nm-grid','label' => 'NM — Grille']);

    // NAVIGATION
    register_block_style('core/navigation', ['name'  => 'nm-header-nav','label' => 'NM — Navigation header']);

  });
}
