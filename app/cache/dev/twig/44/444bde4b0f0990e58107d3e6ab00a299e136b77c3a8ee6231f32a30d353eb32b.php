<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_da85c3c4a4726bb3a4c86c38daf96a718c93d221f395d853283c6e03b7525c38 extends Twig_Template
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
        $__internal_f74b37033881503c6df4cbcd3d40fcbaf08c051d54d7e67614f61309addf9d8b = $this->env->getExtension("native_profiler");
        $__internal_f74b37033881503c6df4cbcd3d40fcbaf08c051d54d7e67614f61309addf9d8b->enter($__internal_f74b37033881503c6df4cbcd3d40fcbaf08c051d54d7e67614f61309addf9d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f74b37033881503c6df4cbcd3d40fcbaf08c051d54d7e67614f61309addf9d8b->leave($__internal_f74b37033881503c6df4cbcd3d40fcbaf08c051d54d7e67614f61309addf9d8b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
