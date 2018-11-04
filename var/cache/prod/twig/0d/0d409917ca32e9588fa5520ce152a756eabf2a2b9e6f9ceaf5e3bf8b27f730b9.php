<?php

/* @GestVeterinaire/Region/ajoutRegion.html.twig */
class __TwigTemplate_0016e87b1a1b8b80bd4d6996dd7cd2552602739d990b6eeffcbdd3e6100a21c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@GestVeterinaire/Region/ajoutRegion.html.twig", 1);
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
        echo " Ajout d'une region
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
\t\t    <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_ajout_Region");
        echo "\">Ajout d'une region</a></li>
\t  \t</ul>
\t  \t<!-- ################################################################################################ -->
\t  \t<h6 class=\"heading\">Ajout d'une region</h6>
\t  \t<!-- ################################################################################################ -->
\t</section>
</div>         
";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo twig_include($this->env, $context, "@GestVeterinaire/Region/formAjout.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "@GestVeterinaire/Region/ajoutRegion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 23,  62 => 22,  50 => 13,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@GestVeterinaire/Region/ajoutRegion.html.twig", "C:\\wamp64\\www\\gestionVeterinaire\\src\\GestVeterinaireBundle\\Resources\\views\\Region\\ajoutRegion.html.twig");
    }
}
