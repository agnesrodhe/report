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

/* card/deck.html.twig */
class __TwigTemplate_bc8f82b6c045233de0d7b920e00e2910 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/deck.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/deck.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "card/deck.html.twig", 1);
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

        echo "Deck";
        
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
        echo "<div class=\"deckdiv\"> 
    <h1>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</h1>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["deck"]) || array_key_exists("deck", $context) ? $context["deck"] : (function () { throw new RuntimeError('Variable "deck" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 9
            echo "    ";
            $context["value"] = twig_get_attribute($this->env, $this->source, $context["card"], "getValue", [], "method", false, false, false, 9);
            // line 10
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["card"], "getColor", [], "method", false, false, false, 10) == "♥")) {
                // line 11
                echo "    <div>    
        <p class=\"card red color\">";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "getColor", [], "method", false, false, false, 12), "html", null, true);
                echo " </p>
        <p class=\"card value\">";
                // line 13
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 13, $this->source); })()), "html", null, true);
                echo " </p>
    </div>
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 15
$context["card"], "getColor", [], "method", false, false, false, 15) == "♣")) {
                // line 16
                echo "    <div>    
        <p class=\"card black color\">";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "getColor", [], "method", false, false, false, 17), "html", null, true);
                echo " </p>
        <p class=\"card value\">";
                // line 18
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 18, $this->source); })()), "html", null, true);
                echo " </p>
    </div>
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 20
$context["card"], "getColor", [], "method", false, false, false, 20) == "♦")) {
                // line 21
                echo "    <div>    
        <p class=\"card red color\">";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "getColor", [], "method", false, false, false, 22), "html", null, true);
                echo " </p>
        <p class=\"card value\">";
                // line 23
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 23, $this->source); })()), "html", null, true);
                echo " </p>
    </div>
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 25
$context["card"], "getColor", [], "method", false, false, false, 25) == "♠")) {
                // line 26
                echo "    <div>    
        <p class=\"card black color\">";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "getColor", [], "method", false, false, false, 27), "html", null, true);
                echo " </p>
        <p class=\"card value\">";
                // line 28
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 28, $this->source); })()), "html", null, true);
                echo " </p>
    </div>
    ";
            } else {
                // line 31
                echo "        <p class=\"card\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "getColor", [], "method", false, false, false, 31), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 31, $this->source); })()), "html", null, true);
                echo " </p>
    ";
            }
            // line 33
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "card/deck.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 34,  168 => 33,  160 => 31,  154 => 28,  150 => 27,  147 => 26,  145 => 25,  140 => 23,  136 => 22,  133 => 21,  131 => 20,  126 => 18,  122 => 17,  119 => 16,  117 => 15,  112 => 13,  108 => 12,  105 => 11,  102 => 10,  99 => 9,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Deck{% endblock %}

{% block content %}
<div class=\"deckdiv\"> 
    <h1>{{ title }}</h1>
    {% for card in deck %}
    {% set value = card.getValue() %}
    {% if card.getColor() == \"♥\" %}
    <div>    
        <p class=\"card red color\">{{ card.getColor() }} </p>
        <p class=\"card value\">{{ value }} </p>
    </div>
    {% elseif card.getColor() == \"♣\" %}
    <div>    
        <p class=\"card black color\">{{ card.getColor() }} </p>
        <p class=\"card value\">{{ value }} </p>
    </div>
    {% elseif card.getColor() == \"♦\" %}
    <div>    
        <p class=\"card red color\">{{ card.getColor() }} </p>
        <p class=\"card value\">{{ value }} </p>
    </div>
    {% elseif card.getColor() == \"♠\" %}
    <div>    
        <p class=\"card black color\">{{ card.getColor() }} </p>
        <p class=\"card value\">{{ value }} </p>
    </div>
    {% else %}
        <p class=\"card\">{{ card.getColor() }} {{ value }} </p>
    {% endif %}
    {% endfor %}
</div>


{% endblock %}
", "card/deck.html.twig", "/Users/agnes/dbwebb-kurser/mvc/me/report/templates/card/deck.html.twig");
    }
}
