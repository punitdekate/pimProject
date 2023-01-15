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

/* default/footer.html.twig */
class __TwigTemplate_0b3371e86b987f0a94c3b05c464440d2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/footer.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>footer</title>
      <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
    <link href=\"./CSS/header.css\" rel=\"stylesheet\">
    <script src=\"https://kit.fontawesome.com/3b1214deef.js\" crossorigin=\"anonymous\"></script>
</head>
<body>
    <!-- Footer -->
<footer class=\"text-center text-lg-start bg-light text-muted\">
  <!-- Section: Social media -->
  <section class=\"d-flex justify-content-center justify-content-lg-between p-4 border-bottom\">
    <!-- Left -->
    <div class=\"me-5 d-none d-lg-block\">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-facebook-f\"></i>
      </a>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-twitter\"></i>
      </a>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-google\"></i>
      </a>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-instagram\"></i>
      </a>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-linkedin\"></i>
      </a>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-github\"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class=\"\">
    <div class=\"container text-center text-md-start mt-5\">
      <!-- Grid row -->
      <div class=\"row mt-3\">
        <!-- Grid column -->
        <div class=\"col-md-3 col-lg-4 col-xl-3 mx-auto mb-4\">
          <!-- Content -->
          
          <h6 class=\"\">
            <a href=\"\"><i class=\"fa-solid fa-cart-shopping\"></i></a>E-kart
          </h6>
          ";
        // line 60
        echo "          <p>
            E-kart website provides you to sell or buy products 
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=\"col-md-2 col-lg-2 col-xl-2 mx-auto mb-4\">
          <!-- Links -->
          <h6 class=\"text-uppercase fw-bold mb-4\">
            Products
          </h6>
          <p>
            <a href=\"#!\" class=\"text-reset\">Clothing</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Footwear</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Electronics</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Beauty</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        ";
        // line 106
        echo "        <!-- Grid column -->

        <!-- Grid column -->
        <div class=\"col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4\">
          <!-- Links -->
          <h6 class=\"text-uppercase fw-bold mb-4\">Contact</h6>
          <p><i class=\"fas fa-home me-3\"></i> India, New York, US</p>
          <p>
            <i class=\"fas fa-envelope me-3\"></i>
            info@example.com
          </p>
          <p><i class=\"fas fa-phone me-3\"></i> + 01 234 567 88</p>
          <p><i class=\"fas fa-print me-3\"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class=\"text-center p-4\" style=\"background-color: rgba(0, 0, 0, 0.05);\">
    © 2021 Copyright:
    <a class=\"text-reset fw-bold\" href=\"https://E-kart.com/\">E-kart.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  133 => 106,  103 => 60,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>footer</title>
      <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
    <link href=\"./CSS/header.css\" rel=\"stylesheet\">
    <script src=\"https://kit.fontawesome.com/3b1214deef.js\" crossorigin=\"anonymous\"></script>
</head>
<body>
    <!-- Footer -->
<footer class=\"text-center text-lg-start bg-light text-muted\">
  <!-- Section: Social media -->
  <section class=\"d-flex justify-content-center justify-content-lg-between p-4 border-bottom\">
    <!-- Left -->
    <div class=\"me-5 d-none d-lg-block\">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-facebook-f\"></i>
      </a>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-twitter\"></i>
      </a>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-google\"></i>
      </a>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-instagram\"></i>
      </a>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-linkedin\"></i>
      </a>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-github\"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class=\"\">
    <div class=\"container text-center text-md-start mt-5\">
      <!-- Grid row -->
      <div class=\"row mt-3\">
        <!-- Grid column -->
        <div class=\"col-md-3 col-lg-4 col-xl-3 mx-auto mb-4\">
          <!-- Content -->
          
          <h6 class=\"\">
            <a href=\"\"><i class=\"fa-solid fa-cart-shopping\"></i></a>E-kart
          </h6>
          {# <h6 class=\"text-uppercase fw-bold mb-4\">
            E-kart
          </h6> #}
          <p>
            E-kart website provides you to sell or buy products 
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=\"col-md-2 col-lg-2 col-xl-2 mx-auto mb-4\">
          <!-- Links -->
          <h6 class=\"text-uppercase fw-bold mb-4\">
            Products
          </h6>
          <p>
            <a href=\"#!\" class=\"text-reset\">Clothing</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Footwear</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Electronics</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Beauty</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        {# <div class=\"col-md-3 col-lg-2 col-xl-2 mx-auto mb-4\">
          <!-- Links -->
          <h6 class=\"text-uppercase fw-bold mb-4\">
            Useful links
          </h6>
          <p>
            <a href=\"#!\" class=\"text-reset\">Pricing</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Settings</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Orders</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Help</a>
          </p>
        </div> #}
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=\"col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4\">
          <!-- Links -->
          <h6 class=\"text-uppercase fw-bold mb-4\">Contact</h6>
          <p><i class=\"fas fa-home me-3\"></i> India, New York, US</p>
          <p>
            <i class=\"fas fa-envelope me-3\"></i>
            info@example.com
          </p>
          <p><i class=\"fas fa-phone me-3\"></i> + 01 234 567 88</p>
          <p><i class=\"fas fa-print me-3\"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class=\"text-center p-4\" style=\"background-color: rgba(0, 0, 0, 0.05);\">
    © 2021 Copyright:
    <a class=\"text-reset fw-bold\" href=\"https://E-kart.com/\">E-kart.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

</body>

</html>", "default/footer.html.twig", "/var/www/html/firstproject/pimProject/templates/default/footer.html.twig");
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
