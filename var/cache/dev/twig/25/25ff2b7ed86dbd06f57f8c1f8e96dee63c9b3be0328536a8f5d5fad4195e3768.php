<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_38f96c15819664d74a4744228d879f46ecbf98faafafebe0d96e495179d9756d extends Twig_Template
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
        $__internal_c3ab883d37752b34d79e60207b1c081adcb68d521aa864c1791ea0b445cf171d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3ab883d37752b34d79e60207b1c081adcb68d521aa864c1791ea0b445cf171d->enter($__internal_c3ab883d37752b34d79e60207b1c081adcb68d521aa864c1791ea0b445cf171d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_cf50dec1247241964ccc48af02922c74aee492fa486874d080d52107463ea953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf50dec1247241964ccc48af02922c74aee492fa486874d080d52107463ea953->enter($__internal_cf50dec1247241964ccc48af02922c74aee492fa486874d080d52107463ea953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c3ab883d37752b34d79e60207b1c081adcb68d521aa864c1791ea0b445cf171d->leave($__internal_c3ab883d37752b34d79e60207b1c081adcb68d521aa864c1791ea0b445cf171d_prof);

        
        $__internal_cf50dec1247241964ccc48af02922c74aee492fa486874d080d52107463ea953->leave($__internal_cf50dec1247241964ccc48af02922c74aee492fa486874d080d52107463ea953_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
