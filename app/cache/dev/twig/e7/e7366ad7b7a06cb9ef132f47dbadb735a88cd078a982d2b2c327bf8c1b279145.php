<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_3993973fc755e7dd729887abeacd239258741fded50d722172a98ce2a523351c extends Twig_Template
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
        $__internal_789e01c1ed3e8477c73ae62144b1bf2649bf3b0cff876b4e9878b7a254e93604 = $this->env->getExtension("native_profiler");
        $__internal_789e01c1ed3e8477c73ae62144b1bf2649bf3b0cff876b4e9878b7a254e93604->enter($__internal_789e01c1ed3e8477c73ae62144b1bf2649bf3b0cff876b4e9878b7a254e93604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_789e01c1ed3e8477c73ae62144b1bf2649bf3b0cff876b4e9878b7a254e93604->leave($__internal_789e01c1ed3e8477c73ae62144b1bf2649bf3b0cff876b4e9878b7a254e93604_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
