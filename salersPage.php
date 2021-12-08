<?php

include 'templates/common/header.php';

$homeSales = file_get_contents("http://api.bidgames.store/homeSales?house_id=" . $_GET['house_id']);
$homeSales = json_decode($homeSales, true);

$houseInfo = file_get_contents("http://api.bidgames.store/house?house_id=" . $_GET['house_id']);
$houseInfo = json_decode($houseInfo, true);


?>

<div class="lightGrey titleBar center column">
    <p class="textRed titleSalers"><?= $houseInfo['results']['name'] ?></p>
    <div class=" row end">
        <img src="../../assets/media/images/greyPinIcon.svg">
        <p class="regularGreyText subSalersGrey">
            <?= $houseInfo['results']['adress'] ?><?= $houseInfo['results']['cp'] ?><?= $houseInfo['results']['city'] ?>
        </p>
    </div>
    <p class="lightSalerBlack">Tel : <?= $houseInfo['results']['tel'] ?>, Fax : <?= $houseInfo['results']['fax'] ?></p>
    <a href="#" class="lightSalerBlack"><?= $houseInfo['results']['web_site'] ?></a>
</div>

<section class="horizontalPadding">
    <?php foreach ($homeSales['results'] as $homeSale) { ?>
    <div class="superLightGrey wrap centerSpacebetween commonCard">
        <div class="row">
            <div class="firstColumn center">
                <img src="./assets/media/images/<?= $homeSale['imageInfo']['path'] ?>">
            </div>
            <div class="secondColumn columnSpacebetween">
                <p>Jusqu'au <?= $homeSale['sale_date'] ?></p>
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
                <div class="brightGreen dot"></div>
                <p class="brightGreenText">En ligne <?= $homeSale['timeRemainBeforeSale'] ?></p>
                <img src="../../assets/media/images/greenSablier.svg">
            </div>
            <div class="column">
                <a href="#" class="btnsBasicsPad strongGrey textWhite">Voir le catalogue</a>
                <a href="#" class="btnsBasicsPad brightGreen textWhite">Aller à la vente</a>
            </div>

        </div>
    </div>
    <?php
    } ?>

</section>

<?php

include 'templates/common/footer.php';

?>