<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_37323cb9e1e00e96896a10cbd62c22ce3acb329d27d1d0b9154d22b6ffe4d41e extends Twig_Template
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
        $__internal_1b9e83666d11890059490d00ba3ab28bbb9fc49d015a2ce35effac4a92ac9e94 = $this->env->getExtension("native_profiler");
        $__internal_1b9e83666d11890059490d00ba3ab28bbb9fc49d015a2ce35effac4a92ac9e94->enter($__internal_1b9e83666d11890059490d00ba3ab28bbb9fc49d015a2ce35effac4a92ac9e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_1b9e83666d11890059490d00ba3ab28bbb9fc49d015a2ce35effac4a92ac9e94->leave($__internal_1b9e83666d11890059490d00ba3ab28bbb9fc49d015a2ce35effac4a92ac9e94_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
