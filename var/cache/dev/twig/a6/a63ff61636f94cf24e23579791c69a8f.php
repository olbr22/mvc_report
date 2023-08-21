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

/* api/api_deck_shuffle.html.twig */
class __TwigTemplate_ea6da1445b7ae439da51fe7242ffdb8b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "api/api_deck_shuffle.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "api/api_deck_shuffle.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "api/api_deck_shuffle.html.twig", 1);
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

        echo "Kortlek";
        
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
                    <a class=\"list-group-item list-group-item-action\" aria-current=\"true\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api");
        echo "\">JSON API</a>
                    <a class=\"list-group-item list-group-item-action\" aria-current=\"true\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quote");
        echo "\">Dagens citat</a>
                    <a class=\"list-group-item list-group-item-action\" aria-current=\"true\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lucky");
        echo "\">Lyckokatt</a>
                    <a class=\"list-group-item list-group-item-action\" aria-current=\"true\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_deck_create");
        echo "\">Deck</a>
                    <a class=\"list-group-item list-group-item-action\" aria-current=\"true\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_deck_shuffle_post");
        echo "\">Shuffle</a>
                    <a class=\"list-group-item list-group-item-action\" aria-current=\"true\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_deck_draw_get");
        echo "\">Draw</a>
                    <a class=\"list-group-item list-group-item-action\" aria-current=\"true\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_deck_draw_num_get", ["num" => 0]);
        echo "\">Draw number cards</a>
                </div>
            </div>
            <div class=\"col-sm-8\">
                <form method=\"post\" action=\" ";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_deck_shuffle_post");
        echo " \">
                    <p>
                        <input type=\"submit\" name=\"shuffle\" value=\"Shuffle\">
                    </p>
                </form>
            </div>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "api/api_deck_shuffle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 23,  121 => 19,  117 => 18,  113 => 17,  109 => 16,  105 => 15,  101 => 14,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Kortlek{% endblock %}

{% block body %}

    <div class=\"container my-5\">
        <h1 class=\"display-4\">Kort &amp; kortlek</h1>
        <hr class=\"my-4\">
        <div class=\"row my-5\">
            <div class=\"col-sm-4\">
                <div class=\"list-group\">
                    <a class=\"list-group-item list-group-item-action\" aria-current=\"true\" href=\"{{ path('api') }}\">JSON API</a>
                    <a class=\"list-group-item list-group-item-action\" aria-current=\"true\" href=\"{{ path('quote') }}\">Dagens citat</a>
                    <a class=\"list-group-item list-group-item-action\" aria-current=\"true\" href=\"{{ path('lucky') }}\">Lyckokatt</a>
                    <a class=\"list-group-item list-group-item-action\" aria-current=\"true\" href=\"{{ path('api_deck_create') }}\">Deck</a>
                    <a class=\"list-group-item list-group-item-action\" aria-current=\"true\" href=\"{{ path('api_deck_shuffle_post') }}\">Shuffle</a>
                    <a class=\"list-group-item list-group-item-action\" aria-current=\"true\" href=\"{{ path('api_deck_draw_get') }}\">Draw</a>
                    <a class=\"list-group-item list-group-item-action\" aria-current=\"true\" href=\"{{ path('api_deck_draw_num_get', {num: 0}) }}\">Draw number cards</a>
                </div>
            </div>
            <div class=\"col-sm-8\">
                <form method=\"post\" action=\" {{path('api_deck_shuffle_post')}} \">
                    <p>
                        <input type=\"submit\" name=\"shuffle\" value=\"Shuffle\">
                    </p>
                </form>
            </div>
        </div>
    </div>

{% endblock %}", "api/api_deck_shuffle.html.twig", "/home/olga/dbwebb-kurser/mvc/me/report/templates/api/api_deck_shuffle.html.twig");
    }
}
