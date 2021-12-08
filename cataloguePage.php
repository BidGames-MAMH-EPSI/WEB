<?php

include 'templates/common/header.php';

$saleObjects = file_get_contents("https://api.bidgames.store/saleObjects?sale_id=".$_GET['sale_id']);
$saleObjects = json_decode($saleObjects, true);

$sale = file_get_contents("https://api.bidgames.store/sale?sale_id=".$_GET['sale_id']);
$sale = json_decode($sale, true);

$propositionsObjectsSale = file_get_contents("https://api.bidgames.store/propositionsObjectsSale?sale_id=".$_GET['sale_id']);
$propositionsObjectsSale = json_decode($propositionsObjectsSale, true);
?>

<section class="horizontalPadding mgTopXl">
    <div class="commonCard lightGrey startSpacebetween">
        <div class="columnSpacebetween stretch">
            <p class="brightGreenText">Clôture des enchères à partir du <span class="boldText">dimanche 28 nov.20:00 (CET)</span></p>
            <p class="saleNameDetails"><?= $sale['results']['name'] ?></p>
            <p class="categorySale"></p>
            <div class="column">
                <div class="iconSale row end">
                    <img src="../../assets/media/images/blackHammerIcon.svg">
                    <a href="#" class="saleDetails textBlack"><?= $sale['results']['house']['name'] ?></a>
                </div>
                <div class="iconSale row end">
                    <img src="../../assets/media/images/blackPinIcon.svg">
                    <p class="saleDetails textBlack"><?= $sale['results']['house']['adress'] ?></p>
                </div>
            </div>
            <div class="containerLogBtn row">
                <a class="btnsLogin btnsSale white" href="#">
                    <img src="../../assets/media/images/infoIcon.svg">Information de vente
                </a>
                <a class="btnsLogin btnsSale white" href="#">
                    <img src="../../assets/media/images/fileIcon.svg">Conditions de vente
                </a>
            </div>

        </div>
        <div class="stretch column">
            <img class="imgSale" src="../../assets/media/images/salersImage.jpg">
            <a href="#" class="linkSaleDetails">>>Voir toutes les ventes <?= $sale['results']['house']['name'] ?></a>
        </div>

        <div class="stretch">
            <div class="row centerSpacebetween">
                <div class="brightGreen dot"></div>
                <p class="brightGreenText">En ligne 01j 00 h 20m 49s</p>
                <img class="greenSablierDetails" src="../../assets/media/images/greenSablier.svg">
            </div>

        </div>

    </div>
</section>

