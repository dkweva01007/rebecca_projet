<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_98131e6f05052ca36b78c9c9de5153cb5e7f96cdbd46dd4ec26174bc9d04fdfe extends Twig_Template
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
        $__internal_7577a749a790cc3b4f6d1da91d71abd89a0df97bd500694ab0c38edaaffa0854 = $this->env->getExtension("native_profiler");
        $__internal_7577a749a790cc3b4f6d1da91d71abd89a0df97bd500694ab0c38edaaffa0854->enter($__internal_7577a749a790cc3b4f6d1da91d71abd89a0df97bd500694ab0c38edaaffa0854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_7577a749a790cc3b4f6d1da91d71abd89a0df97bd500694ab0c38edaaffa0854->leave($__internal_7577a749a790cc3b4f6d1da91d71abd89a0df97bd500694ab0c38edaaffa0854_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
