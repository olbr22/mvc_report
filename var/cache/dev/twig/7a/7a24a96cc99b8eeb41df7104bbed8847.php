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

/* game/game.html.twig */
class __TwigTemplate_929b1e989eda85391a1424ab82d7d54d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/game.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/game.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "game/game.html.twig", 1);
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

        echo "Kortspel 21";
        
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
        <h1 class=\"display-4\">Kortspel 21</h1>
        <hr class=\"my-4\">
            <div class=\"game start row my-1\">
                <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_init_get");
        echo "\">Spela</a>
                <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_doc");
        echo "\">Dokumentation</a>
            </div>
        <div class=\"row my-5\">
            <div class=\"game short-description\">
                <h4>Spelregler</h4>
                <p>Spelets idé är att med två eller flera kort försöka uppnå det sammanlagda värdet 21, eller komma så nära som möjligt utan att överskrida 21. Essen är värda valfritt 1 eller 14, kungarna 13, damerna 12, knektarna 11. Nummerkorten har samma värden som valören.</p>
                <h4>En spelrunda kan se ut så här när en spelare spelar mot banken:</h4>
                <ul>
                    <li>Spelare kan ange sitt namn och påbörja spelet.</li>
                    <li>Spelplanen visas och spelaren och banken har inte tagit några kort.</li>
                    <li>Spelaren kan ta ett kort, stanna, påbörja en ny omgång där nästa kort dras från samma kortlek som spelet var initierat med eller starta om spelet med en ny kortlek.</li>
                    <li>Spelaren tar ett kort. Kortet visas.</li>
                    <li>Spelaren kan bestämma att stanna eller ta ytterligare ett kort.</li>
                    <li>Om spelaren får över 21 vinner banken.</li>
                    <li>När spelaren stannar så är det bankens tur.</li>
                    <li>Banken är inte medveten om spelarens korthand.</li>
                    <li>Banken plockar kort tills den stannar eller har över 21.</li>
                    <li>Banken vinner vid lika eller om banken har mer än spelaren.</li>
                    <li>Spelaren vinner om banken får över 21.</li>
                    <li>Därefter kan man påbörja en ny omgång.</li>
                </ul>
            </div>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "game/game.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Kortspel 21{% endblock %}

{% block body %}

    <div class=\"container my-5\">
        <h1 class=\"display-4\">Kortspel 21</h1>
        <hr class=\"my-4\">
            <div class=\"game start row my-1\">
                <a href=\"{{ path('game_init_get') }}\">Spela</a>
                <a href=\"{{ path('game_doc') }}\">Dokumentation</a>
            </div>
        <div class=\"row my-5\">
            <div class=\"game short-description\">
                <h4>Spelregler</h4>
                <p>Spelets idé är att med två eller flera kort försöka uppnå det sammanlagda värdet 21, eller komma så nära som möjligt utan att överskrida 21. Essen är värda valfritt 1 eller 14, kungarna 13, damerna 12, knektarna 11. Nummerkorten har samma värden som valören.</p>
                <h4>En spelrunda kan se ut så här när en spelare spelar mot banken:</h4>
                <ul>
                    <li>Spelare kan ange sitt namn och påbörja spelet.</li>
                    <li>Spelplanen visas och spelaren och banken har inte tagit några kort.</li>
                    <li>Spelaren kan ta ett kort, stanna, påbörja en ny omgång där nästa kort dras från samma kortlek som spelet var initierat med eller starta om spelet med en ny kortlek.</li>
                    <li>Spelaren tar ett kort. Kortet visas.</li>
                    <li>Spelaren kan bestämma att stanna eller ta ytterligare ett kort.</li>
                    <li>Om spelaren får över 21 vinner banken.</li>
                    <li>När spelaren stannar så är det bankens tur.</li>
                    <li>Banken är inte medveten om spelarens korthand.</li>
                    <li>Banken plockar kort tills den stannar eller har över 21.</li>
                    <li>Banken vinner vid lika eller om banken har mer än spelaren.</li>
                    <li>Spelaren vinner om banken får över 21.</li>
                    <li>Därefter kan man påbörja en ny omgång.</li>
                </ul>
            </div>
        </div>
    </div>

{% endblock %}", "game/game.html.twig", "/home/olga/dbwebb-kurser/mvc/me/report/templates/game/game.html.twig");
    }
}
