<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_34facbadc9d129c595e110e89637c8ad84b319efab6723d849ac3c77434ff6e3 extends Twig_Template
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
        $__internal_ba7cfbfff46477d46d7f0ffe2240a4d63656f52983f96825215183db13a3b85a = $this->env->getExtension("native_profiler");
        $__internal_ba7cfbfff46477d46d7f0ffe2240a4d63656f52983f96825215183db13a3b85a->enter($__internal_ba7cfbfff46477d46d7f0ffe2240a4d63656f52983f96825215183db13a3b85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ba7cfbfff46477d46d7f0ffe2240a4d63656f52983f96825215183db13a3b85a->leave($__internal_ba7cfbfff46477d46d7f0ffe2240a4d63656f52983f96825215183db13a3b85a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
