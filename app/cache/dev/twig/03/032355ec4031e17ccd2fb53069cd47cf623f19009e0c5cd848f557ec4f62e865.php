<?php

/* ::base.html.twig */
class __TwigTemplate_d1901b749ad0947212b962ebf3c1eeccc27077d5068bbf9ccd2200b5f87e7eaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcf97c12382b8325cf6777a59e3d0a014f543bddf2978041411b0d9fa569cd16 = $this->env->getExtension("native_profiler");
        $__internal_fcf97c12382b8325cf6777a59e3d0a014f543bddf2978041411b0d9fa569cd16->enter($__internal_fcf97c12382b8325cf6777a59e3d0a014f543bddf2978041411b0d9fa569cd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
    <head>
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
        <meta name=\"description\" content=\"Rebecca PETIT's Porto Folio, Digital and Social Media Expert\"/>
        <meta name=\"keywords\" content=\"\"/>
        <meta name=\"viewport\" content=\"width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
        <meta property=\"og:title\" content=\"Rebecca PETIT's Porto Folio: Home\" />
        <meta property=\"og:type\" content=\"website\" />
        <meta property=\"og:description\" content=\"Rebecca PETIT's Porto Folio, Digital and Social Media Expert\" />
        <meta property=\"og:site_name\" content=\"Rebecca PETIT's Porto Folio\" />
        <link rel=\"icon\" href=\"/favicon.ico\" type=\"image/ico\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/bundles/dkweb/css/app.min.css"), "html", null, true);
        echo "\" />

        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/bundles/dkweb/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/bundles/dkweb/js/vendor.min.js"), "html", null, true);
        echo "\"></script>

        <title>";
        // line 20
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <!-- GA -->
        ";
        // line 30
        echo "    </head>
    <body data-page=\"whyistayed\">
        <header>
            <div class=\"left\">
                <div class=\"hamburger\">
                    <span class=\"top\"></span><span class=\"mid\"></span><span class=\"btm\"></span>
                </div>
                <div class=\"bth-text\" style=\"font-family: Eraser\">
                    <a href=\"/\" >Rebecca PETIT</a>
                </div>
                <div class=\"social\">
                    <a href=\"https://fr.linkedin.com/in/rebeccapetit\" target=\"_blank\"><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dkweb/img/linkedin.jpg"), "html", null, true);
        echo "\" alt='icon-linked'/></a>
                </div>
            </div>

            <div class=\"right\">
                <div class=\"inner-wrapper\">
                    <div class=\"content-wrapper\">
                        <div class=\"row about\">
                            <h4 class=\"fboldup\">ABOUT</h4>
                            <br/>
                            <h4 class=\"fboldup\" style=\"font-family: Eraser;text-align: center;\">MANTRA</h4>
                            <p style=\"font-family: Agency FB\">";
        // line 53
        echo "                                \"Ce n'est pas la conscience des hommes qui determine leur être,
                                <br/>
                                c'est inversement leur être social qui détermine leur conscience\"
                            </p>
                            <p style=\"color: #fff;font-family: Agency FB;text-align: right;\">
                                <span style=\"font-weight: bold;\">
                                    Karl Max (1818 - 1883)
                                </span>
                                <br/>
                                <span style=\"font-size:24px\">
                                    Economiste, Philosophe & Scientifique
                                </span>
                            </p>
                        </div>
                        <div class=\"row main-nav my_nav\">
                            <h4 class=\"fboldup\">About</h4>
                            <a href=\"#competence\" class=\"hashtag clearfix\">
                                <div class=\"hashtag-name\">
                                    <h3>COMPETENCES</h3>
                                </div>
                            </a>
                            <a href=\"#pro_exp\" class=\"hashtag clearfix\">
                                <div class=\"hashtag-name\" style=\"width: auto\">
                                    <h3>EXPERIENCES PROFESSIONNELLES</h3>
                                </div>
                            </a>
                            <a href=\"#portfolio\" class=\"hashtag clearfix\">
                                <div class=\"hashtag-name\">
                                    <h3>PORTFOLIO</h3>
                                </div>
                            </a>
                            <a href=\"#degree\" class=\"hashtag clearfix\">
                                <div class=\"hashtag-name\">
                                    <h3>FORMATIONS</h3>
                                </div>
                            </a>
                            <a href=\"#tools\" class=\"hashtag clearfix\">
                                <div class=\"hashtag-name\">
                                    <h3>OUTILS</h3>
                                </div>
                            </a>
                            <a href=\"#contact\" class=\"hashtag clearfix\">
                                <div class=\"hashtag-name\">
                                    <h3>CONTACT</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
        </header>
    ";
        // line 103
        $this->displayBlock('body', $context, $blocks);
        // line 104
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/bundles/dkweb/js/app.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 105
        $this->displayBlock('javascripts', $context, $blocks);
        // line 106
        echo "</body>
