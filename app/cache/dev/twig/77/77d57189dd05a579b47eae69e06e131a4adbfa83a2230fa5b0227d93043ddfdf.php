<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_9d794f7ec25e6b072b6ed81736a200dc849d34c3e12f88f431938e951ad298e5 extends Twig_Template
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
        $__internal_7e043964cb667de61538d6f1d71c2db671382a8a653f3ec79f9601b93f63212a = $this->env->getExtension("native_profiler");
        $__internal_7e043964cb667de61538d6f1d71c2db671382a8a653f3ec79f9601b93f63212a->enter($__internal_7e043964cb667de61538d6f1d71c2db671382a8a653f3ec79f9601b93f63212a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7e043964cb667de61538d6f1d71c2db671382a8a653f3ec79f9601b93f63212a->leave($__internal_7e043964cb667de61538d6f1d71c2db671382a8a653f3ec79f9601b93f63212a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
