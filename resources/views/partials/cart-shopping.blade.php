<section class="cart-shopping">
    <div class="w-100">
        <div class="cart-shopping__header">
            <div class="cart-shopping__row">
                <h2>koszyk</h2>
                <p>(<span>3</span> artykuły)</p>
            </div>
            <button onclick="closeCart()">
                <svg viewBox="0 0 24 24" fill="currentColor" width="24" height="24" class="sOnyBDt">
                    <path fill-rule="evenodd" d="M19.2928932,3.99989322 L20,4.707 L12.7068932,11.9998932 L20,19.2928932 L19.2928932,20 L11.9998932,12.7068932 L4.707,20 L3.99989322,19.2928932 L11.2928932,11.9998932 L3.99989322,4.707 L4.707,3.99989322 L11.9998932,11.2928932 L19.2928932,3.99989322 Z"></path>
                </svg>
            </button>
        </div>
        <div class="cart-shopping__recipe">
            <div class="cart-shopping__row">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product.png" />
                <div>
                    <a href="#"><p>Jestem Produktem</p></a>
                    <span class="cart-shopping__row--price">20,00 zł</span>
                    <p class="cart-shopping__row--color">Kolor: <span>Fioletowy</span></p>
                    <div class="cart-shopping__recipe__quantity">
                        <button>
                            <svg viewBox="0 0 24 24" fill="currentColor" width="24" height="24" class="sdR8_Cb"><path fill-rule="evenodd" d="M20,12 L20,13 L5,13 L5,12 L20,12 Z"></path></svg>
                        </button>
                        <input type="text" class="form-control-quantity" id="quantityOfProduct" value="1">
                        <button>
                            <svg viewBox="0 0 24 24" fill="currentColor" width="24" height="24" class="sdR8_Cb"><path fill-rule="evenodd" d="M13,5 L13,12 L20,12 L20,13 L13,13 L13,20 L12,20 L11.999,13 L5,13 L5,12 L12,12 L12,5 L13,5 Z"></path></svg>                    
                        </button>
                    </div>
                </div>
            </div>
            <div class="cart-shopping__recipe__actions">
                <svg viewBox="0 0 24 24" fill="currentColor" width="24" height="24"><path fill-rule="evenodd" d="M13.5,3 C14.327,3 15,3.673 15,4.5 L15,4.5 L15,5 L19,5 L19,6 L18,6 L18,17.5 C18,18.879 16.878,20 15.5,20 L15.5,20 L7.5,20 C6.122,20 5,18.879 5,17.5 L5,17.5 L5,6 L4,6 L4,5 L8,5 L8,4.5 C8,3.673 8.673,3 9.5,3 L9.5,3 Z M17,6 L6,6 L6,17.5 C6,18.327 6.673,19 7.5,19 L7.5,19 L15.5,19 C16.327,19 17,18.327 17,17.5 L17,17.5 L17,6 Z M10,9 L10,16 L9,16 L9,9 L10,9 Z M14,9 L14,16 L13,16 L13,9 L14,9 Z M13.5,4 L9.5,4 C9.224,4 9,4.225 9,4.5 L9,4.5 L9,5 L14,5 L14,4.5 C14,4.225 13.776,4 13.5,4 L13.5,4 Z"></path></svg>
                <span>440,00 zł</span>
            </div>
        </div>
    </div>
    <div class="cart-shopping__footer w-100">
        <div class="cart-shopping__footer__bttm">
            <h3>Suma częsciowa</h3>
            <span>440,00 zł</span>
        </div>
        <p>Podatki i koszty wysyłki są obliczane przy kasie.</p>
        <div class="cart-shopping__footer__buttons">
            <a href="<?php echo site_url('/checkout'); ?>">Kasa</a>
            <a href="<?php echo site_url('/cart'); ?>">Wyświetl koszyk</a>
        </div>
        <div class="cart-shopping__footer__text">
            <svg width="11" height="14" viewBox="0 0 11 14" xmlns="http://www.w3.org/2000/svg" class="QXycij" data-hook="SecureCheckoutDataHook.lock"><g fill="currentColor" fill-rule="evenodd"><path d="M0 12.79c0 .558.445 1.01.996 1.01h9.008A1 1 0 0 0 11 12.79V6.01c0-.558-.445-1.01-.996-1.01H.996A1 1 0 0 0 0 6.01v6.78Z"></path><path d="M9.5 5v-.924C9.5 2.086 7.696.5 5.5.5c-2.196 0-4 1.586-4 3.576V5h1v-.924c0-1.407 1.33-2.576 3-2.576s3 1.17 3 2.576V5h1Z" fill-rule="nonzero"></path></g></svg>
            <p>Bezpieczny proces zamawiania</p>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const cartContainer = document.querySelector(".cart-shopping__recipe");
    const cartTotalElement = document.querySelector(".cart-shopping__footer span");

    function updateCartDisplay() {
        const cart = JSON.parse(localStorage.getItem("cart")) || [];
        cartContainer.innerHTML = "";
        let totalCost = 0;

        if (cart.length === 0) {
            cartContainer.innerHTML = "<p>Twój koszyk jest pusty.</p>";
        }

        cart.forEach((item) => {
            const itemElement = document.createElement("div");
            itemElement.classList.add("cart-shopping__row");
            itemElement.innerHTML = `
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product.png" alt="${item.name}" />
                <div>
                    <a href="#"><p>${item.name}</p></a>
                    <span class="cart-shopping__row--price">${item.price} zł</span>
                    <p class="cart-shopping__row--color">Kolor: <span>${item.color || "Brak"}</span></p>
                    <div class="cart-shopping__recipe__quantity">
                        <button class="button-recipe" onclick="updateQuantity('${item.sku}', -1)">                            <svg viewBox="0 0 24 24" fill="currentColor" width="24" height="24" class="sdR8_Cb"><path fill-rule="evenodd" d="M20,12 L20,13 L5,13 L5,12 L20,12 Z"></path></svg></button>
                        <input type="text" class="form-control-quantity" value="${item.quantity}" readonly>
                        <button class="button-recipe" onclick="updateQuantity('${item.sku}', 1)">                            <svg viewBox="0 0 24 24" fill="currentColor" width="24" height="24" class="sdR8_Cb"><path fill-rule="evenodd" d="M13,5 L13,12 L20,12 L20,13 L13,13 L13,20 L12,20 L11.999,13 L5,13 L5,12 L12,12 L12,5 L13,5 Z"></path></svg>                    </button>
                    </div>
                </div>
                <div class="cart-shopping__recipe__actions">
                    <button onclick="removeFromCart('${item.sku}')" class="remove-button">
                        <svg viewBox="0 0 24 24" fill="currentColor" width="24" height="24">
                            <path fill-rule="evenodd" d="M13.5,3 C14.327,3 15,3.673 15,4.5 L15,4.5 L15,5 L19,5 L19,6 L18,6 L18,17.5 C18,18.879 16.878,20 15.5,20 L15.5,20 L7.5,20 C6.122,20 5,18.879 5,17.5 L5,17.5 L5,6 L4,6 L4,5 L8,5 L8,4.5 C8,3.673 8.673,3 9.5,3 L9.5,3 Z M17,6 L6,6 L6,17.5 C6,18.327 6.673,19 7.5,19 L7.5,19 L15.5,19 C16.327,19 17,18.327 17,17.5 L17,17.5 L17,6 Z M10,9 L10,16 L9,16 L9,9 L10,9 Z M14,9 L14,16 L13,16 L13,9 L14,9 Z M13.5,4 L9.5,4 C9.224,4 9,4.225 9,4.5 L9,4.5 L9,5 L14,5 L14,4.5 C14,4.225 13.776,4 13.5,4 L13.5,4 Z"></path>
                        </svg>
                    </button>
                    <span>${(parseFloat(item.price) * item.quantity).toFixed(2)} zł</span>
                </div>
            `;
            cartContainer.appendChild(itemElement);
            totalCost += parseFloat(item.price) * item.quantity;
        });

        cartTotalElement.textContent = `${totalCost.toFixed(2)} zł`;
        updateCartCount();
    }

    window.updateQuantity = function (sku, change) {
        let cart = JSON.parse(localStorage.getItem("cart")) || [];
        const productIndex = cart.findIndex((item) => item.sku === sku);
        if (productIndex !== -1) {
            let newQuantity = cart[productIndex].quantity + change;
            if (newQuantity < 1) {
                removeFromCart(sku);
                return;
            }
            cart[productIndex].quantity = newQuantity;
            localStorage.setItem("cart", JSON.stringify(cart));
            updateCartDisplay();
        }
    };

    window.removeFromCart = function (sku) {
        let cart = JSON.parse(localStorage.getItem("cart")) || [];
        cart = cart.filter((item) => item.sku !== sku);
        localStorage.setItem("cart", JSON.stringify(cart));
        updateCartDisplay();
    };

    function updateCartCount() {
    const cart = JSON.parse(localStorage.getItem("cart")) || [];
    const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
    document.querySelector(".cart-shopping__header p span").textContent = totalItems;
}


    updateCartDisplay();
});

    </script>