<?php require 'inc/head.php'; ?>

<!-- Ajout au panier -->
<?php

if (!isset($_SESSION['cart']))
{
    $_SESSION['cart'] = [];
}


if (isset($_GET['add_to_cart']) && (($_GET['add_to_cart']) == 46))
{
    array_push($_SESSION['cart'], 'Pecan nuts');
}

elseif (isset($_GET['add_to_cart']) && (($_GET['add_to_cart']) == 36))
{
    array_push($_SESSION['cart'], 'Chocolate chips');
}

elseif (isset($_GET['add_to_cart']) && (($_GET['add_to_cart']) == 58))
{
    array_push($_SESSION['cart'], 'Chocolate cookie');
}

elseif (isset($_GET['add_to_cart']) && (($_GET['add_to_cart']) == 32))
{
    array_push($_SESSION['cart'], 'M&M\'s&copy; cookies');
}



?>







<section class="cookies container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive" name="libelleProduit">
        <figcaption class="caption">
          <h3>Pecan nuts</h3>
          <p>Cooked by Penny !</p>

            <?php if (isset($_SESSION['name'])) { ?>

          <a  href="?add_to_cart=46" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a>
            <?php } ?>

        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-36.jpg" alt="cookies chocolate chips" class="img-responsive" name="libelleProduit">
        <figcaption class="caption">
          <h3>Chocolate chips</h3>
          <p>Cooked by Bernadette !</p>

            <?php if (isset($_SESSION['name'])) { ?>
          <a  href="?add_to_cart=36" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a>
            <?php } ?>

        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive" name="libelleProduit">
        <figcaption class="caption">
          <h3>Chocolate cookie</h3>
          <p>Cooked by Bernadette !</p>
            <?php if (isset($_SESSION['name'])) { ?>
          <a  href="?add_to_cart=58" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a>
            <?php } ?>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive" name="libelleProduit">
        <figcaption class="caption">
          <h3>M&M's&copy; cookies</h3>
          <p>Cooked by Penny !</p>
            <?php if (isset($_SESSION['name'])) { ?>
          <a  href="?add_to_cart=32" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a>
            <?php } ?>
        </figcaption>
      </figure>
    </div>
  </div>
</section>
<?php require 'inc/foot.php'; ?>
