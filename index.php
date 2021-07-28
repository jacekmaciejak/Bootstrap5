<?php require('components/head.inc.php');?>
<?php include('components/navbar.inc.php');?>
<?php include('components/header.inc.php');?>
<?php include('components/projects.inc.php');?>
<?php include('components/about.inc.php');?>
<?php include('components/technology.inc.php');?>
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
<script>
    /*JavaScript Function closing menu after click on menu item/link */
    (function () {
        function uncheckNav() {
            document.getElementById("navi-toggle").checked = false;
        }

        function setNavOnclick() {
            Array.from(
                    document.getElementsByClassName("navigation__link")
                )
                .map(navLink => navLink.addEventListener("click",
                    uncheckNav));
        }

        function main() {
            setNavOnclick();
        }

        main();
    })()
</script>
<script>
    /*Active Page Link Button Highlight*/
    $(document).ready(function () {
        $('ul li a').click(function () {
            $('li a').removeClass("active");
            $(this).addClass("active");
        })
    })
    $(document).ready(function () {
        $('.logo__link').click(function () {
            $('li a').removeClass("active");
        })
    })
</script>