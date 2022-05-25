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

/* improvements.markdown.twig */
class __TwigTemplate_cf9f65c24bb888578e43cede57de5d86 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "improvements.markdown.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "improvements.markdown.twig"));

        // line 1
        echo "#### Förbättringar

Jag kommer att försöka göra tre förbättringar utifrån vad jag har upptäckt i phpmetrics och scrutinizer. Först kommer jag att göra en analys på vad jag tror kommer hända efter att jag genomfört dem och därefter implementera förbättringarna samt analysera hur resultatet blev i phpmetrics och scrutinizer. De förbättringarna jag kommer göra är att minska komplexiteten i klassen Deck, minska komplexiteten i klassen Game samt att minska EC-coupling i klassen GameController.

1. **Minska komplexiteten i Deck**
##### Innan
Utifrån rapporterna om kodkvaliteten så kunde jag se att klassen Deck hade en komplexitet som jag tror skulle kunna minskas. Det jag har tänkte göra är att minska komplexiteten i konstruktorn, jag tror att den koden skulle kunna göras på ett enklare sätt och det tror jag kommer påverka värdet för klassen Decks komplexitet så att det blir lägre. 

##### Analys

<table class=\"table\">
    <thead>
        <tr>
            <th>Deck</th>
            <th>PHPmetrics - Innan</th>
            <th>PHPmetrics - Efter</th>
            <th>Scrutinizer - Innan</th>
            <th>Scrutinizer - Efter</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Size</td>
            <td>47</td>
            <td>39</td>
            <td>69</td>
            <td>61</td>
        </tr>
        <tr>
            <td>Complexity</td>
            <td>10</td>
            <td>5</td>
            <td>13</td>
            <td>8</td>
        </tr>
    </tbody>
</table>

Jag ändrade koden i konstruktorn i Deck vilket gjorde att jag kunde byta ut if, elseif och elseif mot en foreach-loop. Det tog bort en del komplexitet. Här ovan kan ni se att både storleken och komplexiteten har minskat i både Phpmetrics och Scrutinizer. 
Här nedan kan ni också se att konstruktorn i Deck har gått från betyg B till betyg A. Det gjorde också att helhetsbetyget gick från 9.96 till 10.

<img src=\"img/deckfix.png\" alt=\"deckfix\" width=\"400\" />

2. **Minska komplexiteten i Game**
##### Innan
Det fanns alltså två klasser som jag ansåg hade lite för hög komplexitet och därför vill jag nu försöka att sänka den även i klassen Game. Det tänker jag göra genom att slå ihop vinnarmeddelandet med att setWinner. Det känns som onödig kod att ha och därför tänker jag förenkla för att förbättra och på det viset göra en bättre kodkvalitet.

##### Analys

<table class=\"table\">
    <thead>
        <tr>
            <th>Game</th>
            <th>PHPmetrics - Innan</th>
            <th>PHPmetrics - Efter</th>
            <th>Scrutinizer - Innan</th>
            <th>Scrutinizer - Efter</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Size</td>
            <td>81</td>
            <td>71</td>
            <td>140</td>
            <td>126</td>
        </tr>
        <tr>
            <td>Complexity</td>
            <td>12</td>
            <td>10</td>
            <td>20</td>
            <td>17</td>
        </tr>
    </tbody>
</table>

Även här kan vi se att värdena på komplexiteten har minskat. Det betyder att den kod som jag rensade bort och snyggade till inte gjorde någon nytta utan endast gjorde saker mer komplexa. Jag är inte förvånad över att värdena har förändrats utan det var tvärtemot, förväntat.

3. **Minska EC-coupling i GameController**
##### Innan
I GameController finns många EC-couplings, det vill säga att klassen är beroende av andra klasser i hög utsträckning. Jag vill försöka minska på EC genom att ta bort kopplingar som inte används. Det kommer att förändra coupling-värdet i phpmetrics och eventuellt göra klassens Maintainability index högre. 

