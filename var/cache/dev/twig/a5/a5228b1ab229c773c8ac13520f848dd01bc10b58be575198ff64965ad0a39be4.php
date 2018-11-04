<?php

/* @GestVeterinaire/Commande/formAjouModif.html.twig */
class __TwigTemplate_8b9a689f0d371a6addc8cea23adefb9fd81628be9f6544d4b36ceede41655516 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GestVeterinaire/Commande/formAjouModif.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GestVeterinaire/Commande/formAjouModif.html.twig"));

        // line 1
        echo "<div class=\"content three_quarter\">
  \t<form method=\"post\">
  \t\t";
        // line 3
        if (array_key_exists("uneCom", $context)) {
            // line 4
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"control-label col-sm-5\" for=\"dateCommande\">Date de la commande :</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<input type=\"date\" class=\"form-control\" name=\"dateCommande\" id=\"dateCommande\" value=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["uneCom"] ?? $this->getContext($context, "uneCom")), "DateCommande", array()), "Y-m-d"), "html", null, true);
            echo "\">
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 11
        echo "
\t\t<div class=\"form-group\">
\t\t\t<label class=\"control-label col-sm-5\" for=\"dateLivraisonSouhaitee\">Livraison souhaitée à la date :</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"date\" class=\"form-control\" name=\"dateLivraisonSouhaitee\" id=\"dateLivraisonSouhaitee\" ";
        // line 15
        if (array_key_exists("uneCom", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["uneCom"] ?? $this->getContext($context, "uneCom")), "DateLivraisonSouhaitee", array()), "Y-m-d"), "html", null, true);
            echo "\" ";
        }
        echo ">
\t\t\t</div>
\t\t</div>
\t\t
\t\t<!-- Si c'est l'affichage d'une commande -->
\t\t";
        // line 20
        if (array_key_exists("uneCom", $context)) {
            // line 21
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["commandeProduit"] ?? $this->getContext($context, "commandeProduit")));
            foreach ($context['_seq'] as $context["_key"] => $context["produitVeterinaire"]) {
                // line 22
                echo "\t\t<div class=\"form-group\">
\t\t\t<label class=\"control-label col-sm-5\" for=\"choixProduit\">Le produit :</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<select name=\"choixProduit\" class=\"form-control\" required>
                \t<option value =\"";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produitVeterinaire"], "LeProduitVeterinaire", array()), "Id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produitVeterinaire"], "LeProduitVeterinaire", array()), "LibelleProduit", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t<br />
\t\t\t\t\t";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["lesProduits"] ?? $this->getContext($context, "lesProduits")));
                foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                    // line 29
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
                // line 31
                echo "\t\t\t\t</select>
\t\t\t</div>
\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produitVeterinaire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t<!-- Sinon -->
\t\t";
        } else {
            // line 37
            echo "\t\t<div class=\"form-group\">
\t\t\t<label class=\"control-label col-sm-5\" for=\"choixProduit\">Le produit :</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<select name=\"choixProduit\" class=\"form-control\" required>
                \t<option value=\"\">-- Choisissez -- </option>
                \t";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lesProduits"] ?? $this->getContext($context, "lesProduits")));
            foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                // line 43
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
            // line 45
            echo "\t\t\t\t</select>
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 49
        echo "
\t\t<!-- Si c'est l'affichage d'une commande -->
\t\t";
        // line 51
        if (array_key_exists("uneCom", $context)) {
            // line 52
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["commandeProduit"] ?? $this->getContext($context, "commandeProduit")));
            foreach ($context['_seq'] as $context["_key"] => $context["produitVeterinaire"]) {
                // line 53
                echo "\t\t<div class=\"form-group\">
\t\t  <label class=\"control-label col-sm-2\" for=\"qteCommandee\">Quantité commandée :</label>
\t\t  <div class=\"col-sm-10\">
\t\t    <input type=\"number\" class=\"form-control\" name=\"qteCommandee\" id=\"qteCommandee\" value=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["produitVeterinaire"], "QteCommandee", array()), "html", null, true);
                echo "\">
\t\t  </div>
\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produitVeterinaire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "\t\t<!-- Sinon -->
\t\t";
        } else {
            // line 62
            echo "\t\t<div class=\"form-group\">
\t\t  <label class=\"control-label col-sm-2\" for=\"qteCommandee\">Quantité commandée :</label>
\t\t  <div class=\"col-sm-10\">
\t\t    <input type=\"number\" class=\"form-control\" name=\"qteCommandee\" id=\"qteCommandee\">
\t\t  </div>
\t\t</div>
\t\t";
        }
        // line 69
        echo "
\t\t<div class=\"form-group\">
\t\t\t<label class=\"control-label col-sm-5\" for=\"choixVeterinaire\">Le vétérinaire :</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<select name=\"choixVeterinaire\" class=\"form-control\" required>
\t\t\t\t\t";
        // line 74
        if (array_key_exists("uneCom", $context)) {
            // line 75
            echo "\t\t\t\t\t\t<option value =\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["uneCom"] ?? $this->getContext($context, "uneCom")), "LeVeterinaire", array()), "Id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["uneCom"] ?? $this->getContext($context, "uneCom")), "LeVeterinaire", array()), "MailVete", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        } else {
            // line 77
            echo "\t\t            \t<option value=\"\">-- Choisissez -- </option>
\t\t            ";
        }
        // line 79
        echo "
