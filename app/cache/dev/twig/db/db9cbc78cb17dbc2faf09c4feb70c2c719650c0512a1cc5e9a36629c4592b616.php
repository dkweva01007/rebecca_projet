<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_8bad3dcefcfee5301bfdd87c8dc8e31221b7594f7ee586324166e3fbbae11478 extends Twig_Template
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
        $__internal_70702d44bfbf6ad32b532e905a1c7122db8c4d4271a7a39ce18292d5a8245163 = $this->env->getExtension("native_profiler");
        $__internal_70702d44bfbf6ad32b532e905a1c7122db8c4d4271a7a39ce18292d5a8245163->enter($__internal_70702d44bfbf6ad32b532e905a1c7122db8c4d4271a7a39ce18292d5a8245163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_70702d44bfbf6ad32b532e905a1c7122db8c4d4271a7a39ce18292d5a8245163->leave($__internal_70702d44bfbf6ad32b532e905a1c7122db8c4d4271a7a39ce18292d5a8245163_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
