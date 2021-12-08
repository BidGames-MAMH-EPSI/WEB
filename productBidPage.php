<?php

setlocale(LC_TIME, 'fr_FR');
date_default_timezone_set('Europe/Paris');

$object = file_get_contents("https://api.bidgames.store/object?object_id=" . $_GET['object_id'] . "&user_id=" . $_GET['user_id']);
$object = json_decode($object, true);

$sale = file_get_contents("https://api.bidgames.store/saleObjects?sale_id=". $_GET['sale_id']);
$sale = json_decode($sale, true);

include("templates/common/header.php");
?>
<section class="horizontalPadding">
    <div class="superLightGrey centerSpacebetween commonCard">
        <div>
            <div class="center white imageSection">
                <img class="productImage" src="assets/media/images/<?= $object['results']['images']['items'][0]['path'] ?>">
                <a href="#">
                    <img class="absolute favoriteHeartProduct" src="assets/media/images/fullHeartIcon.svg">
                </a>
                <a class="leftArrow absolute  superLightGrey" href="#">
                    <img src="assets/media/images/redArrow.svg">
                </a>
                <a class="rightArrow absolute  superLightGrey" href="#">
                    <img src="assets/media/images/redArrow.svg">
                </a>
            </div>
        </div>
        <div class="infoSection columnSpacebetween">
            <div class="centerSpacebetween">
                <div class="row yCenter">
                    <?php if ($object['results']['state'] == "Fermée") {
                        ?>
                        <div class="brightRed dot"></div>
                        <p class="brightRedText productTopText"><?= $object['results']['state'] ?></p>
                        <?php
                    } elseif ($object['results']['state'] == "En cours") {
                        ?>
                        <div class="brightGreen dot"></div>
                        <p class="brightGreenText productTopText"><?= $object['results']['state'] ?></p>
                        <?php
                    } else {
                        ?>
                        <div class="black dot"></div>
                        <p class="textBlack productTopText"><?= $object['results']['state'] ?></p>
                        <?php
                    }
                    ?>
                </div>
                <p class="productTopText">
                    <?= ucwords(utf8_encode(strftime("%A %d %B", strtotime($object['results']['date'])))) ?>
                </p>
            </div>
            <p class="productName"><?= $object['results']['name'] ?></p>
            <div>
                <div class="centerSpacebetween">
                    <p class="titleInfo">Temps restant</p>
                    <div class="row">
                        <?php
                        if($object['results']['state'] == "Fermée") {
                            ?>
                            <p class="brightRedText">Terminée</p>
                            <?php
                        } else {
                            ?>
                            <img class="blackSablier" src="../../assets/media/images/blackSablier.svg">
                            <p class="textBlack titleInfo">01j 00 h 20m 49s</p>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="whiteLine white"></div>
            </div>
            <div>
                <div class="centerSpacebetween">
                    <p class="titleInfo">Estimation</p>
                    <p class="titleInfo">30 - 70 EUR</p>
                </div>
                <div class="whiteLine white"></div>
            </div>
            <div>
                <div class="centerSpacebetween">
                    <p class="titleInfo">Prix de départ</p>
                    <p class="titleInfo"><?= $object['results']['lower_price'] ?> EUR</p>
                </div>
                <div class="whiteLine white"></div>
            </div>
            <div>
                <div class="columnSpacebetween">
                    <div class="centerSpacebetween">
                        <?php
                        if($object['results']['state'] == "Fermée") {
                            ?>
                            <p class="titleInfo">Enchère finale</p>
                            <p class="btnsBasicsPad lighterGreen actualBid"><?= $object['results']['current_bid'] ?> EUR</p>
                            <?php
                        } elseif ($object['results']['state'] == "En cours"){
                            ?>
                            <p class="titleInfo">Enchère actuelle</p>
                            <p class="btnsBasicsPad lighterGreen actualBid"><?= $object['results']['current_bid'] ?> EUR</p>
                            <?php
                        }else{
                            ?>
                            <p class="titleInfo">Enchère actuelle</p>
                            <p class="btnsBasicsPad lighterGreen actualBid">--.- EUR</p>

                       <?php
                        }
                        ?>
                    </div>
                    <div class="startSpacebetween">
                        <?php
                        if($object['results']['state'] == "En cours") {
                            ?>
                            <a class="btnsBasicsPad paleGreen textWhite" href="#">Encherir</a>
                            <div class="column end">
                                <input class="bidValue" placeholder="Montant de l'enchère">
                                <p class="regularGreyText conditionBid">Le montant doit être supérieur à 45 EUR</p>
                            </div>
                            <?php
                        } elseif($object['results']['state'] == "À venir") {
                            ?>
                            <div class="column center">
                                <input class="bidValue" placeholder="Ordre d'achat">
                                <div class="btnsBasicsPad black textWhite">Placer un ordre d'achat</div>
                            </div>
                            <div class="column center">
                                <input class="bidValue" placeholder="Vente Flash">
                                <div class="btnsBasicsPad paletRed textWhite">Vente Flash</div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="whiteLine white"></div>
            </div>
            <div>
                <p class="titleInfo">Information générales</p>
                <p class="descriptionInfo">Livraison : <span class="mediumText">Entre <?= $object['results']['general_informations']['delivery_price']['min'] ?> et <?= $object['results']['general_informations']['delivery_price']['max'] ?></span></p>
                <p class="descriptionInfo">
                    Delai de livraison :
                    <span class="descriptionText">
                    Estimé entre le
                    <span class="mediumText">
                        <?= ucwords(utf8_encode(strftime("%A %d %B", strtotime($object['results']['general_informations']['delivery_time']['min'])))) ?>
                        et
                        <?= ucwords(utf8_encode(strftime("%A %d %B", strtotime($object['results']['general_informations']['delivery_time']['max'])))) ?>
                    </span>
                </span>
                </p>
                <div class="payment centerSpacebetween">
                    <p>Moyen de paiement :</p>
                    <?php
                    foreach($object['results']['general_informations']['payment_ways'] as $payment_way) {
                        ?>
                        <a class="containerPayment" href="#">
                            <img src="assets/media/images/<?= $payment_way['image_path'] ?>">
                        </a>
                        <?php
                    }
                    ?>
                </div>
                <p class="descriptionInfo">Retour : <span class="descriptionText">Remboursement sous 14 jours, l’acheteur paie les frais de retour</span></p>
                <?php
                if($object['results']['state'] == "À venir") {
                    ?>
                    <div class="row">
                        <p class="saleDetails regularGreyText navLinks">* Un ordre d’achat permet de pouvoir tenir un enchère sans être présent sous contrôle d’un commissaire.</p>
                        <p class="saleDetails regularGreyText navLinks">** Une vente flash permet de proposer un prix au vendeur avant le début de la vente, s’il accepte, le lot est retiré de la vente et vous appartient.</p>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>

<?php
include ('templates/common/footer.php');
?>
