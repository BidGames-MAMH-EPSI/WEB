<?php
include('./head_admin.php');
?>
<div class="container">
    <div class="row">
        <div class="card xLarge-12 large-12 medium-12 small-12 xSmall-12">
            <div class="card-header">
                <h5 class="card-title">Administration</h5>
                <h2>Objets actuellement en vente</h2>
            </div>
            <div class="card-body">
                <table class="table tablesorter " id="">
                    <thead>
                        <tr>
                            <th><p>Nom</p></th>
                            <th><p>Dernière enchère</p></th>
                            <th><p>Mise à prix</p></th>
                            <th style="width: 100px"><p>Actions</p></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><p>Coucou</p></td>
                            <td><p>Coucou</p></td>
                            <td><p>Coucou</p></td>
                            <td style="width: 100px">
                                <ul>
                                    <li><a class="btn btn-default btn-sm btn-100 btn-outline" href="/admin/messages?mode=read&id"><p>Lire</p></a></li>
                                    <li><a class="btn btn-default btn-sm btn-100 btn-outline" href="/admin/messages?mode=delete&id"><p>Supprimer</p></a></li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card xLarge-6 large-6 medium-12 small-12 xSmall-12">
            <div class="card-header">
                <h5 class="card-title">Administration</h5>
                <h2>Objets actuellement en vente</h2>
            </div>
            <div class="card-body">
                <table class="table tablesorter " id="">
                    <thead>
                        <tr>
                            <th><p>Nom</p></th>
                            <th><p>Dernière enchère</p></th>
                            <th><p>Mise à prix</p></th>
                            <th style="width: 100px"><p>Actions</p></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><p>Coucou</p></td>
                            <td><p>Coucou</p></td>
                            <td><p>Coucou</p></td>
                            <td style="width: 100px">
                                <ul>
                                    <li><a class="btn btn-default btn-sm btn-100 btn-outline" href="/admin/messages?mode=read&id"><p>Lire</p></a></li>
                                    <li><a class="btn btn-default btn-sm btn-100 btn-outline" href="/admin/messages?mode=delete&id"><p>Supprimer</p></a></li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card xLarge-6 large-6 medium-12 small-12 xSmall-12">
            <div class="card-header">
                <h5 class="card-title">Administration</h5>
                <h2>Objets actuellement en vente</h2>
            </div>
            <div class="card-body">
                <table class="table tablesorter " id="">
                    <thead>
                        <tr>
                            <th><p>Nom</p></th>
                            <th><p>Dernière enchère</p></th>
                            <th><p>Mise à prix</p></th>
                            <th style="width: 100px"><p>Actions</p></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><p>Coucou</p></td>
                            <td><p>Coucou</p></td>
                            <td><p>Coucou</p></td>
                            <td style="width: 100px">
                                <ul>
                                    <li><a class="btn btn-default btn-sm btn-100 btn-outline" href="/admin/messages?mode=read&id"><p>Lire</p></a></li>
                                    <li><a class="btn btn-default btn-sm btn-100 btn-outline" href="/admin/messages?mode=delete&id"><p>Supprimer</p></a></li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card xLarge-4 large-4 medium-12 small-12 xSmall-12">
            <div class="card-header">
                <h5 class="card-category">Voici un cadre</h5>
                <h2>Mon titre</h2>
            </div>
            <div class="card-header">

            </div>
        </div>
        <div class="card xLarge-4 large-4 medium-12 small-12 xSmall-12">
            <div class="card-header">
                <h5 class="card-category">Voici un cadre</h5>
                <h2>Mon titre</h2>
            </div>
            <div class="card-header">

            </div>
        </div>
        <div class="card xLarge-4 large-4 medium-12 small-12 xSmall-12">
            <div class="card-header">
                <h5 class="card-category">Voici un cadre</h5>
                <h2>Mon titre</h2>
            </div>
            <div class="card-header">

            </div>
        </div>
    </div>
