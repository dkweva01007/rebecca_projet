<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8e3c0a177d712d5f60faacbcd4a20e00ef96b2cedb2d86d3675a9fe884f4cfca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_797f953205aba26e71c6b5f69815893ca4295481dc396339f73543e1bda711b6 = $this->env->getExtension("native_profiler");
        $__internal_797f953205aba26e71c6b5f69815893ca4295481dc396339f73543e1bda711b6->enter($__internal_797f953205aba26e71c6b5f69815893ca4295481dc396339f73543e1bda711b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_797f953205aba26e71c6b5f69815893ca4295481dc396339f73543e1bda711b6->leave($__internal_797f953205aba26e71c6b5f69815893ca4295481dc396339f73543e1bda711b6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1b2557cb51d8d9557929b0a1fd2420adfe39d2d1d944f114d6ab6b3f1437a527 = $this->env->getExtension("native_profiler");
        $__internal_1b2557cb51d8d9557929b0a1fd2420adfe39d2d1d944f114d6ab6b3f1437a527->enter($__internal_1b2557cb51d8d9557929b0a1fd2420adfe39d2d1d944f114d6ab6b3f1437a527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1b2557cb51d8d9557929b0a1fd2420adfe39d2d1d944f114d6ab6b3f1437a527->leave($__internal_1b2557cb51d8d9557929b0a1fd2420adfe39d2d1d944f114d6ab6b3f1437a527_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
