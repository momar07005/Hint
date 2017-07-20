<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_c20c225d223302d5a59fdae93e75c0afa5fc5b90d38640cda33fe6095cf35757 extends Twig_Template
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
        $__internal_490eed9ebcbe4d0a095a541534486eafcad776db389ae2b19372b5e1506fbaf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_490eed9ebcbe4d0a095a541534486eafcad776db389ae2b19372b5e1506fbaf7->enter($__internal_490eed9ebcbe4d0a095a541534486eafcad776db389ae2b19372b5e1506fbaf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_29b13b88ddda8e5035eed52f768610cfcf28c37c378447b60fd20a1b5d5873a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29b13b88ddda8e5035eed52f768610cfcf28c37c378447b60fd20a1b5d5873a9->enter($__internal_29b13b88ddda8e5035eed52f768610cfcf28c37c378447b60fd20a1b5d5873a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_490eed9ebcbe4d0a095a541534486eafcad776db389ae2b19372b5e1506fbaf7->leave($__internal_490eed9ebcbe4d0a095a541534486eafcad776db389ae2b19372b5e1506fbaf7_prof);

        
        $__internal_29b13b88ddda8e5035eed52f768610cfcf28c37c378447b60fd20a1b5d5873a9->leave($__internal_29b13b88ddda8e5035eed52f768610cfcf28c37c378447b60fd20a1b5d5873a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
