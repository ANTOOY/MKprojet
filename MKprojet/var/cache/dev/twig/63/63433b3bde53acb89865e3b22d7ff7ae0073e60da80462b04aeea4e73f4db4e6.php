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

/* partial/_navBar.html.twig */
class __TwigTemplate_bcea95c0b3765cc316c71a5d5106f6bee57a4fd3bb0dd1ed13450727481ab0cc extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partial/_navBar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partial/_navBar.html.twig"));

        // line 1
        echo "
<nav class=\"navbar  mb-3 text-center  \">
  <div class=\"navbar-main container-fluid \">
  <div class=\"main-nav\">

";
        // line 6
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") == false)) {
            // line 7
            echo "<a class=\"navbar-brand text-white\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles");
            echo "\">Articles <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-shop\" viewBox=\"0 0 16 16\">
  <path d=\"M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z\"/>
</svg></a></a>
";
        }
        // line 11
        echo "
";
        // line 12
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") == true)) {
            // line 13
            echo " <li class=\"nav-item\">
<a class=\"navbar-link text-white\" href=\"";
            // line 14
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles");
            echo "\">Articles</a></a>
</li>  
 ";
        }
        // line 17
        echo "
  ";
        // line 18
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") == false)) {
            // line 19
            echo "<a class=\" navbar-brand text-white\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            echo "\">
      <img id=\"img-nav\" src=\"/image/logo-MK.png\"  alt=\"\" width=\"130\" height=\"124\" class=\"d-inline-block align-text-top\">
  
    </a>
    ";
        }
        // line 24
        echo "
   ";
        // line 25
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") == true)) {
            // line 26
            echo "           <li class=\"nav-item\">
            <a class=\"nav-link text-white\" aria-current=\"page\" href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_annonces_ajout");
            echo "\">Ajouter un article</a>
          </li>  
          ";
        }
        // line 30
        echo "
          ";
        // line 31
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") == true)) {
            // line 32
            echo "<li class=\"nav-item\">
            <a class=\"nav-link active text-white\" aria-current=\"page\" href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_ajout");
            echo "\">Ajouter catégorie</a>
          </li>
";
        }
        // line 36
        echo "   
   ";
        // line 37
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") == true)) {
            // line 38
            echo "   <li class=\"nav-item\">
<a class=\"navbar-link text-white\" href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_annonces_home");
            echo "\">Gérer Annonces</a>
</li>
";
        }
        // line 42
        echo "    
     
     

  
 ";
        // line 47
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") == false)) {
            // line 48
            echo "     <div>
     
     
 <a class=\"navbar-brand text-white\" href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_voir");
            echo "\">
<h6>";
            // line 52
            $context["fullPanier"] = 0;
            // line 53
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "session", [], "any", false, false, false, 53), "get", [0 => "panier"], "method", false, false, false, 53));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 54
                echo "            ";
                $context["fullPanier"] = ((isset($context["fullPanier"]) || array_key_exists("fullPanier", $context) ? $context["fullPanier"] : (function () { throw new RuntimeError('Variable "fullPanier" does not exist.', 54, $this->source); })()) + $context["product"]);
                // line 55
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "          ";
            echo twig_escape_filter($this->env, (isset($context["fullPanier"]) || array_key_exists("fullPanier", $context) ? $context["fullPanier"] : (function () { throw new RuntimeError('Variable "fullPanier" does not exist.', 56, $this->source); })()), "html", null, true);
            echo "</h6>
   
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" fill=\"currentColor\" class=\"bi bi-bag text-white\" viewBox=\"0 0 16 16\">
  <path d=\"M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z\"/>
</svg>

</a>

 </div>
  ";
        }
        // line 66
        echo " </div>
 <br>

 
    </div>
  </div>
</nav>


