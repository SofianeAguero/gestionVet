<?php

/* @GestVeterinaire/Commande/laCommande.html.twig */
class __TwigTemplate_6a2032f9f09095f1ab6dc12d96b841b0b7f5efb1714643313cee7595cf09c6ed extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Une commande
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
\t  \t<h6 class=\"heading\">Information sur la commande numéro  ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["uneCom"] ?? null), "Id", array()), "html", null, true);
        echo "</h6>
\t  \t<!-- ################################################################################################ -->
\t</section>
</div>         
";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "<div class=\"content three_quarter\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-9\" align=\"center\">
\t\t\t<p>
\t\t\t\tCommande effectuée le ";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["uneCom"] ?? null), "DateCommande", array()), "d/m/Y"), "html", null, true);
        echo " pour une livraison souhaitée le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["uneCom"] ?? null), "DateLivraisonSouhaitee", array()), "d/m/Y"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["commandeProduit"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["commandeProduit"] ?? null));
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
        if ( !twig_test_empty($this->getAttribute(($context["uneCom"] ?? null), "LeVeterinaire", array()))) {
            // line 58
            echo "\t\t\t\t\t<p>Mail du vétérinaire : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["uneCom"] ?? null), "LeVeterinaire", array()), "MailVete", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t<p>Tel du vétérinaire : ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["uneCom"] ?? null), "LeVeterinaire", array()), "TelVete", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_modifiercommande", array("id" => $this->getAttribute(($context["uneCom"] ?? null), "Id", array()))), "html", null, true);
        echo "\" class=\"btn btn-warning\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\t\t\tModifier la commande
\t\t\t\t</a>

\t\t\t\t<a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_supprimercommande", array("id" => $this->getAttribute(($context["uneCom"] ?? null), "Id", array()))), "html", null, true);
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
        return array (  169 => 78,  161 => 73,  153 => 68,  144 => 61,  139 => 59,  134 => 58,  132 => 57,  129 => 56,  120 => 48,  111 => 46,  107 => 45,  100 => 40,  91 => 38,  87 => 37,  80 => 32,  71 => 27,  65 => 23,  62 => 22,  53 => 16,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@GestVeterinaire/Commande/laCommande.html.twig", "C:\\wamp64\\www\\gestionVeterinaire\\src\\GestVeterinaireBundle\\Resources\\views\\Commande\\laCommande.html.twig");
    }
}
