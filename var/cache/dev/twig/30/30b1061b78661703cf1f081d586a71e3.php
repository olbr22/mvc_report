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

/* metrics/index.html.twig */
class __TwigTemplate_a6502278265ccca6e02f57bf9606604b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "metrics/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "metrics/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "metrics/index.html.twig", 1);
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

        echo " Metrics analys ";
        
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
        <h1 class=\"display-4\">Analys av kodkvalitetsmått</h1>
        <hr class=\"my-4\">
        <div class=\"row my-5\">
            <div class=\"col-sm-4\">
                <div class=\"list-group\">
                    <a href=\"#introduktion\" class=\"list-group-item list-group-item-action active\" aria-current=\"true\">
                    Introduktion
                    </a>
                    <a href=\"#phpmetrics\" class=\"list-group-item list-group-item-action\">PhpMetrics</a>
                    <a href=\"#scrutinizer\" class=\"list-group-item list-group-item-action\">Scrutinizer</a>
                    <a href=\"#forbattringar\" class=\"list-group-item list-group-item-action\">Förbättringar</a>
                </div>
            </div>
            <div class=\"col-sm-8\">
                <h2 id=\"introduktion\">1. Introduktion</h2>
                <h4>1.1 Kvalitetsmått 6C</h4>
                <h5>1.1.1 Codestyle</h5>
                <p>Codestyle är en uppsättning regler eller riktlinjer som är specifika för olika programmeringsspråk t.ex. för att visa ett kodblock i Python används indrag, medan i JavaScript används klammerparenteser <code>&lcub;&rcub;</code>. Det finns dock flera element som är gemensamma för ett stort antal programmeringsstilar. Att följa regler och riktlinjer för kodstil är viktigt för att uppnå god kodläsbarhet.</p>
                <p>I mitt Symfony-projekt används tre utvecklingsverktyg för att hjälpa mig att förbättra min kodningsstil och uppnå renare kod. Dessa verktyg är PHP Coding Standards Fixer, PHPMD och PHPStan. PHPMD och PHPStan fungerar enligt en regeluppsättning &#40;<code>.me/report/phpmd.xml och me/report/phpstan.neon</code>&#41; som kontrollerar att min kod följer reglerna. Alla verktyg som nämns ovan installerats lokalt i mappen <code>me/report/tools</code>. För att kunna enkelt exekvera dessa verktyg från terminalen, har jag inkluderat skripten i <code>me/report/composer.json</code>
                <pre><code>
                    \"scripts\": {
                        \"csfix\": \"tools/php-cs-fixer/vendor/bin/php-cs-fixer fix src\",
                        \"phpmd\": \"tools/phpmd/vendor/bin/phpmd . text phpmd.xml || true\",
                        \"phpstan\": \"tools/phpstan/vendor/bin/phpstan || true\",
                        \"lint\": [
                            \"@phpmd\",
                            \"@phpstan\",
                            \"@csfix\"
                        ]
                    }</code></pre></p>
                <h5>1.1.2 Coverage</h5>
                <p>Kodtäckning är ett mått som ger en uppskattning av hur många rader, filer, klasser, metoder som omfattas av ett eller flera testfall. En högre täckningsgrad indikerar en vältestad kod, medan en låg täckningsgrad kan innebära potentiella risker inom kvalitetssäkringen.</p>
                <p>För att kunna skriva testfall och därmed testa klasser i projekttet har jag integrerat verktyget PHPUnit samt genererat Kodtäckning rapport som HTML fil. Rapporten ligger i <code>me/report/docs/coverage</code>
                <figure>
                    <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/code_coverage.png"), "html", null, true);
        echo "\" target=\"_blank\">
                        <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/code_coverage.png"), "html", null, true);
        echo "\" alt=\"Code coverage Game\" width=\"500\" height=\"600\">
                    </a>
                    <figcaption>Kodtäckning me/report/src/Game.</figcaption>
                </figure>
                </p>
                <h5>1.1.3 Complexity</h5>
                <p>Complexity eller Conditional Complexity är ett mått som mäter komplexiteten hos en kodbas genom att analysera kontrollflödet för ett program. Det ger insikter i antalet oberoende sökvägar inom ett programs källkod och hjälper till att bedöma dess läsbarhet, underhållbarhet och testbarhet. Konceptet bakom cyklomatisk komplexitet bygger på idén att ju fler beslutspunkter, såsom villkor &#40;if-satser, switch-satser&#41; och loopar, en kodbit har, desto mer komplex blir den.</p>
                <p>Genom att analysera kodens cyklomatiska komplexitet kan vi identifiera komplexa områden som kan kräva omfaktorisering eller ytterligare testning för att förbättra kodkvaliteten och minska sannolikheten för buggar.</p>
                <p>På bilden nedan visas en översikt av maintainability/complexity av min kod genererat av PhpMetrics. Varje fil symboliseras av en cirkel. Cirkelns storlek representerar den cyklomatiska komplexiteten. Färgen på cirkeln representerar Maintainability Index. Stora röda cirklar kommer förmodligen att vara svåra att underhålla.
                <figure>
                    <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/complexity.png"), "html", null, true);
        echo "\" alt=\"Complexity of my Symfony project generated by PhpMetrics\" width=\"100\" height=\"100\">
                    <figcaption>Komplexiteten i mitt Symfony-projekt genererat av PhpMetrics.</figcaption>
                </figure>

                <figure>
                    <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/biggest_complexity.png"), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/biggest_complexity.png"), "html", null, true);
        echo "\" alt=\"Classes with the greatest complexity\" width=\"800\"></a>
                    <figcaption>Klasser i mitt Symfony-projekt med störst komplexitet enligt PhpMetrics.</figcaption>
                </figure>

                <figure>
                    <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/complexity_scrutinazer.png"), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/complexity_scrutinazer.png"), "html", null, true);
        echo "\" alt=\"Classes with the greatest complexity\" width=\"800\"></a>
                    <figcaption>Klasser i mitt Symfony-projekt med störst komplexitet enligt Scrutinazer.</figcaption>
                </figure>
                </p>
                <h5>1.1.4 Cohesion aka Lack of coheison of methods &#40;LCOM&#41;</h5>
                <p>Cohesion är ett mått som bedömer sambandet mellan metoder i en klass, nämligen hur väl metoder passar ihop i klassen.</p>
                <p>Termen cohesion brukar beskrivas som antingen \"high cohesion\" eller \"low cohesion\". Klasser med \"high cohesion\" anses vara mer önskvärda eftersom detta attribut är kopplat till flera positiva egenskaper hos programvara, såsom robusthet, pålitlighet, återanvändbarhet och läsbarhet. Å andra sidan är \"low cohesion\" associerat med oönskade egenskaper som gör koden svår att underhålla, testa, återanvända eller till och med förstå.</p>
                <p>Som programmerare bör man sträva efter att uppnå lägre värden i måttet Lack of coheison of methods &#40;LCOM&#41;, eftersom \"high cohesion\" överensstämmer med principen om ett enda ansvar.</p>
                <p>I mitt fall beräknar PhpMetrics det genomsnittliga LCOM-värdet till <code>1.52</code>, och nedan visas en bild där klasser listas i en fallande ordning baserat på LCOM.
                    <figure>
                        <a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/lcom.png"), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/lcom.png"), "html", null, true);
        echo "\" alt=\"The Lack of coheison of methods\" width=\"800\"></a>
                        <figcaption>Klasserna rangordnas i en fallande ordning baserat på LCOM, där lägre värden indikerar bättre resultat.</figcaption>
                    </figure>
                </p>
                <h5>1.1.5 Coupling</h5>
                <p>Coupling avser hur mycket moduler eller klasser är beroende av varandra. Det mäter i princip hur nära sammankopplade två moduler eller klasser är och hur starka relationer de har.</p>
                <p>Rapporten som genererats av PhpMetrics belyser två mätvärden: Afferent coupling &#40;AC&#41; och Efferent coupling &#40;EC&#41;. Afferent koppling &#40;AC&#41; är antalet klasser som påverkas av en given klass så kallade utåtriktade kopplingar. Efferent koppling &#40;EC&#41; är antalet klasser från vilka en given klass tar emot effekter så kallade inkommande kopplingar. Ett högt antal AC &#40;utåtriktade&#41; kopplingar kan indikera att denna klass använder många andra klasser. Ett högt antal EC &#40;inkommande&#41; kopplingar kan indikera att många andra klasser är beroende av denna klass.</p>
                <p>Låg koppling, vilket betyder få eller inga beroenden till andra klasser, anses ofta vara ett tecken på välskriven kod och bra design. När detta kombineras med hög kohesion &#40;coheison&#41; främjar det kod med hög läsbarhet och underhållbarhet.
                <figure>
                        <a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/coupling.png"), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/coupling.png"), "html", null, true);
        echo "\" alt=\"An overview of all the classes in my Symfony project showing their AC and EC connection\" width=\"800\"></a>
                        <figcaption>En översikt över alla klasser i mitt Symfony-projekt som visar deras AC- och EC-koppling.</figcaption>
                    </figure>
                </p>
                <h5>1.1.6 CRAP</h5>
                <p>CRAP &#40;Change Risk Anti-Patterns&#41; är en förkortning som återspeglar dess syfte att ta itu med risken i samband med att modifiera en kod. I enklare termer innebär metoder med höga CRAP-poäng en större risk när det gäller att göra förändringar. Därför fokuserar CRAP-måttet främst på att utvärdera risknivån. Beräkningen av CRAP-måttet baseras på hur komplex en metod är jämfört med hur många testfall som täcker den metoden.
                    <figure>
                            <a href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/crap.png"), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/crap.png"), "html", null, true);
        echo "\" alt=\"CRAP score for the method stand()\" width=\"800\"></a>
                            <figcaption>CRAP-mått för metoden stand.</figcaption>
                    </figure>
                </p>
                <h2 id=\"phpmetrics\">2. PhpMetrics</h2>
                <p>I min analys kommer jag att fokusera på kontrollern <code>me/report/src/Controller/GameController.php</code> och klasser som finns i mappen <code>me/report/src/Game</code>.</p>
                <p>Fliken <code>Class Violations</code> för klassen <code>App\\Controller\\GameController</code> visar att denna klass är förmodligen har buggar och att komponenten teoretiskt består av <code>0.52</code> buggar.
                    <figure>
                            <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/game_controller_violations.png"), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/game_controller_violations.png"), "html", null, true);
        echo "\" alt=\"Violations for class GameController\" width=\"800\"></a>
                            <figcaption>'Class Violations' för klass GameController.</figcaption>
                    </figure>
                </p>
                <p>Det finns inga tester skrivna för klassen <code>GameController</code>. PhpMetrics rekomenderar att klasser med hög cyklomatisk komplexitet eller hög sannolikhet för buggar bör täckas med tester.</p>
                <p>
                    <table>
                        <caption>Tabell 1. Översikt över kodkvalitetsmått enligt PhpMetrics</caption>
                        <tr>
                            <th>Class</th>
                            <th title=\"A higher Cyclomatic Complexity value indicates a higher number of decision points and possible execution paths, which can lead to increased complexity and potential risks\">&#9432; Class cyclomatic complexity</th>
                            <th title=\"If a class has a high LCOM value, it suggests that the methods within that class are not closely related or dependent on each other.\">&#9432; LCOM</th>
                            <th title=\"the number of classes affected by given class\">&#9432; Afferent coupling</th>
                            <th title=\"the number of classes from which given class receives effects\">&#9432; Efferent coupling</th>
                            <th>Volume</th>
                            <th title=\"measures how maintainable (easy to support and change) the source code is\">&#9432; Maintainability Index</th>
                            <th>Unit testsuits</th>
                        </tr>
                        <tr>
                            <td>App\\Controller\\GameController</td>
                            <td>10</td>
                            <td>2</td>
                            <td>0</td>
                            <td>6</td>
                            <td>1559.79</td>
                            <td>59.41</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>App\\Game\\Deck</td>
                            <td>6</td>
                            <td>1</td>
                            <td>1</td>
                            <td>2</td>
                            <td>282.39</td>
                            <td>89.37</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>App\\Game\\Card</td>
                            <td>5</td>
                            <td>1</td>
                            <td>1</td>
                            <td>0</td>
                            <td>69.74</td>
                            <td>85.58</td>
                            <td>27</td>
                        </tr>
                        <tr>
                            <td>App\\Game\\Hand</td>
                            <td>5</td>
                            <td>1</td>
                            <td>2</td>
                            <td>0</td>
                            <td>163.5</td>
                            <td>91.25</td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td>App\\Game\\Player</td>
                            <td>3</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>69</td>
                            <td>98.53</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>App\\Game\\Bank</td>
                            <td>2</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>33.69</td>
                            <td>102.86</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>App\\Game\\Game</td>
                            <td>8</td>
                            <td>1</td>
                            <td>1</td>
                            <td>3</td>
                            <td>182.75</td>
                            <td>89</td>
                            <td>5</td>
                        </tr>
                    </table>
                </p>
                <p>Baserat på mätvärdena för <code>Maintainability Index</code> och <code>Unit testsuits</code> för klassen <code>App\\Controller\\GameController</code> kan man dra slutsatsen att denna klass bör ses över. Till exempel genom att omfaktorisera koden i denna klass, kan dess volym minskas och eventuellt kan cyklomatisk komplexitet reduceras genom att bryta ut en lös if-elseif-sats till en metod/funktion.</p>

                <h2 id=\"scrutinizer\">3. Scrutinizer</h2>
                <p>
                    <figure>
                                <img src=\"https://scrutinizer-ci.com/g/olbr22/mvc_report/badges/quality-score.png?b=main\" alt=\"Scrutinizer quality\" width=\"150\">
                                <img src=\"https://scrutinizer-ci.com/g/olbr22/mvc_report/badges/coverage.png?b=main\" alt=\"Scrutinizer coverage\" width=\"150\">
                                <img src=\"https://scrutinizer-ci.com/g/olbr22/mvc_report/badges/build.png?b=main\" alt=\"Scrutinizer build\" width=\"130\">
                                <figcaption>Scrutinizer badges.</figcaption>
                    </figure>
                </p>
                <p>Enligt rapporten genererad av Scrutinizer är kodkvaliteten på mitt Symfony-projekt mycket bra och har fått betyget <code>9.98</code>. Även om koden har betygsatts som bra, en metod <code>stand&#40;&#41;</code> i klassen <code>GameController</code> kan förbättras.
                    <figure>
                                <a href=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/scrutinizer_stand.png"), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/scrutinizer_stand.png"), "html", null, true);
        echo "\" alt=\"Detailed Scrutinizer report for the method stand\" width=\"800\"></a>
                                <figcaption>Scrutinizer rapport för metoden GameController::stand&#40;&#41;.</figcaption>
                    </figure>
                    CRAP-måttet för <code>stand&#40;&#41;</code> metoden är 42 och har fått betyget F. CRAP-måttet bör helst vara så lågt som möjligt och inte större än 6 för att få betyget A.
                </p>
                <p>
                Dessutom har klassen <code>src/Game/Game.php</code> två buggar som bör åtgärdas.
                <figure>
                                <a href=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/game_bugs.png"), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/game_bugs.png"), "html", null, true);
        echo "\" alt=\"Detailed report on the issues in the Game class\" width=\"800\"></a>
                                <figcaption>Scrutinizer rapport för metoden GameController::stand&#40;&#41;.</figcaption>
                    </figure>
                </p>
                <p>Tabellen nedan visar en översikt över kodkvalitetsmått enligt Scrutinizer.
                    <table>
                            <caption>Tabell 2. Översikt över kodkvalitetsmått enligt Scrutinizer</caption>
                            <tr>
                                <th>Class</th>
                                <th title=\"The number of decision points which change the controll flow (ifs, loops).\">&#9432; Total Complexity</th>
                                <th>Total lines</th>
                                <th title=\"Scrutinizer uses a rating algorithm for the different elements of your code such as classes, methods or functions which combines their different metrics (such as complexity, coupling, cohesion, etc.) in a single rating score. The rating is done with the grades A-F; A being the best rating and F the worst.\">&#9432; Code Rating</th>
                                <th>Test Coverage %</th>
                            </tr>
                            <tr>
                                <td>App\\Controller\\GameController</td>
                                <td>18</td>
                                <td>177</td>
                                <td>A</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>App\\Game\\Deck</td>
                                <td>10</td>
                                <td>75</td>
                                <td>A</td>
                                <td>100</td>
                            </tr>
                            <tr>
                                <td>App\\Game\\Card</td>
                                <td>13</td>
                                <td>128</td>
                                <td>A</td>
                                <td>100</td>
                            </tr>
                            <tr>
                                <td>App\\Game\\Hand</td>
                                <td>9</td>
                                <td>65</td>
                                <td>A</td>
                                <td>100</td>
                            </tr>
                            <tr>
                                <td>App\\Game\\Player</td>
                                <td>7</td>
                                <td>65</td>
                                <td>A</td>
                                <td>92.86</td>
                            </tr>
                            <tr>
                                <td>App\\Game\\Bank</td>
                                <td>5</td>
                                <td>41</td>
                                <td>A</td>
                                <td>100</td>
                            </tr>
                            <tr>
                                <td>App\\Game\\Game</td>
                                <td>14</td>
                                <td>101</td>
                                <td>A</td>
                                <td>88.89</td>
                            </tr>
                        </table>
                </p>
                <h2 id=\"forbattringar\">4. Förbättringar</h2>
                <p>Till att börja med väljer jag att fixa buggar för klassen <code>App\\Game\\Game</code> där Scrutinizer föreslår att granska en elseif-sats: <code>The condition is_null(\$bank) is always true.</code> Denna åtgärd kommer att göra koden i klassen mer läsbar och lättare att förstå.</p>
                <p>Därefter tänker jag lyfta en if elseif sats ur GameController::stand metoden till en egen metod i Game klassen. Även denna åtgärd kommer att göra koden mer läsbar samt eventuellt minskar GameControllers komplexitet.</p>
                <p>En till förbättring i form av ökad kodtäckning kan uppnås genom att skriva enhetstester till GameController klassen.</p>
                <h3>4.1 Förbättringar analys</h3>
                <p>Efter att jag ersatte två elseif-satser i Game-klassen, som kontrollerade om \$deck- och \$bank-variablerna var null, med null coalescing operator ??, minskade antalet rader i Game-klassen. Denna åtgärd minskade antalet buggar med 2, men förbättrade inte kodens kvalitet. Tyvärr ledde detta till att testtäckningen för Game-klassen minskade från 88.89% till 85.71%, och testtäckningen för hela projektet minskade från 18% till 17%.
                    <figure>
                        <a href=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/bug_fix.png"), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/bug_fix.png"), "html", null, true);
        echo "\" alt=\"Summary of changes in Scrutinizer\" width=\"300\"></a>
                        <figcaption>Ändring av kodstatus i Scrutinizer.</figcaption>
                    </figure>
                </p>
                <p>Genom att separera if-elseif-konstruktionen från stand() metoden i GameController klassen, har jag lyckats förbättra kodbetyget för metoden GameController::stand() från B till A.
                    <figure>
                        <a href=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/gamecontroller_stand.png"), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/gamecontroller_stand.png"), "html", null, true);
        echo "\" alt=\"Increased test coverage in Scrutinizer\" width=\"300\"></a>
                        <figcaption>Ändring av kodstatus i Scrutinizer.</figcaption>
                    </figure>
                Kodkomplexiteten och CRAP-måttet för stand() metoden har minskat. Bilder nedan visar rapporter för GameController::stand() medtoden före och efter förändringar.
                <figure>
                        <a href=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/crap.png"), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/crap.png"), "html", null, true);
        echo "\" alt=\"Code status before changes\" width=\"500\"></a>
                        <figcaption>Kodstatus för GameController::stand() före förbättringar.</figcaption>
                </figure>
                <figure>
                        <a href=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/crap_after.png"), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/crap_after.png"), "html", null, true);
        echo "\" alt=\"Code status after changes\" width=\"500\"></a>
                        <figcaption>Kodstatus för GameController::stand() efter förbättringar.</figcaption>
                </figure>
                </p>
                <p>Jag har även försökt skriva enhetstester för GameController-klassen, men har haft svårt att hitta meningsfulla testfall. Istället valde jag att fokusera på att skriva ytterligare testfall för klassen Game, vilket resulterade i en ökning av kodtäckningen från 17% till 20%.
                    <figure>
                        <a href=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testcoveragetwenty.png"), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testcoveragetwenty.png"), "html", null, true);
        echo "\" alt=\"Summary of changes in Scrutinizer\" width=\"300\"></a>
                        <figcaption>Ändring av kodtäckning i Scrutinizer.</figcaption>
                    </figure>
                </p>
                <p>
                    <table>
                        <caption>Tabell 3. Översikt över kodkvalitetsmått före och efter ändringarna enligt PhpMetrics</caption>
                        <tr>
                            <th>Class</th>
                            <th title=\"A higher Cyclomatic Complexity value indicates a higher number of decision points and possible execution paths, which can lead to increased complexity and potential risks\">&#9432; Class cyclomatic complexity</th>
                            <th title=\"If a class has a high LCOM value, it suggests that the methods within that class are not closely related or dependent on each other.\">&#9432; LCOM</th>
                            <th title=\"the number of classes affected by given class\">&#9432; Afferent coupling</th>
                            <th title=\"the number of classes from which given class receives effects\">&#9432; Efferent coupling</th>
                            <th>Volume</th>
                            <th title=\"measures how maintainable (easy to support and change) the source code is\">&#9432; Maintainability Index</th>
                            <th>Unit testsuits</th>
                        </tr>
                        <tr>
                            <th><span class=\"before\">Before</span> / <span class=\"after\">After</span></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>App\\Controller\\GameController</td>
                            <td><span class=\"before\">10</span> / <span class=\"after\">6</span></td>
                            <td><span class=\"before\">2</span> / <span class=\"after\">2</span></td>
                            <td><span class=\"before\">0</span> / <span class=\"after\">0</span></td>
                            <td><span class=\"before\">6</span> / <span class=\"after\">6</span></td>
                            <td><span class=\"before\">1559.79</span> / <span class=\"after\">1435.24</span></td>
                            <td><span class=\"before\">59.41</span> / <span class=\"after\">61.23</span></td>
                            <td><span class=\"before\">0</span> / <span class=\"after\">1</span></td>
                        </tr>
                        <tr>
                            <td>App\\Game\\Deck</td>
                            <td>6</td>
                            <td>1</td>
                            <td>1</td>
                            <td>2</td>
                            <td>282.39</td>
                            <td>89.37</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>App\\Game\\Card</td>
                            <td>5</td>
                            <td>1</td>
                            <td>1</td>
                            <td>0</td>
                            <td>69.74</td>
                            <td>85.58</td>
                            <td>27</td>
                        </tr>
                        <tr>
                            <td>App\\Game\\Hand</td>
                            <td>5</td>
                            <td>1</td>
                            <td>2</td>
                            <td>0</td>
                            <td>163.5</td>
                            <td>91.25</td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td>App\\Game\\Player</td>
                            <td>3</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>69</td>
                            <td>98.53</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>App\\Game\\Bank</td>
                            <td>2</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>33.69</td>
                            <td>102.86</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>App\\Game\\Game</td>
                            <td><span class=\"before\">8</span> / <span class=\"after\">11</span> </td>
                            <td><span class=\"before\">1</span> / <span class=\"after\">2</span> </td>
                            <td><span class=\"before\">1</span> / <span class=\"after\">1</span> </td>
                            <td><span class=\"before\">3</span> / <span class=\"after\">3</span> </td>
                            <td><span class=\"before\">182.75</span> / <span class=\"after\">392.55</span> </td>
                            <td><span class=\"before\">89</span> / <span class=\"after\">86.04</span> </td>
                            <td><span class=\"before\">5</span> / <span class=\"after\">7</span> </td>
                        </tr>
                    </table>
                </p>
                <h2 id=\"discussion\">5. Diskussion</h2>
                <p>Ja, det är definitivt möjligt att aktivt arbeta med kodkvalitet och \"clean code\" med hjälp av verktyg för kodanalys. Att använda verktyg som Scrutinizer och PhpMetrics har varit till stor hjälp för mig när det gäller att upptäcka potentiella problem i min kod, såsom kodstilbrott, buggar eller prestandafrågor.</p>
                <p>Det är dock viktigt att vara medveten om att kodanalysverktyg ibland kan generera falska positiva eller falska negativa resultat. Det har hänt att verktygen har markerat vissa delar av min kod som buggar även om mitt program fungerade korrekt. Det har krävt lite extra tid och engagemang att utvärdera och hantera dessa resultat.</p>
                <p>Dessutom har jag upptäckt att det kan ta lite tid och ansträngning att lära sig om måttvärdena och hur man tolkar resultaten från kodanalysverktygen. Det är värt att investera tid i att förstå och använda dessa värden på rätt sätt för att kunna dra full nytta av verktygens potential.</p>
            </div>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "metrics/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  454 => 301,  443 => 295,  434 => 291,  424 => 286,  413 => 280,  336 => 208,  323 => 200,  215 => 97,  202 => 89,  190 => 82,  176 => 73,  161 => 63,  151 => 58,  143 => 53,  130 => 43,  126 => 42,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} Metrics analys {% endblock %}

