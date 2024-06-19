<?php
// @version $Id: default.php 9837 2008-01-03 16:49:24Z tsai146 $
defined('_JEXEC') or die('Restricted access');
?>
<div class="container">
    <div id="search_result_content">
        <div class="page_title">
            <div class="page_title_in">
                <span>
                    <h1><?php echo $this->escape($this->params->get('page_title')) ?></h1>
                </span>
            </div>
        </div>
        <div class="page_body">
            <div id="page_search">  
                <?php
                if (!$this->error) :
                    echo $this->loadTemplate('results');
                else :
                    echo $this->loadTemplate('error');
                endif;
                ?>
            </div>
        </div>
<?php //echo  $this->loadTemplate('form');  ?>
    </div>
</div>