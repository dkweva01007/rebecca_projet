<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_2a255a5beb5ec81f484c1b94d989e1bf4fa13d6713f365a8746ff5cccac86921 extends Twig_Template
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
        $__internal_6cac9d4e49e7ed0f51274dbff75db3227414daa393dd23f1a5f560266c8fd183 = $this->env->getExtension("native_profiler");
        $__internal_6cac9d4e49e7ed0f51274dbff75db3227414daa393dd23f1a5f560266c8fd183->enter($__internal_6cac9d4e49e7ed0f51274dbff75db3227414daa393dd23f1a5f560266c8fd183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_6cac9d4e49e7ed0f51274dbff75db3227414daa393dd23f1a5f560266c8fd183->leave($__internal_6cac9d4e49e7ed0f51274dbff75db3227414daa393dd23f1a5f560266c8fd183_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
