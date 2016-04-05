<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_73f7d9a4d9a15a709796b2b22eb15e2b7060a12c6bbf25be97d6e8b9d9951ff7 extends Twig_Template
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
        $__internal_e15c8ce266d7ceb2fec6de1d135f418bb7cf20334c084e972ffdcff62735af8f = $this->env->getExtension("native_profiler");
        $__internal_e15c8ce266d7ceb2fec6de1d135f418bb7cf20334c084e972ffdcff62735af8f->enter($__internal_e15c8ce266d7ceb2fec6de1d135f418bb7cf20334c084e972ffdcff62735af8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_e15c8ce266d7ceb2fec6de1d135f418bb7cf20334c084e972ffdcff62735af8f->leave($__internal_e15c8ce266d7ceb2fec6de1d135f418bb7cf20334c084e972ffdcff62735af8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
