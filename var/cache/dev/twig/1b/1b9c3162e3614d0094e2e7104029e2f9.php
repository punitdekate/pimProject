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

/* @PimcoreCore/Targeting/toolbar/icon/toolbar-collapse.svg.twig */
class __TwigTemplate_43b8ad6d81360e884e1223e10204b7c6 extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCore/Targeting/toolbar/icon/toolbar-collapse.svg.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCore/Targeting/toolbar/icon/toolbar-collapse.svg.twig"));

        // line 2
        echo "<svg version=\"1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 48 48\" enable-background=\"new 0 0 48 48\">
    <polygon fill=\"#AAAAAA\" points=\"30.9,43 34,39.9 18.1,24 34,8.1 30.9,5 12,24\"/>
</svg>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreCore/Targeting/toolbar/icon/toolbar-collapse.svg.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# original file: previous.svg from Pimcore's icon set #}
<svg version=\"1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 48 48\" enable-background=\"new 0 0 48 48\">
    <polygon fill=\"#AAAAAA\" points=\"30.9,43 34,39.9 18.1,24 34,8.1 30.9,5 12,24\"/>
</svg>
", "@PimcoreCore/Targeting/toolbar/icon/toolbar-collapse.svg.twig", "/var/www/html/test/pimProject/vendor/pimcore/pimcore/bundles/CoreBundle/Resources/views/Targeting/toolbar/icon/toolbar-collapse.svg.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
