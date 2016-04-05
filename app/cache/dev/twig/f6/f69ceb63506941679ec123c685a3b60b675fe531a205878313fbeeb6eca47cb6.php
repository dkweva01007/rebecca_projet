<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_69f917c25226d84e2c7a32bc34ccbe1d9a6f785187d1744237f67bbf21a6cae4 extends Twig_Template
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
        $__internal_80022afac185796798262b0c2ad997015b8a6193431f966ea8ce55bd7609c74e = $this->env->getExtension("native_profiler");
        $__internal_80022afac185796798262b0c2ad997015b8a6193431f966ea8ce55bd7609c74e->enter($__internal_80022afac185796798262b0c2ad997015b8a6193431f966ea8ce55bd7609c74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_80022afac185796798262b0c2ad997015b8a6193431f966ea8ce55bd7609c74e->leave($__internal_80022afac185796798262b0c2ad997015b8a6193431f966ea8ce55bd7609c74e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
