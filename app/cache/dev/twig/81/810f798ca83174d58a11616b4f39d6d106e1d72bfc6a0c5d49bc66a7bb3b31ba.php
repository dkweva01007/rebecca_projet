<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_a91a7409f0b6261e318c0bd758340fecabca53412355c012d86d93e1698e6096 extends Twig_Template
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
        $__internal_c2c340a6260a7b105d8ce26f4ff2a88ad8bbc2b3cdc7ec98d15901b0738dbf7a = $this->env->getExtension("native_profiler");
        $__internal_c2c340a6260a7b105d8ce26f4ff2a88ad8bbc2b3cdc7ec98d15901b0738dbf7a->enter($__internal_c2c340a6260a7b105d8ce26f4ff2a88ad8bbc2b3cdc7ec98d15901b0738dbf7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_c2c340a6260a7b105d8ce26f4ff2a88ad8bbc2b3cdc7ec98d15901b0738dbf7a->leave($__internal_c2c340a6260a7b105d8ce26f4ff2a88ad8bbc2b3cdc7ec98d15901b0738dbf7a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
