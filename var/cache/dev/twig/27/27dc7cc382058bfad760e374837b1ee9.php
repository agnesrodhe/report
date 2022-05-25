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

/* phpmetrics.markdown.twig */
class __TwigTemplate_1516e66d2d29c78ca60fff3a0d7416aa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "phpmetrics.markdown.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "phpmetrics.markdown.twig"));

        // line 1
        echo "#### Phpmetrics

Jag väljer här att kolla på kod som hör till spelet på sidan dvs klasserna Game, GameController, Card, CardHand, Deck och Player. Jag har valt att göra en egen tabell med värdena från phpmetrics för att kunna jämföra, se samband och analysera för att hitta något som jag skulle vilja förbättra/uppdatera. Den ser ni här nedan: 

<table class=\"table\">
    <thead>
        <tr>
            <th>Klass</th>
            <th>Coupling(AC)</th>
            <th>Coupling(EC)</th>
            <th>Class cyclomatic complexity</th>
            <th>LCOM</th>
            <th>Size(LLOC)</th>
            <th>Maintainability index</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Game</td>
            <td>1</td>
            <td>2</td>
            <td>12</td>
            <td>1</td>
            <td>81</td>
            <td>78.15</td>
        </tr>
        <tr>
            <td>GameController</td>
            <td>0</td>
            <td>5</td>
            <td>2</td>
            <td>1</td>
            <td>43</td>
            <td>81.26</td>
        </tr>
        <tr>
            <td>Card</td>
            <td>3</td>
            <td>0</td>
            <td>1</td>
            <td>1</td>
            <td>19</td>
            <td>106.31</td>
        </tr>
        <tr>
            <td>CardHand</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>13</td>
            <td>114.93</td>
        </tr>
        <tr>
            <td>Deck</td>
            <td>4</td>
            <td>1</td>
            <td>10</td>
            <td>1</td>
            <td>47</td>
            <td>82.65</td>
        </tr>
        <tr>
            <td>Player</td>
            <td>2</td>
            <td>2</td>
            <td>4</td>
            <td>1</td>
            <td>41</td>
            <td>90.69</td>
        </tr>
    </tbody>
</table>

Utifrån följande värden kan jag se att det inte är några akuta förändringar som behöver ske för att det ska göra någon stor skillnad. Jag har lagt till Maintainability index för att det ger en bild av just det, inget akut men kanske något kan återgärdas. Det är ett värde på hur väl koden kan underhållas, och det är ett intressant mätvärde tycker jag. 

Det jag lägger märke till är Deck-klassen som har både AC och EC det vill säga både är beroende av andra klasser och är beroende för andra klasser och det även i det högre skiktet av komplexitet. Jag går in och kikar på koden och ser att komplexiteten är som störst i konstruktorn. Jag vet att jag har varit inne och jobbat i den förut för att få bort en else-sats. Jag har en idé om att jag skulle kunna göra den med en mindre komplexitet i ett förbättringsstadie.

Jag fortsätter analysera och ser att även i Game-klassen så finns en hög komplexitet. Därför går jag in och kikar, eventuellt skulle det gå att förändra lite i funktionerna där för att minska komplexiteten. I GameController så är EC 5, det går att ta bort en import av Deck och Player eftersom dessa inte används i klassen utan ligger kvar från förut.

Jag tycker inte att storleken på koden är i överkant och väljer att inte göra något åt det. Att LCOM är 1 i alla klasser är lite klurigt att förstå. Jag hade önskat att det fanns exempel på vad phpmetrics menar med det. Som jag har förstått så är LCOM 0 när cohesive är hög att allt som finns i klassen samarbetar med varandra på något vis och den stiger i samband med att det i klassen kan jobba med olika saker oberoende av varandra, utan samarbete. Det tyder ju på att jag borde kunna hitta något i min kod som är på det här viset, men jag kan inte hitta det.
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "phpmetrics.markdown.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("#### Phpmetrics

Jag väljer här att kolla på kod som hör till spelet på sidan dvs klasserna Game, GameController, Card, CardHand, Deck och Player. Jag har valt att göra en egen tabell med värdena från phpmetrics för att kunna jämföra, se samband och analysera för att hitta något som jag skulle vilja förbättra/uppdatera. Den ser ni här nedan: 

<table class=\"table\">
    <thead>
        <tr>
            <th>Klass</th>
            <th>Coupling(AC)</th>
            <th>Coupling(EC)</th>
            <th>Class cyclomatic complexity</th>
            <th>LCOM</th>
            <th>Size(LLOC)</th>
            <th>Maintainability index</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Game</td>
            <td>1</td>
            <td>2</td>
            <td>12</td>
            <td>1</td>
            <td>81</td>
            <td>78.15</td>
        </tr>
        <tr>
            <td>GameController</td>
            <td>0</td>
            <td>5</td>
            <td>2</td>
            <td>1</td>
            <td>43</td>
            <td>81.26</td>
        </tr>
        <tr>
            <td>Card</td>
            <td>3</td>
            <td>0</td>
            <td>1</td>
            <td>1</td>
            <td>19</td>
            <td>106.31</td>
        </tr>
        <tr>
            <td>CardHand</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>13</td>
            <td>114.93</td>
        </tr>
        <tr>
            <td>Deck</td>
            <td>4</td>
            <td>1</td>
            <td>10</td>
            <td>1</td>
            <td>47</td>
            <td>82.65</td>
        </tr>
        <tr>
            <td>Player</td>
            <td>2</td>
            <td>2</td>
            <td>4</td>
            <td>1</td>
            <td>41</td>
            <td>90.69</td>
        </tr>
    </tbody>
</table>

Utifrån följande värden kan jag se att det inte är några akuta förändringar som behöver ske för att det ska göra någon stor skillnad. Jag har lagt till Maintainability index för att det ger en bild av just det, inget akut men kanske något kan återgärdas. Det är ett värde på hur väl koden kan underhållas, och det är ett intressant mätvärde tycker jag. 

Det jag lägger märke till är Deck-klassen som har både AC och EC det vill säga både är beroende av andra klasser och är beroende för andra klasser och det även i det högre skiktet av komplexitet. Jag går in och kikar på koden och ser att komplexiteten är som störst i konstruktorn. Jag vet att jag har varit inne och jobbat i den förut för att få bort en else-sats. Jag har en idé om att jag skulle kunna göra den med en mindre komplexitet i ett förbättringsstadie.

Jag fortsätter analysera och ser att även i Game-klassen så finns en hög komplexitet. Därför går jag in och kikar, eventuellt skulle det gå att förändra lite i funktionerna där för att minska komplexiteten. I GameController så är EC 5, det går att ta bort en import av Deck och Player eftersom dessa inte används i klassen utan ligger kvar från förut.

Jag tycker inte att storleken på koden är i överkant och väljer att inte göra något åt det. Att LCOM är 1 i alla klasser är lite klurigt att förstå. Jag hade önskat att det fanns exempel på vad phpmetrics menar med det. Som jag har förstått så är LCOM 0 när cohesive är hög att allt som finns i klassen samarbetar med varandra på något vis och den stiger i samband med att det i klassen kan jobba med olika saker oberoende av varandra, utan samarbete. Det tyder ju på att jag borde kunna hitta något i min kod som är på det här viset, men jag kan inte hitta det.
", "phpmetrics.markdown.twig", "/Users/agnes/dbwebb-kurser/mvc/me/report/templates/phpmetrics.markdown.twig");
    }
}
