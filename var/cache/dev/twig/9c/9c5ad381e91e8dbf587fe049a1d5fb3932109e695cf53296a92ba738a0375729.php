<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_cee88366ee8a37e50698f5f33334e5876a30ba52bf82ec6a1265f94bd0374298 extends Twig_Template
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
        $__internal_8d974ecfcac405c25ce89b66f26ab6288c3df9eacc2ec463387ed840e8be104d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d974ecfcac405c25ce89b66f26ab6288c3df9eacc2ec463387ed840e8be104d->enter($__internal_8d974ecfcac405c25ce89b66f26ab6288c3df9eacc2ec463387ed840e8be104d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_5432391937968b15d6f5d7edee687fbddfe05bb64881f08c228adf127b93dfa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5432391937968b15d6f5d7edee687fbddfe05bb64881f08c228adf127b93dfa0->enter($__internal_5432391937968b15d6f5d7edee687fbddfe05bb64881f08c228adf127b93dfa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_8d974ecfcac405c25ce89b66f26ab6288c3df9eacc2ec463387ed840e8be104d->leave($__internal_8d974ecfcac405c25ce89b66f26ab6288c3df9eacc2ec463387ed840e8be104d_prof);

        
        $__internal_5432391937968b15d6f5d7edee687fbddfe05bb64881f08c228adf127b93dfa0->leave($__internal_5432391937968b15d6f5d7edee687fbddfe05bb64881f08c228adf127b93dfa0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