<?php
if(isset($propositionsObjectsSale['results']) && count($propositionsObjectsSale['results']) > 0) {
    ?>
    <div class="column">
        <div class="center mgBotXl mgTopXl littleTitle">Vous aimerez peut-être</div>
        <div class="horizontalPadding centerSpacebetween">
            <?php
            foreach($propositionsObjectsSale['results'] as $propositionObjectSale) {
                ?>
                <div class="superLightGrey column center cardProposition">
                        <div class="propositionContainer center"
                             style="
                                     background-image: url('../../assets/media/images/<?= $propositionObjectSale['images']['items'][0]['path'] ?>');
                                     background-position: center;
                                     background-size: contain;
                                     background-repeat: no-repeat;
                                     "
                        >
                            <a href="#">
                                <img class="absolute favoriteHeartProposition" src="../../assets/media/images/emptyHeartIcon.svg">
                            </a>
                            <div class="absolute pictureNumberProposition">
                                <p class="regularGreyText">1/<?= $propositionObjectSale['images']['total'] ?></p>
                            </div>

                        </div>
                    <div class="descriptionProposition">
                        <a href="productBidPage?object_id=<?= $propositionObjectSale['id'] ?>" class="titleProposition"><?= $propositionObjectSale['name'] ?></a>
                        <p class="estimationProposition">Estim. <?= $propositionObjectSale['estimation']['min'] ?> - <?= $propositionObjectSale['estimation']['max'] ?> EUR</p>
                        <p class="ellipsis"><?= $propositionObjectSale['description'] ?></p>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <?php
}
?>

<section class="horizontalPadding">
    <?php
    foreach($saleObjects['results'] as $saleObject) {
        ?>
        <div class="superLightGrey wrap centerSpacebetween commonCard">
            <div class="row container2FirstRows">
                <div
                    style="
                        background-image: url('../../assets/media/images/<?= $saleObject['images']['items'][0]['path'] ?>');
                        background-position: center;
                        background-size: contain;
                        background-repeat: no-repeat;
                        "
                    class="firstColumnProduct center">
                    <a href="#">
                        <img class="absolute favoriteHeart" src="../../assets/media/images/<?= $saleObject['favorites'] ? 'fullHeartIcon' : 'emptyHeartIcon' ?>.svg">
                    </a>
                    <div class="absolute pictureNumber">
                        <p class="regularGreyText">1/<?= $saleObject['images']['total'] ?></p>
                    </div>

                </div>
                <div class="secondColumnProduct columnSpacebetween">
                    <p><?= $saleObject['name'] ?></p>
                    <p class="categoryProduct"><?= $saleObject['category']['name'] ?></p>
                    <p class="descriptionProduct"><?= strlen($saleObject['description']) > 350 ? substr($saleObject['description'],0,350)."..." : $saleObject['description']; ?></p>

                    <p class="estimationPriceProduct regularGreyText">Estimation <?= $saleObject['estimation']['min'] ?> - <?= $saleObject['estimation']['max'] ?> eur</p>


                </div>
            </div>
            <div class="thirdColumnProduct columnSpacebetween end">

                <p class="<?= $saleObject['status'] == 'À venir' || $saleObject['status'] == 'En cours' ? 'brightGreenText' : 'brightRedText' ?> mediumText"><?= $saleObject['remain_time'] ?></p>

                <div class="row column end bidInfo">
                    <h1>
                        <?php
                        if(empty($saleObject['bid_price']) && ($saleObject['status'] == 'À venir' || $saleObject['status'] == 'En cours')) {
                            echo 'Mise à prix '.$saleObject['lower_price'].' EUR';
                        } elseif(empty($saleObject['bid_price']) && $saleObject['status'] == 'Non vendu') {
                            echo 'Enchères terminées';
                        } elseif(!empty($saleObject['bid_price']) && $saleObject['status'] == 'Vendu') {
                            echo 'Résultat '.$saleObject['bid_price'].' EUR';
                        } elseif(!empty($saleObject['bid_price']) && $saleObject['status'] == 'En cours') {
                            echo 'Enchères '.$saleObject['bid_price'].' EUR';
                        }
                        ?>
                    </h1>
                    <p class="regularGreyText"><?= strtoupper($saleObject['status']) ?></p>
                </div>

                <?php
                if($saleObject['status'] == 'Non vendu' || $saleObject['status'] == 'Vendu') {
                    ?>
                    <a href="productBidPage?object_id=<?= $saleObject['id'] ?>" class="btnsBasicsPad brightRed textWhite">Voir le lot</a>
                    <?php
                } elseif($saleObject['status'] == 'En cours') {
                    ?>
                    <div class="column">
                        <a href="#" class="btnsBasicsPad brightGreen textWhite">Enchérir</a>
                        <a href="productBidPage?object_id=<?= $saleObject['id'] ?>" class="btnsBasicsPad white textBlack">Voir le lot</a>
                    </div>
                    <?php
                } elseif($saleObject['status'] == 'À venir') {
                    ?>
                    <div class="column">
                        <a href="#" class="btnsBasicsPad white textBlack">Ordre de vente</a>
                        <a href="productBidPage?object_id=<?= $saleObject['id'] ?>" class="btnsBasicsPad white textBlack">Voir le lot</a>
                    </div>
                    <?php
                }
                ?>

            </div>
        </div>
        <?php
    }
    ?>
    </section>

<?php

include 'templates/common/footer.php';

?>