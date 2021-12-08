<?php require('components/head.inc.php');?>
<?php include('components/navbar.inc.php');?>
<?php include('components/header.inc.php');?>
<?php include('components/projects.inc.php');?>
<?php include('components/about.inc.php');?>
<?php include('components/technology.inc.php');?>
<?php include('components/services.inc.php');?>
<?php include('components/contact.inc.php');?>
<?php include('components/footer.inc.php');?>
<script>
    // $(document).ready(function () {
    //     $(".card__button").click(function () {
    //         $(".page-header").animate(
    //             backgroundColor: "#000"
    //         )
    //     })
    // })
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

<script>
    //---------------------------------------
    //Show and hide projects after button click
    //----------------------------------------
    const wordpressBtn = document.getElementById('wordpress')
    const reactBtn = document.getElementById('react')
    const jsBtn = document.getElementById('js')
    const bootstrapBtn = document.getElementById('bootstrap')
    const allProjectsBtn = document.getElementById('allprojects')
    const deleteButton = document.getElementById('delete')

    //Function which add class "hide project" to hide active cards
    const hideCards = () => {
        const projects = [...document.querySelectorAll(
            '.wordpress,.react,.js,.bootstrap')];
        projects.forEach(project => {
            project.classList.add('hide--project')
            project.classList.remove('show--project')
        })
    }

    wordpressBtn.addEventListener('click', () => {
        const projects = document.querySelectorAll(
            '.wordpress');
        hideCards();
        projects.forEach(project => {
            project.classList.toggle('hide--project')
            project.classList.add('show--project')
        })

    })
    reactBtn.addEventListener('click', () => {
        const projects = document.querySelectorAll(
            '.react');
        hideCards();
        projects.forEach(project => {
            project.classList.toggle('hide--project')
            project.classList.add('show--project')

        })
    })
    jsBtn.addEventListener('click', () => {
        const projects = document.querySelectorAll(
            '.js');
        hideCards();
        projects.forEach(project => {
            project.classList.toggle('hide--project')
            project.classList.add('show--project')

        })
    })
    bootstrapBtn.addEventListener('click', () => {
        const projects = document.querySelectorAll(
            '.bootstrap');
        hideCards();
        projects.forEach(project => {
            project.classList.toggle('hide--project')
            project.classList.add('show--project')

        })
    })
    allProjectsBtn.addEventListener('click', () => {
        const projects = [...document.querySelectorAll(
            '.wordpress,.react,.js,.bootstrap')];
        hideCards();
        projects.forEach(project => {
            // project.classList.add('hide')
            project.classList.toggle('hide--project')
            project.classList.add('show--project')
        })

    })
    deleteButton.addEventListener('click', hideCards)
</script>