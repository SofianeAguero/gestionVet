<?php

/* @GestVeterinaire/Commande/suppCommande.html.twig */
class __TwigTemplate_69585c7f9d11a6e4508c11a155332a03d16251952df5a17ff98efa507d8bbede extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@GestVeterinaire/Commande/suppCommande.html.twig", 1);
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
        echo " Suppression d'une commande
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
\t\t    <li><a href=\"#\">Suppression d'une commande</a></li>
\t  \t</ul>
\t  \t<!-- ################################################################################################ -->
\t  \t<h6 class=\"heading\">Suppression de la commande numéro ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["uneCom"] ?? null), "id", array()), "html", null, true);
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
\t\t\t<p>Etes-vous certain de vouloir supprimer la commande effectuée le ";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["uneCom"] ?? null), "DateCommande", array()), "d/m/Y"), "html", null, true);
        echo " pour une livraison souhaitée le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["uneCom"] ?? null), "DateLivraisonSouhaitee", array()), "d/m/Y"), "html", null, true);
        echo "</p>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-sm-9\" align=\"center\">
\t\t\t<div class=\"btn-group btn-group-justified\">
\t\t\t\t<form class=\"form-group\" method=\"POST\">
\t\t\t\t\t<input class=\"btn btn-info\" type=\"submit\" value=\"Supprimer\">
\t\t\t\t</form>
\t\t\t\t<p><a class=\"btn btn-warning\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_unecommande", array("id" => $this->getAttribute(($context["uneCom"] ?? null), "id", array()))), "html", null, true);
        echo "\">Annulation de la suppression</a></p>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@GestVeterinaire/Commande/suppCommande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 35,  70 => 26,  65 => 23,  62 => 22,  53 => 16,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@GestVeterinaire/Commande/suppCommande.html.twig", "C:\\wamp64\\www\\gestionVeterinaire\\src\\GestVeterinaireBundle\\Resources\\views\\Commande\\suppCommande.html.twig");
    }
}
