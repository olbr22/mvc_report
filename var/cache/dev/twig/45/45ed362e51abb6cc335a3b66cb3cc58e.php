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

/* project/textile.html.twig */
class __TwigTemplate_96b5cafb51dc562bf8db360cf213367e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/textile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/textile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "project/textile.html.twig", 1);
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

        echo " Hållbar utvecklig | Textilkonsumption ";
        
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sustainability");
        echo "\">Om</a>
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
        <h1 class=\"font-h1\">Textilkonsumtion, kilo per person i Sverige</h1>
        <p class=\"font-p\">
            Grafen fokuserar på textilkonsumtionens betydelse för hållbar konsumtion och produktion. Modebranschen är känd för sin stora resursförbrukning och påverkan på miljön. Snabbt skiftande trender resulterar ofta i överkonsumtion och snabbt avfall. Här presenteras data om textilkonsumtion i Sverige under perioden 2000 till 2022, baserat på www.naturvardsverket.se, för att framhäva behovet av medvetna beslut när vi handlar och tar hand om våra kläder.
        </p>
        <div style=\"max-width: 800px;\">
            <canvas id=\"textile\"></canvas>
        </div>

        <div>
            <p class=\"font-p\">
            Nettoinflödet &#40; import minus export &#41; av nya textilier per person till Sverige har ökat med över 40 procent mellan åren 2000 och 2022. Det motsvarar en ökning på ungefär 4,5 kg per person.
            </p>
        </div>

        <!-- <script type=\"module\" src=\"dimensions.js\"></script> -->
        <script>
            const dataFromDatabaseTextile = ";
        // line 41
        echo (isset($context["textile"]) || array_key_exists("textile", $context) ? $context["textile"] : (function () { throw new RuntimeError('Variable "textile" does not exist.', 41, $this->source); })());
        echo ";
        </script>
        <script type=\"module\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/app.js"), "html", null, true);
        echo "\">
        </script>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "project/textile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 43,  134 => 41,  110 => 20,  104 => 17,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} Hållbar utvecklig | Textilkonsumption {% endblock %}

{% block body %}
    <div class=\"container my-5\">
        <div class=\"navigation-body\">
            <div class=\"navigation\">
                <input type=\"checkbox\">
                    <span></span>
                    <span></span>
                    <div id=\"menu\">
                        <li>
                            <a href=\"{{ path('sustainability') }}\">Om</a>
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
        <h1 class=\"font-h1\">Textilkonsumtion, kilo per person i Sverige</h1>
        <p class=\"font-p\">
            Grafen fokuserar på textilkonsumtionens betydelse för hållbar konsumtion och produktion. Modebranschen är känd för sin stora resursförbrukning och påverkan på miljön. Snabbt skiftande trender resulterar ofta i överkonsumtion och snabbt avfall. Här presenteras data om textilkonsumtion i Sverige under perioden 2000 till 2022, baserat på www.naturvardsverket.se, för att framhäva behovet av medvetna beslut när vi handlar och tar hand om våra kläder.
        </p>
        <div style=\"max-width: 800px;\">
            <canvas id=\"textile\"></canvas>
        </div>

        <div>
            <p class=\"font-p\">
            Nettoinflödet &#40; import minus export &#41; av nya textilier per person till Sverige har ökat med över 40 procent mellan åren 2000 och 2022. Det motsvarar en ökning på ungefär 4,5 kg per person.
            </p>
        </div>

        <!-- <script type=\"module\" src=\"dimensions.js\"></script> -->
        <script>
            const dataFromDatabaseTextile = {{ textile | raw }};
        </script>
        <script type=\"module\" src=\"{{ asset('build/app.js') }}\">
        </script>
    </div>

{% endblock %}
", "project/textile.html.twig", "/home/olga/dbwebb-kurser/mvc/me/report/templates/project/textile.html.twig");
    }
}
