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
class __TwigTemplate_0526c8a1057c7ad0d1b84f0b2265da11 extends Template
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
    <title>Sending file attachment with email</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=
\"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\">
    <script src=
\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\">
    </script>
    <script src=
\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\">
    </script>
    <script src=
\"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\">
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
    <?php
        print_r(\$_POST);
    ?>
    <form method=\"post\">
        <h1 class=\"text-success text-center\">
            Feedback Form
        </h1>
          
        <h5 class=\"text-success text-center\">
            Share your valuable feedback to us
        </h5>
          
        <div class=\"form-group\">
            <input type=\"text\" name=\"name\"
                class=\"form-control\"
                placeholder=\"Name\" required=\"\">
        </div>
          
        <div class=\"form-group\">
            <input type=\"email\" name=\"email\"
                class=\"form-control\"
                placeholder=\"Email address\" required=\"\">
        </div>
          
        ";
        // line 59
        echo "          
        <div class=\"form-group\">
            <textarea name=\"message\"
                class=\"form-control\"
                placeholder=\"Write your feedback here...\"
                required=\"\">
            </textarea>
        </div>
          
        ";
        // line 71
        echo "          
        <div class=\"submit text-center\">
            <input type=\"submit\" name=\"submit\"
                class=\"btn btn-success \"
                value=\"SUBMIT\">
        </div>
    </form>
</body>
   
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default/feedback.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  111 => 71,  100 => 59,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
   
<head>
    <title>Sending file attachment with email</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=
\"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\">
    <script src=
\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\">
    </script>
    <script src=
\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\">
    </script>
    <script src=
\"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\">
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
    <?php
        print_r(\$_POST);
    ?>
    <form method=\"post\">
        <h1 class=\"text-success text-center\">
            Feedback Form
        </h1>
          
        <h5 class=\"text-success text-center\">
            Share your valuable feedback to us
        </h5>
          
        <div class=\"form-group\">
            <input type=\"text\" name=\"name\"
                class=\"form-control\"
                placeholder=\"Name\" required=\"\">
        </div>
          
        <div class=\"form-group\">
            <input type=\"email\" name=\"email\"
                class=\"form-control\"
                placeholder=\"Email address\" required=\"\">
        </div>
          
        {# <div class=\"form-group\">
            <input type=\"text\" name=\"subject\"
                class=\"form-control\"
                placeholder=\"Subject\" required=\"\">
        </div> #}
          
        <div class=\"form-group\">
            <textarea name=\"message\"
                class=\"form-control\"
                placeholder=\"Write your feedback here...\"
                required=\"\">
            </textarea>
        </div>
          
        {# <div class=\"form-group\">
            <input type=\"file\" name=\"file\">
        </div> #}
          
        <div class=\"submit text-center\">
            <input type=\"submit\" name=\"submit\"
                class=\"btn btn-success \"
                value=\"SUBMIT\">
        </div>
    </form>
</body>
   
</html>", "default/feedback.html.twig", "/var/www/html/firstproject/pimProject/templates/default/feedback.html.twig");
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
