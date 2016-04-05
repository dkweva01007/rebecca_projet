<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_31be38317a9b05d2bd4d5d2dec54bda44e819df76584adfed79d5ebb0275f66a extends Twig_Template
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
        $__internal_2f898ea7c735e07ef65dab270510f0cb83c12a253b77339a119cd1cdb5efc532 = $this->env->getExtension("native_profiler");
        $__internal_2f898ea7c735e07ef65dab270510f0cb83c12a253b77339a119cd1cdb5efc532->enter($__internal_2f898ea7c735e07ef65dab270510f0cb83c12a253b77339a119cd1cdb5efc532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_2f898ea7c735e07ef65dab270510f0cb83c12a253b77339a119cd1cdb5efc532->leave($__internal_2f898ea7c735e07ef65dab270510f0cb83c12a253b77339a119cd1cdb5efc532_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
