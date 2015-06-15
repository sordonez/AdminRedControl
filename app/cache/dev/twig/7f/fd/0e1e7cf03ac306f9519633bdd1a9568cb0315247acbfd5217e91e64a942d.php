<?php

/* ::base.html.twig */
class __TwigTemplate_7ffd0e1e7cf03ac306f9519633bdd1a9568cb0315247acbfd5217e91e64a942d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'bootstrap' => array($this, 'block_bootstrap'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>

        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">

        <!--link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/control/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/control/css/bootstrap-table.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/control/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"-->
        
        <title>Soporte Tecnico</title>
        
        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('bootstrap', $context, $blocks);
        // line 17
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        
    <div class=\"container\">
        <h1>Agrotecnica N°4 - <small>Soporte Tecnico</small></h1>

        <h4>Registro de netbook</h4>
        <hr>
        ";
        // line 27
        echo $this->env->getExtension('knp_menu')->render("ControlBundle:Builder:mainMenu", array("template" => "ControlBundle:Menu:knp_menu.html.twig"));
        echo " 
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
            
        </div>
    </div>
       
    <div class=\"container\">
            ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        echo "  
    </div>
    <div class=\"container\">
        <br>
        <hr> 
        <p>Desarrollado por Sebastian Ordoñez - Analista Programador Universitario</p>
        <a class=\"btn btn-default\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('logout_url')->getLogoutPath("secured_area"), "html", null, true);
        echo "\"> Cerrar sesion <a/>
    </div>

    





    <!--script src=\"http://code.jquery.com/jquery.js\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/control/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/control/js/bootstrap-table.min.js"), "html", null, true);
        echo "\"></script-->
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"><\\/script>')</script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/control/js/ajax.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 16
    public function block_bootstrap($context, array $blocks = array())
    {
    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 34,  132 => 16,  127 => 15,  119 => 55,  115 => 54,  111 => 53,  106 => 51,  102 => 50,  89 => 40,  80 => 34,  70 => 27,  58 => 18,  55 => 17,  52 => 16,  50 => 15,  43 => 11,  39 => 10,  35 => 9,  30 => 7,  22 => 1,);
    }
}
