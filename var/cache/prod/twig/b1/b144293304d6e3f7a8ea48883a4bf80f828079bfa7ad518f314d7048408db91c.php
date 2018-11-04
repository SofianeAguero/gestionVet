<?php

/* @GestVeterinaire/Region/selectRegionDele.html.twig */
class __TwigTemplate_399c36f7b1b11249c6a59c41f873170ffb90967a31b5d87c41c5ce6d98586479 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@GestVeterinaire/Region/selectRegionDele.html.twig", 1);
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
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des Delegues
";
    }

    // line 7
    public function block_entete_page($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"wrapper\">
  <section id=\"breadcrumb\" class=\"hoc clear\"> 
    <!-- ################################################################################################ -->
    <ul>
        <li><a href=\"#\">Page d'accueil</a></li>
        <li><a href=\"#\">Liste des délègués vétérérinaires de la region ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["uneRegion"] ?? null), "libelleRegion", array()), "html", null, true);
        echo "</a></li>
      </ul>
  </section>
</div>         
";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        // line 20
        echo "<div class=\"content three_quarter\">
  <h2>Tous les delegues de la region ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["uneRegion"] ?? null), "libelleRegion", array()), "html", null, true);
        echo "</h2>
  <div class=\"scrollable\">
    <table>
      <thead>
        <tr>
           <th>Nom</th>
           <th>Prenom</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["unDele"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["dele"]) {
            // line 32
            echo "        <tr>
          <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_unDelegueVeterinaire", array("id" => $this->getAttribute($context["dele"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dele"], "NomDelegue", array()), "html", null, true);
            echo "</a></td>
          <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_unDelegueVeterinaire", array("id" => $this->getAttribute($context["dele"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dele"], "PrenomDelegue", array()), "html", null, true);
            echo "</a></td>
        </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "        <tr>
          <td>Aucun delegue</td>
          <td>Enregistrée</td>
          <td>Actuellement</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "      </tbody>
    </table>
    <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_listeRegion");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a> 
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@GestVeterinaire/Region/selectRegionDele.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 45,  113 => 43,  102 => 37,  92 => 34,  86 => 33,  83 => 32,  78 => 31,  65 => 21,  62 => 20,  59 => 19,  50 => 13,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@GestVeterinaire/Region/selectRegionDele.html.twig", "C:\\wamp64\\www\\gestionVeterinaire\\src\\GestVeterinaireBundle\\Resources\\views\\Region\\selectRegionDele.html.twig");
    }
}
