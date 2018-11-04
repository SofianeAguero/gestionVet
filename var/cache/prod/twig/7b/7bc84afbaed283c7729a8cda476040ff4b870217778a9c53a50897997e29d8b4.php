<?php

/* @GestVeterinaire/ProduitVeterinaire/listeCommandeProduit.html.twig */
class __TwigTemplate_0b61af2ef8ca12fbb577b0a8d76099ee4af535d3ed2f241cfc59ff63d9842cfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@GestVeterinaire/ProduitVeterinaire/listeCommandeProduit.html.twig", 1);
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
        echo " Liste des commandes et des envois d'échantillon
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
\t\t    <li><a href=\"#\">Liste des commandes et des envois d'échantillon</a></li>
\t  \t</ul>
\t  \t<!-- ################################################################################################ -->
\t  \t<h6 class=\"heading\">Produit : ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["leProduit"] ?? null), "LibelleProduit", array()), "html", null, true);
        echo "</h6>
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
          <th>Date de la Commande</th>
          <th>Date de livraison shouaitée</th>
        </tr>
      </thead>
      <tbody>
      \t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lesCommandes"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 36
            echo "        <tr>
          <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_unecommande", array("id" => $this->getAttribute($context["com"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["com"], "LaCommande", array()), "DateCommande", array()), "d/m/Y"), "html", null, true);
            echo "</a></td>
          <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_unecommande", array("id" => $this->getAttribute($context["com"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["com"], "LaCommande", array()), "DateLivraisonSouhaitee", array()), "d/m/Y"), "html", null, true);
            echo "</a></td>
        </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            echo "        <tr>
          <td>Actuellement aucune</td>
          <td>Commande Enregistrée</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "      </tbody>
    </table>
  </div>

  <h1>Tous les envois d'échantillon</h1>
  <div class=\"scrollable\">
    <table>
      <thead>
        <tr>
          <th>Date de la demande d'envoi</th>
          <th>Date de la livraison</th>
          <th>Nombre d'échantillons envoyés</th>
        </tr>
      </thead>
      <tbody>
      \t";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lesEE"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["envoiEchantillon"]) {
            // line 62
            echo "        <tr>
          <td><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_unEnvoiEchantillon", array("id" => $this->getAttribute($context["envoiEchantillon"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["envoiEchantillon"], "DateDemande", array()), "d/m/Y"), "html", null, true);
            echo "</a></td>
          <td><a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_unEnvoiEchantillon", array("id" => $this->getAttribute($context["envoiEchantillon"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["envoiEchantillon"], "DateLivraison", array()), "d/m/Y"), "html", null, true);
            echo "</a></td>
          <td><a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_unEnvoiEchantillon", array("id" => $this->getAttribute($context["envoiEchantillon"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["envoiEchantillon"], "QteLivree", array()), "html", null, true);
            echo "</a></td>
        </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 68
            echo "        <tr>
          <td>Actuellement Aucun</td>
          <td>Envoi d'échantillon</td>
          <td>Enregistré</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['envoiEchantillon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "      </tbody>
    </table>
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "@GestVeterinaire/ProduitVeterinaire/listeCommandeProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 74,  160 => 68,  150 => 65,  144 => 64,  138 => 63,  135 => 62,  130 => 61,  113 => 46,  103 => 41,  93 => 38,  87 => 37,  84 => 36,  79 => 35,  65 => 23,  62 => 22,  53 => 16,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@GestVeterinaire/ProduitVeterinaire/listeCommandeProduit.html.twig", "C:\\wamp64\\www\\gestionVeterinaire\\src\\GestVeterinaireBundle\\Resources\\views\\ProduitVeterinaire\\listeCommandeProduit.html.twig");
    }
}
