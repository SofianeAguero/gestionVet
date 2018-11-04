<?php

/* @GestVeterinaire/Commande/formAjouModif.html.twig */
class __TwigTemplate_4b638644a5d2db09ff892b8398248b544b91f5274f1075242837ac07f41bbf4a extends Twig_Template
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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["uneCom"] ?? null), "DateCommande", array()), "Y-m-d"), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["uneCom"] ?? null), "DateLivraisonSouhaitee", array()), "Y-m-d"), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(($context["commandeProduit"] ?? null));
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
                $context['_seq'] = twig_ensure_traversable(($context["lesProduits"] ?? null));
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
            $context['_seq'] = twig_ensure_traversable(($context["lesProduits"] ?? null));
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
            $context['_seq'] = twig_ensure_traversable(($context["commandeProduit"] ?? null));
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["uneCom"] ?? null), "LeVeterinaire", array()), "Id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["uneCom"] ?? null), "LeVeterinaire", array()), "MailVete", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["lesVeterinaires"] ?? null));
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
        return array (  209 => 83,  198 => 81,  194 => 80,  191 => 79,  187 => 77,  179 => 75,  177 => 74,  170 => 69,  161 => 62,  157 => 60,  147 => 56,  142 => 53,  137 => 52,  135 => 51,  131 => 49,  125 => 45,  114 => 43,  110 => 42,  103 => 37,  99 => 35,  90 => 31,  79 => 29,  75 => 28,  68 => 26,  62 => 22,  57 => 21,  55 => 20,  43 => 15,  37 => 11,  30 => 7,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@GestVeterinaire/Commande/formAjouModif.html.twig", "C:\\wamp64\\www\\gestionVeterinaire\\src\\GestVeterinaireBundle\\Resources\\views\\Commande\\formAjouModif.html.twig");
    }
}
