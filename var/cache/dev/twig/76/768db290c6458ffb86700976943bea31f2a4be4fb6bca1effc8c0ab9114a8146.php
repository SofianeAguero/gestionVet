<?php

/* @GestVeterinaire/Delegue/afficherDelegue.html.twig */
class __TwigTemplate_bbc783c3d8676543e4ee5b91cb227a440acdb5141d8be787f4a531b250c5c7ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@GestVeterinaire/Delegue/afficherDelegue.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GestVeterinaire/Delegue/afficherDelegue.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GestVeterinaire/Delegue/afficherDelegue.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Consultation d'un delegue
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_entete_page($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete_page"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete_page"));

        // line 9
        echo "<div class=\"wrapper\">
\t<section id=\"breadcrumb\" class=\"hoc clear\"> 
\t\t<!-- ################################################################################################ -->
\t\t<ul>
\t\t    <li><a href=\"#\">Page d'accueil</a></li>
\t\t    <li><a href=\"#\">Un delegue</a></li>
\t  \t</ul>
\t  \t<!-- ################################################################################################ -->
\t  \t<h6 class=\"heading\">Information du delegue : ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["unDele"] ?? $this->getContext($context, "unDele")), "NomDelegue", array()), "html", null, true);
        echo "</h6>
\t  \t<!-- ################################################################################################ -->
\t</section>
</div>         
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "
\t\t<div class=\"col-sm-12\" align=\"center\">
\t\t\t<div>    
\t\t        
\t\t        <div class=\"row\" id=\"coordonnees\">
\t\t            <div class=\"col-sm-7\">
\t\t                <table class=\"table\">
\t\t                    <tbody><br>
\t\t                        <tr>
\t\t                            <th scope=\"row\">Nom</th>
\t\t                            <td> ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["unDele"] ?? $this->getContext($context, "unDele")), "NomDelegue", array()), "html", null, true);
        echo "</td>
\t\t                        </tr>
\t\t                        <tr>
\t\t                            <th scope=\"row\">Prénom</th>
\t\t                           \t<td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["unDele"] ?? $this->getContext($context, "unDele")), "PrenomDelegue", array()), "html", null, true);
        echo "</td>
\t\t                        </tr>
\t\t                        <tr>
\t\t                            <th scope=\"row\">Phone / Tel.</th>
\t\t                            <td> ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["unDele"] ?? $this->getContext($context, "unDele")), "TelDelegue", array()), "html", null, true);
        echo "</td>
\t\t                        </tr>
\t\t                        <tr>
\t\t                            <th scope=\"row\">Email</th>
\t\t                            <td> ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["unDele"] ?? $this->getContext($context, "unDele")), "MailDelegue", array()), "html", null, true);
        echo "</td>
\t\t                        </tr>
\t\t                        <tr>
\t\t                            <th scope=\"row\">Région</th>
\t\t                            <td> ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["unDele"] ?? $this->getContext($context, "unDele")), "LaRegion", array()), "LibelleRegion", array()), "html", null, true);
        echo "</td>
\t\t                        </tr>
\t\t                        <tr>
\t\t                            <th scope=\"row\">Spécialités</th>
\t\t                            <td>
\t\t\t                            <table>
\t\t\t                            \t<tr>
\t\t\t       \t\t\t\t\t\t\t\t";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["unDele"] ?? $this->getContext($context, "unDele")), "lesCategorieEspeces", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["spe"]) {
            // line 58
            echo "\t\t\t\t                            \t\t<td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["spe"], "libelleEspece", array()), "html", null, true);
            echo "</td>
