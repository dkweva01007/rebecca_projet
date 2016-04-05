<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b7b82cd21b5b5207b53e8be4e7467a00b1515c611278ca509d4f2a17478bb130 extends Twig_Template
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
        $__internal_56df613c4f1331f6614771893159a40dc24fcb57a3a61a4248fa10cdd737f299 = $this->env->getExtension("native_profiler");
        $__internal_56df613c4f1331f6614771893159a40dc24fcb57a3a61a4248fa10cdd737f299->enter($__internal_56df613c4f1331f6614771893159a40dc24fcb57a3a61a4248fa10cdd737f299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_56df613c4f1331f6614771893159a40dc24fcb57a3a61a4248fa10cdd737f299->leave($__internal_56df613c4f1331f6614771893159a40dc24fcb57a3a61a4248fa10cdd737f299_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
