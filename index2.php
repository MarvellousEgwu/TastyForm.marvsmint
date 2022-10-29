<?php

if (isset($_POST['leef'])) {
    $q1 = $_POST['leef'];
}

if (isset($_POST['ges'])) {
    $q2 = $_POST['ges'];
}

if (isset($_POST['gezins'])) {
    $q3 = $_POST['gezins'];
}

if (isset($_POST['burger'])) {
    $q4 = $_POST['burger'];
}

if (isset($_POST['lij'])) {
    $q5 = $_POST['lij'];
}

if (isset($_POST['medic'])) {
    $q6 = $_POST['medic'];
}

if (isset($_POST['gewi'])) {
    $q7 = $_POST['gewi'];
}

if (isset($_POST['lengte'])) {
    $q8 = $_POST['lengte'];
}

if (isset($_POST['lust'])) {
    $q9 = $_POST['lust'];
}

if (isset($_POST['was'])) {
    $q10 = $_POST['was'];
}

if (isset($_POST['zat'])) {
    $q11 = $_POST['zat'];
}

if (isset($_POST['rustig'])) {
    $q12 = $_POST['rustig'];
}

if (isset($_POST['had'])) {
    $q13 = $_POST['had'];
}

if (isset($_POST['neer'])) {
    $q14 = $_POST['neer'];
}

if (isset($_POST['zich'])) {
    $q15 = $_POST['zich'];
}

if (isset($_POST['geluk'])) {
    $q16 = $_POST['geluk'];
}

if (isset($_POST['moe'])) {
    $q17 = $_POST['moe'];
}

if (isset($_POST['vaak'])) {
    $q18 = $_POST['vaak'];
}

if (isset($_POST['meer'])) {
    $q19 = $_POST['meer'];
}

if (isset($_POST['drinkt'])) {
    $q20 = $_POST['drinkt'];
}

if (isset($_POST['aano'])) {
    $q21 = $_POST['aano'];
}

if (isset($_POST['welke'])) {
    $q22 = $_POST['welke'];
}

if (isset($_POST['supple'])) {
    $q23 = $_POST['supple'];
}

if (isset($_POST['minimaal'])) {
    $q24 = $_POST['minimaal'];
}

if (isset($_POST['dage'])) {
    $q25 = $_POST['dage'];
}

if (isset($_POST['maakt'])) {
    $q26 = $_POST['maakt'];
}

if (isset($_POST['hand'])) {
    $q27 = $_POST['hand'];
}

if (isset($_POST['bruine'])) {
    $q28 = $_POST['bruine'];
}

if (isset($_POST['fruit'])) {
    $q29 = $_POST['fruit'];
}

if (isset($_POST['flinke'])) {
    $q30 = $_POST['flinke'];
}

if (isset($_POST['gevo'])) {
    $q31 = $_POST['gevo'];
}

if (isset($_POST['vla'])) {
    $q32 = $_POST['vla'];
}

if (isset($_POST['wekel'])) {
    $q33 = $_POST['wekel'];
}

if (isset($_POST['text0'])) {
    $text0 = $_POST['text0'];
}

if (isset($_POST['text1'])) {
    $text1 = $_POST['text1'];
}

if (isset($_POST['text2'])) {
    $text2 = $_POST['text2'];
}

if (isset($_POST['text3'])) {
    $text3 = $_POST['text3'];
}

if (isset($_POST['text4'])) {
    $text4 = $_POST['text4'];
}

if (isset($_POST['text5'])) {
    $text5 = $_POST['text5'];
}

$form_id = $_POST['formid'];

$split = explode(',', $form_id);
$splitted = [];
$desiredValue = [];

for ($i = 0; $i < count($split); ++$i) {
    if ($split[$i] !== '') {
        array_push($splitted, $split[$i]);
    }
}

