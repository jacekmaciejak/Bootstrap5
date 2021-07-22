<?php require('components/head.inc.php');?>
<?php require('components/navbar.inc.php');?>
<section id='blog'
    class="container col-md-12 blog d-flex align-items-center">
    <div
        class="row h-75 text-center mt-5 d-grid justify-content-center align-items-center flex-wrap">
        <div
            class="blog__wrapper d-flex align-items-center justify-content-center flex-wrap">
            <figure class='col-md-6'>
                <img class='img-fluid'
                    src="img/blog.svg"
                    alt="">
            </figure>
            <h1 class='col-md-6'>STRONA W BUDOWIE</h1>
        </div>
        <?php require('components/projects.inc.php');?>
    </div>
</section>
<?php include('components/footer.inc.php')?>