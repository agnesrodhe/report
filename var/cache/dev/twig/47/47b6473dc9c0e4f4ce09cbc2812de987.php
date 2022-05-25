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

/* card/deck2.html.twig */
class __TwigTemplate_1b21c8c53f764af8ac1a2909d7b0b4ef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/deck2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/deck2.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "card/deck2.html.twig", 1);
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

        echo "Deck2";
        
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
            echo "        ";
            if (($context["card"] == "🃟")) {
                // line 10
                echo "            <div class=\"joker\">    
                <p class=\"card\">";
                // line 11
                echo twig_escape_filter($this->env, $context["card"], "html", null, true);
                echo " </p>
            </div>
        ";
            } else {
                // line 14
                echo "            ";
                $context["value"] = twig_get_attribute($this->env, $this->source, $context["card"], "getValue", [], "method", false, false, false, 14);
                // line 15
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["card"], "getColor", [], "method", false, false, false, 15) == "♥")) {
                    // line 16
                    echo "                <div>    
                    <p class=\"card red color\">";
                    // line 17
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "getColor", [], "method", false, false, false, 17), "html", null, true);
                    echo " </p>
                    <p class=\"card value\">";
                    // line 18
                    echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 18, $this->source); })()), "html", null, true);
                    echo " </p>
                </div>
            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 20
$context["card"], "getColor", [], "method", false, false, false, 20) == "♣")) {
                    // line 21
                    echo "                <div>    
                    <p class=\"card black color\">";
                    // line 22
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "getColor", [], "method", false, false, false, 22), "html", null, true);
                    echo " </p>
                    <p class=\"card value\">";
                    // line 23
                    echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 23, $this->source); })()), "html", null, true);
                    echo " </p>
                </div>
            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 25
$context["card"], "getColor", [], "method", false, false, false, 25) == "♦")) {
                    // line 26
                    echo "                <div>    
                    <p class=\"card red color\">";
                    // line 27
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "getColor", [], "method", false, false, false, 27), "html", null, true);
                    echo " </p>
                    <p class=\"card value\">";
                    // line 28
                    echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 28, $this->source); })()), "html", null, true);
                    echo " </p>
                </div>
            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 30
$context["card"], "getColor", [], "method", false, false, false, 30) == "♠")) {
                    // line 31
                    echo "                <div>    
                    <p class=\"card black color\">";
                    // line 32
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "getColor", [], "method", false, false, false, 32), "html", null, true);
                    echo " </p>
                    <p class=\"card value\">";
                    // line 33
                    echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 33, $this->source); })()), "html", null, true);
                    echo " </p>
                </div>
            ";
                } else {
                    // line 36
                    echo "                <p class=\"card\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "getColor", [], "method", false, false, false, 36), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 36, $this->source); })()), "html", null, true);
                    echo " </p>
            ";
                }
                // line 38
                echo "        ";
            }
            // line 39
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "card/deck2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 40,  183 => 39,  180 => 38,  172 => 36,  166 => 33,  162 => 32,  159 => 31,  157 => 30,  152 => 28,  148 => 27,  145 => 26,  143 => 25,  138 => 23,  134 => 22,  131 => 21,  129 => 20,  124 => 18,  120 => 17,  117 => 16,  114 => 15,  111 => 14,  105 => 11,  102 => 10,  99 => 9,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Deck2{% endblock %}

{% block content %}
<div class=\"deckdiv\"> 
    <h1>{{ title }}</h1>
    {% for card in deck %}
        {% if card == \"🃟\" %}
            <div class=\"joker\">    
                <p class=\"card\">{{ card }} </p>
            </div>
        {% else %}
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
        {% endif %}
    {% endfor %}
</div>


{% endblock %}
", "card/deck2.html.twig", "/Users/agnes/dbwebb-kurser/mvc/me/report/templates/card/deck2.html.twig");
    }
}
