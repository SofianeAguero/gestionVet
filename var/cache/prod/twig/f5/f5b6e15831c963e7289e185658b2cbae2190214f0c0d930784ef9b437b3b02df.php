<?php

/* @GestVeterinaire/Delegue/supprimer.html.twig */
class __TwigTemplate_be1a98a3d48142b6a3f98cda15635a414b7007656610f88545a0390782cddb94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@GestVeterinaire/Delegue/supprimer.html.twig", 1);
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
        echo " Suppression d'un delegue Veterinaire
";
    }

    // line 6
    public function block_entete_page($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"wrapper\">
\t<section id=\"breadcrumb\" class=\"hoc clear\"> 
\t\t<!-- ################################################################################################ -->
\t\t<ul>
\t\t    <li><a href=\"#\">Page d'accueil</a></li>
\t\t    <li><a href=\"#\">Suppression d'un delegue veterinaire</a></li>
\t  \t</ul>
\t  \t<!-- ################################################################################################ -->

\t  \t<h6 class=\"heading\">Suppression du delegue veterinaire </h6>
\t  \t<!-- ################################################################################################ -->

\t</section>
</div>
";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        if (array_key_exists("uneCateg", $context)) {
            // line 24
            echo "<div class=\"content three_quarter\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-9\" align=\"center\">
\t\t\t<p>Impossible de supprimer le delegue veterinaire car une specialisation d'espece animal y est associé!</p>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-sm-9\" align=\"center\">
\t\t\t<div class=\"btn-group btn-group-justified\">
\t\t\t\t<p><a class=\"btn btn-warning\" href=\"";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_listeDelegueVeto");
            echo "\">retour à la liste</a></p>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        } else {
            // line 39
            echo " 
<div class=\"content three_quarter\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-9\" align=\"center\">
\t\t\t<p>Etes-vous certain de vouloir supprimer la region ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute(($context["unDele"] ?? null), "NomDelegue", array()), "html", null, true);
            echo " </p>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-sm-9\" align=\"center\">
\t\t\t<div class=\"btn-group btn-group-justified\">
\t\t\t\t<form class=\"form-group\" method=\"POST\">
\t\t\t\t\t<input class=\"btn btn-info\" type=\"submit\" value=\"Supprimer\">
\t\t\t\t</form>
\t\t\t\t<p><a class=\"btn btn-warning\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_uneRegion", array("id" => $this->getAttribute(($context["unDele"] ?? null), "id", array()))), "html", null, true);
            echo "\">Annulation de la suppression</a></p>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        }
    }

    public function getTemplateName()
    {
        return "@GestVeterinaire/Delegue/supprimer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 52,  93 => 43,  87 => 39,  77 => 33,  66 => 24,  64 => 23,  61 => 22,  43 => 7,  40 => 6,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@GestVeterinaire/Delegue/supprimer.html.twig", "C:\\wamp64\\www\\gestionVeterinaire\\src\\GestVeterinaireBundle\\Resources\\views\\Delegue\\supprimer.html.twig");
    }
}
