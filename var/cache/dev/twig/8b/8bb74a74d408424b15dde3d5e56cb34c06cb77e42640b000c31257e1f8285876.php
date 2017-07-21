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
        $__internal_d56c4884589ca335b14ee5c90751286376faf69bfcceb0a49ce03e913f5f9aa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d56c4884589ca335b14ee5c90751286376faf69bfcceb0a49ce03e913f5f9aa4->enter($__internal_d56c4884589ca335b14ee5c90751286376faf69bfcceb0a49ce03e913f5f9aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_8553fbd9394207e36564002b39995301088cf4438d8a546cc25400daab26b0e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8553fbd9394207e36564002b39995301088cf4438d8a546cc25400daab26b0e1->enter($__internal_8553fbd9394207e36564002b39995301088cf4438d8a546cc25400daab26b0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_d56c4884589ca335b14ee5c90751286376faf69bfcceb0a49ce03e913f5f9aa4->leave($__internal_d56c4884589ca335b14ee5c90751286376faf69bfcceb0a49ce03e913f5f9aa4_prof);

        
        $__internal_8553fbd9394207e36564002b39995301088cf4438d8a546cc25400daab26b0e1->leave($__internal_8553fbd9394207e36564002b39995301088cf4438d8a546cc25400daab26b0e1_prof);

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
