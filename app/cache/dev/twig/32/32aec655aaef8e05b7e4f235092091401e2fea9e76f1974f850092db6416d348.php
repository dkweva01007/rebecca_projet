<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_25362cee649e8f0f251ac47c8df399ed139548310015d9d1ed2f8809db162213 extends Twig_Template
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
        $__internal_305d3f7ec4bf031a47eb255d7a42782c54621eb78ba47f43f52e5717ef5f729f = $this->env->getExtension("native_profiler");
        $__internal_305d3f7ec4bf031a47eb255d7a42782c54621eb78ba47f43f52e5717ef5f729f->enter($__internal_305d3f7ec4bf031a47eb255d7a42782c54621eb78ba47f43f52e5717ef5f729f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_305d3f7ec4bf031a47eb255d7a42782c54621eb78ba47f43f52e5717ef5f729f->leave($__internal_305d3f7ec4bf031a47eb255d7a42782c54621eb78ba47f43f52e5717ef5f729f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
