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

/* introduction.markdown.twig */
class __TwigTemplate_ad1515fd0b94bbf681dc04e1923a632d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "introduction.markdown.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "introduction.markdown.twig"));

        // line 1
        echo "### Introduktion

De fyra C:na är några av de mätvärden som går att utläsa när man undersöker kodkvaliteten. Här nedan tänker jag beskriva de fyra C:na och ge exempel från min egen kod. 

#### Coverage
Code Coverage är ett sätt att mäta hur många kodrader som exekveras när tester på koden körs. Det vill säga är det 100% code coverage så exekveras alla rader kod i koden när testerna körs medan om det saknas tester eller att testerna inte exekverar alla rader kod i koden så kommer code coverage att ha en lägre procent. Att ha en hög code coverage skulle kunna betyda att koden har mindre risk för oupptäckta buggar. Jag har läst på om det här på [den här sidan](https://en.wikipedia.org/wiki/Code_coverage).

<img src=\"img/coverage.png\" alt=\"coverage\" width=\"600\" />

Här är ett exempel på min code coverage från Scrutinizer (9/5-2022) och det den visar är vilken del av min kod som har hur stor code coverage. Jag har med andra ord en 24.3% code coverage och det syns att den code coverage som finns är från mappen Card. I den mappen finns den kod som vi under kursen har skrivit test till och därför är det inte särskilt konstigt att just den har en hög code coverage. De andra mapparna med klasser har vi inte skrivit tester till och därför är självklart code coverage låg i dessa. Dice har några procent och det är för att det är den mappen som vi gjorde övningstester till i föreläsningarna. Siffran 24.3% säger alltså att det inte är särskilt hög code coverage men det säger egentligen ingenting om fördelningen av tester om man inte går in och tittar djupare. 

#### Complexity
Cyclomatic complexity är det som beskriver komplexiteten i koden. Med det menas hur många av till exempel if, else, for-loop som existerar i en del av koden till exempel en klass eller funktion. Det finns olika siffror som säger vad som är en rimlig komplexitet, en siffra som vi har pratat om är att den ska försöka ligga under 10. Det går även att se flera mått på [den här sidan](https://en.wikipedia.org/wiki/Cyclomatic_complexity).

<img src=\"img/complexity2.png\" alt=\"complexity\" width=\"800\" />

Här ser ni ett exempel på min Cyclomatic complexity från Scrutinizer (9/5-2022). Den visar att i klassen App/Card/Game så är komplexiteten 20. Ju lägre komplexiteten är desto mindre borde risken vara att något går fel. Så att ha en lägre ger väl ett visst mått på kodkvaliteten skulle jag säga.

#### Cohesion
Cohesion handlar om att beskriva huruvida alla delar i en klass hör ihop eller inte. Ett högt cohesion-värde betyder att det finns en stark koppling mellan alla delar i klassen medan ett lågt cohesion betyder att delarna inte har en stark koppling till varandra. Det här kommer från att man vill försöka få alla klasser och funktioner att endast ha ett ansvar, för det i sin tur ger en säkrare och mer lätthanterlig kod. Det som kan bli förvirrande när vi kollar på Php metrics är att det ger ett värde av LCOM vilket står för Lack of Cohesions of Methods och det ger en 0 om cohesion är hög och 1 om cohesion är låg. Det här blir alltså förvirrande att när vi letar värdet så vill vi se låga nummer för det betyder hög cohesion. [Här](https://blog.ndepend.com/lack-of-cohesion-methods/) har jag läst mer om cohesion. 

<img src=\"img/cohesion.png\" alt=\"cohesion\" width=\"400\" />
<img src=\"img/cohesion2.png\" alt=\"cohesion2\" width=\"400\" />

Här kan ni se ett exempel på hur php metrics har satt LCOM på min kod. Jag har allt mellan 0 till 4 och det betyder att jag antagligen skulle kunna skapa än mer cohesiva klasser. Koden fungerar men det här ger en indikation på att kodkvaliteten skulle kunna bli ännu bättre. 

#### Coupling
Det fjärde och sista C:et är Coupling som handlar om hur tajt kopplade olika klasser är med varandra. Det mest eftersträvansvärda är att ha en lös/låg koppling mellan klasserna och det är till exempel för att göra koden mer lättunderhållen. För om en klass är hårt kopplad så kan det vara så att om man ändrar i den klassen så påverkar det de andra klasserna också och då blir det mer jobb för att fixa. Det finns olika typer av coupling: Afferent coupling (AC) och Efferent coupling (EC) varav det första är ett värde på hur många klasser som den klassen använder sig av och det andra kan man säga är ett värde på hur många andra klasser som använder sig av den berörda klassen. Det går att läsa mer om Coupling [här](https://en.wikipedia.org/wiki/Coupling_%28computer_programming%29). Nedan ser ni två bilder den första sorterat på AC och den andra sorterat på EC.

###### Afferent coupling (AC)
<img src=\"img/coupling.png\" alt=\"coupling\" width=\"800\" />

###### Efferent coupling (EC)
<img src=\"img/coupling2.png\" alt=\"coupling2\" width=\"800\" />

Det går här att se att det främst är Controller-klasserna som har en hög EC vilket betyder att kopplingen är stark där. Jag tänker att det här värdet kan vara ett bra sätt att se på kodkvalitet. Bra kodkvalitet tänker jag kan vara viktigt just när det kommer till att skriva kod som är enkelt att uppdatera och underhålla.";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "introduction.markdown.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("### Introduktion

De fyra C:na är några av de mätvärden som går att utläsa när man undersöker kodkvaliteten. Här nedan tänker jag beskriva de fyra C:na och ge exempel från min egen kod. 

#### Coverage
Code Coverage är ett sätt att mäta hur många kodrader som exekveras när tester på koden körs. Det vill säga är det 100% code coverage så exekveras alla rader kod i koden när testerna körs medan om det saknas tester eller att testerna inte exekverar alla rader kod i koden så kommer code coverage att ha en lägre procent. Att ha en hög code coverage skulle kunna betyda att koden har mindre risk för oupptäckta buggar. Jag har läst på om det här på [den här sidan](https://en.wikipedia.org/wiki/Code_coverage).

<img src=\"img/coverage.png\" alt=\"coverage\" width=\"600\" />

Här är ett exempel på min code coverage från Scrutinizer (9/5-2022) och det den visar är vilken del av min kod som har hur stor code coverage. Jag har med andra ord en 24.3% code coverage och det syns att den code coverage som finns är från mappen Card. I den mappen finns den kod som vi under kursen har skrivit test till och därför är det inte särskilt konstigt att just den har en hög code coverage. De andra mapparna med klasser har vi inte skrivit tester till och därför är självklart code coverage låg i dessa. Dice har några procent och det är för att det är den mappen som vi gjorde övningstester till i föreläsningarna. Siffran 24.3% säger alltså att det inte är särskilt hög code coverage men det säger egentligen ingenting om fördelningen av tester om man inte går in och tittar djupare. 

#### Complexity
Cyclomatic complexity är det som beskriver komplexiteten i koden. Med det menas hur många av till exempel if, else, for-loop som existerar i en del av koden till exempel en klass eller funktion. Det finns olika siffror som säger vad som är en rimlig komplexitet, en siffra som vi har pratat om är att den ska försöka ligga under 10. Det går även att se flera mått på [den här sidan](https://en.wikipedia.org/wiki/Cyclomatic_complexity).

<img src=\"img/complexity2.png\" alt=\"complexity\" width=\"800\" />

Här ser ni ett exempel på min Cyclomatic complexity från Scrutinizer (9/5-2022). Den visar att i klassen App/Card/Game så är komplexiteten 20. Ju lägre komplexiteten är desto mindre borde risken vara att något går fel. Så att ha en lägre ger väl ett visst mått på kodkvaliteten skulle jag säga.

#### Cohesion
Cohesion handlar om att beskriva huruvida alla delar i en klass hör ihop eller inte. Ett högt cohesion-värde betyder att det finns en stark koppling mellan alla delar i klassen medan ett lågt cohesion betyder att delarna inte har en stark koppling till varandra. Det här kommer från att man vill försöka få alla klasser och funktioner att endast ha ett ansvar, för det i sin tur ger en säkrare och mer lätthanterlig kod. Det som kan bli förvirrande när vi kollar på Php metrics är att det ger ett värde av LCOM vilket står för Lack of Cohesions of Methods och det ger en 0 om cohesion är hög och 1 om cohesion är låg. Det här blir alltså förvirrande att när vi letar värdet så vill vi se låga nummer för det betyder hög cohesion. [Här](https://blog.ndepend.com/lack-of-cohesion-methods/) har jag läst mer om cohesion. 

<img src=\"img/cohesion.png\" alt=\"cohesion\" width=\"400\" />
<img src=\"img/cohesion2.png\" alt=\"cohesion2\" width=\"400\" />

Här kan ni se ett exempel på hur php metrics har satt LCOM på min kod. Jag har allt mellan 0 till 4 och det betyder att jag antagligen skulle kunna skapa än mer cohesiva klasser. Koden fungerar men det här ger en indikation på att kodkvaliteten skulle kunna bli ännu bättre. 

#### Coupling
Det fjärde och sista C:et är Coupling som handlar om hur tajt kopplade olika klasser är med varandra. Det mest eftersträvansvärda är att ha en lös/låg koppling mellan klasserna och det är till exempel för att göra koden mer lättunderhållen. För om en klass är hårt kopplad så kan det vara så att om man ändrar i den klassen så påverkar det de andra klasserna också och då blir det mer jobb för att fixa. Det finns olika typer av coupling: Afferent coupling (AC) och Efferent coupling (EC) varav det första är ett värde på hur många klasser som den klassen använder sig av och det andra kan man säga är ett värde på hur många andra klasser som använder sig av den berörda klassen. Det går att läsa mer om Coupling [här](https://en.wikipedia.org/wiki/Coupling_%28computer_programming%29). Nedan ser ni två bilder den första sorterat på AC och den andra sorterat på EC.

###### Afferent coupling (AC)
<img src=\"img/coupling.png\" alt=\"coupling\" width=\"800\" />

###### Efferent coupling (EC)
<img src=\"img/coupling2.png\" alt=\"coupling2\" width=\"800\" />

Det går här att se att det främst är Controller-klasserna som har en hög EC vilket betyder att kopplingen är stark där. Jag tänker att det här värdet kan vara ett bra sätt att se på kodkvalitet. Bra kodkvalitet tänker jag kan vara viktigt just när det kommer till att skriva kod som är enkelt att uppdatera och underhålla.", "introduction.markdown.twig", "/Users/agnes/dbwebb-kurser/mvc/me/report/templates/introduction.markdown.twig");
    }
}
