<?php

/* @GestVeterinaire/EnvoiEchantillon/formAjouModif.html.twig */
class __TwigTemplate_e1f6469e5b469945c05fa2a302cc11f0d35e1a651dfbc221920abdbabfd18fe1 extends Twig_Template
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
        echo "<div class=\"content three_quarter\">
\t<div>
\t  <form method=\"post\">
\t  \t<!-- Si c'est l'affichage d'un envoi d'échantillon -->
\t  \t";
        // line 5
        if (array_key_exists("unEE", $context)) {
            // line 6
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"control-label col-sm-5\" for=\"dateDemande\">Date de la demande d'envoi:</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<input type=\"date\" class=\"form-control\" name=\"dateDemande\" id=\"dateDemande\" value=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["unEE"] ?? null), "DateDemande", array()), "Y-m-d"), "html", null, true);
            echo "\">
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 13
        echo "\t\t<!-- Fin de la condition -->

\t\t<div class=\"form-group\">
\t\t\t<label class=\"control-label col-sm-5\" for=\"dateLivraison\">Date de la livraison :</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"date\" class=\"form-control\" name=\"dateLivraison\" id=\"dateLivraison\" ";
        // line 18
        if (array_key_exists("unEE", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["unEE"] ?? null), "DateLivraison", array()), "Y-m-d"), "html", null, true);
            echo "\" ";
        }
        echo ">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"control-label col-sm-5\" for=\"qteLivree\">Nombre d'échantillons :</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"number\" class=\"form-control\" name=\"qteLivree\" id=\"qteLivree\" ";
        // line 25
        if (array_key_exists("unEE", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["unEE"] ?? null), "QteLivree", array()), "html", null, true);
            echo "\" ";
        }
        echo ">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"control-label col-sm-5\" for=\"choixProduit\">Le produit :</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<select name=\"choixProduit\" class=\"form-control\" required>
\t\t\t\t\t";
        // line 33
        if (array_key_exists("unEE", $context)) {
            // line 34
            echo "\t\t\t\t\t\t<option value =\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["unEE"] ?? null), "LeProduitVeterinaire", array()), "Id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["unEE"] ?? null), "LeProduitVeterinaire", array()), "LibelleProduit", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        } else {
            // line 36
            echo "\t\t            \t<option value=\"\">-- Choisissez -- </option>
\t\t            ";
        }
        // line 38
        echo "
\t\t\t\t\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lesProduits"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
            // line 40
            echo "\t\t\t\t\t\t<option value =\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "Id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "LibelleProduit", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"control-label col-sm-5\" for=\"choixVeterinaire\">Le vétérinaire :</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<select name=\"choixVeterinaire\" class=\"form-control\" required>
\t\t\t\t\t";
        // line 50
        if (array_key_exists("unEE", $context)) {
            // line 51
            echo "\t\t\t\t\t\t<option value =\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["unEE"] ?? null), "LeVeterinaire", array()), "Id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["unEE"] ?? null), "LeVeterinaire", array()), "MailVete", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        } else {
            // line 53
            echo "\t\t            \t<option value=\"\">-- Choisissez -- </option>
\t\t            ";
        }
        // line 55
        echo "
\t\t\t\t\t";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lesVeterinaires"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["vet"]) {
            // line 57
            echo "\t\t\t\t\t\t<option value =\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["vet"], "Id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["vet"], "MailVete", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-info btn-block\">Valider</button>
\t\t\t</div>
\t\t</div>
\t</form>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "@GestVeterinaire/EnvoiEchantillon/formAjouModif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 59,  138 => 57,  134 => 56,  131 => 55,  127 => 53,  119 => 51,  117 => 50,  107 => 42,  96 => 40,  92 => 39,  89 => 38,  85 => 36,  77 => 34,  75 => 33,  60 => 25,  46 => 18,  39 => 13,  32 => 9,  27 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@GestVeterinaire/EnvoiEchantillon/formAjouModif.html.twig", "C:\\wamp64\\www\\gestionVeterinaire\\src\\GestVeterinaireBundle\\Resources\\views\\EnvoiEchantillon\\formAjouModif.html.twig");
    }
}
