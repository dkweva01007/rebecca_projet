<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_000ca5822884856f2b77bb1c481eecedcab1687360123f9e3ba50fc68a4f07b4 extends Twig_Template
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
        $__internal_7e804fec2a0a1a2e881a7dd81e0cdde299135dc2baaaeeb0cabde76c9226c398 = $this->env->getExtension("native_profiler");
        $__internal_7e804fec2a0a1a2e881a7dd81e0cdde299135dc2baaaeeb0cabde76c9226c398->enter($__internal_7e804fec2a0a1a2e881a7dd81e0cdde299135dc2baaaeeb0cabde76c9226c398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_7e804fec2a0a1a2e881a7dd81e0cdde299135dc2baaaeeb0cabde76c9226c398->leave($__internal_7e804fec2a0a1a2e881a7dd81e0cdde299135dc2baaaeeb0cabde76c9226c398_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
