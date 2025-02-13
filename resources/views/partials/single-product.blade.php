<section class="single-product">
    <div class="col-6 p-0">
        <div class="single-product__breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Strona Główna</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Jestem produktem</li>
                </ol>
                <div class="breadcrumb-row">
                    <button><i class="fa-solid fa-chevron-left"></i>Wróć</button>
                    <div class="separator"></div>
                    <button>Dalej <i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </nav>
        </div>
        <div class="single-product__content">
            <div class="single-product__content__img col-lg-7 p-0">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product.png" />
                <p>Jestem opisem produktu. Jestem doskonałym miejscem, aby dodać więcej szczegółów na temat produktu, jak np. rozmiar, materiał, instrukcje pielęgnacji i instrukcje czyszczenia.</p>
            </div>
            <div class="single-product__content__description col-lg p-0">
                <h1>Jestem produktem</h1>
                <span>SKU: 364115376135191</span>
                <span class="price">10,00 zł</span>
                <div>
                    <label for="quantityOfProduct" class="form-control-label">Sztuk</label>
                    <input type="text" class="form-control-plaintext" id="quantityOfProduct" value="1">
                </div>
                <button onclick="addToCart()" class="single-product__content__description--btn">
                    Dodaj do koszyka
                </button>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            info o produkcie
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Jestem szczegółowym opisem. Jestem doskonałym miejscem, 
                                aby dodać więcej szczegółów na temat produktu, 
                                jak np. rozmiar, materiał, instrukcje pielęgnacji i instrukcje czyszczenia.
                                Jest to również świetne miejsce do opisania, 
                                co wyróżnia ​​ten produkt oraz w jaki sposób klienci mogą skorzystać na zakupie.
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            polityka zwrotów
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                Jestem Polityką Zwrotów. Jestem doskonałym miejscem, aby powiadomić klientów, co robić w przypadku, gdy są niezadowoleni z zakupu. Posiadanie nieskomplikowanej polityki zwrotu jest świetnym sposobem, aby budować zaufanie i przekonać klientów, że mogą kupować bez obaw.
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            dane wysyłki
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                Jestem polityką wysyłki. Jestem doskonałym miejscem, aby dodać więcej szczegółów na temat metod wysyłki, pakowania i kosztów. Posiadanie nieskomplikowanych informacji na temat polityki wysyłki jest świetnym sposobem, aby budować zaufanie i na zapewnienie klientów, że mogą kupować bez obaw.
                            </p>         
                        </div>
                        </div>
                    </div>
                </div>
                <div class="single-product__content__media">
                    <ol>
                        <li><a href="#"><i class="fa-brands fa-square-facebook"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const cartCountElement = document.querySelector('.cart-count');

    function updateCartCount() {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
        cartCountElement.textContent = totalItems;

        if (totalItems > 9) {
            cartCountElement.style.right = "6px";
        } else {
            cartCountElement.style.right = "9px";
        }
    }

    window.addToCart = function() {
        const productName = document.querySelector('.single-product__content__description h1').innerText;
        const productSKU = document.querySelector('.single-product__content__description span').innerText;
        const productPrice = document.querySelector('.single-product__content__description .price').innerText;
        const productQuantity = parseInt(document.getElementById('quantityOfProduct').value, 10);

        if (isNaN(productQuantity) || productQuantity <= 0) {
            alert('Podaj poprawną ilość produktów!');
            return;
        }

        const product = {
            name: productName,
            sku: productSKU,
            price: productPrice,
            quantity: productQuantity,
        };

        const cart = JSON.parse(localStorage.getItem('cart')) || [];

        const existingProductIndex = cart.findIndex(item => item.sku === product.sku);
        if (existingProductIndex !== -1) {
            cart[existingProductIndex].quantity += product.quantity;
        } else {
            cart.push(product);
        }

        localStorage.setItem('cart', JSON.stringify(cart));

        updateCartCount();

        alert(`Dodano do koszyka: ${product.name} (${product.quantity} szt.)`);
    };

    updateCartCount();
  });
</script>
