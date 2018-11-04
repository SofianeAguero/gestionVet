<?php

/* @GestVeterinaire/Region/formAjout.html.twig */
class __TwigTemplate_46025eb6aed69ca1fc043dcd295e2a93ed5fcf551fd5c81c8bfc46c834da5cc6 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GestVeterinaire/Region/formAjout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GestVeterinaire/Region/formAjout.html.twig"));

        // line 1
        echo "<p>
    <form method=\"post\">
    <div class=\"form-group\">
        <label class=\"control-label col-sm-2\" for=\"libelleRegion\">nom : </label>
        <div class=\"col-sm-10\">
            <input type=\"text\" pattern=\"[A-Za-z]{1,25}\" title=\"1 à 25 lettres requis\" required=\"required\" class=\"form-control\" id=\"libelleRegion\" name=\"libelleRegion\" placeholder=\"nom de la region\"
                   value=\"";
        // line 7
        if ($this->getAttribute(($context["uneRegion"] ?? null), "libelleRegion", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["uneRegion"] ?? $this->getContext($context, "uneRegion")), "libelleRegion", array()), "html", null, true);
        }
        echo "\">
        </div>
    </div>
    <br>
    <br>
    <div class=\"form-group\">
        <div class=\"col-sm-offset-2 col-sm-10\">
            <button type=\"submit\" class=\"btn btndefault\">Valider</button>
        </div>
    </div>
    </form>
</p>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@GestVeterinaire/Region/formAjout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  25 => 1,);
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
        <label class=\"control-label col-sm-2\" for=\"libelleRegion\">nom : </label>
        <div class=\"col-sm-10\">
            <input type=\"text\" pattern=\"[A-Za-z]{1,25}\" title=\"1 à 25 lettres requis\" required=\"required\" class=\"form-control\" id=\"libelleRegion\" name=\"libelleRegion\" placeholder=\"nom de la region\"
                   value=\"{%  if uneRegion.libelleRegion is defined %}{{ uneRegion.libelleRegion}}{% endif %}\">
        </div>
    </div>
    <br>
    <br>
    <div class=\"form-group\">
        <div class=\"col-sm-offset-2 col-sm-10\">
            <button type=\"submit\" class=\"btn btndefault\">Valider</button>
        </div>
    </div>
    </form>
</p>", "@GestVeterinaire/Region/formAjout.html.twig", "C:\\wamp64\\www\\gestionVeterinaire\\src\\GestVeterinaireBundle\\Resources\\views\\Region\\formAjout.html.twig");
    }
}
