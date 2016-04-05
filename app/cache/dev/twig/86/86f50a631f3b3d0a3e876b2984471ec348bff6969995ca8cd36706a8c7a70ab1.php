<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_976a735d238ca25c5914216ea92164d7de52c92a204a60602154c3c756550aba extends Twig_Template
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
        $__internal_29e4e6e333f6dd70ee1327258e8ae658b98e1d5e03a2dc976953a10c4d9d1252 = $this->env->getExtension("native_profiler");
        $__internal_29e4e6e333f6dd70ee1327258e8ae658b98e1d5e03a2dc976953a10c4d9d1252->enter($__internal_29e4e6e333f6dd70ee1327258e8ae658b98e1d5e03a2dc976953a10c4d9d1252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_29e4e6e333f6dd70ee1327258e8ae658b98e1d5e03a2dc976953a10c4d9d1252->leave($__internal_29e4e6e333f6dd70ee1327258e8ae658b98e1d5e03a2dc976953a10c4d9d1252_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
