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

/* stripe/success.twig */
class __TwigTemplate_94272e2a35b1960ff70a7eed3604b1e56adff64f37375a6a03efddb8d4f790f2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stripe/success.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stripe/success.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stripe/success.twig", 1);
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
<h1 class=\"text-center\">Commande</h1>


<table class=\"table table-striped panier \">
  <thead>
    <tr>
      
      <th scope=\"col\">Nom</th>
      
      
      <th scope=\"col\">Quantité</th>
      <th scope=\"col\">Prix</th>

    </tr>
  </thead>
  <tbody>
  ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["purchases"]) || array_key_exists("purchases", $context) ? $context["purchases"] : (function () { throw new RuntimeError('Variable "purchases" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 24
            echo "   
    <tr>
      <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["annonce"], "product", [], "any", false, false, false, 26), "title", [], "any", false, false, false, 26), "html", null, true);
            echo "   </td>
  
        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "quantity", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
      <td> ";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\PriceExtension']->price(twig_get_attribute($this->env, $this->source, $context["annonce"], "UnitPrice", [], "any", false, false, false, 29)), "html", null, true);
            echo "</td>
      

     
      
      
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "   
   <tr>
   <td colspan=\"2\">Total:  </td>
   <td> ";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\PriceExtension']->price(twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 40, $this->source); })()), "totalprice", [], "any", false, false, false, 40)), "html", null, true);
        echo "</td>
    </tr>
  </tbody>
</table>


<h2>Adresse de livraison de la commande :</h2>
<div class=\"panier\">
<p>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 48, $this->source); })()), "firstname", [], "any", false, false, false, 48), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 48, $this->source); })()), "name", [], "any", false, false, false, 48), "html", null, true);
        echo "</p>
<p>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 49, $this->source); })()), "adress", [], "any", false, false, false, 49), "html", null, true);
        echo "</p>
<p>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 50, $this->source); })()), "town", [], "any", false, false, false, 50), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 50, $this->source); })()), "postCode", [], "any", false, false, false, 50), "html", null, true);
        echo "</p>
<p>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 51, $this->source); })()), "country", [], "any", false, false, false, 51), "html", null, true);
        echo "</p>

<h3>Statut: Payé <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" fill=\"currentColor\" class=\"bi bi-check-circle\" viewBox=\"0 0 16 16\">
  <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
  <path d=\"M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z\"/>
</svg></h3>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "stripe/success.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 51,  164 => 50,  160 => 49,  154 => 48,  143 => 40,  138 => 37,  124 => 29,  120 => 28,  115 => 26,  111 => 24,  107 => 23,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Commande{% endblock %}

{% block body %}

<h1 class=\"text-center\">Commande</h1>


<table class=\"table table-striped panier \">
  <thead>
    <tr>
      
      <th scope=\"col\">Nom</th>
      
      
      <th scope=\"col\">Quantité</th>
      <th scope=\"col\">Prix</th>

    </tr>
  </thead>
  <tbody>
  {% for annonce in purchases %}
   
    <tr>
      <td>{{annonce.product.title}}   </td>
  
        <td>{{annonce.quantity}}</td>
      <td> {{annonce.UnitPrice|price}}</td>
      

     
      
      
    </tr>
  {% endfor %}
   
   <tr>
   <td colspan=\"2\">Total:  </td>
   <td> {{invoice.totalprice|price}}</td>
    </tr>
  </tbody>
</table>


<h2>Adresse de livraison de la commande :</h2>
<div class=\"panier\">
<p>{{invoice.firstname}} {{invoice.name}}</p>
<p>{{invoice.adress}}</p>
<p>{{invoice.town}} {{invoice.postCode}}</p>
<p>{{invoice.country}}</p>

<h3>Statut: Payé <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" fill=\"currentColor\" class=\"bi bi-check-circle\" viewBox=\"0 0 16 16\">
  <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
  <path d=\"M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z\"/>
</svg></h3>

</div>
{% endblock %}", "stripe/success.twig", "C:\\Users\\totoy91\\MKprojet\\templates\\stripe\\success.twig");
    }
}