</html>
";
        
        $__internal_fcf97c12382b8325cf6777a59e3d0a014f543bddf2978041411b0d9fa569cd16->leave($__internal_fcf97c12382b8325cf6777a59e3d0a014f543bddf2978041411b0d9fa569cd16_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ad4cd563200652c748b4698247f30ed79a16e511c091ee41414c2a1853d0464 = $this->env->getExtension("native_profiler");
        $__internal_4ad4cd563200652c748b4698247f30ed79a16e511c091ee41414c2a1853d0464->enter($__internal_4ad4cd563200652c748b4698247f30ed79a16e511c091ee41414c2a1853d0464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4ad4cd563200652c748b4698247f30ed79a16e511c091ee41414c2a1853d0464->leave($__internal_4ad4cd563200652c748b4698247f30ed79a16e511c091ee41414c2a1853d0464_prof);

    }

    // line 103
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a30c61e115ece81c3da53e88cc180a9923a4f4a196deb4e263a0e1723af24b6 = $this->env->getExtension("native_profiler");
        $__internal_8a30c61e115ece81c3da53e88cc180a9923a4f4a196deb4e263a0e1723af24b6->enter($__internal_8a30c61e115ece81c3da53e88cc180a9923a4f4a196deb4e263a0e1723af24b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8a30c61e115ece81c3da53e88cc180a9923a4f4a196deb4e263a0e1723af24b6->leave($__internal_8a30c61e115ece81c3da53e88cc180a9923a4f4a196deb4e263a0e1723af24b6_prof);

    }

    // line 105
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d112cc85f95b0164a641de338e155a8b24cbc2d01b59f8796aaaa94a41f24a5a = $this->env->getExtension("native_profiler");
        $__internal_d112cc85f95b0164a641de338e155a8b24cbc2d01b59f8796aaaa94a41f24a5a->enter($__internal_d112cc85f95b0164a641de338e155a8b24cbc2d01b59f8796aaaa94a41f24a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d112cc85f95b0164a641de338e155a8b24cbc2d01b59f8796aaaa94a41f24a5a->leave($__internal_d112cc85f95b0164a641de338e155a8b24cbc2d01b59f8796aaaa94a41f24a5a_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 105,  169 => 103,  158 => 20,  149 => 106,  147 => 105,  142 => 104,  140 => 103,  88 => 53,  74 => 41,  61 => 30,  55 => 20,  50 => 18,  46 => 17,  41 => 15,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*     <head>*/
/*         <meta charset="utf-8" />*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>*/
/*         <meta name="description" content="Rebecca PETIT's Porto Folio, Digital and Social Media Expert"/>*/
/*         <meta name="keywords" content=""/>*/
/*         <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />*/
/*         <meta property="og:title" content="Rebecca PETIT's Porto Folio: Home" />*/
/*         <meta property="og:type" content="website" />*/
/*         <meta property="og:description" content="Rebecca PETIT's Porto Folio, Digital and Social Media Expert" />*/
/*         <meta property="og:site_name" content="Rebecca PETIT's Porto Folio" />*/
/*         <link rel="icon" href="/favicon.ico" type="image/ico" />*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('web/bundles/dkweb/css/app.min.css') }}" />*/
/* */
/*         <script src="{{ asset('web/bundles/dkweb/js/jquery.min.js') }}"></script>*/
/*         <script src="{{ asset('web/bundles/dkweb/js/vendor.min.js') }}"></script>*/
/* */
/*         <title>{% block title %}{% endblock %}</title>*/
/* */
/*         <!-- GA -->*/
/*         {# <script>*/
/*             (function(i, s, o, g, r, a, m){i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function(){*/
/*             (i[r].q = i[r].q || []).push(arguments)}, i[r].l = 1 * new Date(); a = s.createElement(o),*/
/*                     m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)*/
/*             })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');*/
/*             ga('create', 'UA-70676360-9', 'auto');*/
/*             ga('send', 'pageview');</script>#}*/
/*     </head>*/
/*     <body data-page="whyistayed">*/
/*         <header>*/
/*             <div class="left">*/
/*                 <div class="hamburger">*/
/*                     <span class="top"></span><span class="mid"></span><span class="btm"></span>*/
/*                 </div>*/
/*                 <div class="bth-text" style="font-family: Eraser">*/
/*                     <a href="/" >Rebecca PETIT</a>*/
/*                 </div>*/
/*                 <div class="social">*/
/*                     <a href="https://fr.linkedin.com/in/rebeccapetit" target="_blank"><img src="{{ asset('bundles/dkweb/img/linkedin.jpg') }}" alt='icon-linked'/></a>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="right">*/
/*                 <div class="inner-wrapper">*/
/*                     <div class="content-wrapper">*/
/*                         <div class="row about">*/
/*                             <h4 class="fboldup">ABOUT</h4>*/
/*                             <br/>*/
/*                             <h4 class="fboldup" style="font-family: Eraser;text-align: center;">MANTRA</h4>*/
/*                             <p style="font-family: Agency FB">{# ff3300 #}*/
/*                                 "Ce n'est pas la conscience des hommes qui determine leur être,*/
/*                                 <br/>*/
/*                                 c'est inversement leur être social qui détermine leur conscience"*/
/*                             </p>*/
/*                             <p style="color: #fff;font-family: Agency FB;text-align: right;">*/
/*                                 <span style="font-weight: bold;">*/
/*                                     Karl Max (1818 - 1883)*/
/*                                 </span>*/
/*                                 <br/>*/
/*                                 <span style="font-size:24px">*/
/*                                     Economiste, Philosophe & Scientifique*/
/*                                 </span>*/
/*                             </p>*/
/*                         </div>*/
/*                         <div class="row main-nav my_nav">*/
/*                             <h4 class="fboldup">About</h4>*/
/*                             <a href="#competence" class="hashtag clearfix">*/
/*                                 <div class="hashtag-name">*/
/*                                     <h3>COMPETENCES</h3>*/
/*                                 </div>*/
/*                             </a>*/
/*                             <a href="#pro_exp" class="hashtag clearfix">*/
/*                                 <div class="hashtag-name" style="width: auto">*/
/*                                     <h3>EXPERIENCES PROFESSIONNELLES</h3>*/
/*                                 </div>*/
/*                             </a>*/
/*                             <a href="#portfolio" class="hashtag clearfix">*/
/*                                 <div class="hashtag-name">*/
/*                                     <h3>PORTFOLIO</h3>*/
/*                                 </div>*/
/*                             </a>*/
/*                             <a href="#degree" class="hashtag clearfix">*/
/*                                 <div class="hashtag-name">*/
/*                                     <h3>FORMATIONS</h3>*/
/*                                 </div>*/
/*                             </a>*/
/*                             <a href="#tools" class="hashtag clearfix">*/
/*                                 <div class="hashtag-name">*/
/*                                     <h3>OUTILS</h3>*/
/*                                 </div>*/
/*                             </a>*/
/*                             <a href="#contact" class="hashtag clearfix">*/
/*                                 <div class="hashtag-name">*/
/*                                     <h3>CONTACT</h3>*/
/*                                 </div>*/
/*                             </a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*         </header>*/
/*     {% block body %}{% endblock %}*/
/*     <script type="text/javascript" src="{{ asset('web/bundles/dkweb/js/app.min.js') }}"></script>*/
/* {% block javascripts %}{% endblock %}*/
/* </body>*/
/* </html>*/
/* */
