<?php

setlocale(LC_TIME, 'fr_FR');

date_default_timezone_set('Europe/Paris');

$object = file_get_contents("https://api.bidgames.store/object?object_id=". $_GET['object_id'] . "&user_id=" . $_GET['user_id']);

// echo $object;

$sale = file_get_contents("https://api.bidgames.store/saleObjects?sale_id=". $_GET['sale_id']);

$object = json_decode($object, true);

$sale = json_decode($sale, true);

$all_objects_sale = array();

foreach ($sale[0]['results'] as $object) {

    echo $object;

    // array_push($all_objects_sale, $object);

};

include("templates/common/header.php")

?>
    <div class="superLightGrey centerSpacebetween commonCard">
        <div>
            <div class="center white imageSection">

                <img class="productImage" src="../../assets/media/images/cardProduct.jpg">
                <a href="#">
                    <img class="absolute favoriteHeartProduct" src="../../assets/media/images/fullHeartIcon.svg">
                </a>

                <a class="leftArrow absolute  superLightGrey" href="#">
                    <img src="../../assets/media/images/redArrow.svg">
                </a>
                <a class="rightArrow absolute  superLightGrey" href="#">
                    <img  src="../../assets/media/images/redArrow.svg">
                </a>

            </div>
        </div>
        <div class="infoSection columnSpacebetween">
            <div class="centerSpacebetween">
                <div class="row yCenter">
                    <?php
                    if($object['results']['state'] == "Fermée") {
                        ?>
                        <div class="brightRed dot"></div>
                        <p class="brightRedText productTopText"><?php echo $object['results']['state'] ?></p>
                        <?php
                    } elseif ($object['results']['state'] == "En cours") {
                        ?>
                        <div class="brightGreen dot"></div>
                        <p class="brightGreenText productTopText"><?php echo $object['results']['state'] ?></p>

                        <?php
                    } else {
                        ?>
                        <div class="black dot"></div>

                        <p class="textBlack productTopText"><?php echo $object['results']['state'] ?></p>
                        <?php
                    };
                    ?>
                </div>
                <p class="productTopText">Mardi 23 dec.</p>
            </div>
            <p class="productName">Jeux de cartes Bicycle 54 cartes</p>
            <div>
                <div class="centerSpacebetween">
                    <p class="titleInfo">Temps restant</p>
                    <div class="row">
                        <img class="blackSablier" src="../../assets/media/images/blackSablier.svg">
                        <p class="textBlack titleInfo" >01j 00 h 20m 49s</p>
                    </div>
                </div>
                <div class="whiteLine white"></div>
            </div>
            <div>
                <div class="centerSpacebetween">
                    <p class="titleInfo">Estimation</p>
                    <p class="titleInfo">40 - 60 EUR</p>
                </div>
                <div class="whiteLine white"></div>
            </div>
           <div>
               <div class="centerSpacebetween">
                   <p class="titleInfo">Prix de départ</p>
                   <p class="titleInfo">20 EUR</p>
               </div>
               <div class="whiteLine white"></div>
           </div>
            <div>
                <div class="columnSpacebetween">
                    <div class="centerSpacebetween">
                        <p class="titleInfo">Enchère actuelle</p>
                        <p class="btnsBasicsPad lighterGreen actualBid">45.00 EUR</p>

                    </div>
                    <div class="startSpacebetween">
                        <a class="btnsBasicsPad paleGreen textWhite" href="#">Encherir</a>
                        <div class="column end">
                            <input class="bidValue" placeholder="Montant de l'enchère">
                            <p class="regularGreyText conditionBid">Le montant doit être supérieur à 45 EUR</p>
                        </div>

                    </div>
                </div>
                <div class="whiteLine white"></div>
            </div>


            <div>
                <p class="titleInfo">Information générales</p>
                <p class="descriptionInfo">Livraison : <span class="mediumText">7.00 EUR</span></p>
                <p class="descriptionInfo">Delai de livraison : <span class="descriptionText">Estimé entre le <span class="mediumText">lundi 5 janv. et le mercredi 20 janv.</span></span></p>
                <div class="payment centerSpacebetween">
                    <p>Moyen de paiement :</p>
                    <a class="containerPayment" href="#">
                        <img src="../../assets/media/images/paypalLogo.svg">
                    </a>
                    <a class="containerPayment" href="#">
                        <img src="../../assets/media/images/paypalLogo.svg">
                    </a>
                    <a class="containerPayment" href="#">
                        <img src="../../assets/media/images/paypalLogo.svg">
                    </a>
                    <a class="containerPayment" href="#">
                        <img src="../../assets/media/images/paypalLogo.svg">
                    </a>
                </div>
                <p class="descriptionInfo">Retour : <span class="descriptionText">Remboursement sous 14 jours, l’acheteur paie les frais de retour</span></p>
            </div>

        </div>



    </div>

</section>


<script type="text/javascript" src="../../assets/js/script.js"></script>
</body>
 