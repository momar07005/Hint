<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_82c5777a783fe5d11db384351990f0d8a28981e1830bfa370e13b292f25eacf0 extends Twig_Template
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
        $__internal_07facc38ee086d6f88e8a74f81fe7fd1dd35e5f25332551c7e31effa8667aa64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07facc38ee086d6f88e8a74f81fe7fd1dd35e5f25332551c7e31effa8667aa64->enter($__internal_07facc38ee086d6f88e8a74f81fe7fd1dd35e5f25332551c7e31effa8667aa64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_3e6927e6a74a3c63fda359738bef263ea8ea2a0187b5260323188aabe9de0e2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e6927e6a74a3c63fda359738bef263ea8ea2a0187b5260323188aabe9de0e2c->enter($__internal_3e6927e6a74a3c63fda359738bef263ea8ea2a0187b5260323188aabe9de0e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_07facc38ee086d6f88e8a74f81fe7fd1dd35e5f25332551c7e31effa8667aa64->leave($__internal_07facc38ee086d6f88e8a74f81fe7fd1dd35e5f25332551c7e31effa8667aa64_prof);

        
        $__internal_3e6927e6a74a3c63fda359738bef263ea8ea2a0187b5260323188aabe9de0e2c->leave($__internal_3e6927e6a74a3c63fda359738bef263ea8ea2a0187b5260323188aabe9de0e2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
