<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_055374ecb84c9154481d322f4bfd5564b49fa6fffed01bd3cfe4bb5613123f5c extends Twig_Template
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
        $__internal_9bdb476eae8392674444feb776e6f7388cf7057f07acf63c3414f6d1ef03b931 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bdb476eae8392674444feb776e6f7388cf7057f07acf63c3414f6d1ef03b931->enter($__internal_9bdb476eae8392674444feb776e6f7388cf7057f07acf63c3414f6d1ef03b931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_4074a38ca8caa99463d6a9af72971a108fc8ecf285854334f16049d31437e895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4074a38ca8caa99463d6a9af72971a108fc8ecf285854334f16049d31437e895->enter($__internal_4074a38ca8caa99463d6a9af72971a108fc8ecf285854334f16049d31437e895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_9bdb476eae8392674444feb776e6f7388cf7057f07acf63c3414f6d1ef03b931->leave($__internal_9bdb476eae8392674444feb776e6f7388cf7057f07acf63c3414f6d1ef03b931_prof);

        
        $__internal_4074a38ca8caa99463d6a9af72971a108fc8ecf285854334f16049d31437e895->leave($__internal_4074a38ca8caa99463d6a9af72971a108fc8ecf285854334f16049d31437e895_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
