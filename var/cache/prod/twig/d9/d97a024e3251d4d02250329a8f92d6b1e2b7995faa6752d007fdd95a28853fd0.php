<?php

/* @GestVeterinaire/ProduitVeterinaire/listeProduit.html.twig */
class __TwigTemplate_6d037c8c813e13ae64de31cfcaad19aa27b9c28b1c927c0a4a9b27e50fa4b7ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h2>Liste des produits</h2>

<ul>
\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lesProduits"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
            // line 5
            echo "\t\t<li>
\t\t\t<a href=\"#\">";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "LibelleProduit", array()), "html", null, true);
            echo "</a>
\t\t\t<ul>
\t\t\t\t<a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_listecommandeEEProduit", array("id" => $this->getAttribute($context["prod"], "id", array()))), "html", null, true);
            echo "\">Consultation de toutes les commandes et envois d'échantillion de ce produit</a>
\t\t\t</ul>
\t\t</li>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 12
            echo "\t\t<li>Pas de produit</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>

";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            echo "\t<p>";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@GestVeterinaire/ProduitVeterinaire/listeProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 18,  57 => 17,  53 => 14,  46 => 12,  37 => 8,  32 => 6,  29 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@GestVeterinaire/ProduitVeterinaire/listeProduit.html.twig", "C:\\wamp64\\www\\gestionVeterinaire\\src\\GestVeterinaireBundle\\Resources\\views\\ProduitVeterinaire\\listeProduit.html.twig");
    }
}
