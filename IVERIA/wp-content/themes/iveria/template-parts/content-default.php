<main id="main-wrapper" class="position-relative">
<div class="container">
    <div class="row fs-2 justify-content-center my-5 default-content-raw">
        <?php 
        if(get_the_content()) {
                the_content();
        }else {
            echo 'your content goes here';
        } 
        ?>
    </div>
</div>
</main>