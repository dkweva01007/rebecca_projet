<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b00488612c8680224e16674e11035221f8ef8c604b347ef2da5fa896708017df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_9cf4b629b065c59d4be1c56d223828f14479a19fc0a361c4bbc66a0e3e5117ed = $this->env->getExtension("native_profiler");
        $__internal_9cf4b629b065c59d4be1c56d223828f14479a19fc0a361c4bbc66a0e3e5117ed->enter($__internal_9cf4b629b065c59d4be1c56d223828f14479a19fc0a361c4bbc66a0e3e5117ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cf4b629b065c59d4be1c56d223828f14479a19fc0a361c4bbc66a0e3e5117ed->leave($__internal_9cf4b629b065c59d4be1c56d223828f14479a19fc0a361c4bbc66a0e3e5117ed_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3a08175288879ab331f029d18f11e9313354b4e559bf1c58a9a58738531bcbe = $this->env->getExtension("native_profiler");
        $__internal_f3a08175288879ab331f029d18f11e9313354b4e559bf1c58a9a58738531bcbe->enter($__internal_f3a08175288879ab331f029d18f11e9313354b4e559bf1c58a9a58738531bcbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f3a08175288879ab331f029d18f11e9313354b4e559bf1c58a9a58738531bcbe->leave($__internal_f3a08175288879ab331f029d18f11e9313354b4e559bf1c58a9a58738531bcbe_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_59a341bd0664fe5a9183c73379b7b1a4bf522ccfb99a867d25234b89e67b8283 = $this->env->getExtension("native_profiler");
        $__internal_59a341bd0664fe5a9183c73379b7b1a4bf522ccfb99a867d25234b89e67b8283->enter($__internal_59a341bd0664fe5a9183c73379b7b1a4bf522ccfb99a867d25234b89e67b8283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_59a341bd0664fe5a9183c73379b7b1a4bf522ccfb99a867d25234b89e67b8283->leave($__internal_59a341bd0664fe5a9183c73379b7b1a4bf522ccfb99a867d25234b89e67b8283_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
