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

/* admin/index.html.twig */
class __TwigTemplate_141aee1a049d1eea82918f7fdb0feb4eb16203ebd874272ec0589c97d25d35c7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
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

        echo "Gérer les annonces";
        
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
        echo "<h1 class=\"text-center\">Gérer les Annonces</h1>
<br>

<br>
<table class=\"table table-striped table-secondary container\">
  <thead>
    <tr>
      <th scope=\"col\">ID</th>
      <th scope=\"col\">Titre</th>
      <th scope=\"col\">Date</th>
      <th scope=\"col\">Valider</th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 21
            echo "    <tr>
      <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
      <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "title", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
      <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "createdAt", [], "any", false, false, false, 24)), "html", null, true);
            echo "</td>
      <td>
      <label class=\"form-check form-switch  \">
  <input class=\"form-check-input btn btn-outline-secondary \" type=\"checkbox\"  role=\"switch\" ";
            // line 27
            echo ((twig_get_attribute($this->env, $this->source, $context["annonce"], "activ", [], "any", false, false, false, 27)) ? ("checked") : (""));
            // line 28
            echo " data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\">
  <span class=\"slider\"></span>
  </label></td>
     
       <td class=\"text-center\">
    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_annonces_supprimer", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\"  class=\"btn btn-danger\"  onclick=\"return confirm('Êtes-vous sûr(e) de vouloir supprimé définitivement l'\\annonce ?');\"   >
  Supprimer
</a> </td>
      
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "  </tbody>
</table>



      
 

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "<script>
window.onload = () => {
        
        
        

        let activ = document.querySelectorAll(\"[type=checkbox]\")
          for(let bouton of activ) {
              bouton.addEventListener(\"click\", function () {
                let xmlhttp = new XMLHttpRequest;

                xmlhttp.open(\"get\", `/admin/annonces/activer/\${this.dataset.id}`)
                xmlhttp.send()
              })
      
    
          }

    
        
}
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 50,  167 => 49,  149 => 39,  137 => 33,  128 => 28,  126 => 27,  120 => 24,  116 => 23,  112 => 22,  109 => 21,  105 => 20,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gérer les annonces{% endblock %}

{% block body %}
<h1 class=\"text-center\">Gérer les Annonces</h1>
<br>

<br>
<table class=\"table table-striped table-secondary container\">
  <thead>
    <tr>
      <th scope=\"col\">ID</th>
      <th scope=\"col\">Titre</th>
      <th scope=\"col\">Date</th>
      <th scope=\"col\">Valider</th>
    </tr>
  </thead>
  <tbody>
  {% for annonce in annonces %}
    <tr>
      <td>{{annonce.id}}</td>
      <td>{{annonce.title}}</td>
      <td>{{annonce.createdAt|date}}</td>
      <td>
      <label class=\"form-check form-switch  \">
  <input class=\"form-check-input btn btn-outline-secondary \" type=\"checkbox\"  role=\"switch\" {{(annonce.activ) ? 'checked' : 
  ''}} data-id=\"{{annonce.id}}\">
  <span class=\"slider\"></span>
  </label></td>
     
       <td class=\"text-center\">
    <a href=\"{{path(\"admin_annonces_supprimer\", {\"id\":annonce.id})}}\"  class=\"btn btn-danger\"  onclick=\"return confirm('Êtes-vous sûr(e) de vouloir supprimé définitivement l'\\annonce ?');\"   >
  Supprimer
</a> </td>
      
    </tr>
  {% endfor %}
  </tbody>
</table>



      
 

{% endblock %}

  {% block javascripts %}
<script>
window.onload = () => {
        
        
        

        let activ = document.querySelectorAll(\"[type=checkbox]\")
          for(let bouton of activ) {
              bouton.addEventListener(\"click\", function () {
                let xmlhttp = new XMLHttpRequest;

                xmlhttp.open(\"get\", `/admin/annonces/activer/\${this.dataset.id}`)
                xmlhttp.send()
              })
      
    
          }

    
        
}
</script>

{% endblock %}   




", "admin/index.html.twig", "C:\\Users\\totoy91\\MKprojet\\templates\\admin\\index.html.twig");
    }
}
