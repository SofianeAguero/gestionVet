<?php

/* @GestVeterinaire/ProduitVeterinaire/listeProduit.html.twig */
class __TwigTemplate_712aa6461fec2b5042c2bfb550b091985933e7dcd4bf24cfa954ce351c1fdc1d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GestVeterinaire/ProduitVeterinaire/listeProduit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GestVeterinaire/ProduitVeterinaire/listeProduit.html.twig"));

        // line 1
        echo "<h2>Liste des produits</h2>

<ul>
\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lesProduits"] ?? $this->getContext($context, "lesProduits")));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  67 => 18,  63 => 17,  59 => 14,  52 => 12,  43 => 8,  38 => 6,  35 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h2>Liste des produits</h2>

<ul>
\t{% for prod in lesProduits %}
\t\t<li>
\t\t\t<a href=\"#\">{{prod.LibelleProduit}}</a>
\t\t\t<ul>
\t\t\t\t<a href=\"{{ path('gest_veterinaire_aff_listecommandeEEProduit', {'id':prod.id}) }}\">Consultation de toutes les commandes et envois d'échantillion de ce produit</a>
\t\t\t</ul>
\t\t</li>
\t{% else %}
\t\t<li>Pas de produit</li>
\t{% endfor %}
</ul>

{# On affiche le(s) message(s) flash dont le nom est \"info\" #}
{% for message in app.session.flashbag.get('info') %}
\t<p>{{message}}</p>
{% endfor %}", "@GestVeterinaire/ProduitVeterinaire/listeProduit.html.twig", "C:\\wamp64\\www\\gestionVeterinaire\\src\\GestVeterinaireBundle\\Resources\\views\\ProduitVeterinaire\\listeProduit.html.twig");
    }
}
