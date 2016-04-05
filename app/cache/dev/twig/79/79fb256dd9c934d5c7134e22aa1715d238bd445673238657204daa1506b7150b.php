<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_5dad1b9c45bb3698b0c00fa068cb02fdd2d56df7c824cef22b8e9ba1e78721b4 extends Twig_Template
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
        $__internal_a43a7bc8c02ac3a06af13a390df740443e22b0344b4d0cf2cbcd0997417588b3 = $this->env->getExtension("native_profiler");
        $__internal_a43a7bc8c02ac3a06af13a390df740443e22b0344b4d0cf2cbcd0997417588b3->enter($__internal_a43a7bc8c02ac3a06af13a390df740443e22b0344b4d0cf2cbcd0997417588b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_a43a7bc8c02ac3a06af13a390df740443e22b0344b4d0cf2cbcd0997417588b3->leave($__internal_a43a7bc8c02ac3a06af13a390df740443e22b0344b4d0cf2cbcd0997417588b3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