##### Analys
Skillnaden i phpmetrics efter att jag bara gjort det här var näst intill obefintlig. Jag tog bort importer i GameController, tre stycken. Men jag kan inte se att det påverkade resultatet på något vis. Först hade Maintainability Index ökat något till 82.56 från 81.26 men när jag körde composer phpmetrics en gång till så var det tillbaka igen. Det här tolkar jag som att mitt öga för vad som var en förbättring inte var det. Det som dock hände var att jag fick städat i koden, jag tog bort kodrader som inte används. Vilket ju borde synas på size. Men det kan jag inte se, inte i phpmetrics. 

#### Sammanfattning av resultaten innan och efter

Det som har hänt när jag har gjort mina förbättringar är följande när jag kollar på overview i Phpmetrics. Det går att se att antal kodrader har minskat, genomsnittet av cyclomatic complexity har minskat från 3.04 till 2.77 samt att en gul ring har blivit grön.

Innan
<img src=\"img/phpmetrics-before.png\" alt=\"phpmetrics-before\" width=\"400\" />
<img src=\"img/phpmetrics-start-after.png\" alt=\"phpmetrics-start-after\" width=\"400\" />
Efter

Kollar vi i Scrutinizer så ser vi följande när vi kollar på första sidan. Poängen har höjts till 10 men code coverage har sänkts till 22%. Det var intressant men jag har klurat ut varför. Det var så att när jag tog bort kod från klassen Game så blev några tester överflödiga för den klassen, jag tog bort de överflödiga testerna och därför blev andelen kodrader i namespacet App/Card färre och procenten blev lägre. Jag har inte gjort några andra justeringar i testerna men det här är svaret.

