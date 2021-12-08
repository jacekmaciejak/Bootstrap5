<?php

//reCaptcha v3
define('SITE_KEY','6LcZy3MdAAAAAGNmc0XSv33zX9g_KAiOViPJMPRo');
define('SECRET_KEY','6LcZy3MdAAAAADKEQos6Yn41A4lcIzsdJ4r26_Z3');
?>
<script
    src="https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY ?>">
</script>
<?php
if(isset($_POST['submitted'])){

$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY. "&response={$_POST['g-recaptcha-response']}");
$return=json_decode($response);

        if($return->success == true && $return->score > 0.5){
        $hasError = false;
        }else{
        $googleError = 'reCAPTCHA Error!';
        $hasError = true;
        };

    if(trim($_POST['name']) === ''){
    $nameError='Proszę wpisać imię';
    $hasError=true;
    } else{
    $name=trim($_POST['name']);
    };

    if(trim($_POST['email']) === ''){
    $emailError='Proszę wpisać adres email';
    $hasError=true;
    } elseif
    (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i",
    trim($_POST['email']))){
    $emailError='Proszę wpisać prawidłowy adres email';
    $hasError=true;
    } else{
    $email=trim($_POST['email']);
    }

    if(trim($_POST['message']) === ''){
    $textError='Proszę wpisać wiadomość';
    $hasError=true;
    } else {
            if(function_exists('stripslashes')){
            $text=stripslashes(trim($_POST['message']));
            }else{
            $text=trim($_POST['message']);
    }}

    if(!isset($hasError)) {
        $emailTo = 'jacekmaciejak@poczta.fm';
        $subject = '[Wiadomość] Od '.$name;
        $body = "Imię: $name \n\nEmail: $email \n\nWiadomość: $text";
        $headers = 'Od: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Odpowiedz: ' . $email;
        $headers .= "Content-Type:text/plain;charset=utf-8";

        mail($emailTo, $subject, $body, $headers);

 };

        if(!$hasError){
        print "<meta http-equiv=\"refresh\"content=\"0;URL=confirm.php\">";
        }
        else{
            print "<meta http-equiv=\"refresh\"content=\"0;URL=index.php\">";
        };

}

    $nameError=isset($nameError) ? $nameError : '';
    $emailError=isset($emailError) ? $emailError : '';
    $textError=isset($textError) ? $textError : '';
    $googleError=isset($googleError) ? $googleError : '';
    $submittedSuccess=isset($submittedSuccess) ? $submittedSuccess : '';

?>
<section class="contact"
    id="kontakt">
    <div class="container py-5">
        <div class="row align-items-center justify-contend-center pb-5">
            <div
                class="d-flex justify-content-center align-items-center mb-1 mb-md-5">
                <hr class="w-25"
                    style="height:1px; color:#05cdfc; opacity:1">
                <h1 class="text-center text-uppercase px-1 px-md-5">
                    kontakt</h1>
                <hr class="w-25"
                    style="height:1px; color:#05cdfc; opacity:1">
            </div>
            <div class="
                 col-md-7 order-2 order-md-1 gs_reveal gs_reveal_fromLeft">

                <form class="form"
                    id="form"
                    autocomplete="off"
                    method="post">
                    <div class="form__group">
                        <span class="error"><?php $nameError ?></span>
                        <input type="text"
                            class="form__input"
                            placeholder="Imię i nazwisko"
                            id="name"
                            name="name" />
                        <label for="name"
                            class="form__label">Imię i nazwisko</label>
                    </div>
                    <div class="form__group">
                        <span class="error"><?php $emailError?></span>
                        <input type="email"
                            class="form__input"
                            placeholder="E-mail"
                            id="email"
                            name="email" />
                        <label for="email"
                            class="form__label">Email</label>
                    </div>
                    <div class="form__group">
                        <span class="error"><?php $textError?></span>
                        <textarea name="message"
                            id="message"
                            cols="50"
                            rows="6"
                            class="form__input"
                            placeholder="Wiadomość"></textarea>
                    </div>
                    <div class="form__group">
                        <input type="hidden"
                            name="submitted"
                            id="submitted"
                            value="true">
                        <input type="hidden"
                            id="g-recaptcha-response"
                            name="g-recaptcha-response">
                        <button class="email__button g-recaptcha"
                            type="submit"
                            data-sitekey="reCAPTCHA_site_key">
                            Wyślij &rarr;
                        </button>
                    </div>
                    <span class="error"><?php $googleError ?></span>
                </form>
            </div>
            <div
                class="col-md-5 order-1 order-md-2 gs_reveal gs_reveal_fromRight">
                <img src="img/email.svg"
                    class="img-fluid w-100"
                    alt="email">
            </div>
        </div>
    </div>
</section>
<script>
    grecaptcha.ready(function () {
        grecaptcha.execute("'.SITE_KEY.'", {
            action: "home"
        }).then(function (token) {
            document.getElementById(
                    "g-recaptcha-response")
                .value = token;
        });
    });
</script>;