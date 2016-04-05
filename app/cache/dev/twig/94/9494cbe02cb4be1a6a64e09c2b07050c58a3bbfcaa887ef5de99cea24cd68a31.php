<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_e0074fb395aa5dbfad4d154cec1def316a17ee75e63dbd0101a6f504e39079e8 extends Twig_Template
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
        $__internal_79fb4af28596459ba844cac107fde1300e5a6110e9076c315cb1dc95a919b383 = $this->env->getExtension("native_profiler");
        $__internal_79fb4af28596459ba844cac107fde1300e5a6110e9076c315cb1dc95a919b383->enter($__internal_79fb4af28596459ba844cac107fde1300e5a6110e9076c315cb1dc95a919b383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_79fb4af28596459ba844cac107fde1300e5a6110e9076c315cb1dc95a919b383->leave($__internal_79fb4af28596459ba844cac107fde1300e5a6110e9076c315cb1dc95a919b383_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
