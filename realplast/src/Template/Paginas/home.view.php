<main id="home">
    <section class="banner ">
        <div class="">
            <div class="row">
                <!-- Swiper -->
                <div class="swiper mySwiper-banner">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="col-lg-5 col-12 px-2 banner-conteudo">
                                <div class="d-flex justify-content-center align-items-center">
                                    <h2>A beleza do plástico</h2>
                                </div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <p>Conheça nossa linha de produtos de qualidade inigualável</p>
                                </div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <button class="btn btn-custom2">Saiba mais
                                    <svg width="20"  class="ms-0-50" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path d="M1 9L5 5L1 1" stroke="#FF6A00" stroke-width="2"/>
                                    </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-5 d-flex justify-content-center align-items-center imagem">
                                <img src="<?= asset('images/banners/cadeira.svg') ?>" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">Slide 2</div>
                        <div class="swiper-slide">Slide 3</div>
                        <div class="swiper-slide">Slide 4</div>
                        <div class="swiper-slide">Slide 5</div>
                        <div class="swiper-slide">Slide 6</div>
                        <div class="swiper-slide">Slide 7</div>
                        <div class="swiper-slide">Slide 8</div>
                        <div class="swiper-slide">Slide 9</div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <!-- Swiper -->
                    
                </div>
            </div>  
        </div>
    </section>

    <section class="banner-buttons">
        <div class="">
            <div class="row">
                <!-- Swiper -->
                <div class="swiper mySwiper-buttons">
                    <div class="swiper-wrapper">
                    
                        <div class="swiper-slide ">
                            <div class="col-lg-4 w-100 button-linhas">
                                <button class="w-100 b1">
                                <img src="<?= asset('images/icones/corporativo.svg') ?>" class="me-1" width="35" alt="">    
                                    <span>Corporativo</span></button>               
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="col-lg-4 w-100 button-linhas">
                                <button class="w-100 b2">
                                <img src="<?= asset('images/icones/componentes.svg') ?>" class="me-1"  width="35" alt="">    
                                    <span>Componentes</span></button>               
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="col-lg-4 w-100 button-linhas">
                                <button class="w-100 b3">
                                <img src="<?= asset('images/icones/escolar.svg') ?>" class="me-1" width="60" alt="">    
                                    <span>Escolar</span></button>               
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="col-lg-4 w-100 button-linhas">
                                <button class="w-100 b1">
                                <img src="<?= asset('images/icones/corporativo.svg') ?>" class="me-1" width="35" alt="">    
                                    <span>Teste4</span></button>               
                            </div>
                        </div>
                   
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Swiper -->
            </div>  
        </div>
    </section>

    <section class="areas">
        <div class="row">
            <div class="col-lg-8 d-flex justify-content-center align-items-center">
                
            </div>
            <div class="col-lg-4 col-12 conteudo">
                <div class="d-flex justify-content-start align-items-center">
                    <h2>Corporativo</h2>
                </div>
                <div class="d-flex justify-content-start align-items-center">
                    <p>Conheça a nossa linha completa de produtos para o setor corporativo</p>
                </div>
                <div class="d-flex justify-content-start align-items-center">
                    <button class="btn btn-custom2">Linha completa
                    <svg width="20"  class="ms-0-50" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 9L5 5L1 1" stroke="#FF6A00" stroke-width="2"/>
                    </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="produtos">
        <div class="row">
            <!-- Swiper -->
            <div class="swiper mySwiper-produtos">
                    <div class="swiper-wrapper">
                    <?php foreach(range(0,9) as $i) : ?>
                        <div class="swiper-slide">
                            <div class="col-12 conteudo">
                                <div class="d-flex justify-content-center">
                                    <h2>Big</h2>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <a href="">Ver mais 
                                    <svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path d="M1 13L7 7L1 1" stroke="#FF3C01" stroke-width="1.5"/>
                                    </svg>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <img src="<?= asset('images/banners/cadeira-pequena.svg') ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Swiper -->
        </div>
    </section>
    <section class="areas2">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-6 col-12 conteudo">
                <div class="d-flex justify-content-start align-items-center">
                    <h2>Corporativo</h2>
                </div>
                <div class="d-flex justify-content-start align-items-center">
                    <p>Conheça a nossa linha completa de produtos para o setor corporativo</p>
                </div>
                <div class="d-flex justify-content-start align-items-center">
                    <button class="btn btn-custom2">Linha completa
                    <svg width="20"  class="ms-0-50" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 9L5 5L1 1" stroke="#253E4F" stroke-width="2"/>
                    </svg>
                    </button>
                </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-center align-items-center">
                
            </div>
        </div>
    </section>
    <section class="produtos">
        <div class="row">
            <!-- Swiper -->
            <div class="swiper mySwiper-produtos">
                    <div class="swiper-wrapper">
                    <?php foreach(range(0,9) as $i) : ?>
                        <div class="swiper-slide">
                            <div class="col-12 conteudo">
                                <div class="d-flex justify-content-center">
                                    <h2>Big</h2>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <a href="">Ver mais 
                                    <svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path d="M1 13L7 7L1 1" stroke="#FF3C01" stroke-width="1.5"/>
                                    </svg>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <img src="<?= asset('images/banners/cadeira-pequena.svg') ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Swiper -->
        </div>
    </section>
    <section class="areas2 areas3">
        
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-12 conteudo">
                    <div class="d-flex justify-content-start align-items-center">
                        <h2>Corporativo</h2>
                    </div>
                    <div class="d-flex justify-content-start align-items-center">
                        <p>Conheça a nossa linha completa de produtos para o setor corporativo</p>
                    </div>
                    <div class="d-flex justify-content-start align-items-center">
                        <button class="btn btn-custom2">Linha completa
                        <svg width="20"  class="ms-0-50" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 9L5 5L1 1" stroke="#253E4F" stroke-width="2"/>
                        </svg>
                        </button>
                    </div>
                </div>
                <div class="col-lg-4 d-flex justify-content-center align-items-center">
                    
                </div>
            </div>
            <div class="em-breve"></div>
    </section>
    <section class="areas4">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-12 conteudo">
                    <div class="d-flex justify-content-start align-items-center">
                        <h2>Personalização</h2>
                    </div>
                    <div class="d-flex justify-content-start align-items-center">
                        <p>Adquira produtos perfeitos para a sua necessidade</p>
                    </div>
                    <div class="d-flex justify-content-start align-items-center">
                        <button class="btn btn-custom2">Linha completa
                        <svg width="20"  class="ms-0-50" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 9L5 5L1 1" stroke="#FF6A00" stroke-width="2"/>
                        </svg>
                        </button>
                    </div>
                </div>
                <div class="col-lg-4 d-flex justify-content-center align-items-center">
                    
                </div>
            </div>
    </section>
</main>