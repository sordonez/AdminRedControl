<?php

/* ControlBundle:Usuario:selectUsuario.html.twig */
class __TwigTemplate_05b4ceb32ed20eab0dc7ae51ed6776e5825c9f19dfb58448b313c9666949ea1b extends Twig_Template
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
        echo "    <table id=\"listUser\" class=\"records_list table table-striped table-responsive table-bordered table-hover\">
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Dni</th>
                <th>Direccion</th>
                <th>Descripcion</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 14
            echo "            <tr>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo " </td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "dni", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "direccion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tipo", array()), "html", null, true);
            echo "</td>
                <td>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "ControlBundle:Usuario:selectUsuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 25,  60 => 20,  56 => 19,  52 => 18,  48 => 17,  44 => 16,  40 => 15,  37 => 14,  33 => 13,  19 => 1,);
    }
}
