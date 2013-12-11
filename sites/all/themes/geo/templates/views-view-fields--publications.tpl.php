<?php

$AUTHORS = '';
$YEAR = '';
$PATENT_NUM = '';
$TITLE = '';
$EDITOR = '';
$JOURNAL_NAME = '';
$CONF_NAME = '';
$BOOK_TITLE = '';
$REPORT_TITLE = '';
$REPORT_NUMBER = '';
$THESIS_TYPE = '';
$AWARDING_BODY = '';
$VOLUME = '';
$ISSUE = '';
$PAGE1 = '';
$PAGE2 = '';
$PUBLISHER = '';
$PLACE = '';
$FULL_TEXT_LINK = '';

$TYPE = '';


foreach($fields as $field){

	$class = $field -> class;
		print("$class | ");
	switch($class){
		case "field-authors":
		$AUTHORS = $field->content;
		break;
		case "field-publication-date":
		$YEAR = $field->content;
		break;
		case "field-patent-number":
		$PATENT_NUM = $field->content;
		break;
		case "title":
		$TITLE = $field->content;
		break;
		case "field-editors-or-supervisors":
		$EDITOR = $field->content;
		break;
		case "field-canonical-journal-title":
		$JOURNAL_NAME = $field->content;
		break;
		case "field-journal-or-published-proce":
		$CONF_NAME = $field->content;
		break;
		case "field-book-title-or-report-title":
		$BOOK_TITLE = $field->content;
		$REPORT_TITLE = $field->content;
		break;
		case "field-application-number-article":
		$REPORT_NUMBER = $field->content;
		break;
		case "field-thesis-type":
		$THESIS_TYPE = $field->content;
		break;
		case "field-name-of-conference-present":
		$AWARDING_BODY = $field->content;
		break;
		case "field-volume":
		$VOLUME = $field->content;
		break;
		case "field-issue":
		$ISSUE = $field->content;
		break;
		case "field-start-page":
		$PAGE1 = $field->content;
		break;
		case "field-end-page":
		$PAGE2 = $field->content;
		break;
		case "field-publisher":
		$PUBLISHER = $field->content;
		break;
		case "field-conference-place_country-l":
		$PLACE = $field->content;
		break;
		case "field-place-of-publication":
		$PLACE = $field->content;
		break;
		case "field-full-text":
		$FULL_TEXT_LINK = $field->content;
		break;
		case "field-publication-type":
		$TYPE = strip_tags($field->content);
		break;
		case "field-abstract":
		$ABSTRACT = $field->content;
		break;
	}
}
$content ='';
switch($TYPE){
	case "Journal article":

	if(!empty($AUTHORS)){
		$content = $content . "$AUTHORS ";
	}
	if(!empty($YEAR)){
		$content = $content . "($YEAR). ";
	}
	if(!empty($TITLE)){
		$content = $content . "$TITLE. ";	
	}
	if(!empty($JOURNAL_NAME)){
		$content = $content . "<i>$JOURNAL_NAME</i>, ";
	}
	if(!empty($VOLUME)){
		$content = $content . "$VOLUME ($ISSUE), ";
	}
	if(!empty($PAGE1) && !empty($PAGE2)){
		$content = $content . "pp. $PAGE1-$PAGE2. ";
	}
	if(!empty($FULL_TEXT_LINK)){
		$content = $content . "(<a href=\"$FULL_TEXT_LINK\">Full Text</a>).";
	}
	if(strpos(substr($content, -2),',') !== false){
		$content = rtrim($content, ", ");
	}
	
	break;
	case "Conference":
	if(!empty($AUTHORS)){
		$content = $content . "$AUTHORS ";
	}
	if(!empty($YEAR)){
		$content = $content . "($YEAR). ";
	}
	if(!empty($TITLE)){
		$content = $content . "$TITLE. ";	
	}
	if(!empty($CONF_NAME)){
		$content = $content . "In <i>$CONF_NAME</i> ";
	}
	if(!empty($PAGE1) && !empty($PAGE2)){
		$content = $content . "(pp. $PAGE1-$PAGE2). ";
	}
	if(!empty($PLACE)){
		$content = $content . "$PLACE. ";
	}
	if(!empty($FULL_TEXT_LINK)){
		$content = $content . "(<a href=\"$FULL_TEXT_LINK\">Full Text</a>).";
	}
	break;
	case "Chapter":
	if(!empty($AUTHORS)){
		$content = $content . "$AUTHORS ";
	}
	if(!empty($YEAR)){
		$content = $content . "($YEAR). ";
	}
	if(!empty($TITLE)){
		$content = $content . "$TITLE. ";	
	}
	if(!empty($EDITOR)){
		$content = $content . "In $EDITOR (Ed.), ";
	}
	if(!empty($BOOK_TITLE)){
		$content = $content . "<i>$BOOK_TITLE</i> ";
	}
	if(!empty($VOLUME) && !empty($PAGE1) && !empty($PAGE2)){
		$content = $content . "(Vol. $VOLUME, pp. $PAGE1-$PAGE2). ";
	}
	else if(!empty($PAGE1) && !empty($PAGE2)){
		$content = $content . "pp. $PAGE1-$PAGE2. ";
	}
	else if(!empty($VOLUME)){
		$content = $content . "(Vol. $VOLUME). ";
	}
	if(!empty($PUBLISHER) && !empty($PLACE)){
		$content = $content . "$PUBLISHER: $PLACE. ";
	}
	if(!empty($FULL_TEXT_LINK)){
		$content = $content . "(<a href=\"$FULL_TEXT_LINK\">Full Text</a>).";
	}
	if(strpos(substr($content, -2),',') !== false){
		rtrim($content, ", ");
	}
	break;
	case "Report":
	if(!empty($AUTHORS)){
		$content = $content . "$AUTHORS ";
	}
	if(!empty($YEAR)){
		$content = $content . "($YEAR). ";
	}
	if(!empty($TITLE)){
		$content = $content . "<i>$TITLE</i>, ";	
	}
	if(!empty($REPORT_TITLE)){
		$content = $content . "<i>$REPORT_TITLE</i> ";
	}
	if(!empty($REPORT_NUMBER)){
		$content = $content . "($REPORT_NUMBER). ";
	}
	if(!empty($PUBLISHER) && !empty($PLACE)){
		$content = $content . "$PUBLISHER: $PLACE. ";
	}
	if(!empty($FULL_TEXT_LINK)){
		$content = $content . "(<a href=\"$FULL_TEXT_LINK\">Full Text</a>).";
	}
	
	break;
	case "Book":
	if(!empty($AUTHORS)){
		$content = $content . "$AUTHORS ";
	}
	if(!empty($YEAR)){
		$content = $content . "($YEAR). ";
	}
	if(!empty($TITLE)){
		$content = $content . "$TITLE. ";	
	}
	if(!empty($PUBLISHER) && !empty($PLACE)){
		$content = $content . "$PUBLISHER: $PLACE. ";
	}
	if(!empty($FULL_TEXT_LINK)){
		$content = $content . "(<a href=\"$FULL_TEXT_LINK\">Full Text</a>).";
	}

	break;
	case "Thesis / Dissertation":
	if(!empty($AUTHORS)){
		$content = $content . "$AUTHORS ";
	}
	if(!empty($YEAR)){
		$content = $content . "($YEAR). ";
	}
	if(!empty($TITLE)){
		$content = $content . "$TITLE. ";	
	}
	if(!empty($THESIS_TYPE) && !empty($AWARDING_BODY)){
		$content = $content . "($THESIS_TYPE, $AWARDING_BODY). ";
	}
	if(!empty($FULL_TEXT_LINK)){
		$content = $content . "(<a href=\"$FULL_TEXT_LINK\">Full Text</a>).";
	}

	break;
	case "Patent":
	if(!empty($AUTHORS)){
		$content = $content . "$AUTHORS ";
	}
	if(!empty($YEAR)){
		$content = $content . "($YEAR). ";
	}
	if(!empty($PATENT_NUM)){
		$content = $content . "Patent $PATENT_NUM,";
	}
	if(!empty($TITLE)){
		$content = $content . "$TITLE";	
	}
	
	break;
	default: 
	print("$TYPE");
	break;
}


if(!empty($content)) {
	
	if(!empty($ABSTRACT)){
		$content = $content . ", Abstract: <i>" . "$ABSTRACT" . "</i>";
		$content = str_replace(". ,", ",", $content);
	}
	else{
		$content = rtrim($content,". ");
		$content = rtrim($content,", ");
		$content = $content . ".";
	}
	print("$content"); 	
}




?>