<?php

/* @GestVeterinaire/Region/afficherRegion.html.twig */
class __TwigTemplate_87564ccd24f817d15487a22fbbb71a64092abec1e45b309f6475cb8a290b1898 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@GestVeterinaire/Region/afficherRegion.html.twig", 1);
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
        echo " - Consultation d'une Region
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
\t\t    <li><a href=\"#\">Une Region</a></li>
\t  \t</ul>
\t  \t<!-- ################################################################################################ -->
\t  \t<h6 class=\"heading\">Information de la region : ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["uneRegion"] ?? null), "libelleRegion", array()), "html", null, true);
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
        echo "\t\t<div class=\"col-sm-9\" align=\"center\">

\t<p>
\t\tnom : ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["uneRegion"] ?? null), "libelleRegion", array()), "html", null, true);
        echo "
\t\t<br />
\t</p>
\t

\t<p>
\t\t<a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_modifierRegion", array("id" => $this->getAttribute(($context["uneRegion"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\tModifier la region
\t\t</a>&nbsp;&nbsp;

\t\t<a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_supprimerRegion", array("id" => $this->getAttribute(($context["uneRegion"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\tSupprimer la region
\t\t</a>

\t\t<a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_listeRegion");
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à la liste
\t\t</a> 
\t</p>
</div>

";
    }

    public function getTemplateName()
    {
        return "@GestVeterinaire/Region/afficherRegion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 42,  87 => 37,  79 => 32,  70 => 26,  65 => 23,  62 => 22,  53 => 16,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@GestVeterinaire/Region/afficherRegion.html.twig", "C:\\wamp64\\www\\gestionVeterinaire\\src\\GestVeterinaireBundle\\Resources\\views\\Region\\afficherRegion.html.twig");
    }
}