\t\t\t\t                            \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['spe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t\t                            \t</tr>
\t\t\t                            </table>
\t\t                            </td>
\t\t\t\t\t\t\t\t</tr>
\t\t                    </tbody>
\t\t                </table>
\t\t                <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_modifierDelegueVeterinaire", array("id" => $this->getAttribute(($context["unDele"] ?? $this->getContext($context, "unDele")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\t\t\t\tModifier le delegue
\t\t\t\t\t\t</a>&nbsp;&nbsp;

\t\t\t\t\t<a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_supprimerDelegueVeterinaire", array("id" => $this->getAttribute(($context["unDele"] ?? $this->getContext($context, "unDele")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\tSupprimer le delegue
\t\t</a>

\t\t<a href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_listeDelegueVeto");
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à la liste
\t\t</a> 
\t\t            </div>
\t\t        
\t\t    
\t

\t
</div>
</div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@GestVeterinaire/Delegue/afficherDelegue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 76,  186 => 71,  178 => 66,  170 => 60,  161 => 58,  157 => 57,  147 => 50,  140 => 46,  133 => 42,  126 => 38,  119 => 34,  107 => 24,  98 => 23,  83 => 17,  73 => 9,  64 => 8,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block title %}
\t{{ parent()}} - Consultation d'un delegue
{% endblock %}


{% block entete_page %}
<div class=\"wrapper\">
\t<section id=\"breadcrumb\" class=\"hoc clear\"> 
\t\t<!-- ################################################################################################ -->
\t\t<ul>
\t\t    <li><a href=\"#\">Page d'accueil</a></li>
\t\t    <li><a href=\"#\">Un delegue</a></li>
\t  \t</ul>
\t  \t<!-- ################################################################################################ -->
\t  \t<h6 class=\"heading\">Information du delegue : {{unDele.NomDelegue}}</h6>
\t  \t<!-- ################################################################################################ -->
\t</section>
</div>         
{% endblock %}

{% block body %}

\t\t<div class=\"col-sm-12\" align=\"center\">
\t\t\t<div>    
\t\t        
\t\t        <div class=\"row\" id=\"coordonnees\">
\t\t            <div class=\"col-sm-7\">
\t\t                <table class=\"table\">
\t\t                    <tbody><br>
\t\t                        <tr>
\t\t                            <th scope=\"row\">Nom</th>
\t\t                            <td> {{unDele.NomDelegue}}</td>
\t\t                        </tr>
\t\t                        <tr>
\t\t                            <th scope=\"row\">Prénom</th>
\t\t                           \t<td>{{unDele.PrenomDelegue}}</td>
\t\t                        </tr>
\t\t                        <tr>
\t\t                            <th scope=\"row\">Phone / Tel.</th>
\t\t                            <td> {{unDele.TelDelegue}}</td>
\t\t                        </tr>
\t\t                        <tr>
\t\t                            <th scope=\"row\">Email</th>
\t\t                            <td> {{unDele.MailDelegue}}</td>
\t\t                        </tr>
\t\t                        <tr>
\t\t                            <th scope=\"row\">Région</th>
\t\t                            <td> {{unDele.LaRegion.LibelleRegion}}</td>
\t\t                        </tr>
\t\t                        <tr>
\t\t                            <th scope=\"row\">Spécialités</th>
\t\t                            <td>
\t\t\t                            <table>
\t\t\t                            \t<tr>
\t\t\t       \t\t\t\t\t\t\t\t{% for spe in unDele.lesCategorieEspeces %}
\t\t\t\t                            \t\t<td>{{spe.libelleEspece}}</td>
\t\t\t\t                            \t{% endfor %}
\t\t\t                            \t</tr>
\t\t\t                            </table>
\t\t                            </td>
\t\t\t\t\t\t\t\t</tr>
\t\t                    </tbody>
\t\t                </table>
\t\t                <a href=\"{{ path('gest_veterinaire_modifierDelegueVeterinaire', {'id':unDele.id}) }}\" class=\"btn btn-default\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\t\t\t\tModifier le delegue
\t\t\t\t\t\t</a>&nbsp;&nbsp;

\t\t\t\t\t<a href=\"{{ path('gest_veterinaire_supprimerDelegueVeterinaire', {'id':unDele.id}) }}\" class=\"btn btn-danger\">
\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\tSupprimer le delegue
\t\t</a>

\t\t<a href=\"{{ path('gest_veterinaire_aff_listeDelegueVeto') }}\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à la liste
\t\t</a> 
\t\t            </div>
\t\t        
\t\t    
\t

\t
</div>
</div>
</div>

{% endblock %}", "@GestVeterinaire/Delegue/afficherDelegue.html.twig", "C:\\wamp64\\www\\gestionVeterinaire\\src\\GestVeterinaireBundle\\Resources\\views\\Delegue\\afficherDelegue.html.twig");
    }
}
