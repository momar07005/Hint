<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_086a2420c7ac5771238f64159d3d67af1145bf3bbce7f6310f84b676a5413701 extends Twig_Template
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
        $__internal_76ad73348b9249cb0e08e232cbaf465e0f08ef96e392730726205edb5f9e36ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76ad73348b9249cb0e08e232cbaf465e0f08ef96e392730726205edb5f9e36ba->enter($__internal_76ad73348b9249cb0e08e232cbaf465e0f08ef96e392730726205edb5f9e36ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_00afc795e70d2f3038ecf2eec41fb5f1c679c805bdb69e09c0f758b5183396d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00afc795e70d2f3038ecf2eec41fb5f1c679c805bdb69e09c0f758b5183396d1->enter($__internal_00afc795e70d2f3038ecf2eec41fb5f1c679c805bdb69e09c0f758b5183396d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_76ad73348b9249cb0e08e232cbaf465e0f08ef96e392730726205edb5f9e36ba->leave($__internal_76ad73348b9249cb0e08e232cbaf465e0f08ef96e392730726205edb5f9e36ba_prof);

        
        $__internal_00afc795e70d2f3038ecf2eec41fb5f1c679c805bdb69e09c0f758b5183396d1->leave($__internal_00afc795e70d2f3038ecf2eec41fb5f1c679c805bdb69e09c0f758b5183396d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
