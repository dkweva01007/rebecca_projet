<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_24b51dcc7997d9c85b03ec1638cc6699ed78f3f7ba2af285da173bb0f01586f0 extends Twig_Template
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
        $__internal_9dd5ea160156b4286153b15677587bd5a19a3a7ec308bdb3af6164a6411570c0 = $this->env->getExtension("native_profiler");
        $__internal_9dd5ea160156b4286153b15677587bd5a19a3a7ec308bdb3af6164a6411570c0->enter($__internal_9dd5ea160156b4286153b15677587bd5a19a3a7ec308bdb3af6164a6411570c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9dd5ea160156b4286153b15677587bd5a19a3a7ec308bdb3af6164a6411570c0->leave($__internal_9dd5ea160156b4286153b15677587bd5a19a3a7ec308bdb3af6164a6411570c0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
