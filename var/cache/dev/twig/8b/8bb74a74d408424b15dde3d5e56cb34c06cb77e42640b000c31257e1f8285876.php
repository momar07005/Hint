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
        $__internal_fa8847cbb1265cc3be12d5004e1bfcd569fd9ee0ae889b486217b7ae958dc066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa8847cbb1265cc3be12d5004e1bfcd569fd9ee0ae889b486217b7ae958dc066->enter($__internal_fa8847cbb1265cc3be12d5004e1bfcd569fd9ee0ae889b486217b7ae958dc066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_62d99c4e2b33f0fc0c0b13f290711f5e36adbb2edca4c2a0ffdb4bbb7be84b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62d99c4e2b33f0fc0c0b13f290711f5e36adbb2edca4c2a0ffdb4bbb7be84b24->enter($__internal_62d99c4e2b33f0fc0c0b13f290711f5e36adbb2edca4c2a0ffdb4bbb7be84b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_fa8847cbb1265cc3be12d5004e1bfcd569fd9ee0ae889b486217b7ae958dc066->leave($__internal_fa8847cbb1265cc3be12d5004e1bfcd569fd9ee0ae889b486217b7ae958dc066_prof);

        
        $__internal_62d99c4e2b33f0fc0c0b13f290711f5e36adbb2edca4c2a0ffdb4bbb7be84b24->leave($__internal_62d99c4e2b33f0fc0c0b13f290711f5e36adbb2edca4c2a0ffdb4bbb7be84b24_prof);

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
