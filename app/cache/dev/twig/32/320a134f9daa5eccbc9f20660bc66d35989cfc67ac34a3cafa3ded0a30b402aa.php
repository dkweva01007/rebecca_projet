<?php

/* @CoreSphereConsole/base.html.twig */
class __TwigTemplate_7f772c15bd129cbf53f6bcac72b2ebb301bc4198c667402dbec37c779b4a2220 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b6e570a1037d5e54cf0d7d14c80bdb6cdaf86b963478d649c1d91ce5165e830 = $this->env->getExtension("native_profiler");
        $__internal_3b6e570a1037d5e54cf0d7d14c80bdb6cdaf86b963478d649c1d91ce5165e830->enter($__internal_3b6e570a1037d5e54cf0d7d14c80bdb6cdaf86b963478d649c1d91ce5165e830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_3b6e570a1037d5e54cf0d7d14c80bdb6cdaf86b963478d649c1d91ce5165e830->leave($__internal_3b6e570a1037d5e54cf0d7d14c80bdb6cdaf86b963478d649c1d91ce5165e830_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_25df280d35fadc0665f5410f3c1123f4458e8723ee2e24d2df94d7c2e74c6a6b = $this->env->getExtension("native_profiler");
        $__internal_25df280d35fadc0665f5410f3c1123f4458e8723ee2e24d2df94d7c2e74c6a6b->enter($__internal_25df280d35fadc0665f5410f3c1123f4458e8723ee2e24d2df94d7c2e74c6a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_25df280d35fadc0665f5410f3c1123f4458e8723ee2e24d2df94d7c2e74c6a6b->leave($__internal_25df280d35fadc0665f5410f3c1123f4458e8723ee2e24d2df94d7c2e74c6a6b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_147cc079d76676d620ede6f1cc8b3bbd48601968f0d4003c1d5c9f98bf36539f = $this->env->getExtension("native_profiler");
        $__internal_147cc079d76676d620ede6f1cc8b3bbd48601968f0d4003c1d5c9f98bf36539f->enter($__internal_147cc079d76676d620ede6f1cc8b3bbd48601968f0d4003c1d5c9f98bf36539f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_147cc079d76676d620ede6f1cc8b3bbd48601968f0d4003c1d5c9f98bf36539f->leave($__internal_147cc079d76676d620ede6f1cc8b3bbd48601968f0d4003c1d5c9f98bf36539f_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ea99534a96894014893e5a7355838948d3eb88fdbfe89c296c02c6e02521867 = $this->env->getExtension("native_profiler");
        $__internal_7ea99534a96894014893e5a7355838948d3eb88fdbfe89c296c02c6e02521867->enter($__internal_7ea99534a96894014893e5a7355838948d3eb88fdbfe89c296c02c6e02521867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_7ea99534a96894014893e5a7355838948d3eb88fdbfe89c296c02c6e02521867->leave($__internal_7ea99534a96894014893e5a7355838948d3eb88fdbfe89c296c02c6e02521867_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_623c68cdca36a1c72877fef52a2da34fbe8b4dfbf6b1c5eca655a72756ea7c06 = $this->env->getExtension("native_profiler");
        $__internal_623c68cdca36a1c72877fef52a2da34fbe8b4dfbf6b1c5eca655a72756ea7c06->enter($__internal_623c68cdca36a1c72877fef52a2da34fbe8b4dfbf6b1c5eca655a72756ea7c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            ";
        // line 15
        echo "            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coresphereconsole/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\\\"><\\/script>\");
            </script>
        ";
        
        $__internal_623c68cdca36a1c72877fef52a2da34fbe8b4dfbf6b1c5eca655a72756ea7c06->leave($__internal_623c68cdca36a1c72877fef52a2da34fbe8b4dfbf6b1c5eca655a72756ea7c06_prof);

    }

    public function getTemplateName()
    {
        return "@CoreSphereConsole/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 19,  107 => 15,  105 => 14,  99 => 13,  87 => 12,  77 => 7,  71 => 6,  59 => 5,  50 => 22,  47 => 13,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title 'CoreSphere Console' %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('bundles/coresphereconsole/css/base.css') }}" type="text/css" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body '' %}*/
/*         {% block javascripts %}*/
/*             {# Load jQuery from Google CDN with a local fallback when not laded yet #}*/
/*             <script>*/
/*             window.jQuery || document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"><\/script>')*/
/*             </script>*/
/*             <script>*/
/*             window.jQuery || document.write("<script src=\"{{ asset('bundles/coresphereconsole/js/jquery-1.8.3.min.js') }}\"><\/script>");*/
/*             </script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
