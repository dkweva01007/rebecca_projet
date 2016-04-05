<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_650e3eabc2e40ad492d0951a2b15a380bf50322e063800d924f1afba4fa6dd59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ab5a7e9d15f4278569eb035ceafb7be1ad034cb5112c3f23c209cb6898ca319 = $this->env->getExtension("native_profiler");
        $__internal_4ab5a7e9d15f4278569eb035ceafb7be1ad034cb5112c3f23c209cb6898ca319->enter($__internal_4ab5a7e9d15f4278569eb035ceafb7be1ad034cb5112c3f23c209cb6898ca319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_4ab5a7e9d15f4278569eb035ceafb7be1ad034cb5112c3f23c209cb6898ca319->leave($__internal_4ab5a7e9d15f4278569eb035ceafb7be1ad034cb5112c3f23c209cb6898ca319_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
