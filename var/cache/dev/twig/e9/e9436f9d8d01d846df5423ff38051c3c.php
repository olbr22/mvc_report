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

/* card/draw_num_cards.html.twig */
class __TwigTemplate_b50fed39fe4b5f2acfe376d96eb99942 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/draw_num_cards.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/draw_num_cards.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "card/draw_num_cards.html.twig", 1);
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

        echo "Dra kort";
        
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
                <p>Antal kort kvar i kortleken: ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["deck"]) || array_key_exists("deck", $context) ? $context["deck"] : (function () { throw new RuntimeError('Variable "deck" does not exist.', 34, $this->source); })()), "getNumCards", [], "method", false, false, false, 34), "html", null, true);
        echo "</p>
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["hand"]) || array_key_exists("hand", $context) ? $context["hand"] : (function () { throw new RuntimeError('Variable "hand" does not exist.', 35, $this->source); })()), "getHand", [], "method", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 36
            echo "                    ";
            $context["left"] = twig_get_attribute($this->env, $this->source, $context["card"], "getLeftOffset", [], "method", false, false, false, 36);
            // line 37
            echo "                    ";
            $context["top"] = twig_get_attribute($this->env, $this->source, $context["card"], "getTopOffset", [], "method", false, false, false, 37);
            // line 38
            echo "                    <img class=\"playing-card\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/transparent.png"), "html", null, true);
            echo "\" width=\"1\" height=\"1\" style=\" background: url(' ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/cards.png"), "html", null, true);
            echo "' ) -";
            echo twig_escape_filter($this->env, (isset($context["left"]) || array_key_exists("left", $context) ? $context["left"] : (function () { throw new RuntimeError('Variable "left" does not exist.', 38, $this->source); })()), "html", null, true);
            echo "px -";
            echo twig_escape_filter($this->env, (isset($context["top"]) || array_key_exists("top", $context) ? $context["top"] : (function () { throw new RuntimeError('Variable "top" does not exist.', 38, $this->source); })()), "html", null, true);
            echo "px;\">
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </div>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "card/draw_num_cards.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 40,  150 => 38,  147 => 37,  144 => 36,  140 => 35,  136 => 34,  127 => 28,  121 => 25,  115 => 22,  109 => 19,  103 => 16,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Dra kort{% endblock %}

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
                <p>Antal kort kvar i kortleken: {{ deck.getNumCards() }}</p>
                {% for card in hand.getHand() %}
                    {% set left = card.getLeftOffset() %}
                    {% set top = card.getTopOffset() %}
                    <img class=\"playing-card\" src=\"{{ asset('img/transparent.png') }}\" width=\"1\" height=\"1\" style=\" background: url(' {{ asset('img/cards.png') }}' ) -{{left}}px -{{top}}px;\">
                {% endfor %}
            </div>
        </div>
    </div>

{% endblock %}", "card/draw_num_cards.html.twig", "/home/olga/dbwebb-kurser/mvc/me/report/templates/card/draw_num_cards.html.twig");
    }
}
