<article<?php print $attributes; ?>>
  <?php print $user_picture; ?>
  <?php print render($title_prefix); ?>
  <?php if (!$page && $title): ?>
  <header>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  </header>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($display_submitted): ?>
  <footer class="submitted"><?php print $date; ?> -- <?php print $name; ?></footer>
  <?php endif; ?>  
    <?php if ($view_mode == 'teaser') : ?>
  A. Tyas, A.V. Pichugin, M. Gilbert, (2010) 'Optimum structure to carry a uniform load between pinned supports: exact analytical solution',  Proceedings of the Royal Society A (FirstCite), -.<br /><br />
  <?php 
  foreach( $content['field_people_involved']['#object']->field_people_involved['und'] as $person){
	echo", person : ".$person['node']->title;
}
  ?>
  
  <pre>
  <?php //var_dump($content['field_people_involved']['#object']->field_people_involved['und']); ?>
  </pre>
  <?php else: ?>
  <div<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>
  <?php endif; ?>
  <div class="clearfix">
    <?php if (!empty($content['links'])): ?>
      <nav class="links node-links clearfix"><?php print render($content['links']); ?></nav>
    <?php endif; ?>

    <?php print render($content['comments']); ?>
  </div>
</article>