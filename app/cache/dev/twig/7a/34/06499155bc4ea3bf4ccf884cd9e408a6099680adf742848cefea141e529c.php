<?php

/* ControlBundle:Orden:new.html.twig */
class __TwigTemplate_7a3406499155bc4ea3bf4ccf884cd9e408a6099680adf742848cefea141e529c extends Twig_Template
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
        echo "<h1>Orden creation</h1>
    <div class=\"col-md-12 well\">

    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "finalizado", array()), 'row');
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "maquina", array()), 'row');
        echo "
    </div>

    <h3>Movimientos</h3>
    <div class=\"col-md-3 well\">
        <ul class=\"detalleMovimientolista\">
            ";
        // line 15
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "detalleMovimiento", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 16
            echo "                <li>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["tag"], 'row');
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </ul>
        <ul class=\"detalleMovimiento\" data-prototype=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "detalleMovimiento", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
        </ul>
    </div>


    <ul class=\"record_actions\">
        <li>
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'row');
        echo "
        </li>
    <li>
        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("admin_orden");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
<script type=\"text/javascript\">

</script>

";
    }

    public function getTemplateName()
    {
        return "ControlBundle:Orden:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 29,  84 => 26,  74 => 19,  71 => 18,  62 => 16,  57 => 15,  48 => 8,  44 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
