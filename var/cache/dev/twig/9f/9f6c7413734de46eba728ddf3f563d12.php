<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* report.html.twig */
class __TwigTemplate_650b070136375238094c0adee138600b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "report.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Redovisning";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"container my-5\">
        <h1 class=\"display-4\">Redovisning</h1>
        <hr class=\"my-4\">
        <div class=\"row my-5\">
            <div class=\"col-sm-4\">
                <div class=\"list-group\">
                    <a href=\"#kmom01\" class=\"list-group-item list-group-item-action active\" aria-current=\"true\">
                    Kmom01
                    </a>
                    <a href=\"#kmom02\" class=\"list-group-item list-group-item-action\">Kmom02</a>
                    <a href=\"#kmom03\" class=\"list-group-item list-group-item-action\">Kmom03</a>
                    <a href=\"#kmom04\" class=\"list-group-item list-group-item-action\">Kmom04</a>
                    <a href=\"#kmom05\" class=\"list-group-item list-group-item-action\">Kmom05</a>
                    <a href=\"#kmom06\" class=\"list-group-item list-group-item-action\">Kmom06</a>
                    <a href=\"#kmom10\" class=\"list-group-item list-group-item-action\">Kmom07/10: Projekt och examination</a>
                </div>
            </div>
            <div class=\"col-sm-8\">
                <h2 id=\"kmom01\">Kmom01</h2>
                <h4>Berätta kort om dina förkunskaper och tidigare erfarenheter kring objektorientering</h4>
                <p>I kursen oopython lärde jag mig hur man skapar klasser i python. Klasser kan ha olika attribut och metoder som tillhör klassen. För att instantiera klassen, alltså skapa en objekt eller instans av en klass, måste man ha en så kallad konstruktor metod definierad inuti klassen.</p>
                <h4>Berätta kort om PHPs modell för klasser och objekt. Vilka är de grunder man behöver veta/förstå för att kunna komma igång och skapa sina första klasser?</h4>
                <p>PHP stödjer objektorientering via klasser, objekt och vanliga objektorienterade konstruktionerna som normalt förekommer i objektorienterade programmeringsspråk. Ett objekt skapas utifrån en klass. Ett objekt har medlemsvariabler och metoder. Allt som objektet behöver lagra finns i dess medlemsvariabler och allt man kan göra med objektet exponeras via dess metoder.</p>
                <h4>Reflektera kort över den kodbas, koden, strukturen som användes till uppgiften me/report, hur uppfattar du den?</h4>
                <p>Allt börjar med en Kontroller. Kontroller länkar samman kod och det visuella med hjälp av klasser/funktioner och twig filer.</p>
                <h4>Med tanke på artikeln “PHP The Right Way”, vilka delar in den finner du extra intressanta och värdefulla? Är det några särskilda områden som du känner att du vill veta mer om? Lyft fram några delar av artikeln som du känner mer värdefulla.</h4>
                <p>Eftersom jag alldrig hört on Namespace i programmering läste jag om det lite extra.</p>
                <p>Jag spenderade mer tid på guiden <a href=\"https://dbwebb.se/guide/kom-igang-med-objektorienterad-programmering-i-php\">Kom igång med Objektorienterad programmering i PHP. Jag tycker att det var givande att koda tillsammans med guiden.</a></p>
                <h4>Vilken är din TIL för detta kmom?</h4>
                <p>Väldigt mycket som var  nytt i denna kmom. Jag lärt mig mer om nampespace, klasse och objekter i PHP, DocBlock kommentarer, privata och publika metoder och variabler, autoloading.</p>
                <h2 id=\"kmom02\">Kmom02</h2>
                <h4>Förklara kort de objektorienterade konstruktionerna arv, komposition, interface och trait och hur de används i PHP.</h4>
                <p>Arv kan förkralas som en relation mellan klasserna av typ är-en. Till exempel klass VovloBil kan ärva från klass Bil, alltså att klassen VovloBil kan ärva metoder och egenskaper som tillhör klassen Bill. Till exempel metoden kör och egenskap som t.ex. har fyra hjul.</p>
                <p>Komposition kan förklaras som en relation mellan klasserna av typen har-en dvs att en klass kan ha en annan klass som en medlemsvariabel. Till exempel klass Kortlek kan ha klass Kort som en medlemsvariabel.</p>
                <p>Trait liknar en klass genom att den kan definiera metoder, men till skillnad från en klass kan den inte instansieras på egen hand. Istället är trait avsedd att inkluderas i en klass med hjälp av \"use\"-satsen. När trait används i en klass blir de metoder som definieras i trait en del av klassens publika gränssnitt. Trait är användbar i situationer när man behöver dela funktionalitet mellan flera klasser, men man inte vill skapa en hierarki av arv som kan bli svårhanterlig eller oflexibel.</p>
                <p>Interface är ett kontrakt där en klass lovar att erbjuda en viss uppsättning metoder. En klass kan implementera ett interface, det innebär att klassen förbinder sig att erbjuda ett API som motsvaras av interfacet.Ett interface innehåller ingen kod som en klass kan återanvända, det är bara ett löfte om att interfacets metoder skall återfinnas inuti klassen.När man vet att en klass implementerar ett visst interface så vet man också vad man kan göra med den klassen. Interface i PHP liknar abstrakta klasser i Python.</p>
                <h4>Berätta om din implementation från uppgiften. Hur löste du uppgiften, är du nöjd/missnöjd, vilken förbättringspotential ser du i din koden och dina klasser?</h4>
                <p>För att visa kort i sidan använder jag en sprite sheet. I klassen CardGraphic när jag skapar ett kort beräknas det även en offset alltså en position på sprite sheet där motsvarande kort ritas. Jag skapar kortlek med hjälp av en nästlad loop där jag loopar igenom två arrayer, den ena med namn på suits och den andra namn på ranks. Deck är en array som fylls med 52 st CardGraphic objekt. I mina routes skickar jag \$data arrayen fylld med objekt som deck och hand. Därefter anropar jag olika medtoder inuti twig tamplaten och visar upp resultat. Förstår inte riktigt varför, men jag var tvungen att instansiera Deck och Hand klasser i varenda route eftersom instanserna/objekt av någon anledning inte ville sparas i sessionen.</p>
                <p>Som förbättringspotential ser jag att en hel del av kod som används i rotes kan skrivas om till separata funktioner.</p>
                <h4>Berätta hur det kändes att modellera ett kortspel med flödesdiagram och psuedokod. Var det något som du tror stödjer dig i din problemlösning och tankearbete för att strukturera koden kring en applikation?</h4>
                <p>Jag har svårt att svara på denna fråga eftersom jag skapade klasser innan jag ritade UML till mina klasser. Jag utgick väldigt mycket från den exempel som vi fick av Mikael till denna kmom.</p>
                <h4>Vilken är din TIL för detta kmom?</h4>
                <p>Jag lärt mig hur man skriver en konstruktor <code>__construct()</code> i PHP samt att man anropar metoder med en pil <code>-></code>. För att ärva metoder och egenskaper från en annan klass skall man använda konstruktion <code>parent::__construct(\$rank, \$suit);</code> och även skicka in argument/parametrar. Jag lärt mig att för att kunna arbeta med session och POST metoden i Symfony måste man ange <code>use Symfony\\Component\\HttpFoundation\\Request;
