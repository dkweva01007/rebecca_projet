<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_e1fcce825022b10ee92826b77d7c5fbf72e4667b0a4efdd7ca29a35dd99d9101 extends Twig_Template
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
        $__internal_d161621dc32259ce463f83ec176358b79cf845200c1cc9357c85cf9ba2b81bd2 = $this->env->getExtension("native_profiler");
        $__internal_d161621dc32259ce463f83ec176358b79cf845200c1cc9357c85cf9ba2b81bd2->enter($__internal_d161621dc32259ce463f83ec176358b79cf845200c1cc9357c85cf9ba2b81bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d161621dc32259ce463f83ec176358b79cf845200c1cc9357c85cf9ba2b81bd2->leave($__internal_d161621dc32259ce463f83ec176358b79cf845200c1cc9357c85cf9ba2b81bd2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
