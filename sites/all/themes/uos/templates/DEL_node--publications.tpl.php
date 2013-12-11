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
	
	P A Callaway, M Gilbert, C C Smith, (2012), Proceedings of the Institution of Civil Engineers, Bridge Engineering, 165, 3 147-158.
	
	<pre id="mamrek" style="display:none"><?php 
	
	var_dump($content);
	
	?></pre>
  <?php 
  // foreach( $content['field_people_involved']['#object']->field_people_involved['und'] as $person){
	// echo", person : ".$person['node']->title;
// }
  ?> 	
	<?php endif; ?>

		<div<?php print $content_attributes; ?>>
		<?php
		  // We hide the comments and links now so that we can render them later.
		  hide($content['comments']);
		  hide($content['links']);
		  print render($content);
		?>
		</div>
	

  
  <div class="clearfix">
	<?php if ($view_mode != 'teaser') : ?>
		<?php if (!empty($content['links'])): ?>
		  <nav class="links node-links clearfix"><?php print render($content['links']); ?></nav>
		<?php endif; ?>
	<?php endif; ?>
    <?php print render($content['comments']); ?>
  </div>
</article>