use och Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;</code></p>
                <h2 id=\"kmom03\">Kmom03</h2>
                <h4>Berätta hur det kändes att modellera ett kortspel med flödesdiagram och psuedokod. Var det något som du tror stödjer dig i din problemlösning och tankearbete för att strukturera koden kring en applikation?</h4>
                <p>Som utgångspunkt i modelleringen tog jag <a href=\"https://dbwebb.se/uppgift/bygg-kortspel-i-php-och-symfony-enligt-mvc#kortspel\" target=\"_blank\">rekomendationer</a> till kmom03 \"En spelrunda kan se ut så här när en spelare spelar mot banken.\" Jag fick undersöka vilka klasser som är \"typiska\" för kortspel. Föregående kmom02 har get mig en bra grund för att jag skulle kunna utveckla och bygga på den basen och de kalsser som jag skapade under kmom02. Det flödesschema som jag visar i sidan med dokumentation representerar spelflödet mellan spelare och bank och psuedokoden visar hur jag tänker räkna ut handens värde.</p>
                <h4>Berätta om din implementation från uppgiften. Hur löste du uppgiften, är du nöjd/missnöjd, vilken förbättringspotential ser du i din koden, dina klasser och applikationen som helhet?</h4>
                <p>I routen <code>#[Route('/game/init', name: 'game_init_post', methods: ['POST'])]</code> instantieras Game klassen som i sin tur instansierar spelare, bank och kortlek. Därefter anropas Game klassens metod <code>start</code> som blandar kortleken. All data sparas i session.</p>
                <p>Användaren presenteras med fyra alternativ (en form med fyra knappar) som i sin tur exekverar logiken/metoder. Jag återanvänder Mikaels <code>flash.html.twig</code> fil i kombination med Symfonys inbyggd <code>addFlash()</code> metod för att kunna informera användaren om resultatet av spelet. Jag valde att hålla mig till principen KISS och är rätt så nöjd med resultatet.</p>
                <h4>Vilken är din känsla för att koda i ett ramverk som Symfony, så här långt in i kursen?</h4>
                <p>Det känns som om jag fått grepp om hur routes, klasser och session kan samspela i Symfony ramverket för att få en fungerande applikation.</p>
                <h4>Vilken är din TIL för detta kmom?</h4>
                <p>Jag har lärt mig om vilka arbetssätt kan hjälpa mig att strukturera upp programkod när jag bygger program och applikationer.</p>
                <p>Flowchart eller flödesdiagram är nyttiga då man behöver bygga förståelse för hur en process eller ett arbetsflöde skall gå till. Exempelvis kan vi visualisera hur en splerunda mellan spelare och bank kan gå till.</p>
                <p>Pseudokod är till för att beskriva algoritmer med \"vanligt\" språk, vilket gör det möjligt att fokusera på algoritmens logik.</p>
                <p>Jag har lärt mig grunderna i hur PHP-dokumentation ska se ut.</p>
                <h2 id=\"kmom04\">Kmom04</h2>
                <h4>Berätta hur du upplevde att skriva kod som testar annan kod med PHPUnit och hur du upplever phpunit rent allmänt.</h4>
                <p>Jag har dragit slutsatsen att för att skriva kod som är lätt att testa måste man ha det i åtanke när man skriver kod. Det har varit svårt i vissa fall att bli av med beroenden då jag använder klasser inne i klasser som medlemmar/egenskaper och då har det varit svårt att skriva kod för testklasser. Till exempel, för att testa klassen Game, var jag tvungen att skriva om __construct-metod. Jag skrev om konstruktorn för att den skulle ta emot spelar- och bankklasser för att möjligtgöra att testklasser skall kunna ta emot mockade klasser.</p>
                <p>Jag upplever att dokumentationen till PHPUnit är inte så enkel att förstå. Det som var inte så enkelt var att förstå hur metoder <code>createMock</code> och <code>getMockBuilder</code> fungerar.</p>
                <p>Jag tycker att det är trevligt med visualisering av kodtäckning de testade klasser. Man ser tydligt vilka rader/metoder som täcks av testfall i en testsuit.</p>
                <h4>Hur väl lyckades du med kodtäckningen av din kod, lyckades du nå mer än 90% kodtäckning?</h4>
                <p>Jag har lyckats att täcka 96.74% av rader, 94.29% av funktioner/metoder och 66.67% av classes och traits.</p>
                <h4>Upplever du din egen kod som “testbar kod” eller finns det delar i koden som är mer eller mindre testbar och finns det saker som kan göras för att förbättra kodens testbarhet? Valde du att skriva om delar av din kod för att förbättra den eller göra den mer testbar, om så berätta lite hur du tänkte.</h4>
                <p>De delar som var svåra att testa var delar med beroenden. Till exempel, för att testa metod <code>play</code> av <code>Game</code> klassen var jag tvungen att mocka <code>Bank</code> klass och dess <code>hit metod</code> samt <code>Hand</code> klass med tillhörade metod <code>getValue</code>.</p>
                <h4>Fundera över om du anser att testbar kod är något som kan identifiera “snygg och ren kod”.</h4>
                <p>Testbar kod är kod som är strukturerad på ett sätt som är lätt att förstå och som separerar olika delar av funktionaliteten i separata moduler som kan testas oberoende.  Med det sagt tycker jag att testbar kod bidrar till att kod kan betraktas som “snygg och ren kod”.</p>
                <h4>Vilken är din TIL för detta kmom?</h4>
                <p>Jag lärt mig hur jag kan använda verktyget <code>PHPUnit</code> för att skriva test suits och testfall för egendefinierade klasser. Jag lärt mig hur jag kan mocka objekt och metoder.</p>
                <p>Jag lärt mig att dokumentera min kod med hjälp av DocBlock och generera  HTML dokumentation med hjälp av phpDocumentor.</p>
                <p>Redovisning</p>
                <h2 id=\"kmom05\">Kmom05</h2>
                <h4>Gick det bra att jobba igenom övningen med Symfony och Doctrine. Något särskilt du tänkte/reagerade på under övningen?</h4>
                <p>Det gick bra. Jag försökte finna skillnader mellan Book entity och Book repository, och komm fram till att Book entity eller Book class representerar en tabel i en databas. För att skapa en Entity Class används komandot <code>php bin/console make:entity</code>. Här anger vi även namn till tabelens columner samt dess datatyp. Book repository är ett 'service' class som ett mellan lager som skriver och läser objekt av Entity (Book) klassen till databasen.</p>
                <p>När vi gör ändringar i databasens schema dvs ändrar namn på kolumner eller dess datatyper måste vi skapa en migration. Vi skapar en migration med komandot <code>php bin/console make:migration</code> och updaterar eller nedgraderar version av vår databas med komandot <code>php bin/console doctrine:migrations:migrate</code></p>
                <p>För att kunna visa upp data ur databas måste vi skapa en kontroller med komandot <code>php bin/console make:controller ControllerName</code></p>
                <h4>Berätta om din applikation och hur du tänkte när du byggde upp den. Tänkte du något speciellt på användargränssnittet?</h4>
                <p>Användargränssnit i min applikation är mycket enkelt. Jag tog inspiration till gränssnitet från kursen databas v2. Jag lade till länkar som möjligtgör att radera och updatera böcker i min bibliotek. Länkarna dirigerar användaren om till en sida med en formulär.</p>
                <h4>Gick det bra att jobba med ORM i CRUD eller vad anser du om det, jämför gärna med andra sätt att jobba med databaser?</h4>
                <p>Det gick bra. Exemplet som vi fick till övningen symfony-doctrine var i stort sätt en lösning till CRUD uppgifterna. Det är nog samma steg oavsätt om man för in ändringar i databas via PHP och classer som rent SQL. I PHP ORM använder vi metoder som set och get likaså i SQL används nyckelord SET och SELECT eller WHERE.</p>
                <h4>Vad är din uppfattning om ORM så här långt och relatera gärna till andra sätt att jobba med applikationskod mot databaser?</h4>
                <p>ORM är en teknik som används för att hantera kommunikationen mellan en applikationskod och en databas. ORM erbjuder en abstraktionsnivå genom att mappa objekt i kodbasen till rader i en relationsdatabas och vice versa. Genom att använda ORM kan vi interagera med databaser genom att använda objekt och deras metoder istället för att skriva rå SQL-kod.</p>
                <h4>Vilken är din TIL för detta kmom?</h4>
                <p>Jag har lärt mig hur jag kan integrera en databas i mitt Symfony projekt med hjälp av ramverk Doctrine ORM.
                </p>
                <h2 id=\"kmom10\">Kmom07/10: Projekt och examination >> Visualisera indikatorer för hållbarhet (sustainability)</h2>
                <h4>Krav 1 - 3</h4>
                <p>Jag har skapat en ny kontroller som kallas <code>SustainabilityController.php</code>. I denna kontroller har jag skapat en route som leder till projektets landningssida, <code>/proj</code>. Enligt kraven har jag också lagt till en länk till projektets landningssida i navigationsfältet på min rapport-sida och kallat den <code>\"Sustainability\"</code>.</p>
                <p>Mitt projekt har temat <code>\"Visualisering av indikatorer för hållbarhet\"</code>. Jag har valt att fokusera på området <code>Hållbar konsumtion och produktion</code>. Jag har samlat statistik för detta område och använt Naturvårdsverkets hemsida, <a href=\"https://www.naturvardsverket.se/data-och-statistik/konsumtion/\" target=\"_blank\"><code>www.naturvardsverket.se</code></a>, som huvudsaklig källa för statistiken.</p>
                <p>Data för graferna har sparats i databas <code>var/data.db</code>. Genom användning av Doctrine ORM har jag skapat två tabeller/entiteter som heter <code>FoodWaste.php och TextileConsumption.php</code>. Dessa tabeller/entiteter har fyllts med data från två .csv-filer. För att underlätta fyllningen av tabellerna med data har jag skapat en \"hjälparklass\" kallad <code>InsertCsvDataCommand</code>. Inspirationen till detta koncept kom från Databaskursen där vi använde ett bash-kommando och .csv-filer för att fylla tabeller med data.</p>
                <p>Jag hämtar data från tabellerna med hjälp av en ORM-metod, <code>findAll</code>, som jag instruerar i filen <code>SustainabilityController.php</code>. Därefter omvandlar jag datat till en array som innehåller associativa arrayer för varje rad i tabellen. Efter det kodar jag det till json-format och skickar det till Twig-templaten. I Twig-templaten tar jag emot json-data och använder den sedan med hjälp av <code>Chart.js</code> för att visualisera datat som en graf. Config-filer till graferna ligger i mappen <code>assets/js</code>.</p>
                <p>Eftersom färgerna som används för att visualisera graferna är färgglada, kändes det rimligt att behålla en vit bakgrund på hemsidan för att skapa en behaglig kontrast. Jag modifierar dock färgen, typsnittet och utseendet på navigationsfältet &#40;navbaren&#41; med hjälp av klasser och CSS.</p>
                <p>Enligt kraven har jag också inkluderat en instruktion för hur man klonerar och startar webbplatsen, tillsammans med klickbara badges som länkar till aktuella Scrutinizer-rapporter och beskriver innehållet i repositoryt. Dessutom har jag säkerställt att innehållet i mappen \"docs/\" är uppdaterat.</p>
                <h4>Ett allmänt stycke om hur projektet gick att genomföra</h4>
                <p>Det första som behövde lösas var att få Chart.js att fungera i mitt Symfony-projekt. Detta löstes genom att köra kommandot \"npm install chart.js\", och sedan behövdes .js-filer med konfigurationer för graferna exporteras och importeras till app.js.</p>
                <p>Detta krävde många försök för att få data från databasen att matcha rätt format och ordning, så att det skulle passa in i Chart.js-konfigurationerna.</p>
                <p>Sammanlagt lade jag ner cirka 60 timmar på projektet. Jag tycker att det var ett roligt och lärorikt projekt. Jag är glad att jag fick biblioteket Chart.js att fungera i mitt projekt. Som man säger: dokumentation är allt.</p>
                <h4>Tankar om kursen och materialet</h4>
                <p>Det kändes lite skrämmande att hoppa in i en php-värld utan att först gå igenom grunderna, men det gick vägen tack vare att jag är bekant med konceptet klasser och objekt. Jag tycker ändå att lärarna har gjort ett otroligt bra jobb med att ge alla förutsättningar för att klara av kursen. En stor fördel är att vi har fått lära oss verktyg för kodkvalitet. Jag skulle ge kursen betyget 7, bara för att jag blev skrämd av konceptet objektorienterad programmering i PHP.</p>
            </div>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Redovisning{% endblock %}

