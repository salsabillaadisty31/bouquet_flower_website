<?= $this->extend('themes\fiflowers\template'); ?>

<?= $this->section('konten'); ?>
<section id="home-section" class="hero">
  <div class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url(<?= base_url('assets/themes/fiflowers/images/background-12.jpg') ?>);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

          <div class="col-md-12 ftco-animate text-center">
            <h1 class="mb-2">Give Fiflower's to Spesial Someone</h1>
            <h2 class="subheading mb-4">beautiful flowers at a low price</h2>
            <p><a href="#products" class="btn btn-primary">SHOP NOW</a></p>
          </div>

        </div>
      </div>
    </div>

    <div class="slider-item" style="background-image: url(<?= base_url('assets/themes/fiflowers/images/background_4.jpg') ?>);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

          <div class="col-sm-12 ftco-animate text-center">
            <h1 class="mb-2">Spesialist Flower's and Decoration</h1>
            <h2 class="subheading mb-4">Design dengan Rasa Cinta dan Kasih Sayang</h2>
            <p><a href="#products" class="btn btn-primary">SHOP NOW</a></p>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section" style="padding: 0 0 1em 0;" id="products">
  <div class="container">
  <section class="features-area section_gap">
    <div class="col-md-12 heading-section text-center ftco-animate">
        <span class="subheading">My Services</span>
        <h2 class="mb-3">Bucket Fifflower's</h2>
      </div>
    <div class="container" style="background-color:#97662ef0; border-radius:20px">
      <div class="row features-inner">

        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-features">
            <div class="f-icon">
              <img src="<?php echo base_url('assets/themes/fiflowers/images/features/f-icon1.png.webp'); ?>" alt="">
            </div>
              <h6 style="color:white">Free Delivery</h6>
              <p style="color:white">Free Shipping on all order</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-features">
            <div class="f-icon">
              <img src="<?php echo base_url('assets/themes/fiflowers/images/features/f-icon2.png.webp'); ?>"alt="">
            </div>
              <h6 style="color:white">Return Policy</h6>
              <p style="color:white">Free Shipping on all order</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-features">
            <div class="f-icon">
              <img src="<?php echo base_url('assets/themes/fiflowers/images/features/f-icon3.png.webp'); ?>"alt="">
            </div>
              <h6 style="color:white">24/7 Support</h6>
              <p style="color:white">Free Shipping on all order</p>
          </div>
        </div>

      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="single-features">
          <div class="f-icon">
            <img src="<?php echo base_url('assets/themes/fiflowers/images/features/f-icon4.png.webp'); ?>"alt="">
          </div>
            <h6 style="color:white">Secure Payment</h6>
            <p style="color:white">Free Shipping on all order</p>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<section class="ftco-section" style="padding: 0 0 1em 0;">
  <div class="container">
    <div class="row justify-content-center mb-3 pb-3">
      <div class="col-md-12 heading-section text-center ftco-animate">
        <span class="subheading">New Produk</span>
        <h2 class="mb-2">Bouquet Fifflower's</h2>
        <p><?= get_settings('store_tagline');
            ?></p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <?php

      if (count($products) > 0) : ?>
        <?php foreach ($products as $product) : ?>
          <div class="col-md-6 col-lg-3 ftco-animate">

            <div class="product" style="border: 5px solid #926F34; border-radius:12px">
              <a href="<?= base_url('shop/product/' . $product['id'] . '/' . $product['sku'] . '/') ?>" class="img-prod">
                <img class="img-fluid" src="<?= base_url('assets/uploads/products/' . $product['picture_name']) ?>" alt="<?= $product['name']; ?>">
                <?php if ($product['current_discount'] > 0) : ?>
                  <span class="status"><?php $nilai = $product['current_discount'] / $product['price'] * 100;
                                        echo number_format($nilai, 0); ?>%</span>
                <?php endif; ?>
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="<?= base_url('shop/product/' . $product['id'] . '/' . $product['sku'] . '/') ?>"><?= $product['name']; ?></a></h3>
                <div class="d-flex">
                  <div class="pricing">
                    <p class="price">
                      <?php if ($product['current_discount'] > 0) : ?>
                        <span class="mr-2 price-dc"><?= number_to_currency($product['price'], 'IDR', 'id_ID', 2); ?></span><span class="price-sale"><?= number_to_currency($product['price'] - $product['current_discount'], 'IDR', 'id_ID', 2); ?></span>
                      <?php else : ?>
                        <span class="mr-2"><span class="price-sale"><?= number_to_currency($product['price'] - $product['current_discount'], 'IDR', 'id_ID', 2); ?></span>
                        <?php endif; ?>
                    </p>
                  </div>
                </div>
                <div class="bottom-area d-flex px-3">
                  <div class="m-auto d-flex">
                    <a href="<?= base_url('shop/product/' . $product['id'] . '/' . $product['sku'] . '/') ?>" class="buy-now d-flex justify-content-center align-items-center text-center">
                      <span><i class="ion-ios-menu"></i></span>
                    </a>
                    <a href="#" type='submit' class="add-to-chart add-cart d-flex justify-content-center align-items-center mx-1" data-sku="<?= $product['sku']; ?>" data-name="<?= $product['name']; ?>" data-price="<?= ($product['current_discount'] > 0) ? ($product['price'] - $product['current_discount']) : $product['price']; ?>" data-id="<?= $product['id']; ?>">
                      <span><i class="ion-ios-cart"></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach;
        ?>
      <?php else :
      ?>
      <?php endif;
      ?>

    </div>
  </div>
