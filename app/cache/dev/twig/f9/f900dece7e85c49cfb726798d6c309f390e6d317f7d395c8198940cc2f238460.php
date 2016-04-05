<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_02f6082309a91798a1d6e8446da8094d541bd48dac02f2e6ef065f3014327221 extends Twig_Template
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
        $__internal_6d0da82df8faa7e391126abb580f0ae4dee9df666bbbaee1a3723355aa8f94dd = $this->env->getExtension("native_profiler");
        $__internal_6d0da82df8faa7e391126abb580f0ae4dee9df666bbbaee1a3723355aa8f94dd->enter($__internal_6d0da82df8faa7e391126abb580f0ae4dee9df666bbbaee1a3723355aa8f94dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_6d0da82df8faa7e391126abb580f0ae4dee9df666bbbaee1a3723355aa8f94dd->leave($__internal_6d0da82df8faa7e391126abb580f0ae4dee9df666bbbaee1a3723355aa8f94dd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
