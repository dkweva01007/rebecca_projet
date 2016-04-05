<?php

/* @DKWeb/Default/index.html.twig */
class __TwigTemplate_9b37b2980b011bf5e42cdf3455b3eceef5c3947e37c35cbdd7fac83892d8c62b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@DKWeb/Default/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7876501c65f1c0d74ff4fbc24b6ac2ff8763fe524d5450183eb9fc5eff0041f = $this->env->getExtension("native_profiler");
        $__internal_f7876501c65f1c0d74ff4fbc24b6ac2ff8763fe524d5450183eb9fc5eff0041f->enter($__internal_f7876501c65f1c0d74ff4fbc24b6ac2ff8763fe524d5450183eb9fc5eff0041f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DKWeb/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7876501c65f1c0d74ff4fbc24b6ac2ff8763fe524d5450183eb9fc5eff0041f->leave($__internal_f7876501c65f1c0d74ff4fbc24b6ac2ff8763fe524d5450183eb9fc5eff0041f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d39f292eb0e04ed96c6b9cfae0d6e54b6cb2f87c6dac66542ec836386c82c487 = $this->env->getExtension("native_profiler");
        $__internal_d39f292eb0e04ed96c6b9cfae0d6e54b6cb2f87c6dac66542ec836386c82c487->enter($__internal_d39f292eb0e04ed96c6b9cfae0d6e54b6cb2f87c6dac66542ec836386c82c487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo $this->env->getExtension('translator')->getTranslator()->trans("Rebecca PETIT: Home", array(), "messages");
        
        $__internal_d39f292eb0e04ed96c6b9cfae0d6e54b6cb2f87c6dac66542ec836386c82c487->leave($__internal_d39f292eb0e04ed96c6b9cfae0d6e54b6cb2f87c6dac66542ec836386c82c487_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_53f1c489ad3e984cdabe3675cef486c59c5a779f1a540ca1b61c07d2b309be56 = $this->env->getExtension("native_profiler");
        $__internal_53f1c489ad3e984cdabe3675cef486c59c5a779f1a540ca1b61c07d2b309be56->enter($__internal_53f1c489ad3e984cdabe3675cef486c59c5a779f1a540ca1b61c07d2b309be56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div id=\"page\" class=\"hashtag-whyistayed\">
        <div class=\"hashtag-header\">
            <!-- <h2>#WhyIStayed</h2> -->
        </div>
        <section class=\"hero\">
            <div class=\"inner-wrapper\">
                <div class=\"content-wrap\" style=\"width: auto\">
                    <h1>
                        ";
        // line 14
        echo $this->env->getExtension('translator')->getTranslator()->trans("DIGITAL <span style=\"font-family:Calibri;font-weight: bold;font-size: 49px\">&</span>
                            <br/>
                            SOCIAL MEDIA
                            <br/>
                            EXPERT", array(), "messages");
        // line 19
        echo "                        </h1>
                    </div>
                    <span class=\"line right start\"><span></span></span>
                    <span class=\"line right horizontal start\"><span></span></span>
                </div>
            </section>
            <section class=\"black-wrap intro\">
                <span class=\"line top start\"><span></span></span>
                <div class=\"inner-wrapper\">
                    <div class=\"quote-wrap\">
                        <blockquote>
                            <p style=\"font-family: Agency FB\">";
        // line 31
        echo "                                \"Ce n'est pas la conscience des hommes qui determine leur être,
                                <br/>
                                c'est inversement leur être social qui détermine leur conscience\"                                
                            </p>
                        </blockquote>
                        <p class=\"credit\">
                            <span style=\"font-weight: bold\">Karl Max</span> (1818 - 1883)
                            <br/>
                            <span style=\"font-size:24px\">
                                Economiste, Philosophe & Scientifique
                            </span>
                        </p>
                    </div>
                </div>
                <span class=\"line btm\"><span></span></span>
            </section>
            <section class=\"red-wrap\">
                <div class=\"inner-wrapper\">
                    <div class=\"quote-wrap\">
                        <p>
                            test d'accroche
                        </p>
                    </div>
                </div>
                <div class=\"red-bg-color\"></div>
            </section>
            <section id =\"competence\" class=\"black-wrap\" style=\"height: 399px\">
                <span class=\"line top\"><span></span></span>
                <div class=\"inner-wrapper\">
                    <div class=\"text-wrap\">
                        <table style=\"width: 100%; font-family: Agency FB; color: #FFF\">
                            <tr>
                                <td style=\"text-align: center;font-size: 21px\">Marketing / Communication</td>
                                <td style=\"text-align: center;font-size: 21px\">Conseil / Relation Client</td>
                                <td style=\"text-align: center;font-size: 21px\">Gestion de projet / Management</td>
                            </tr>
                            <tr>
                                <td style=\"text-align: center;font-size: 21px\">Digital / E-commerce</td>
                                <td style=\"text-align: center;font-size: 21px\">Social Media / RP 2.0</td>
                                <td style=\"text-align: center;font-size: 21px\">OPS / Content Marketing</td>
                            </tr>
                            <tr>
                                <td style=\"text-align: center;font-size: 21px\">Anglais courant</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class=\"red-bg-color\"></div>
            </section>
            <section id=\"pro_exp\" class=\"black-wrap\">
                <span class=\"line top\"><span></span></span>
                <div class=\"inner-wrapper\">
                    <div class=\"quote-wrap\">
                        <h3>Digital & Social Media Consultant </h3>
                        <blockquote style=\"font-size: 25px\">
                            Conseil, Stratégie, Gestion de projets web et campagnes digitales, Community Management & Formation
                            <br/>IDZZ, Synomia, Odilynch, CarbonCoin, Virtual Sterling, LoJoL ...
                        </blockquote>
                        <p class=\"credit\" style=\"font-size: 25px\">
                            FREELANCE London &nbsp; / &nbsp; Paris &nbsp; / &nbsp; Fevrier 2013 à Aujourd'hui
                        </p>
                    </div>
                    <br/>
                    <br/>
                    <div class=\"quote-wrap\">
                        <h3>Directrice de clientèle Digital & Social Media </h3>
                        <blockquote style=\"font-size: 25px\">
                            Conception & pilotage d'opérations full service digital, de la recommandation à la proposition financière et au suivi de l'execution : Media, Social Media, Création Digitale & Mobile. 
                            <br/> Management de 5 Community Managers & des équipes projet (Créatifs, Développeurs et Chefs de projet) & gestion financière / budgétaire.
                            <br/>Philips, J&J, Perfetti, Diageo, Carlsberg Group, Bel Group, Marie, SFR, Fram, INPES...
                        </blockquote>
                        <p class=\"credit\" style=\"font-size: 25px\">
                            AEGIS MEDIA &nbsp; / &nbsp; Paris &nbsp; / &nbsp; Janvier 2012 à Janvier 2013
                        </p>
                    </div>
                    <br/>
                    <br/>
                    <div class=\"quote-wrap\">
                        <h3>Responsable de clientèle Social Media </h3>
                        <blockquote style=\"font-size: 25px\">
                            Conseil & élaboration de stratgéies Social Media : animation des réseaux sociaux, stratégie d'engagement et de recrutement, campagnes d'influence auprès de la blogosphère, activation des forums et opérations spéciales, stratgéie de veille et de monitoring de l'e-reputation, SMO
                            <br/> Management de 5 Community Managers, Suvi de projet & gestion financière
                            <br/>Philips, Kellogg's, Danone, Reebok, J&J, Beiersdorf, Fast-Retailling, Vivarte, Mattel...
                        </blockquote>
                        <p class=\"credit\" style=\"font-size: 25px\">
                            AEGIS MEDIA &nbsp; / &nbsp; Paris &nbsp; / &nbsp; Juin 2010 à Decembre 2011
                        </p>
                    </div>
                    <br/>
                    <br/>
                    <div class=\"quote-wrap\">
                        <h3>Chef de projet Digital </h3>
                        <blockquote style=\"font-size: 25px\">
                            Recommandations stratégiques & opérationnelles, Brief & coordination des différents pôles d'expertise (Display, SEM, SEO, E-mailing, Affiliation, OPS, Mobile),
                            <br/>Suivi & optimisation des campagnes, Reportings,Suivi financier
                            <br/>Nissan, Hasbro, Barilla, Sony Pictures / SPHE, Bazarchic
                        </blockquote>
                        <p class=\"credit\" style=\"font-size: 25px\">
                            OMNICOMMEDIAGROUP &nbsp; / &nbsp; Paris &nbsp; / &nbsp; Mars 2008 à Juin 2010
                        </p>
                    </div>
                    <br/>
                    <br/>
                    <div class=\"quote-wrap\">
                        <h3>Chef de projet Digital </h3>
                        <blockquote style=\"font-size: 25px\">
                            Création des supports de communication, Cahier des charges et gestion de projet pour la refonte des sites web du groupe,
                            <br/>Organisation d'évenements à destindation des collaborateurs et des salons professionnels, Développement d'outils de communication interne (Newsletter, Intranet...)
                        </blockquote>
                        <p class=\"credit\" style=\"font-size: 25px\">
                            INSYWEB &nbsp; / &nbsp; Paris &nbsp; / &nbsp; Octobre 2005 à Octobre 2007
                        </p>
                    </div>
                </div>
                <span class=\"line btm\"><span></span></span>
            </section>
            <section id =\"portfolio\" class=\"video-wrap\" style=\"background-color: rgba(0, 0, 0, 0.7);height: 599px\">
                <div class=\"carousel-wrap\">
                    <div class=\"carousel\">
                        <div class=\"slide active\">
                            <div class=\"quote-wrap\">
                                <div class=\"text-wrap\">
                                    <p>Projet: Lancement Qashqai 2010</p>
                                    <br/>
                                    <p>Client: Nissan</p>
                                    <br/>
                                    <p>Drescriptif: Destructuration des Home pages Yahoo, MSN, Allociné, L’Equipe</p>
                                    <br/>
                                </div>
                                <div class=\"credit\" style=\"height: auto\">
                                    <iframe width=\"578\" height=\"325\" src=\"//www.dailymotion.com/embed/video/x2enwli\" frameborder=\"0\" allowfullscreen style=\"height: 325px\"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class=\"slide\">
                            <div class=\"quote-wrap\">
                                <div class=\"text-wrap\">
                                    <p>Projet: Lancement Nerf</p>
                                    <br/>
                                    <p>Client: Hasbro</p>
                                    <br/>
                                    <p>Drescriptif: XXXXXXXXXXXXX</p>
                                    <br/>
                                </div>
                                <div class=\"credit\" style=\"height: auto\">
                                    <iframe width=\"578\" height=\"325\" src=\"//www.dailymotion.com/embed/video/xafets\" frameborder=\"0\" allowfullscreen style=\"height: 325px\"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class=\"slide\">
                            <div class=\"quote-wrap\">
                                <div class=\"text-wrap\">
                                    <p>Projet: XXXXXXXXXXXXX</p>
                                    <br/>
                                    <p>Client: XXXXXXXXXXXXX</p>
                                    <br/>
                                    <p>Drescriptif: XXXXXXXXXXXXX</p>
                                    <br/>
                                </div>
                                <div class=\"credit\" style=\"height: auto\">
                                    <iframe width=\"578\" height=\"325\" src=\"https://www.youtube.com/embed/23kpRBxFuNM?rel=0&amp;showinfo=0\" frameborder=\"0\" allowfullscreen style=\"height: 325px\"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class=\"slide\">
                            <div class=\"quote-wrap\">
                                <div class=\"text-wrap\">
                                    <p>Projet: XXXXXXXXXXXXX</p>
                                    <br/>
                                    <p>Client: XXXXXXXXXXXXX</p>
                                    <br/>
                                    <p>Drescriptif: XXXXXXXXXXXXX</p>
                                    <br/>
                                </div>
                                <div class=\"credit\" style=\"height: auto\">
                                    <iframe width=\"578\" height=\"325\" src=\"https://www.youtube.com/embed/23kpRBxFuNM?rel=0&amp;showinfo=0\" frameborder=\"0\" allowfullscreen style=\"height: 325px\"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class=\"slide\">
                            <div class=\"quote-wrap\">
                                <div class=\"text-wrap\">
                                    <p>Projet: XXXXXXXXXXXXX</p>
                                    <br/>
                                    <p>Client: XXXXXXXXXXXXX</p>
                                    <br/>
                                    <p>Drescriptif: XXXXXXXXXXXXX</p>
                                    <br/>
                                </div>
                                <div class=\"credit\" style=\"height: auto\">
                                    <iframe width=\"578\" height=\"325\" src=\"https://www.youtube.com/embed/23kpRBxFuNM?rel=0&amp;showinfo=0\" frameborder=\"0\" allowfullscreen style=\"height: 325px\"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class=\"slide\">
                            <div class=\"quote-wrap\">
                                <div class=\"text-wrap\">
                                    <p>Projet: XXXXXXXXXXXXX</p>
                                    <br/>
                                    <p>Client: XXXXXXXXXXXXX</p>
                                    <br/>
                                    <p>Drescriptif: XXXXXXXXXXXXX</p>
                                    <br/>
                                </div>
                                <div class=\"credit\" style=\"height: auto\">
                                    <iframe width=\"578\" height=\"325\" src=\"https://www.youtube.com/embed/23kpRBxFuNM?rel=0&amp;showinfo=0\" frameborder=\"0\" allowfullscreen style=\"height: 325px\"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class=\"slide\">
                            <div class=\"quote-wrap\">
                                <div class=\"text-wrap\">
                                    <p>Projet: XXXXXXXXXXXXX</p>
                                    <br/>
                                    <p>Client: XXXXXXXXXXXXX</p>
                                    <br/>
                                    <p>Drescriptif: XXXXXXXXXXXXX</p>
                                    <br/>
                                </div>
                                <div class=\"credit\" style=\"height: auto\">
                                    <iframe width=\"578\" height=\"325\" src=\"https://www.youtube.com/embed/23kpRBxFuNM?rel=0&amp;showinfo=0\" frameborder=\"0\" allowfullscreen style=\"height: 325px\"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-dots\">
                        <span class=\"dot active\"></span>
                        <span class=\"dot\"></span>
                        <span class=\"dot\"></span>
                        <span class=\"dot\"></span>
                        <span class=\"dot\"></span>
                        <span class=\"dot\"></span>
                        <span class=\"dot\"></span>
                        <span class=\"dot\"></span>
                        <span class=\"dot\"></span>
                        <span class=\"dot\"></span>
                        <span class=\"dot\"></span>
                        <span class=\"dot\"></span>
                    </div>
                    <div class=\"carousel-nav-wrap\">
                        <span class=\"prev disabled\"><span class=\"icon-left-arrow\"></span></span>
                        <span class=\"next\"><span class=\"icon-right-arrow\"></span></span>
                    </div>
                </div>
                <div class=\"red-bg-color\"></div>
            </section>                    
            <section id=\"degree\" class=\"black-wrap\">
                <span class=\"line top\"><span></span></span>
                <div class=\"inner-wrapper\">
                    <div class=\"quote-wrap\">
                        <div class=\"text-wrap\">
                            <p><span style=\"font-weight: bold\">Master II Marketing, Communication & Stratégies Commerciales, majeure E-commerce</span>
                                <br>INSEEC Paris &nbsp; / &nbsp; Septembre 2008 </br>
                            </p>

                            <p><span style=\"font-weight: bold\">Master I Management & Gestion d'entreprise, majeure Marketing / Communication </span>
                                <br>Céfire-Esarc &nbsp; / &nbsp; INSEEC Paris &nbsp; / &nbsp; Septembre. 2007 </br>
                            </p>

                            <p><span style=\"font-weight: bold\">DUT Techniques de Commercialisation, majeure Marketing/Communication</span>  
                                <br>IUT de Rouen &nbsp; / &nbsp;Juin 2004 </br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"red-bg-color\"></div>
            </section>
            <section id=\"tools\" class=\"red-wrap\">
                <span class=\"line top\"><span></span></span>
                <div class=\"inner-wrapper\">
                    <div class=\"quote-wrap\">
                        <div class=\"text-wrap\">
                            <p>It wasn’t just individuals who were partaking in the victim blaming. On the show &ldquo;Fox &amp; Friends&rdquo;, Fox News hosts seemed to make light of the abuse. Host Brian Kilmeade laughed while saying, &ldquo;The message is, take the stairs.&rdquo; His co-host Steve Doocy smiled as he added his two cents: &ldquo;The message is when you’re in an elevator, there’s a camera.&rdquo;</p>
                            <p><a href=\"https://www.youtube.com/watch?v=djSkJGJmbKM\" target=\"_blank\" class=\"fboldup noudl\">View Video on Youtube <span class=\"icon-right-arrow\"></span></a></p>
                        </div>
                    </div>
                </div>
                <div class=\"red-bg-color\"></div>
            </section>
            <section id=\"contact\" class=\"black-wrap\">
                <span class=\"line top\"><span></span></span>
                <div class=\"inner-wrapper\">
                    <div class=\"image-wrap right-align\">
                        <div class=\"caption\">
                            <h3>Janay, who doesn’t have a Twitter account, posted the following message on Instagram:</h3>
                        </div>
                    </div>
                </div>
            </section>
            <div class=\"hashtag-footer\">
                <div class=\"right\">
                    <h5><a href=\"#ip\" class=\"top-btn\"><span class=\"icon-right-arrow\"></span> <span class=\"fboldup\">Top</span></a></h5>
                </div> 
            </div>

        </div>
        ";
        
        $__internal_53f1c489ad3e984cdabe3675cef486c59c5a779f1a540ca1b61c07d2b309be56->leave($__internal_53f1c489ad3e984cdabe3675cef486c59c5a779f1a540ca1b61c07d2b309be56_prof);

    }

    public function getTemplateName()
    {
        return "@DKWeb/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 31,  69 => 19,  63 => 14,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}{% trans %}Rebecca PETIT: Home{% endtrans %}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div id="page" class="hashtag-whyistayed">*/
/*         <div class="hashtag-header">*/
/*             <!-- <h2>#WhyIStayed</h2> -->*/
/*         </div>*/
/*         <section class="hero">*/
/*             <div class="inner-wrapper">*/
/*                 <div class="content-wrap" style="width: auto">*/
/*                     <h1>*/
/*                         {% trans %}DIGITAL <span style="font-family:Calibri;font-weight: bold;font-size: 49px">&</span>*/
/*                             <br/>*/
/*                             SOCIAL MEDIA*/
/*                             <br/>*/
/*                             EXPERT{% endtrans %}*/
/*                         </h1>*/
/*                     </div>*/
/*                     <span class="line right start"><span></span></span>*/
/*                     <span class="line right horizontal start"><span></span></span>*/
/*                 </div>*/
/*             </section>*/
/*             <section class="black-wrap intro">*/
/*                 <span class="line top start"><span></span></span>*/
/*                 <div class="inner-wrapper">*/
/*                     <div class="quote-wrap">*/
/*                         <blockquote>*/
/*                             <p style="font-family: Agency FB">{# ff3300 #}*/
/*                                 "Ce n'est pas la conscience des hommes qui determine leur être,*/
/*                                 <br/>*/
/*                                 c'est inversement leur être social qui détermine leur conscience"                                */
/*                             </p>*/
/*                         </blockquote>*/
/*                         <p class="credit">*/
/*                             <span style="font-weight: bold">Karl Max</span> (1818 - 1883)*/
/*                             <br/>*/
/*                             <span style="font-size:24px">*/
/*                                 Economiste, Philosophe & Scientifique*/
/*                             </span>*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <span class="line btm"><span></span></span>*/
/*             </section>*/
/*             <section class="red-wrap">*/
/*                 <div class="inner-wrapper">*/
/*                     <div class="quote-wrap">*/
/*                         <p>*/
/*                             test d'accroche*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="red-bg-color"></div>*/
/*             </section>*/
/*             <section id ="competence" class="black-wrap" style="height: 399px">*/
/*                 <span class="line top"><span></span></span>*/
/*                 <div class="inner-wrapper">*/
/*                     <div class="text-wrap">*/
/*                         <table style="width: 100%; font-family: Agency FB; color: #FFF">*/
/*                             <tr>*/
/*                                 <td style="text-align: center;font-size: 21px">Marketing / Communication</td>*/
/*                                 <td style="text-align: center;font-size: 21px">Conseil / Relation Client</td>*/
/*                                 <td style="text-align: center;font-size: 21px">Gestion de projet / Management</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td style="text-align: center;font-size: 21px">Digital / E-commerce</td>*/
/*                                 <td style="text-align: center;font-size: 21px">Social Media / RP 2.0</td>*/
/*                                 <td style="text-align: center;font-size: 21px">OPS / Content Marketing</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td style="text-align: center;font-size: 21px">Anglais courant</td>*/
/*                             </tr>*/
/*                         </table>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="red-bg-color"></div>*/
/*             </section>*/
/*             <section id="pro_exp" class="black-wrap">*/
/*                 <span class="line top"><span></span></span>*/
/*                 <div class="inner-wrapper">*/
/*                     <div class="quote-wrap">*/
/*                         <h3>Digital & Social Media Consultant </h3>*/
/*                         <blockquote style="font-size: 25px">*/
/*                             Conseil, Stratégie, Gestion de projets web et campagnes digitales, Community Management & Formation*/
/*                             <br/>IDZZ, Synomia, Odilynch, CarbonCoin, Virtual Sterling, LoJoL ...*/
/*                         </blockquote>*/
/*                         <p class="credit" style="font-size: 25px">*/
/*                             FREELANCE London &nbsp; / &nbsp; Paris &nbsp; / &nbsp; Fevrier 2013 à Aujourd'hui*/
/*                         </p>*/
/*                     </div>*/
/*                     <br/>*/
/*                     <br/>*/
/*                     <div class="quote-wrap">*/
/*                         <h3>Directrice de clientèle Digital & Social Media </h3>*/
/*                         <blockquote style="font-size: 25px">*/
/*                             Conception & pilotage d'opérations full service digital, de la recommandation à la proposition financière et au suivi de l'execution : Media, Social Media, Création Digitale & Mobile. */
/*                             <br/> Management de 5 Community Managers & des équipes projet (Créatifs, Développeurs et Chefs de projet) & gestion financière / budgétaire.*/
/*                             <br/>Philips, J&J, Perfetti, Diageo, Carlsberg Group, Bel Group, Marie, SFR, Fram, INPES...*/
/*                         </blockquote>*/
/*                         <p class="credit" style="font-size: 25px">*/
/*                             AEGIS MEDIA &nbsp; / &nbsp; Paris &nbsp; / &nbsp; Janvier 2012 à Janvier 2013*/
/*                         </p>*/
/*                     </div>*/
/*                     <br/>*/
/*                     <br/>*/
/*                     <div class="quote-wrap">*/
/*                         <h3>Responsable de clientèle Social Media </h3>*/
/*                         <blockquote style="font-size: 25px">*/
/*                             Conseil & élaboration de stratgéies Social Media : animation des réseaux sociaux, stratégie d'engagement et de recrutement, campagnes d'influence auprès de la blogosphère, activation des forums et opérations spéciales, stratgéie de veille et de monitoring de l'e-reputation, SMO*/
/*                             <br/> Management de 5 Community Managers, Suvi de projet & gestion financière*/
/*                             <br/>Philips, Kellogg's, Danone, Reebok, J&J, Beiersdorf, Fast-Retailling, Vivarte, Mattel...*/
/*                         </blockquote>*/
/*                         <p class="credit" style="font-size: 25px">*/
/*                             AEGIS MEDIA &nbsp; / &nbsp; Paris &nbsp; / &nbsp; Juin 2010 à Decembre 2011*/
/*                         </p>*/
/*                     </div>*/
/*                     <br/>*/
/*                     <br/>*/
/*                     <div class="quote-wrap">*/
/*                         <h3>Chef de projet Digital </h3>*/
/*                         <blockquote style="font-size: 25px">*/
/*                             Recommandations stratégiques & opérationnelles, Brief & coordination des différents pôles d'expertise (Display, SEM, SEO, E-mailing, Affiliation, OPS, Mobile),*/
/*                             <br/>Suivi & optimisation des campagnes, Reportings,Suivi financier*/
/*                             <br/>Nissan, Hasbro, Barilla, Sony Pictures / SPHE, Bazarchic*/
/*                         </blockquote>*/
/*                         <p class="credit" style="font-size: 25px">*/
/*                             OMNICOMMEDIAGROUP &nbsp; / &nbsp; Paris &nbsp; / &nbsp; Mars 2008 à Juin 2010*/
/*                         </p>*/
/*                     </div>*/
/*                     <br/>*/
/*                     <br/>*/
/*                     <div class="quote-wrap">*/
/*                         <h3>Chef de projet Digital </h3>*/
/*                         <blockquote style="font-size: 25px">*/
/*                             Création des supports de communication, Cahier des charges et gestion de projet pour la refonte des sites web du groupe,*/
/*                             <br/>Organisation d'évenements à destindation des collaborateurs et des salons professionnels, Développement d'outils de communication interne (Newsletter, Intranet...)*/
/*                         </blockquote>*/
/*                         <p class="credit" style="font-size: 25px">*/
/*                             INSYWEB &nbsp; / &nbsp; Paris &nbsp; / &nbsp; Octobre 2005 à Octobre 2007*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <span class="line btm"><span></span></span>*/
/*             </section>*/
/*             <section id ="portfolio" class="video-wrap" style="background-color: rgba(0, 0, 0, 0.7);height: 599px">*/
/*                 <div class="carousel-wrap">*/
/*                     <div class="carousel">*/
/*                         <div class="slide active">*/
/*                             <div class="quote-wrap">*/
/*                                 <div class="text-wrap">*/
/*                                     <p>Projet: Lancement Qashqai 2010</p>*/
/*                                     <br/>*/
/*                                     <p>Client: Nissan</p>*/
/*                                     <br/>*/
/*                                     <p>Drescriptif: Destructuration des Home pages Yahoo, MSN, Allociné, L’Equipe</p>*/
/*                                     <br/>*/
/*                                 </div>*/
/*                                 <div class="credit" style="height: auto">*/
/*                                     <iframe width="578" height="325" src="//www.dailymotion.com/embed/video/x2enwli" frameborder="0" allowfullscreen style="height: 325px"></iframe>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="slide">*/
/*                             <div class="quote-wrap">*/
/*                                 <div class="text-wrap">*/
/*                                     <p>Projet: Lancement Nerf</p>*/
/*                                     <br/>*/
/*                                     <p>Client: Hasbro</p>*/
/*                                     <br/>*/
/*                                     <p>Drescriptif: XXXXXXXXXXXXX</p>*/
/*                                     <br/>*/
/*                                 </div>*/
/*                                 <div class="credit" style="height: auto">*/
/*                                     <iframe width="578" height="325" src="//www.dailymotion.com/embed/video/xafets" frameborder="0" allowfullscreen style="height: 325px"></iframe>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="slide">*/
/*                             <div class="quote-wrap">*/
/*                                 <div class="text-wrap">*/
/*                                     <p>Projet: XXXXXXXXXXXXX</p>*/
/*                                     <br/>*/
/*                                     <p>Client: XXXXXXXXXXXXX</p>*/
/*                                     <br/>*/
/*                                     <p>Drescriptif: XXXXXXXXXXXXX</p>*/
/*                                     <br/>*/
/*                                 </div>*/
/*                                 <div class="credit" style="height: auto">*/
/*                                     <iframe width="578" height="325" src="https://www.youtube.com/embed/23kpRBxFuNM?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen style="height: 325px"></iframe>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="slide">*/
/*                             <div class="quote-wrap">*/
/*                                 <div class="text-wrap">*/
/*                                     <p>Projet: XXXXXXXXXXXXX</p>*/
/*                                     <br/>*/
/*                                     <p>Client: XXXXXXXXXXXXX</p>*/
/*                                     <br/>*/
/*                                     <p>Drescriptif: XXXXXXXXXXXXX</p>*/
/*                                     <br/>*/
/*                                 </div>*/
/*                                 <div class="credit" style="height: auto">*/
/*                                     <iframe width="578" height="325" src="https://www.youtube.com/embed/23kpRBxFuNM?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen style="height: 325px"></iframe>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="slide">*/
/*                             <div class="quote-wrap">*/
/*                                 <div class="text-wrap">*/
/*                                     <p>Projet: XXXXXXXXXXXXX</p>*/
/*                                     <br/>*/
/*                                     <p>Client: XXXXXXXXXXXXX</p>*/
/*                                     <br/>*/
/*                                     <p>Drescriptif: XXXXXXXXXXXXX</p>*/
/*                                     <br/>*/
/*                                 </div>*/
/*                                 <div class="credit" style="height: auto">*/
/*                                     <iframe width="578" height="325" src="https://www.youtube.com/embed/23kpRBxFuNM?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen style="height: 325px"></iframe>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="slide">*/
/*                             <div class="quote-wrap">*/
/*                                 <div class="text-wrap">*/
/*                                     <p>Projet: XXXXXXXXXXXXX</p>*/
/*                                     <br/>*/
/*                                     <p>Client: XXXXXXXXXXXXX</p>*/
/*                                     <br/>*/
/*                                     <p>Drescriptif: XXXXXXXXXXXXX</p>*/
/*                                     <br/>*/
/*                                 </div>*/
/*                                 <div class="credit" style="height: auto">*/
/*                                     <iframe width="578" height="325" src="https://www.youtube.com/embed/23kpRBxFuNM?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen style="height: 325px"></iframe>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="slide">*/
/*                             <div class="quote-wrap">*/
/*                                 <div class="text-wrap">*/
/*                                     <p>Projet: XXXXXXXXXXXXX</p>*/
/*                                     <br/>*/
/*                                     <p>Client: XXXXXXXXXXXXX</p>*/
/*                                     <br/>*/
/*                                     <p>Drescriptif: XXXXXXXXXXXXX</p>*/
/*                                     <br/>*/
/*                                 </div>*/
/*                                 <div class="credit" style="height: auto">*/
/*                                     <iframe width="578" height="325" src="https://www.youtube.com/embed/23kpRBxFuNM?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen style="height: 325px"></iframe>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="carousel-dots">*/
/*                         <span class="dot active"></span>*/
/*                         <span class="dot"></span>*/
/*                         <span class="dot"></span>*/
/*                         <span class="dot"></span>*/
/*                         <span class="dot"></span>*/
/*                         <span class="dot"></span>*/
/*                         <span class="dot"></span>*/
/*                         <span class="dot"></span>*/
/*                         <span class="dot"></span>*/
/*                         <span class="dot"></span>*/
/*                         <span class="dot"></span>*/
/*                         <span class="dot"></span>*/
/*                     </div>*/
/*                     <div class="carousel-nav-wrap">*/
/*                         <span class="prev disabled"><span class="icon-left-arrow"></span></span>*/
/*                         <span class="next"><span class="icon-right-arrow"></span></span>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="red-bg-color"></div>*/
/*             </section>                    */
/*             <section id="degree" class="black-wrap">*/
/*                 <span class="line top"><span></span></span>*/
/*                 <div class="inner-wrapper">*/
/*                     <div class="quote-wrap">*/
/*                         <div class="text-wrap">*/
/*                             <p><span style="font-weight: bold">Master II Marketing, Communication & Stratégies Commerciales, majeure E-commerce</span>*/
/*                                 <br>INSEEC Paris &nbsp; / &nbsp; Septembre 2008 </br>*/
/*                             </p>*/
/* */
/*                             <p><span style="font-weight: bold">Master I Management & Gestion d'entreprise, majeure Marketing / Communication </span>*/
/*                                 <br>Céfire-Esarc &nbsp; / &nbsp; INSEEC Paris &nbsp; / &nbsp; Septembre. 2007 </br>*/
/*                             </p>*/
/* */
/*                             <p><span style="font-weight: bold">DUT Techniques de Commercialisation, majeure Marketing/Communication</span>  */
/*                                 <br>IUT de Rouen &nbsp; / &nbsp;Juin 2004 </br>*/
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="red-bg-color"></div>*/
/*             </section>*/
/*             <section id="tools" class="red-wrap">*/
/*                 <span class="line top"><span></span></span>*/
/*                 <div class="inner-wrapper">*/
/*                     <div class="quote-wrap">*/
/*                         <div class="text-wrap">*/
/*                             <p>It wasn’t just individuals who were partaking in the victim blaming. On the show &ldquo;Fox &amp; Friends&rdquo;, Fox News hosts seemed to make light of the abuse. Host Brian Kilmeade laughed while saying, &ldquo;The message is, take the stairs.&rdquo; His co-host Steve Doocy smiled as he added his two cents: &ldquo;The message is when you’re in an elevator, there’s a camera.&rdquo;</p>*/
/*                             <p><a href="https://www.youtube.com/watch?v=djSkJGJmbKM" target="_blank" class="fboldup noudl">View Video on Youtube <span class="icon-right-arrow"></span></a></p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="red-bg-color"></div>*/
/*             </section>*/
/*             <section id="contact" class="black-wrap">*/
/*                 <span class="line top"><span></span></span>*/
/*                 <div class="inner-wrapper">*/
/*                     <div class="image-wrap right-align">*/
/*                         <div class="caption">*/
/*                             <h3>Janay, who doesn’t have a Twitter account, posted the following message on Instagram:</h3>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </section>*/
/*             <div class="hashtag-footer">*/
/*                 <div class="right">*/
/*                     <h5><a href="#ip" class="top-btn"><span class="icon-right-arrow"></span> <span class="fboldup">Top</span></a></h5>*/
/*                 </div> */
/*             </div>*/
/* */
/*         </div>*/
/*         {% endblock %}*/
