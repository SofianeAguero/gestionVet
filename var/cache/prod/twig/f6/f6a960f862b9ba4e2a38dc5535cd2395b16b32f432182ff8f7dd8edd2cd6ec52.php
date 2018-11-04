<?php

/* base.html.twig */
class __TwigTemplate_33de42542631c224f34247bee7f847dbd246509d3163eefe17400452bcfd9614 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'entete_page' => array($this, 'block_entete_page'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">

        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body id=\"top\">
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <!-- Top Background Image Wrapper -->
        <div class=\"bgded overlay\"> 
            <!-- ########################################################################################## -->
            <!-- ########################################################################################## -->
            <!-- ########################################################################################## -->
            <div class=\"wrapper row1\">
                <header id=\"header\" class=\"hoc clear\"> 
                    <!-- ##################################################################################### -->
                    <div id=\"logo\" class=\"fl_left\">
                        <h1><a href=\"../index.html\">VT RIN AIR</a></h1>
                    </div>
                    <!-- ##################################################################################### -->
                    <nav id=\"mainav\" class=\"fl_right\">
                        <ul class=\"clear\">
                          <li><a href=\"../index.html\">Page d'accueil</a></li>
                          <li class=\"active\"><a class=\"drop\" href=\"#\">Consultation des listes</a>
                            <ul>
                             <!--  <li class=\"active\"><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_listeCommande");
        echo "\">Liste des Commandes</a></li>
                              <li><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_listeEnvoiEchantillon");
        echo "\">Liste des Envois d'échantillon</a></li> -->
                              <li><a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_listeDelegueVeto");
        echo "\">Liste des délégués</a></li>
                              <li><a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_listeRegion");
        echo "\">Liste des regions</a></li>
                            </ul>
                          </li>
                          <li><a class=\"drop\" href=\"#\">Délégué Vétérinaire</a>
                            <ul>
                              <li><a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_ajout_Delegueveto");
        echo "\">Ajout d'un delegue veterinaire</a></li>
                              <li><a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_listeDelegueVeto");
        echo "\">Liste des délégués</a></li>
                            </ul>
                          </li>
                          <li><a class=\"drop\" href=\"#\">Region</a>
                            <ul>
                              <li><a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_ajout_Region");
        echo "\">Ajout d'une region</a></li>
                              <li><a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_aff_listeRegion");
        echo "\">Liste des regions</a></li>
                            </ul>
                          </li>
                          <li><a class=\"drop\" href=\"#\">Produit</a>
                            <ul>
                              <li><a href=\"#\">Ajout d'un produit</a></li>
                            </ul>
                          </li>
                          <li><a class=\"drop\" href=\"#\">Commande</a>
                            <ul>
                              <li><a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_ajou_com");
        echo "\">Ajout d'un commande</a></li>
                            </ul>
                          </li>
                          <li><a class=\"drop\" href=\"#\">Envoi d'échantillion</a>
                            <ul>
                              <li><a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gest_veterinaire_ajou_envoiEchantillon");
        echo "\">Ajout d'un envoi d'échantillon</a></li>
                            </ul>
                          </li>
                        </ul>
                    </nav>
                    <!-- ##################################################################################### -->
                </header>
            </div>
            <!-- ########################################################################################## -->
            <!-- ########################################################################################## -->
            <!-- ########################################################################################## -->
            ";
        // line 84
        $this->displayBlock('entete_page', $context, $blocks);
        // line 87
        echo "            <!-- ########################################################################################### -->
        </div>
        <!-- End Top Background Image Wrapper -->
        <!-- ########################################################################################## -->
        <!-- ########################################################################################## -->
        <!-- ########################################################################################## -->
        <div class=\"wrapper row3\">
            <main class=\"hoc container clear\"> 
                <!-- main body -->
                <!-- ###################################################################################### -->
                <div class=\"sidebar one_quarter first\"> 
                     <!-- ################################################################################ -->
                    <!-- <div class=\"sdb_holder\">
                        <article>
                            <h6>Notifications</h6>
                            ";
        // line 103
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 104
            echo "                                <p>";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                        </article>
                    </div> -->
                    <!-- ################################################################################# -->
                </div>
                <!-- ########################################################################################## -->
                <!-- ########################################################################################## -->
                ";
        // line 112
        $this->displayBlock('body', $context, $blocks);
        // line 115
        echo "                <!-- ########################################################################################## -->
                <!-- / main body -->
                <div class=\"clear\"></div>
            </main>
        </div>
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <div class=\"wrapper row4\">
          <footer id=\"footer\" class=\"hoc clear\"> 
            <!-- ############################################################################################## -->
            <div class=\"one_half first\">

            </div>
            <div class=\"one_quarter\">

            </div>
            <div class=\"one_quarter\">

            </div>
            <!-- ############################################################################################## -->
          </footer>
        </div>
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <a id=\"backtotop\" href=\"#top\"><i class=\"fa fa-chevron-up\"></i></a>
        <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/gestveterinaire/layout/scripts/jquery.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 143
        $this->displayBlock('javascripts', $context, $blocks);
        // line 150
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "VT RIN AIR";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/gestveterinaire/layout/styles/layout.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />

        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/gestveterinaire/css/bootstrap-grid.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/gestveterinaire/css/bootstrap-reboot.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/gestveterinaire/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/gestveterinaire/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
    }

    // line 84
    public function block_entete_page($context, array $blocks = array())
    {
        // line 85
        echo "            
            ";
    }

    // line 112
    public function block_body($context, array $blocks = array())
    {
        // line 113
        echo "
                ";
    }

    // line 143
    public function block_javascripts($context, array $blocks = array())
    {
        // line 144
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/gestveterinaire/layout/scripts/jquery.backtotop.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/gestveterinaire/layout/scripts/jquery.mobilemenu.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/gestveterinaire/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/gestveterinaire/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 148,  287 => 147,  282 => 145,  277 => 144,  274 => 143,  269 => 113,  266 => 112,  261 => 85,  258 => 84,  252 => 17,  247 => 15,  242 => 13,  237 => 11,  231 => 9,  228 => 8,  222 => 5,  216 => 150,  214 => 143,  210 => 142,  181 => 115,  179 => 112,  171 => 106,  162 => 104,  157 => 103,  140 => 87,  138 => 84,  124 => 73,  116 => 68,  103 => 58,  99 => 57,  91 => 52,  87 => 51,  79 => 46,  75 => 45,  71 => 44,  67 => 43,  41 => 20,  38 => 19,  36 => 8,  30 => 5,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "C:\\wamp64\\www\\gestionVeterinaire\\app\\Resources\\views\\base.html.twig");
    }
}
