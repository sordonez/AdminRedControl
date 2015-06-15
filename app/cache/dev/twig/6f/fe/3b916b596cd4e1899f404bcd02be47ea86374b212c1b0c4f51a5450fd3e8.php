<?php

/* ControlBundle:entrada:index.html.twig */
class __TwigTemplate_6ffe3b916b596cd4e1899f404bcd02be47ea86374b212c1b0c4f51a5450fd3e8 extends Twig_Template
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
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "<br>
    <div class=\"container\">
        <form class=\"form-search\">
                <input name=\"buscar\" type=\"text\" class=\"input-medium search-query\" placeholder=\"Buscar por Codigo\">
                <button type=\"submit\" class=\"btn\" formmethod=\"post\" formaction=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("search");
        echo "\">Buscar</button>
        </form>
    </div>
    <br>
    <div class=\"container\">
        <table class=\"records_list table table-striped\" data-toggle=\"table\" data-pagination=\"true\" data-search=\"false\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Codigo</th>
                    <th>Diagnostico</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 25
            echo "                    <tr>
                        <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entrada_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "codigo", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "diagnostico", array()), "html", null, true);
            echo "</td>
                        <td>
                            <form>
                                <button type=\"submit\" class=\"btn-info\" formmethod=\"post\" formaction=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entrada_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                    Mostrar
                                </button>
                                <button type=\"submit\" class=\"btn-danger\" formmethod=\"post\"  formaction=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entrada_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                    Modificar
                                </button>

                                <button type=\"submit\" class=\"btn-info\" formmethod=\"post\" formaction=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("busqueda_new", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                    Agrega
                                </button>
                            </form>                        


                        <!--
                        <ul>
                            <li>
                                <button class=\"btn-info\">
                                <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entrada_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" >show</a>
                                </button>
                            </li>
                            <li>
                                <button class=\"btn-danger\">
                                <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entrada_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" >edit</a>
                                </button>
                            </li>
                        </ul>

                        -->
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "            </tbody>
        </table>
    </div>
    
    <div id=\"myModal\" class=\"modal hide fade\">
                <!-- register form here -->
    </div>
";
    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ControlBundle:entrada:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 72,  141 => 63,  126 => 54,  118 => 49,  105 => 39,  98 => 35,  92 => 32,  86 => 29,  82 => 28,  78 => 27,  72 => 26,  69 => 25,  65 => 24,  46 => 8,  40 => 4,  37 => 3,  11 => 1,);
    }
}
