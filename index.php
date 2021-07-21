<?php require('components/head.inc.php');?>
<?php include('components/navbar.inc.php');?>
<?php include('components/header.inc.php');?>
<?php include('components/projects.inc.php');?>
<?php include('components/about.inc.php');?>
<?//php include('components/icons.inc.php');?>
<?php include('components/gallery.inc.php');?>
<?php include('components/services.inc.php');?>
<?php include('components/contact.inc.php');?>
<?php include('components/footer.inc.php')?>
<script>
    $(document).ready(function () {
        $(".card__button").click(function () {
            $(".page-header").animate(
                backgroundColor: "#000"
            )
        })
    })
</script>