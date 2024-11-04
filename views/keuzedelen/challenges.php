<!DOCTYPE html>
<html lang="nl">

<head>
    <?php require '../views/templates/head.php' ?>
    <style>
        .dropdown-content {
            display: none;
            background-color: #f9f9f9;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-top: 8px;
        }

        .show {
            display: block;
        }
    </style>
</head>

<body>
    <?php require '../views/templates/menu.php' ?>

    <div class="w-11/12 p-6 space-y-8 sm:p-8 bg-white mx-auto">
        <h2 class="text-2xl font-bold dark:text-white">Keuzedelen</h2>
        <div class="w-full">
            <div class="flex flex-col">
                <!-- Button with dropdown -->
                <button onclick="toggleDropdown('dropdown1')"
                    class="w-full py-4 text-center font-medium text-gray-700 bg-gray-100 focus:outline-none active:bg-gray-200 rounded-tl-lg rounded-tr-lg">
                    Basis programmeren (Games)
                </button>
                <div id="dropdown1" class="dropdown-content">
                <p><strong>Relevantie van het keuzedeel</strong><br>
                    Het keuzedeel biedt de beginnend beroepsbeoefenaar een breder perspectief op de arbeidsmarkt. Het blijkt dat op mbo-niveau
                    arbeidsplaatsen beschikbaar zijn binnen bedrijven (veelal binnen het MKB), waar het vervaardigen van games niet de
                    corebusiness is, maar waar ontwikkelen en realiseren van games wel zijdelings onderdeel zijn van de bedrijfsvoering, bijvoorbeeld
                    in de vorm van korte opdrachten/projecten, of als creatief onderdeel binnen een groter project. Denk daarbij aan games die
                    gebouwd worden voor mobile devices en educatieve webapplicaties die serious games zijn. Er is vraag naar bijvoorbeeld
                    Applicatie- en mediadevelopers die ook kennis hebben van het programmeren van games. Er is vraag naar dergelijke allround
                    programmeurs.</p>
                    <a href="https://eduofficenl-my.sharepoint.com/personal/m_dackus_vistacollege_nl/_layouts/15/onedrive.aspx?ga=1&id=%2Fpersonal%2Fm%5Fdackus%5Fvistacollege%5Fnl%2FDocuments%2FCBL%2Fmbogodigital%2Enl%2FPeriode%209%2FChallenge%2025%2FKeuzedelen%2FBasis%20programmeren%20van%20games%2Epdf&parent=%2Fpersonal%2Fm%5Fdackus%5Fvistacollege%5Fnl%2FDocuments%2FCBL%2Fmbogodigital%2Enl%2FPeriode%209%2FChallenge%2025%2FKeuzedelen"><ins>Link to course</ins></a>
                </div>

                <button onclick="toggleDropdown('dropdown2')"
                    class="w-full py-4 my-2 text-center font-medium text-gray-700 bg-gray-100 focus:outline-none active:bg-gray-200">
                    Digitale vaardigheden
                </button>
                <div id="dropdown2" class="dropdown-content">
                <p><strong>Relevantie van het keuzedeel</strong><br>
                    Dit keuzedeel is een generiek keuzedeel. Het kan gekoppeld worden aan alle mbo kwalificatiedossiers waarin sprake is van het
                    verzamelen, produceren en beheren van informatie, gegevens en content. Dit geldt niet alleen voor de typische kantoorberoepen,
                    maar in de algemene zin voor die beroepen waar gebruik wordt gemaakt van digitale informatie, gegevens en content als input
                    voor verdere verwerking. Vervolgens kan men in het specifieke profiel nog de digitale kennis en vaardigheden aanwijzen die
                    specifiek zijn voor dat profiel.</p>
                    <a href="https://eduofficenl-my.sharepoint.com/personal/m_dackus_vistacollege_nl/_layouts/15/onedrive.aspx?id=%2Fpersonal%2Fm%5Fdackus%5Fvistacollege%5Fnl%2FDocuments%2FCBL%2Fmbogodigital%2Enl%2FPeriode%209%2FChallenge%2025%2FKeuzedelen%2FDigitale%20vaardigheden%20gevorderd%2Epdf&parent=%2Fpersonal%2Fm%5Fdackus%5Fvistacollege%5Fnl%2FDocuments%2FCBL%2Fmbogodigital%2Enl%2FPeriode%209%2FChallenge%2025%2FKeuzedelen"><ins>Link to course</ins></a>
                </div>

                <button onclick="toggleDropdown('dropdown3')"
                    class="w-full py-4 text-center font-medium text-gray-700 bg-gray-100 focus:outline-none active:bg-gray-200">
                    Fotografie basis
                </button>
                <div id="dropdown3" class="dropdown-content">
                <p><strong>Relevantie van het keuzedeel</strong><br>
                    Met dit verbredende keuzedeel versterkt de beginnend beroepsbeoefenaar zijn positie op de arbeidsmarkt aangezien hij voor de
                    opdrachtgever duidelijke, kwalitatief goede functionele foto's kan maken van eindproducten. Daarnaast kan hij een duidelijk
                    beeld geven van de locatie ter ondersteuning van het inmeten en vastleggen van andere gegevens</p>
                    <a href="https://eduofficenl-my.sharepoint.com/personal/m_dackus_vistacollege_nl/_layouts/15/onedrive.aspx?id=%2Fpersonal%2Fm%5Fdackus%5Fvistacollege%5Fnl%2FDocuments%2FCBL%2Fmbogodigital%2Enl%2FPeriode%209%2FChallenge%2025%2FKeuzedelen%2FFotografie%20basis%2Epdf&parent=%2Fpersonal%2Fm%5Fdackus%5Fvistacollege%5Fnl%2FDocuments%2FCBL%2Fmbogodigital%2Enl%2FPeriode%209%2FChallenge%2025%2FKeuzedelen"><ins>Link to course</ins></a>
                </div>

                <button onclick="toggleDropdown('dropdown4')"
                    class="w-full py-4 my-2 text-center font-medium text-gray-700 bg-gray-100 focus:outline-none active:bg-gray-200">
                    Inspelen op innovaties
                </button>
                <div id="dropdown4" class="dropdown-content">
                <p><strong>Relevantie van het keuzedeel</strong><br>
                    Voor veel branches geldt: stilstand is achteruitgang. Het keuzedeel 'Inspelen op innovaties' beoogt beroepsbeoefenaren beter in
                    staat te stellen in te spelen op trend en ontwikkelingen in een (aanpalende) branche en is daarmee relevant voor de
                    arbeidsmarkt.</p>
                    <a href="https://eduofficenl-my.sharepoint.com/personal/m_dackus_vistacollege_nl/_layouts/15/onedrive.aspx?id=%2Fpersonal%2Fm%5Fdackus%5Fvistacollege%5Fnl%2FDocuments%2FCBL%2Fmbogodigital%2Enl%2FPeriode%209%2FChallenge%2025%2FKeuzedelen%2FInspelen%20op%20innovaties%20geschikt%20voor%20niveau%204%2Epdf&parent=%2Fpersonal%2Fm%5Fdackus%5Fvistacollege%5Fnl%2FDocuments%2FCBL%2Fmbogodigital%2Enl%2FPeriode%209%2FChallenge%2025%2FKeuzedelen"><ins>Link to course</ins></a>
                </div>

                <button onclick="toggleDropdown('dropdown5')"
                    class="w-full py-4 text-center font-medium text-gray-700 bg-gray-100 focus:outline-none active:bg-gray-200">
                    Ondernemend gedrag
                </button>
                <div id="dropdown5" class="dropdown-content">
                <p><strong>Relevantie van het keuzedeel</strong><br>
                    Ondernemend gedrag wordt steeds belangrijker geacht in meer en meer arbeidssituaties. Niet alleen voor mensen die (deels) als
                    zelfstandige aan de slag gaan, maar ook voor werknemers in loondienst. Een ondernemende houding van werknemers draagt bij
                    aan het innovatief vermogen van een organisatie. Het is tegenwoordig één van de belangrijkste selectiecriteria bij de invulling
                    van vacatures. Ook wijst onderzoek uit dat het een belangrijke succesfactor is voor het carrièreverloop van een werknemer.
