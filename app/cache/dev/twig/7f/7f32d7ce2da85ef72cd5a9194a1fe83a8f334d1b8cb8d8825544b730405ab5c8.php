<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_53e18c8a11d7bb794a55a36ce6f50738179e08abe44f7d755b121b9f34089e93 extends Twig_Template
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
        $__internal_21a6e3cd11abb8ef29d38c2e5042565fddeccf7ed48c5d5bcbb5ff21dfb583f8 = $this->env->getExtension("native_profiler");
        $__internal_21a6e3cd11abb8ef29d38c2e5042565fddeccf7ed48c5d5bcbb5ff21dfb583f8->enter($__internal_21a6e3cd11abb8ef29d38c2e5042565fddeccf7ed48c5d5bcbb5ff21dfb583f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_21a6e3cd11abb8ef29d38c2e5042565fddeccf7ed48c5d5bcbb5ff21dfb583f8->leave($__internal_21a6e3cd11abb8ef29d38c2e5042565fddeccf7ed48c5d5bcbb5ff21dfb583f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
