<?php

/* @GestVeterinaire/Veterinaire/listeVeterinaire.html.twig */
class __TwigTemplate_ca70eabad95461b61628873842ea9d6af9be39b023c3e24af3e5bf9eacf9f33c extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GestVeterinaire/Veterinaire/listeVeterinaire.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GestVeterinaire/Veterinaire/listeVeterinaire.html.twig"));

        // line 1
        echo "<h2>Liste des vétérinaires</h2>

<ul>
\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lesVeterinaires"] ?? $this->getContext($context, "lesVeterinaires")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["vet"]) {
            // line 5
            echo "\t\t<li>
\t\t\t<a href=\"#\">";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["vet"], "MailVete", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["vet"], "TelVete", array()), "html", null, true);
            echo "</a>
\t\t\t<ul>
\t\t\t\t<a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_listecommandeEEVeterinaire", array("id" => $this->getAttribute($context["vet"], "id", array()))), "html", null, true);
            echo "\">Consultation de toutes les commandes et envois d'échantillion de ce vétérinaire</a>
\t\t\t</ul>
\t\t</li>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 12
            echo "\t\t<li>Pas de vétérinaire</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vet'], $context['_parent'], $context['loop']);
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
        return "@GestVeterinaire/Veterinaire/listeVeterinaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 18,  65 => 17,  61 => 14,  54 => 12,  45 => 8,  38 => 6,  35 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h2>Liste des vétérinaires</h2>

<ul>
\t{% for vet in lesVeterinaires %}
\t\t<li>
\t\t\t<a href=\"#\">{{vet.MailVete}} {{vet.TelVete}}</a>
\t\t\t<ul>
\t\t\t\t<a href=\"{{ path('gest_veterinaire_aff_listecommandeEEVeterinaire', {'id':vet.id}) }}\">Consultation de toutes les commandes et envois d'échantillion de ce vétérinaire</a>
\t\t\t</ul>
\t\t</li>
\t{% else %}
\t\t<li>Pas de vétérinaire</li>
\t{% endfor %}
</ul>

{# On affiche le(s) message(s) flash dont le nom est \"info\" #}
{% for message in app.session.flashbag.get('info') %}
\t<p>{{message}}</p>
{% endfor %}", "@GestVeterinaire/Veterinaire/listeVeterinaire.html.twig", "C:\\wamp64\\www\\gestionVeterinaire\\src\\GestVeterinaireBundle\\Resources\\views\\Veterinaire\\listeVeterinaire.html.twig");
    }
}
