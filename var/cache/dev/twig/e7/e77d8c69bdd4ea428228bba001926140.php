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

/* default/footwear.html.twig */
class __TwigTemplate_7eb0e9bcbf165e3f4ab2902c9e5b4c8c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/footwear.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/footwear.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>footwear</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
        integrity=\"sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"Style.css\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Skranjidisplay=swap\" rel=\"stylesheet\">
</head>

\t<body>
\t<div class=\"row\" style=\"margin-top:20px;\">
\t\t";
        // line 19
        echo "\t\t";
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "snippet", "header");
        echo "

\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["objects"]) || array_key_exists("objects", $context) ? $context["objects"] : (function () { throw new RuntimeError('Variable "objects" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 22
            echo "\t\t<div class=\"col-md-3\">
    \t<div style=\"border:solid black;margin-top:20px;\"align=\"center;\">
        \t    <img class=\"rounded mx-auto d-block\" src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getProductImage", [], "method", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "\"style=\"height:300px; width:250px;margin-top:20px;\" align=\"center\"/><br>
            \t<h3 align=\"center\"style=\"color:green\">Price :";
            // line 25
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getPrice", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo " </h3>
            \t<p style=\"height:100px; widht:100px;margin-top:20px;\" align=\"center\" >
\t               ";
            // line 27
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getDescription", [], "method", false, false, true, 27), 27, $this->source), "html", null, true);
            echo " </p>
    \t     </div>
      \t</div>
    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t\t\t
\t\t\t\t\t";
        // line 40
        echo "\t\t\t\t\t\t\t\t\t";
        // line 50
        echo "\t\t";
        // line 51
        echo "\t\t";
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "snippet", "footer");
        echo "
    </body>
</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default/footwear.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 51,  102 => 50,  100 => 40,  97 => 31,  87 => 27,  82 => 25,  78 => 24,  74 => 22,  70 => 21,  64 => 19,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>footwear</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
        integrity=\"sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"Style.css\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Skranjidisplay=swap\" rel=\"stylesheet\">
</head>

\t<body>
\t<div class=\"row\" style=\"margin-top:20px;\">
\t\t{# header snippet#}
\t\t{{ pimcore_snippet(\"header\") }}

\t\t{% for object in objects %}
\t\t<div class=\"col-md-3\">
    \t<div style=\"border:solid black;margin-top:20px;\"align=\"center;\">
        \t    <img class=\"rounded mx-auto d-block\" src=\"{{ object.getProductImage() }}\"style=\"height:300px; width:250px;margin-top:20px;\" align=\"center\"/><br>
            \t<h3 align=\"center\"style=\"color:green\">Price :{{ object.getPrice}} </h3>
            \t<p style=\"height:100px; widht:100px;margin-top:20px;\" align=\"center\" >
\t               {{object.getDescription()}} </p>
    \t     </div>
      \t</div>
    \t{% endfor %}
\t\t\t\t\t
\t\t\t\t\t{# <div class=\"col\">
\t\t\t\t\t\t<div class=\"card shadow-sm\" style=\"width: 25rem;\">
\t\t\t\t\t\t\t<div class=\"card-body\" >
\t\t\t\t\t\t\t\t<img src=\"{{ object.getProductImage() }} \" alt=\"tv1\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225px\">
\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t{{ object.getDescription() }}
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<h5>Price:{{ object.getPrice }}</h5> #}
\t\t\t\t\t\t\t\t\t{# <div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-secondary\">Buy</button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Add to Cart</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t    \t\t\t<small class=\"text-muted\">9 mins</small>
\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>#}
\t\t{# header snippet#}
\t\t{{ pimcore_snippet(\"footer\") }}
    </body>
</html>

", "default/footwear.html.twig", "/var/www/html/test/pimProject/templates/default/footwear.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 21);
        static $filters = array("escape" => 24);
        static $functions = array("pimcore_snippet" => 19);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
                ['pimcore_snippet']
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
