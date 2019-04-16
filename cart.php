
<?php require 'inc/head.php'; ?>


<div class="container-fluid">
    <section class="cookies container-fluid">
        <div class="row col-lg-6">

            <h1>Order summary :</h1>


    <?php

    $number = [];

    foreach ($_SESSION['cart'] as $value)
    {
        if (!isset($number[$value]))
        {
            $number[$value] = 0;
        }

        $number[$value]++;
    }


    ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Products</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach ($number as $cle => $value)
                    { ?>
                    <td><?= $cle ?></td>
                    <td><?= $value ?></td>
                </tr>
            </tbody>
                    <?php } ?>
        </table>

        </div>
    </section>
</div>

<?php require 'inc/foot.php'; ?>
