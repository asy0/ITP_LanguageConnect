<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Mein Profil</title>
</head>


<header>
    <!--- Navbar --->
    <?php include './navbar.php'; ?>
</header>




<body class="profilbody">

<div class="profilecontainer">
    <div class="profile-header">Mein Profil</div>
    <div class="form-group">
        <label for="profile-picture">Profilbild</label>
        <input type="file" id="profile-picture" name="profile_picture" accept="image/png, image/jpeg">
    </div>


    <div class="form-group">
        <label for="nickname">Spitzname</label>
        <input type="text" id="nickname" placeholder="Spitzname">
    </div>


    <div class="half-input-container">
        <div class="form-group">
            <label for="firstname">Vorname</label>
            <input type="text" id="firstname" placeholder="Vorname">
        </div>
        <div class="form-group">
            <label for="lastname">Nachname</label>
            <input type="text" id="lastname" placeholder="Nachname">
        </div>
    </div>

    <div class="form-group">
        <label for="country">Land/Region *</label>
        <select id="country">
            <option value='15' selected='selected'>Österreich</option>
            <option value='1'>Afghanistan</option>
            <option value='64'>Ägypten</option>
            <option value='3'>Albanien</option>
            <option value='4'>Algerien</option>
            <option value='6'>Andorra</option>
            <option value='7'>Angola</option>
            <option value='10'>Antigua und Barbuda</option>
            <option value='66'>Äquatorial Guinea</option>
            <option value='11'>Argentinien</option>
            <option value='12'>Armenien</option>
            <option value='16'>Aserbaidschan</option>
            <option value='69'>Äthiopien</option>
            <option value='14'>Australien</option>
            <option value='17'>Bahamas</option>
            <option value='18'>Bahrain</option>
            <option value='19'>Bangladesh</option>
            <option value='20'>Barbados</option>
            <option value='21'>Belarus</option>
            <option value='22'>Belgien</option>
            <option value='23'>Belice</option>
            <option value='24'>Benin</option>
            <option value='27'>Bolivien</option>
            <option value='28'>Bosnien-Herzegovina</option>
            <option value='29'>Botsuana</option>
            <option value='31'>Brasilien</option>
            <option value='33'>Brunei</option>
            <option value='34'>Bulgarien</option>
            <option value='35'>Burkina Faso</option>
            <option value='36'>Burundi</option>
            <option value='26'>Butan</option>
            <option value='44'>Chile</option>
            <option value='45'>China</option>
            <option value='52'>Cookinseln</option>
            <option value='53'>Costa Rica</option>
            <option value='59'>Dänemark</option>
            <option value='81'>Deutschland</option>
            <option value='61'>Dominica</option>
            <option value='62'>Dominikanische Republik</option>
            <option value='60'>Dschibuti</option>
            <option value='63'>Ecuador</option>
            <option value='54'>Elfenbeinküste</option>
            <option value='65'>El Salvador</option>
            <option value='67'>Eritrea</option>
            <option value='68'>Estland</option>
            <option value='72'>Fidschi</option>
            <option value='73'>Finnland</option>
            <option value='74'>Frankreich</option>
            <option value='78'>Gabun</option>
            <option value='79'>Gambia</option>
            <option value='80'>Georgien</option>
            <option value='82'>Ghana</option>
            <option value='86'>Grenada</option>
            <option value='84'>Griechenland</option>
            <option value='89'>Guatemala</option>
            <option value='91'>Guinea</option>
            <option value='92'>Guinea-Bissau</option>
            <option value='93'>Guyana</option>
            <option value='94'>Haiti</option>
            <option value='97'>Honduras</option>
            <option value='101'>Indien</option>
            <option value='102'>Indonesien</option>
            <option value='104'>Irak</option>
            <option value='103'>Iran</option>
            <option value='105'>Irland</option>
            <option value='100'>Island</option>
            <option value='107'>Israel</option>
            <option value='108'>Italien</option>
            <option value='109'>Jamaika</option>
            <option value='110'>Japan</option>
            <option value='242'>Jemen</option>
            <option value='112'>Jordanien</option>
            <option value='37'>Kambodscha</option>
            <option value='38'>Kamerun</option>
            <option value='39'>Kanada</option>
            <option value='40'>Kap Verde</option>
            <option value='113'>Kasachstan</option>
            <option value='179'>Katar</option>
            <option value='114'>Kenia</option>
            <option value='119'>Kirgisistan</option>
            <option value='115'>Kiribati</option>
            <option value='48'>Kolumbien</option>
            <option value='49'>Komoren</option>
            <option value='51'>Kongo, Demokratische Republik</option>
            <option value='116'>Korea (Demokratische VR, Nordkorea)</option>
            <option value='117'>Korea (Republik Korea, Südkorea)</option>
            <option value='245'>Kosovo</option>
            <option value='55'>Kroatien</option>
            <option value='56'>Kuba</option>
            <option value='118'>Kuwait</option>
            <option value='120'>Laos</option>
            <option value='123'>Lesotho</option>
            <option value='121'>Lettland</option>
            <option value='122'>Libanon</option>
            <option value='124'>Liberia</option>
            <option value='125'>Libyen</option>
            <option value='126'>Liechtenstein</option>
            <option value='127'>Litauen</option>
            <option value='128'>Luxemburg</option>
            <option value='131'>Madagaskar</option>
            <option value='132'>Malawi</option>
            <option value='133'>Malaysia</option>
            <option value='134'>Malediven</option>
            <option value='135'>Mali</option>
            <option value='136'>Malta</option>
            <option value='149'>Marokko</option>
            <option value='137'>Marschall-Inseln</option>
            <option value='139'>Mauretanien</option>
            <option value='140'>Mauritius</option>
            <option value='142'>Mexiko</option>
            <option value='143'>Mikronesien</option>
            <option value='144'>Moldavien</option>
            <option value='145'>Monaco</option>
            <option value='146'>Mongolei</option>
            <option value='147'>Montenegro</option>
            <option value='150'>Mosambik</option>
            <option value='151'>Myanmar</option>
            <option value='152'>Namibia</option>
            <option value='153'>Nauru</option>
            <option value='154'>Nepal</option>
            <option value='158'>Neuseeland</option>
            <option value='159'>Nicaragua</option>
            <option value='155'>Niederlande</option>
            <option value='160'>Niger</option>
            <option value='161'>Nigeria</option>
            <option value='162'>Niue</option>
            <option value='130'>Nordmazedonien</option>
            <option value='165'>Norwegen</option>
            <option value='166'>Oman</option>
            <option value='167'>Pakistan</option>
            <option value='169'>Palästinensische Gebiete</option>
            <option value='168'>Palau</option>
            <option value='170'>Panama</option>
            <option value='171'>Papua-Neuguinea</option>
            <option value='172'>Paraguay</option>
            <option value='173'>Peru</option>
            <option value='174'>Philippinen</option>
            <option value='176'>Polen</option>
            <option value='177'>Portugal</option>
            <option value='178'>Puerto Rico</option>
            <option value='50'>Republik Kongo</option>
            <option value='42'>Republik Zentralafrika</option>
            <option value='183'>Ruanda</option>
            <option value='181'>Rumänien</option>
            <option value='182'>Russland</option>
            <option value='243'>Sambia</option>
            <option value='189'>Samoa</option>
            <option value='190'>San Marino</option>
            <option value='191'>São Tomé und Príncipe</option>
            <option value='192'>Saudi-Arabien</option>
            <option value='210'>Schweden</option>
            <option value='211'>Schweiz</option>
            <option value='193'>Senegal</option>
            <option value='194'>Serbien</option>
            <option value='195'>Seychellen</option>
            <option value='196'>Sierra Leone</option>
            <option value='244'>Simbabwe</option>
            <option value='197'>Singapur</option>
            <option value='198'>Slowakei</option>
            <option value='199'>Slowenien</option>
            <option value='200'>Solomonen</option>
            <option value='201'>Somalia</option>
            <option value='204'>Spanien</option>
            <option value='205'>Sri Lanka</option>
            <option value='185'>St. Kitts</option>
            <option value='186'>St. Lucia</option>
            <option value='188'>St. Vincent</option>
            <option value='202'>Südafrika</option>
            <option value='206'>Sudan</option>
            <option value='246'>Südsudan</option>
            <option value='207'>Suriname</option>
            <option value='209'>Swasiland</option>
            <option value='212'>Syrien</option>
            <option value='214'>Tadschikistan</option>
            <option value='213'>Taiwan</option>
            <option value='215'>Tansania</option>
            <option value='216'>Thailand</option>
            <option value='217'>Timor-Leste</option>
            <option value='218'>Togo</option>
            <option value='220'>Tonga</option>
            <option value='221'>Trinidad und Tobago</option>
            <option value='43'>Tschad</option>
            <option value='58'>Tschechien</option>
            <option value='222'>Tunesien</option>
            <option value='223'>Türkei</option>
            <option value='224'>Turkmenistan</option>
            <option value='226'>Tuvalu</option>
            <option value='227'>Uganda</option>
            <option value='228'>Ukraine</option>
            <option value='99'>Ungarn</option>
            <option value='233'>Uruguay</option>
            <option value='231'>USA</option>
            <option value='234'>Usbekistan</option>
            <option value='235'>Vanuatu</option>
            <option value='96'>Vatikanstaat</option>
            <option value='236'>Venezuela</option>
            <option value='229'>Vereinigte arabische Emirate</option>
            <option value='230'>Vereinigtes Königreich</option>
            <option value='237'>Vietnam</option>
            <option value='57'>Zypern</option>
        </select>
    </div>
    <div class="form-group">
        <label for="year">Geburtstag - Tag</label>
        <input class='form-control' id='day' type='number' min='1' max='31' name='day'>
    </div>
    </select>
    <div class="form-group">
        <label for="month">Geburtstag - Monat</label>
        <select id="month">
            <option value='' disabled='disabled' hidden='hidden'>Bitte auswählen</option>
            <option value=''>Bitte auswählen</option>
            <option value='1'>Jänner</option>
            <option value='2'>Februar</option>
            <option value='3'>März</option>
            <option value='4'>April</option>
            <option value='5'>Mai</option>
            <option value='6'>Juni</option>
            <option value='7'>Juli</option>
            <option value='8'>August</option>
            <option value='9'>September</option>
            <option value='10'>Oktober</option>
            <option value='11'>November</option>
            <option value='12'>Dezember</option>
        </select>
        </select>
    </div>
    <div class="form-group">
        <label for="year">Geburtstag - Jahr</label>
        <input class='form-control' id='year' type='number' min='1900' max='2024' name='year'>
    </div>
    <div class="form-group">
        <label for="email">E-Mail-Adresse</label>
        <input type="email" id="email" placeholder="Ihre E-Mail-Adresse" required>
    </div>
    </select>
    <div class="form-group">
        <input type="submit" value="Speichern" class="save-button">
    </div>
</div>
</div>
<!--- Footer --->
<?php include './footer.php'; ?>
</body>

</html>