{% block body %}

    <div class=\"container my-5\">
        <h1 class=\"display-4\">Redovisning</h1>
        <hr class=\"my-4\">
        <div class=\"row my-5\">
            <div class=\"col-sm-4\">
                <div class=\"list-group\">
                    <a href=\"#kmom01\" class=\"list-group-item list-group-item-action active\" aria-current=\"true\">
                    Kmom01
                    </a>
                    <a href=\"#kmom02\" class=\"list-group-item list-group-item-action\">Kmom02</a>
                    <a href=\"#kmom03\" class=\"list-group-item list-group-item-action\">Kmom03</a>
                    <a href=\"#kmom04\" class=\"list-group-item list-group-item-action\">Kmom04</a>
                    <a href=\"#kmom05\" class=\"list-group-item list-group-item-action\">Kmom05</a>
                    <a href=\"#kmom06\" class=\"list-group-item list-group-item-action\">Kmom06</a>
                    <a href=\"#kmom10\" class=\"list-group-item list-group-item-action\">Kmom07/10: Projekt och examination</a>
                </div>
            </div>
            <div class=\"col-sm-8\">
                <h2 id=\"kmom01\">Kmom01</h2>
                <h4>Berätta kort om dina förkunskaper och tidigare erfarenheter kring objektorientering</h4>
                <p>I kursen oopython lärde jag mig hur man skapar klasser i python. Klasser kan ha olika attribut och metoder som tillhör klassen. För att instantiera klassen, alltså skapa en objekt eller instans av en klass, måste man ha en så kallad konstruktor metod definierad inuti klassen.</p>
                <h4>Berätta kort om PHPs modell för klasser och objekt. Vilka är de grunder man behöver veta/förstå för att kunna komma igång och skapa sina första klasser?</h4>
                <p>PHP stödjer objektorientering via klasser, objekt och vanliga objektorienterade konstruktionerna som normalt förekommer i objektorienterade programmeringsspråk. Ett objekt skapas utifrån en klass. Ett objekt har medlemsvariabler och metoder. Allt som objektet behöver lagra finns i dess medlemsvariabler och allt man kan göra med objektet exponeras via dess metoder.</p>
                <h4>Reflektera kort över den kodbas, koden, strukturen som användes till uppgiften me/report, hur uppfattar du den?</h4>
                <p>Allt börjar med en Kontroller. Kontroller länkar samman kod och det visuella med hjälp av klasser/funktioner och twig filer.</p>
                <h4>Med tanke på artikeln “PHP The Right Way”, vilka delar in den finner du extra intressanta och värdefulla? Är det några särskilda områden som du känner att du vill veta mer om? Lyft fram några delar av artikeln som du känner mer värdefulla.</h4>
                <p>Eftersom jag alldrig hört on Namespace i programmering läste jag om det lite extra.</p>
                <p>Jag spenderade mer tid på guiden <a href=\"https://dbwebb.se/guide/kom-igang-med-objektorienterad-programmering-i-php\">Kom igång med Objektorienterad programmering i PHP. Jag tycker att det var givande att koda tillsammans med guiden.</a></p>
                <h4>Vilken är din TIL för detta kmom?</h4>
                <p>Väldigt mycket som var  nytt i denna kmom. Jag lärt mig mer om nampespace, klasse och objekter i PHP, DocBlock kommentarer, privata och publika metoder och variabler, autoloading.</p>
                <h2 id=\"kmom02\">Kmom02</h2>
                <h4>Förklara kort de objektorienterade konstruktionerna arv, komposition, interface och trait och hur de används i PHP.</h4>
                <p>Arv kan förkralas som en relation mellan klasserna av typ är-en. Till exempel klass VovloBil kan ärva från klass Bil, alltså att klassen VovloBil kan ärva metoder och egenskaper som tillhör klassen Bill. Till exempel metoden kör och egenskap som t.ex. har fyra hjul.</p>
                <p>Komposition kan förklaras som en relation mellan klasserna av typen har-en dvs att en klass kan ha en annan klass som en medlemsvariabel. Till exempel klass Kortlek kan ha klass Kort som en medlemsvariabel.</p>
                <p>Trait liknar en klass genom att den kan definiera metoder, men till skillnad från en klass kan den inte instansieras på egen hand. Istället är trait avsedd att inkluderas i en klass med hjälp av \"use\"-satsen. När trait används i en klass blir de metoder som definieras i trait en del av klassens publika gränssnitt. Trait är användbar i situationer när man behöver dela funktionalitet mellan flera klasser, men man inte vill skapa en hierarki av arv som kan bli svårhanterlig eller oflexibel.</p>
                <p>Interface är ett kontrakt där en klass lovar att erbjuda en viss uppsättning metoder. En klass kan implementera ett interface, det innebär att klassen förbinder sig att erbjuda ett API som motsvaras av interfacet.Ett interface innehåller ingen kod som en klass kan återanvända, det är bara ett löfte om att interfacets metoder skall återfinnas inuti klassen.När man vet att en klass implementerar ett visst interface så vet man också vad man kan göra med den klassen. Interface i PHP liknar abstrakta klasser i Python.</p>
                <h4>Berätta om din implementation från uppgiften. Hur löste du uppgiften, är du nöjd/missnöjd, vilken förbättringspotential ser du i din koden och dina klasser?</h4>
                <p>För att visa kort i sidan använder jag en sprite sheet. I klassen CardGraphic när jag skapar ett kort beräknas det även en offset alltså en position på sprite sheet där motsvarande kort ritas. Jag skapar kortlek med hjälp av en nästlad loop där jag loopar igenom två arrayer, den ena med namn på suits och den andra namn på ranks. Deck är en array som fylls med 52 st CardGraphic objekt. I mina routes skickar jag \$data arrayen fylld med objekt som deck och hand. Därefter anropar jag olika medtoder inuti twig tamplaten och visar upp resultat. Förstår inte riktigt varför, men jag var tvungen att instansiera Deck och Hand klasser i varenda route eftersom instanserna/objekt av någon anledning inte ville sparas i sessionen.</p>
                <p>Som förbättringspotential ser jag att en hel del av kod som används i rotes kan skrivas om till separata funktioner.</p>
                <h4>Berätta hur det kändes att modellera ett kortspel med flödesdiagram och psuedokod. Var det något som du tror stödjer dig i din problemlösning och tankearbete för att strukturera koden kring en applikation?</h4>
                <p>Jag har svårt att svara på denna fråga eftersom jag skapade klasser innan jag ritade UML till mina klasser. Jag utgick väldigt mycket från den exempel som vi fick av Mikael till denna kmom.</p>
                <h4>Vilken är din TIL för detta kmom?</h4>
                <p>Jag lärt mig hur man skriver en konstruktor <code>__construct()</code> i PHP samt att man anropar metoder med en pil <code>-></code>. För att ärva metoder och egenskaper från en annan klass skall man använda konstruktion <code>parent::__construct(\$rank, \$suit);</code> och även skicka in argument/parametrar. Jag lärt mig att för att kunna arbeta med session och POST metoden i Symfony måste man ange <code>use Symfony\\Component\\HttpFoundation\\Request;
