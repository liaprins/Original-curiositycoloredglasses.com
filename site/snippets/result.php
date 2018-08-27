<!-- Adding <article> for semantic reasons and to hold together each result -->
<article class="result">

    
    <!-- Adding link outside date, blog post name, and postglasses image; tags link to their own tag result page -->
    <a href="<?php echo $result->url() ?>">

        <!-- Date of article, if sticking with manual input of date in panel/.txt file, only need: <?php echo $result->date('d F Y') ?> -->       
        <p id="resultdate" class="date s-textface bold">
            <time datetime="<?php echo $result->date('c') ?>" pubdate="pubdate">
                <?php echo $result->date('d F Y') ?>
            </time>
        </p>


        <!-- Postglasses image -->
        <?php if($image = $result->postglasses()->toFile()): ?>
            <img src="<?= url('assets/images/mask.svg') ?>" style="background-image: url(<?= $image->url() ?>)" alt="" id="resultglasses">
        <?php endif; ?>


        <!-- Title of article -->       
        <p id="resulttitle" class="s-display">
            <?php echo $result->title()->html() ?>
        </p>

    </a>


</article>




            