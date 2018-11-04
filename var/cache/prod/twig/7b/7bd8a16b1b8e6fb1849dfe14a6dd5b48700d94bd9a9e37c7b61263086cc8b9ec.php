<?php

/* @GestVeterinaire/Region/formAjout.html.twig */
class __TwigTemplate_86ccd3da9347934b241e1c63a468faf25473b5facc0a9718700dc1ffd7ffa8d0 extends Twig_Template
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
        echo "<p>
    <form method=\"post\">
    <div class=\"form-group\">
        <label class=\"control-label col-sm-2\" for=\"libelleRegion\">nom : </label>
        <div class=\"col-sm-10\">
            <input type=\"text\" required=\"required\" class=\"form-control\" id=\"libelleRegion\" name=\"libelleRegion\" placeholder=\"nom de la region\"
                   value=\"";
        // line 7
        if ($this->getAttribute(($context["uneRegion"] ?? null), "libelleRegion", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["uneRegion"] ?? null), "libelleRegion", array()), "html", null, true);
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
        return array (  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@GestVeterinaire/Region/formAjout.html.twig", "C:\\wamp64\\www\\gestionVeterinaire\\src\\GestVeterinaireBundle\\Resources\\views\\Region\\formAjout.html.twig");
    }
}
