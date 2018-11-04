<?php

/* @GestVeterinaire/EnvoiEchantillon/formAjouModif.html.twig */
class __TwigTemplate_5ad34483893d9deaafd3141470535508c03fe7ef557977b0a7723eb60130a7f1 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GestVeterinaire/EnvoiEchantillon/formAjouModif.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GestVeterinaire/EnvoiEchantillon/formAjouModif.html.twig"));

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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["unEE"] ?? $this->getContext($context, "unEE")), "DateDemande", array()), "Y-m-d"), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["unEE"] ?? $this->getContext($context, "unEE")), "DateLivraison", array()), "Y-m-d"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute(($context["unEE"] ?? $this->getContext($context, "unEE")), "QteLivree", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["unEE"] ?? $this->getContext($context, "unEE")), "LeProduitVeterinaire", array()), "Id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["unEE"] ?? $this->getContext($context, "unEE")), "LeProduitVeterinaire", array()), "LibelleProduit", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["lesProduits"] ?? $this->getContext($context, "lesProduits")));
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["unEE"] ?? $this->getContext($context, "unEE")), "LeVeterinaire", array()), "Id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["unEE"] ?? $this->getContext($context, "unEE")), "LeVeterinaire", array()), "MailVete", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["lesVeterinaires"] ?? $this->getContext($context, "lesVeterinaires")));
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  155 => 59,  144 => 57,  140 => 56,  137 => 55,  133 => 53,  125 => 51,  123 => 50,  113 => 42,  102 => 40,  98 => 39,  95 => 38,  91 => 36,  83 => 34,  81 => 33,  66 => 25,  52 => 18,  45 => 13,  38 => 9,  33 => 6,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"content three_quarter\">
\t<div>
\t  <form method=\"post\">
\t  \t<!-- Si c'est l'affichage d'un envoi d'échantillon -->
\t  \t{% if unEE is defined %}
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"control-label col-sm-5\" for=\"dateDemande\">Date de la demande d'envoi:</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<input type=\"date\" class=\"form-control\" name=\"dateDemande\" id=\"dateDemande\" value=\"{{unEE.DateDemande|date('Y-m-d')}}\">
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}
\t\t<!-- Fin de la condition -->

\t\t<div class=\"form-group\">
\t\t\t<label class=\"control-label col-sm-5\" for=\"dateLivraison\">Date de la livraison :</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"date\" class=\"form-control\" name=\"dateLivraison\" id=\"dateLivraison\" {% if unEE is defined %} value=\"{{unEE.DateLivraison|date('Y-m-d')}}\" {% endif %}>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"control-label col-sm-5\" for=\"qteLivree\">Nombre d'échantillons :</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"number\" class=\"form-control\" name=\"qteLivree\" id=\"qteLivree\" {% if unEE is defined %} value=\"{{unEE.QteLivree}}\" {% endif %}>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"control-label col-sm-5\" for=\"choixProduit\">Le produit :</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<select name=\"choixProduit\" class=\"form-control\" required>
\t\t\t\t\t{% if unEE is defined %}
\t\t\t\t\t\t<option value =\"{{unEE.LeProduitVeterinaire.Id}}\">{{unEE.LeProduitVeterinaire.LibelleProduit}}</option>
\t\t\t\t\t{% else %}
\t\t            \t<option value=\"\">-- Choisissez -- </option>
\t\t            {% endif %}

\t\t\t\t\t{% for prod in lesProduits %}
\t\t\t\t\t\t<option value =\"{{prod.Id}}\">{{prod.LibelleProduit}}</option>
\t\t\t\t\t{% endfor %}
\t\t\t\t</select>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"control-label col-sm-5\" for=\"choixVeterinaire\">Le vétérinaire :</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<select name=\"choixVeterinaire\" class=\"form-control\" required>
\t\t\t\t\t{% if unEE is defined %}
\t\t\t\t\t\t<option value =\"{{unEE.LeVeterinaire.Id}}\">{{unEE.LeVeterinaire.MailVete}}</option>
\t\t\t\t\t{% else %}
\t\t            \t<option value=\"\">-- Choisissez -- </option>
\t\t            {% endif %}

\t\t\t\t\t{% for vet in lesVeterinaires %}
\t\t\t\t\t\t<option value =\"{{vet.Id}}\">{{vet.MailVete}}</option>
\t\t\t\t\t{% endfor %}
\t\t\t\t</select>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-info btn-block\">Valider</button>
\t\t\t</div>
\t\t</div>
\t</form>
\t</div>
</div>", "@GestVeterinaire/EnvoiEchantillon/formAjouModif.html.twig", "C:\\wamp64\\www\\gestionVeterinaire\\src\\GestVeterinaireBundle\\Resources\\views\\EnvoiEchantillon\\formAjouModif.html.twig");
    }
}
