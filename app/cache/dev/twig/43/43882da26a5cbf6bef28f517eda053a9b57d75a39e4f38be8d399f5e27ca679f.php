<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_08b532ca7f6a0a41dfabfe73895b333edb01ef287be570b0791a296f0b6c410a extends Twig_Template
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
        $__internal_e3bbfd6e113a57c98418151dcc3ea245c214738db2c12bb7534d3159cbc415a5 = $this->env->getExtension("native_profiler");
        $__internal_e3bbfd6e113a57c98418151dcc3ea245c214738db2c12bb7534d3159cbc415a5->enter($__internal_e3bbfd6e113a57c98418151dcc3ea245c214738db2c12bb7534d3159cbc415a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_e3bbfd6e113a57c98418151dcc3ea245c214738db2c12bb7534d3159cbc415a5->leave($__internal_e3bbfd6e113a57c98418151dcc3ea245c214738db2c12bb7534d3159cbc415a5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
