<footer class="content-info">
  <div class="container">
    <div class="content-info__content">
      <div class="col-8">
        <a>universal clothing brand</a>
      </div>
      <div class="content-info__left-side col-4">
        <div>
          <p>123-456-7890</p>
          <p>info@strona.com</p>
          <p>ul. Aleje Jerozolimskie 1, 01-376 Warszawa</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/52989f7b96.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>  
  <script>
    // Konfiguracja dla sekcji "Bestselery"
    new Splide('.splide-bestsellers', {
      type: 'loop',
      perPage: 4,
      perMove: 1,
      gap: '20px',
    }).mount();

    // Konfiguracja dla sekcji "Obserwuj Nas"
    new Splide('.splide-follow', {
      type: 'loop',
      perPage: 5,
      perMove: 1,
      gap: '24px',
    }).mount();

  </script>
</footer>
