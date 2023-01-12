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

/* default/home.html.twig */
class __TwigTemplate_1aafd0f3a20022df1d2deb7a932601c7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/home.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=\\, initial-scale=1.0\">
\t\t<title>Document</title>
\t</head>
\t<body>
\t\t";
        // line 11
        echo "\t\t";
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "snippet", "header");
        echo "

        
\t\t<!-- Main body -->

    <main>
        <div id=\"carouselExampleFade\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img src=\"images/crousel4.jpg\" style=\"width:100%; height:549px\" class=\"d-block w-100\" alt=\"...\">
                </div>

                <div class=\"carousel-item\">
                    <img src=\"images/crousel3.jpg\" class=\"d-block w-100\" alt=\"...\">
                </div>

                ";
        // line 30
        echo "            </div>

            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleFade\"
                data-bs-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Previous</span>
            </button>
            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleFade\"
                data-bs-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Next</span>
            </button>


        </div>
    </main>

    <!-- Cars section -->

    <section class=\"section-1 my-5\">
        <div class=\"row-my-2 \">
            <label>
                <h1 style=\"font-family:'Skranji', cursive\">Popular Products</h1>
            </label>
        </div>
        <div class=\"container\">
            <div class=\"row justify-content-evenlys\">
                <div class=\"col-md-4\">
                    <div class=\"card\" style=\"width: 18rem;\">
                        <img src=\"images/iphone.jpg\" class=\"card-img-top\" alt=\"...\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">iphone 12 pro</h5>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">

                    <div class=\"card\" style=\"width: 18rem;\">
                        <img src=\"images/saree.jpg\" class=\"card-img-top\" alt=\"...\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Banarasi Handmade Saree</h5>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card\" style=\"width: 18rem;\">
                        <img src=\"images/nike_shoe.jpg\" class=\"card-img-top\" alt=\"...\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Nike sports shoe lightweight</h5>
                        </div>
                    </div>
                </div>
            </div>
    </section>
\t\t";
        // line 86
        echo "\t\t";
        echo $this->extensions['Pimcore\Twig\Extension\DocumentEditableExtension']->renderEditable($context, "snippet", "footer");
        echo "

\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js\"
      integrity=\"sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3\"
      crossorigin=\"anonymous\"></script>
\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 86,  76 => 30,  56 => 11,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=\\, initial-scale=1.0\">
\t\t<title>Document</title>
\t</head>
\t<body>
\t\t{# header snippet#}
\t\t{{ pimcore_snippet(\"header\") }}

        
\t\t<!-- Main body -->

    <main>
        <div id=\"carouselExampleFade\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img src=\"images/crousel4.jpg\" style=\"width:100%; height:549px\" class=\"d-block w-100\" alt=\"...\">
                </div>

                <div class=\"carousel-item\">
                    <img src=\"images/crousel3.jpg\" class=\"d-block w-100\" alt=\"...\">
                </div>

                {# <div class=\"carousel-item\">
                    <img src=\"images/crousel5.jpg\" style=\"width:100%; height:549px\" class=\"d-block w-100\" alt=\"...\">
                </div> #}
            </div>

            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleFade\"
                data-bs-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Previous</span>
            </button>
            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleFade\"
                data-bs-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Next</span>
            </button>


        </div>
    </main>

    <!-- Cars section -->

    <section class=\"section-1 my-5\">
        <div class=\"row-my-2 \">
            <label>
                <h1 style=\"font-family:'Skranji', cursive\">Popular Products</h1>
            </label>
        </div>
        <div class=\"container\">
            <div class=\"row justify-content-evenlys\">
                <div class=\"col-md-4\">
                    <div class=\"card\" style=\"width: 18rem;\">
                        <img src=\"images/iphone.jpg\" class=\"card-img-top\" alt=\"...\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">iphone 12 pro</h5>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">

                    <div class=\"card\" style=\"width: 18rem;\">
                        <img src=\"images/saree.jpg\" class=\"card-img-top\" alt=\"...\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Banarasi Handmade Saree</h5>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card\" style=\"width: 18rem;\">
                        <img src=\"images/nike_shoe.jpg\" class=\"card-img-top\" alt=\"...\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Nike sports shoe lightweight</h5>
                        </div>
                    </div>
                </div>
            </div>
    </section>
\t\t{# footer snippet#}
\t\t{{ pimcore_snippet(\"footer\") }}

\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js\"
      integrity=\"sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3\"
      crossorigin=\"anonymous\"></script>
\t</body>
</html>
", "default/home.html.twig", "/var/www/html/test/pimProject/templates/default/home.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array("pimcore_snippet" => 11);

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