Innan
<img src=\"img/scrutinizer-points.png\" alt=\"scrutinizer-before\" width=\"400\" />
<img src=\"img/scrutinizer-points-after.png\" alt=\"scrutinizer-after\" width=\"250\" />
Efter";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "improvements.markdown.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("#### Förbättringar

Jag kommer att försöka göra tre förbättringar utifrån vad jag har upptäckt i phpmetrics och scrutinizer. Först kommer jag att göra en analys på vad jag tror kommer hända efter att jag genomfört dem och därefter implementera förbättringarna samt analysera hur resultatet blev i phpmetrics och scrutinizer. De förbättringarna jag kommer göra är att minska komplexiteten i klassen Deck, minska komplexiteten i klassen Game samt att minska EC-coupling i klassen GameController.

1. **Minska komplexiteten i Deck**
##### Innan
Utifrån rapporterna om kodkvaliteten så kunde jag se att klassen Deck hade en komplexitet som jag tror skulle kunna minskas. Det jag har tänkte göra är att minska komplexiteten i konstruktorn, jag tror att den koden skulle kunna göras på ett enklare sätt och det tror jag kommer påverka värdet för klassen Decks komplexitet så att det blir lägre. 

##### Analys

<table class=\"table\">
    <thead>
        <tr>
            <th>Deck</th>
            <th>PHPmetrics - Innan</th>
            <th>PHPmetrics - Efter</th>
            <th>Scrutinizer - Innan</th>
            <th>Scrutinizer - Efter</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Size</td>
            <td>47</td>
            <td>39</td>
            <td>69</td>
            <td>61</td>
        </tr>
        <tr>
            <td>Complexity</td>
            <td>10</td>
            <td>5</td>
            <td>13</td>
            <td>8</td>
        </tr>
    </tbody>
</table>

Jag ändrade koden i konstruktorn i Deck vilket gjorde att jag kunde byta ut if, elseif och elseif mot en foreach-loop. Det tog bort en del komplexitet. Här ovan kan ni se att både storleken och komplexiteten har minskat i både Phpmetrics och Scrutinizer. 
Här nedan kan ni också se att konstruktorn i Deck har gått från betyg B till betyg A. Det gjorde också att helhetsbetyget gick från 9.96 till 10.

<img src=\"img/deckfix.png\" alt=\"deckfix\" width=\"400\" />

2. **Minska komplexiteten i Game**
##### Innan
Det fanns alltså två klasser som jag ansåg hade lite för hög komplexitet och därför vill jag nu försöka att sänka den även i klassen Game. Det tänker jag göra genom att slå ihop vinnarmeddelandet med att setWinner. Det känns som onödig kod att ha och därför tänker jag förenkla för att förbättra och på det viset göra en bättre kodkvalitet.

##### Analys

<table class=\"table\">
    <thead>
        <tr>
            <th>Game</th>
            <th>PHPmetrics - Innan</th>
            <th>PHPmetrics - Efter</th>
            <th>Scrutinizer - Innan</th>
            <th>Scrutinizer - Efter</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Size</td>
            <td>81</td>
            <td>71</td>
            <td>140</td>
            <td>126</td>
        </tr>
        <tr>
            <td>Complexity</td>
            <td>12</td>
            <td>10</td>
            <td>20</td>
            <td>17</td>
        </tr>
    </tbody>
</table>

Även här kan vi se att värdena på komplexiteten har minskat. Det betyder att den kod som jag rensade bort och snyggade till inte gjorde någon nytta utan endast gjorde saker mer komplexa. Jag är inte förvånad över att värdena har förändrats utan det var tvärtemot, förväntat.

3. **Minska EC-coupling i GameController**
##### Innan
I GameController finns många EC-couplings, det vill säga att klassen är beroende av andra klasser i hög utsträckning. Jag vill försöka minska på EC genom att ta bort kopplingar som inte används. Det kommer att förändra coupling-värdet i phpmetrics och eventuellt göra klassens Maintainability index högre. 

##### Analys
Skillnaden i phpmetrics efter att jag bara gjort det här var näst intill obefintlig. Jag tog bort importer i GameController, tre stycken. Men jag kan inte se att det påverkade resultatet på något vis. Först hade Maintainability Index ökat något till 82.56 från 81.26 men när jag körde composer phpmetrics en gång till så var det tillbaka igen. Det här tolkar jag som att mitt öga för vad som var en förbättring inte var det. Det som dock hände var att jag fick städat i koden, jag tog bort kodrader som inte används. Vilket ju borde synas på size. Men det kan jag inte se, inte i phpmetrics. 

#### Sammanfattning av resultaten innan och efter

Det som har hänt när jag har gjort mina förbättringar är följande när jag kollar på overview i Phpmetrics. Det går att se att antal kodrader har minskat, genomsnittet av cyclomatic complexity har minskat från 3.04 till 2.77 samt att en gul ring har blivit grön.

Innan
<img src=\"img/phpmetrics-before.png\" alt=\"phpmetrics-before\" width=\"400\" />
<img src=\"img/phpmetrics-start-after.png\" alt=\"phpmetrics-start-after\" width=\"400\" />
Efter

Kollar vi i Scrutinizer så ser vi följande när vi kollar på första sidan. Poängen har höjts till 10 men code coverage har sänkts till 22%. Det var intressant men jag har klurat ut varför. Det var så att när jag tog bort kod från klassen Game så blev några tester överflödiga för den klassen, jag tog bort de överflödiga testerna och därför blev andelen kodrader i namespacet App/Card färre och procenten blev lägre. Jag har inte gjort några andra justeringar i testerna men det här är svaret.

Innan
<img src=\"img/scrutinizer-points.png\" alt=\"scrutinizer-before\" width=\"400\" />
<img src=\"img/scrutinizer-points-after.png\" alt=\"scrutinizer-after\" width=\"250\" />
Efter", "improvements.markdown.twig", "/Users/agnes/dbwebb-kurser/mvc/me/report/templates/improvements.markdown.twig");
    }
}
