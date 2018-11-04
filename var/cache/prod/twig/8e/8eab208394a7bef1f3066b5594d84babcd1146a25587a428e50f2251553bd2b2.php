<?php

/* @GestVeterinaire/EnvoiEchantillon/listeEE.html.twig */
class __TwigTemplate_5b24dbbaef1e61c1d209de3ec2e9eac284d4eda893b06e91f283dd3c63190fff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@GestVeterinaire/EnvoiEchantillon/listeEE.html.twig", 1);
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
        echo " Liste des Envois d'échantillon
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
\t\t    <li><a href=\"#\">Liste des Envois d'échantillon</a></li>
\t  \t</ul>
\t  \t<!-- ################################################################################################ -->
\t  \t<h6 class=\"heading\">Liste des Envois d'échantillon</h6>
\t  \t<!-- ################################################################################################ -->
\t</section>
</div>         
";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "<div class=\"content three_quarter\">
  <h1>Toutes les Commandes</h1>
  <div class=\"scrollable\">
    <table>
      <thead>
        <tr>
          <th>Date de la demande d'envoi</th>
          <th>Date de la livraison</th>
          <th>Nombre d'échantillons envoyés</th>
          <th>Libelle du produit</th>
          <th>Tel du vétérinaire</th>
        </tr>
      </thead>
      <tbody>
      \t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lesEE"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["envoiEchantillon"]) {
            // line 38
            echo "        <tr>
          <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_unEnvoiEchantillon", array("id" => $this->getAttribute($context["envoiEchantillon"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["envoiEchantillon"], "DateDemande", array()), "d/m/Y"), "html", null, true);
            echo "</a></td>
          <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_unEnvoiEchantillon", array("id" => $this->getAttribute($context["envoiEchantillon"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["envoiEchantillon"], "DateLivraison", array()), "d/m/Y"), "html", null, true);
            echo "</a></td>
          <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_unEnvoiEchantillon", array("id" => $this->getAttribute($context["envoiEchantillon"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["envoiEchantillon"], "QteLivree", array()), "html", null, true);
            echo "</a></td>
          <td><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_unEnvoiEchantillon", array("id" => $this->getAttribute($context["envoiEchantillon"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["envoiEchantillon"], "LeProduitVeterinaire", array()), "LibelleProduit", array()), "html", null, true);
            echo "</a></td>
          <td><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_unEnvoiEchantillon", array("id" => $this->getAttribute($context["envoiEchantillon"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["envoiEchantillon"], "LeVeterinaire", array()), "TelVete", array()), "html", null, true);
            echo "</a></td>
        </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            echo "        <tr>
          <td>Actuellement</td>
          <td>Aucun</td>
          <td>Envoi</td>
          <td>D'échantillion</td>
          <td>Enregistré</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['envoiEchantillon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "      </tbody>
    </table>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@GestVeterinaire/EnvoiEchantillon/listeEE.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 54,  120 => 46,  110 => 43,  104 => 42,  98 => 41,  92 => 40,  86 => 39,  83 => 38,  78 => 37,  62 => 23,  59 => 22,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@GestVeterinaire/EnvoiEchantillon/listeEE.html.twig", "C:\\wamp64\\www\\gestionVeterinaire\\src\\GestVeterinaireBundle\\Resources\\views\\EnvoiEchantillon\\listeEE.html.twig");
    }
}
