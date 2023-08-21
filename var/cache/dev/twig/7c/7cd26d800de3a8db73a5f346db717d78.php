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

/* game/play.html.twig */
class __TwigTemplate_067777717295198074039135b94bcb02 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/play.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/play.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "game/play.html.twig", 1);
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
        <h1 class=\"display-4\">Spela 21</h1>
        <hr class=\"my-4\">
        <div class=\"row my-5\">
            <div class=\"col-sm-12\">
                <h4>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["playerName"]) || array_key_exists("playerName", $context) ? $context["playerName"] : (function () { throw new RuntimeError('Variable "playerName" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " spelar mot Banken</h4>
                <form method=\"post\" action=\"\" class=\"form-api\">
                        <input type=\"submit\" name=\"hit\" value=\"Ta ett kort\" onClick=\" this.form.action = '";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hit");
        echo "'; \">
                        <input type=\"submit\" name=\"stand\" value=\"Stanna\" onClick=\" this.form.action = '";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stand");
        echo "'; \">
                        <input type=\"submit\" name=\"reset\" value=\"Ny omgång\" onClick=\" this.form.action = '";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reset");
        echo "'; \">
                        <input type=\"submit\" name=\"new_game\" value=\"Starta om spelet\" onClick=\" this.form.action = '";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_init_get");
        echo "', this.form.method = 'get'; \">
                </form>
            </div>
        </div>
        <div class=\"row my-5\">
            <div class=\"col-sm-12\">
                <p>Antal kort i kortleken: ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["deckCount"]) || array_key_exists("deckCount", $context) ? $context["deckCount"] : (function () { throw new RuntimeError('Variable "deckCount" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "</p>
                ";
        // line 24
        echo twig_include($this->env, $context, "flash.html.twig");
        echo "
            </div>
            <div class=\"col-sm-5 player\">
                <h4>";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["playerName"]) || array_key_exists("playerName", $context) ? $context["playerName"] : (function () { throw new RuntimeError('Variable "playerName" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "</h4>
                <p>Handens värde: ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["playerValue"]) || array_key_exists("playerValue", $context) ? $context["playerValue"] : (function () { throw new RuntimeError('Variable "playerValue" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "</p>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["playerHand"]) || array_key_exists("playerHand", $context) ? $context["playerHand"] : (function () { throw new RuntimeError('Variable "playerHand" does not exist.', 29, $this->source); })()), "getCards", [], "method", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 30
            echo "                    ";
            $context["left"] = twig_get_attribute($this->env, $this->source, $context["card"], "getLeftOffset", [], "method", false, false, false, 30);
            // line 31
            echo "                    ";
            $context["top"] = twig_get_attribute($this->env, $this->source, $context["card"], "getTopOffset", [], "method", false, false, false, 31);
            // line 32
            echo "                    <img class=\"playing-card\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/transparent.png"), "html", null, true);
            echo "\" width=\"1\" height=\"1\" style=\" background: url(' ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/cards.png"), "html", null, true);
            echo "' ) -";
            echo twig_escape_filter($this->env, (isset($context["left"]) || array_key_exists("left", $context) ? $context["left"] : (function () { throw new RuntimeError('Variable "left" does not exist.', 32, $this->source); })()), "html", null, true);
            echo "px -";
            echo twig_escape_filter($this->env, (isset($context["top"]) || array_key_exists("top", $context) ? $context["top"] : (function () { throw new RuntimeError('Variable "top" does not exist.', 32, $this->source); })()), "html", null, true);
            echo "px;\">
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </div>
            <div class=\"col-sm-5 player\">
                <h4>Banken</h4>
                <p>Handens värde: ";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["bankValue"]) || array_key_exists("bankValue", $context) ? $context["bankValue"] : (function () { throw new RuntimeError('Variable "bankValue" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "</p>
                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["bankHand"]) || array_key_exists("bankHand", $context) ? $context["bankHand"] : (function () { throw new RuntimeError('Variable "bankHand" does not exist.', 38, $this->source); })()), "getCards", [], "method", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 39
            echo "                    ";
            $context["left"] = twig_get_attribute($this->env, $this->source, $context["card"], "getLeftOffset", [], "method", false, false, false, 39);
            // line 40
            echo "                    ";
            $context["top"] = twig_get_attribute($this->env, $this->source, $context["card"], "getTopOffset", [], "method", false, false, false, 40);
            // line 41
            echo "                    <img class=\"playing-card\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/transparent.png"), "html", null, true);
            echo "\" width=\"1\" height=\"1\" style=\" background: url(' ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/cards.png"), "html", null, true);
            echo "' ) -";
            echo twig_escape_filter($this->env, (isset($context["left"]) || array_key_exists("left", $context) ? $context["left"] : (function () { throw new RuntimeError('Variable "left" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "px -";
            echo twig_escape_filter($this->env, (isset($context["top"]) || array_key_exists("top", $context) ? $context["top"] : (function () { throw new RuntimeError('Variable "top" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "px;\">
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "game/play.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 43,  184 => 41,  181 => 40,  178 => 39,  174 => 38,  170 => 37,  165 => 34,  150 => 32,  147 => 31,  144 => 30,  140 => 29,  136 => 28,  132 => 27,  126 => 24,  122 => 23,  113 => 17,  109 => 16,  105 => 15,  101 => 14,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Kortspel 21{% endblock %}

{% block body %}

    <div class=\"container my-5\">
        <h1 class=\"display-4\">Spela 21</h1>
        <hr class=\"my-4\">
        <div class=\"row my-5\">
            <div class=\"col-sm-12\">
                <h4>{{ playerName }} spelar mot Banken</h4>
                <form method=\"post\" action=\"\" class=\"form-api\">
                        <input type=\"submit\" name=\"hit\" value=\"Ta ett kort\" onClick=\" this.form.action = '{{path('hit')}}'; \">
                        <input type=\"submit\" name=\"stand\" value=\"Stanna\" onClick=\" this.form.action = '{{path('stand')}}'; \">
                        <input type=\"submit\" name=\"reset\" value=\"Ny omgång\" onClick=\" this.form.action = '{{path('reset')}}'; \">
                        <input type=\"submit\" name=\"new_game\" value=\"Starta om spelet\" onClick=\" this.form.action = '{{path('game_init_get')}}', this.form.method = 'get'; \">
                </form>
            </div>
        </div>
        <div class=\"row my-5\">
            <div class=\"col-sm-12\">
                <p>Antal kort i kortleken: {{ deckCount }}</p>
                {{ include('flash.html.twig') }}
            </div>
            <div class=\"col-sm-5 player\">
                <h4>{{ playerName }}</h4>
                <p>Handens värde: {{ playerValue }}</p>
                {% for card in playerHand.getCards() %}
                    {% set left = card.getLeftOffset() %}
                    {% set top = card.getTopOffset() %}
                    <img class=\"playing-card\" src=\"{{ asset('img/transparent.png') }}\" width=\"1\" height=\"1\" style=\" background: url(' {{ asset('img/cards.png') }}' ) -{{left}}px -{{top}}px;\">
                {% endfor %}
            </div>
            <div class=\"col-sm-5 player\">
                <h4>Banken</h4>
                <p>Handens värde: {{ bankValue }}</p>
                {% for card in bankHand.getCards() %}
                    {% set left = card.getLeftOffset() %}
                    {% set top = card.getTopOffset() %}
                    <img class=\"playing-card\" src=\"{{ asset('img/transparent.png') }}\" width=\"1\" height=\"1\" style=\" background: url(' {{ asset('img/cards.png') }}' ) -{{left}}px -{{top}}px;\">
                {% endfor %}
            </div>
        </div>
    </div>
{% endblock %}", "game/play.html.twig", "/home/olga/dbwebb-kurser/mvc/me/report/templates/game/play.html.twig");
    }
}
