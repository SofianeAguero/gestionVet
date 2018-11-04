<?php

/* @GestVeterinaire/Region/consulterListe.html.twig */
class __TwigTemplate_190dcce88bc15594fcfc1a165c9152c7328e18d40ee7722a712aa6a14869ceaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@GestVeterinaire/Region/consulterListe.html.twig", 1);
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
        echo " Liste des regions
";
    }

    // line 7
    public function block_entete_page($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"wrapper\">
\t<section id=\"breadcrumb\" class=\"hoc clear\"> 
\t\t<!-- ################################################################################################ -->
\t\t<ul>
\t\t    <li><a href=\"#\">Page d'accueil</a></li>
\t\t    <li><a href=\"#\">Liste des regions</a></li>
\t  \t</ul>
\t  \t<!-- ################################################################################################ -->
\t  \t<h6 class=\"heading\">Liste des regions</h6>
\t  \t<!-- ################################################################################################ -->
\t</section>
</div>         
";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "
<div class=\"content three_quarter\">
  <form method=\"post\">
    <h1>Afficher les delegues de la region</h1>
    <div class=\"scrollable\">
      <div class=\"form-group\">
        <label class=\"control-label col-sm-5\" for=\"choix\">Régions :</label>
        <div class=\"col-sm-10\">
          <select name=\"choix\" class=\"form-control\" required>
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lesDeleRegions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["regi"]) {
            // line 33
            echo "              <option value =\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["regi"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["regi"], "libelleRegion", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['regi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "          </select>
        </div>
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-sm-10\">
        <button type=\"submit\" class=\"btn btn-info btn-block\">Valider</button>
      </div>
    </div>
  </form>
</div>

<div class=\"content three_quarter\">
  <h1>Liste des regions</h1>
  <div class=\"scrollable\">
    <table>
      <thead>
        <tr>
          <th>Nom</th>
        </tr>
      </thead>
      <tbody>
      \t";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lesDeleRegions"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["regi"]) {
            // line 58
            echo "        <tr>
          <td><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_uneRegion", array("id" => $this->getAttribute($context["regi"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["regi"], "libelleRegion", array()), "html", null, true);
            echo "</a></td>
        </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 62
            echo "        <tr>
          <td>Aucune region</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['regi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "      </tbody>
    </table>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@GestVeterinaire/Region/consulterListe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 66,  130 => 62,  120 => 59,  117 => 58,  112 => 57,  88 => 35,  77 => 33,  73 => 32,  62 => 23,  59 => 22,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@GestVeterinaire/Region/consulterListe.html.twig", "C:\\wamp64\\www\\gestionVeterinaire\\src\\GestVeterinaireBundle\\Resources\\views\\Region\\consulterListe.html.twig");
    }
}
