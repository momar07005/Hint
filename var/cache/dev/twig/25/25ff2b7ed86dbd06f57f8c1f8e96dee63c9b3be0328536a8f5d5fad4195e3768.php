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
        $__internal_563bc67ea7def01dd830362e7e2be365476e68816394bdf1ae63721248a1d637 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_563bc67ea7def01dd830362e7e2be365476e68816394bdf1ae63721248a1d637->enter($__internal_563bc67ea7def01dd830362e7e2be365476e68816394bdf1ae63721248a1d637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_9539bc57b0a12d3bca27ec61cea0633dde5d42a2c351d875377ee4375eaf8ebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9539bc57b0a12d3bca27ec61cea0633dde5d42a2c351d875377ee4375eaf8ebe->enter($__internal_9539bc57b0a12d3bca27ec61cea0633dde5d42a2c351d875377ee4375eaf8ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_563bc67ea7def01dd830362e7e2be365476e68816394bdf1ae63721248a1d637->leave($__internal_563bc67ea7def01dd830362e7e2be365476e68816394bdf1ae63721248a1d637_prof);

        
        $__internal_9539bc57b0a12d3bca27ec61cea0633dde5d42a2c351d875377ee4375eaf8ebe->leave($__internal_9539bc57b0a12d3bca27ec61cea0633dde5d42a2c351d875377ee4375eaf8ebe_prof);

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
