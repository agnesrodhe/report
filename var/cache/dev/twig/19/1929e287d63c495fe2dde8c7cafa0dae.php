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

/* game/game-draw.html.twig */
class __TwigTemplate_331e3eaa3355bfab3705926cb4991d82 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/game-draw.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/game-draw.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "game/game-draw.html.twig", 1);
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

        echo "21";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<h1>Kortspelet 21</h1>
<div class=\"player game-board row\">
    <div class=\"col-md-12\">
        <h4>Spelare 1</h4>
    </div>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cardHand"]) || array_key_exists("cardHand", $context) ? $context["cardHand"] : (function () { throw new RuntimeError('Variable "cardHand" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 12
            echo "    <div class=\"col-md-1\">
        ";
            // line 13
            if (((twig_get_attribute($this->env, $this->source, $context["c"], "getColor", [], "method", false, false, false, 13) == "♥") || (twig_get_attribute($this->env, $this->source, $context["c"], "getColor", [], "method", false, false, false, 13) == "♦"))) {
                // line 14
                echo "        <p class=\"card red color\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "getColor", [], "method", false, false, false, 14), "html", null, true);
                echo " </p>
        <p class=\"card value\">";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "getValue", [], "method", false, false, false, 15), "html", null, true);
                echo " </p>
        ";
            } else {
                // line 17
                echo "        <p class=\"card black color\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "getColor", [], "method", false, false, false, 17), "html", null, true);
                echo " </p>
        <p class=\"card value\">";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "getValue", [], "method", false, false, false, 18), "html", null, true);
                echo " </p>
        ";
            }
            // line 20
            echo "    </div> 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    <div class=\"col-md-12\">
        <h5>Totala summan: ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["sumPlayer"]) || array_key_exists("sumPlayer", $context) ? $context["sumPlayer"] : (function () { throw new RuntimeError('Variable "sumPlayer" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "</h5>
    </div>
    <form action=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("game-draw");
        echo "\">
        <input type=\"submit\" class=\"btn knapp\" value=\"Dra ett till kort\" />
    </form>
    <form action=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("game-stop");
        echo "\">
        <input type=\"submit\" class=\"btn knapp\" value=\"Stanna\" />
    </form>
</div>


<div class=\"bank game-board row\">
    <h4>Banken</h4>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "game/game-draw.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 28,  139 => 25,  134 => 23,  131 => 22,  124 => 20,  119 => 18,  114 => 17,  109 => 15,  104 => 14,  102 => 13,  99 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}21{% endblock %}

{% block content %}
<h1>Kortspelet 21</h1>
<div class=\"player game-board row\">
    <div class=\"col-md-12\">
        <h4>Spelare 1</h4>
    </div>
    {% for c in cardHand %}
    <div class=\"col-md-1\">
        {% if c.getColor() == \"♥\" or c.getColor() == \"♦\" %}
        <p class=\"card red color\">{{ c.getColor() }} </p>
        <p class=\"card value\">{{ c.getValue() }} </p>
        {% else %}
        <p class=\"card black color\">{{ c.getColor() }} </p>
        <p class=\"card value\">{{ c.getValue() }} </p>
        {% endif %}
    </div> 
    {% endfor %}
    <div class=\"col-md-12\">
        <h5>Totala summan: {{ sumPlayer }}</h5>
    </div>
    <form action=\"{{ url(\"game-draw\") }}\">
        <input type=\"submit\" class=\"btn knapp\" value=\"Dra ett till kort\" />
    </form>
    <form action=\"{{ url(\"game-stop\") }}\">
        <input type=\"submit\" class=\"btn knapp\" value=\"Stanna\" />
    </form>
</div>


<div class=\"bank game-board row\">
    <h4>Banken</h4>
</div>
{% endblock %}", "game/game-draw.html.twig", "/Users/agnes/dbwebb-kurser/mvc/me/report/templates/game/game-draw.html.twig");
    }
}
