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

/* project/food.html.twig */
class __TwigTemplate_98ae8b763e45b2abf8f8e30afa958d54 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/food.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/food.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "project/food.html.twig", 1);
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

        echo " Hållbar utvecklig | Livsmedelsavfall ";
        
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
        <div>
            <h1 class=\"font-h1\">Livsmedelsavfall i Sverige</h1>
            <p class=\"font-p\">
                Utmaningen med livsmedelsavfall är global och har påtagliga effekter både för miljön och ekonomin. I Sverige och i världen över kastas enorma mängder mat bort varje år, vilket leder till förlorade resurser och en ökad påverkan på klimatet. Grafen skapar en tydlig bild av detta problem i en svensk kontext och har som mål att öka medvetenheten om vikten av att minska livsmedelsavfallet genom förändrade vanor och mer hållbara produktionsmetoder.
            </p>
            <div style=\"max-width: 800px;\">
                <canvas id=\"food\" data-my-food=\"";
        // line 31
        echo (isset($context["food"]) || array_key_exists("food", $context) ? $context["food"] : (function () { throw new RuntimeError('Variable "food" does not exist.', 31, $this->source); })());
        echo "\"></canvas>
            </div>
            <p class=\"font-p\">
                Under år 2021 genererades omkring 0,9 miljoner ton fast livsmedelsavfall i Sverige. Detta motsvarar en genomsnittlig mängd av 86 kg per individ, varav 59 kg produceras inom hushållen. Av livsmedelsavfallet från hushållen anses ungefär 26 procent, det vill säga 15 kg per individ per år, vara onödigt livsmedelsavfall som hade kunnat undvikas, även känt som matsvinn. Dessutom har det konstaterats att mat och dryck som sköljs ned i avloppet från hushållen uppgår till ytterligare 190 000 ton, motsvarande 18 kg per person per år.
            </p>
        </div>

        <script>
            const dataFromDatabaseFood = ";
        // line 39
        echo (isset($context["food"]) || array_key_exists("food", $context) ? $context["food"] : (function () { throw new RuntimeError('Variable "food" does not exist.', 39, $this->source); })());
        echo ";
        </script>
        <script type=\"module\" src=\"";
        // line 41
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
        return "project/food.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 41,  135 => 39,  124 => 31,  110 => 20,  104 => 17,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} Hållbar utvecklig | Livsmedelsavfall {% endblock %}

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
        <div>
            <h1 class=\"font-h1\">Livsmedelsavfall i Sverige</h1>
            <p class=\"font-p\">
                Utmaningen med livsmedelsavfall är global och har påtagliga effekter både för miljön och ekonomin. I Sverige och i världen över kastas enorma mängder mat bort varje år, vilket leder till förlorade resurser och en ökad påverkan på klimatet. Grafen skapar en tydlig bild av detta problem i en svensk kontext och har som mål att öka medvetenheten om vikten av att minska livsmedelsavfallet genom förändrade vanor och mer hållbara produktionsmetoder.
            </p>
            <div style=\"max-width: 800px;\">
                <canvas id=\"food\" data-my-food=\"{{ food | raw }}\"></canvas>
            </div>
            <p class=\"font-p\">
                Under år 2021 genererades omkring 0,9 miljoner ton fast livsmedelsavfall i Sverige. Detta motsvarar en genomsnittlig mängd av 86 kg per individ, varav 59 kg produceras inom hushållen. Av livsmedelsavfallet från hushållen anses ungefär 26 procent, det vill säga 15 kg per individ per år, vara onödigt livsmedelsavfall som hade kunnat undvikas, även känt som matsvinn. Dessutom har det konstaterats att mat och dryck som sköljs ned i avloppet från hushållen uppgår till ytterligare 190 000 ton, motsvarande 18 kg per person per år.
            </p>
        </div>

        <script>
            const dataFromDatabaseFood = {{ food | raw }};
        </script>
        <script type=\"module\" src=\"{{ asset('build/app.js') }}\">
        </script>
    </div>

{% endblock %}
", "project/food.html.twig", "/home/olga/dbwebb-kurser/mvc/me/report/templates/project/food.html.twig");
    }
}
