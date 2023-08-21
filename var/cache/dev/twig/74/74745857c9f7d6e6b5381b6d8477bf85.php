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

/* api/api.html.twig */
class __TwigTemplate_60996976648d0cfae0e0e83bd91a77e9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "api/api.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "api/api.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "api/api.html.twig", 1);
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

        echo "JSON API";
        
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
        <h1 class=\"display-4\">JSON API</h1>
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_game");
        echo "\">Tjugoett &#40;kortspel&#41;</a>
                    <a class=\"list-group-item list-group-item-action\" aria-current=\"true\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quote");
        echo "\">Dagens citat</a>
                    <a class=\"list-group-item list-group-item-action\" aria-current=\"true\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lucky");
        echo "\">Lyckokatt</a>
                    <a class=\"list-group-item list-group-item-action\" aria-current=\"true\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_deck_create");
        echo "\">Deck</a>
                    <a class=\"list-group-item list-group-item-action\" aria-current=\"true\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_deck_shuffle_post");
        echo "\">Shuffle</a>
                    <a class=\"list-group-item list-group-item-action\" aria-current=\"true\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_deck_draw_get");
        echo "\">Draw</a>
                    <a class=\"list-group-item list-group-item-action\" aria-current=\"true\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_deck_draw_num_get", ["num" => 0]);
        echo "\">Draw number cards</a>
                    <a class=\"list-group-item list-group-item-action\" aria-current=\"true\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_book_show_all");
        echo "\">Show all books</a>
                    <a class=\"list-group-item list-group-item-action\" aria-current=\"true\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_book_show_isbn", ["isbn" => "9789180375207"]);
        echo "\">Show book with ISBN 9789180375207</a>
                </div>
            </div>
            <div class=\"col-sm-8\">
            <h3>Styrknappar för router <code>api/deck/shuffle, api/deck/draw, api/deck/draw/:number</code></h3>
                <form method=\"post\" action=\"\" class=\"form-api\">
                    <p>
                        <input type=\"submit\" name=\"shuffle\" value=\"Shuffle\" onClick=\" this.form.action = '";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_deck_shuffle_post");
        echo "'; \">
                        <input type=\"submit\" name=\"draw\" value=\"Draw\" onClick=\" this.form.action = '";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_deck_draw");
        echo "'; \">
                        <br>
                        <label for=\"number_cards\">Enter how many cards to draw:</label>
                        <input id=\"number_cards\" type=\"number\" name=\"number_cards\" min=\"1\" max=\"52\" value=\"1\">
                        <br>
                        <input type=\"submit\" name=\"draw_num\" value=\"Draw number cards\" onClick=\" this.form.action = '";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_deck_draw_num_post", ["num" => 0]);
        echo "'; \">
                        ";
        // line 37
        echo "                    </p>
                </form>
                <h3>1. Route <code>api/quote</code> a.k.a. <code>Dagens citat</code></h3>
                <p>Routen <code>api/quote</code> eller <code>Dagens citat</code> ger ett JSON svar som innehåller dagens citat. Citaten växlas slumpmässigt mellan tre olika citat som jag hittade på nätet. JSON svaret innehåller även dagens datum och en tidsstämpel för när svaret genererades. Denna route ger alltså enbart ett JSON svar och inkluderar inte någon gemensam sidlayout som header, footer.</p>
                <h3>2. Route <code>/lucky</code> a.k.a. <code>Lyckokatt</code></h3>
                <p>Routen <code>/lucky</code> eller <code>Lyckokatt</code> visar up bilder på en katt/katter. Bilderna hämtas med hjälp av ett API The Cat API.</p>
                <h3>3. Route <code>GET api/deck</code> a.k.a. <code>Deck</code></h3>
                <p>Routen returnerar en JSON struktur med hela kortleken sorterad per färg och värde.</p>
                <h3>4. Route <code>POST api/deck/shuffle</code> a.k.a. <code>Shuffle</code></h3>
                <p>Routen blandar kortleken och därefter returnerar en JSON struktur med kortleken.</p>
                <h3>5. Route <code>POST api/deck/draw</code> a.k.a. <code>Draw</code></h3>
                <p>Routen drar 1 kort från kortleken och visar upp dem i en JSON struktur samt antalet kort som är kvar i kortleken. Kortleken sparas i sessionen så om man anropar routen flera gånger så minskas antalet kort i kortleken.</p>
                <h3>6. Route <code>POST api/deck/draw/:number</code> a.k.a. <code>Draw number_cards</code></h3>
                <p>Routen drar :number kort från kortleken och visar upp dem i en JSON struktur samt antalet kort som är kvar i kortleken. Kortleken sparas i sessionen så om man anropar routen flera gånger så minskas antalet kort i kortleken.</p>
            </div>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "api/api.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 37,  155 => 35,  147 => 30,  143 => 29,  133 => 22,  129 => 21,  125 => 20,  121 => 19,  117 => 18,  113 => 17,  109 => 16,  105 => 15,  101 => 14,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}JSON API{% endblock %}

