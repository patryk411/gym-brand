<header class="banner">
  <div class="container">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Universal Clothing Brand</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <button onclick="showCartShopping()" class="nav-item-cart">
              <img src="{{ get_template_directory_uri() }}/assets/images/shopping-cart2.png" />
              <span class="cart-count">0</span>
            </button>
            <li class="nav-item">
              <button onclick="myFunction()" class="nav-link-menu" aria-disabled="true">Menu</button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <div class="menu-mobile">
      <button class="close-menu" onclick="closeMenu()"><i class="fa-solid fa-x"></i></button>
      <ul class="menu-options">
        <li><a href="<?php echo site_url('/'); ?>">Strona główna</a></li>
        <li><a href="<?php echo site_url('/shop'); ?>">Sklep</a></li>
      </ul>
  </div>
  <div class="cart-modal">
    @include('partials.cart-shopping')
  </div>
</header>
<div class="overlay" id="navbar-overlay"></div>

<script>

 document.addEventListener('DOMContentLoaded', () => {
  const menu = document.querySelector('.menu-mobile');
  const cartCountElement = document.querySelector('.cart-count');
  const cartButton = document.querySelector('.nav-item-cart');
  const cartModal = document.querySelector('.cart-modal');
  const body = document.body;
  const navbarOverlay = document.getElementById('navbar-overlay');

  function updateCartCount() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
    cartCountElement.textContent = totalItems;
  }

  window.myFunction = function() {
    if (menu.style.visibility === 'visible') {
      menu.style.visibility = 'hidden';
      menu.style.opacity = '0';
      body.classList.remove('no-scroll');
    } else {
      menu.style.visibility = 'visible';
      menu.style.opacity = '1';
      body.classList.add('no-scroll');
    }
  };

  window.closeMenu = function() {
    const body = document.body;
    menu.style.visibility = 'hidden';
    menu.style.opacity = '0';
    body.classList.remove('no-scroll');
  };

  window.showCartShopping = function () {
    cartModal.style.visibility = "visible";
    cartModal.style.opacity = "1";
    cartModal.style.transform = "translateX(0)";
    // body.classList.add('open-modal');
     // Nakładamy cień na navbar
     navbarOverlay.style.visibility = "visible"; // Pokaż nakładający się cień
    navbarOverlay.style.opacity = "1"; // Zwiększ widoczność cienia

    body.classList.add('no-scroll'); // Zablokowanie przewijania strony

    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    if (cart.length === 0) {
      console.log('Koszyk jest pusty.');
    } else {
      console.log('Produkty w koszyku:');
      cart.forEach(item => {
        console.log(`${item.name} - ${item.quantity} szt. - ${item.price}`);
      });
    }
  };

  window.closeCart = function () {
    cartModal.style.opacity = "0"; 
    cartModal.style.transform = "translateX(100%)";

    setTimeout(() => {
      cartModal.style.visibility = "hidden";
    }, 300);
  
    // body.classList.remove('open-modal');
    navbarOverlay.style.opacity = "0"; // Ukrywamy cień
    navbarOverlay.style.visibility = "hidden"; // Ukrywamy cień
    body.classList.remove('no-scroll');
  };

  updateCartCount();

  window.addToCart = function (product) {
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
});

</script>