</p>
                    <a href="https://eduofficenl-my.sharepoint.com/personal/m_dackus_vistacollege_nl/_layouts/15/onedrive.aspx?id=%2Fpersonal%2Fm%5Fdackus%5Fvistacollege%5Fnl%2FDocuments%2FCBL%2Fmbogodigital%2Enl%2FPeriode%209%2FChallenge%2025%2FKeuzedelen%2FOndernemend%20gedrag%20%28geschikt%20voor%20niveau%203%20en%204%29%2Epdf&parent=%2Fpersonal%2Fm%5Fdackus%5Fvistacollege%5Fnl%2FDocuments%2FCBL%2Fmbogodigital%2Enl%2FPeriode%209%2FChallenge%2025%2FKeuzedelen"><ins>Link to course</ins></a>
                </div>

                <button onclick="toggleDropdown('dropdown6')"
                    class="w-full py-4 my-2 text-center font-medium text-gray-700 bg-gray-100 focus:outline-none active:bg-gray-200">
                    Oriëntatie op ondernemerschap
                </button>
                <div id="dropdown6" class="dropdown-content">
                <p><strong>Relevantie van het keuzedeel</strong><br>
                    De CE Ondernemerschap wordt op dit moment bij verschillende sectoren en opleidingen uitgevoerd. Met name aan mbo-niveau 4
                    wordt de CE aangeboden. Voor niveau 2 en ook soms voor niveau 3 is de CE Ondernemerschap te hoog gegrepen: een ‘light’ versie
                    biedt uitkomst om deze deelnemers bekend te maken met het ondernemerschap. Het doel van dit keuzedeel is om
                    ondernemerschapsonderwijs te bieden ter oriëntatie: de deelnemer heeft na het volgen van dit keuzedeel inzicht in het
                    zelfstandig ondernemerschap en kan een beargumenteerde keuze maken voor het wel of niet maken van vervolgstappen richting
                    het ondernemerschap.
