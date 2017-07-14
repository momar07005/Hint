<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_efa90cddc677422ab583451a76c2a841beac047a6adc3bd3526b9bff22c0681f extends Twig_Template
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
        $__internal_361666daa5bc0c159a12118ca6b67abfaf34295165a2a73e59cd957ed457f8be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_361666daa5bc0c159a12118ca6b67abfaf34295165a2a73e59cd957ed457f8be->enter($__internal_361666daa5bc0c159a12118ca6b67abfaf34295165a2a73e59cd957ed457f8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_6b6c0a1e748288fd5a0a7902c234290556481666dbb3c6f3c7aa2cba211a625a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b6c0a1e748288fd5a0a7902c234290556481666dbb3c6f3c7aa2cba211a625a->enter($__internal_6b6c0a1e748288fd5a0a7902c234290556481666dbb3c6f3c7aa2cba211a625a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_361666daa5bc0c159a12118ca6b67abfaf34295165a2a73e59cd957ed457f8be->leave($__internal_361666daa5bc0c159a12118ca6b67abfaf34295165a2a73e59cd957ed457f8be_prof);

        
        $__internal_6b6c0a1e748288fd5a0a7902c234290556481666dbb3c6f3c7aa2cba211a625a->leave($__internal_6b6c0a1e748288fd5a0a7902c234290556481666dbb3c6f3c7aa2cba211a625a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
