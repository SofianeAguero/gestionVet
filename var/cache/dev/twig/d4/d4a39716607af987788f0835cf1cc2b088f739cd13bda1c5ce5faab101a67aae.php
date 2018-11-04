<?php

/* @GestVeterinaire/EnvoiEchantillon/listeEE.html.twig */
class __TwigTemplate_875f207d5668826aed18bb948e709be46aebc3785e9f61929b226e8ffb863446 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@GestVeterinaire/EnvoiEchantillon/listeEE.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GestVeterinaire/EnvoiEchantillon/listeEE.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GestVeterinaire/EnvoiEchantillon/listeEE.html.twig"));

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
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des Envois d'échantillon
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
\t<section id=\"breadcrumb\" class=\"hoc clear\"> 
\t\t<!-- ################################################################################################ -->
\t\t<ul>
\t\t    <li><a href=\"#\">Page d'accueil</a></li>
\t\t    <li><a href=\"#\">Liste des Envois d'échantillon</a></li>
\t  \t</ul>
\t  \t<!-- ################################################################################################ -->
\t  \t<h6 class=\"heading\">Liste des Envois d'échantillon</h6>
\t  \t<!-- ################################################################################################ -->
\t</section>
</div>         
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "<div class=\"content three_quarter\">
  <h1>Toutes les Commandes</h1>
  <div class=\"scrollable\">
    <table>
      <thead>
        <tr>
          <th>Date de la demande d'envoi</th>
          <th>Date de la livraison</th>
          <th>Nombre d'échantillons envoyés</th>
          <th>Libelle du produit</th>
          <th>Tel du vétérinaire</th>
        </tr>
      </thead>
      <tbody>
      \t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lesEE"] ?? $this->getContext($context, "lesEE")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["envoiEchantillon"]) {
            // line 38
            echo "        <tr>
          <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_unEnvoiEchantillon", array("id" => $this->getAttribute($context["envoiEchantillon"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["envoiEchantillon"], "DateDemande", array()), "d/m/Y"), "html", null, true);
            echo "</a></td>
          <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_unEnvoiEchantillon", array("id" => $this->getAttribute($context["envoiEchantillon"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["envoiEchantillon"], "DateLivraison", array()), "d/m/Y"), "html", null, true);
            echo "</a></td>
          <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_unEnvoiEchantillon", array("id" => $this->getAttribute($context["envoiEchantillon"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["envoiEchantillon"], "QteLivree", array()), "html", null, true);
            echo "</a></td>
          <td><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_unEnvoiEchantillon", array("id" => $this->getAttribute($context["envoiEchantillon"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["envoiEchantillon"], "LeProduitVeterinaire", array()), "LibelleProduit", array()), "html", null, true);
            echo "</a></td>
          <td><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_unEnvoiEchantillon", array("id" => $this->getAttribute($context["envoiEchantillon"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["envoiEchantillon"], "LeVeterinaire", array()), "TelVete", array()), "html", null, true);
            echo "</a></td>
        </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            echo "        <tr>
          <td>Actuellement</td>
          <td>Aucun</td>
          <td>Envoi</td>
          <td>D'échantillion</td>
          <td>Enregistré</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['envoiEchantillon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "      </tbody>
    </table>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@GestVeterinaire/EnvoiEchantillon/listeEE.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 54,  162 => 46,  152 => 43,  146 => 42,  140 => 41,  134 => 40,  128 => 39,  125 => 38,  120 => 37,  104 => 23,  95 => 22,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
\t{{ parent()}} Liste des Envois d'échantillon
{% endblock %}

{% block entete_page %}
<div class=\"wrapper\">
\t<section id=\"breadcrumb\" class=\"hoc clear\"> 
\t\t<!-- ################################################################################################ -->
\t\t<ul>
\t\t    <li><a href=\"#\">Page d'accueil</a></li>
\t\t    <li><a href=\"#\">Liste des Envois d'échantillon</a></li>
\t  \t</ul>
\t  \t<!-- ################################################################################################ -->
\t  \t<h6 class=\"heading\">Liste des Envois d'échantillon</h6>
\t  \t<!-- ################################################################################################ -->
\t</section>
</div>         
{% endblock %}

{% block body %}
<div class=\"content three_quarter\">
  <h1>Toutes les Commandes</h1>
  <div class=\"scrollable\">
    <table>
      <thead>
        <tr>
          <th>Date de la demande d'envoi</th>
          <th>Date de la livraison</th>
          <th>Nombre d'échantillons envoyés</th>
          <th>Libelle du produit</th>
          <th>Tel du vétérinaire</th>
        </tr>
      </thead>
      <tbody>
      \t{% for envoiEchantillon in lesEE %}
        <tr>
          <td><a href=\"{{ path('gest_veterinaire_aff_unEnvoiEchantillon', {'id':envoiEchantillon.id}) }}\">{{envoiEchantillon.DateDemande|date(\"d/m/Y\")}}</a></td>
          <td><a href=\"{{ path('gest_veterinaire_aff_unEnvoiEchantillon', {'id':envoiEchantillon.id}) }}\">{{envoiEchantillon.DateLivraison|date(\"d/m/Y\")}}</a></td>
          <td><a href=\"{{ path('gest_veterinaire_aff_unEnvoiEchantillon', {'id':envoiEchantillon.id}) }}\">{{envoiEchantillon.QteLivree}}</a></td>
          <td><a href=\"{{ path('gest_veterinaire_aff_unEnvoiEchantillon', {'id':envoiEchantillon.id}) }}\">{{envoiEchantillon.LeProduitVeterinaire.LibelleProduit}}</a></td>
          <td><a href=\"{{ path('gest_veterinaire_aff_unEnvoiEchantillon', {'id':envoiEchantillon.id}) }}\">{{envoiEchantillon.LeVeterinaire.TelVete}}</a></td>
        </tr>
        {% else %}
        <tr>
          <td>Actuellement</td>
          <td>Aucun</td>
          <td>Envoi</td>
          <td>D'échantillion</td>
          <td>Enregistré</td>
        </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
</div>
{% endblock %}", "@GestVeterinaire/EnvoiEchantillon/listeEE.html.twig", "C:\\wamp64\\www\\gestionVeterinaire\\src\\GestVeterinaireBundle\\Resources\\views\\EnvoiEchantillon\\listeEE.html.twig");
    }
}
