<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_83d966b58a806e6fdb170eeeec8b8d622cf7fe5763d053957aa73210bbc45204 extends Twig_Template
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
        $__internal_354b3009833cbc5fd456fcd43576aaf49d3d9548c6e174cec348bdd94aa0f386 = $this->env->getExtension("native_profiler");
        $__internal_354b3009833cbc5fd456fcd43576aaf49d3d9548c6e174cec348bdd94aa0f386->enter($__internal_354b3009833cbc5fd456fcd43576aaf49d3d9548c6e174cec348bdd94aa0f386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_354b3009833cbc5fd456fcd43576aaf49d3d9548c6e174cec348bdd94aa0f386->leave($__internal_354b3009833cbc5fd456fcd43576aaf49d3d9548c6e174cec348bdd94aa0f386_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
