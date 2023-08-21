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

/* about.html.twig */
class __TwigTemplate_0b553117ac9abc5431418232ba9fa3cf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "about.html.twig", 1);
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

        echo "Om kursen mvc(v2) ";
        
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
        <div class=\"row\">
            <div class=\"col-sm\">
                <div class=\"card text-white bg-dark\">
                    <div class=\"card-header\">Om kursen mvc</div>
                    <div class=\"card-body\">
                        <p class=\"card-text\">Kursen Objektorienterade webbteknologier, a.k.a. mvc, fokuserar på objektorienterade programmeringstekniker i programmeringsspråket PHP. Klassiska objektorienterade konstruktioner hanteras tillsammans med objektorienterad programmering i webbaserat ramverk tillsammans med databaser samt enhetstestning.</p>
                        <a href=\"https://github.com/dbwebb-se/mvc\" class=\"btn btn-primary\">Go till kursens Git-repo</a>
                    </div>
                </div>
                <div class=\"row mt-3\">
                    <div class=\"col-sm\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <p class=\"card-text\">Denna webbplats är byggd med hjälp av ramverket Symfony. Webbsidorna renderas med templatemotorn Twig.</p>
                                <a href=\"https://github.com/olbr22/mvc_report\" class=\"btn btn-success\">Go till mitt Git-repo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm\">
                <figure class=\"figure\">
                    <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/mvc.png"), "html", null, true);
        echo "\" class=\"figure-img img-fluid rounded\" alt=\"A generic square placeholder image with rounded corners in a figure.\">
                    <figcaption class=\"figure-caption\">En del av min utvecklingsmiljö i kursen MVC</figcaption>
                </figure>
            </div>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 30,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Om kursen mvc(v2) {% endblock %}

{% block body %}

    <div class=\"container my-5\">
        <div class=\"row\">
            <div class=\"col-sm\">
                <div class=\"card text-white bg-dark\">
                    <div class=\"card-header\">Om kursen mvc</div>
                    <div class=\"card-body\">
                        <p class=\"card-text\">Kursen Objektorienterade webbteknologier, a.k.a. mvc, fokuserar på objektorienterade programmeringstekniker i programmeringsspråket PHP. Klassiska objektorienterade konstruktioner hanteras tillsammans med objektorienterad programmering i webbaserat ramverk tillsammans med databaser samt enhetstestning.</p>
                        <a href=\"https://github.com/dbwebb-se/mvc\" class=\"btn btn-primary\">Go till kursens Git-repo</a>
                    </div>
                </div>
                <div class=\"row mt-3\">
                    <div class=\"col-sm\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <p class=\"card-text\">Denna webbplats är byggd med hjälp av ramverket Symfony. Webbsidorna renderas med templatemotorn Twig.</p>
                                <a href=\"https://github.com/olbr22/mvc_report\" class=\"btn btn-success\">Go till mitt Git-repo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm\">
                <figure class=\"figure\">
                    <img src=\"{{ asset('img/mvc.png') }}\" class=\"figure-img img-fluid rounded\" alt=\"A generic square placeholder image with rounded corners in a figure.\">
                    <figcaption class=\"figure-caption\">En del av min utvecklingsmiljö i kursen MVC</figcaption>
                </figure>
            </div>
        </div>
    </div>

{% endblock %}", "about.html.twig", "/home/olga/dbwebb-kurser/mvc/me/report/templates/about.html.twig");
    }
}
