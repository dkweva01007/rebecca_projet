<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_5201e0da63fca3c38fa29bebab331b1df4911ff0e721817bbdcefd3e9380209b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_b0f3562270634440e64ff4a425e5ff8e48077b91d69d9bf8557ceb2e4da0d24a = $this->env->getExtension("native_profiler");
        $__internal_b0f3562270634440e64ff4a425e5ff8e48077b91d69d9bf8557ceb2e4da0d24a->enter($__internal_b0f3562270634440e64ff4a425e5ff8e48077b91d69d9bf8557ceb2e4da0d24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0f3562270634440e64ff4a425e5ff8e48077b91d69d9bf8557ceb2e4da0d24a->leave($__internal_b0f3562270634440e64ff4a425e5ff8e48077b91d69d9bf8557ceb2e4da0d24a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_97d6a7153a39739411be978885277d035f177b75762484104335f0bc59b444c7 = $this->env->getExtension("native_profiler");
        $__internal_97d6a7153a39739411be978885277d035f177b75762484104335f0bc59b444c7->enter($__internal_97d6a7153a39739411be978885277d035f177b75762484104335f0bc59b444c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_97d6a7153a39739411be978885277d035f177b75762484104335f0bc59b444c7->leave($__internal_97d6a7153a39739411be978885277d035f177b75762484104335f0bc59b444c7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5096f81466f2f0eace58394811d2127f91a9201f284a2417628a01fdf5b7a14d = $this->env->getExtension("native_profiler");
        $__internal_5096f81466f2f0eace58394811d2127f91a9201f284a2417628a01fdf5b7a14d->enter($__internal_5096f81466f2f0eace58394811d2127f91a9201f284a2417628a01fdf5b7a14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5096f81466f2f0eace58394811d2127f91a9201f284a2417628a01fdf5b7a14d->leave($__internal_5096f81466f2f0eace58394811d2127f91a9201f284a2417628a01fdf5b7a14d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
