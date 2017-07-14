<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_096e93296d33f4f5464d91f7f7376a5f4b14a81c16dec3c607726b330d2e5a00 extends Twig_Template
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
        $__internal_a4b9fe4d3512c59bd913027ed01de7ae2d4941842825897e3f40efc2bdb523c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4b9fe4d3512c59bd913027ed01de7ae2d4941842825897e3f40efc2bdb523c1->enter($__internal_a4b9fe4d3512c59bd913027ed01de7ae2d4941842825897e3f40efc2bdb523c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_b971cadf5097695db841cdaca246a0d0b7ae52d053d001ee98e91f0ece711db1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b971cadf5097695db841cdaca246a0d0b7ae52d053d001ee98e91f0ece711db1->enter($__internal_b971cadf5097695db841cdaca246a0d0b7ae52d053d001ee98e91f0ece711db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a4b9fe4d3512c59bd913027ed01de7ae2d4941842825897e3f40efc2bdb523c1->leave($__internal_a4b9fe4d3512c59bd913027ed01de7ae2d4941842825897e3f40efc2bdb523c1_prof);

        
        $__internal_b971cadf5097695db841cdaca246a0d0b7ae52d053d001ee98e91f0ece711db1->leave($__internal_b971cadf5097695db841cdaca246a0d0b7ae52d053d001ee98e91f0ece711db1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
