<section class="cart">
    <div class="cart__content col-6">
        <div class="cart__content__details-order col-lg-8 pr-4 pl-0">
            <h1>Mój koszyk</h1>
            <div class="cart__content__row">
                <div class="cart__content__details-order__product-info col-6 p-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-header.jpg" />
                    <div class="cart__content__details-order__product-row">
                        <a href="#"><p>Jestem Produktem</p></a>
                        <span class="cart__content__details-order__product-row--price">20,00 zł</span>
                        <p class="cart__content__details-order__product-row--color">Kolor: <span>Fioletowy</span></p>
                    </div>
                </div>
                <div class="cart__content__details-order__actions col-6 p-0">
                    <div class="cart__content__details-order__quantity">
                        <button>
                            <svg viewBox="0 0 24 24" fill="currentColor" width="16" height="16" class="sXPr0ik"><path fill-rule="evenodd" d="M20,12 L20,13 L5,13 L5,12 L20,12 Z"></path></svg>                        </button>
                        <input type="text" class="form-control-quantity" id="quantityOfProduct" value="1">
                        <button>
                            <svg viewBox="0 0 24 24" fill="currentColor" width="16" height="16" class="sXPr0ik"><path fill-rule="evenodd" d="M13,5 L13,12 L20,12 L20,13 L13,13 L13,20 L12,20 L11.999,13 L5,13 L5,12 L12,12 L12,5 L13,5 Z"></path></svg>                        
                        </button>
                    </div>
                    <span>440,00 zł</span>
                    <svg viewBox="0 0 24 24" fill="currentColor" width="24" height="24"><path fill-rule="evenodd" d="M13.5,3 C14.327,3 15,3.673 15,4.5 L15,4.5 L15,5 L19,5 L19,6 L18,6 L18,17.5 C18,18.879 16.878,20 15.5,20 L15.5,20 L7.5,20 C6.122,20 5,18.879 5,17.5 L5,17.5 L5,6 L4,6 L4,5 L8,5 L8,4.5 C8,3.673 8.673,3 9.5,3 L9.5,3 Z M17,6 L6,6 L6,17.5 C6,18.327 6.673,19 7.5,19 L7.5,19 L15.5,19 C16.327,19 17,18.327 17,17.5 L17,17.5 L17,6 Z M10,9 L10,16 L9,16 L9,9 L10,9 Z M14,9 L14,16 L13,16 L13,9 L14,9 Z M13.5,4 L9.5,4 C9.224,4 9,4.225 9,4.5 L9,4.5 L9,5 L14,5 L14,4.5 C14,4.225 13.776,4 13.5,4 L13.5,4 Z"></path></svg>
                </div>
            </div>
            <div class="cart__content__actions">
                <button class="cart__content__actions__btn"  data-target="input-group">
                    <div class="cart__content__actions__row">
                        <svg viewBox="0 0 14 16" fill="currentColor" width="14" height="16"><g id="final-cart" stroke="none" fill="none" stroke-width="1" fill-rule="evenodd"><g id="general-layout" transform="translate(-515 -839)" fill="currentColor"><g id="coupon-icon" transform="rotate(30 -1300.653 1393.349)"><path d="M1,14.0046024 C0.999339408,13.9996515 9.00460243,14 9.00460243,14 C8.99965149,14.0006606 9,5.41421356 9,5.41421356 L5,1.41421356 L1,5.41421356 L1,14.0046024 Z M-2.72848411e-12,5 L5,-4.66116035e-12 L10,5 L10,14.0046024 C10,14.5543453 9.5443356,15 9.00460243,15 L0.995397568,15 C0.445654671,15 -2.72848411e-12,14.5443356 -2.72848411e-12,14.0046024 L-2.72848411e-12,5 Z" id="Rectangle-6" fill-rule="nonzero"></path><circle id="Oval-2" cx="5" cy="5" r="1"></circle></g></g></g></svg>
                        <p>Wprowadź kod promocyjny</p>
                    </div>
                </button>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="np. RABAT50" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">Zastosuj</span>
                </div>
                <button class="cart__content__actions__btn"  data-target="form-float">
                    <div class="cart__content__actions__row">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" class="bqcF4y"><g fill="none" fill-rule="evenodd" stroke="none" stroke-width="1"><g transform="translate(-515 -882)"><g transform="translate(515 882)"><path stroke="currentColor" d="M.5.5h7.778L11.5 3.737V12.5H.5V.5z"></path><path stroke="currentColor" d="M10.793 3.5H8.5V1.207L10.793 3.5z"></path><path fill="currentColor" d="M3 3H6V4H3z"></path><path fill="currentColor" d="M3 6H9V7H3z"></path><path fill="currentColor" d="M3 9H9V10H3z"></path></g></g></g></svg>
                        <p>Dodaj komentarz</p>
                    </div>
                </button>
                <div class="form-float">
                    <textarea class="form-control" placeholder="np. Proszę zostawić zamówienie pod drzwiami" id="floatingTextarea"></textarea>
                </div>
            </div>
        </div>
        <div class="cart__content__resume-order col-lg-4 pl-5 pr-0">
            <h2>Podsumowanie zamówienia</h2>
            <div class="cart__content__resume-order__box">
                <div class="cart__content__resume-order__row">
                    <h3>Razem</h3>
                    <span>440,00 zł</span>
                </div>
                <div class="cart__content__resume-order__row">
                    <h3>Dostawa</h3>
                    <span>za darmo</span>
                </div>
                <div class="cart__content__resume-order__row">
                    <button>Polska</button>
                </div>
            </div>
            <div class="cart__content__resume-order__box-last">
                <div class="cart__content__resume-order__row-last">
                    <h3>Suma</h3>
                    <span>440,00 zł</span>            
                </div>
            </div>
            <div>
                <a href="<?php echo site_url('/checkout'); ?>" class="let-order">
                    Zamówienie
                </a>
            </div>
            <div class="cart-shopping__footer__text">
                <svg width="11" height="14" viewBox="0 0 11 14" xmlns="http://www.w3.org/2000/svg" class="QXycij" data-hook="SecureCheckoutDataHook.lock"><g fill="currentColor" fill-rule="evenodd"><path d="M0 12.79c0 .558.445 1.01.996 1.01h9.008A1 1 0 0 0 11 12.79V6.01c0-.558-.445-1.01-.996-1.01H.996A1 1 0 0 0 0 6.01v6.78Z"></path><path d="M9.5 5v-.924C9.5 2.086 7.696.5 5.5.5c-2.196 0-4 1.586-4 3.576V5h1v-.924c0-1.407 1.33-2.576 3-2.576s3 1.17 3 2.576V5h1Z" fill-rule="nonzero"></path></g></svg>
                <p>Bezpieczny proces zamawiania</p>
            </div>
        </div>
    </div>
</section>

<script>

document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.cart__content__actions__btn');

    const toggleActionInputs = (event) => {
        const currentBtn = event.currentTarget;
        const targetElement = currentBtn.nextElementSibling;

        if (targetElement.style.display === 'flex') {
            targetElement.style.display = 'none';
        } else {
            document.querySelectorAll('.input-group, .form-float').forEach(element => {
                element.style.display = 'none';
            });

            targetElement.style.display = 'flex';
        }
    };

    buttons.forEach(button => {
        button.addEventListener('click', toggleActionInputs);
    });
});



</script>