<div class=\"container\">
    ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "flashes", [], "any", false, false, false, 76));
        foreach ($context['_seq'] as $context["classStyle"] => $context["messages"]) {
            // line 77
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 78
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["classStyle"], "html", null, true);
                echo "\" role=\"alert\">
                <p class=\"mb-0\">";
                // line 79
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</p>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['classStyle'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partial/_navBar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 84,  214 => 83,  204 => 79,  199 => 78,  194 => 77,  190 => 76,  178 => 66,  164 => 56,  158 => 55,  155 => 54,  150 => 53,  148 => 52,  144 => 51,  139 => 48,  137 => 47,  130 => 42,  124 => 39,  121 => 38,  119 => 37,  116 => 36,  110 => 33,  107 => 32,  105 => 31,  102 => 30,  96 => 27,  93 => 26,  91 => 25,  88 => 24,  79 => 19,  77 => 18,  74 => 17,  68 => 14,  65 => 13,  63 => 12,  60 => 11,  52 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<nav class=\"navbar  mb-3 text-center  \">
  <div class=\"navbar-main container-fluid \">
  <div class=\"main-nav\">

{% if is_granted(\"ROLE_ADMIN\")== false %}
<a class=\"navbar-brand text-white\" href=\"{{path(\"app_articles\")}}\">Articles <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-shop\" viewBox=\"0 0 16 16\">
  <path d=\"M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z\"/>
</svg></a></a>
{% endif %}

{% if is_granted(\"ROLE_ADMIN\")== true %}
 <li class=\"nav-item\">
<a class=\"navbar-link text-white\" href=\"{{path(\"app_articles\")}}\">Articles</a></a>
</li>  
 {% endif %}

  {% if is_granted(\"ROLE_ADMIN\")== false %}
<a class=\" navbar-brand text-white\" href=\"{{path(\"app_home\")}}\">
      <img id=\"img-nav\" src=\"/image/logo-MK.png\"  alt=\"\" width=\"130\" height=\"124\" class=\"d-inline-block align-text-top\">
  
    </a>
    {% endif %}

   {% if is_granted(\"ROLE_ADMIN\")== true %}
           <li class=\"nav-item\">
            <a class=\"nav-link text-white\" aria-current=\"page\" href=\"{{path('admin_annonces_ajout')}}\">Ajouter un article</a>
          </li>  
          {% endif %}

          {% if is_granted(\"ROLE_ADMIN\")== true %}
<li class=\"nav-item\">
            <a class=\"nav-link active text-white\" aria-current=\"page\" href=\"{{path(\"admin_categories_ajout\")}}\">Ajouter catégorie</a>
          </li>
{% endif %}
   
   {% if is_granted(\"ROLE_ADMIN\")== true %}
   <li class=\"nav-item\">
<a class=\"navbar-link text-white\" href=\"{{path(\"admin_annonces_home\")}}\">Gérer Annonces</a>
</li>
{% endif %}
    
     
     

  
 {% if is_granted(\"ROLE_ADMIN\")== false %}
     <div>
     
     
 <a class=\"navbar-brand text-white\" href=\"{{path(\"panier_voir\")}}\">
<h6>{% set fullPanier = 0 %}
          {% for product in app.session.get('panier') %}
            {% set fullPanier = fullPanier + product %}
          {% endfor %}
          {{fullPanier}}</h6>
   
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" fill=\"currentColor\" class=\"bi bi-bag text-white\" viewBox=\"0 0 16 16\">
  <path d=\"M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z\"/>
</svg>

</a>

 </div>
  {% endif %}
 </div>
 <br>

 
    </div>
  </div>
</nav>


<div class=\"container\">
    {% for classStyle,messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{classStyle}}\" role=\"alert\">
                <p class=\"mb-0\">{{ message }}</p>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        {% endfor %}
    {% endfor %}
</div>", "partial/_navBar.html.twig", "C:\\Users\\totoy91\\MKprojet\\templates\\partial\\_navBar.html.twig");
    }
}
