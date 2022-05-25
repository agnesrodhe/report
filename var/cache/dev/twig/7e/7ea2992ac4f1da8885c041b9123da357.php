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

/* scrutinizer.markdown.twig */
class __TwigTemplate_e697b34a6b8c3ce45dd813b37af0c22e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scrutinizer.markdown.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scrutinizer.markdown.twig"));

        // line 1
        echo "#### Scrutinizer 

Här har jag skapat en liknande tabell som under Phpmetrics. Jag kollar här på samma del av koden som innan för att lättare kunna jämföra och se om det är samma resultat som jag kan upptäcka. 

<table class=\"table\">
    <thead>
        <tr>
            <th>Klass</th>
            <th>Coverage</th>
            <th>Complexity</th>
            <th>Size</th>
            <th class=\"line-through\">Coupling</th>
            <th class=\"line-through\">Cohesion</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Game</td>
            <td>100%</td>
            <td>20</td>
            <td>140</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>GameController</td>
            <td>0%</td>
            <td>6</td>
            <td>74</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>Card</td>
            <td>100%</td>
            <td>3</td>
            <td>36</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>CardHand</td>
            <td>100%</td>
            <td>2</td>
            <td>25</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>Deck</td>
            <td>100%</td>
            <td>13</td>
            <td>69</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>Player</td>
            <td>100%</td>
            <td>8</td>
            <td>79</td>
            <td>-</td>
            <td>-</td>
        </tr>
    </tbody>
</table>

##### Code Coverage (all kod) = 24,6%

Det som är skillnaden i att undersöka kodens kvalitet med hjälp av Phpmetrics och Scrutinizer har varit och är att jag inte får tillgång till alla värden som jag önskat på båda ställena. Jag får se dessa som komplement till varandra istället. Coupling och Cohesion kan jag inte se i min Scrutinizer och det verkar vara fler som har haft samma problem så jag har valt att fokusera på annat istället. Det som är tydligaste i Scrutinizer är code coverage. Det kan jag få ett tydligt värde på och som jag enkelt kan hitta vad jag skulle kunna förbättra. Som ni ser i tabellen ovanför har alla klasser 100% coverage förutom GameController. Där ser jag en förbättringsåtgärd som kan göras. 

Sedan kan jag även här se att komplexiteten i Game och Deck kan behöva ses över. Jag ser att siffrorna inte stämmer överens med Phpmetrics och de ovanför men det gissar jag har att göra med att det är lite olika sätt de mäter och räknar på. 

En tredje svaghet är väl att skapa fler tester för hela report och det skulle kunna förbättra kodkvaliteten på hela sidan. Det gäller främst andra klasser än de som rör Game 21.";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scrutinizer.markdown.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("#### Scrutinizer 

Här har jag skapat en liknande tabell som under Phpmetrics. Jag kollar här på samma del av koden som innan för att lättare kunna jämföra och se om det är samma resultat som jag kan upptäcka. 

<table class=\"table\">
    <thead>
        <tr>
            <th>Klass</th>
            <th>Coverage</th>
            <th>Complexity</th>
            <th>Size</th>
            <th class=\"line-through\">Coupling</th>
            <th class=\"line-through\">Cohesion</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Game</td>
            <td>100%</td>
            <td>20</td>
            <td>140</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>GameController</td>
            <td>0%</td>
            <td>6</td>
            <td>74</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>Card</td>
            <td>100%</td>
            <td>3</td>
            <td>36</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>CardHand</td>
            <td>100%</td>
            <td>2</td>
            <td>25</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>Deck</td>
            <td>100%</td>
            <td>13</td>
            <td>69</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>Player</td>
            <td>100%</td>
            <td>8</td>
            <td>79</td>
            <td>-</td>
            <td>-</td>
        </tr>
    </tbody>
</table>

##### Code Coverage (all kod) = 24,6%

Det som är skillnaden i att undersöka kodens kvalitet med hjälp av Phpmetrics och Scrutinizer har varit och är att jag inte får tillgång till alla värden som jag önskat på båda ställena. Jag får se dessa som komplement till varandra istället. Coupling och Cohesion kan jag inte se i min Scrutinizer och det verkar vara fler som har haft samma problem så jag har valt att fokusera på annat istället. Det som är tydligaste i Scrutinizer är code coverage. Det kan jag få ett tydligt värde på och som jag enkelt kan hitta vad jag skulle kunna förbättra. Som ni ser i tabellen ovanför har alla klasser 100% coverage förutom GameController. Där ser jag en förbättringsåtgärd som kan göras. 

Sedan kan jag även här se att komplexiteten i Game och Deck kan behöva ses över. Jag ser att siffrorna inte stämmer överens med Phpmetrics och de ovanför men det gissar jag har att göra med att det är lite olika sätt de mäter och räknar på. 

En tredje svaghet är väl att skapa fler tester för hela report och det skulle kunna förbättra kodkvaliteten på hela sidan. Det gäller främst andra klasser än de som rör Game 21.", "scrutinizer.markdown.twig", "/Users/agnes/dbwebb-kurser/mvc/me/report/templates/scrutinizer.markdown.twig");
    }
}
