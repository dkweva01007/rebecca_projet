<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_322cc0edc4b2fa46c924767aa9d662abb8ea3710d1442967f10f6e7f0f5d3a7a extends Twig_Template
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
        $__internal_657aa0bff8b90bd1ac8146c6b1be8c0bbaeba8592b8d2aab47ae73b57f1b3e23 = $this->env->getExtension("native_profiler");
        $__internal_657aa0bff8b90bd1ac8146c6b1be8c0bbaeba8592b8d2aab47ae73b57f1b3e23->enter($__internal_657aa0bff8b90bd1ac8146c6b1be8c0bbaeba8592b8d2aab47ae73b57f1b3e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_657aa0bff8b90bd1ac8146c6b1be8c0bbaeba8592b8d2aab47ae73b57f1b3e23->leave($__internal_657aa0bff8b90bd1ac8146c6b1be8c0bbaeba8592b8d2aab47ae73b57f1b3e23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
