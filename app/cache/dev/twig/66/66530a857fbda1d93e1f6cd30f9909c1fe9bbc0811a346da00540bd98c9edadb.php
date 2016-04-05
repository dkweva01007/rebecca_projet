<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_84f11c49a85382f963f727916691fa561ce9b4a8ce902109f4bc4e079dceeda2 extends Twig_Template
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
        $__internal_09ec76474de91fd36d55ca7ff466608da97b5159871ec64572f30baeb37861e0 = $this->env->getExtension("native_profiler");
        $__internal_09ec76474de91fd36d55ca7ff466608da97b5159871ec64572f30baeb37861e0->enter($__internal_09ec76474de91fd36d55ca7ff466608da97b5159871ec64572f30baeb37861e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_09ec76474de91fd36d55ca7ff466608da97b5159871ec64572f30baeb37861e0->leave($__internal_09ec76474de91fd36d55ca7ff466608da97b5159871ec64572f30baeb37861e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
