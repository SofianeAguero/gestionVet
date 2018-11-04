<?php

/* @GestVeterinaire/Region/selectRegionDele.html.twig */
class __TwigTemplate_a847a3f339da77180eac0675adf919dae3bef3b7d2e5c5e6f109e355b4d126c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@GestVeterinaire/Region/selectRegionDele.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'entete_page' => array($this, 'block_entete_page'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GestVeterinaire/Region/selectRegionDele.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GestVeterinaire/Region/selectRegionDele.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des Delegues
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_entete_page($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete_page"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete_page"));

        // line 8
        echo "<div class=\"wrapper\">
  <section id=\"breadcrumb\" class=\"hoc clear\"> 
    <!-- ################################################################################################ -->
    <ul>
        <li><a href=\"#\">Page d'accueil</a></li>
        <li><a href=\"#\">Liste des délègués vétérérinaires de la region ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["uneRegion"] ?? $this->getContext($context, "uneRegion")), "libelleRegion", array()), "html", null, true);
        echo "</a></li>
      </ul>
  </section>
</div>         
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "<div class=\"content three_quarter\">
  <h2>Tous les delegues de la region ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["uneRegion"] ?? $this->getContext($context, "uneRegion")), "libelleRegion", array()), "html", null, true);
        echo "</h2>
  <div class=\"scrollable\">
    <table>
      <thead>
        <tr>
           <th>Nom</th>
           <th>Prenom</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["unDele"] ?? $this->getContext($context, "unDele")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["dele"]) {
            // line 32
            echo "        <tr>
          <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_unDelegueVeterinaire", array("id" => $this->getAttribute($context["dele"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dele"], "NomDelegue", array()), "html", null, true);
            echo "</a></td>
          <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_unDelegueVeterinaire", array("id" => $this->getAttribute($context["dele"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dele"], "PrenomDelegue", array()), "html", null, true);
            echo "</a></td>
        </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "        <tr>
          <td>Aucun delegue</td>
          <td>Enregistrée</td>
          <td>Actuellement</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "      </tbody>
    </table>
    <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_listeRegion");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a> 
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@GestVeterinaire/Region/selectRegionDele.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 45,  155 => 43,  144 => 37,  134 => 34,  128 => 33,  125 => 32,  120 => 31,  107 => 21,  104 => 20,  95 => 19,  80 => 13,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block title %}
  {{ parent()}} Liste des Delegues
{% endblock %}

{% block entete_page %}
<div class=\"wrapper\">
  <section id=\"breadcrumb\" class=\"hoc clear\"> 
    <!-- ################################################################################################ -->
    <ul>
        <li><a href=\"#\">Page d'accueil</a></li>
        <li><a href=\"#\">Liste des délègués vétérérinaires de la region {{uneRegion.libelleRegion}}</a></li>
      </ul>
  </section>
</div>         
{% endblock %}

{% block body %}
<div class=\"content three_quarter\">
  <h2>Tous les delegues de la region {{uneRegion.libelleRegion}}</h2>
  <div class=\"scrollable\">
    <table>
      <thead>
        <tr>
           <th>Nom</th>
           <th>Prenom</th>
        </tr>
      </thead>
      <tbody>
        {% for dele in unDele %}
        <tr>
          <td><a href=\"{{ path('gest_veterinaire_aff_unDelegueVeterinaire', {'id':dele.id}) }}\">{{dele.NomDelegue}}</a></td>
          <td><a href=\"{{ path('gest_veterinaire_aff_unDelegueVeterinaire', {'id':dele.id}) }}\">{{dele.PrenomDelegue}}</a></td>
        </tr>
        {% else %}
        <tr>
          <td>Aucun delegue</td>
          <td>Enregistrée</td>
          <td>Actuellement</td>
        </tr>
        {% endfor %}
      </tbody>
    </table>
    <a href=\"{{ path('gest_veterinaire_aff_listeRegion') }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a> 
  </div>
</div>
{% endblock %}", "@GestVeterinaire/Region/selectRegionDele.html.twig", "C:\\wamp64\\www\\gestionVeterinaire\\src\\GestVeterinaireBundle\\Resources\\views\\Region\\selectRegionDele.html.twig");
    }
}