</div>

    <!-- <section class="row wrap" id="section_admin">
        <div class="xLarge-10 large-10 medium-12 small-12 xSmall-12">
            <div class="edit_fields">
                <p class="table_title">Les bénévoles</p>
                <p class="second_table_title">Ajouter un bénévole</p>
                <form class="edit_form" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="new" value="ok">
                    <div class="row wrap">
                        <label>Prénom</label>
                        <input type="text" name="lastname" required>
                    </div>
                    <div class="row wrap">
                        <label>Nom</label>
                        <input type="text" name="firstname" required>
                    </div>
                    <div class="row wrap">
                        <label>Numéro de téléphone</label>
                        <input type="tel" name="phone" required>
                    </div>
                    <div class="row wrap">
                        <label>Adresse</label>
                        <input type="text" name="address" required>
                    </div>
                    <div class="row wrap">
                        <label>Complément d'adresse</label>
                        <input type="text" name="address_details">
                    </div>
                    <div class="row wrap">
                        <label>E-mail</label>
                        <input type="text" name="email" required>
                    </div>
                    <div class="row wrap">
                        <label>Ville</label>
                        <input type="text" name="city" required>
                    </div>
                    <div class="row wrap">
                        <button type="submit" class="save">Enregistrer</button>
                    </div>
                </form>
            </div>

        </div>
    </section>

    <section class="row wrap" id="section_admin">

        <div class="xLarge-10 large-10 medium-12 small-12 xSmall-12">
            <div class="edit_fields">
                <p class="table_title">Les bénévoles</p>
                <p class="second_table_title">Informations pour ce bénévole</p>
                <form class="edit_form" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="edit" value="ok">
                    <input type="hidden" name="id" value="test">
                    <div class="row wrap">
                        <label>Prénom</label>
                        <input disabled type="text" name="lastname" required value="<?= $result['lastname'] ?>">
                    </div>
                    <div class="row wrap">
                        <label>Nom</label>
                        <input disabled type="text" name="firstname" required value="<?= $result['firstname'] ?>">
                    </div>
                    <div class="row wrap">
                        <label>Numéro de téléphone</label>
                        <input disabled type="tel" name="phone" required value="<?= $result['phone'] ?>">
                    </div>
                    <div class="row wrap">
                        <label>Adresse</label>
                        <input disabled type="text" name="address" required value="<?= $result['address'] ?>">
                    </div>
                    <div class="row wrap">
                        <label>Complément d'adresse</label>
                        <input disabled type="text" name="address_details" value="<?= $result['address_details'] ?>">
                    </div>
                    <div class="row wrap">
                        <label>E-mail</label>
                        <input disabled type="text" name="email" required value="<?= $result['email'] ?>">
                    </div>
                    <div class="row wrap">
                        <label>Ville</label>
                        <input disabled type="text" name="city" required value="<?= $result['city'] ?>">
                    </div>
                </form>
            </div>

        </div>
    </section>

    <section class="row wrap" id="section_admin">
        <div class="xLarge-10 large-10 medium-12 small-12 xSmall-12">
            <div class="edit_fields">
                <p class="table_title">Les bénévoles</p>
                <p class="second_table_title">Modifier ce bénévole</p>
                <form class="edit_form" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="edit" value="ok">
                    <input type="hidden" name="id" value="<?= $result['id'] ?>">
                    <div class="row wrap">
                        <label>Prénom</label>
                        <input type="text" name="lastname" required value="<?= $result['lastname'] ?>">
                    </div>
                    <div class="row wrap">
                        <label>Nom</label>
                        <input type="text" name="firstname" required value="<?= $result['firstname'] ?>">
                    </div>
                    <div class="row wrap">
                        <label>Numéro de téléphone</label>
                        <input type="tel" name="phone" required value="<?= $result['phone'] ?>">
                    </div>
                    <div class="row wrap">
                        <label>Adresse</label>
                        <input type="text" name="address" required value="<?= $result['address'] ?>">
                    </div>
                    <div class="row wrap">
                        <label>Complément d'adresse</label>
                        <input type="text" name="address_details" value="<?= $result['address_details'] ?>">
                    </div>
                    <div class="row wrap">
                        <label>E-mail</label>
                        <input type="text" name="email" required value="<?= $result['email'] ?>">
                    </div>
                    <div class="row wrap">
                        <label>Ville</label>
                        <input type="text" name="city" required value="<?= $result['city'] ?>">
                    </div>
                    <div class="row wrap">
                        <button type="submit" class="save">Enregistrer</button>
                    </div>
                </form>
            </div>

        </div>
    </section> -->
<?php
include('./footer_admin.php');
?>