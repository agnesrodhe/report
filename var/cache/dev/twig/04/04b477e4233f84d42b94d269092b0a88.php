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

/* card/deal.html.twig */
class __TwigTemplate_2eb192f35e8d211385475763eb1398fc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/deal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/deal.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "card/deal.html.twig", 1);
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

        echo "Deal";
        
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
        echo "<div class=\"dealdiv\"> 
";
        // line 7
        if (((isset($context["left"]) || array_key_exists("left", $context) ? $context["left"] : (function () { throw new RuntimeError('Variable "left" does not exist.', 7, $this->source); })()) != 0)) {
            // line 8
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 8, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                // line 9
                echo "        <h4>Player: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "getPlayerId", [], "method", false, false, false, 9), "html", null, true);
                echo "</h4>
        ";
                // line 10
                $context["cardHand"] = twig_get_attribute($this->env, $this->source, $context["player"], "getHand", [], "method", false, false, false, 10);
                // line 11
                echo "        ";
                $context["cards"] = twig_get_attribute($this->env, $this->source, (isset($context["cardHand"]) || array_key_exists("cardHand", $context) ? $context["cardHand"] : (function () { throw new RuntimeError('Variable "cardHand" does not exist.', 11, $this->source); })()), "getCardHand", [], "method", false, false, false, 11);
                // line 12
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["cards"]) || array_key_exists("cards", $context) ? $context["cards"] : (function () { throw new RuntimeError('Variable "cards" does not exist.', 12, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                    // line 13
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["card"], "getColor", [], "method", false, false, false, 13) == "♥")) {
                        // line 14
                        echo "            <div>    
                <p class=\"card red color\">";
                        // line 15
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "getColor", [], "method", false, false, false, 15), "html", null, true);
                        echo " </p>
                <p class=\"card value\">";
                        // line 16
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "getValue", [], "method", false, false, false, 16), "html", null, true);
                        echo " </p>
            </div>
            ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 18
$context["card"], "getColor", [], "method", false, false, false, 18) == "♣")) {
                        // line 19
                        echo "            <div>    
                <p class=\"card black color\">";
                        // line 20
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "getColor", [], "method", false, false, false, 20), "html", null, true);
                        echo " </p>
                <p class=\"card value\">";
                        // line 21
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "getValue", [], "method", false, false, false, 21), "html", null, true);
                        echo " </p>
            </div>
            ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 23
$context["card"], "getColor", [], "method", false, false, false, 23) == "♦")) {
                        // line 24
                        echo "            <div>    
                <p class=\"card red color\">";
                        // line 25
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "getColor", [], "method", false, false, false, 25), "html", null, true);
                        echo " </p>
                <p class=\"card value\">";
                        // line 26
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "getValue", [], "method", false, false, false, 26), "html", null, true);
                        echo " </p>
            </div>
            ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 28
$context["card"], "getColor", [], "method", false, false, false, 28) == "♠")) {
                        // line 29
                        echo "            <div>    
                <p class=\"card black color\">";
                        // line 30
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "getColor", [], "method", false, false, false, 30), "html", null, true);
                        echo " </p>
                <p class=\"card value\">";
                        // line 31
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "getValue", [], "method", false, false, false, 31), "html", null, true);
                        echo " </p>
            </div>
            ";
                    } else {
                        // line 34
                        echo "                <p class=\"card\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "getColor", [], "method", false, false, false, 34), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "getValue", [], "method", false, false, false, 34), "html", null, true);
                        echo " </p>
            ";
                    }
                    // line 36
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "    <h4 class=\"card-left\">Kort kvar: ";
            echo twig_escape_filter($this->env, (isset($context["left"]) || array_key_exists("left", $context) ? $context["left"] : (function () { throw new RuntimeError('Variable "left" does not exist.', 38, $this->source); })()), "html", null, true);
            echo "st</h4>
    ";
        } else {
            // line 40
            echo "    <p class=\"card-left\">Korten är slut!</p>
";
        }
        // line 42
        echo "

</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "card/deal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 42,  197 => 40,  191 => 38,  185 => 37,  179 => 36,  171 => 34,  165 => 31,  161 => 30,  158 => 29,  156 => 28,  151 => 26,  147 => 25,  144 => 24,  142 => 23,  137 => 21,  133 => 20,  130 => 19,  128 => 18,  123 => 16,  119 => 15,  116 => 14,  113 => 13,  108 => 12,  105 => 11,  103 => 10,  98 => 9,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Deal{% endblock %}

{% block content %}
<div class=\"dealdiv\"> 
{% if left != 0 %}
    {% for player in players %}
        <h4>Player: {{ player.getPlayerId() }}</h4>
        {% set cardHand = player.getHand() %}
        {% set cards = cardHand.getCardHand()%}
        {% for card in cards %}
            {% if card.getColor() == \"♥\" %}
            <div>    
                <p class=\"card red color\">{{ card.getColor() }} </p>
                <p class=\"card value\">{{ card.getValue() }} </p>
            </div>
            {% elseif card.getColor() == \"♣\" %}
            <div>    
                <p class=\"card black color\">{{ card.getColor() }} </p>
                <p class=\"card value\">{{ card.getValue() }} </p>
            </div>
            {% elseif card.getColor() == \"♦\" %}
            <div>    
                <p class=\"card red color\">{{ card.getColor() }} </p>
                <p class=\"card value\">{{ card.getValue() }} </p>
            </div>
            {% elseif card.getColor() == \"♠\" %}
            <div>    
                <p class=\"card black color\">{{ card.getColor() }} </p>
                <p class=\"card value\">{{ card.getValue() }} </p>
            </div>
            {% else %}
                <p class=\"card\">{{ card.getColor() }} {{ card.getValue() }} </p>
            {% endif %}
        {% endfor %}
    {% endfor %}
    <h4 class=\"card-left\">Kort kvar: {{ left }}st</h4>
    {% else %}
    <p class=\"card-left\">Korten är slut!</p>
{% endif %}


</div>


{% endblock %}", "card/deal.html.twig", "/Users/agnes/dbwebb-kurser/mvc/me/report/templates/card/deal.html.twig");
    }
}
