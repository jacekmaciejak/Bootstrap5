<section class="contact"
    id="kontakt">
    <div class="container pb-5">
        <div class="row align-items-center justify-contend-center pb-5">
            <div class="
                col-md-6">
                <form class="form"
                    autocomplete="off"
                    method="post"
                    action="kontakt.php">
                    <div class="form__group">
                        <input type="text"
                            class="form__input"
                            placeholder="Imię i nazwisko"
                            id="name"
                            name="name"
                            required />
                        <label for="name"
                            class="form__label">Imię i nazwisko</label>
                    </div>
                    <div class="form__group">
                        <input type="email"
                            class="form__input"
                            placeholder="E-mail"
                            id="email"
                            name="email"
                            required />
                        <label for="email"
                            class="form__label">Email</label>
                    </div>
                    <div class="form__group">
                        <textarea name="message"
                            id="message"
                            cols="50"
                            rows="6"
                            class="form__input"
                            placeholder="Wiadomość"
                            required></textarea>
                    </div>
                    <div class="form__group">
                        <button class="email__button"
                            name="submit"
                            type="submit">
                            Wyślij &rarr;
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <img src="img/email.svg"
                    class="img-fluid w-100"
                    alt="email">
            </div>
        </div>
    </div>
</section>