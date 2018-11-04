<?php

/* @GestVeterinaire/Delegue/afficherDelegue.html.twig */
class __TwigTemplate_a0d426675c0c3c90b7e2eb8aa066a468e274d489ca3341afcf432cf3f480a22e extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Consultation d'un delegue
";
    }

    // line 8
    public function block_entete_page($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["unDele"] ?? null), "NomDelegue", array()), "html", null, true);
        echo "</h6>
\t  \t<!-- ################################################################################################ -->
\t</section>
</div>         
";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["unDele"] ?? null), "NomDelegue", array()), "html", null, true);
        echo "</td>
\t\t                        </tr>
\t\t                        <tr>
\t\t                            <th scope=\"row\">Prénom</th>
\t\t                           \t<td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["unDele"] ?? null), "PrenomDelegue", array()), "html", null, true);
        echo "</td>
\t\t                        </tr>
\t\t                        <tr>
\t\t                            <th scope=\"row\">Phone / Tel.</th>
\t\t                            <td> ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["unDele"] ?? null), "TelDelegue", array()), "html", null, true);
        echo "</td>
\t\t                        </tr>
\t\t                        <tr>
\t\t                            <th scope=\"row\">Email</th>
\t\t                            <td> ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["unDele"] ?? null), "MailDelegue", array()), "html", null, true);
        echo "</td>
\t\t                        </tr>
\t\t                        <tr>
\t\t                            <th scope=\"row\">Région</th>
\t\t                            <td> ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["unDele"] ?? null), "LaRegion", array()), "LibelleRegion", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["unDele"] ?? null), "lesCategorieEspeces", array()));
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_modifierDelegueVeterinaire", array("id" => $this->getAttribute(($context["unDele"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\t\t\t\tModifier le delegue
\t\t\t\t\t\t</a>&nbsp;&nbsp;

\t\t\t\t\t<a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_supprimerDelegueVeterinaire", array("id" => $this->getAttribute(($context["unDele"] ?? null), "id", array()))), "html", null, true);
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
        return array (  152 => 76,  144 => 71,  136 => 66,  128 => 60,  119 => 58,  115 => 57,  105 => 50,  98 => 46,  91 => 42,  84 => 38,  77 => 34,  65 => 24,  62 => 23,  53 => 17,  43 => 9,  40 => 8,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@GestVeterinaire/Delegue/afficherDelegue.html.twig", "C:\\wamp64\\www\\gestionVeterinaire\\src\\GestVeterinaireBundle\\Resources\\views\\Delegue\\afficherDelegue.html.twig");
    }
}
