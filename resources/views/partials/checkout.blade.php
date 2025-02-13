<section class="checkout">
    <div class="checkout__content col-6">
        <div class="checkout__content__order-addres col-lg-8 pr-4 pl-0">
            <h1>Kasa</h1>
            <div class="checkout__content__form">
                <h3>Adres Dostawy</h3>
                <form>
                    <div class="checkout__content__form__row">
                        <div class="form-box col-lg">
                            <input type="text" placeholder="Imię" class="form-control" id="exampleInputName">
                        </div>
                        <div class="form-box col-lg">
                            <input type="text" placeholder="Nazwisko" class="form-control" id="exampleInputSurName">
                        </div>
                    </div>
                    <div class="checkout__content__form__row">
                        <div class="form-box col-lg">
                            <input type="text" placeholder="Ulica, nr domu/ nr mieszkania" class="form-control" id="exampleInputAddress">                            
                        </div>
                        <div class="form-box col-lg">
                            <input type="email" placeholder="Email" class="form-control" id="exampleInputEmail">
                        </div>
                    </div>
                    <div class="checkout__content__form__row">
                        <div class="form-box col-lg">
                            <input type="number" placeholder="Kod pocztowy" class="form-control" id="exampleInputPostCode">
                        </div>
                        <div class="form-box col-lg">
                            <input type="text" placeholder="Miejscowość" class="form-control" id="exampleInputCity">
                        </div>
                    </div>
                    <div class="checkout__content__form__row">
                        <div class="form-box col-lg">
                            <textarea class="form-control" placeholder="Dodatkowe informacje (opcjonalnie)" id="exampleInputTextArea"></textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="checkout__content__payments col-lg-4 pl-5 pr-0">
            <h3>Płatność</h3>
            <div class="checkout__content__payments__options">
                <h4>Wybierz metodę płatności</h4>
                <div class="checkout__content__payments__row">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="radioPaymentBlik">
                        <label class="form-check-label" for="radioPaymentBlik">
                            Blik
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="radioPaymentCard">
                        <label class="form-check-label" for="radioPaymentCard">
                            Karta płatnicza
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="radioPaymentFastTransfer">
                        <label class="form-check-label" for="radioPaymentFastTransfer">
                            Szybki przelew
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="radioPaymentPayPal">
                        <label class="form-check-label" for="radioPaymentPayPal">
                            PayPal
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="radioPaymentCash">
                        <label class="form-check-label" for="radioPaymentCash">
                            Za pobraniem
                        </label>
                    </div>
                </div>
            </div>
            <div class="checkout__content__payments__btn">
                <a href="<?php echo site_url('/confirm'); ?>">Podsumowanie</a>
            </div>
        </div>
    </div>
</section>