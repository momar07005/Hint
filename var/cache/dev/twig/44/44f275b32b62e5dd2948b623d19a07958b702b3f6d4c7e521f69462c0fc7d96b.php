<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_9ba3267489c239cf88e565a89449748101f78f0437ac0e0da96cab2eacf1894f extends Twig_Template
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
        $__internal_76074cea8a8f93e687ea8de11f8e76b27e30a97bfb5ee90630497e90715094be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76074cea8a8f93e687ea8de11f8e76b27e30a97bfb5ee90630497e90715094be->enter($__internal_76074cea8a8f93e687ea8de11f8e76b27e30a97bfb5ee90630497e90715094be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_fd222b8462ec8a128a6a84dd104c5e91f4c1f9b24fd78b50363a559e73e993b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd222b8462ec8a128a6a84dd104c5e91f4c1f9b24fd78b50363a559e73e993b5->enter($__internal_fd222b8462ec8a128a6a84dd104c5e91f4c1f9b24fd78b50363a559e73e993b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_76074cea8a8f93e687ea8de11f8e76b27e30a97bfb5ee90630497e90715094be->leave($__internal_76074cea8a8f93e687ea8de11f8e76b27e30a97bfb5ee90630497e90715094be_prof);

        
        $__internal_fd222b8462ec8a128a6a84dd104c5e91f4c1f9b24fd78b50363a559e73e993b5->leave($__internal_fd222b8462ec8a128a6a84dd104c5e91f4c1f9b24fd78b50363a559e73e993b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
