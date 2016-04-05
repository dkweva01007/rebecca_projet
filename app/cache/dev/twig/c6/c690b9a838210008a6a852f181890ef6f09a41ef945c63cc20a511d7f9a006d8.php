<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_c74ef92ffc32b5592840a600892a7dfb5008f6a6d435a1aa44ca659c8d178f22 extends Twig_Template
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
        $__internal_d6156e58c32e7d6df9dcb74d1b7b1ff75c421031944fb145b7216e82e6f31aa1 = $this->env->getExtension("native_profiler");
        $__internal_d6156e58c32e7d6df9dcb74d1b7b1ff75c421031944fb145b7216e82e6f31aa1->enter($__internal_d6156e58c32e7d6df9dcb74d1b7b1ff75c421031944fb145b7216e82e6f31aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_d6156e58c32e7d6df9dcb74d1b7b1ff75c421031944fb145b7216e82e6f31aa1->leave($__internal_d6156e58c32e7d6df9dcb74d1b7b1ff75c421031944fb145b7216e82e6f31aa1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
