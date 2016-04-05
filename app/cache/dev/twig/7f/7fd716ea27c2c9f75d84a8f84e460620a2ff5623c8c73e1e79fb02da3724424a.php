<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_455784f0ccb5bd93fab56c184629c534712dee2585b0da0720fa44b6a7a03884 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa3229ec3d0ba34eb77d62f141a42e56ac0bc29428612448b052274a96dfe153 = $this->env->getExtension("native_profiler");
        $__internal_fa3229ec3d0ba34eb77d62f141a42e56ac0bc29428612448b052274a96dfe153->enter($__internal_fa3229ec3d0ba34eb77d62f141a42e56ac0bc29428612448b052274a96dfe153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa3229ec3d0ba34eb77d62f141a42e56ac0bc29428612448b052274a96dfe153->leave($__internal_fa3229ec3d0ba34eb77d62f141a42e56ac0bc29428612448b052274a96dfe153_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_467dda55df1ebae2fb7497b1a4ffa7c59693bace0312c06870d1b7cb37960d3c = $this->env->getExtension("native_profiler");
        $__internal_467dda55df1ebae2fb7497b1a4ffa7c59693bace0312c06870d1b7cb37960d3c->enter($__internal_467dda55df1ebae2fb7497b1a4ffa7c59693bace0312c06870d1b7cb37960d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_467dda55df1ebae2fb7497b1a4ffa7c59693bace0312c06870d1b7cb37960d3c->leave($__internal_467dda55df1ebae2fb7497b1a4ffa7c59693bace0312c06870d1b7cb37960d3c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_be7ae80f545761541b953d78a520d20e2de1012e4344cc22a92266d23676d75f = $this->env->getExtension("native_profiler");
        $__internal_be7ae80f545761541b953d78a520d20e2de1012e4344cc22a92266d23676d75f->enter($__internal_be7ae80f545761541b953d78a520d20e2de1012e4344cc22a92266d23676d75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_be7ae80f545761541b953d78a520d20e2de1012e4344cc22a92266d23676d75f->leave($__internal_be7ae80f545761541b953d78a520d20e2de1012e4344cc22a92266d23676d75f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1e9e4fc5d92de1d86caac0d50ef5dcdb82d11285ed174ed6aa503b85602f5e1b = $this->env->getExtension("native_profiler");
        $__internal_1e9e4fc5d92de1d86caac0d50ef5dcdb82d11285ed174ed6aa503b85602f5e1b->enter($__internal_1e9e4fc5d92de1d86caac0d50ef5dcdb82d11285ed174ed6aa503b85602f5e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1e9e4fc5d92de1d86caac0d50ef5dcdb82d11285ed174ed6aa503b85602f5e1b->leave($__internal_1e9e4fc5d92de1d86caac0d50ef5dcdb82d11285ed174ed6aa503b85602f5e1b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
