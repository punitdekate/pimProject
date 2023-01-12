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

/* default/beauty.html.twig */
class __TwigTemplate_067349a4eba4137e604b8e549c08fe3e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/beauty.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/beauty.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>beauty</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
        integrity=\"sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"Style.css\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Skranjidisplay=swap\" rel=\"stylesheet\">
</head>

\t<body>
\t\t";
        // line 18
        echo "\t\t";
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "snippet", "header");
        echo "

\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row-my-2 \">
            \t<label>
                \t<h1 style=\"font-family:'Skranji', cursive\">Beauty</h1>
            \t</label>
        \t</div>

\t\t\t<div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["objects"]) || array_key_exists("objects", $context) ? $context["objects"] : (function () { throw new RuntimeError('Variable "objects" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 29
            echo "                    ";
            // line 36
            echo "\t\t\t\t\t
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"card shadow-sm\" style=\"width: 25rem;\">
\t\t\t\t\t\t\t<div class=\"card-body\" >
\t\t\t\t\t\t\t\t<img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getProductImage", [], "method", false, false, true, 40), 40, $this->source), "html", null, true);
            echo " \" alt=\"tv1\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225px\">
\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t<h3>";
            // line 42
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getDescription", [], "method", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<h5>Price:";
            // line 44
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getPrice", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t\t";
            // line 52
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t</div>
\t\t</div>
\t\t";
        // line 59
        echo "\t\t";
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "snippet", "footer");
        echo "
    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default/beauty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 59,  112 => 56,  103 => 52,  99 => 44,  94 => 42,  89 => 40,  83 => 36,  81 => 29,  77 => 28,  63 => 18,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>beauty</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
        integrity=\"sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"Style.css\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Skranjidisplay=swap\" rel=\"stylesheet\">
</head>

\t<body>
\t\t{# header snippet#}
\t\t{{ pimcore_snippet(\"header\") }}

\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row-my-2 \">
            \t<label>
                \t<h1 style=\"font-family:'Skranji', cursive\">Beauty</h1>
            \t</label>
        \t</div>

\t\t\t<div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
\t\t\t\t{% for object in objects %}
                    {# <div class=\"card\" style=\"width: 18rem;\">
                        <img src=\"{{ object.getProductImage() }}\" class=\"card-img-top\"  width=\"100%\" height=\"225px\">
                        <div class=\"card-text\">
                            <h5 class=\"card-title\">{{ object.getDescription() }}</h5>
                            Price:{{ object.getPrice }}<h2>
                        </div>
                    </div> #}
\t\t\t\t\t
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"card shadow-sm\" style=\"width: 25rem;\">
\t\t\t\t\t\t\t<div class=\"card-body\" >
\t\t\t\t\t\t\t\t<img src=\"{{ object.getProductImage() }} \" alt=\"tv1\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225px\">
\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t<h3>{{ object.getDescription() }}</h3>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<h5>Price:{{ object.getPrice }}</h5>
\t\t\t\t\t\t\t\t\t{# <div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-secondary\">Buy</button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Add to Cart</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t    \t\t\t<small class=\"text-muted\">9 mins</small>
\t\t\t\t\t\t\t\t\t</div> #}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t\t{# header snippet#}
\t\t{{ pimcore_snippet(\"footer\") }}
    </body>
</html>", "default/beauty.html.twig", "/var/www/html/test/pimProject/templates/default/beauty.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 28);
        static $filters = array("escape" => 40);
        static $functions = array("pimcore_snippet" => 18);

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
