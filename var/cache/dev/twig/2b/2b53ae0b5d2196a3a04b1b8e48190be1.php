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

/* game/doc.html.twig */
class __TwigTemplate_f65923ba4080cf076f59a09e38d4f4b1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/doc.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/doc.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "game/doc.html.twig", 1);
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

        echo "Dokumentation";
        
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
        <h1 class=\"display-4\">Dokumentation Kortspel21</h1>
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
                <h4>Flödesschema som representerar hur jag tänker lösa grunderna i spelet</h4>
                <div class=\"row my-5\">
                <figure class=\"figure\">
                    <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/general_flowchart_game_21.png"), "html", null, true);
        echo "\" class=\"figure-img img-fluid rounded\" alt=\"Ett generellt flödesschema som representerar kortspelet 'Tjugoett'.\">
                    <figcaption class=\"figure-caption\">Ett generellt flödesschema som representerar kortspelet 'Tjugoett'.</figcaption>
                </figure>
                <figure class=\"figure\">
                    <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/flowchart_determine_the_winner.png"), "html", null, true);
        echo "\" class=\"figure-img img-fluid rounded\" alt=\"Ett flödesschema som representerar spelflödet mellan spelare och bank.\">
                    <figcaption class=\"figure-caption\">Ett flödesschema som representerar spelflödet mellan spelare och bank.</figcaption>
                </figure>
                </div>
                <h4>Psuedokod som visar hur jag tänker räkna ut handens värde</h4>
                <pre>
                    <code>
                        public function getHandValue()
                        {
                            SET value to zero
                            SET numberOfAces to zero

                            FOR each card in the hand
                                IF the rank of the card is Ace
                                    SET numberOfAces to numberOfAces plus one

                            WHILE value is bigger than 21 and number of Aces bigger than zero
                                SET value to value minus 13
                                SET numberOfAces to numberOfAces minus one

                            RETURN value
                        }
                    </code>
                </pre>
                <h4>Beskriv klasserna i text med klassens namn och en mening som beskriver vad klassens syfte är</h4>
                <p>Card - represents a playing card. Card class has properties rank, suit, value, top- and leftOffset.</p>
                <p>Deck - represents a deck of 52 playing cards. Deck class has such methods as shuffle to shuffle the deck and draw that returns a card.</p>
                <p>Hand - represents a collection of cards that player/bank holds. Hand has such methods as addCard, getHandValue and clearHand.</p>
                <p>Player - represents a player in the game. Class Player has properties as name and hand. The Player class has methods to draw a card and add it to the hand and method to clear the hand.</p>
                <p>Bank - represents a bank in the game. Class Bank has properties hand. The Bank class has method hit that allows to add cards to the hand until the value of the hand equals to 17 or more.</p>
                <p>Game - represents a game with a player, a bank and a deck. Class Game has properties player, bank and deck. The Game class allows to instantiate and hold the Player, the Bank and the Deck objects. The class has methods start, play and end that allows to controll the flow of the game.</p>
            </div>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "game/doc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 23,  109 => 19,  99 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Dokumentation{% endblock %}

{% block body %}

    <div class=\"container my-5\">
        <h1 class=\"display-4\">Dokumentation Kortspel21</h1>
        <hr class=\"my-4\">
            <div class=\"game start row my-1\">
                <a href=\"{{ path('game_init_get') }}\">Spela</a>
                <a href=\"{{ path('game_doc') }}\">Dokumentation</a>
            </div>
        <div class=\"row my-5\">
            <div class=\"game short-description\">
                <h4>Flödesschema som representerar hur jag tänker lösa grunderna i spelet</h4>
                <div class=\"row my-5\">
                <figure class=\"figure\">
                    <img src=\"{{ asset('img/general_flowchart_game_21.png') }}\" class=\"figure-img img-fluid rounded\" alt=\"Ett generellt flödesschema som representerar kortspelet 'Tjugoett'.\">
                    <figcaption class=\"figure-caption\">Ett generellt flödesschema som representerar kortspelet 'Tjugoett'.</figcaption>
                </figure>
                <figure class=\"figure\">
                    <img src=\"{{ asset('img/flowchart_determine_the_winner.png') }}\" class=\"figure-img img-fluid rounded\" alt=\"Ett flödesschema som representerar spelflödet mellan spelare och bank.\">
                    <figcaption class=\"figure-caption\">Ett flödesschema som representerar spelflödet mellan spelare och bank.</figcaption>
                </figure>
                </div>
                <h4>Psuedokod som visar hur jag tänker räkna ut handens värde</h4>
                <pre>
                    <code>
                        public function getHandValue()
                        {
                            SET value to zero
                            SET numberOfAces to zero

                            FOR each card in the hand
                                IF the rank of the card is Ace
                                    SET numberOfAces to numberOfAces plus one

                            WHILE value is bigger than 21 and number of Aces bigger than zero
                                SET value to value minus 13
                                SET numberOfAces to numberOfAces minus one

                            RETURN value
                        }
                    </code>
                </pre>
                <h4>Beskriv klasserna i text med klassens namn och en mening som beskriver vad klassens syfte är</h4>
                <p>Card - represents a playing card. Card class has properties rank, suit, value, top- and leftOffset.</p>
                <p>Deck - represents a deck of 52 playing cards. Deck class has such methods as shuffle to shuffle the deck and draw that returns a card.</p>
                <p>Hand - represents a collection of cards that player/bank holds. Hand has such methods as addCard, getHandValue and clearHand.</p>
                <p>Player - represents a player in the game. Class Player has properties as name and hand. The Player class has methods to draw a card and add it to the hand and method to clear the hand.</p>
                <p>Bank - represents a bank in the game. Class Bank has properties hand. The Bank class has method hit that allows to add cards to the hand until the value of the hand equals to 17 or more.</p>
                <p>Game - represents a game with a player, a bank and a deck. Class Game has properties player, bank and deck. The Game class allows to instantiate and hold the Player, the Bank and the Deck objects. The class has methods start, play and end that allows to controll the flow of the game.</p>
            </div>
        </div>
    </div>

{% endblock %}", "game/doc.html.twig", "/home/olga/dbwebb-kurser/mvc/me/report/templates/game/doc.html.twig");
    }
}
