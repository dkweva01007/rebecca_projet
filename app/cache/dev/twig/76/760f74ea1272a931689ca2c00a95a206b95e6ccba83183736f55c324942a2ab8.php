<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_5fa1f756823692a593c3d86e71d8c721274c6807621e3e1342a9b53086911de1 extends Twig_Template
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
        $__internal_ded19a9852a8bc8d36e930aa1c8267a2a73b0455eb30ad0acdd4a42b835135d0 = $this->env->getExtension("native_profiler");
        $__internal_ded19a9852a8bc8d36e930aa1c8267a2a73b0455eb30ad0acdd4a42b835135d0->enter($__internal_ded19a9852a8bc8d36e930aa1c8267a2a73b0455eb30ad0acdd4a42b835135d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_ded19a9852a8bc8d36e930aa1c8267a2a73b0455eb30ad0acdd4a42b835135d0->leave($__internal_ded19a9852a8bc8d36e930aa1c8267a2a73b0455eb30ad0acdd4a42b835135d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
