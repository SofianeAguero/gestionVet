<?php

/* @GestVeterinaire/EnvoiEchantillon/lEE.html.twig */
class __TwigTemplate_53f6432dd97aa4fd42f8a7783d18ed8d981d2b1c2c41dd3951ed48ca5bd9c13b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@GestVeterinaire/EnvoiEchantillon/lEE.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GestVeterinaire/EnvoiEchantillon/lEE.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GestVeterinaire/EnvoiEchantillon/lEE.html.twig"));

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
        echo " Un envoi d'échantillon
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
\t\t    <li><a href=\"#\">Une commande</a></li>
\t  \t</ul>
\t  \t<!-- ################################################################################################ -->
\t  \t<h6 class=\"heading\">Information sur l'envoi d'échantillon numéro  ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["unEE"] ?? $this->getContext($context, "unEE")), "Id", array()), "html", null, true);
        echo "</h6>
\t  \t<!-- ################################################################################################ -->
\t</section>
</div>         
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "<div class=\"content three_quarter\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-9\" align=\"center\">
\t\t\t<p>
\t\t\t\tDemande d'envoi effectuée le ";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["unEE"] ?? $this->getContext($context, "unEE")), "DateDemande", array()), "d/m/Y"), "html", null, true);
        echo ", livré le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["unEE"] ?? $this->getContext($context, "unEE")), "DateLivraison", array()), "d/m/Y"), "html", null, true);
        echo "
\t\t\t</p>

\t\t\t<p>
\t\t\t\tNombre d'échantillons envoyés : ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["unEE"] ?? $this->getContext($context, "unEE")), "QteLivree", array()), "html", null, true);
        echo "
\t\t\t</p>

\t\t\t<p>
\t\t\t\t";
        // line 35
        echo "
\t\t\t\t";
        // line 36
        if ( !twig_test_empty($this->getAttribute(($context["unEE"] ?? $this->getContext($context, "unEE")), "LeProduitVeterinaire", array()))) {
            // line 37
            echo "\t\t\t\t\t<p>Le produit concerné : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["unEE"] ?? $this->getContext($context, "unEE")), "LeProduitVeterinaire", array()), "LibelleProduit", array()), "html", null, true);
            echo "</p>
\t\t\t\t";
        }
        // line 39
        echo "\t\t\t</p>

\t\t\t<p>
\t\t\t\t";
        // line 43
        echo "
\t\t\t\t";
        // line 44
        if ( !twig_test_empty($this->getAttribute(($context["unEE"] ?? $this->getContext($context, "unEE")), "LeVeterinaire", array()))) {
            // line 45
            echo "\t\t\t\t\t<p>Mail du vétérinaire : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["unEE"] ?? $this->getContext($context, "unEE")), "LeVeterinaire", array()), "MailVete", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t<p>Tel du vétérinaire : ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["unEE"] ?? $this->getContext($context, "unEE")), "LeVeterinaire", array()), "TelVete", array()), "html", null, true);
            echo "</p>
\t\t\t\t";
        }
        // line 48
        echo "\t\t\t</p>
\t\t</div>
\t</div>

\t<div class=\"row\">
\t\t<div class=\"col-sm-9\" align=\"center\">
\t\t\t<div class=\"btn-group btn-group-justified\">
\t\t\t\t<a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_modifierEnvoiEchantillon", array("id" => $this->getAttribute(($context["unEE"] ?? $this->getContext($context, "unEE")), "Id", array()))), "html", null, true);
        echo "\" class=\"btn btn-warning\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\t\t\tModifier l'envoi d'échantillon
\t\t\t\t</a>

\t\t\t\t<a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_supprimerEnvoiEchantillon", array("id" => $this->getAttribute(($context["unEE"] ?? $this->getContext($context, "unEE")), "Id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\t\t\tSupprimer l'envoi d'échantillon
\t\t\t\t</a>

\t\t\t\t<a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_listeEnvoiEchantillon");
        echo "\" class=\"btn btn-info\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\t\t\tRetour à la liste
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@GestVeterinaire/EnvoiEchantillon/lEE.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 65,  177 => 60,  169 => 55,  160 => 48,  155 => 46,  150 => 45,  148 => 44,  145 => 43,  140 => 39,  134 => 37,  132 => 36,  129 => 35,  122 => 30,  113 => 26,  107 => 22,  98 => 21,  83 => 16,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
\t{{ parent()}} Un envoi d'échantillon
{% endblock %}

{% block entete_page %}
<div class=\"wrapper\">
\t<section id=\"breadcrumb\" class=\"hoc clear\"> 
\t\t<!-- ################################################################################################ -->
\t\t<ul>
\t\t    <li><a href=\"#\">Page d'accueil</a></li>
\t\t    <li><a href=\"#\">Une commande</a></li>
\t  \t</ul>
\t  \t<!-- ################################################################################################ -->
\t  \t<h6 class=\"heading\">Information sur l'envoi d'échantillon numéro  {{unEE.Id}}</h6>
\t  \t<!-- ################################################################################################ -->
\t</section>
</div>         
{% endblock %}
{% block body %}
<div class=\"content three_quarter\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-9\" align=\"center\">
\t\t\t<p>
\t\t\t\tDemande d'envoi effectuée le {{unEE.DateDemande|date(\"d/m/Y\")}}, livré le {{unEE.DateLivraison|date(\"d/m/Y\")}}
\t\t\t</p>

\t\t\t<p>
\t\t\t\tNombre d'échantillons envoyés : {{unEE.QteLivree}}
\t\t\t</p>

\t\t\t<p>
\t\t\t\t{# On vérifie qu'un produit est bien associé à l'échantillon #}

\t\t\t\t{% if unEE.LeProduitVeterinaire is not empty %}
\t\t\t\t\t<p>Le produit concerné : {{unEE.LeProduitVeterinaire.LibelleProduit}}</p>
\t\t\t\t{% endif %}
\t\t\t</p>

\t\t\t<p>
\t\t\t\t{# On vérifie qu'un vétérinaire est bien associé à l'échantillon #}

\t\t\t\t{% if unEE.LeVeterinaire is not empty %}
\t\t\t\t\t<p>Mail du vétérinaire : {{unEE.LeVeterinaire.MailVete}}</p>
\t\t\t\t\t<p>Tel du vétérinaire : {{unEE.LeVeterinaire.TelVete}}</p>
\t\t\t\t{% endif %}
\t\t\t</p>
\t\t</div>
\t</div>

\t<div class=\"row\">
\t\t<div class=\"col-sm-9\" align=\"center\">
\t\t\t<div class=\"btn-group btn-group-justified\">
\t\t\t\t<a href=\"{{ path('gest_veterinaire_modifierEnvoiEchantillon', {'id':unEE.Id}) }}\" class=\"btn btn-warning\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\t\t\tModifier l'envoi d'échantillon
\t\t\t\t</a>

\t\t\t\t<a href=\"{{ path('gest_veterinaire_supprimerEnvoiEchantillon', {'id':unEE.Id}) }}\" class=\"btn btn-danger\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\t\t\tSupprimer l'envoi d'échantillon
\t\t\t\t</a>

\t\t\t\t<a href=\"{{ path('gest_veterinaire_aff_listeEnvoiEchantillon') }}\" class=\"btn btn-info\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\t\t\tRetour à la liste
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
{% endblock %}", "@GestVeterinaire/EnvoiEchantillon/lEE.html.twig", "C:\\wamp64\\www\\gestionVeterinaire\\src\\GestVeterinaireBundle\\Resources\\views\\EnvoiEchantillon\\lEE.html.twig");
    }
}
