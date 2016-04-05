<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5395b5d52f60d01520fa5c98d948eb4168cc9b81f86cf6f1b83d75ed8bb81d39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb4833f33347ae5128ebd9020a7a83a327c97e46baea2bf13ab466e0cfa5950a = $this->env->getExtension("native_profiler");
        $__internal_bb4833f33347ae5128ebd9020a7a83a327c97e46baea2bf13ab466e0cfa5950a->enter($__internal_bb4833f33347ae5128ebd9020a7a83a327c97e46baea2bf13ab466e0cfa5950a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb4833f33347ae5128ebd9020a7a83a327c97e46baea2bf13ab466e0cfa5950a->leave($__internal_bb4833f33347ae5128ebd9020a7a83a327c97e46baea2bf13ab466e0cfa5950a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_710d8dbff087d69c5e0e64bf7166231509a6f7cf977aaf08cee81aa351a0e14e = $this->env->getExtension("native_profiler");
        $__internal_710d8dbff087d69c5e0e64bf7166231509a6f7cf977aaf08cee81aa351a0e14e->enter($__internal_710d8dbff087d69c5e0e64bf7166231509a6f7cf977aaf08cee81aa351a0e14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_710d8dbff087d69c5e0e64bf7166231509a6f7cf977aaf08cee81aa351a0e14e->leave($__internal_710d8dbff087d69c5e0e64bf7166231509a6f7cf977aaf08cee81aa351a0e14e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bcf1d6516a6b150476a3f601c22d42fc6c5013499c3ae44a026d0346afaf9cde = $this->env->getExtension("native_profiler");
        $__internal_bcf1d6516a6b150476a3f601c22d42fc6c5013499c3ae44a026d0346afaf9cde->enter($__internal_bcf1d6516a6b150476a3f601c22d42fc6c5013499c3ae44a026d0346afaf9cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bcf1d6516a6b150476a3f601c22d42fc6c5013499c3ae44a026d0346afaf9cde->leave($__internal_bcf1d6516a6b150476a3f601c22d42fc6c5013499c3ae44a026d0346afaf9cde_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e1f22798ca9a2a862854e725c7a569c78960e92a3d9d654f1c9ae210f895e11 = $this->env->getExtension("native_profiler");
        $__internal_3e1f22798ca9a2a862854e725c7a569c78960e92a3d9d654f1c9ae210f895e11->enter($__internal_3e1f22798ca9a2a862854e725c7a569c78960e92a3d9d654f1c9ae210f895e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3e1f22798ca9a2a862854e725c7a569c78960e92a3d9d654f1c9ae210f895e11->leave($__internal_3e1f22798ca9a2a862854e725c7a569c78960e92a3d9d654f1c9ae210f895e11_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
