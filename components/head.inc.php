<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
        content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="css/bootstrap.css">
    <title>Jacek Maciejak</title>
    <link rel="stylesheet"
        href="css/styles.css">

    <link rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Allerta+Stencil"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js">
    </script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"
        referrerpolicy="no-referrer"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js">
    </script>
    <script>
        window.addEventListener("load", function () {
            const loader = document.querySelector(".loader");
            loader.className += " hidden";
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js">
    </script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js">
    </script>
    <script src="js/animations.js"></script>
    <!-- <script>
        function animateFrom(elem, direction) {
            direction = direction || 1;
            let x = 0,
                y = direction * 100;
            if (elem.classList.contains("gs_reveal_fromLeft")) {
                x = -500;
                y = 0;
            } else if (elem.classList.contains("gs_reveal_fromRight")) {
                x = 500;
                y = 0;
            } else if (elem.classList.contains("opacity_anim")) {
                x = 0;
                y = 0;
            }
            elem.style.transform = "translate(" + x + "px, " + y + "px)";
            elem.style.opacity = "0";
            gsap.fromTo(elem, {
                x: x,
                y: y,
                autoAlpha: 0
            }, {
                duration: 2,
                x: 0,
                y: 0,
                autoAlpha: 1,
                ease: "expo",
                overwrite: "auto"
            });
        }

        function hide(elem) {
            gsap.set(elem, {
                autoAlpha: 0
            });
        }

        document.addEventListener("DOMContentLoaded", function () {
            gsap.registerPlugin(ScrollTrigger);

            gsap.utils.toArray(".gs_reveal").forEach(function (elem) {
                hide(
                    elem
                ); // assure that the element is hidden when scrolled into view

                ScrollTrigger.create({
                    trigger: elem,
                    onEnter: function () {
                        animateFrom(elem)
                    },
                    onEnterBack: function () {
                        animateFrom(elem, -1)
                    },
                    onLeave: function () {
                        hide(elem)
                    } // assure that the element is hidden whenscrolled into view
                });
            });
        });
    </script> -->
</head>

<body>
    <div class="loader">
        <img src="img/loading.gif"
            alt="Loading...">
    </div>