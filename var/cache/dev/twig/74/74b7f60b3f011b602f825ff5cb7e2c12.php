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

/* default/login.html */
class __TwigTemplate_8d2cad2088f6923fffc6bce97a0455e0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/login.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/login.html"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>electronics</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
        integrity=\"sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Skranjidisplay=swap\" rel=\"stylesheet\">

\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
    <script src=\"https://kit.fontawesome.com/3b1214deef.js\" crossorigin=\"anonymous\"></script>
</head>

<body>
\t";
        // line 55
        echo "
<a href=\"https://front.codes/\" class=\"logo\" target=\"_blank\">
\t\t<img src=\"https://assets.codepen.io/1462889/fcy.png\" alt=\"\">
\t</a>

\t<div class=\"section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row full-height justify-content-center\">
\t\t\t\t<div class=\"col-12 text-center align-self-center py-5\">
\t\t\t\t\t<div class=\"section pb-5 pt-5 pt-sm-2 text-center\">
\t\t\t\t\t\t<h6 class=\"mb-0 pb-3\"><span>Log In </span><span>Sign Up</span></h6>
\t\t\t          \t<input class=\"checkbox\" type=\"checkbox\" id=\"reg-log\" name=\"reg-log\"/>
\t\t\t          \t<label for=\"reg-log\"></label>
\t\t\t\t\t\t<div class=\"card-3d-wrap mx-auto\">
\t\t\t\t\t\t\t<div class=\"card-3d-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"card-front\">
\t\t\t\t\t\t\t\t\t<div class=\"center-wrap\">
\t\t\t\t\t\t\t\t\t\t<div class=\"section text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"mb-4 pb-3\">Log In</h4>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"logemail\" class=\"form-style\" placeholder=\"Your Email\" id=\"logemail\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"input-icon uil uil-at\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"logpass\" class=\"form-style\" placeholder=\"Your Password\" id=\"logpass\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"input-icon uil uil-lock-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn mt-4\">submit</a>
                            \t\t\t\t<p class=\"mb-0 mt-4 text-center\"><a href=\"#0\" class=\"link\">Forgot your password?</a></p>
