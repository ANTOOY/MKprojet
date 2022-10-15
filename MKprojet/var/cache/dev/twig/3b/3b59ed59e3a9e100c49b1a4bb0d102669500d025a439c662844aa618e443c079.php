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

/* panier/index.html.twig */
class __TwigTemplate_414b9face3afe6ff353b28cc5fc158376317ae304856dae22850a8308693d050 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "panier/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Panier";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<br>
<br>

 <main>
    <div class=\"basket\">
      
     
     ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["PanierProduct"]) || array_key_exists("PanierProduct", $context) ? $context["PanierProduct"] : (function () { throw new RuntimeError('Variable "PanierProduct" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 14
            echo "      <div class=\"basket-product\">
        <div class=\"item\">
          <div class=\"product-image\">
            <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "product", [], "any", false, false, false, 17), "images", [], "any", false, false, false, 17))), "html", null, true);
            echo " \" class=\"product-frame\">
          </div>
          <div class=\"product-details\">
            <h4>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "product", [], "any", false, false, false, 20), "title", [], "any", false, false, false, 20), "html", null, true);
            echo "</h4>
            <h6>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "product", [], "any", false, false, false, 21), "content", [], "any", false, false, false, 21), "html", null, true);
            echo "</h6>
          </div>
        </div>
        
        <div class=\"quantity \">
         
         <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_less", ["product" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "product", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"text-dark\" viewBox=\"0 0 16 16\">
  <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z\"/>
</svg></a>
      ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "qty", [], "any", false, false, false, 30), "html", null, true);
            echo "
       <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_add", ["product" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "product", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"text-dark\" viewBox=\"0 0 16 16\">
  <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z\"/>
</svg></a> 
        </div>
        <div class=\"subtotal\">";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\PriceExtension']->price(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "product", [], "any", false, false, false, 35), "price", [], "any", false, false, false, 35)), "html", null, true);
            echo "</div>
        <div class=\"remove\">
         <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_supprimer", ["product" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "product", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\"><button>Retirer l'article</button></a>
        </div>
      </div>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
    </div>
    <aside>
    
      <div class=\"summary\">
        <div class=\"summary-total-items\"><span class=\"total-items\"></span> Prix total des articles</div>
        <div class=\"summary-subtotal\">
          <div class=\"subtotal-title\">Sous-total</div>
          <div class=\"subtotal-value final-value\" id=\"basket-subtotal\">";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\PriceExtension']->price((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 49, $this->source); })())), "html", null, true);
        echo "</div>
          <div class=\"summary-promo hide\">
            <div class=\"promo-title\">Promotion</div>
            <div class=\"promo-value final-value\" id=\"basket-promo\"></div>
          </div>
        </div>
       
        <div class=\"summary-total\">
        ";
        // line 57
        if (((isset($context["PanierProduct"]) || array_key_exists("PanierProduct", $context) ? $context["PanierProduct"] : (function () { throw new RuntimeError('Variable "PanierProduct" does not exist.', 57, $this->source); })()) != [])) {
            // line 58
            echo "          <div class=\"total-title\">Total</div>
          <div class=\"total-value final-value\" id=\"basket-total\">";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\PriceExtension']->price((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 59, $this->source); })())), "html", null, true);
            echo "</div>
        </div>
        <div class=\"summary-checkout\">
          
           <a href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invoice_new");
            echo " \" ><button class=\"checkout-cta btn btn-dark\"><h6 > Commander</h6>  </button></a>
      
        </div>
        <div class=\"livraison text-dark \">
        <h6><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-truck\" viewBox=\"0 0 16 16\">
  <path d=\"M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z\"/>
</svg>  <span> Livraison Offerte</span> </h6>
        </div>
      </div>
    </aside>
       ";
        }
        // line 74
        echo "  </main>
<br>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 81
        echo "<script>

</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "panier/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 81,  219 => 80,  205 => 74,  191 => 63,  184 => 59,  181 => 58,  179 => 57,  168 => 49,  158 => 41,  148 => 37,  143 => 35,  136 => 31,  132 => 30,  126 => 27,  117 => 21,  113 => 20,  107 => 17,  102 => 14,  98 => 13,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Panier{% endblock %}

{% block body %}
<br>
<br>

 <main>
    <div class=\"basket\">
      
     
     {% for annonce in PanierProduct %}
      <div class=\"basket-product\">
        <div class=\"item\">
          <div class=\"product-image\">
            <img src=\"{{asset('uploads/images/' ~ annonce.product.images)}} \" class=\"product-frame\">
          </div>
          <div class=\"product-details\">
            <h4>{{annonce.product.title}}</h4>
            <h6>{{annonce.product.content}}</h6>
          </div>
        </div>
        
        <div class=\"quantity \">
         
         <a href=\"{{path(\"panier_less\", {'product': annonce.product.id}) }}\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"text-dark\" viewBox=\"0 0 16 16\">
  <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z\"/>
</svg></a>
      {{annonce.qty}}
       <a href=\"{{path(\"panier_add\", {'product': annonce.product.id}) }}\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"text-dark\" viewBox=\"0 0 16 16\">
  <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z\"/>
</svg></a> 
        </div>
        <div class=\"subtotal\">{{annonce.product.price|price}}</div>
        <div class=\"remove\">
         <a href=\"{{path('panier_supprimer', {'product': annonce.product.id}) }}\"><button>Retirer l'article</button></a>
        </div>
      </div>
     {% endfor %}

    </div>
    <aside>
    
      <div class=\"summary\">
        <div class=\"summary-total-items\"><span class=\"total-items\"></span> Prix total des articles</div>
        <div class=\"summary-subtotal\">
          <div class=\"subtotal-title\">Sous-total</div>
          <div class=\"subtotal-value final-value\" id=\"basket-subtotal\">{{total|price}}</div>
          <div class=\"summary-promo hide\">
            <div class=\"promo-title\">Promotion</div>
            <div class=\"promo-value final-value\" id=\"basket-promo\"></div>
          </div>
        </div>
       
        <div class=\"summary-total\">
        {% if PanierProduct != [] %}
          <div class=\"total-title\">Total</div>
          <div class=\"total-value final-value\" id=\"basket-total\">{{total|price}}</div>
        </div>
        <div class=\"summary-checkout\">
          
           <a href=\"{{path('invoice_new')}} \" ><button class=\"checkout-cta btn btn-dark\"><h6 > Commander</h6>  </button></a>
      
        </div>
        <div class=\"livraison text-dark \">
        <h6><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-truck\" viewBox=\"0 0 16 16\">
  <path d=\"M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z\"/>
</svg>  <span> Livraison Offerte</span> </h6>
        </div>
      </div>
    </aside>
       {% endif %}
  </main>
<br>


{% endblock %}

{% block javascripts %}
<script>

</script>
{% endblock %}", "panier/index.html.twig", "C:\\Users\\totoy91\\MKprojet\\templates\\panier\\index.html.twig");
    }
}
