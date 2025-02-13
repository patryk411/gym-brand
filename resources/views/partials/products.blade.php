<section class="products">
    <div class="row">
        <div class="products__filters col-auto">
            <div class="products__text-box">
                <h3>Przeglądaj według</h3>
                <a>Wszystkie produkty</a>
            </div>
            <div class="products__text-box">
                <h3>Filtruj wg</h3>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Cena
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <input type="range" class="form-range" value="0" min="0" max="5" step="0.5" id="customRange3">
                            <div class="price-row">
                                <span>7,50 zł</span>
                                <span>130,00 zł</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Kolor
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="color-row">
                                <input type="checkbox" class="form-control form-control-color" id="exampleColorInput" value="#fff">
                                <input type="checkbox" class="form-control form-control-color" id="exampleColorInput" value="#cab4e7">
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Rozmiar
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="xs" id="xs">
                                <label class="form-check-label" for="xs">
                                    XS
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="s" id="s">
                                <label class="form-check-label" for="s">
                                    S
                                </label>
                            </div>                        
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="m" id="m">
                                <label class="form-check-label" for="m">
                                    M
                                </label>
                            </div>                        
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="l" id="l">
                                <label class="form-check-label" for="l">
                                    L
                                </label>
                            </div>                        
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="xl" id="xl">
                                <label class="form-check-label" for="xl">
                                    XL
                                </label>
                            </div>                        
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="products__items col-lg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/baner5.jpg" />
        <div class="products__text col-5 p-0">
            <h1>Wszystkie produkty</h1>
            <p>To jest opis Twojej kategorii. Idealne miejsce, aby powiedzieć klientom, czym jest ta kategoria, nawiązać kontakt z odbiorcami i zwrócić uwagę na swoje produkty.</p>
        </div>
        <div class="products__content">
            <div class="products__content__row">
                <span>Produkty (12)</span>
                <div class="products__content__filter">
                    <label for="form-select-filter">Sortuj wg:</label>
                    <select class="form-select" aria-label="Default select example" id="form-select-filter">
                        <option value="1">Zalecane</option>
                        <option value="2">Najnowsze</option>
                        <option value="3">Cena (od najniższej do najwyższej)</option>
                        <option value="4">Cena (od najwyższej do najniższej)</option>
                    </select>
                </div>
            </div>
            <div class="products__content__box row m-0">
                <div class="products__content__single-box col-2 p-0">
                    <a href="<?php echo site_url('/single-product'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product.png" />
                        <p>Jestem produktem</p>
                        <span>85,00 zł</span>
                    </a>
                </div>
                <div class="products__content__single-box col-2 p-0">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product.png" />
                        <p>Jestem produktem</p>
                        <span>85,00 zł</span>
                    </a>
                </div>
                <div class="products__content__single-box col-2 p-0">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product.png" />
                        <p>Jestem produktem</p>
                        <span>85,00 zł</span>
                    </a>
                </div>
                <div class="products__content__single-box col-2 p-0">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product.png" />
                        <p>Jestem produktem</p>
                        <span>85,00 zł</span>
                    </a>
                </div>
                <div class="products__content__single-box col-2 p-0">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product.png" />
                        <p>Jestem produktem</p>
                        <span>85,00 zł</span>
                    </a>
                </div>
                <div class="products__content__single-box col-2 p-0">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product.png" />
                        <p>Jestem produktem</p>
                        <span>85,00 zł</span>
                    </a>
                </div>
                <div class="products__content__single-box col-2 p-0">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product.png" />
                        <p>Jestem produktem</p>
                        <span>85,00 zł</span>
                    </a>
                </div>
                <div class="products__content__single-box col-2 p-0">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product.png" />
                        <p>Jestem produktem</p>
                        <span>85,00 zł</span>
                    </a>
                </div>
                <div class="products__content__single-box col-2 p-0">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product.png" />
                        <p>Jestem produktem</p>
                        <span>85,00 zł</span>
                    </a>
                </div>
                <div class="products__content__single-box col-2 p-0">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product.png" />
                        <p>Jestem produktem</p>
                        <span>85,00 zł</span>
                    </a>
                </div>
                <div class="products__content__single-box col-2 p-0">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product.png" />
                        <p>Jestem produktem</p>
                        <span>85,00 zł</span>
                    </a>
                </div>
                <div class="products__content__single-box col-2 p-0">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product.png" />
                        <p>Jestem produktem</p>
                        <span>85,00 zł</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>