{% block body %}

    <div class=\"container my-5\">
        <h1 class=\"display-4\">JSON API</h1>
        <hr class=\"my-4\">
        <div class=\"row my-5\">
            <div class=\"col-sm-4\">
                <div class=\"list-group\">
                    <a class=\"list-group-item list-group-item-action\" aria-current=\"true\" href=\"{{ path('api') }}\">JSON API</a>
                    <a class=\"list-group-item list-group-item-action\" aria-current=\"true\" href=\"{{ path('api_game') }}\">Tjugoett &#40;kortspel&#41;</a>
                    <a class=\"list-group-item list-group-item-action\" aria-current=\"true\" href=\"{{ path('quote') }}\">Dagens citat</a>
                    <a class=\"list-group-item list-group-item-action\" aria-current=\"true\" href=\"{{ path('lucky') }}\">Lyckokatt</a>
                    <a class=\"list-group-item list-group-item-action\" aria-current=\"true\" href=\"{{ path('api_deck_create') }}\">Deck</a>
                    <a class=\"list-group-item list-group-item-action\" aria-current=\"true\" href=\"{{ path('api_deck_shuffle_post') }}\">Shuffle</a>
                    <a class=\"list-group-item list-group-item-action\" aria-current=\"true\" href=\"{{ path('api_deck_draw_get') }}\">Draw</a>
                    <a class=\"list-group-item list-group-item-action\" aria-current=\"true\" href=\"{{ path('api_deck_draw_num_get', {num: 0}) }}\">Draw number cards</a>
                    <a class=\"list-group-item list-group-item-action\" aria-current=\"true\" href=\"{{ path('api_book_show_all') }}\">Show all books</a>
                    <a class=\"list-group-item list-group-item-action\" aria-current=\"true\" href=\"{{ path('api_book_show_isbn', {'isbn': '9789180375207'}) }}\">Show book with ISBN 9789180375207</a>
                </div>
            </div>
            <div class=\"col-sm-8\">
            <h3>Styrknappar för router <code>api/deck/shuffle, api/deck/draw, api/deck/draw/:number</code></h3>
                <form method=\"post\" action=\"\" class=\"form-api\">
                    <p>
                        <input type=\"submit\" name=\"shuffle\" value=\"Shuffle\" onClick=\" this.form.action = '{{path('api_deck_shuffle_post')}}'; \">
                        <input type=\"submit\" name=\"draw\" value=\"Draw\" onClick=\" this.form.action = '{{path('api_deck_draw')}}'; \">
                        <br>
                        <label for=\"number_cards\">Enter how many cards to draw:</label>
                        <input id=\"number_cards\" type=\"number\" name=\"number_cards\" min=\"1\" max=\"52\" value=\"1\">
                        <br>
                        <input type=\"submit\" name=\"draw_num\" value=\"Draw number cards\" onClick=\" this.form.action = '{{ path('api_deck_draw_num_post', { num: 0 }) }}'; \">
                        {# <input type=\"submit\" name=\"deal\" value=\"Deal\" onClick=\" this.form.action = '{{path('api_deck_deal_post')}}'; \"> #}
                    </p>
                </form>
                <h3>1. Route <code>api/quote</code> a.k.a. <code>Dagens citat</code></h3>
                <p>Routen <code>api/quote</code> eller <code>Dagens citat</code> ger ett JSON svar som innehåller dagens citat. Citaten växlas slumpmässigt mellan tre olika citat som jag hittade på nätet. JSON svaret innehåller även dagens datum och en tidsstämpel för när svaret genererades. Denna route ger alltså enbart ett JSON svar och inkluderar inte någon gemensam sidlayout som header, footer.</p>
                <h3>2. Route <code>/lucky</code> a.k.a. <code>Lyckokatt</code></h3>
                <p>Routen <code>/lucky</code> eller <code>Lyckokatt</code> visar up bilder på en katt/katter. Bilderna hämtas med hjälp av ett API The Cat API.</p>
                <h3>3. Route <code>GET api/deck</code> a.k.a. <code>Deck</code></h3>
                <p>Routen returnerar en JSON struktur med hela kortleken sorterad per färg och värde.</p>
                <h3>4. Route <code>POST api/deck/shuffle</code> a.k.a. <code>Shuffle</code></h3>
                <p>Routen blandar kortleken och därefter returnerar en JSON struktur med kortleken.</p>
                <h3>5. Route <code>POST api/deck/draw</code> a.k.a. <code>Draw</code></h3>
                <p>Routen drar 1 kort från kortleken och visar upp dem i en JSON struktur samt antalet kort som är kvar i kortleken. Kortleken sparas i sessionen så om man anropar routen flera gånger så minskas antalet kort i kortleken.</p>
                <h3>6. Route <code>POST api/deck/draw/:number</code> a.k.a. <code>Draw number_cards</code></h3>
                <p>Routen drar :number kort från kortleken och visar upp dem i en JSON struktur samt antalet kort som är kvar i kortleken. Kortleken sparas i sessionen så om man anropar routen flera gånger så minskas antalet kort i kortleken.</p>
            </div>
        </div>
    </div>

{% endblock %}", "api/api.html.twig", "/home/olga/dbwebb-kurser/mvc/me/report/templates/api/api.html.twig");
    }
}
