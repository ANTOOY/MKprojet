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

/* stripe/success.html.twig */
class __TwigTemplate_243ecbfb0a45ced0014b1dcb6eebdcb5f3ca93d2e1ea7f596da50779570d93aa extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stripe/success.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stripe/success.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stripe/success.html.twig", 1);
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

        echo "Commande";
        
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
        echo "
<h4 class=\"text-center\">Commande</h4>

<br>
<br>
<table class=\"table table-striped panier container\">
  <thead>
    <tr>
      
      <th scope=\"col\"><h6>Nom</h6></th>
      
      
      <th scope=\"col\"><h6>Quantité</h6></th>
      <th scope=\"col\"><h6>Prix</h6></th>

    </tr>
  </thead>
  <tbody>
  ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["purchases"]) || array_key_exists("purchases", $context) ? $context["purchases"] : (function () { throw new RuntimeError('Variable "purchases" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 25
            echo "   
    <tr>
      <td><h6>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "product", [], "any", false, false, false, 27), "title", [], "any", false, false, false, 27), "html", null, true);
            echo "</h6>  </td>
  
        <td><h6>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "quantity", [], "any", false, false, false, 29), "html", null, true);
            echo "<h6></td>
      <td> <h6>";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\PriceExtension']->price(twig_get_attribute($this->env, $this->source, $context["annonce"], "UnitPrice", [], "any", false, false, false, 30)), "html", null, true);
            echo "</h6></td>
      

     
      
      
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "   
   <tr>
   <td colspan=\"2\"><h6>Total: </h6> </td>
   <td><h6> ";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\PriceExtension']->price(twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 41, $this->source); })()), "totalprice", [], "any", false, false, false, 41)), "html", null, true);
        echo "</h6></td>
    </tr>
  </tbody>
</table>


<div class=\"panier container\">
<h4>Adresse de livraison de la commande :</h4>
<h6>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 49, $this->source); })()), "firstname", [], "any", false, false, false, 49), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 49, $this->source); })()), "name", [], "any", false, false, false, 49), "html", null, true);
        echo "</h6>
<h6>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 50, $this->source); })()), "adress", [], "any", false, false, false, 50), "html", null, true);
        echo "</h6>
<h6>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 51, $this->source); })()), "town", [], "any", false, false, false, 51), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 51, $this->source); })()), "postCode", [], "any", false, false, false, 51), "html", null, true);
        echo "</h6>
<h6>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 52, $this->source); })()), "country", [], "any", false, false, false, 52), "html", null, true);
        echo "</h6>

<br>
<h5>Statut: Payé <svg xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\"
width=\"25\" height=\"25\"
viewBox=\"0 0 48 48\"
style=\" fill:#000000;\"><circle cx=\"24\" cy=\"24\" r=\"20\" fill=\"#6be3a2\"></circle><path fill=\"#324561\" d=\"M22.5,33c-0.226,0-0.446-0.076-0.625-0.219l-7.5-6c-0.431-0.345-0.501-0.974-0.156-1.405\tc0.347-0.431,0.975-0.501,1.406-0.156l6.667,5.334l9.889-14.126c0.316-0.454,0.94-0.562,1.393-0.246\tc0.453,0.317,0.562,0.94,0.246,1.393l-10.5,15c-0.158,0.227-0.403,0.377-0.677,0.417C22.595,32.997,22.547,33,22.5,33z\"></path></svg></h5>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "stripe/success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 52,  165 => 51,  161 => 50,  155 => 49,  144 => 41,  139 => 38,  125 => 30,  121 => 29,  116 => 27,  112 => 25,  108 => 24,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Commande{% endblock %}

{% block body %}

<h4 class=\"text-center\">Commande</h4>

<br>
<br>
<table class=\"table table-striped panier container\">
  <thead>
    <tr>
      
      <th scope=\"col\"><h6>Nom</h6></th>
      
      
      <th scope=\"col\"><h6>Quantité</h6></th>
      <th scope=\"col\"><h6>Prix</h6></th>

    </tr>
  </thead>
  <tbody>
  {% for annonce in purchases %}
   
    <tr>
      <td><h6>{{annonce.product.title}}</h6>  </td>
  
        <td><h6>{{annonce.quantity}}<h6></td>
      <td> <h6>{{annonce.UnitPrice|price}}</h6></td>
      

     
      
      
    </tr>
  {% endfor %}
   
   <tr>
   <td colspan=\"2\"><h6>Total: </h6> </td>
   <td><h6> {{invoice.totalprice|price}}</h6></td>
    </tr>
  </tbody>
</table>


<div class=\"panier container\">
<h4>Adresse de livraison de la commande :</h4>
<h6>{{invoice.firstname}} {{invoice.name}}</h6>
<h6>{{invoice.adress}}</h6>
<h6>{{invoice.town}} {{invoice.postCode}}</h6>
<h6>{{invoice.country}}</h6>

<br>
<h5>Statut: Payé <svg xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\"
width=\"25\" height=\"25\"
viewBox=\"0 0 48 48\"
style=\" fill:#000000;\"><circle cx=\"24\" cy=\"24\" r=\"20\" fill=\"#6be3a2\"></circle><path fill=\"#324561\" d=\"M22.5,33c-0.226,0-0.446-0.076-0.625-0.219l-7.5-6c-0.431-0.345-0.501-0.974-0.156-1.405\tc0.347-0.431,0.975-0.501,1.406-0.156l6.667,5.334l9.889-14.126c0.316-0.454,0.94-0.562,1.393-0.246\tc0.453,0.317,0.562,0.94,0.246,1.393l-10.5,15c-0.158,0.227-0.403,0.377-0.677,0.417C22.595,32.997,22.547,33,22.5,33z\"></path></svg></h5>

</div>
{% endblock %}", "stripe/success.html.twig", "C:\\Users\\totoy91\\MKprojet\\templates\\stripe\\success.html.twig");
    }
}
