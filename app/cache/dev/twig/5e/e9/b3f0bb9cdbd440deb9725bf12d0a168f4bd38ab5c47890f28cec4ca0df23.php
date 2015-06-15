<?php

/* ControlBundle:Maquina:new.html.twig */
class __TwigTemplate_5ee9b3f0bb9cdbd440deb9725bf12d0a168f4bd38ab5c47890f28cec4ca0df23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Maquina creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    <button id=\"boton1\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModal\"> Seleccionar Usuario</button>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("admin_maquina");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>

<div id=\"myModal\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">Lista de Usuarios</h4>
            </div>
            <div class=\"modal-body\">
                <input id=\"inputBuscar\" name=\"buscar\" type=\"text\" class=\"input-medium search-query\" placeholder=\"Buscar\">
                <button id=\"Buttonbuscar\" class=\"btn\">Buscar</button>
                <div class=\"table\" id=\"dialogo\">
                    ";
        // line 28
        echo "    
                </div>

            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ControlBundle:Maquina:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 28,  51 => 11,  43 => 6,  39 => 4,  36 => 3,  11 => 1,);
    }
}
