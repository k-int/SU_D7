<div id="copyright_note"><strong>&copy; The University of Sheffield <?php print date('Y'); ?> </strong><span id='developer-note'> - Web development by <a href="http://www.k-int.com">Knowledge Integration Ltd</a>.</span></div>
<?php $tag = $block->subject ? 'section' : 'div'; ?>
<<?php print $tag; ?><?php print $attributes; ?>>
  <div class="block-inner clearfix">
    <?php print render($title_prefix); ?>
    <?php if ($block->subject): ?>
      <h2<?php print $title_attributes; ?>><?php print $block->subject; ?></h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    
    <div<?php print $content_attributes; ?>>
      <?php print $content ?>
    </div>
  </div></<?php print $tag; ?>>