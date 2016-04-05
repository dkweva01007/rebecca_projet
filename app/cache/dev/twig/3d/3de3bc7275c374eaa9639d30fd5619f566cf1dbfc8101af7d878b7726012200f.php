<?php

/* @CoreSphereConsole/Console/htmlTemplates.html.twig */
class __TwigTemplate_d320454eb19b8425030f87f9fa99c60633dc3fef1d6bc36cb9e32232a8805ed3 extends Twig_Template
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
        $__internal_86c8bd9586be331deae66c1d7c0da688b7b4d94d5b5483593a6dd254b4da18dd = $this->env->getExtension("native_profiler");
        $__internal_86c8bd9586be331deae66c1d7c0da688b7b4d94d5b5483593a6dd254b4da18dd->enter($__internal_86c8bd9586be331deae66c1d7c0da688b7b4d94d5b5483593a6dd254b4da18dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/Console/htmlTemplates.html.twig"));

        // line 1
        echo "<script type=\"text/html\" id=\"template_console_command\">
    <li>
        <div class=\"console_log_input console_%status%\">%command%%environment%</div>
        <div class=\"console_log_output\">%output%</div>
    </li>
</script>

<script type=\"text/html\" id=\"template_console_environment\">
    <span class=\"console_env_info\">%label%: <strong>%environment%</strong></span>
</script>

<script type=\"text/html\" id=\"template_console_error\">
    <li class=\"console_error\">
        <div class=\"console_log_input\">%command%</div>
        <div class=\"console_log_output\">[%message%] %error%</div>
    </li>
</script>

<script type=\"text/html\" id=\"template_console_loading\">
    <li class=\"console_loading\">
        <div class=\"console_log_input\">%command%</div>
        <div class=\"console_log_output\">%message%</div>
    </li>
</script>

<script type=\"text/html\" id=\"template_suggestion_list\">
    <h2 class=\"console_suggestion_head\">%head%</h2>
    <ul>%suggestions%</ul>
</script>

<script type=\"text/html\" id=\"template_console_highlight\">
    <strong class=\"match\">%word%</strong>
</script>

<script type=\"text/html\" id=\"suggestion_item_active\">
    <li class=\"%state%\">%suggestion%</li>
</script>

<script type=\"text/html\" id=\"suggestion_item\">
    <li>%suggestion%</li>
</script>
";
        
        $__internal_86c8bd9586be331deae66c1d7c0da688b7b4d94d5b5483593a6dd254b4da18dd->leave($__internal_86c8bd9586be331deae66c1d7c0da688b7b4d94d5b5483593a6dd254b4da18dd_prof);

    }

    public function getTemplateName()
    {
        return "@CoreSphereConsole/Console/htmlTemplates.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <script type="text/html" id="template_console_command">*/
/*     <li>*/
/*         <div class="console_log_input console_%status%">%command%%environment%</div>*/
/*         <div class="console_log_output">%output%</div>*/
/*     </li>*/
/* </script>*/
/* */
/* <script type="text/html" id="template_console_environment">*/
/*     <span class="console_env_info">%label%: <strong>%environment%</strong></span>*/
/* </script>*/
/* */
/* <script type="text/html" id="template_console_error">*/
/*     <li class="console_error">*/
/*         <div class="console_log_input">%command%</div>*/
/*         <div class="console_log_output">[%message%] %error%</div>*/
/*     </li>*/
/* </script>*/
/* */
/* <script type="text/html" id="template_console_loading">*/
/*     <li class="console_loading">*/
/*         <div class="console_log_input">%command%</div>*/
/*         <div class="console_log_output">%message%</div>*/
/*     </li>*/
/* </script>*/
/* */
/* <script type="text/html" id="template_suggestion_list">*/
/*     <h2 class="console_suggestion_head">%head%</h2>*/
/*     <ul>%suggestions%</ul>*/
/* </script>*/
/* */
/* <script type="text/html" id="template_console_highlight">*/
/*     <strong class="match">%word%</strong>*/
/* </script>*/
/* */
/* <script type="text/html" id="suggestion_item_active">*/
/*     <li class="%state%">%suggestion%</li>*/
/* </script>*/
/* */
/* <script type="text/html" id="suggestion_item">*/
/*     <li>%suggestion%</li>*/
/* </script>*/
/* */
