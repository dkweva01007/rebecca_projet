<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1f9691019b68edbf67f3e8e696bb9b5e9048e4c924ae9e943c576c9e518505bd extends Twig_Template
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
        $__internal_47121341be7925c9221f896f66527dc3016b4d2f0606eea79e26c6a1749908e9 = $this->env->getExtension("native_profiler");
        $__internal_47121341be7925c9221f896f66527dc3016b4d2f0606eea79e26c6a1749908e9->enter($__internal_47121341be7925c9221f896f66527dc3016b4d2f0606eea79e26c6a1749908e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_47121341be7925c9221f896f66527dc3016b4d2f0606eea79e26c6a1749908e9->leave($__internal_47121341be7925c9221f896f66527dc3016b4d2f0606eea79e26c6a1749908e9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
