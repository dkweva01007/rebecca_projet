<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_7f04717ae502cea61c5aa28a0d9ba77cd8a735d12035d97be80f472449323401 extends Twig_Template
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
        $__internal_9aa7a577102d8d87518e6eafd0e8da8d8a15ef71bf36135a85ef622d25db804d = $this->env->getExtension("native_profiler");
        $__internal_9aa7a577102d8d87518e6eafd0e8da8d8a15ef71bf36135a85ef622d25db804d->enter($__internal_9aa7a577102d8d87518e6eafd0e8da8d8a15ef71bf36135a85ef622d25db804d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9aa7a577102d8d87518e6eafd0e8da8d8a15ef71bf36135a85ef622d25db804d->leave($__internal_9aa7a577102d8d87518e6eafd0e8da8d8a15ef71bf36135a85ef622d25db804d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
