<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_6ad32925c4d7a3a28fcaa6b2d4aef546cbeb5eca804633808fd877f9517b4635 extends Twig_Template
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
        $__internal_29cc4b17306a5fd0a6e0ea9adddddc39aa1319ddd0876a608fe9593667c61c9c = $this->env->getExtension("native_profiler");
        $__internal_29cc4b17306a5fd0a6e0ea9adddddc39aa1319ddd0876a608fe9593667c61c9c->enter($__internal_29cc4b17306a5fd0a6e0ea9adddddc39aa1319ddd0876a608fe9593667c61c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_29cc4b17306a5fd0a6e0ea9adddddc39aa1319ddd0876a608fe9593667c61c9c->leave($__internal_29cc4b17306a5fd0a6e0ea9adddddc39aa1319ddd0876a608fe9593667c61c9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
