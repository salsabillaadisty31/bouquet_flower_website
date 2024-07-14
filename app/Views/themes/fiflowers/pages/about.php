<?= $this->extend('themes\fiflowers\template'); ?>

<?= $this->section('konten'); ?>
<div class="hero-wrap hero-bread" style="background-image: url('<?= base_url('assets/themes/fiflowers/images/background_11.jpg'); ?>');">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <!-- <p class="breadcrumbs"><span class="mr-2"><?php echo anchor(base_url(), 'Home'); ?></span> <span>Tentang Kami</span></p> -->
        <!-- <h1 class="mb-0 bread" style="color:rgb(180, 104, 97);">Cari Bouquet Estetik Disini</h1> --> 
        <div class="col-md-12 ftco-animate text-center">
            <h1 class="mb-5" style="color:#fff; font-size: 8vw; font-family:Amatic SC, cursive; font-weight:bolder">Contact Us When You Need Bouquet</h1>
          </div>;
      </div>
    </div>
  </div>
</div>

<section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
  <div class="container">
    <div class="row"> <br>
      <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?= base_url('assets/themes/fiflowers/images/about.jpg'); ?>);">
        <a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
          <span class="icon-play"></span>
        </a>
      </div>
      <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
        <div class="heading-section-bold mb-4 mt-md-5">
          <div class="ml-md-0">
            <h2 class="mb-4">Selamat Datang di Toko Online <?php echo get_store_name(); ?></h2>
          </div>
        </div>
        <div class="pb-md-5">
          <p><?php echo get_settings('store_description'); ?></p>
          <p><a href="<?php echo site_url('home#products'); ?>" class="btn btn-primary">Belanja sekarang!</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section testimony-section">
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
    <!-- <div class="row justify-content-center mb-2 pb-1">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <span class="subheading">Testimony</span>
        <h2 class="mb-4">Apa yang pelanggan kami katakan?</h2>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel">
          <?php if (count($reviews) > 0) : ?>
            <?php foreach ($reviews as $review) : ?>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5"  style="background-color: #97662ef0; border: 3px solid rgb(180, 104, 97); border-radius:10px;">
                  <div class="user-img mb-3" style="background-image: url(<?= base_url('assets/uploads/users/' . $review['profile_picture']) ?>)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-3 pl-4"><?php echo $review['review_text']; ?></p>
                    <p class="name"><?php echo $review['name']; ?></p>
                    <span class="position"><?php echo get_formatted_date($review['review_date']); ?></span>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          <?php else : ?>
          <?php endif; ?>

        </div>
      </div>
    </div> -->
</section>


<?= $this->endSection(); ?>