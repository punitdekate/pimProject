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

/* default/feedback.html.twig */
class __TwigTemplate_e66644d19265dae90b3c42d73ce7b789 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/feedback.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/feedback.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Feedback</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
        integrity=\"sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi\" crossorigin=\"anonymous\">

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Skranjidisplay=swap\" rel=\"stylesheet\">
\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
    <script src=\"https://kit.fontawesome.com/3b1214deef.js\" crossorigin=\"anonymous\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\">
    </script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\">
    </script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\">
    </script>
    <style>
        form {
            box-shadow: 10px 10px 40px grey;
            padding: 50px;
            margin: 20px;
        }
    </style>
</head>
   
<body> 
\t";
        // line 34
        echo "  <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <div class=\"container-fluid\">
    <span>
    <a class=\"navbar-brand\" href=\"home\"><i class=\"fa-solid fa-cart-shopping\"></i>E-kart</a>
    </span>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    </div>
  </div>
</nav>


";
        // line 48
        echo "    <form method=\"post\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("submit");
        echo "\">
        <h1 class=\"text-success text-center\">
            Feedback Form
        </h1>
          
        <h5 class=\"text-success text-center\">
            Share your valuable feedback to us
        </h5>
          
        <div class=\"form-group\">
            <input type=\"text\" name=\"fname\"
                class=\"form-control\"
                placeholder=\"First Name\" required=\"\">
        </div>

        
        <div class=\"form-group\">
            <input type=\"text\" name=\"lname\"
                class=\"form-control\"
                placeholder=\"Last Name\" required=\"\">
        </div>
          
        <div class=\"form-group\">
            <input type=\"email\" name=\"email\"
                class=\"form-control\"
                placeholder=\"Email address\" required=\"\">
        </div>
        
          
        <div class=\"form-group\">
            <textarea name=\"message\"
                class=\"form-control\"
                placeholder=\"Write your feedback here...\" required=\"\">
            </textarea>
        </div>
          
        <div class=\"submit text-center\">
            <button class=\"btn btn-success\" id=\"send\">Send Feedback</button>
        </div>
    </form>
</body>
   
</html>

















































        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default/feedback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 48,  79 => 34,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>Feedback</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
        integrity=\"sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi\" crossorigin=\"anonymous\">

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Skranjidisplay=swap\" rel=\"stylesheet\">
\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
    <script src=\"https://kit.fontawesome.com/3b1214deef.js\" crossorigin=\"anonymous\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\">
    </script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\">
    </script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\">
    </script>
    <style>
        form {
            box-shadow: 10px 10px 40px grey;
            padding: 50px;
            margin: 20px;
        }
    </style>
</head>
   
<body> 
\t{# header code #}
  <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <div class=\"container-fluid\">
    <span>
    <a class=\"navbar-brand\" href=\"home\"><i class=\"fa-solid fa-cart-shopping\"></i>E-kart</a>
    </span>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    </div>
  </div>
</nav>


{# feeback section #}
    <form method=\"post\" action=\"{{ path('submit') }}\">
        <h1 class=\"text-success text-center\">
            Feedback Form
        </h1>
          
        <h5 class=\"text-success text-center\">
            Share your valuable feedback to us
        </h5>
          
        <div class=\"form-group\">
            <input type=\"text\" name=\"fname\"
                class=\"form-control\"
                placeholder=\"First Name\" required=\"\">
        </div>

        
        <div class=\"form-group\">
            <input type=\"text\" name=\"lname\"
                class=\"form-control\"
                placeholder=\"Last Name\" required=\"\">
        </div>
          
        <div class=\"form-group\">
            <input type=\"email\" name=\"email\"
                class=\"form-control\"
                placeholder=\"Email address\" required=\"\">
        </div>
        
          
        <div class=\"form-group\">
            <textarea name=\"message\"
                class=\"form-control\"
                placeholder=\"Write your feedback here...\" required=\"\">
            </textarea>
        </div>
          
        <div class=\"submit text-center\">
            <button class=\"btn btn-success\" id=\"send\">Send Feedback</button>
        </div>
    </form>
</body>
   
</html>

















































        {# <div class=\"form-group\">
            <input type=\"text\" name=\"subject\"
                class=\"form-control\"
                placeholder=\"Subject\" required=\"\">
        </div> #}", "default/feedback.html.twig", "/var/www/html/test/pimProject/templates/default/feedback.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array("path" => 48);

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                ['path']
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
