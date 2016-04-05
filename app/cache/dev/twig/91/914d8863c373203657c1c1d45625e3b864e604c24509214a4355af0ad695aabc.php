<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ea20ef2a858af80ec74e8a99b4cf79aae82850522c658c16155b279cfa900805 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_5514542b756718089d2d5adb48d0bdf13f2bdc5cd0a589954a0ce3031868f266 = $this->env->getExtension("native_profiler");
        $__internal_5514542b756718089d2d5adb48d0bdf13f2bdc5cd0a589954a0ce3031868f266->enter($__internal_5514542b756718089d2d5adb48d0bdf13f2bdc5cd0a589954a0ce3031868f266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5514542b756718089d2d5adb48d0bdf13f2bdc5cd0a589954a0ce3031868f266->leave($__internal_5514542b756718089d2d5adb48d0bdf13f2bdc5cd0a589954a0ce3031868f266_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d90a4895c591cba6ae75b510c272a682ba230a1de26baa4cce1268bf08f9558b = $this->env->getExtension("native_profiler");
        $__internal_d90a4895c591cba6ae75b510c272a682ba230a1de26baa4cce1268bf08f9558b->enter($__internal_d90a4895c591cba6ae75b510c272a682ba230a1de26baa4cce1268bf08f9558b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d90a4895c591cba6ae75b510c272a682ba230a1de26baa4cce1268bf08f9558b->leave($__internal_d90a4895c591cba6ae75b510c272a682ba230a1de26baa4cce1268bf08f9558b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f7f2d3faece7538c7248a18ef1341f0f5614bda6961255223de5c6d10baf737c = $this->env->getExtension("native_profiler");
        $__internal_f7f2d3faece7538c7248a18ef1341f0f5614bda6961255223de5c6d10baf737c->enter($__internal_f7f2d3faece7538c7248a18ef1341f0f5614bda6961255223de5c6d10baf737c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f7f2d3faece7538c7248a18ef1341f0f5614bda6961255223de5c6d10baf737c->leave($__internal_f7f2d3faece7538c7248a18ef1341f0f5614bda6961255223de5c6d10baf737c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_56b1250ca13cd1e74bee75aef29355ebda62d3b0aab19f341d22d8685570f80f = $this->env->getExtension("native_profiler");
        $__internal_56b1250ca13cd1e74bee75aef29355ebda62d3b0aab19f341d22d8685570f80f->enter($__internal_56b1250ca13cd1e74bee75aef29355ebda62d3b0aab19f341d22d8685570f80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_56b1250ca13cd1e74bee75aef29355ebda62d3b0aab19f341d22d8685570f80f->leave($__internal_56b1250ca13cd1e74bee75aef29355ebda62d3b0aab19f341d22d8685570f80f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
