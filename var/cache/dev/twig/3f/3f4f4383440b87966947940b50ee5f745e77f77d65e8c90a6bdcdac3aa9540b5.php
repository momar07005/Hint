<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_989c83de36f18a95870d39b60b5baabcebeef6da491026b3db53117dad33b771 extends Twig_Template
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
        $__internal_1b8206b13968216b7dfff4baa5b98fbcd96c99534016a8e08ae45c2105cec6f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b8206b13968216b7dfff4baa5b98fbcd96c99534016a8e08ae45c2105cec6f7->enter($__internal_1b8206b13968216b7dfff4baa5b98fbcd96c99534016a8e08ae45c2105cec6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_c69736d6cc75c87b1ba6e8f9e2123d088b8a34bb6b71942ade123f1bab4138f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c69736d6cc75c87b1ba6e8f9e2123d088b8a34bb6b71942ade123f1bab4138f1->enter($__internal_c69736d6cc75c87b1ba6e8f9e2123d088b8a34bb6b71942ade123f1bab4138f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_1b8206b13968216b7dfff4baa5b98fbcd96c99534016a8e08ae45c2105cec6f7->leave($__internal_1b8206b13968216b7dfff4baa5b98fbcd96c99534016a8e08ae45c2105cec6f7_prof);

        
        $__internal_c69736d6cc75c87b1ba6e8f9e2123d088b8a34bb6b71942ade123f1bab4138f1->leave($__internal_c69736d6cc75c87b1ba6e8f9e2123d088b8a34bb6b71942ade123f1bab4138f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
