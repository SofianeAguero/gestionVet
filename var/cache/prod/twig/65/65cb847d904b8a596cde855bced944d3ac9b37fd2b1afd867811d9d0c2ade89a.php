<?php

/* @GestVeterinaire/EnvoiEchantillon/modifEE.html.twig */
class __TwigTemplate_5204d526e0ef01df73504f978f77ec45f56fa1ac47baf5c1df17b0d75abc9927 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@GestVeterinaire/EnvoiEchantillon/modifEE.html.twig", 1);
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
        echo " Modification d'un envoi d'échantillon
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
\t\t    <li><a href=\"#\">Modification d'un envoi d'échantillon</a></li>
\t  \t</ul>
\t  \t<!-- ################################################################################################ -->
\t  \t<h6 class=\"heading\">Modification de l'envoi d'échantillon numéro ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["unEE"] ?? null), "id", array()), "html", null, true);
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
        echo twig_include($this->env, $context, "@GestVeterinaire/EnvoiEchantillon/formAjouModif.html.twig");
        echo "

<div style=\"margin-left: 45%;\">
\t<p>
\t\t<a class=\"btn btn-warning\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_unEnvoiEchantillon", array("id" => $this->getAttribute(($context["unEE"] ?? null), "id", array()))), "html", null, true);
        echo "\">Annulation de la modification</a>
\t</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "@GestVeterinaire/EnvoiEchantillon/modifEE.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 27,  65 => 23,  62 => 22,  53 => 16,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@GestVeterinaire/EnvoiEchantillon/modifEE.html.twig", "C:\\wamp64\\www\\gestionVeterinaire\\src\\GestVeterinaireBundle\\Resources\\views\\EnvoiEchantillon\\modifEE.html.twig");
    }
}
