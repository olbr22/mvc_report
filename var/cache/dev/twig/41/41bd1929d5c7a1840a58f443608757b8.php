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

/* project/about.html.twig */
class __TwigTemplate_f7acd821f3677d62278663c217f9bee2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "project/about.html.twig", 1);
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

        echo " Hållbarhet | Om ";
        
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
        echo "    <div class=\"container my-5\">
        <div class=\"navigation-body\">
            <div class=\"navigation\">
                <input type=\"checkbox\">
                <span></span>
                <span></span>
                <div id=\"menu\">
                    <li>
                            <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project");
        echo "\">Hem</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("food");
        echo "\">Livsmedelsavfall</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("textile");
        echo "\">Textilkonsumption</a>
                    </li>
                </div>
            </div>
        </div>
        <div class=\"about-circle\">
            <h1 class = \"font-h1\">Hållbar konsumtion och produktion</h1>
            <div class=\"about-logo\">
                <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo_sustainable.png"), "html", null, true);
        echo "\" alt=\"Logo for SUSTAINABLE CONSUMPTION AND PRODUCTION\">
            </div>
            <p class = \"font-p\">Jag har valt att adressera ett av de centrala globala målen - \"Hållbar konsumtion och produktion\". Tanken är att skapa en medvetenhet om och främja förändringar i hur vi konsumerar och producerar varor och tjänster för att minska vår påverkan på planeten.
            </p>
            <p class = \"font-p\">På webbplatsen presenteras två grafer som visualiserar livsmedelsavfall och textilkonsumtion i Sverige. Datat som används för graferna hämtas från <a href=\"https://www.naturvardsverket.se/data-och-statistik/konsumtion/\" target=\"_blank\">www.naturvardsverket.se</a>.</p>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "project/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 28,  110 => 20,  104 => 17,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} Hållbarhet | Om {% endblock %}

{% block body %}
    <div class=\"container my-5\">
        <div class=\"navigation-body\">
            <div class=\"navigation\">
                <input type=\"checkbox\">
                <span></span>
                <span></span>
                <div id=\"menu\">
                    <li>
                            <a href=\"{{ path('project') }}\">Hem</a>
                    </li>
                    <li>
                        <a href=\"{{ path('food') }}\">Livsmedelsavfall</a>
                    </li>
                    <li>
                        <a href=\"{{ path('textile') }}\">Textilkonsumption</a>
                    </li>
                </div>
            </div>
        </div>
        <div class=\"about-circle\">
            <h1 class = \"font-h1\">Hållbar konsumtion och produktion</h1>
            <div class=\"about-logo\">
                <img src=\"{{ asset('img/logo_sustainable.png' )}}\" alt=\"Logo for SUSTAINABLE CONSUMPTION AND PRODUCTION\">
            </div>
            <p class = \"font-p\">Jag har valt att adressera ett av de centrala globala målen - \"Hållbar konsumtion och produktion\". Tanken är att skapa en medvetenhet om och främja förändringar i hur vi konsumerar och producerar varor och tjänster för att minska vår påverkan på planeten.
            </p>
            <p class = \"font-p\">På webbplatsen presenteras två grafer som visualiserar livsmedelsavfall och textilkonsumtion i Sverige. Datat som används för graferna hämtas från <a href=\"https://www.naturvardsverket.se/data-och-statistik/konsumtion/\" target=\"_blank\">www.naturvardsverket.se</a>.</p>
        </div>
    </div>

{% endblock %}
", "project/about.html.twig", "/home/olga/dbwebb-kurser/mvc/me/report/templates/project/about.html.twig");
    }
}
