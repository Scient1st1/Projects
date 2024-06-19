<?php
// no direct access
defined ( '_JEXEC' ) or die ( 'Restricted access' ) ;
$ItemID = wsHelper::getItemid ( 'search' , 'search' ) ;
$URL = JRoute::_ ( 'index.php?option=search&Itemid=' . $ItemID ) ;
$doc = JFactory::getDocument () ;
$js = "function actio_onblur() 
      {
      var value = $('.mod_search_searchword').val();
        if ( value === '')
        {
          $('.mod_search_searchword').val(".'"'. $text.'"'.")  ;
        }
      } 
      function actio_onfocus() 
      {
      var value = $('.mod_search_searchword').val();
        if ( value === ".'"'. $text.'"'.")
        {
          $('.mod_search_searchword').val('');
        }
      } 
";
//$doc->addScriptDeclaration ( $js ) ;
$js_2 = "
  function check_form(form) 
  {
  form = $(form).closest('form');
    var value = $(form).find('.mod_search_searchword').val(); 
    
    if (value === '' || value === ".'"'. $text.'"'.")
    {
      return false;
    }
    else
    {
      $(form).submit();
    }
  }
";
$doc->addScriptDeclaration ( $js_2 ) ;

$class = '' ;
if ( $kbd > 0 )
{
  $class = 'kbd' ;
}
?>
<form action="<?php echo $URL ; ?>" method="post" id="search_form">
  <div class="search_area<?php echo $params->get ( 'moduleclass_sfx' ) ?>">
    <div class="search_input">
      <input name="searchword" id="mod_search_searchword" maxlength="20" class="<?php echo $class ; ?> inputbox mod_search_searchword placeholder" title="<?php echo $text ; ?>" type="text" value="" />
    </div>
    <div class="search_but">
      <input type="submit" value="" class="search_button" onclick="check_form(this);return false ;" />
<!--      <input type="submit" value="" class="search_button" onclick="this.form.searchword.focus();" />-->
    </div>
    <div class="cls"></div>
  </div>
  <input type="hidden" name="task"   value="search" />
</form>