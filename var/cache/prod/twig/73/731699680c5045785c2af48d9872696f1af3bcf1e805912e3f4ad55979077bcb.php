<?php

/* @GestVeterinaire/EnvoiEchantillon/ajoutEE.html.twig */
class __TwigTemplate_002e4aca5b9068fcb7498be4f4fa7faa0f9701e15c6c23ca7fa6b5065726df4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@GestVeterinaire/EnvoiEchantillon/ajoutEE.html.twig", 1);
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
        echo " Ajout d'un envoi d'échantillon
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
\t\t    <li><a href=\"#\">Ajout d'un envoi d'échantillon</a></li>
\t  \t</ul>
\t  \t<!-- ################################################################################################ -->
\t  \t<h6 class=\"heading\">Ajout d'un envoi d'échantillon</h6>
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
";
    }

    public function getTemplateName()
    {
        return "@GestVeterinaire/EnvoiEchantillon/ajoutEE.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 23,  59 => 22,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@GestVeterinaire/EnvoiEchantillon/ajoutEE.html.twig", "C:\\wamp64\\www\\gestionVeterinaire\\src\\GestVeterinaireBundle\\Resources\\views\\EnvoiEchantillon\\ajoutEE.html.twig");
    }
}
