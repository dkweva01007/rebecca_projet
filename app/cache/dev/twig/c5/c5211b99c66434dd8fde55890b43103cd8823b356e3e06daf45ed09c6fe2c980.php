<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_b8f087e50213aa1dfc57ca01df4f74895a814d91110e32661029d04959b5f861 extends Twig_Template
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
        $__internal_e7af661164e1ffced8254004561a66f7b37f4aa80163e99920c256de731b9090 = $this->env->getExtension("native_profiler");
        $__internal_e7af661164e1ffced8254004561a66f7b37f4aa80163e99920c256de731b9090->enter($__internal_e7af661164e1ffced8254004561a66f7b37f4aa80163e99920c256de731b9090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e7af661164e1ffced8254004561a66f7b37f4aa80163e99920c256de731b9090->leave($__internal_e7af661164e1ffced8254004561a66f7b37f4aa80163e99920c256de731b9090_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
