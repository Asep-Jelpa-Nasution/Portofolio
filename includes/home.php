<!-- Catalog Section -->
<section id="catalog" class="mt-5">
            <h2>Sneaker Catalog</h2>
            <div class="row">
                <?php
                $catalog = [
                    ["Nike Air Force 1", "assets/img/ft1_nike.jpg", "$90"],
                    ["Adidas Ultraboost 21", "assets/img/ft2_adidas.jpg", "$180"],
                    ["Converse Chuck Taylor", "assets/img/ft3_converse.jpg", "$60"],
                    ["New Balance 574", "assets/img/ft4_nb.jpg", "$80"],
                    ["Vans Old Skool", "assets/img/ft5_vans.jpg", "$65"],
                    ["Puma RS-X", "assets/img/ft6_puma.jpg", "$110"],
                ];

                foreach ($catalog as $item) {
                    echo '
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="' . $item[1] . '" class="card-img-top" alt="' . $item[0] . '">
                            <div class="card-body">
                                <h5 class="card-title">' . $item[0] . '</h5>
                                <p class="card-text">Price: ' . $item[2] . '</p>
                            </div>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </section>
