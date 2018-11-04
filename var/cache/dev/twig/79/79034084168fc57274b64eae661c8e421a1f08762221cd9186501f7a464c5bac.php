<?php

/* base.html.twig */
class __TwigTemplate_cbe4c48281fec083b73ec8c5bbe5f9145b9a3cc1baa5ab607a945005f2c24c39 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "VT RIN AIR";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_entete_page($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete_page"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete_page"));

        // line 85
        echo "            
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 112
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 113
        echo "
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 143
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  357 => 148,  353 => 147,  348 => 145,  343 => 144,  334 => 143,  323 => 113,  314 => 112,  303 => 85,  294 => 84,  282 => 17,  277 => 15,  272 => 13,  267 => 11,  261 => 9,  252 => 8,  234 => 5,  222 => 150,  220 => 143,  216 => 142,  187 => 115,  185 => 112,  177 => 106,  168 => 104,  163 => 103,  146 => 87,  144 => 84,  130 => 73,  122 => 68,  109 => 58,  105 => 57,  97 => 52,  93 => 51,  85 => 46,  81 => 45,  77 => 44,  73 => 43,  47 => 20,  44 => 19,  42 => 8,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}VT RIN AIR{% endblock %}</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">

        {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/gestveterinaire/layout/styles/layout.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />

        <link rel=\"stylesheet\" href=\"{{ asset('bundles/gestveterinaire/css/bootstrap-grid.min.css') }}\" rel=\"stylesheet\" />

        <link rel=\"stylesheet\" href=\"{{ asset('bundles/gestveterinaire/css/bootstrap-reboot.min.css') }}\" rel=\"stylesheet\" />

        <link rel=\"stylesheet\" href=\"{{ asset('bundles/gestveterinaire/css/bootstrap.min.css') }}\" rel=\"stylesheet\" />

        <link rel=\"stylesheet\" href=\"{{ asset('bundles/gestveterinaire/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" />
        {% endblock %}

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
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
                             <!--  <li class=\"active\"><a href=\"{{ path('gest_veterinaire_aff_listeCommande') }}\">Liste des Commandes</a></li>
                              <li><a href=\"{{ path('gest_veterinaire_aff_listeEnvoiEchantillon') }}\">Liste des Envois d'échantillon</a></li> -->
                              <li><a href=\"{{ path('gest_veterinaire_aff_listeDelegueVeto') }}\">Liste des délégués</a></li>
                              <li><a href=\"{{ path('gest_veterinaire_aff_listeRegion') }}\">Liste des regions</a></li>
                            </ul>
                          </li>
                          <li><a class=\"drop\" href=\"#\">Délégué Vétérinaire</a>
                            <ul>
                              <li><a href=\"{{ path('gest_veterinaire_ajout_Delegueveto') }}\">Ajout d'un delegue veterinaire</a></li>
                              <li><a href=\"{{ path('gest_veterinaire_aff_listeDelegueVeto') }}\">Liste des délégués</a></li>
                            </ul>
                          </li>
                          <li><a class=\"drop\" href=\"#\">Region</a>
                            <ul>
                              <li><a href=\"{{ path('gest_veterinaire_ajout_Region') }}\">Ajout d'une region</a></li>
                              <li><a href=\"{{ path('gest_veterinaire_aff_listeRegion') }}\">Liste des regions</a></li>
                            </ul>
                          </li>
                          <li><a class=\"drop\" href=\"#\">Produit</a>
                            <ul>
                              <li><a href=\"#\">Ajout d'un produit</a></li>
                            </ul>
                          </li>
                          <li><a class=\"drop\" href=\"#\">Commande</a>
                            <ul>
                              <li><a href=\"{{ path('gest_veterinaire_ajou_com') }}\">Ajout d'un commande</a></li>
                            </ul>
                          </li>
                          <li><a class=\"drop\" href=\"#\">Envoi d'échantillion</a>
                            <ul>
                              <li><a href=\"{{ path('gest_veterinaire_ajou_envoiEchantillon') }}\">Ajout d'un envoi d'échantillon</a></li>
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
            {% block entete_page %}
            
            {% endblock %}
            <!-- ########################################################################################### -->
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
                            {# On affiche le(s) message(s) flash dont le nom est \"info\" #}
                            {% for message in app.session.flashbag.get('info') %}
                                <p>{{message}}</p>
                            {% endfor %}
                        </article>
                    </div> -->
                    <!-- ################################################################################# -->
                </div>
                <!-- ########################################################################################## -->
                <!-- ########################################################################################## -->
                {% block body %}

                {% endblock %}
                <!-- ########################################################################################## -->
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
        <script src=\"{{ asset('bundles/gestveterinaire/layout/scripts/jquery.min.js') }}\"></script>
        {% block javascripts %}
        <script src=\"{{ asset('bundles/gestveterinaire/layout/scripts/jquery.backtotop.js') }}\"></script>
        <script src=\"{{ asset('bundles/gestveterinaire/layout/scripts/jquery.mobilemenu.js') }}\"></script>

        <script src=\"{{ asset('bundles/gestveterinaire/js/bootstrap.bundle.min.js') }}\"></script>
        <script src=\"{{ asset('bundles/gestveterinaire/js/bootstrap.min.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\gestionVeterinaire\\app\\Resources\\views\\base.html.twig");
    }
}
