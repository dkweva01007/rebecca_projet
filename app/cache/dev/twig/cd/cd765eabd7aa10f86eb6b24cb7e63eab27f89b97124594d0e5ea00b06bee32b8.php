<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_8c5f15796fc005f7595007e11e4b7b96d65013c6b597a42d942bcfdedf2017d5 extends Twig_Template
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
        $__internal_183475846b87e2b9a8ff2d83668b8837ea540cef57d9e3e7f7d3def0a26a8299 = $this->env->getExtension("native_profiler");
        $__internal_183475846b87e2b9a8ff2d83668b8837ea540cef57d9e3e7f7d3def0a26a8299->enter($__internal_183475846b87e2b9a8ff2d83668b8837ea540cef57d9e3e7f7d3def0a26a8299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        
        $__internal_183475846b87e2b9a8ff2d83668b8837ea540cef57d9e3e7f7d3def0a26a8299->leave($__internal_183475846b87e2b9a8ff2d83668b8837ea540cef57d9e3e7f7d3def0a26a8299_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f80a072a4b436f75574b982ed51c8c103a8ebb2063fc67bf42865bbc2be1ec30 = $this->env->getExtension("native_profiler");
        $__internal_f80a072a4b436f75574b982ed51c8c103a8ebb2063fc67bf42865bbc2be1ec30->enter($__internal_f80a072a4b436f75574b982ed51c8c103a8ebb2063fc67bf42865bbc2be1ec30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_f80a072a4b436f75574b982ed51c8c103a8ebb2063fc67bf42865bbc2be1ec30->leave($__internal_f80a072a4b436f75574b982ed51c8c103a8ebb2063fc67bf42865bbc2be1ec30_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8769ead9c9db4c4934d25676ce40acd4f489352109e7067c91d5e45d0b7b9ecd = $this->env->getExtension("native_profiler");
        $__internal_8769ead9c9db4c4934d25676ce40acd4f489352109e7067c91d5e45d0b7b9ecd->enter($__internal_8769ead9c9db4c4934d25676ce40acd4f489352109e7067c91d5e45d0b7b9ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_8769ead9c9db4c4934d25676ce40acd4f489352109e7067c91d5e45d0b7b9ecd->leave($__internal_8769ead9c9db4c4934d25676ce40acd4f489352109e7067c91d5e45d0b7b9ecd_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_2bc71a158d547c7d9f29e78337e232cc0ebedcf346e9c74de21168971249b1f6 = $this->env->getExtension("native_profiler");
        $__internal_2bc71a158d547c7d9f29e78337e232cc0ebedcf346e9c74de21168971249b1f6->enter($__internal_2bc71a158d547c7d9f29e78337e232cc0ebedcf346e9c74de21168971249b1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_2bc71a158d547c7d9f29e78337e232cc0ebedcf346e9c74de21168971249b1f6->leave($__internal_2bc71a158d547c7d9f29e78337e232cc0ebedcf346e9c74de21168971249b1f6_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2ed41fe27b81856ad110b68acb0a55491d1d31c3cd2bb7b005837a82438472fe = $this->env->getExtension("native_profiler");
        $__internal_2ed41fe27b81856ad110b68acb0a55491d1d31c3cd2bb7b005837a82438472fe->enter($__internal_2ed41fe27b81856ad110b68acb0a55491d1d31c3cd2bb7b005837a82438472fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_2ed41fe27b81856ad110b68acb0a55491d1d31c3cd2bb7b005837a82438472fe->leave($__internal_2ed41fe27b81856ad110b68acb0a55491d1d31c3cd2bb7b005837a82438472fe_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle::base.html.twig";
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