</section>

<section class="ftco-section img" style="background-image: url(<?= base_url('assets/themes/fiflowers/images/bg_3.jpg') ?>); width:100%;">
  <div class="container">
    <div class="row justify-content-end">
      <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
        <span class="subheading" style="color:white;">Produk dengan Harga Terbaik</span>
        <h2 class="mb-4" style="color:#97662ef0;">Deal of the day</h2>
        <p><?= $best_deal['description']; ?></p>
        <h3><a href="#" style="color:#97662ef0;"><?= $best_deal['name']; ?></a></h3>
        <span class="price" style="color:#97662ef0;"><?= number_to_currency($best_deal['price'], 'IDR', 'id_ID', 2); ?> <a href="#" style="color:white; font-weight:bolder">sekarang hanya <?= number_to_currency($best_deal['price'] - $best_deal['current_discount'], 'IDR', 'id_ID', 2); ?></a></span>
        <div id="timer" class="d-flex mt-5">
          <div class="time pl-3">
            <a href="#" class="btn btn-primary add-cart" data-sku="<?= $best_deal['sku']; ?>" data-name="<?= $best_deal['name']; ?>" data-price="<?= ($best_deal['current_discount'] > 0) ? ($best_deal['price'] - $best_deal['current_discount']) : $best_deal['price']; ?>" data-id="<?= $best_deal['id']; ?>"><i class="ion-ios-cart"></i></a>
          </div>
          <!-- <div class="time pl-3">
            <a class="btn btn-info" href="<?= base_url('shop/product/' . $product['id'] . '/' . $product['sku'] . '/'); ?>" class="buy-now d-flex justify-content-center align-items-center text-center">
              <!-- <span><i class="ion-ios-menu text-white"></i></span> -->
            <!-- </a>
          </div> --> 
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section testimony-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <span class="subheading">Testimony</span>
        <h2 class="mb-4">Apa yang pelanggan kami katakan?</h2>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel">

          <?php if (count($reviews) > 0) :
          ?>
            <?php foreach ($reviews as $review) :
            ?>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5" style="background-color: #97662ef0; border-radius:10px;">
                  <div class="user-img mb-5" style="background-image: url(<?= base_url('assets/uploads/users/' . $review['profile_picture']); ?>)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4"><?= $review['review_text']; ?></p>
                    <p class="name"><?= $review['name']; ?></p>
                    <span class="position"><?= get_formatted_date($review['review_date']); ?></span>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          <?php else : ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection(); ?>