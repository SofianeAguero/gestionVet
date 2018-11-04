<?php

/* @GestVeterinaire/EnvoiEchantillon/lEE.html.twig */
class __TwigTemplate_c55baee6ea843e820de430857f71a04d130203530fdd7d9a2cc0e3907ddf7f44 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Un envoi d'échantillon
";
    }

    // line 7
    public function block_entete_page($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["unEE"] ?? null), "Id", array()), "html", null, true);
        echo "</h6>
\t  \t<!-- ################################################################################################ -->
\t</section>
</div>         
";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        // line 22
        echo "<div class=\"content three_quarter\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-9\" align=\"center\">
\t\t\t<p>
\t\t\t\tDemande d'envoi effectuée le ";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["unEE"] ?? null), "DateDemande", array()), "d/m/Y"), "html", null, true);
        echo ", livré le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["unEE"] ?? null), "DateLivraison", array()), "d/m/Y"), "html", null, true);
        echo "
\t\t\t</p>

\t\t\t<p>
\t\t\t\tNombre d'échantillons envoyés : ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["unEE"] ?? null), "QteLivree", array()), "html", null, true);
        echo "
\t\t\t</p>

\t\t\t<p>
\t\t\t\t";
        // line 35
        echo "
\t\t\t\t";
        // line 36
        if ( !twig_test_empty($this->getAttribute(($context["unEE"] ?? null), "LeProduitVeterinaire", array()))) {
            // line 37
            echo "\t\t\t\t\t<p>Le produit concerné : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["unEE"] ?? null), "LeProduitVeterinaire", array()), "LibelleProduit", array()), "html", null, true);
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
        if ( !twig_test_empty($this->getAttribute(($context["unEE"] ?? null), "LeVeterinaire", array()))) {
            // line 45
            echo "\t\t\t\t\t<p>Mail du vétérinaire : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["unEE"] ?? null), "LeVeterinaire", array()), "MailVete", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t<p>Tel du vétérinaire : ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["unEE"] ?? null), "LeVeterinaire", array()), "TelVete", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_modifierEnvoiEchantillon", array("id" => $this->getAttribute(($context["unEE"] ?? null), "Id", array()))), "html", null, true);
        echo "\" class=\"btn btn-warning\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\t\t\tModifier l'envoi d'échantillon
\t\t\t\t</a>

\t\t\t\t<a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_supprimerEnvoiEchantillon", array("id" => $this->getAttribute(($context["unEE"] ?? null), "Id", array()))), "html", null, true);
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
        return array (  143 => 65,  135 => 60,  127 => 55,  118 => 48,  113 => 46,  108 => 45,  106 => 44,  103 => 43,  98 => 39,  92 => 37,  90 => 36,  87 => 35,  80 => 30,  71 => 26,  65 => 22,  62 => 21,  53 => 16,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@GestVeterinaire/EnvoiEchantillon/lEE.html.twig", "C:\\wamp64\\www\\gestionVeterinaire\\src\\GestVeterinaireBundle\\Resources\\views\\EnvoiEchantillon\\lEE.html.twig");
    }
}
