<?php

/* @GestVeterinaire/Delegue/formAjout.html.twig */
class __TwigTemplate_36102f239c53d8f646a25b4b7f6eeb2f2330bb7483375f86ca30966389564dc1 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GestVeterinaire/Delegue/formAjout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GestVeterinaire/Delegue/formAjout.html.twig"));

        // line 1
        echo "<p>
    <form method=\"post\">
    <div class=\"form-group\">
        <label class=\"control-label col-sm-2\" for=\"nomDelegue\">nom : </label>
        <div class=\"col-sm-10\">
            <input type=\"text\" pattern=\"[A-Za-z]{1,25}\" title=\"1 à 25 lettres requis\" required=\"required\" class=\"form-control\" id=\"nomDelegue\" name=\"nomDelegue\" placeholder=\"nom du delegue\"
                   value=\"";
        // line 7
        if ($this->getAttribute(($context["unDele"] ?? null), "nomDelegue", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["unDele"] ?? $this->getContext($context, "unDele")), "nomDelegue", array()), "html", null, true);
        }
        echo "\">
        </div>
    </div>
    <br>
    <br>
    <div class=\"form-group\">
        <label class=\"control-label col-sm-2\" for=\"prenomDelegue\">prenom : </label>
        <div class=\"col-sm-10\">
            <input type=\"text\" pattern=\"[A-Za-z]{1,25}\" required=\"required\" class=\"form-control\" id=\"prenomDelegue\" name=\"prenomDelegue\" placeholder=\"prenom du delegue\" value=\"";
        // line 15
        if ($this->getAttribute(($context["unDele"] ?? null), "prenomDelegue", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["unDele"] ?? $this->getContext($context, "unDele")), "prenomDelegue", array()), "html", null, true);
        }
        echo "\">
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"control-label col-sm-2\" for=\"telDelegue\">tel : </label>
        <div class=\"col-sm-10\">
            <input type=\"tel\" title=\"10 chiffres requis\" title=\"1 à 25 lettres requis\" required=\"required\" minlength=\"10\" maxlength=\"10\" pattern=\"^((\\+\\d{1,3}(-| )?\\(?\\d\\)?(-| )?\\d{1,5})|(\\(?\\d{2,6}\\)?))(-| )?(\\d{3,4})(-| )?(\\d{4})(( x| ext)\\d{1,5}){0,1}\$\" class=\"form-control\" id=\"telDelegue\" name=\"telDelegue\" placeholder=\"0651748502\" value=\"";
        // line 21
        if ($this->getAttribute(($context["unDele"] ?? null), "telDelegue", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["unDele"] ?? $this->getContext($context, "unDele")), "telDelegue", array()), "html", null, true);
        }
        echo "\">
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"control-label col-sm-2\" for=\"mailDelegue\">mail : </label>
        <div class=\"col-sm-10\">
            <input type=\"email\" required=\"required\" class=\"form-control\" id=\"mailDelegue\" name=\"mailDelegue\" placeholder=\"e-mail@mail.fr\" value=\"";
        // line 27
        if ($this->getAttribute(($context["unDele"] ?? null), "mailDelegue", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["unDele"] ?? $this->getContext($context, "unDele")), "mailDelegue", array()), "html", null, true);
        }
        echo "\">
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"control-label col-sm-2\" for=\"libelleRegion\">region : </label>
        <div class=\"col-sm-10\">
            <select style=\"margin-top: 6px\" class=\"form-control\" id=\"libelleRegion\" name=\"idRegion\" placeholder=\"region suivie\">
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lesRegions"] ?? $this->getContext($context, "lesRegions")));
        foreach ($context['_seq'] as $context["_key"] => $context["uneRegion"]) {
            // line 35
            echo "                    <option ";
            if ($this->getAttribute(($context["unDele"] ?? null), "LaRegion", array(), "any", true, true)) {
                if (($this->getAttribute($context["uneRegion"], "id", array()) == $this->getAttribute($this->getAttribute(($context["unDele"] ?? $this->getContext($context, "unDele")), "LaRegion", array()), "id", array()))) {
                    echo "selected";
                }
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["uneRegion"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["uneRegion"], "libelleRegion", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneRegion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </select>
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"control-label col-sm-2\" for=\"espece\">spe : </label>
        <div class=\"col-sm-10\">
            ";
        // line 43
        if (array_key_exists("espece", $context)) {
            // line 44
            echo "                <select multiple=\"multiple\" style=\"margin-top: 6px\" class=\"form-control select-checkbox-fa\" id=\"espece\" name=\"espece[]\" placeholder=\"espece suivie\">
                    ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lesEspeces"] ?? $this->getContext($context, "lesEspeces")));
            foreach ($context['_seq'] as $context["_key"] => $context["uneEspece"]) {
                // line 46
                echo "                        ";
                $context["check"] = 0;
                // line 47
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["espece"] ?? $this->getContext($context, "espece")));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 48
                    echo "                            ";
                    if (($this->getAttribute($context["item"], "id", array()) == $this->getAttribute($context["uneEspece"], "id", array()))) {
                        // line 49
                        echo "                                ";
                        $context["check"] = 1;
                        // line 50
                        echo "                            ";
                    }
                    // line 51
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "                        ";
                if ((($context["check"] ?? $this->getContext($context, "check")) == 1)) {
                    // line 53
                    echo "                            <option selected value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["uneEspece"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["uneEspece"], "libelleEspece", array()), "html", null, true);
                    echo "</option>
                        ";
                } else {
                    // line 55
                    echo "                            <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["uneEspece"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["uneEspece"], "libelleEspece", array()), "html", null, true);
                    echo "</option>
                        ";
                }
                // line 57
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneEspece'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                </select>
                ";
        } else {
            // line 60
            echo "                    <select multiple=\"multiple\" style=\"margin-top: 6px\" class=\"form-control select-checkbox-fa\" id=\"espece\" name=\"espece[]\" placeholder=\"espece suivie\">
                        ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lesEspeces"] ?? $this->getContext($context, "lesEspeces")));
            foreach ($context['_seq'] as $context["_key"] => $context["uneEspece"]) {
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["uneEspece"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["uneEspece"], "libelleEspece", array()), "html", null, true);
                echo "</option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneEspece'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                    </select>
            ";
        }
        // line 64
        echo "
        </div>
    </div>

    <br>
    <div class=\"form-group\">
        <div class=\"col-sm-offset-2 col-sm-10\">
            <button type=\"submit\" class=\"btn btndefault\">Valider</button>
        </div>
    </div>
    </form>
</p>

<!-- ajoutez ce css dans votre fichier css, ceci permet d'afficher les checkbox-->
<style type=\"text/css\">
.select-checkbox-fa option::before {
  font-family: FontAwesome;
  content: \"\\f096\";
  width: 1.3em;
  display: inline-block;
  margin-left: 2px;
}
.select-checkbox-fa option:checked::before {
  content: \"\\f046\";
}
</style>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@GestVeterinaire/Delegue/formAjout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 64,  186 => 62,  173 => 61,  170 => 60,  166 => 58,  160 => 57,  152 => 55,  144 => 53,  141 => 52,  135 => 51,  132 => 50,  129 => 49,  126 => 48,  121 => 47,  118 => 46,  114 => 45,  111 => 44,  109 => 43,  101 => 37,  84 => 35,  80 => 34,  68 => 27,  57 => 21,  46 => 15,  33 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p>
    <form method=\"post\">
    <div class=\"form-group\">
        <label class=\"control-label col-sm-2\" for=\"nomDelegue\">nom : </label>
        <div class=\"col-sm-10\">
            <input type=\"text\" pattern=\"[A-Za-z]{1,25}\" title=\"1 à 25 lettres requis\" required=\"required\" class=\"form-control\" id=\"nomDelegue\" name=\"nomDelegue\" placeholder=\"nom du delegue\"
                   value=\"{%  if unDele.nomDelegue is defined %}{{ unDele.nomDelegue}}{% endif %}\">
        </div>
    </div>
    <br>
    <br>
    <div class=\"form-group\">
        <label class=\"control-label col-sm-2\" for=\"prenomDelegue\">prenom : </label>
        <div class=\"col-sm-10\">
            <input type=\"text\" pattern=\"[A-Za-z]{1,25}\" required=\"required\" class=\"form-control\" id=\"prenomDelegue\" name=\"prenomDelegue\" placeholder=\"prenom du delegue\" value=\"{%  if unDele.prenomDelegue is defined %}{{ unDele.prenomDelegue}}{% endif %}\">
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"control-label col-sm-2\" for=\"telDelegue\">tel : </label>
        <div class=\"col-sm-10\">
            <input type=\"tel\" title=\"10 chiffres requis\" title=\"1 à 25 lettres requis\" required=\"required\" minlength=\"10\" maxlength=\"10\" pattern=\"^((\\+\\d{1,3}(-| )?\\(?\\d\\)?(-| )?\\d{1,5})|(\\(?\\d{2,6}\\)?))(-| )?(\\d{3,4})(-| )?(\\d{4})(( x| ext)\\d{1,5}){0,1}\$\" class=\"form-control\" id=\"telDelegue\" name=\"telDelegue\" placeholder=\"0651748502\" value=\"{%  if unDele.telDelegue is defined %}{{ unDele.telDelegue}}{% endif %}\">
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"control-label col-sm-2\" for=\"mailDelegue\">mail : </label>
        <div class=\"col-sm-10\">
            <input type=\"email\" required=\"required\" class=\"form-control\" id=\"mailDelegue\" name=\"mailDelegue\" placeholder=\"e-mail@mail.fr\" value=\"{%  if unDele.mailDelegue is defined %}{{ unDele.mailDelegue}}{% endif %}\">
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"control-label col-sm-2\" for=\"libelleRegion\">region : </label>
        <div class=\"col-sm-10\">
            <select style=\"margin-top: 6px\" class=\"form-control\" id=\"libelleRegion\" name=\"idRegion\" placeholder=\"region suivie\">
                {% for uneRegion in lesRegions %}
                    <option {%  if unDele.LaRegion is defined %}{% if uneRegion.id == unDele.LaRegion.id %}selected{% endif %}{% endif %} value=\"{{ uneRegion.id }}\">{{ uneRegion.libelleRegion }}</option>
                {% endfor %}
            </select>
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"control-label col-sm-2\" for=\"espece\">spe : </label>
        <div class=\"col-sm-10\">
            {% if espece is defined %}
                <select multiple=\"multiple\" style=\"margin-top: 6px\" class=\"form-control select-checkbox-fa\" id=\"espece\" name=\"espece[]\" placeholder=\"espece suivie\">
                    {% for uneEspece in lesEspeces %}
                        {% set check = 0 %}
                        {% for item in espece %}
                            {% if item.id == uneEspece.id %}
                                {% set check = 1 %}
                            {% endif %}
                        {% endfor %}
                        {% if check == 1 %}
                            <option selected value=\"{{ uneEspece.id }}\">{{ uneEspece.libelleEspece }}</option>
                        {% else %}
                            <option value=\"{{ uneEspece.id }}\">{{ uneEspece.libelleEspece }}</option>
                        {% endif %}
                    {% endfor %}
                </select>
                {% else %}
                    <select multiple=\"multiple\" style=\"margin-top: 6px\" class=\"form-control select-checkbox-fa\" id=\"espece\" name=\"espece[]\" placeholder=\"espece suivie\">
                        {% for uneEspece in lesEspeces %}<option value=\"{{ uneEspece.id }}\">{{ uneEspece.libelleEspece }}</option>{% endfor %}
                    </select>
            {% endif %}

        </div>
    </div>

    <br>
    <div class=\"form-group\">
        <div class=\"col-sm-offset-2 col-sm-10\">
            <button type=\"submit\" class=\"btn btndefault\">Valider</button>
        </div>
    </div>
    </form>
</p>

<!-- ajoutez ce css dans votre fichier css, ceci permet d'afficher les checkbox-->
<style type=\"text/css\">
.select-checkbox-fa option::before {
  font-family: FontAwesome;
  content: \"\\f096\";
  width: 1.3em;
  display: inline-block;
  margin-left: 2px;
}
.select-checkbox-fa option:checked::before {
  content: \"\\f046\";
}
</style>
", "@GestVeterinaire/Delegue/formAjout.html.twig", "C:\\wamp64\\www\\gestionVeterinaire\\src\\GestVeterinaireBundle\\Resources\\views\\Delegue\\formAjout.html.twig");
    }
}