\t\t\t\t      \t\t\t\t\t</div>
\t\t\t      \t\t\t\t\t</div>
\t\t\t      \t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-back\">
\t\t\t\t\t\t\t\t\t<div class=\"center-wrap\">
\t\t\t\t\t\t\t\t\t\t<div class=\"section text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"mb-4 pb-3\">Sign Up</h4>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"logname\" class=\"form-style\" placeholder=\"Your Full Name\" id=\"logname\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"input-icon uil uil-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"logemail\" class=\"form-style\" placeholder=\"Your Email\" id=\"logemail\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"input-icon uil uil-at\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"logpass\" class=\"form-style\" placeholder=\"Your Password\" id=\"logpass\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"input-icon uil uil-lock-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn mt-4\">submit</a>
\t\t\t\t      \t\t\t\t\t</div>
\t\t\t      \t\t\t\t\t</div>
\t\t\t      \t\t\t\t</div>
\t\t\t      \t\t\t</div>
\t\t\t      \t\t</div>
\t\t\t      \t</div>
\t\t      \t</div>
\t      \t</div>
\t    </div>
\t</div>

  <footer class=\"py-3 my-4\">
    <ul class=\"nav justify-content-center border-bottom pb-3 mb-3\">
      <li class=\"nav-item\"><a href=\"home\" class=\"nav-link px-2 text-muted\">Home</a></li>
      <li class=\"nav-item\"><a href=\"clothing\" class=\"nav-link px-2 text-muted\">Clothing</a></li>
      <li class=\"nav-item\"><a href=\"electronics\" class=\"nav-link px-2 text-muted\">Electronics</a></li>
      <li class=\"nav-item\"><a href=\"footwear\" class=\"nav-link px-2 text-muted\">Footwear</a></li>
      <li class=\"nav-item\"><a href=\"beauty\" class=\"nav-link px-2 text-muted\">Beauty</a></li>
      <li class=\"nav-item\"><a href=\"about\" class=\"nav-link px-2 text-muted\">About</a></li>
    </ul>
    <p class=\"text-center text-muted\">© 2023 Company, Inc</p>
  </footer>
    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default/login.html";
    }

    public function getDebugInfo()
    {
        return array (  66 => 55,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>electronics</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
        integrity=\"sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Skranjidisplay=swap\" rel=\"stylesheet\">

\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
    <script src=\"https://kit.fontawesome.com/3b1214deef.js\" crossorigin=\"anonymous\"></script>
</head>

<body>
\t{# <div class=\"row\" style=\"margin-top:20px;\">
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
</nav> #}

<a href=\"https://front.codes/\" class=\"logo\" target=\"_blank\">
\t\t<img src=\"https://assets.codepen.io/1462889/fcy.png\" alt=\"\">
\t</a>

\t<div class=\"section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row full-height justify-content-center\">
\t\t\t\t<div class=\"col-12 text-center align-self-center py-5\">
\t\t\t\t\t<div class=\"section pb-5 pt-5 pt-sm-2 text-center\">
\t\t\t\t\t\t<h6 class=\"mb-0 pb-3\"><span>Log In </span><span>Sign Up</span></h6>
\t\t\t          \t<input class=\"checkbox\" type=\"checkbox\" id=\"reg-log\" name=\"reg-log\"/>
\t\t\t          \t<label for=\"reg-log\"></label>
\t\t\t\t\t\t<div class=\"card-3d-wrap mx-auto\">
\t\t\t\t\t\t\t<div class=\"card-3d-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"card-front\">
\t\t\t\t\t\t\t\t\t<div class=\"center-wrap\">
\t\t\t\t\t\t\t\t\t\t<div class=\"section text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"mb-4 pb-3\">Log In</h4>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"logemail\" class=\"form-style\" placeholder=\"Your Email\" id=\"logemail\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"input-icon uil uil-at\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"logpass\" class=\"form-style\" placeholder=\"Your Password\" id=\"logpass\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"input-icon uil uil-lock-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn mt-4\">submit</a>
                            \t\t\t\t<p class=\"mb-0 mt-4 text-center\"><a href=\"#0\" class=\"link\">Forgot your password?</a></p>
\t\t\t\t      \t\t\t\t\t</div>
\t\t\t      \t\t\t\t\t</div>
\t\t\t      \t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-back\">
\t\t\t\t\t\t\t\t\t<div class=\"center-wrap\">
\t\t\t\t\t\t\t\t\t\t<div class=\"section text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"mb-4 pb-3\">Sign Up</h4>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"logname\" class=\"form-style\" placeholder=\"Your Full Name\" id=\"logname\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"input-icon uil uil-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"logemail\" class=\"form-style\" placeholder=\"Your Email\" id=\"logemail\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"input-icon uil uil-at\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"logpass\" class=\"form-style\" placeholder=\"Your Password\" id=\"logpass\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"input-icon uil uil-lock-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn mt-4\">submit</a>
\t\t\t\t      \t\t\t\t\t</div>
\t\t\t      \t\t\t\t\t</div>
\t\t\t      \t\t\t\t</div>
\t\t\t      \t\t\t</div>
\t\t\t      \t\t</div>
\t\t\t      \t</div>
\t\t      \t</div>
\t      \t</div>
\t    </div>
\t</div>

  <footer class=\"py-3 my-4\">
    <ul class=\"nav justify-content-center border-bottom pb-3 mb-3\">
      <li class=\"nav-item\"><a href=\"home\" class=\"nav-link px-2 text-muted\">Home</a></li>
      <li class=\"nav-item\"><a href=\"clothing\" class=\"nav-link px-2 text-muted\">Clothing</a></li>
      <li class=\"nav-item\"><a href=\"electronics\" class=\"nav-link px-2 text-muted\">Electronics</a></li>
      <li class=\"nav-item\"><a href=\"footwear\" class=\"nav-link px-2 text-muted\">Footwear</a></li>
      <li class=\"nav-item\"><a href=\"beauty\" class=\"nav-link px-2 text-muted\">Beauty</a></li>
      <li class=\"nav-item\"><a href=\"about\" class=\"nav-link px-2 text-muted\">About</a></li>
    </ul>
    <p class=\"text-center text-muted\">© 2023 Company, Inc</p>
  </footer>
    </body>
</html>", "default/login.html", "/var/www/html/test/pimProject/templates/default/login.html");
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
