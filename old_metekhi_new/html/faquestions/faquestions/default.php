<?php
//sitemap template



defined('_JEXEC') or die();


$items = $this->items;
?>


<?php
echo '<div class = "faqs_body">';
?>

<div class="container">

    <?php
    if ($this->params->get('show_page_title', 1)) {
        ?>
        <div class="page_title">
            <?php echo $this->params->get('page_title'); ?>
        </div>
        <?php
    }
    ?>


    <?php
    $c = -10;
    foreach ($items as $item) {
        if ($c != $item->cattitle) {
            echo '<div class = "faqs_cattitle">';
            echo $item->cattitle;
            echo '<span>';
            echo $item->catdesc;
            echo '</span>';
            echo '</div>';

            $c = $item->cattitle;
        }

        echo '<div class = "question_item">';
        echo '<span class = "question_icon"> </span>';
        echo '<div class = "question">';
        echo $item->question;
        echo '</div>';
        echo '<div class = "answer">';
        echo $item->answer;
        echo '</div>';
        echo '</div>';
    }
    echo '</div>';
    ?>
</div>