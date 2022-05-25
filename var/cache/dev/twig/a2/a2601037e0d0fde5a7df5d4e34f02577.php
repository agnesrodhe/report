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

/* discussion.markdown.twig */
class __TwigTemplate_a476b6fe7133f9b8b5d38fe9056a22d8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "discussion.markdown.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "discussion.markdown.twig"));

        // line 1
        echo "#### Diskussion

Nu har jag genomfört den här uppgiften och analyserat min kod utifrån Phpmetrics och Scrutinizer. Det har på många sätt varit givande för mig då jag läst på ordentligt kring de olika mätvärdena i de olika rapporterna. Genom att både få läsa, analysera och försöka förändra så får jag angripa begrepp på olika sätt vilket bidrar till en djupare förståelse än att bara få det förklarat för mig. Däremot så upplevde jag inte att jag hade möjlighet att göra så stora förändringar, och kanske var det för att koden vi har jobbat med är relativt liten. Jag tror absolut att det här kan vara ett bra sätt att arbeta med kodkvaliteten men det som man behöver vara medveten om är också att det tar tid. Det här har varit tidskrävande och resultatet av arbetet har varit relativt litet i förhållande till det och det är ju inte särskilt effektivt. Jag tänker att om det är vissa delar som man känner sig osäker på hur det kan förbättras så kan det här vara en hjälp att se det, men att göra det här hela tiden kommer nog ta lite för mycket i tid. Samtidigt är det lite oklart vad siffrorna och mätvärdena egentligen säger om koden, eftersom det finns kod som fungerar och används även om betygen i de här programmen är låga.

/ Agnes
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "discussion.markdown.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("#### Diskussion

Nu har jag genomfört den här uppgiften och analyserat min kod utifrån Phpmetrics och Scrutinizer. Det har på många sätt varit givande för mig då jag läst på ordentligt kring de olika mätvärdena i de olika rapporterna. Genom att både få läsa, analysera och försöka förändra så får jag angripa begrepp på olika sätt vilket bidrar till en djupare förståelse än att bara få det förklarat för mig. Däremot så upplevde jag inte att jag hade möjlighet att göra så stora förändringar, och kanske var det för att koden vi har jobbat med är relativt liten. Jag tror absolut att det här kan vara ett bra sätt att arbeta med kodkvaliteten men det som man behöver vara medveten om är också att det tar tid. Det här har varit tidskrävande och resultatet av arbetet har varit relativt litet i förhållande till det och det är ju inte särskilt effektivt. Jag tänker att om det är vissa delar som man känner sig osäker på hur det kan förbättras så kan det här vara en hjälp att se det, men att göra det här hela tiden kommer nog ta lite för mycket i tid. Samtidigt är det lite oklart vad siffrorna och mätvärdena egentligen säger om koden, eftersom det finns kod som fungerar och används även om betygen i de här programmen är låga.

/ Agnes
", "discussion.markdown.twig", "/Users/agnes/dbwebb-kurser/mvc/me/report/templates/discussion.markdown.twig");
    }
}
