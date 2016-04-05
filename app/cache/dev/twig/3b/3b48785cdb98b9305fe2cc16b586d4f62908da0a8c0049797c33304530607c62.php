<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_29acf40cf5d980ae210f5e3b450bcb1881ff2838b6c7e9efedde243776aed4b7 extends Twig_Template
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
        $__internal_ead918f142624daf4116d7f9d90ba51069c3c6c96f124cedc0836dabe2af3129 = $this->env->getExtension("native_profiler");
        $__internal_ead918f142624daf4116d7f9d90ba51069c3c6c96f124cedc0836dabe2af3129->enter($__internal_ead918f142624daf4116d7f9d90ba51069c3c6c96f124cedc0836dabe2af3129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ead918f142624daf4116d7f9d90ba51069c3c6c96f124cedc0836dabe2af3129->leave($__internal_ead918f142624daf4116d7f9d90ba51069c3c6c96f124cedc0836dabe2af3129_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
