<?php
define("PRIX_PLAT", 5000);
define("PRIX_DESERT", 3000);
define("PRIX_BOISSON", 1500);
$nbPlats = 6;
$nbDesserts = 6;
$nbBoissons = 3;

$mtHT = PRIX_PLAT * $nbPlats + PRIX_DESERT * $nbDesserts + PRIX_BOISSON * $nbBoissons;

$code = rand(1000, 9999);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        body {
            background: #eee;
            margin-top: 20px;
        }

        .text-danger strong {
            color: #9f181c;
        }

        .receipt-main {
            background: #ffffff none repeat scroll 0 0;
            border-bottom: 12px solid #333333;
            border-top: 12px solid #9f181c;
            margin-top: 50px;
            margin-bottom: 50px;
            padding: 40px 30px !important;
            position: relative;
            box-shadow: 0 1px 21px #acacac;
            color: #333333;
            font-family: open sans;
        }

        .receipt-main p {
            color: #333333;
            font-family: open sans;
            line-height: 1.42857;
        }

        .receipt-footer h1 {
            font-size: 15px;
            font-weight: 400 !important;
            margin: 0 !important;
        }

        .receipt-main::after {
            background: #414143 none repeat scroll 0 0;
            content: "";
            height: 5px;
            left: 0;
            position: absolute;
            right: 0;
            top: -13px;
        }

        .receipt-main thead {
            background: #414143 none repeat scroll 0 0;
        }

        .receipt-main thead th {
            color: #fff;
        }

        .receipt-right h5 {
            font-size: 16px;
            font-weight: bold;
            margin: 0 0 7px 0;
        }

        .receipt-right p {
            font-size: 12px;
            margin: 0px;
        }

        .receipt-right p i {
            text-align: center;
            width: 18px;
        }

        .receipt-main td {
            padding: 9px 20px !important;
        }

        .receipt-main th {
            padding: 13px 20px !important;
        }

        .receipt-main td {
            font-size: 13px;
            font-weight: initial !important;
        }

        .receipt-main td p:last-child {
            margin: 0;
            padding: 0;
        }

        .receipt-main td h2 {
            font-size: 20px;
            font-weight: 900;
            margin: 0;
            text-transform: uppercase;
        }

        .receipt-header-mid .receipt-left h1 {
            font-weight: 100;
            margin: 34px 0 0;
            text-align: right;
            text-transform: uppercase;
        }

        .receipt-header-mid {
            margin: 24px 0;
            overflow: hidden;
        }

        #container {
            background-color: #dcdcdc;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>

    <div class="container col-12">
        <div class="row">

            <div class="row receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
                <div class="col-5">
                    <div class="receipt-header">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="receipt-left">
                                <img class="img-responsive" alt="iamgurdeeposahan" src="https://bootdey.com/img/Content/avatar/avatar6.png" style="width: 71px; border-radius: 43px;">
                            </div>
                        </div>
                        <div class="col-8 text-right">
                            <div class="receipt-right">
                                <h5>Nom de la compagnie</h5>
                                <p>Telephone de la compagnie <i class="fa fa-phone"></i></p>
                                <p>email de la compagnie <i class="fa fa-envelope-o"></i></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-7">
                    <div class="receipt-header receipt-header-mid">
                        <div class="col-xs-6 col-sm-6 col-md-6 text-left">
                            <div class="receipt-right">
                                <h5>Customer Name </h5>
                                <p><b>Mobile :</b> +1 12345-4569</p>
                                <p><b>Email :</b> customer@gmail.com</p>
                                <p><b>Address :</b> New York, USA</p>
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="receipt-left">
                                <h5>Numero facture #JH-<?= $code ?> </h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th class="text-dark">Description</th>
                                <th class="text-dark">Prix Unitaire</th>
                                <th class="text-dark">Quantite</th>
                                <th class="text-dark">Prix Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="col-md-9">PLAT</td>
                                <td class="col-md-3"><i class="fa fa-inr"></i> <?= PRIX_PLAT ?> </td>
                                <td class="col-md-3"><i class="fa fa-inr"></i> <?= $nbPlats ?></td>
                                <td class="col-md-3"><i class="fa fa-inr"></i> <?= PRIX_PLAT * $nbPlats ?> </td>
                            </tr>
                            <tr>
                                <td class="col-md-9">DESSERT</td>
                                <td class="col-md-3"><i class="fa fa-inr"></i> <?= PRIX_DESERT ?></td>
                                <td class="col-md-3"><i class="fa fa-inr"></i> <?= $nbDesserts ?></td>
                                <td class="col-md-3"><i class="fa fa-inr"></i><?= PRIX_DESERT * $nbDesserts ?></td>
                            </tr>
                            <tr>
                                <td class="col-md-9">BOISSON</td>
                                <td class="col-md-3"><i class="fa fa-inr"></i> <?= PRIX_BOISSON ?></td>
                                <td class="col-md-3"><i class="fa fa-inr"></i> <?= $nbBoissons ?></td>
                                <td class="col-md-3"><i class="fa fa-inr"></i><?= PRIX_BOISSON * $nbBoissons ?></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-right">
                                    <p>
                                        <strong>Montant Hors Taxe: </strong>
                                    </p>
                                    <p>
                                        <strong>Promo Happy Hours : </strong>
                                    </p>
                                    <p>
                                        <strong>Combo (Plat+Boisson): </strong>
                                    </p>
                                    <p>
                                        <strong>Code chance: </strong>
                                    </p>
                                </td>
                                <td colspan="2">
                                    <p>
                                        <strong><i class="fa fa-inr"></i> <?= $mtHT ?> FCFA </strong>
                                    </p>
                                    <p>
                                        <strong><i class="fa fa-inr"></i> -10% </strong>
                                    </p>
                                    <p>
                                        <strong><i class="fa fa-inr"></i> -200 FCFA </strong>
                                    </p>
                                    <p>
                                        <strong><i class="fa fa-inr"></i> 5625</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>

                                <td colspan="2" class="text-right">
                                    <h2><strong>Total: </strong></h2>
                                </td>
                                <td colspan="2" class="text-left text-danger">
                                    <h2><strong><i class="fa fa-inr"></i> 6500 FCFA</strong></h2>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <div class="receipt-header receipt-header-mid receipt-footer">
                        <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                            <div class="receipt-right">
                                <p><b>Date :</b> 8 Septembre 2025</p>
                                <h5 style="color: rgb(140, 140, 140);">Merci pour votre confiance.!</h5>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 text-right">
                            <div class="receipt-left">
                                <h1>Signature</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

</body>

</html>