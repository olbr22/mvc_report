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

/* card/card.html.twig */
class __TwigTemplate_feb2a2de336ff1fa5603d34133eb64ed extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/card.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "card/card.html.twig", 1);
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

        echo "Kort &amp; kortlek";
        
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
        <h1 class=\"display-4\">Kort &amp; kortlek</h1>
        <hr class=\"my-4\">
        <div class=\"row my-5\">
            <div class=\"col-sm-4\">
                <div class=\"list-group\">
                    <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card");
        echo "\" class=\"list-group-item list-group-item-action\" aria-current=\"true\">
                    Kort
                    </a>
                    <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_deck");
        echo "\" class=\"list-group-item list-group-item-action\" aria-current=\"true\">
                    Kortlek
                    </a>
                    <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deck_shuffle");
        echo "\" class=\"list-group-item list-group-item-action\" aria-current=\"true\">
                    Blanda kortlek
                    </a>
                    <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("draw_card");
        echo "\" class=\"list-group-item list-group-item-action\" aria-current=\"true\">
                    Dra kort
                    </a>
                    <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("draw_num_cards", ["num" => 0]);
        echo "\" class=\"list-group-item list-group-item-action\" aria-current=\"true\">
                    Dra n kort
                    </a>
                    <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deal", ["num_players" => 0, "num_cards" => 0]), "html", null, true);
        echo "\" class=\"list-group-item list-group-item-action\" aria-current=\"true\">
                    Dela ut kort
                    </a>
                </div>
            </div>
            <div class=\"col-sm-8\">
            <h3>Klassernas struktur</h3>
            <p>Jag skapade fyra klasser Card, CardGraphic, CardHand och DeckOfCards. Klassen CardGraphic ärver från classen Card.</p>
            <p>Klassen DeckOfCards har en komposition relation med Card-klassen eftersom det skapas en array av Card-objekt som en instansvariabel \$deck. Kortobjekten tillhör DeckOfCards-objektet och kan inte existera oberoende av det. Därför kommer alla ändringar som görs i DeckOfCards-objektet också att påverka dess kortobjekt.</p>
            <p>CardHand-klassen har en aggregeringsrelation med Card-klassen, eftersom den har en array av Card-objekt inom sin hand-egenskap. Kortobjekten skapas eller förstörs inte av CardHand-klassen, utan läggs helt enkelt till eller tas bort från dess hand - array efter behov.</p>
            <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/card_uml.png"), "html", null, true);
        echo "\" alt=\"UML diagram över classer skapade under kmom02.\">
            </div>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "card/card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 38,  127 => 28,  121 => 25,  115 => 22,  109 => 19,  103 => 16,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Kort &amp; kortlek{% endblock %}

{% block body %}

    <div class=\"container my-5\">
        <h1 class=\"display-4\">Kort &amp; kortlek</h1>
        <hr class=\"my-4\">
        <div class=\"row my-5\">
            <div class=\"col-sm-4\">
                <div class=\"list-group\">
                    <a href=\"{{ path('card') }}\" class=\"list-group-item list-group-item-action\" aria-current=\"true\">
                    Kort
                    </a>
                    <a href=\"{{ path('card_deck') }}\" class=\"list-group-item list-group-item-action\" aria-current=\"true\">
                    Kortlek
                    </a>
                    <a href=\"{{ path('deck_shuffle') }}\" class=\"list-group-item list-group-item-action\" aria-current=\"true\">
                    Blanda kortlek
                    </a>
                    <a href=\"{{ path('draw_card') }}\" class=\"list-group-item list-group-item-action\" aria-current=\"true\">
                    Dra kort
                    </a>
                    <a href=\"{{ path('draw_num_cards', {num: 0}) }}\" class=\"list-group-item list-group-item-action\" aria-current=\"true\">
                    Dra n kort
                    </a>
                    <a href=\"{{ path('deal', {num_players: 0, num_cards: 0}) }}\" class=\"list-group-item list-group-item-action\" aria-current=\"true\">
                    Dela ut kort
                    </a>
                </div>
            </div>
            <div class=\"col-sm-8\">
            <h3>Klassernas struktur</h3>
            <p>Jag skapade fyra klasser Card, CardGraphic, CardHand och DeckOfCards. Klassen CardGraphic ärver från classen Card.</p>
            <p>Klassen DeckOfCards har en komposition relation med Card-klassen eftersom det skapas en array av Card-objekt som en instansvariabel \$deck. Kortobjekten tillhör DeckOfCards-objektet och kan inte existera oberoende av det. Därför kommer alla ändringar som görs i DeckOfCards-objektet också att påverka dess kortobjekt.</p>
            <p>CardHand-klassen har en aggregeringsrelation med Card-klassen, eftersom den har en array av Card-objekt inom sin hand-egenskap. Kortobjekten skapas eller förstörs inte av CardHand-klassen, utan läggs helt enkelt till eller tas bort från dess hand - array efter behov.</p>
            <img src=\"{{ asset('img/card_uml.png') }}\" alt=\"UML diagram över classer skapade under kmom02.\">
            </div>
        </div>
    </div>

{% endblock %}", "card/card.html.twig", "/home/olga/dbwebb-kurser/mvc/me/report/templates/card/card.html.twig");
    }
}
