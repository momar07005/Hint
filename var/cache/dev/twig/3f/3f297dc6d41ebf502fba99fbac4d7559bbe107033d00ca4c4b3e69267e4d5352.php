<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_1a4b7feef3c1e349b9d1a1224be217b024253faaecd98f29d23bd75a6928cce8 extends Twig_Template
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
        $__internal_7850c276e4afcd7914f7fbf27563326bde8eb80bcbcd9564407b3a67128e7db8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7850c276e4afcd7914f7fbf27563326bde8eb80bcbcd9564407b3a67128e7db8->enter($__internal_7850c276e4afcd7914f7fbf27563326bde8eb80bcbcd9564407b3a67128e7db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_44e3157b12a2e720cd6effa99f6449d910918e02708153a3d474fda04f9b3b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e3157b12a2e720cd6effa99f6449d910918e02708153a3d474fda04f9b3b05->enter($__internal_44e3157b12a2e720cd6effa99f6449d910918e02708153a3d474fda04f9b3b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_7850c276e4afcd7914f7fbf27563326bde8eb80bcbcd9564407b3a67128e7db8->leave($__internal_7850c276e4afcd7914f7fbf27563326bde8eb80bcbcd9564407b3a67128e7db8_prof);

        
        $__internal_44e3157b12a2e720cd6effa99f6449d910918e02708153a3d474fda04f9b3b05->leave($__internal_44e3157b12a2e720cd6effa99f6449d910918e02708153a3d474fda04f9b3b05_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
