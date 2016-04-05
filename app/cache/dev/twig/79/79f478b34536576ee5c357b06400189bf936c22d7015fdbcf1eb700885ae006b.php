<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e3f8610fcf2244bf7e875ca713f66b9cefae545f39007710cd1dc0f6e8d8a62e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_378f75a58ea9adb5162bd525e8d2eba13730c9b19a7088f94b2d6eae72320364 = $this->env->getExtension("native_profiler");
        $__internal_378f75a58ea9adb5162bd525e8d2eba13730c9b19a7088f94b2d6eae72320364->enter($__internal_378f75a58ea9adb5162bd525e8d2eba13730c9b19a7088f94b2d6eae72320364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_378f75a58ea9adb5162bd525e8d2eba13730c9b19a7088f94b2d6eae72320364->leave($__internal_378f75a58ea9adb5162bd525e8d2eba13730c9b19a7088f94b2d6eae72320364_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_09ff732f40c038517d1efeac973d409aa6fae51f651628ef7419382125793b6f = $this->env->getExtension("native_profiler");
        $__internal_09ff732f40c038517d1efeac973d409aa6fae51f651628ef7419382125793b6f->enter($__internal_09ff732f40c038517d1efeac973d409aa6fae51f651628ef7419382125793b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_09ff732f40c038517d1efeac973d409aa6fae51f651628ef7419382125793b6f->leave($__internal_09ff732f40c038517d1efeac973d409aa6fae51f651628ef7419382125793b6f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0eeace362cecb9e6631afd4b592eb82dbf4ac17460cb4ff542dedafa79160b6f = $this->env->getExtension("native_profiler");
        $__internal_0eeace362cecb9e6631afd4b592eb82dbf4ac17460cb4ff542dedafa79160b6f->enter($__internal_0eeace362cecb9e6631afd4b592eb82dbf4ac17460cb4ff542dedafa79160b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0eeace362cecb9e6631afd4b592eb82dbf4ac17460cb4ff542dedafa79160b6f->leave($__internal_0eeace362cecb9e6631afd4b592eb82dbf4ac17460cb4ff542dedafa79160b6f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8cf4bad4523a0f4f5c895aa7c19426b230a90859e31b5e7116cb3fe54c558cc = $this->env->getExtension("native_profiler");
        $__internal_c8cf4bad4523a0f4f5c895aa7c19426b230a90859e31b5e7116cb3fe54c558cc->enter($__internal_c8cf4bad4523a0f4f5c895aa7c19426b230a90859e31b5e7116cb3fe54c558cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c8cf4bad4523a0f4f5c895aa7c19426b230a90859e31b5e7116cb3fe54c558cc->leave($__internal_c8cf4bad4523a0f4f5c895aa7c19426b230a90859e31b5e7116cb3fe54c558cc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
