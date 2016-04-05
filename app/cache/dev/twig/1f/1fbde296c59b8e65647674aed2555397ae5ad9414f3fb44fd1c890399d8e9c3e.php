<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_a5d421c959da1db4821d578ef4e2a29b7c79b705f88fc0a38f58ed1c2d96ee01 extends Twig_Template
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
        $__internal_1e0b5a3bc0fe6c5d7d2a78fe161742ce1c174c921d5dad6477027c7b530ad510 = $this->env->getExtension("native_profiler");
        $__internal_1e0b5a3bc0fe6c5d7d2a78fe161742ce1c174c921d5dad6477027c7b530ad510->enter($__internal_1e0b5a3bc0fe6c5d7d2a78fe161742ce1c174c921d5dad6477027c7b530ad510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1e0b5a3bc0fe6c5d7d2a78fe161742ce1c174c921d5dad6477027c7b530ad510->leave($__internal_1e0b5a3bc0fe6c5d7d2a78fe161742ce1c174c921d5dad6477027c7b530ad510_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
