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
class __TwigTemplate_88b52b82d2d2268f5e1ea39044a8b304 extends Template
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
\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
    <link href=\"./CSS/header.css\" rel=\"stylesheet\">
    <script src=\"https://kit.fontawesome.com/3b1214deef.js\" crossorigin=\"anonymous\"></script>
</head>

\t<body>
\t<div class=\"row\" style=\"margin-top:20px;\">
\t\t";
        // line 22
        echo "  <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <div class=\"container-fluid\">
    <span>
    <a class=\"navbar-brand\" href=\"home\"><i class=\"fa-solid fa-cart-shopping\"></i>E-kart</a>
    </span>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"home\">Home</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"electronics\">Electronics</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"footwear\">Footwear</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"clothing\">Clothing</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"beauty\">Beauty</a>
        </li>  
      </ul>
      <form class=\"d-flex\"> 
        <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
        <button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
      </form>
    </div>
  </div>
</nav>

";
        // line 58
        echo "\t\t<div class=\"d-flex flex-row-reverse\">
\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
\t\t\t<button type=\"button\" class=\"btn btn-secondary btn-sm\" style=\"margin-right:5px\"> Apply Filter</button>
        \t<a href=\"fgents\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\">Men</a>
        \t<a href=\"fladies\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\">Women</a>
        \t</div>
\t\t</div>

\t\t";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["objects"]) || array_key_exists("objects", $context) ? $context["objects"] : (function () { throw new RuntimeError('Variable "objects" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 67
            echo "\t\t<div class=\"col-md-3\">
    \t<div style=\"border:solid black;margin-top:20px;\"align=\"center;\">
        \t    <img class=\"rounded mx-auto d-block\" src=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getProductImage", [], "method", false, false, true, 69), 69, $this->source), "html", null, true);
            echo "\"style=\"height:300px; width:300px;margin-top:20px;\" align=\"center\"/><br>
            \t<h3 align=\"center\"style=\"color:Black\">Price :";
            // line 70
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getPrice", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
            echo " </h3>
            \t<p style=\"height:100px; widht:100px;margin-top:20px;\" align=\"center\" >
\t               ";
            // line 72
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getDescription", [], "method", false, false, true, 72), 72, $this->source), "html", null, true);
            echo " </p>
    \t     </div>
      \t</div>
    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "


";
        // line 80
        echo "  <footer class=\"py-3 my-4\">
    <ul class=\"nav justify-content-center border-bottom pb-3 mb-3\">
      <li class=\"nav-item\"><a href=\"home\" class=\"nav-link px-2 text-muted\">Home</a></li>
      <li class=\"nav-item\"><a href=\"clothing\" class=\"nav-link px-2 text-muted\">Clothing</a></li>
      <li class=\"nav-item\"><a href=\"electronics\" class=\"nav-link px-2 text-muted\">Electronics</a></li>
      <li class=\"nav-item\"><a href=\"footwear\" class=\"nav-link px-2 text-muted\">Footwear</a></li>
      <li class=\"nav-item\"><a href=\"beauty\" class=\"nav-link px-2 text-muted\">Beauty</a></li>
      <li class=\"nav-item\"><a href=\"about\" class=\"nav-link px-2 text-muted\">About</a></li>
    </ul>
    <p class=\"text-center text-muted\">?? 2022 Company, Inc</p>
  </footer>
    </body>
</html>











































";
        // line 144
        echo "\t\t\t\t\t\t\t\t\t";
        // line 154
        echo "\t\t";
        
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
        return array (  206 => 154,  204 => 144,  146 => 80,  141 => 76,  131 => 72,  126 => 70,  122 => 69,  118 => 67,  114 => 66,  104 => 58,  67 => 22,  45 => 1,);
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
\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
    <link href=\"./CSS/header.css\" rel=\"stylesheet\">
    <script src=\"https://kit.fontawesome.com/3b1214deef.js\" crossorigin=\"anonymous\"></script>
</head>

\t<body>
\t<div class=\"row\" style=\"margin-top:20px;\">
\t\t{# header code #}
  <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <div class=\"container-fluid\">
    <span>
    <a class=\"navbar-brand\" href=\"home\"><i class=\"fa-solid fa-cart-shopping\"></i>E-kart</a>
    </span>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"home\">Home</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"electronics\">Electronics</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"footwear\">Footwear</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"clothing\">Clothing</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"beauty\">Beauty</a>
        </li>  
      </ul>
      <form class=\"d-flex\"> 
        <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
        <button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
      </form>
    </div>
  </div>
</nav>

{# body #}
\t\t<div class=\"d-flex flex-row-reverse\">
\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
\t\t\t<button type=\"button\" class=\"btn btn-secondary btn-sm\" style=\"margin-right:5px\"> Apply Filter</button>
        \t<a href=\"fgents\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\">Men</a>
        \t<a href=\"fladies\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\">Women</a>
        \t</div>
\t\t</div>

\t\t{% for object in objects %}
\t\t<div class=\"col-md-3\">
    \t<div style=\"border:solid black;margin-top:20px;\"align=\"center;\">
        \t    <img class=\"rounded mx-auto d-block\" src=\"{{ object.getProductImage() }}\"style=\"height:300px; width:300px;margin-top:20px;\" align=\"center\"/><br>
            \t<h3 align=\"center\"style=\"color:Black\">Price :{{ object.getPrice}} </h3>
            \t<p style=\"height:100px; widht:100px;margin-top:20px;\" align=\"center\" >
\t               {{object.getDescription()}} </p>
    \t     </div>
      \t</div>
    \t{% endfor %}



{# footer #}
  <footer class=\"py-3 my-4\">
    <ul class=\"nav justify-content-center border-bottom pb-3 mb-3\">
      <li class=\"nav-item\"><a href=\"home\" class=\"nav-link px-2 text-muted\">Home</a></li>
      <li class=\"nav-item\"><a href=\"clothing\" class=\"nav-link px-2 text-muted\">Clothing</a></li>
      <li class=\"nav-item\"><a href=\"electronics\" class=\"nav-link px-2 text-muted\">Electronics</a></li>
      <li class=\"nav-item\"><a href=\"footwear\" class=\"nav-link px-2 text-muted\">Footwear</a></li>
      <li class=\"nav-item\"><a href=\"beauty\" class=\"nav-link px-2 text-muted\">Beauty</a></li>
      <li class=\"nav-item\"><a href=\"about\" class=\"nav-link px-2 text-muted\">About</a></li>
    </ul>
    <p class=\"text-center text-muted\">?? 2022 Company, Inc</p>
  </footer>
    </body>
</html>











































{# <div class=\"col\">
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
", "default/footwear.html.twig", "/var/www/html/test/pimProject/templates/default/footwear.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 66);
        static $filters = array("escape" => 69);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
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
