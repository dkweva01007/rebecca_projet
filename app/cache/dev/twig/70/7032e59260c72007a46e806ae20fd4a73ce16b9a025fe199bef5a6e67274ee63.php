<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_56858520a6a6773606803b89e8cea05d732031fd6e7751e9ba30f38d723b2a28 extends Twig_Template
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
        $__internal_65723c54b94b21eda2314c8609f8327c4383820491d1a8d41a8d920ffe19303e = $this->env->getExtension("native_profiler");
        $__internal_65723c54b94b21eda2314c8609f8327c4383820491d1a8d41a8d920ffe19303e->enter($__internal_65723c54b94b21eda2314c8609f8327c4383820491d1a8d41a8d920ffe19303e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_65723c54b94b21eda2314c8609f8327c4383820491d1a8d41a8d920ffe19303e->leave($__internal_65723c54b94b21eda2314c8609f8327c4383820491d1a8d41a8d920ffe19303e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