</p>
                    <a href="https://eduofficenl-my.sharepoint.com/personal/m_dackus_vistacollege_nl/_layouts/15/onedrive.aspx?id=%2Fpersonal%2Fm%5Fdackus%5Fvistacollege%5Fnl%2FDocuments%2FCBL%2Fmbogodigital%2Enl%2FPeriode%209%2FChallenge%2025%2FKeuzedelen%2FOri%C3%ABntatie%20op%20ondernemerschap%2Epdf&parent=%2Fpersonal%2Fm%5Fdackus%5Fvistacollege%5Fnl%2FDocuments%2FCBL%2Fmbogodigital%2Enl%2FPeriode%209%2FChallenge%2025%2FKeuzedelen"><ins>Link to course</ins></a>
                </div>

                <button onclick="toggleDropdown('dropdown7')"
                    class="w-full py-4 text-center font-medium text-gray-700 bg-gray-100 focus:outline-none active:bg-gray-200 rounded-bl-lg rounded-br-lg">
                    Verdieping software
                </button>
                <div id="dropdown7" class="dropdown-content">
                <p><strong>Relevantie van het keuzedeel</strong><br>
                    Voor de arbeidsmarkt is het van belang om je als beginnend beroepsbeoefenaar te kunnen onderscheiden. Hiermee maak je meer
                    kans op een baan. Uit vacatures blijkt dat hebben van specialistische kennis rond software een pre is bij een functie. De
                    toegevoegde waarde van dit keuzedeel bestaat dan ook uit het al tijdens de opleiding specialiseren in software voor de
                    arbeidsmarkt waarin de beginnend beroepsbeoefenaar gaat werken.
                    Binnen de wereld van de ICT is het behalen van certificaten van belang. Dit keuzedeel geeft handvatten om eventuele certificaten
                    buiten dit keuzedeel te behalen.
</p>
                    <a href="https://eduofficenl-my.sharepoint.com/personal/m_dackus_vistacollege_nl/_layouts/15/onedrive.aspx?id=%2Fpersonal%2Fm%5Fdackus%5Fvistacollege%5Fnl%2FDocuments%2FCBL%2Fmbogodigital%2Enl%2FPeriode%209%2FChallenge%2025%2FKeuzedelen%2FVerdieping%20software%2Epdf&parent=%2Fpersonal%2Fm%5Fdackus%5Fvistacollege%5Fnl%2FDocuments%2FCBL%2Fmbogodigital%2Enl%2FPeriode%209%2FChallenge%2025%2FKeuzedelen"><ins>Link to course</ins></a>
                </div>
            </div>
        </div>

        <?php require '../views/templates/footer.php' ?>
    </div>

    <script>
        // Function to toggle dropdown visibility
        function toggleDropdown(id) {
            var dropdown = document.getElementById(id);
            dropdown.classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('button')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
</body>

</html>
