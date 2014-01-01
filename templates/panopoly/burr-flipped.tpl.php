<?php
/**
 * @file
 * Template for Panopoly Burr Flipped.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display burr-flipped clearfix <?php !empty($class) ? print $class : ''; ?>" <?php !empty($css_id) ? print "id=\"$css_id\"" : ''; ?>>
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-<?php print kalatheme_grid_size(66); ?> burr-flipped-main-content">
          <?php print $content['contentmain']; ?>
        </div>
        <div class="col-md-<?php print kalatheme_grid_size(34); ?> burr-flipped-sidebar-content">
          <?php print $content['sidebar']; ?>
        </div>
      </div>
    </div>
  </section>
</div><!-- /.burr-flipped -->
