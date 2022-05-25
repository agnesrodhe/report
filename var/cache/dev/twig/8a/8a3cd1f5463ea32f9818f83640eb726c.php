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

/* game/game-stop.html.twig */
class __TwigTemplate_f8e07f29f8da6e437c0248dc155334ac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/game-stop.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/game-stop.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "game/game-stop.html.twig", 1);
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
        echo "<div>
    <h1>Kortspelet 21 - Avslutat</h1>
</div>
<div class=\"player game-board row\">
    <div class=\"col-md-12\">
        <h4>Spelare 1</h4>
    </div>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cardHand"]) || array_key_exists("cardHand", $context) ? $context["cardHand"] : (function () { throw new RuntimeError('Variable "cardHand" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 14
            echo "    <div class=\"col-md-1\">
        ";
            // line 15
            if (((twig_get_attribute($this->env, $this->source, $context["c"], "getColor", [], "method", false, false, false, 15) == "♥") || (twig_get_attribute($this->env, $this->source, $context["c"], "getColor", [], "method", false, false, false, 15) == "♦"))) {
                // line 16
                echo "        <p class=\"card red color\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "getColor", [], "method", false, false, false, 16), "html", null, true);
                echo " </p>
        <p class=\"card value\">";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "getValue", [], "method", false, false, false, 17), "html", null, true);
                echo " </p>
        ";
            } else {
                // line 19
                echo "        <p class=\"card black color\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "getColor", [], "method", false, false, false, 19), "html", null, true);
                echo " </p>
        <p class=\"card value\">";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "getValue", [], "method", false, false, false, 20), "html", null, true);
                echo " </p>
        ";
            }
            // line 22
            echo "    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    <div class=\"col-md-12\">
        <h5>Totala summan: ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["sumPlayer"]) || array_key_exists("sumPlayer", $context) ? $context["sumPlayer"] : (function () { throw new RuntimeError('Variable "sumPlayer" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "</h5>
    </div>
</div>


<div class=\"bank game-board row\">
    <div class=\"col-md-12\">
        <h4>Banken</h4>
    </div>
    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cardHandBank"]) || array_key_exists("cardHandBank", $context) ? $context["cardHandBank"] : (function () { throw new RuntimeError('Variable "cardHandBank" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 35
            echo "    <div class=\"col-md-1\">
        ";
            // line 36
            if (((twig_get_attribute($this->env, $this->source, $context["c"], "getColor", [], "method", false, false, false, 36) == "♥") || (twig_get_attribute($this->env, $this->source, $context["c"], "getColor", [], "method", false, false, false, 36) == "♦"))) {
                // line 37
                echo "        <p class=\"card red color\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "getColor", [], "method", false, false, false, 37), "html", null, true);
                echo " </p>
        <p class=\"card value\">";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "getValue", [], "method", false, false, false, 38), "html", null, true);
                echo " </p>
        ";
            } else {
                // line 40
                echo "        <p class=\"card black color\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "getColor", [], "method", false, false, false, 40), "html", null, true);
                echo " </p>
        <p class=\"card value\">";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "getValue", [], "method", false, false, false, 41), "html", null, true);
                echo " </p>
        ";
            }
            // line 43
            echo "    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    <div class=\"col-md-12\">
        <h5>Totala summan: ";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["sumBank"]) || array_key_exists("sumBank", $context) ? $context["sumBank"] : (function () { throw new RuntimeError('Variable "sumBank" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "</h5>
    </div>
</div>
<div>
    <form action=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("game-start");
        echo "\">
        <input type=\"submit\" class=\"btn knapp\" value=\"Spela igen\" />
    </form>
    <h4>";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["winner"]) || array_key_exists("winner", $context) ? $context["winner"] : (function () { throw new RuntimeError('Variable "winner" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "</h4>
</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "game/game-stop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 53,  194 => 50,  187 => 46,  184 => 45,  177 => 43,  172 => 41,  167 => 40,  162 => 38,  157 => 37,  155 => 36,  152 => 35,  148 => 34,  136 => 25,  133 => 24,  126 => 22,  121 => 20,  116 => 19,  111 => 17,  106 => 16,  104 => 15,  101 => 14,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}21{% endblock %}

{% block content %}
<div>
    <h1>Kortspelet 21 - Avslutat</h1>
</div>
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
</div>


<div class=\"bank game-board row\">
    <div class=\"col-md-12\">
        <h4>Banken</h4>
    </div>
    {% for c in cardHandBank %}
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
        <h5>Totala summan: {{ sumBank }}</h5>
    </div>
</div>
<div>
    <form action=\"{{ url(\"game-start\") }}\">
        <input type=\"submit\" class=\"btn knapp\" value=\"Spela igen\" />
    </form>
    <h4>{{ winner }}</h4>
</div>


{% endblock %}", "game/game-stop.html.twig", "/Users/agnes/dbwebb-kurser/mvc/me/report/templates/game/game-stop.html.twig");
    }
}
