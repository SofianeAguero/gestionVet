<?php

/* @GestVeterinaire/Commande/laCommande.html.twig */
class __TwigTemplate_5d5340932263346ad11632031023b44a9ef6ba38a82d32b5b1481026b9762de8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@GestVeterinaire/Commande/laCommande.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GestVeterinaire/Commande/laCommande.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GestVeterinaire/Commande/laCommande.html.twig"));

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
        echo " Une commande
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
\t  \t<h6 class=\"heading\">Information sur la commande numéro  ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["uneCom"] ?? $this->getContext($context, "uneCom")), "Id", array()), "html", null, true);
        echo "</h6>
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
\t<div class=\"row\">
\t\t<div class=\"col-sm-9\" align=\"center\">
\t\t\t<p>
\t\t\t\tCommande effectuée le ";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["uneCom"] ?? $this->getContext($context, "uneCom")), "DateCommande", array()), "d/m/Y"), "html", null, true);
        echo " pour une livraison souhaitée le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["uneCom"] ?? $this->getContext($context, "uneCom")), "DateLivraisonSouhaitee", array()), "d/m/Y"), "html", null, true);
        echo "
\t\t\t</p>

\t\t\t<p>
\t\t\t\t";
        // line 32
        echo "
\t\t\t\t

\t\t\t\tLe(s) produit(s) concerné(s) :
\t\t\t\t<br />
\t\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commandeProduit"] ?? $this->getContext($context, "commandeProduit")));
        foreach ($context['_seq'] as $context["_key"] => $context["produitVeterinaire"]) {
            // line 38
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produitVeterinaire"], "LeProduitVeterinaire", array()), "LibelleProduit", array()), "html", null, true);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produitVeterinaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
                <br /><br />

                Quantité(s) commandée(s) :
                <br />
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commandeProduit"] ?? $this->getContext($context, "commandeProduit")));
        foreach ($context['_seq'] as $context["_key"] => $context["produitVeterinaire"]) {
            // line 46
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produitVeterinaire"], "QteCommandee", array()), "html", null, true);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produitVeterinaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
                <br /><br />

\t\t\t\t
\t\t\t</p>

\t\t\t<p>
\t\t\t\t";
        // line 56
        echo "
\t\t\t\t";
        // line 57
        if ( !twig_test_empty($this->getAttribute(($context["uneCom"] ?? $this->getContext($context, "uneCom")), "LeVeterinaire", array()))) {
            // line 58
            echo "\t\t\t\t\t<p>Mail du vétérinaire : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["uneCom"] ?? $this->getContext($context, "uneCom")), "LeVeterinaire", array()), "MailVete", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t<p>Tel du vétérinaire : ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["uneCom"] ?? $this->getContext($context, "uneCom")), "LeVeterinaire", array()), "TelVete", array()), "html", null, true);
            echo "</p>
\t\t\t\t";
        }
        // line 61
        echo "\t\t\t</p>
\t\t</div>
\t</div>

\t<div class=\"row\">
\t\t<div class=\"col-sm-9\" align=\"center\">
\t\t\t<div class=\"btn-group btn-group-justified\">
\t\t\t\t<a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_modifiercommande", array("id" => $this->getAttribute(($context["uneCom"] ?? $this->getContext($context, "uneCom")), "Id", array()))), "html", null, true);
        echo "\" class=\"btn btn-warning\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\t\t\tModifier la commande
\t\t\t\t</a>

\t\t\t\t<a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_supprimercommande", array("id" => $this->getAttribute(($context["uneCom"] ?? $this->getContext($context, "uneCom")), "Id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\t\t\tSupprimer la commande
\t\t\t\t</a>

\t\t\t\t<a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_listeCommande");
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
        return "@GestVeterinaire/Commande/laCommande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 78,  203 => 73,  195 => 68,  186 => 61,  181 => 59,  176 => 58,  174 => 57,  171 => 56,  162 => 48,  153 => 46,  149 => 45,  142 => 40,  133 => 38,  129 => 37,  122 => 32,  113 => 27,  107 => 23,  98 => 22,  83 => 16,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
\t{{ parent()}} Une commande
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
\t  \t<h6 class=\"heading\">Information sur la commande numéro  {{uneCom.Id}}</h6>
\t  \t<!-- ################################################################################################ -->
\t</section>
</div>         
{% endblock %}

{% block body %}
<div class=\"content three_quarter\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-9\" align=\"center\">
\t\t\t<p>
\t\t\t\tCommande effectuée le {{uneCom.DateCommande|date(\"d/m/Y\")}} pour une livraison souhaitée le {{uneCom.DateLivraisonSouhaitee|date(\"d/m/Y\")}}
\t\t\t</p>

\t\t\t<p>
\t\t\t\t{# On vérifie qu'un produit est bien associé à la commande #}

\t\t\t\t

\t\t\t\tLe(s) produit(s) concerné(s) :
\t\t\t\t<br />
\t\t\t\t{% for produitVeterinaire in commandeProduit %}
                {{ produitVeterinaire.LeProduitVeterinaire.LibelleProduit }}
                {% endfor %}

                <br /><br />

                Quantité(s) commandée(s) :
                <br />
                {% for produitVeterinaire in commandeProduit %}
                {{ produitVeterinaire.QteCommandee }}
                {% endfor %}

                <br /><br />

\t\t\t\t
\t\t\t</p>

\t\t\t<p>
\t\t\t\t{# On vérifie qu'un vétérinaire est bien associé à la commande #}

\t\t\t\t{% if uneCom.LeVeterinaire is not empty %}
\t\t\t\t\t<p>Mail du vétérinaire : {{uneCom.LeVeterinaire.MailVete}}</p>
\t\t\t\t\t<p>Tel du vétérinaire : {{uneCom.LeVeterinaire.TelVete}}</p>
\t\t\t\t{% endif %}
\t\t\t</p>
\t\t</div>
\t</div>

\t<div class=\"row\">
\t\t<div class=\"col-sm-9\" align=\"center\">
\t\t\t<div class=\"btn-group btn-group-justified\">
\t\t\t\t<a href=\"{{ path('gest_veterinaire_modifiercommande', {'id':uneCom.Id}) }}\" class=\"btn btn-warning\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\t\t\tModifier la commande
\t\t\t\t</a>

\t\t\t\t<a href=\"{{ path('gest_veterinaire_supprimercommande', {'id':uneCom.Id}) }}\" class=\"btn btn-danger\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\t\t\tSupprimer la commande
\t\t\t\t</a>

\t\t\t\t<a href=\"{{ path('gest_veterinaire_aff_listeCommande') }}\" class=\"btn btn-info\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\t\t\tRetour à la liste
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
{% endblock %}", "@GestVeterinaire/Commande/laCommande.html.twig", "C:\\wamp64\\www\\gestionVeterinaire\\src\\GestVeterinaireBundle\\Resources\\views\\Commande\\laCommande.html.twig");
    }
}