\t\t\t\t\t";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lesVeterinaires"] ?? $this->getContext($context, "lesVeterinaires")));
        foreach ($context['_seq'] as $context["_key"] => $context["vet"]) {
            // line 81
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
        // line 83
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-info btn-block\">Valider</button>
\t\t\t</div>
\t\t</div>
\t</form>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@GestVeterinaire/Commande/formAjouModif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 83,  204 => 81,  200 => 80,  197 => 79,  193 => 77,  185 => 75,  183 => 74,  176 => 69,  167 => 62,  163 => 60,  153 => 56,  148 => 53,  143 => 52,  141 => 51,  137 => 49,  131 => 45,  120 => 43,  116 => 42,  109 => 37,  105 => 35,  96 => 31,  85 => 29,  81 => 28,  74 => 26,  68 => 22,  63 => 21,  61 => 20,  49 => 15,  43 => 11,  36 => 7,  31 => 4,  29 => 3,  25 => 1,);
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
  \t<form method=\"post\">
  \t\t{% if uneCom is defined %}
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"control-label col-sm-5\" for=\"dateCommande\">Date de la commande :</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<input type=\"date\" class=\"form-control\" name=\"dateCommande\" id=\"dateCommande\" value=\"{{uneCom.DateCommande|date('Y-m-d')}}\">
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}

\t\t<div class=\"form-group\">
\t\t\t<label class=\"control-label col-sm-5\" for=\"dateLivraisonSouhaitee\">Livraison souhaitée à la date :</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"date\" class=\"form-control\" name=\"dateLivraisonSouhaitee\" id=\"dateLivraisonSouhaitee\" {% if uneCom is defined %} value=\"{{uneCom.DateLivraisonSouhaitee|date('Y-m-d')}}\" {% endif %}>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<!-- Si c'est l'affichage d'une commande -->
\t\t{% if uneCom is defined %}
\t\t{% for produitVeterinaire in commandeProduit %}
\t\t<div class=\"form-group\">
\t\t\t<label class=\"control-label col-sm-5\" for=\"choixProduit\">Le produit :</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<select name=\"choixProduit\" class=\"form-control\" required>
                \t<option value =\"{{produitVeterinaire.LeProduitVeterinaire.Id}}\">{{produitVeterinaire.LeProduitVeterinaire.LibelleProduit}}</option>
\t\t\t\t\t<br />
\t\t\t\t\t{% for prod in lesProduits %}
\t\t\t\t\t\t<option value =\"{{prod.Id}}\">{{prod.LibelleProduit}}</option>
\t\t\t\t\t{% endfor %}
\t\t\t\t</select>
\t\t\t</div>
\t\t</div>
\t\t{% endfor %}
\t\t<!-- Sinon -->
\t\t{% else %}
\t\t<div class=\"form-group\">
\t\t\t<label class=\"control-label col-sm-5\" for=\"choixProduit\">Le produit :</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<select name=\"choixProduit\" class=\"form-control\" required>
                \t<option value=\"\">-- Choisissez -- </option>
                \t{% for prod in lesProduits %}
\t\t\t\t\t\t<option value =\"{{prod.Id}}\">{{prod.LibelleProduit}}</option>
\t\t\t\t\t{% endfor %}
\t\t\t\t</select>
\t\t\t</div>
\t\t</div>
\t\t{% endif %}

\t\t<!-- Si c'est l'affichage d'une commande -->
\t\t{% if uneCom is defined %}
\t\t{% for produitVeterinaire in commandeProduit %}
\t\t<div class=\"form-group\">
\t\t  <label class=\"control-label col-sm-2\" for=\"qteCommandee\">Quantité commandée :</label>
\t\t  <div class=\"col-sm-10\">
\t\t    <input type=\"number\" class=\"form-control\" name=\"qteCommandee\" id=\"qteCommandee\" value=\"{{produitVeterinaire.QteCommandee}}\">
\t\t  </div>
\t\t</div>
\t\t{% endfor %}
\t\t<!-- Sinon -->
\t\t{% else %}
\t\t<div class=\"form-group\">
\t\t  <label class=\"control-label col-sm-2\" for=\"qteCommandee\">Quantité commandée :</label>
\t\t  <div class=\"col-sm-10\">
\t\t    <input type=\"number\" class=\"form-control\" name=\"qteCommandee\" id=\"qteCommandee\">
\t\t  </div>
\t\t</div>
\t\t{% endif %}

\t\t<div class=\"form-group\">
\t\t\t<label class=\"control-label col-sm-5\" for=\"choixVeterinaire\">Le vétérinaire :</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<select name=\"choixVeterinaire\" class=\"form-control\" required>
\t\t\t\t\t{% if uneCom is defined %}
\t\t\t\t\t\t<option value =\"{{uneCom.LeVeterinaire.Id}}\">{{uneCom.LeVeterinaire.MailVete}}</option>
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
</div>", "@GestVeterinaire/Commande/formAjouModif.html.twig", "C:\\wamp64\\www\\gestionVeterinaire\\src\\GestVeterinaireBundle\\Resources\\views\\Commande\\formAjouModif.html.twig");
    }
}
