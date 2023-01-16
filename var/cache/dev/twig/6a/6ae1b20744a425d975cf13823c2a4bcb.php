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

/* default/electronics.html.twig */
class __TwigTemplate_55ca9297fe5578b7e373ffa6899a30a2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/electronics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/electronics.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<<<<<<< HEAD
    <title>Speed for life</title>
=======
    <title>electronics</title>
>>>>>>> 256d15e6350525394dfdc17d6ff4023486afb9f0
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
        integrity=\"sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"Style.css\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Skranjidisplay=swap\" rel=\"stylesheet\">
</head>

<<<<<<< HEAD
<body>
<div class=\"container\">

\t\t\t<div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
\t\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["objects"]) || array_key_exists("objects", $context) ? $context["objects"] : (function () { throw new RuntimeError('Variable "objects" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 21
            echo "                    <div class=\"card\" style=\"width: 18rem;\">
                        <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getProductImage", [], "method", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "\" class=\"card-img-top\"  width=\"100%\" height=\"225px\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 24
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getDescription", [], "method", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "</h5>
                            Price:";
            // line 25
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getPrice", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "<h2>
                        </div>
                    </div>
\t\t\t\t\t
\t\t\t\t\t";
            // line 48
            echo "\t\t\t\t";
=======
\t<body>
\t\t<div class=\"row\" style=\"margin-top:20px;\">
\t\t";
        // line 19
        echo "\t\t";
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "snippet", "header");
        echo "
\t\t<div class=\"d-flex flex-row-reverse\">
\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">Filters</div>
        \t<button type=\"button\" class=\"btn btn-primary\">Left</button>
        \t<button type=\"button\" class=\"btn btn-primary\">Middle</button>
        \t<button type=\"button\" class=\"btn btn-primary\">Right</button>
        \t</div>
\t\t</div>

\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["objects"]) || array_key_exists("objects", $context) ? $context["objects"] : (function () { throw new RuntimeError('Variable "objects" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 29
            echo "\t\t<div class=\"col-md-3\">
    \t<div style=\"border:solid black;margin-top:20px;\"align=\"center;\">
        \t    <img class=\"rounded mx-auto d-block\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getProductImage", [], "method", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "\"style=\"height:300px; width:300px;margin-top:20px;\" align=\"center\"/><br>
            \t<h3 align=\"center\"style=\"color:green\">Price :";
            // line 32
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getPrice", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo " </h3>
            \t<p style=\"height:100px; widht:100px;margin-top:20px;\" align=\"center\" >
\t               ";
            // line 34
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getDescription", [], "method", false, false, true, 34), 34, $this->source), "html", null, true);
            echo " </p>
    \t     </div>
      \t</div>
    \t";
>>>>>>> 256d15e6350525394dfdc17d6ff4023486afb9f0
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
<<<<<<< HEAD
        // line 49
        echo "\t\t\t</div>
\t\t</div>";
=======
        // line 38
        echo "\t\t";
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "snippet", "footer");
        echo "
    </body>
</html>";
>>>>>>> 256d15e6350525394dfdc17d6ff4023486afb9f0
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default/electronics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD
        return array (  95 => 49,  89 => 48,  82 => 25,  78 => 24,  73 => 22,  70 => 21,  66 => 20,  45 => 1,);
=======
        return array (  104 => 38,  94 => 34,  89 => 32,  85 => 31,  81 => 29,  77 => 28,  64 => 19,  45 => 1,);
>>>>>>> 256d15e6350525394dfdc17d6ff4023486afb9f0
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<<<<<<< HEAD
    <title>Speed for life</title>
=======
    <title>electronics</title>
>>>>>>> 256d15e6350525394dfdc17d6ff4023486afb9f0
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
        integrity=\"sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"Style.css\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Skranjidisplay=swap\" rel=\"stylesheet\">
</head>

<<<<<<< HEAD
<body>
<div class=\"container\">

\t\t\t<div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
\t\t\t\t{% for object in objects %}
                    <div class=\"card\" style=\"width: 18rem;\">
                        <img src=\"{{ object.getProductImage() }}\" class=\"card-img-top\"  width=\"100%\" height=\"225px\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ object.getDescription() }}</h5>
                            Price:{{ object.getPrice }}<h2>
                        </div>
                    </div>
\t\t\t\t\t
\t\t\t\t\t{# <div class=\"col\">
\t\t\t\t\t\t<div class=\"card shadow-sm\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<img src=\"{{ object.getPhoto() }} \" alt=\"tv1\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225px\">
\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t<h2>{{ object.getDescription() }}</h2>
                                        This is the description regarding the product
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\tPrice:{{ object.getPrice }}<h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-secondary\">Buy</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Add to Cart</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">9 mins</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> #}
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>", "default/electronics.html.twig", "/var/www/html/test/pimProject/templates/default/electronics.html.twig");
=======
\t<body>
\t\t<div class=\"row\" style=\"margin-top:20px;\">
\t\t{# header snippet#}
\t\t{{ pimcore_snippet(\"header\") }}
\t\t<div class=\"d-flex flex-row-reverse\">
\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">Filters</div>
        \t<button type=\"button\" class=\"btn btn-primary\">Left</button>
        \t<button type=\"button\" class=\"btn btn-primary\">Middle</button>
        \t<button type=\"button\" class=\"btn btn-primary\">Right</button>
        \t</div>
\t\t</div>

\t\t{% for object in objects %}
\t\t<div class=\"col-md-3\">
    \t<div style=\"border:solid black;margin-top:20px;\"align=\"center;\">
        \t    <img class=\"rounded mx-auto d-block\" src=\"{{ object.getProductImage() }}\"style=\"height:300px; width:300px;margin-top:20px;\" align=\"center\"/><br>
            \t<h3 align=\"center\"style=\"color:green\">Price :{{ object.getPrice}} </h3>
            \t<p style=\"height:100px; widht:100px;margin-top:20px;\" align=\"center\" >
\t               {{object.getDescription()}} </p>
    \t     </div>
      \t</div>
    \t{% endfor %}
\t\t{{ pimcore_snippet(\"footer\") }}
    </body>
</html>", "default/electronics.html.twig", "/var/www/html/test/pimProject/templates/default/electronics.html.twig");
>>>>>>> 256d15e6350525394dfdc17d6ff4023486afb9f0
    }
    
    public function checkSecurity()
    {
<<<<<<< HEAD
        static $tags = array("for" => 20);
        static $filters = array("escape" => 22);
        static $functions = array();
=======
        static $tags = array("for" => 28);
        static $filters = array("escape" => 31);
        static $functions = array("pimcore_snippet" => 19);
>>>>>>> 256d15e6350525394dfdc17d6ff4023486afb9f0

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
<<<<<<< HEAD
                []
=======
                ['pimcore_snippet']
>>>>>>> 256d15e6350525394dfdc17d6ff4023486afb9f0
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
