<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_1c3facb950701f35125fce6d0a55281171f5405da1f90f7e580663065aa0e86b extends Twig_Template
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
        $__internal_15430dfa60b20aca54fa13cf671f257f2f1945719cea1587935e77c1c2a2667c = $this->env->getExtension("native_profiler");
        $__internal_15430dfa60b20aca54fa13cf671f257f2f1945719cea1587935e77c1c2a2667c->enter($__internal_15430dfa60b20aca54fa13cf671f257f2f1945719cea1587935e77c1c2a2667c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_15430dfa60b20aca54fa13cf671f257f2f1945719cea1587935e77c1c2a2667c->leave($__internal_15430dfa60b20aca54fa13cf671f257f2f1945719cea1587935e77c1c2a2667c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
