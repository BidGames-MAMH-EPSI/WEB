<?php

include 'templates/common/header.php';

$homeSales = file_get_contents("http://api.bidgames.store/homeSales");
$homeSales = json_decode($homeSales, true);
?>

<div class="lightGrey titleBar center">Ventes en ligne</div>

<section class="horizontalPadding">
    <?php foreach ($homeSales['results'] as $homeSale) { ?>
    <div class="superLightGrey wrap centerSpacebetween commonCard">
        <div class="row">
            <div class="firstColumn center">
                <img src="./assets/media/images/<?= $homeSale['imageInfo']['path'] ?>">
            </div>
            <div class="secondColumn columnSpacebetween">
                <?php
                if($homeSale['type'] == 0) { // LIVE
                    ?>
                    <p class="mediumText"><?= $homeSale['sale_start'] ?></p>
                    <?php
                } else { // EBAY
                    ?>
                    <p class="mediumText">Jusqu'au <?= $homeSale['sale_end'] ?></p>
                    <?php
                }
                ?>
                <p class="saleName"><?= $homeSale['name'] ?></p>
                <div class="column">
                    <div class=" row end mgBot">
                        <img src="../../assets/media/images/greyHammerIcon.svg">
                        <a href="#" class="saleDetails regularGreyText"><?= $homeSale['house']['name'] ?></a>
                    </div>
                    <div class=" row end">
                        <img src="../../assets/media/images/greyPinIcon.svg">
                        <p class="saleDetails regularGreyText"><?= $homeSale['house']['adress'] ?></p>
                    </div>
                </div>

                <a href="#" class="row yCenter">
                    <img src="../../assets/media/images/redArrow.svg">
                    <p class="brightRedText saleInfo">info</p>
                </a>

            </div>
        </div>

        <div class="thirdColumn columnSpacebetween end">
            <div class="row yCenter">
                <?php
                if($homeSale['type'] == 0) { // LIVE
                    ?>
                    <div class="brightRed dot"></div>
                    <p class="brightRedText">Live</p>
                    <img src="../../assets/media/images/ondeIcon.svg">
                    <?php
                } else { // EBAY
                    ?>
                    <div class="brightGreen dot"></div>
                    <p class="brightGreenText">En ligne <?= $homeSale['timeRemainBeforeSale'] ?></p>
                    <img src="../../assets/media/images/greenSablier.svg">
                    <?php
                }
                ?>

                
            </div>
            <div class="column">
                <a href="cataloguePage?sale_id=<?= $homeSale['id'] ?>" class="btnsBasicsPad strongGrey textWhite">Voir le catalogue</a>
                <?php
                if($homeSale['type'] == 0) { // LIVE
                    ?>
                    <a href="cataloguePage?sale_id=<?= $homeSale['id'] ?>" class="btnsBasicsPad brightRed textWhite">Aller au LIVE</a>
                    <?php
                } else { // EBAY
                    ?>
                    <a href="cataloguePage?sale_id=<?= $homeSale['id'] ?>" class="btnsBasicsPad brightGreen textWhite">Aller à la vente</a>
                    <?php
                }
                ?>
            </div>

        </div>
    </div>
    <?php
    } ?>

</section>

<?php

include 'templates/common/footer.php';

?>