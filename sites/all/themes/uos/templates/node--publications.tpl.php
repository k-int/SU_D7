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
  
  <div<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);

	// var_dump($content['group_poublication_details']['field_publication_type']['#items'][0]['taxonomy_term']->name);
	if(empty($content['group_poublication_details']['field_publication_date']['#items'][0]['value'])) unset($content['group_poublication_details']['field_publication_date']);
	if(empty($content['group_poublication_details']['field_publication_type']['#items'][0]['taxonomy_term']->name)) unset($content['group_poublication_details']['field_publication_type']);
	
	// if we're showing Journal article we do not need to show: 'Publisher details' Publisher details (Place of publication, Publisher, Publisher URL).
	if($content['group_poublication_details']['field_publication_type']['#items'][0]['taxonomy_term']->name == "Journal article") unset($content['group_publisher_details']);
	
	if(empty($content['group_poublication_details']['field_thesis_type']['#items'][0]['value'])) unset($content['group_poublication_details']['field_thesis_type']);
	if(empty($content['group_poublication_details']['field_canonical_journal_title']['#items'][0]['value'])) unset($content['group_poublication_details']['field_canonical_journal_title']);
	if(empty($content['group_poublication_details']['field_book_title_or_report_title']['#items'][0]['value'])) unset($content['group_poublication_details']['field_book_title_or_report_title']);
	
	// if there is "Journal" specified we do not display "Journal / published proceedings"
	if(!empty($content['group_poublication_details']['field_canonical_journal_title']['#items'][0]['value'])) unset($content['group_poublication_details']['field_canonical_journal_title']);
		
	if(empty($content['group_poublication_details']['field_journal_or_published_proce']['#items'][0]['value'])) unset($content['group_poublication_details']['field_journal_or_published_proce']);
	if(empty($content['group_poublication_details']['field_volume']['#items'][0]['value'])) unset($content['group_poublication_details']['field_volume']);
	if(empty($content['group_poublication_details']['field_issue']['#items'][0]['value'])) unset($content['group_poublication_details']['field_issue']);
	if(empty($content['group_poublication_details']['field_start_page']['#items'][0]['value'])) unset($content['group_poublication_details']['field_start_page']);
	if(empty($content['group_poublication_details']['field_end_page']['#items'][0]['value'])) unset($content['group_poublication_details']['field_end_page']);
	if(empty($content['group_poublication_details']['field_issn']['#items'][0]['value'])) unset($content['group_poublication_details']['field_issn']);
	if(empty($content['group_poublication_details']['field_doi']['#items'][0]['value'])) unset($content['group_poublication_details']['field_doi']);
	if(empty($content['group_poublication_details']['field_editors_or_supervisors']['#items'][0]['value'])) unset($content['group_poublication_details']['field_editors_or_supervisors']);
	
	if(empty($content['group_poublication_details']['field_application_number_article']['#items'][0]['value'])) unset($content['group_poublication_details']['field_application_number_article']);
	if(empty($content['group_poublication_details']['field_awarded_date_or_conference']['#items'][0]['value'])) unset($content['group_poublication_details']['field_awarded_date_or_conference']);

	
	if(empty($content['group_publisher_details']['field_publisher']['#items'][0]['value']) && 	empty($content['group_publisher_details']['field_place_of_publication']['#items'][0]['value']) &&	empty($content['group_publisher_details']['field_publisher_url']['#items'][0]['value']) ) unset($content['group_publisher_details']);
	if(empty($content['group_publisher_details']['field_publisher']['#items'][0]['value'])) unset($content['group_publisher_details']['field_publisher']);
	if(empty($content['group_publisher_details']['field_place_of_publication']['#items'][0]['value'])) unset($content['group_publisher_details']['field_place_of_publication']);
	if(empty($content['group_publisher_details']['field_publisher_url']['#items'][0]['value']))  unset($content['group_publisher_details']['field_publisher_url']);

	if(empty($content['field_awarded_date_or_conference']['#items'][0]['value'])) unset($content['field_awarded_date_or_conference']);
	if(empty($content['field_sub_types']['field_volume']['#items'][0]['value'])) unset($content['field_sub_types']);
	if(empty($content['group_abstract']['field_abstract']['#items'][0]['value'])) unset($content['group_abstract']);
	
	if(empty($content['field_full_text']['#items'][0]['value'])) unset($content['field_full_text']);
	if(empty($content['field_conference_place_country_l']['#items'][0]['value'])) unset($content['field_conference_place_country_l']);
	if(empty($content['field_name_of_conference_present']['#items'][0]['value'])) unset($content['field_name_of_conference_present']);
	if(empty($content['field_application_number_article']['#items'][0]['value'])) unset($content['field_application_number_article']);
	if(empty($content['field_authors']['#items'][0]['value'])) unset($content['field_authors']);

	  
	print render($content);
    ?>
  </div>
  
  <div class="clearfix">
    <?php if (!empty($content['links'])): ?>
      <nav class="links node-links clearfix"><?php print render($content['links']); ?></nav>
    <?php endif; ?>

    <?php print render($content['comments']); ?>
  </div>
</article>
