<?php

/* @GestVeterinaire/Delegue/modifier.html.twig */
class __TwigTemplate_4f92eca7e99515c484b51795470acf0c50d037c134e1ac5beb165bd930149753 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@GestVeterinaire/Delegue/modifier.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'entete_page' => array($this, 'block_entete_page'),
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
        echo " - Page d'accueil
";
    }

    // line 7
    public function block_entete_page($context, array $blocks = array())
    {
        // line 8
        echo "\t<h2>Modification d'un delegue ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["unDele"] ?? null), "id", array()), "html", null, true);
        echo "</h2>

\t";
        // line 10
        echo twig_include($this->env, $context, "@GestVeterinaire/Delegue/formAjout.html.twig");
        echo "

\t<p>
\t\t<a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_unDelegueVeterinaire", array("id" => $this->getAttribute(($context["unDele"] ?? null), "id", array()))), "html", null, true);
        echo "\">Annulation de la modification : Retour au delegue</a>
\t</p>
";
    }

    public function getTemplateName()
    {
        return "@GestVeterinaire/Delegue/modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 13,  48 => 10,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@GestVeterinaire/Delegue/modifier.html.twig", "C:\\wamp64\\www\\gestionVeterinaire\\src\\GestVeterinaireBundle\\Resources\\views\\Delegue\\modifier.html.twig");
    }
}
