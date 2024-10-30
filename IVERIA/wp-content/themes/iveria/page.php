<?php
get_header();

$pageContact = array(11);
$pageAbout = array(7);
$pageProducts = array(9);


if(is_page($pageContact)){
    get_template_part('template-parts/content','contact');
}elseif(is_page($pageAbout)){
    get_template_part('template-parts/content','about');
}else{
    get_template_part('template-parts/content','default');
}
get_footer();

?>

