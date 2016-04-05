<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_8cdf9f9cc668a8fbba2cd20e796547fde225113c87d8598cf437ebaa1242716f extends Twig_Template
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
        $__internal_3137519389143ed0adca66ec0fc6b900d8af6ecf2310b94ee3bb721fe63271c9 = $this->env->getExtension("native_profiler");
        $__internal_3137519389143ed0adca66ec0fc6b900d8af6ecf2310b94ee3bb721fe63271c9->enter($__internal_3137519389143ed0adca66ec0fc6b900d8af6ecf2310b94ee3bb721fe63271c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3137519389143ed0adca66ec0fc6b900d8af6ecf2310b94ee3bb721fe63271c9->leave($__internal_3137519389143ed0adca66ec0fc6b900d8af6ecf2310b94ee3bb721fe63271c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