use och Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;</code></p>
                <h2 id=\"kmom03\">Kmom03</h2>
                <h4>Berätta hur det kändes att modellera ett kortspel med flödesdiagram och psuedokod. Var det något som du tror stödjer dig i din problemlösning och tankearbete för att strukturera koden kring en applikation?</h4>
                <p>Som utgångspunkt i modelleringen tog jag <a href=\"https://dbwebb.se/uppgift/bygg-kortspel-i-php-och-symfony-enligt-mvc#kortspel\" target=\"_blank\">rekomendationer</a> till kmom03 \"En spelrunda kan se ut så här när en spelare spelar mot banken.\" Jag fick undersöka vilka klasser som är \"typiska\" för kortspel. Föregående kmom02 har get mig en bra grund för att jag skulle kunna utveckla och bygga på den basen och de kalsser som jag skapade under kmom02. Det flödesschema som jag visar i sidan med dokumentation representerar spelflödet mellan spelare och bank och psuedokoden visar hur jag tänker räkna ut handens värde.</p>
                <h4>Berätta om din implementation från uppgiften. Hur löste du uppgiften, är du nöjd/missnöjd, vilken förbättringspotential ser du i din koden, dina klasser och applikationen som helhet?</h4>
                <p>I routen <code>#[Route('/game/init', name: 'game_init_post', methods: ['POST'])]</code> instantieras Game klassen som i sin tur instansierar spelare, bank och kortlek. Därefter anropas Game klassens metod <code>start</code> som blandar kortleken. All data sparas i session.</p>
                <p>Användaren presenteras med fyra alternativ (en form med fyra knappar) som i sin tur exekverar logiken/metoder. Jag återanvänder Mikaels <code>flash.html.twig</code> fil i kombination med Symfonys inbyggd <code>addFlash()</code> metod för att kunna informera användaren om resultatet av spelet. Jag valde att hålla mig till principen KISS och är rätt så nöjd med resultatet.</p>
                <h4>Vilken är din känsla för att koda i ett ramverk som Symfony, så här långt in i kursen?</h4>
                <p>Det känns som om jag fått grepp om hur routes, klasser och session kan samspela i Symfony ramverket för att få en fungerande applikation.</p>
                <h4>Vilken är din TIL för detta kmom?</h4>
                <p>Jag har lärt mig om vilka arbetssätt kan hjälpa mig att strukturera upp programkod när jag bygger program och applikationer.</p>
                <p>Flowchart eller flödesdiagram är nyttiga då man behöver bygga förståelse för hur en process eller ett arbetsflöde skall gå till. Exempelvis kan vi visualisera hur en splerunda mellan spelare och bank kan gå till.</p>
                <p>Pseudokod är till för att beskriva algoritmer med \"vanligt\" språk, vilket gör det möjligt att fokusera på algoritmens logik.</p>
                <p>Jag har lärt mig grunderna i hur PHP-dokumentation ska se ut.</p>
                <h2 id=\"kmom04\">Kmom04</h2>
                <h4>Berätta hur du upplevde att skriva kod som testar annan kod med PHPUnit och hur du upplever phpunit rent allmänt.</h4>
                <p>Jag har dragit slutsatsen att för att skriva kod som är lätt att testa måste man ha det i åtanke när man skriver kod. Det har varit svårt i vissa fall att bli av med beroenden då jag använder klasser inne i klasser som medlemmar/egenskaper och då har det varit svårt att skriva kod för testklasser. Till exempel, för att testa klassen Game, var jag tvungen att skriva om __construct-metod. Jag skrev om konstruktorn för att den skulle ta emot spelar- och bankklasser för att möjligtgöra att testklasser skall kunna ta emot mockade klasser.</p>
                <p>Jag upplever att dokumentationen till PHPUnit är inte så enkel att förstå. Det som var inte så enkelt var att förstå hur metoder <code>createMock</code> och <code>getMockBuilder</code> fungerar.</p>
                <p>Jag tycker att det är trevligt med visualisering av kodtäckning de testade klasser. Man ser tydligt vilka rader/metoder som täcks av testfall i en testsuit.</p>
                <h4>Hur väl lyckades du med kodtäckningen av din kod, lyckades du nå mer än 90% kodtäckning?</h4>
                <p>Jag har lyckats att täcka 96.74% av rader, 94.29% av funktioner/metoder och 66.67% av classes och traits.</p>
                <h4>Upplever du din egen kod som “testbar kod” eller finns det delar i koden som är mer eller mindre testbar och finns det saker som kan göras för att förbättra kodens testbarhet? Valde du att skriva om delar av din kod för att förbättra den eller göra den mer testbar, om så berätta lite hur du tänkte.</h4>
                <p>De delar som var svåra att testa var delar med beroenden. Till exempel, för att testa metod <code>play</code> av <code>Game</code> klassen var jag tvungen att mocka <code>Bank</code> klass och dess <code>hit metod</code> samt <code>Hand</code> klass med tillhörade metod <code>getValue</code>.</p>
                <h4>Fundera över om du anser att testbar kod är något som kan identifiera “snygg och ren kod”.</h4>
                <p>Testbar kod är kod som är strukturerad på ett sätt som är lätt att förstå och som separerar olika delar av funktionaliteten i separata moduler som kan testas oberoende.  Med det sagt tycker jag att testbar kod bidrar till att kod kan betraktas som “snygg och ren kod”.</p>
                <h4>Vilken är din TIL för detta kmom?</h4>
                <p>Jag lärt mig hur jag kan använda verktyget <code>PHPUnit</code> för att skriva test suits och testfall för egendefinierade klasser. Jag lärt mig hur jag kan mocka objekt och metoder.</p>
                <p>Jag lärt mig att dokumentera min kod med hjälp av DocBlock och generera  HTML dokumentation med hjälp av phpDocumentor.</p>
                <p>Redovisning</p>
                <h2 id=\"kmom05\">Kmom05</h2>
                <h4>Gick det bra att jobba igenom övningen med Symfony och Doctrine. Något särskilt du tänkte/reagerade på under övningen?</h4>
                <p>Det gick bra. Jag försökte finna skillnader mellan Book entity och Book repository, och komm fram till att Book entity eller Book class representerar en tabel i en databas. För att skapa en Entity Class används komandot <code>php bin/console make:entity</code>. Här anger vi även namn till tabelens columner samt dess datatyp. Book repository är ett 'service' class som ett mellan lager som skriver och läser objekt av Entity (Book) klassen till databasen.</p>
                <p>När vi gör ändringar i databasens schema dvs ändrar namn på kolumner eller dess datatyper måste vi skapa en migration. Vi skapar en migration med komandot <code>php bin/console make:migration</code> och updaterar eller nedgraderar version av vår databas med komandot <code>php bin/console doctrine:migrations:migrate</code></p>
                <p>För att kunna visa upp data ur databas måste vi skapa en kontroller med komandot <code>php bin/console make:controller ControllerName</code></p>
                <h4>Berätta om din applikation och hur du tänkte när du byggde upp den. Tänkte du något speciellt på användargränssnittet?</h4>
                <p>Användargränssnit i min applikation är mycket enkelt. Jag tog inspiration till gränssnitet från kursen databas v2. Jag lade till länkar som möjligtgör att radera och updatera böcker i min bibliotek. Länkarna dirigerar användaren om till en sida med en formulär.</p>
                <h4>Gick det bra att jobba med ORM i CRUD eller vad anser du om det, jämför gärna med andra sätt att jobba med databaser?</h4>
                <p>Det gick bra. Exemplet som vi fick till övningen symfony-doctrine var i stort sätt en lösning till CRUD uppgifterna. Det är nog samma steg oavsätt om man för in ändringar i databas via PHP och classer som rent SQL. I PHP ORM använder vi metoder som set och get likaså i SQL används nyckelord SET och SELECT eller WHERE.</p>
                <h4>Vad är din uppfattning om ORM så här långt och relatera gärna till andra sätt att jobba med applikationskod mot databaser?</h4>
                <p>ORM är en teknik som används för att hantera kommunikationen mellan en applikationskod och en databas. ORM erbjuder en abstraktionsnivå genom att mappa objekt i kodbasen till rader i en relationsdatabas och vice versa. Genom att använda ORM kan vi interagera med databaser genom att använda objekt och deras metoder istället för att skriva rå SQL-kod.</p>
                <h4>Vilken är din TIL för detta kmom?</h4>
                <p>Jag har lärt mig hur jag kan integrera en databas i mitt Symfony projekt med hjälp av ramverk Doctrine ORM.
                </p>
                <h2 id=\"kmom10\">Kmom07/10: Projekt och examination >> Visualisera indikatorer för hållbarhet (sustainability)</h2>
                <h4>Krav 1 - 3</h4>
                <p>Jag har skapat en ny kontroller som kallas <code>SustainabilityController.php</code>. I denna kontroller har jag skapat en route som leder till projektets landningssida, <code>/proj</code>. Enligt kraven har jag också lagt till en länk till projektets landningssida i navigationsfältet på min rapport-sida och kallat den <code>\"Sustainability\"</code>.</p>
                <p>Mitt projekt har temat <code>\"Visualisering av indikatorer för hållbarhet\"</code>. Jag har valt att fokusera på området <code>Hållbar konsumtion och produktion</code>. Jag har samlat statistik för detta område och använt Naturvårdsverkets hemsida, <a href=\"https://www.naturvardsverket.se/data-och-statistik/konsumtion/\" target=\"_blank\"><code>www.naturvardsverket.se</code></a>, som huvudsaklig källa för statistiken.</p>
                <p>Data för graferna har sparats i databas <code>var/data.db</code>. Genom användning av Doctrine ORM har jag skapat två tabeller/entiteter som heter <code>FoodWaste.php och TextileConsumption.php</code>. Dessa tabeller/entiteter har fyllts med data från två .csv-filer. För att underlätta fyllningen av tabellerna med data har jag skapat en \"hjälparklass\" kallad <code>InsertCsvDataCommand</code>. Inspirationen till detta koncept kom från Databaskursen där vi använde ett bash-kommando och .csv-filer för att fylla tabeller med data.</p>
                <p>Jag hämtar data från tabellerna med hjälp av en ORM-metod, <code>findAll</code>, som jag instruerar i filen <code>SustainabilityController.php</code>. Därefter omvandlar jag datat till en array som innehåller associativa arrayer för varje rad i tabellen. Efter det kodar jag det till json-format och skickar det till Twig-templaten. I Twig-templaten tar jag emot json-data och använder den sedan med hjälp av <code>Chart.js</code> för att visualisera datat som en graf. Config-filer till graferna ligger i mappen <code>assets/js</code>.</p>
                <p>Eftersom färgerna som används för att visualisera graferna är färgglada, kändes det rimligt att behålla en vit bakgrund på hemsidan för att skapa en behaglig kontrast. Jag modifierar dock färgen, typsnittet och utseendet på navigationsfältet &#40;navbaren&#41; med hjälp av klasser och CSS.</p>
                <p>Enligt kraven har jag också inkluderat en instruktion för hur man klonerar och startar webbplatsen, tillsammans med klickbara badges som länkar till aktuella Scrutinizer-rapporter och beskriver innehållet i repositoryt. Dessutom har jag säkerställt att innehållet i mappen \"docs/\" är uppdaterat.</p>
                <h4>Ett allmänt stycke om hur projektet gick att genomföra</h4>
                <p>Det första som behövde lösas var att få Chart.js att fungera i mitt Symfony-projekt. Detta löstes genom att köra kommandot \"npm install chart.js\", och sedan behövdes .js-filer med konfigurationer för graferna exporteras och importeras till app.js.</p>
                <p>Detta krävde många försök för att få data från databasen att matcha rätt format och ordning, så att det skulle passa in i Chart.js-konfigurationerna.</p>
                <p>Sammanlagt lade jag ner cirka 60 timmar på projektet. Jag tycker att det var ett roligt och lärorikt projekt. Jag är glad att jag fick biblioteket Chart.js att fungera i mitt projekt. Som man säger: dokumentation är allt.</p>
                <h4>Tankar om kursen och materialet</h4>
                <p>Det kändes lite skrämmande att hoppa in i en php-värld utan att först gå igenom grunderna, men det gick vägen tack vare att jag är bekant med konceptet klasser och objekt. Jag tycker ändå att lärarna har gjort ett otroligt bra jobb med att ge alla förutsättningar för att klara av kursen. En stor fördel är att vi har fått lära oss verktyg för kodkvalitet. Jag skulle ge kursen betyget 7, bara för att jag blev skrämd av konceptet objektorienterad programmering i PHP.</p>
            </div>
        </div>
    </div>

{% endblock %}", "report.html.twig", "/home/olga/dbwebb-kurser/mvc/me/report/templates/report.html.twig");
    }
}
