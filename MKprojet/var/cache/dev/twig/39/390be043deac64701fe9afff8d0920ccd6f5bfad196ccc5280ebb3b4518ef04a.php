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

/* invoice/new.html.twig */
class __TwigTemplate_c49a76b1a37acc6fc0fc51c78b5b8280b0e41b8f141b02f1c6fd1bb401b21b84 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice/new.html.twig"));

        // line 7
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), [0 => "bootstrap_5_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "invoice/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Facturation";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo " <h3 class=\"text-center \">livraison</h3>
 
 <h5 class=\"text-center\">Résumer de votre panier</h5>
<br>
<table class=\"table table-striped panier container\">
  <thead>
  
    <tr>
      
      <th scope=\"col\"><h6>Nom</h6></th>
      
      
      <th scope=\"col\"><h6> Quantité</h6> </th>
      <th scope=\"col\"><h6> Prix</h6> </th>

    </tr>
    
  </thead>
  <tbody>
  ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["PanierProduct"]) || array_key_exists("PanierProduct", $context) ? $context["PanierProduct"] : (function () { throw new RuntimeError('Variable "PanierProduct" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 40
            echo "   
    <tr>
      <td><h6>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "product", [], "any", false, false, false, 42), "title", [], "any", false, false, false, 42), "html", null, true);
            echo " </h6>  </td>
  
 
      <td> <h6>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "qty", [], "any", false, false, false, 45), "html", null, true);
            echo "</h6></td>
      <td><h6>";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\PriceExtension']->price(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "product", [], "any", false, false, false, 46), "price", [], "any", false, false, false, 46)), "html", null, true);
            echo "</h6></td>
    </tr>
    
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "  <tr>
   <td colspan=\"2\"><h6>Total:</h6> </td>
   <td> <h6>";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\PriceExtension']->price((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 52, $this->source); })())), "html", null, true);
        echo "</h6></td>
    </tr>
   </tbody>
</table>

<br>

<div class=\"livraison container\">
<h5></h5>
</div>


<h2 class=\"text-center\">Adresse de livraison</h2>



    <div class=\"p-3 mb-2  text-dark panier container\">
    ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), 'form_start');
        echo "
    <div class=\"column\">
    <div class=\"col\">
      ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "name", [], "any", false, false, false, 72), 'row');
        echo "
    </div>
    <div class=\"col\">
    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "firstname", [], "any", false, false, false, 75), 'row');
        echo "
    </div>
    
    <div class=\"col\">
    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "adress", [], "any", false, false, false, 79), 'row');
        echo "
 </div>
<div class=\"col\">
    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "postCode", [], "any", false, false, false, 82), 'row');
        echo "
 </div>
    <div class=\"col\">
    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "town", [], "any", false, false, false, 85), 'row');
        echo "
 </div>
    </div>
    <div class=\"col\">
    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "country", [], "any", false, false, false, 89), 'row');
        echo "
    </div>  
<br>
<br>
    <div class=\"col\">
    
    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "valider", [], "any", false, false, false, 95), 'row');
        echo "
    </div>  
     
  
      
    </div>   
       
          
    ";
        // line 103
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), 'form_end');
        echo "
      
     
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "invoice/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 103,  211 => 95,  202 => 89,  195 => 85,  189 => 82,  183 => 79,  176 => 75,  170 => 72,  164 => 69,  144 => 52,  140 => 50,  130 => 46,  126 => 45,  120 => 42,  116 => 40,  112 => 39,  91 => 20,  81 => 19,  62 => 4,  51 => 1,  49 => 7,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}Facturation{% endblock %}


{% form_theme form 'bootstrap_5_layout.html.twig' %}











{% block body %}
 <h3 class=\"text-center \">livraison</h3>
 
 <h5 class=\"text-center\">Résumer de votre panier</h5>
<br>
<table class=\"table table-striped panier container\">
  <thead>
  
    <tr>
      
      <th scope=\"col\"><h6>Nom</h6></th>
      
      
      <th scope=\"col\"><h6> Quantité</h6> </th>
      <th scope=\"col\"><h6> Prix</h6> </th>

    </tr>
    
  </thead>
  <tbody>
  {% for annonce in PanierProduct %}
   
    <tr>
      <td><h6>{{annonce.product.title}} </h6>  </td>
  
 
      <td> <h6>{{annonce.qty}}</h6></td>
      <td><h6>{{annonce.product.price|price}}</h6></td>
    </tr>
    
  {% endfor %}
  <tr>
   <td colspan=\"2\"><h6>Total:</h6> </td>
   <td> <h6>{{total|price}}</h6></td>
    </tr>
   </tbody>
</table>

<br>

<div class=\"livraison container\">
<h5></h5>
</div>


<h2 class=\"text-center\">Adresse de livraison</h2>



    <div class=\"p-3 mb-2  text-dark panier container\">
    {{ form_start(form) }}
    <div class=\"column\">
    <div class=\"col\">
      {{ form_row(form.name) }}
    </div>
    <div class=\"col\">
    {{ form_row(form.firstname) }}
    </div>
    
    <div class=\"col\">
    {{ form_row(form.adress) }}
 </div>
<div class=\"col\">
    {{ form_row(form.postCode) }}
 </div>
    <div class=\"col\">
    {{ form_row(form.town)}}
 </div>
    </div>
    <div class=\"col\">
    {{form_row(form.country)}}
    </div>  
<br>
<br>
    <div class=\"col\">
    
    {{form_row(form.valider) }}
    </div>  
     
  
      
    </div>   
       
          
    {{ form_end(form) }}
      
     
    {% endblock %}

    ", "invoice/new.html.twig", "C:\\Users\\totoy91\\MKprojet\\templates\\invoice\\new.html.twig");
    }
}
