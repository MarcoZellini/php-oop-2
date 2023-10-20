<main id="app_main">
    <div class="container py-5">
        <div class="row row-cols-3 g-3">
            <?php foreach ($products as $product) : ?>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-header p-3">
                            <h3><?= $product->getName(); ?></h3>
                            <h4><?= $product->getCategory()->toString(); ?></h4>
                            <span class="bg-warning px-4 rounded-3"><?= get_class($product); ?></span>
                        </div>
                        <!-- /.card-top -->
                        <div class="card-body p-0">
                            <img class="img-fluid" src="<?= $product->getPoster() ?>" alt="">
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer h-100">
                            <h6><?= $product->getDetails() ?></h6>
                            <h6>Price: <?= $product->getPrice() ?> €</h6>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            <?php endforeach; ?>
        </div>
    </div>
    <!-- /.container -->
</main>
<!-- /#app_main -->