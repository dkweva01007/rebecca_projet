<?php

/* base.html.twig */
class __TwigTemplate_295f15ac7e4d029e95f709ca7fb5c754f440cfa82938bbb839d792a4dc022c3a extends Twig_Template
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
        $__internal_8f39d3b172a364421018d3d696ba4a2b24bfa1f03c2afa115d56bfeb4135f076 = $this->env->getExtension("native_profiler");
        $__internal_8f39d3b172a364421018d3d696ba4a2b24bfa1f03c2afa115d56bfeb4135f076->enter($__internal_8f39d3b172a364421018d3d696ba4a2b24bfa1f03c2afa115d56bfeb4135f076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                <div class=\"bth-text\">
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
                            <p style=\"font-family: Agency FB\">";
        // line 51
        echo "                                \"Ce n'est pas la conscience des hommes qui determine leur être,
                                <br/>
                                c'est inversement leur être social qui détermine leur conscience\"
                                <br/>
                                <span style=\"font-weight: bold\">Karl Max</span> (1818 - 1883)
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
        // line 98
        $this->displayBlock('body', $context, $blocks);
        // line 99
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/bundles/dkweb/js/app.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 100
        $this->displayBlock('javascripts', $context, $blocks);
        // line 101
        echo "</body>
</html>
";
        
        $__internal_8f39d3b172a364421018d3d696ba4a2b24bfa1f03c2afa115d56bfeb4135f076->leave($__internal_8f39d3b172a364421018d3d696ba4a2b24bfa1f03c2afa115d56bfeb4135f076_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4ae85c1146ce5581de080e860e63096744455c97ee474022c5828dcca007c01 = $this->env->getExtension("native_profiler");
        $__internal_d4ae85c1146ce5581de080e860e63096744455c97ee474022c5828dcca007c01->enter($__internal_d4ae85c1146ce5581de080e860e63096744455c97ee474022c5828dcca007c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d4ae85c1146ce5581de080e860e63096744455c97ee474022c5828dcca007c01->leave($__internal_d4ae85c1146ce5581de080e860e63096744455c97ee474022c5828dcca007c01_prof);

    }

    // line 98
    public function block_body($context, array $blocks = array())
    {
        $__internal_230f9895ac0070f65d9d26f0c29ac3fc820c3b3267bfbd6587f74b9d6a917962 = $this->env->getExtension("native_profiler");
        $__internal_230f9895ac0070f65d9d26f0c29ac3fc820c3b3267bfbd6587f74b9d6a917962->enter($__internal_230f9895ac0070f65d9d26f0c29ac3fc820c3b3267bfbd6587f74b9d6a917962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_230f9895ac0070f65d9d26f0c29ac3fc820c3b3267bfbd6587f74b9d6a917962->leave($__internal_230f9895ac0070f65d9d26f0c29ac3fc820c3b3267bfbd6587f74b9d6a917962_prof);

    }

    // line 100
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d8d1bbfe6e5f79e0739191215ebe1bc862e21c7365640041a9fb10d608e1712f = $this->env->getExtension("native_profiler");
        $__internal_d8d1bbfe6e5f79e0739191215ebe1bc862e21c7365640041a9fb10d608e1712f->enter($__internal_d8d1bbfe6e5f79e0739191215ebe1bc862e21c7365640041a9fb10d608e1712f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d8d1bbfe6e5f79e0739191215ebe1bc862e21c7365640041a9fb10d608e1712f->leave($__internal_d8d1bbfe6e5f79e0739191215ebe1bc862e21c7365640041a9fb10d608e1712f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 100,  164 => 98,  153 => 20,  144 => 101,  142 => 100,  137 => 99,  135 => 98,  86 => 51,  74 => 41,  61 => 30,  55 => 20,  50 => 18,  46 => 17,  41 => 15,  25 => 1,);
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
/*                 <div class="bth-text">*/
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
/*                             <p style="font-family: Agency FB">{# ff3300 #}*/
/*                                 "Ce n'est pas la conscience des hommes qui determine leur être,*/
/*                                 <br/>*/
/*                                 c'est inversement leur être social qui détermine leur conscience"*/
/*                                 <br/>*/
/*                                 <span style="font-weight: bold">Karl Max</span> (1818 - 1883)*/
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