for ($i = 0; $i < count($splitted); ++$i) {
    $replaced  = preg_replace('/[a-zA-Z]*/', '', $splitted[$i]);
    $desiredValue[$replaced] = $splitted[$i];
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>taster form</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/assignment3.css">
</head>

<body>
    <div class="container">
        <table>
            <tr>
                <td>1.</td>
                <td>leeftijd</td>
                <td colspan="3" id="1" class="form-field"> <input type="text" name="leef" id="leef" placeholder="Voer uw leeftijd in"> <span id="jaar">jaar</span>
                    <small></small>
                </td>

            </tr>
            <tr class="has-checkbox">
                <td>2.</td>
                <td>Geslacht</td>
                <td id="man"><input type="checkbox" name="ges" id="ges2" value="Man"> Man</td>
                <td id="vow"><input type="checkbox" name="ges" id="gesm2" value="vrouw"> Vrouw</td>
                <td id="red"> <input type="checkbox" name="ges" id="gesn2" value="Nonbinair"> Nonbinair</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Gezinssamenstelling</td>
                <!-- <td colspan="3"><input type="number" placeholder="input a number 1-10"></td> -->
                <td colspan="3" class="form-field">
                    <input type="text" placeholder="Hoeveel gezinsleden?" name="gezins" id="gezins">
                    <small></small>
                </td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Burgerlijke staat</td>
                <td colspan="3" class="form-field">
                    <input type="text" placeholder="Noteer hier uw antwoord" id="burger" name="burger">
                    <small></small>
                </td>
            </tr>
            <tr class="has-checkbox">
                <td>5.</td>
                <td>lijdt u aan een aandoening. Zo ja, welke.</td>
                <td class="form-field">
                    <label class="main">Ja, te weten
                        <input type="checkbox" name="lij" id="lij5" class="text-depended text0" value="">
                        <span class="geekmark"></span>
                    </label>
                    <input type="text" placeholder="Noteer hier uw antwoord" id="text0" class="text-value" name="text0" id="text0">
                    <small></small>
                </td>
                <td colspan="2"> <input type="checkbox" name="lij" id="lijn5" value="nee" class="clear-values"> Nee</td>
            </tr>
            <tr class="has-checkbox">
                <td>6.</td>
                <td>Gebruikt u medicijinen. <br> Zo ja, welke. </td>
                <td>
                    <label class="main">Ja, te weten
                        <input type="checkbox" name="medic" id="medic6" value="" class="text-depended text1">
                        <span class="geekmark"></span>
                    </label>
                    <input type="text" placeholder="Medicatie" name="text1" id="text1" class="text-value">
                </td>
                <td colspan="2"><input type="checkbox" name="medic" id="medicn6" value="nee" class="clear-values"> Nee</td>

            </tr>
            <tr>
                <td>7.</td>
                <td>Gewicht</td>
                <td colspan="3" class="form-field">
                    <input type="text" placeholder="Noteer hier uw antwoord" name="gewi" id="gewi">
                    <span id="jaar"> kg (nagevraagd-gewogen)</span>
                    <small></small>
                </td>
            </tr>
            <tr>
                <td>8.</td>
                <td>lengte</td>
                <td colspan="3" class="form-field">
                    <input type="text" placeholder="Noteer hier uw antwoord" name="lengte" id="lengte">
                    <span id="jaar">in centimeters (nagevraagd-gemeten) </span>
                    <small></small>
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="4">voelde u zich afgelopen maand:
                </td>
            </tr>
            <tr class="has-checkbox">
                <td>9.</td>
                <td>levenslusting?</td>
                <td> <input type="checkbox" name="lust" id="lust9" value="ja"> Ja</td>
                <td colspan="2"> <input type="checkbox" name="lust" id="lustn9" value="nee"> Nee</td>
            </tr>
            <tr class="has-checkbox">
                <td>10.</td>
                <td>was u zenuwachtig?</td>
                <td><input type="checkbox" name="was" id="was10" value="ja"> Ja</td>
                <td colspan="2"> <input type="checkbox" name="was" id="wasn10" value="nee"> Nee</td>
            </tr>
            <tr class="has-checkbox blur-9">
                <td>11.</td>
                <td>zat u zo in de put dat niets u kon opvrolijken?</td>
                <td><input type="checkbox" name="zat" id="zat11" value="ja"> Ja</td>
                <td colspan="2"><input type="checkbox" name="zat" id="zatn11" value="nee"> Nee</td>
            </tr>
            <tr class="has-checkbox blur-11">
                <td>12.</td>
                <td>Rustig en tevreden?</td>
                <td><input type="checkbox" name="rustig" id="rustig12" value="ja"> Ja</td>
                <td colspan="2"><input type="checkbox" name="rustig" id="rustign12" value="nee"> Nee</td>
            </tr>
            <tr class="has-checkbox blur-11">
                <td>13.</td>
                <td>Had u veelegergie?</td>
                <td><input type="checkbox" name="had" id="had13" value="ja"> Ja</td>
                <td colspan="2"><input type="checkbox" name="had" id="hadn13" value="nee"> Nee</td>
            </tr>
            <tr class="has-checkbox blur-9">
                <td>14.</td>
                <td> Voelde u zich somberen neerslachtig?</td>
                <td><input type="checkbox" name="neer" id="neer14" value="ja"> Ja</td>
                <td colspan="2"><input type="checkbox" name="neer" id="neern14" value="nee"> Nee</td>
            </tr>
            <tr class="has-checkbox blur-9">
                <td>15.</td>
                <td> Voelde u zich uitgeput?</td>
                <td><input type="checkbox" name="zich" id="zich15" value="ja"> Ja</td>
                <td colspan="2"><input type="checkbox" name="zich" id="zichn15" value="nee"> Nee</td>
            </tr>
            <tr class="has-checkbox blur-11">
                <td>16.</td>
                <td> Was u een gelukkigmens?</td>
                <td><input type="checkbox" name="geluk" id="geluk16" value="ja"> Ja</td>
                <td colspan="2"><input type="checkbox" name="geluk" id="gelukn16" value="nee"> Nee</td>
            </tr>
            <tr class="has-checkbox">
                <td>17.</td>
                <td> Voelde u zich moe?</td>
                <td><input type="checkbox" name="moe" id="moe17" value="ja"> Ja</td>
                <td colspan="2"><input type="checkbox" name="moe" id="moen17" value="nee"> Nee</td>
            </tr>
            <tr class="has-checkbox">
                <td>18.</td>
                <td> Hoe vaak hebben uw lichamelijke gezondheld of emotionele problemen (angstig of somber) u de afgelopen maand
                    gehinderd bij het doen van uw werk, dagelijkse bezigheden of uw sociale contacten (familie, vrienden, buren,
                    collega's)?</td>
                <td><input type="checkbox" name="vaak" id="vaak18" value="ja"> Ja</td>
                <td colspan="2"><input type="checkbox" name="vaak" id="vaakn18" value="nee"> Nee</td>
            </tr>
            <tr class="has-checkbox">
                <td>19.</td>
                <td> Rookt u meer dan 10 sigaretten of sigaren per dag?</td>
                <td>
                    <label class="main">Ja
                        <input type="checkbox" name="meer" id="meer19" value="ja">
                        <span class="geekmark"></span>
                    </label>
                </td>
                <td colspan="2"><input type="checkbox" name="meer" id="meern19" value="nee"> Nee</td>
            </tr>
            <tr class="has-checkbox">
                <td>20.</td>
                <td> Drinkt u meer dan 1 alcoholische consumptie per dag? zo ja,hoeveel.</td>
                <td class="form-field">
                    <label class="main">Ja
                        <input type="checkbox" name="drinkt" id="drinkt20" value="" class="text-depended text2">
                        <span class="geekmark"></span>
                    </label>
                    <input type="text" placeholder="Hoeveel consumpties" name="text2" id="text2" class="text-value">
                    <small></small>
                </td>
                <td colspan="2"><input type="checkbox" name="drinkt" id="drinktn20" value="nee" class="clear-values"> Nee</td>
            </tr>
            <tr class="has-checkbox">
                <td>21.</td>
                <td> Past u uw voeding aan om ethische redenen, geloofsovertuiging, smaak of geur? zo welke voedingsmiddelen eet
                    u niet</td>
                <td class="form-field">
                    <input type="checkbox" name="aano" id="aano21" value="" class="text-depended text3"> Ja <br><input type="text" placeholder="Noteer hier uw antwoord" name="text3" id="text3" class="text-value">
                    <small></small>
                </td>
                <td colspan="2"><input type="checkbox" name="aan" id="aanon21" value="nee" class="clear-values"> Nee</td>
            </tr>
            <tr class="has-checkbox">
                <td>22.</td>
                <td> Past u uw voeding aan om medische redenen (allerge, intolerantie)? zo ja welke voedingsmiddelen eet u niet
                </td>
                <td class="form-field">
                    <label class="main">Ja
                        <input type="checkbox" name="welke" id="welke22" value="" class="text-depended text4">
                        <span class="geekmark"></span>
                    </label>
                    <input type="text" placeholder="Noteer hier uw antwoord" id="text4" name="text4" class="text-value">
                    <small></small>
                </td>
                <td colspan="2"><input type="checkbox" name="welke" id="welken22" value="nee" class="clear-values"> Nee</td>
            </tr>
            <tr class="has-checkbox">
                <td>23.</td>
                <td> Gebruikt u aanvullende voedingssupplementen? zo ja, welke en hoeveel per dag?</td>
                <td><input type="checkbox" name="supple" id="supple23" value="" class="text-depended text5"> Ja <br><input type="text"
                            placeholder="Noteer hier uw antwoord" name="text5" id="text5" class="text-value"> </td>
                <td colspan="2"><input type="checkbox" name="supple" id="supplen23" value="nee" class="clear-values"> Nee</td>
            </tr>
            <tr class="has-checkbox">
                <td>24.</td>
                <td> Eet u minimaal 2x per week vis waarvan minimaal 1 x per week vette vis zoals haring, zalm, sardientjes of
                    makreel?</td>
                <td><input type="checkbox" name="minimaal" id="minimaal24" value="ja"> Ja </td>
                <td colspan="2">
                    <label class="main">Nee
                        <input type="checkbox" name="minimaal" id="minimaaln24" value="nee">
                        <span class="geekmark"></span>
                    </label>
                </td>
            </tr>
            <tr class="has-checkbox">
                <td>25.</td>
                <td> Maakt u dagelijks gebrulk van 2-3 porties margarine,halvarine, roomboter of bak-en braadproduct?</td>
                <td><input type="checkbox" name="dage" id="dage25" value="ja"> Ja </td>
                <td colspan="2">
                    <label class="main">Nee
                        <input type="checkbox" name="dage" id="dagen25" value="nee">
                        <span class="geekmark"></span>
                    </label>
                </td>
            </tr>
            <tr class="has-checkbox">
                <td>26.</td>
                <td> Maakt u 1-2x perweek gebruikvan zonnebloemolie?</td>
                <td><input type="checkbox" name="maakt" id="maakt26" value="ja"> Ja </td>
                <td colspan="2">
                    <label class="main">Nee
                        <input type="checkbox" name="maakt" id="maaktn26" value="nee">
                        <span class="geekmark"></span>
                    </label>
                </td>
            </tr>
            <tr class="has-checkbox">
                <td>27.</td>
                <td> Eet u dagelijkseen handje noten of pinda?</td>
                <td><input type="checkbox" name="hand" id="hand27" value="ja"> Ja </td>
                <td colspan="2">
                    <label class="main">Nee
                        <input type="checkbox" name="hand" id="handn27" value="nee">
                        <span class="geekmark"></span>
                    </label>
                </td>
            </tr>
            <tr class="has-checkbox">
                <td>28.</td>
                <td> Eet u dagelijks 3-4 bruine of volkoren boterhammen of maak dagelijks gebruik van 3-4 porties graanproduct
                    (tarwe, rogge, gerst, gierst of haver) waarbij de hele korrel wordt gebruiktzoals volkerenpasta,roggebrood
                    en havermoutpap.</td>
                <td><input type="checkbox" name="bruine" id="bruine28" value="ja"> Ja </td>
                <td colspan="2">
                    <label class="main">Nee
                        <input type="checkbox" name="bruine" id="bruinen28" value="nee">
                        <span class="geekmark"></span>
                    </label>
                </td>
            </tr>
            <tr class="has-checkbox">
                <td>29.</td>
                <td> Eet u dagelijks 2 porties fruit?</td>
                <td><input type="checkbox" name="fruit" id="fruit29" value="ja"> Ja </td>
                <td colspan="2">
                    <label class="main">Nee
                        <input type="checkbox" name="fruit" id="fruitn29" value="nee">
                        <span class="geekmark"></span>
                    </label>
                </td>
            </tr>
            <tr class="has-checkbox">
                <td>30.</td>
                <td> Eet u dagelijks een flinke porties gebakken of gekookte groente (ca.- 1/3 - 1/4 bord)?</td>
                <td><input type="checkbox" name="flinke" id="flinke30" value="ja"> Ja </td>
                <td colspan="2">
                    <label class="main">Nee
                        <input type="checkbox" name="flinke" id="flinken30" value="nee">
                        <span class="geekmark"></span>
                    </label>
                </td>
            </tr>
            <tr class="has-checkbox">
                <td>31.</td>
                <td> Eet u dagelijks ca. 75-100 gram vlees,vleeswaren, kip of gevogelte?</td>
                <td><input type="checkbox" name="gevo" id="gevo31" value="ja"> Ja </td>
                <td colspan="2">
                    <label class="main">Nee
                        <input type="checkbox" name="gevo" id="gevon31" value="nee">
                        <span class="geekmark"></span>
                    </label>
                </td>
            </tr>
            <tr class="has-checkbox">
                <td>32.</td>
                <td> Eet/drinkt u dagelijks 2-3 bekers of schaaltjes melk of melkproducten zoals yoghurt , vla of pudding. of
                    eet u dagelijks 2 plakken kaas?</td>
                <td><input type="checkbox" name="vla" id="vla32" value="ja"> Ja </td>
                <td colspan="2">
                    <label class="main">Nee
                        <input type="checkbox" name="vla" id="vlan32" value="nee">
                        <span class="geekmark"></span>
                    </label>
                </td>
            </tr>
            <tr class="has-checkbox">
                <td>33.</td>
                <td> Eet u wekelijks 1-2 eleen?</td>
                <td><input type="checkbox" name="wekel" id="wekel33" value="ja"> Ja </td>
                <td colspan="2">
                    <label class="main">Nee
                        <input type="checkbox" name="wekel" id="wekeln33" value="nee">
                        <span class="geekmark"></span>
                    </label>
                </td>
            </tr>
        </table>
        <div id="recommendation">

        </div>
        <script>
            leef = "<?php if (isset($q1)) echo $q1; ?>";

            ges = "<?php if (isset($q2)) echo $q2; ?>";

            gezins = "<?php if (isset($q3)) echo $q3; ?>";

            burger = "<?php if (isset($q4)) echo $q4; ?>";

            lij = "<?php if (isset($q5)) echo $q5; ?>";

            medic = "<?php if (isset($q6)) echo $q6; ?>";

            gewi = "<?php if (isset($q7)) echo $q7; ?>";

            lengte = "<?php if (isset($q8)) echo $q8; ?>";

            lust = "<?php if (isset($q9)) echo $q9; ?>";

            was = "<?php if (isset($q10)) echo $q10; ?>";

            zat = "<?php if (isset($q11)) echo $q11; ?>";

            rustig = "<?php if (isset($q12)) echo $q12; ?>";

            had = "<?php if (isset($q13)) echo $q13; ?>";

            neer = "<?php if (isset($q14)) echo $q14; ?>";

            zich = "<?php if (isset($q15)) echo $q15; ?>";

            geluk = "<?php if (isset($q16)) echo $q16; ?>";

            moe = "<?php if (isset($q17)) echo $q17; ?>";

            vaak = "<?php if (isset($q18)) echo $q18; ?>";

            meer = "<?php if (isset($q19)) echo $q19; ?>";

            drinkt = "<?php if (isset($q20)) echo $q20; ?>";

            aano = "<?php if (isset($q21)) echo $q21; ?>";

            welke = "<?php if (isset($q22)) echo $q22; ?>";

            supple = "<?php if (isset($q23)) echo $q23; ?>";

            minimaal = "<?php if (isset($q24)) echo $q24; ?>";

            dage = "<?php if (isset($q25)) echo $q25; ?>";

            maakt = "<?php if (isset($q26)) echo $q26; ?>";

            hand = "<?php if (isset($q27)) echo $q27; ?>";

            bruine = "<?php if (isset($q28)) echo $q28; ?>";

            fruit = "<?php if (isset($q29)) echo $q29; ?>";

            flinke = "<?php if (isset($q30)) echo $q30; ?>";

            gevo = "<?php if (isset($q31)) echo $q31; ?>";

            vla = "<?php if (isset($q32)) echo $q32; ?>";

            wekel = "<?php if (isset($q33)) echo $q33; ?>";

            text0 = "<?php if (isset($text0)) echo $text0; ?>";

            text1 = "<?php if (isset($text1)) echo $text1; ?>";

            text2 = "<?php if (isset($text2)) echo $text2; ?>";

            text3 = "<?php if (isset($text3)) echo $text3; ?>";

            text4 = "<?php if (isset($text4)) echo $text4; ?>";

            text5 = "<?php if (isset($text5)) echo $text5; ?>";

            const mapped = new Map([
                ["leef", leef],
                ["ges", ges],
                ["gezins", gezins],
                ["burger", burger],
                ["lij", lij],
                ["medic", medic],
                ["gewi", gewi],
                ["lengte", lengte],
                ["lust", lust],
                ["was", was],
                ["zat", zat],
                ["rustig", rustig],
                ["had", had],
                ["neer", neer],
                ["zich", zich],
                ["geluk", geluk],
                ["moe", moe],
                ["vaak", vaak],
                ["meer", meer],
                ["drinkt", drinkt],
                ["aano", aano],
                ["welke", welke],
                ["supple", supple],
                ["minimaal", minimaal],
                ["dage", dage],
                ["maakt", maakt],
                ["hand", hand],
                ["bruine", bruine],
                ["fruit", fruit],
                ["flinke", flinke],
                ["gevo", gevo],
                ["vla", vla],
                ["wekel", wekel],
                ["text0", text0],
                ["text1", text1],
                ["text2", text2],
                ["text3", text3],
                ["text4", text4],
                ["text5", text5]
            ])

            const checkedArray = <?php if (isset($desiredValue)) echo json_encode($desiredValue); ?>;
        </script>
        <script src="js/script2.js"></script>
</body>