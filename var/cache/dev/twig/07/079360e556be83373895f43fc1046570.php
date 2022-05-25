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

/* proj/proj.html.twig */
class __TwigTemplate_82844c25feb5030f0764893362e3972c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "proj/baseProj.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj/proj.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj/proj.html.twig"));

        $this->parent = $this->loadTemplate("proj/baseProj.html.twig", "proj/proj.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"container1 container\">
        <h1 class=\"rubrik\">God utbildning för alla</h1>
        <h3 class=\"underrubrik\">-Mål 4</h3>
    <div class=\"text1\">
        <p>Det globala målet nummer 4 handlar om att säkerställa en inkluderande och likvärdig utbildning av god kvalitet och främja livslångt lärande för alla.</p>
    </div>
    <div class=\"text2\">
        <p>Utbildade medborgare gör samhället mer demokratiskt och det stärker även välstånd, hälsa och jämställdhet.</p>
    </div>
    <div class=\"citat1\">
        <cite>Utbildning är nyckeln till välstånd och öppnar en värld av möjligheter som gör det möjligt för var och en av oss att bidra till ett hållbart samhälle. </cite><a href=\"https://www.globalamalen.se/om-globala-malen/mal-4-god-utbildning-alla/\">(globalamalen.se)</a>
    </div>
    <div class=\"image\">
        <img src=\"img/education.jpg\" alt=\"education\">
    </div>
    <div class=\"rubrik2\">
        <h3>Trygga utbildningsmiljöer</h3>
    </div>
    <div class=\"text3\">
        <p>Ett av delmålen är att ha inkluderande och trygga utbildningsmiljöer. Andelen elever som upplevt mobbning någon gång under de senaste månaderna har mellan 2014 – 2018 ökat med 6.8% och elever som upplevt mobbning 2-3 gånger i månaden eller fler har ökat med 3.1% inom samma tidsperiod.</p>
    </div>
    <div class=\"citat2\">
        <cite>– Mobbningen har ökat i Sverige de senaste åren och vi har halkat efter från att ha varit ett föregångsland. Som det ser ut nu lever inte Sverige upp till barnkonventionen och barns rättigheter till en värld fri från våld, <a href=\"https://www.lararen.se/nyheter/mobbning/en-av-fyra-utsatta-for-krankningar-i-skolan\">säger Maria Loodberg, sakkunnig på Friends.</a></cite>
    </div>
    <div class=\"diagram1\">
        <h4>Elever som upplevt mobbing de senaste månaderna, genomsnitt för 11-, 13- och 15-åringar, i procent.</h4>
        ";
        // line 30
        echo $this->extensions['Symfony\UX\Chartjs\Twig\ChartExtension']->renderChart($this->env, (isset($context["chart1"]) || array_key_exists("chart1", $context) ? $context["chart1"] : (function () { throw new RuntimeError('Variable "chart1" does not exist.', 30, $this->source); })()), ["class" => "my-chart"]);
        echo "
        <p>Källa: Skolbarns hälsovanor, Folkhälsomyndigheten.</p>
    </div>
    <div class=\"diagram2\">
        <h4>Elever som upplevt mobbning 2–3 gånger i månaden eller oftare under de senaste månaderna, genomsnittet för 11-,13-, och 15-åringar, i procent.</h4>
        ";
        // line 35
        echo $this->extensions['Symfony\UX\Chartjs\Twig\ChartExtension']->renderChart($this->env, (isset($context["chart2"]) || array_key_exists("chart2", $context) ? $context["chart2"] : (function () { throw new RuntimeError('Variable "chart2" does not exist.', 35, $this->source); })()), ["class" => "my-chart"]);
        echo "
        <p>Källa: Skolbarns hälsovanor, Folkhälsomyndigheten.</p>
    </div>
    <div class=\"rubrik3\">
        <h3>Öka antalet personer med färdigheter för ekonomisk trygghet</h3>
    </div>
    <div class=\"text4\">
        <p>Idag lever vi i ett samhälle där den digitala världen är en stor del av hur lever, på gott och ont. Det kräver därför att befolkningen har kunskap och färdigheter för att ha möjlighet att navigera i det digitala samhället. Som ett delmål i målet med god utbildning för alla finns att öka antal personer med relevanta färdigheter och ett exempel på sådana är just digitala färdigheter.</p>
        <p>Det finns stor skillnad inom befolkningen kring vilka som har använt sig av olika digitala färdigheter (från 2017). Den stora skillnaden ligger främst i ålder, tittar vi till exempel på hur stor andel av befolkningen som har flyttat filer från dator till andra enheter så skiljer det 46% mellan åldersgrupperna 25-34 år samt 65-74 år, där de yngre har fler som använt den digitala färdigheten.</p>
    </div>
    <div class=\"diagram3\">
        <h4>Digitala färdigheter - Andel personer i åldern 16–74. År 2017</h4>
        ";
        // line 47
        echo $this->extensions['Symfony\UX\Chartjs\Twig\ChartExtension']->renderChart($this->env, (isset($context["chart3"]) || array_key_exists("chart3", $context) ? $context["chart3"] : (function () { throw new RuntimeError('Variable "chart3" does not exist.', 47, $this->source); })()), ["class" => "my-chart"]);
        echo "
        <p>Källa: Befolkningens IT-användning, SCB</p>
    </div>
    <div class=\"labels\">
        <ol>
            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["labels3"]) || array_key_exists("labels3", $context) ? $context["labels3"] : (function () { throw new RuntimeError('Variable "labels3" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
            // line 53
            echo "            <li>";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </ol>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "proj/proj.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 55,  131 => 53,  127 => 52,  119 => 47,  104 => 35,  96 => 30,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"proj/baseProj.html.twig\" %}

{% block content %}
<div class=\"container1 container\">
        <h1 class=\"rubrik\">God utbildning för alla</h1>
        <h3 class=\"underrubrik\">-Mål 4</h3>
    <div class=\"text1\">
        <p>Det globala målet nummer 4 handlar om att säkerställa en inkluderande och likvärdig utbildning av god kvalitet och främja livslångt lärande för alla.</p>
    </div>
    <div class=\"text2\">
        <p>Utbildade medborgare gör samhället mer demokratiskt och det stärker även välstånd, hälsa och jämställdhet.</p>
    </div>
    <div class=\"citat1\">
        <cite>Utbildning är nyckeln till välstånd och öppnar en värld av möjligheter som gör det möjligt för var och en av oss att bidra till ett hållbart samhälle. </cite><a href=\"https://www.globalamalen.se/om-globala-malen/mal-4-god-utbildning-alla/\">(globalamalen.se)</a>
    </div>
    <div class=\"image\">
        <img src=\"img/education.jpg\" alt=\"education\">
    </div>
    <div class=\"rubrik2\">
        <h3>Trygga utbildningsmiljöer</h3>
    </div>
    <div class=\"text3\">
        <p>Ett av delmålen är att ha inkluderande och trygga utbildningsmiljöer. Andelen elever som upplevt mobbning någon gång under de senaste månaderna har mellan 2014 – 2018 ökat med 6.8% och elever som upplevt mobbning 2-3 gånger i månaden eller fler har ökat med 3.1% inom samma tidsperiod.</p>
    </div>
    <div class=\"citat2\">
        <cite>– Mobbningen har ökat i Sverige de senaste åren och vi har halkat efter från att ha varit ett föregångsland. Som det ser ut nu lever inte Sverige upp till barnkonventionen och barns rättigheter till en värld fri från våld, <a href=\"https://www.lararen.se/nyheter/mobbning/en-av-fyra-utsatta-for-krankningar-i-skolan\">säger Maria Loodberg, sakkunnig på Friends.</a></cite>
    </div>
    <div class=\"diagram1\">
        <h4>Elever som upplevt mobbing de senaste månaderna, genomsnitt för 11-, 13- och 15-åringar, i procent.</h4>
        {{ render_chart(chart1, {'class': 'my-chart'}) }}
        <p>Källa: Skolbarns hälsovanor, Folkhälsomyndigheten.</p>
    </div>
    <div class=\"diagram2\">
        <h4>Elever som upplevt mobbning 2–3 gånger i månaden eller oftare under de senaste månaderna, genomsnittet för 11-,13-, och 15-åringar, i procent.</h4>
        {{ render_chart(chart2, {'class': 'my-chart'}) }}
        <p>Källa: Skolbarns hälsovanor, Folkhälsomyndigheten.</p>
    </div>
    <div class=\"rubrik3\">
        <h3>Öka antalet personer med färdigheter för ekonomisk trygghet</h3>
    </div>
    <div class=\"text4\">
        <p>Idag lever vi i ett samhälle där den digitala världen är en stor del av hur lever, på gott och ont. Det kräver därför att befolkningen har kunskap och färdigheter för att ha möjlighet att navigera i det digitala samhället. Som ett delmål i målet med god utbildning för alla finns att öka antal personer med relevanta färdigheter och ett exempel på sådana är just digitala färdigheter.</p>
        <p>Det finns stor skillnad inom befolkningen kring vilka som har använt sig av olika digitala färdigheter (från 2017). Den stora skillnaden ligger främst i ålder, tittar vi till exempel på hur stor andel av befolkningen som har flyttat filer från dator till andra enheter så skiljer det 46% mellan åldersgrupperna 25-34 år samt 65-74 år, där de yngre har fler som använt den digitala färdigheten.</p>
    </div>
    <div class=\"diagram3\">
        <h4>Digitala färdigheter - Andel personer i åldern 16–74. År 2017</h4>
        {{ render_chart(chart3, {'class': 'my-chart'}) }}
        <p>Källa: Befolkningens IT-användning, SCB</p>
    </div>
    <div class=\"labels\">
        <ol>
            {% for label in labels3 %}
            <li>{{ label }}</li>
            {% endfor %}
        </ol>
    </div>
</div>

{% endblock %}", "proj/proj.html.twig", "/Users/agnes/dbwebb-kurser/mvc/me/report/templates/proj/proj.html.twig");
    }
}