{% block body %}

    <div class=\"container my-5\">
        <h1 class=\"display-4\">Analys av kodkvalitetsmått</h1>
        <hr class=\"my-4\">
        <div class=\"row my-5\">
            <div class=\"col-sm-4\">
                <div class=\"list-group\">
                    <a href=\"#introduktion\" class=\"list-group-item list-group-item-action active\" aria-current=\"true\">
                    Introduktion
                    </a>
                    <a href=\"#phpmetrics\" class=\"list-group-item list-group-item-action\">PhpMetrics</a>
                    <a href=\"#scrutinizer\" class=\"list-group-item list-group-item-action\">Scrutinizer</a>
                    <a href=\"#forbattringar\" class=\"list-group-item list-group-item-action\">Förbättringar</a>
                </div>
            </div>
            <div class=\"col-sm-8\">
                <h2 id=\"introduktion\">1. Introduktion</h2>
                <h4>1.1 Kvalitetsmått 6C</h4>
                <h5>1.1.1 Codestyle</h5>
                <p>Codestyle är en uppsättning regler eller riktlinjer som är specifika för olika programmeringsspråk t.ex. för att visa ett kodblock i Python används indrag, medan i JavaScript används klammerparenteser <code>&lcub;&rcub;</code>. Det finns dock flera element som är gemensamma för ett stort antal programmeringsstilar. Att följa regler och riktlinjer för kodstil är viktigt för att uppnå god kodläsbarhet.</p>
                <p>I mitt Symfony-projekt används tre utvecklingsverktyg för att hjälpa mig att förbättra min kodningsstil och uppnå renare kod. Dessa verktyg är PHP Coding Standards Fixer, PHPMD och PHPStan. PHPMD och PHPStan fungerar enligt en regeluppsättning &#40;<code>.me/report/phpmd.xml och me/report/phpstan.neon</code>&#41; som kontrollerar att min kod följer reglerna. Alla verktyg som nämns ovan installerats lokalt i mappen <code>me/report/tools</code>. För att kunna enkelt exekvera dessa verktyg från terminalen, har jag inkluderat skripten i <code>me/report/composer.json</code>
                <pre><code>
                    \"scripts\": {
                        \"csfix\": \"tools/php-cs-fixer/vendor/bin/php-cs-fixer fix src\",
                        \"phpmd\": \"tools/phpmd/vendor/bin/phpmd . text phpmd.xml || true\",
                        \"phpstan\": \"tools/phpstan/vendor/bin/phpstan || true\",
                        \"lint\": [
                            \"@phpmd\",
                            \"@phpstan\",
                            \"@csfix\"
                        ]
                    }</code></pre></p>
                <h5>1.1.2 Coverage</h5>
                <p>Kodtäckning är ett mått som ger en uppskattning av hur många rader, filer, klasser, metoder som omfattas av ett eller flera testfall. En högre täckningsgrad indikerar en vältestad kod, medan en låg täckningsgrad kan innebära potentiella risker inom kvalitetssäkringen.</p>
                <p>För att kunna skriva testfall och därmed testa klasser i projekttet har jag integrerat verktyget PHPUnit samt genererat Kodtäckning rapport som HTML fil. Rapporten ligger i <code>me/report/docs/coverage</code>
                <figure>
                    <a href=\"{{ asset('img/code_coverage.png') }}\" target=\"_blank\">
                        <img src=\"{{ asset('img/code_coverage.png') }}\" alt=\"Code coverage Game\" width=\"500\" height=\"600\">
                    </a>
                    <figcaption>Kodtäckning me/report/src/Game.</figcaption>
                </figure>
                </p>
                <h5>1.1.3 Complexity</h5>
                <p>Complexity eller Conditional Complexity är ett mått som mäter komplexiteten hos en kodbas genom att analysera kontrollflödet för ett program. Det ger insikter i antalet oberoende sökvägar inom ett programs källkod och hjälper till att bedöma dess läsbarhet, underhållbarhet och testbarhet. Konceptet bakom cyklomatisk komplexitet bygger på idén att ju fler beslutspunkter, såsom villkor &#40;if-satser, switch-satser&#41; och loopar, en kodbit har, desto mer komplex blir den.</p>
                <p>Genom att analysera kodens cyklomatiska komplexitet kan vi identifiera komplexa områden som kan kräva omfaktorisering eller ytterligare testning för att förbättra kodkvaliteten och minska sannolikheten för buggar.</p>
                <p>På bilden nedan visas en översikt av maintainability/complexity av min kod genererat av PhpMetrics. Varje fil symboliseras av en cirkel. Cirkelns storlek representerar den cyklomatiska komplexiteten. Färgen på cirkeln representerar Maintainability Index. Stora röda cirklar kommer förmodligen att vara svåra att underhålla.
                <figure>
                    <img src=\"{{ asset('img/complexity.png') }}\" alt=\"Complexity of my Symfony project generated by PhpMetrics\" width=\"100\" height=\"100\">
                    <figcaption>Komplexiteten i mitt Symfony-projekt genererat av PhpMetrics.</figcaption>
                </figure>

                <figure>
                    <a href=\"{{ asset('img/biggest_complexity.png') }}\" target=\"_blank\"><img src=\"{{ asset('img/biggest_complexity.png') }}\" alt=\"Classes with the greatest complexity\" width=\"800\"></a>
                    <figcaption>Klasser i mitt Symfony-projekt med störst komplexitet enligt PhpMetrics.</figcaption>
                </figure>

                <figure>
                    <a href=\"{{ asset('img/complexity_scrutinazer.png') }}\" target=\"_blank\"><img src=\"{{ asset('img/complexity_scrutinazer.png') }}\" alt=\"Classes with the greatest complexity\" width=\"800\"></a>
                    <figcaption>Klasser i mitt Symfony-projekt med störst komplexitet enligt Scrutinazer.</figcaption>
                </figure>
                </p>
                <h5>1.1.4 Cohesion aka Lack of coheison of methods &#40;LCOM&#41;</h5>
                <p>Cohesion är ett mått som bedömer sambandet mellan metoder i en klass, nämligen hur väl metoder passar ihop i klassen.</p>
                <p>Termen cohesion brukar beskrivas som antingen \"high cohesion\" eller \"low cohesion\". Klasser med \"high cohesion\" anses vara mer önskvärda eftersom detta attribut är kopplat till flera positiva egenskaper hos programvara, såsom robusthet, pålitlighet, återanvändbarhet och läsbarhet. Å andra sidan är \"low cohesion\" associerat med oönskade egenskaper som gör koden svår att underhålla, testa, återanvända eller till och med förstå.</p>
                <p>Som programmerare bör man sträva efter att uppnå lägre värden i måttet Lack of coheison of methods &#40;LCOM&#41;, eftersom \"high cohesion\" överensstämmer med principen om ett enda ansvar.</p>
                <p>I mitt fall beräknar PhpMetrics det genomsnittliga LCOM-värdet till <code>1.52</code>, och nedan visas en bild där klasser listas i en fallande ordning baserat på LCOM.
                    <figure>
                        <a href=\"{{ asset('img/lcom.png') }}\" target=\"_blank\"><img src=\"{{ asset('img/lcom.png') }}\" alt=\"The Lack of coheison of methods\" width=\"800\"></a>
                        <figcaption>Klasserna rangordnas i en fallande ordning baserat på LCOM, där lägre värden indikerar bättre resultat.</figcaption>
                    </figure>
                </p>
                <h5>1.1.5 Coupling</h5>
                <p>Coupling avser hur mycket moduler eller klasser är beroende av varandra. Det mäter i princip hur nära sammankopplade två moduler eller klasser är och hur starka relationer de har.</p>
                <p>Rapporten som genererats av PhpMetrics belyser två mätvärden: Afferent coupling &#40;AC&#41; och Efferent coupling &#40;EC&#41;. Afferent koppling &#40;AC&#41; är antalet klasser som påverkas av en given klass så kallade utåtriktade kopplingar. Efferent koppling &#40;EC&#41; är antalet klasser från vilka en given klass tar emot effekter så kallade inkommande kopplingar. Ett högt antal AC &#40;utåtriktade&#41; kopplingar kan indikera att denna klass använder många andra klasser. Ett högt antal EC &#40;inkommande&#41; kopplingar kan indikera att många andra klasser är beroende av denna klass.</p>
                <p>Låg koppling, vilket betyder få eller inga beroenden till andra klasser, anses ofta vara ett tecken på välskriven kod och bra design. När detta kombineras med hög kohesion &#40;coheison&#41; främjar det kod med hög läsbarhet och underhållbarhet.
                <figure>
                        <a href=\"{{ asset('img/coupling.png') }}\" target=\"_blank\"><img src=\"{{ asset('img/coupling.png') }}\" alt=\"An overview of all the classes in my Symfony project showing their AC and EC connection\" width=\"800\"></a>
                        <figcaption>En översikt över alla klasser i mitt Symfony-projekt som visar deras AC- och EC-koppling.</figcaption>
                    </figure>
                </p>
                <h5>1.1.6 CRAP</h5>
                <p>CRAP &#40;Change Risk Anti-Patterns&#41; är en förkortning som återspeglar dess syfte att ta itu med risken i samband med att modifiera en kod. I enklare termer innebär metoder med höga CRAP-poäng en större risk när det gäller att göra förändringar. Därför fokuserar CRAP-måttet främst på att utvärdera risknivån. Beräkningen av CRAP-måttet baseras på hur komplex en metod är jämfört med hur många testfall som täcker den metoden.
                    <figure>
                            <a href=\"{{ asset('img/crap.png') }}\" target=\"_blank\"><img src=\"{{ asset('img/crap.png') }}\" alt=\"CRAP score for the method stand()\" width=\"800\"></a>
                            <figcaption>CRAP-mått för metoden stand.</figcaption>
                    </figure>
                </p>
                <h2 id=\"phpmetrics\">2. PhpMetrics</h2>
                <p>I min analys kommer jag att fokusera på kontrollern <code>me/report/src/Controller/GameController.php</code> och klasser som finns i mappen <code>me/report/src/Game</code>.</p>
                <p>Fliken <code>Class Violations</code> för klassen <code>App\\Controller\\GameController</code> visar att denna klass är förmodligen har buggar och att komponenten teoretiskt består av <code>0.52</code> buggar.
                    <figure>
                            <a href=\"{{ asset('img/game_controller_violations.png') }}\" target=\"_blank\"><img src=\"{{ asset('img/game_controller_violations.png') }}\" alt=\"Violations for class GameController\" width=\"800\"></a>
                            <figcaption>'Class Violations' för klass GameController.</figcaption>
                    </figure>
                </p>
                <p>Det finns inga tester skrivna för klassen <code>GameController</code>. PhpMetrics rekomenderar att klasser med hög cyklomatisk komplexitet eller hög sannolikhet för buggar bör täckas med tester.</p>
                <p>
                    <table>
                        <caption>Tabell 1. Översikt över kodkvalitetsmått enligt PhpMetrics</caption>
                        <tr>
                            <th>Class</th>
                            <th title=\"A higher Cyclomatic Complexity value indicates a higher number of decision points and possible execution paths, which can lead to increased complexity and potential risks\">&#9432; Class cyclomatic complexity</th>
                            <th title=\"If a class has a high LCOM value, it suggests that the methods within that class are not closely related or dependent on each other.\">&#9432; LCOM</th>
                            <th title=\"the number of classes affected by given class\">&#9432; Afferent coupling</th>
                            <th title=\"the number of classes from which given class receives effects\">&#9432; Efferent coupling</th>
                            <th>Volume</th>
                            <th title=\"measures how maintainable (easy to support and change) the source code is\">&#9432; Maintainability Index</th>
                            <th>Unit testsuits</th>
                        </tr>
                        <tr>
                            <td>App\\Controller\\GameController</td>
                            <td>10</td>
                            <td>2</td>
                            <td>0</td>
                            <td>6</td>
                            <td>1559.79</td>
                            <td>59.41</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>App\\Game\\Deck</td>
                            <td>6</td>
                            <td>1</td>
                            <td>1</td>
                            <td>2</td>
                            <td>282.39</td>
                            <td>89.37</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>App\\Game\\Card</td>
                            <td>5</td>
                            <td>1</td>
                            <td>1</td>
                            <td>0</td>
                            <td>69.74</td>
                            <td>85.58</td>
                            <td>27</td>
                        </tr>
                        <tr>
                            <td>App\\Game\\Hand</td>
                            <td>5</td>
                            <td>1</td>
                            <td>2</td>
                            <td>0</td>
                            <td>163.5</td>
                            <td>91.25</td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td>App\\Game\\Player</td>
                            <td>3</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>69</td>
                            <td>98.53</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>App\\Game\\Bank</td>
                            <td>2</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>33.69</td>
                            <td>102.86</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>App\\Game\\Game</td>
                            <td>8</td>
                            <td>1</td>
                            <td>1</td>
                            <td>3</td>
                            <td>182.75</td>
                            <td>89</td>
                            <td>5</td>
                        </tr>
                    </table>
                </p>
                <p>Baserat på mätvärdena för <code>Maintainability Index</code> och <code>Unit testsuits</code> för klassen <code>App\\Controller\\GameController</code> kan man dra slutsatsen att denna klass bör ses över. Till exempel genom att omfaktorisera koden i denna klass, kan dess volym minskas och eventuellt kan cyklomatisk komplexitet reduceras genom att bryta ut en lös if-elseif-sats till en metod/funktion.</p>

                <h2 id=\"scrutinizer\">3. Scrutinizer</h2>
                <p>
                    <figure>
                                <img src=\"https://scrutinizer-ci.com/g/olbr22/mvc_report/badges/quality-score.png?b=main\" alt=\"Scrutinizer quality\" width=\"150\">
                                <img src=\"https://scrutinizer-ci.com/g/olbr22/mvc_report/badges/coverage.png?b=main\" alt=\"Scrutinizer coverage\" width=\"150\">
                                <img src=\"https://scrutinizer-ci.com/g/olbr22/mvc_report/badges/build.png?b=main\" alt=\"Scrutinizer build\" width=\"130\">
                                <figcaption>Scrutinizer badges.</figcaption>
                    </figure>
                </p>
                <p>Enligt rapporten genererad av Scrutinizer är kodkvaliteten på mitt Symfony-projekt mycket bra och har fått betyget <code>9.98</code>. Även om koden har betygsatts som bra, en metod <code>stand&#40;&#41;</code> i klassen <code>GameController</code> kan förbättras.
                    <figure>
                                <a href=\"{{ asset('img/scrutinizer_stand.png') }}\" target=\"_blank\"><img src=\"{{ asset('img/scrutinizer_stand.png') }}\" alt=\"Detailed Scrutinizer report for the method stand\" width=\"800\"></a>
                                <figcaption>Scrutinizer rapport för metoden GameController::stand&#40;&#41;.</figcaption>
                    </figure>
                    CRAP-måttet för <code>stand&#40;&#41;</code> metoden är 42 och har fått betyget F. CRAP-måttet bör helst vara så lågt som möjligt och inte större än 6 för att få betyget A.
                </p>
                <p>
                Dessutom har klassen <code>src/Game/Game.php</code> två buggar som bör åtgärdas.
                <figure>
                                <a href=\"{{ asset('img/game_bugs.png') }}\" target=\"_blank\"><img src=\"{{ asset('img/game_bugs.png') }}\" alt=\"Detailed report on the issues in the Game class\" width=\"800\"></a>
                                <figcaption>Scrutinizer rapport för metoden GameController::stand&#40;&#41;.</figcaption>
                    </figure>
                </p>
                <p>Tabellen nedan visar en översikt över kodkvalitetsmått enligt Scrutinizer.
                    <table>
                            <caption>Tabell 2. Översikt över kodkvalitetsmått enligt Scrutinizer</caption>
                            <tr>
                                <th>Class</th>
                                <th title=\"The number of decision points which change the controll flow (ifs, loops).\">&#9432; Total Complexity</th>
                                <th>Total lines</th>
                                <th title=\"Scrutinizer uses a rating algorithm for the different elements of your code such as classes, methods or functions which combines their different metrics (such as complexity, coupling, cohesion, etc.) in a single rating score. The rating is done with the grades A-F; A being the best rating and F the worst.\">&#9432; Code Rating</th>
                                <th>Test Coverage %</th>
                            </tr>
                            <tr>
                                <td>App\\Controller\\GameController</td>
                                <td>18</td>
                                <td>177</td>
                                <td>A</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>App\\Game\\Deck</td>
                                <td>10</td>
                                <td>75</td>
                                <td>A</td>
                                <td>100</td>
                            </tr>
                            <tr>
                                <td>App\\Game\\Card</td>
                                <td>13</td>
                                <td>128</td>
                                <td>A</td>
                                <td>100</td>
                            </tr>
                            <tr>
                                <td>App\\Game\\Hand</td>
                                <td>9</td>
                                <td>65</td>
                                <td>A</td>
                                <td>100</td>
                            </tr>
                            <tr>
                                <td>App\\Game\\Player</td>
                                <td>7</td>
                                <td>65</td>
                                <td>A</td>
                                <td>92.86</td>
                            </tr>
                            <tr>
                                <td>App\\Game\\Bank</td>
                                <td>5</td>
                                <td>41</td>
                                <td>A</td>
                                <td>100</td>
                            </tr>
                            <tr>
                                <td>App\\Game\\Game</td>
                                <td>14</td>
                                <td>101</td>
                                <td>A</td>
                                <td>88.89</td>
                            </tr>
                        </table>
                </p>
                <h2 id=\"forbattringar\">4. Förbättringar</h2>
                <p>Till att börja med väljer jag att fixa buggar för klassen <code>App\\Game\\Game</code> där Scrutinizer föreslår att granska en elseif-sats: <code>The condition is_null(\$bank) is always true.</code> Denna åtgärd kommer att göra koden i klassen mer läsbar och lättare att förstå.</p>
                <p>Därefter tänker jag lyfta en if elseif sats ur GameController::stand metoden till en egen metod i Game klassen. Även denna åtgärd kommer att göra koden mer läsbar samt eventuellt minskar GameControllers komplexitet.</p>
                <p>En till förbättring i form av ökad kodtäckning kan uppnås genom att skriva enhetstester till GameController klassen.</p>
                <h3>4.1 Förbättringar analys</h3>
                <p>Efter att jag ersatte två elseif-satser i Game-klassen, som kontrollerade om \$deck- och \$bank-variablerna var null, med null coalescing operator ??, minskade antalet rader i Game-klassen. Denna åtgärd minskade antalet buggar med 2, men förbättrade inte kodens kvalitet. Tyvärr ledde detta till att testtäckningen för Game-klassen minskade från 88.89% till 85.71%, och testtäckningen för hela projektet minskade från 18% till 17%.
                    <figure>
                        <a href=\"{{ asset('img/bug_fix.png') }}\" target=\"_blank\"><img src=\"{{ asset('img/bug_fix.png') }}\" alt=\"Summary of changes in Scrutinizer\" width=\"300\"></a>
                        <figcaption>Ändring av kodstatus i Scrutinizer.</figcaption>
                    </figure>
                </p>
                <p>Genom att separera if-elseif-konstruktionen från stand() metoden i GameController klassen, har jag lyckats förbättra kodbetyget för metoden GameController::stand() från B till A.
                    <figure>
                        <a href=\"{{ asset('img/gamecontroller_stand.png') }}\" target=\"_blank\"><img src=\"{{ asset('img/gamecontroller_stand.png') }}\" alt=\"Increased test coverage in Scrutinizer\" width=\"300\"></a>
                        <figcaption>Ändring av kodstatus i Scrutinizer.</figcaption>
                    </figure>
                Kodkomplexiteten och CRAP-måttet för stand() metoden har minskat. Bilder nedan visar rapporter för GameController::stand() medtoden före och efter förändringar.
                <figure>
                        <a href=\"{{ asset('img/crap.png') }}\" target=\"_blank\"><img src=\"{{ asset('img/crap.png') }}\" alt=\"Code status before changes\" width=\"500\"></a>
                        <figcaption>Kodstatus för GameController::stand() före förbättringar.</figcaption>
                </figure>
                <figure>
                        <a href=\"{{ asset('img/crap_after.png') }}\" target=\"_blank\"><img src=\"{{ asset('img/crap_after.png') }}\" alt=\"Code status after changes\" width=\"500\"></a>
                        <figcaption>Kodstatus för GameController::stand() efter förbättringar.</figcaption>
                </figure>
                </p>
                <p>Jag har även försökt skriva enhetstester för GameController-klassen, men har haft svårt att hitta meningsfulla testfall. Istället valde jag att fokusera på att skriva ytterligare testfall för klassen Game, vilket resulterade i en ökning av kodtäckningen från 17% till 20%.
                    <figure>
                        <a href=\"{{ asset('img/testcoveragetwenty.png') }}\" target=\"_blank\"><img src=\"{{ asset('img/testcoveragetwenty.png') }}\" alt=\"Summary of changes in Scrutinizer\" width=\"300\"></a>
                        <figcaption>Ändring av kodtäckning i Scrutinizer.</figcaption>
                    </figure>
                </p>
                <p>
                    <table>
                        <caption>Tabell 3. Översikt över kodkvalitetsmått före och efter ändringarna enligt PhpMetrics</caption>
                        <tr>
                            <th>Class</th>
                            <th title=\"A higher Cyclomatic Complexity value indicates a higher number of decision points and possible execution paths, which can lead to increased complexity and potential risks\">&#9432; Class cyclomatic complexity</th>
                            <th title=\"If a class has a high LCOM value, it suggests that the methods within that class are not closely related or dependent on each other.\">&#9432; LCOM</th>
                            <th title=\"the number of classes affected by given class\">&#9432; Afferent coupling</th>
                            <th title=\"the number of classes from which given class receives effects\">&#9432; Efferent coupling</th>
                            <th>Volume</th>
                            <th title=\"measures how maintainable (easy to support and change) the source code is\">&#9432; Maintainability Index</th>
                            <th>Unit testsuits</th>
                        </tr>
                        <tr>
                            <th><span class=\"before\">Before</span> / <span class=\"after\">After</span></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>App\\Controller\\GameController</td>
                            <td><span class=\"before\">10</span> / <span class=\"after\">6</span></td>
                            <td><span class=\"before\">2</span> / <span class=\"after\">2</span></td>
                            <td><span class=\"before\">0</span> / <span class=\"after\">0</span></td>
                            <td><span class=\"before\">6</span> / <span class=\"after\">6</span></td>
                            <td><span class=\"before\">1559.79</span> / <span class=\"after\">1435.24</span></td>
                            <td><span class=\"before\">59.41</span> / <span class=\"after\">61.23</span></td>
                            <td><span class=\"before\">0</span> / <span class=\"after\">1</span></td>
                        </tr>
                        <tr>
                            <td>App\\Game\\Deck</td>
                            <td>6</td>
                            <td>1</td>
                            <td>1</td>
                            <td>2</td>
                            <td>282.39</td>
                            <td>89.37</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>App\\Game\\Card</td>
                            <td>5</td>
                            <td>1</td>
                            <td>1</td>
                            <td>0</td>
                            <td>69.74</td>
                            <td>85.58</td>
                            <td>27</td>
                        </tr>
                        <tr>
                            <td>App\\Game\\Hand</td>
                            <td>5</td>
                            <td>1</td>
                            <td>2</td>
                            <td>0</td>
                            <td>163.5</td>
                            <td>91.25</td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td>App\\Game\\Player</td>
                            <td>3</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>69</td>
                            <td>98.53</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>App\\Game\\Bank</td>
                            <td>2</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>33.69</td>
                            <td>102.86</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>App\\Game\\Game</td>
                            <td><span class=\"before\">8</span> / <span class=\"after\">11</span> </td>
                            <td><span class=\"before\">1</span> / <span class=\"after\">2</span> </td>
                            <td><span class=\"before\">1</span> / <span class=\"after\">1</span> </td>
                            <td><span class=\"before\">3</span> / <span class=\"after\">3</span> </td>
                            <td><span class=\"before\">182.75</span> / <span class=\"after\">392.55</span> </td>
                            <td><span class=\"before\">89</span> / <span class=\"after\">86.04</span> </td>
                            <td><span class=\"before\">5</span> / <span class=\"after\">7</span> </td>
                        </tr>
                    </table>
                </p>
                <h2 id=\"discussion\">5. Diskussion</h2>
                <p>Ja, det är definitivt möjligt att aktivt arbeta med kodkvalitet och \"clean code\" med hjälp av verktyg för kodanalys. Att använda verktyg som Scrutinizer och PhpMetrics har varit till stor hjälp för mig när det gäller att upptäcka potentiella problem i min kod, såsom kodstilbrott, buggar eller prestandafrågor.</p>
                <p>Det är dock viktigt att vara medveten om att kodanalysverktyg ibland kan generera falska positiva eller falska negativa resultat. Det har hänt att verktygen har markerat vissa delar av min kod som buggar även om mitt program fungerade korrekt. Det har krävt lite extra tid och engagemang att utvärdera och hantera dessa resultat.</p>
                <p>Dessutom har jag upptäckt att det kan ta lite tid och ansträngning att lära sig om måttvärdena och hur man tolkar resultaten från kodanalysverktygen. Det är värt att investera tid i att förstå och använda dessa värden på rätt sätt för att kunna dra full nytta av verktygens potential.</p>
            </div>
        </div>
    </div>

{% endblock %}", "metrics/index.html.twig", "/home/olga/dbwebb-kurser/mvc/me/report/templates/metrics/index.html.twig");
    }
}
