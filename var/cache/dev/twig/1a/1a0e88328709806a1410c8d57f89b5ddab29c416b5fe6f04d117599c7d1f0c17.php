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
        $__internal_2d9a6c5eeabd255f0f7d7ff4257da837fc4898ad2d973e038e63d88e37868d13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d9a6c5eeabd255f0f7d7ff4257da837fc4898ad2d973e038e63d88e37868d13->enter($__internal_2d9a6c5eeabd255f0f7d7ff4257da837fc4898ad2d973e038e63d88e37868d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_3d6a2dbded5b78209c37f93f29b108e0954d55e7a0870aa74367cf15eadc024e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d6a2dbded5b78209c37f93f29b108e0954d55e7a0870aa74367cf15eadc024e->enter($__internal_3d6a2dbded5b78209c37f93f29b108e0954d55e7a0870aa74367cf15eadc024e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_2d9a6c5eeabd255f0f7d7ff4257da837fc4898ad2d973e038e63d88e37868d13->leave($__internal_2d9a6c5eeabd255f0f7d7ff4257da837fc4898ad2d973e038e63d88e37868d13_prof);

        
        $__internal_3d6a2dbded5b78209c37f93f29b108e0954d55e7a0870aa74367cf15eadc024e->leave($__internal_3d6a2dbded5b78209c37f93f29b108e0954d55e7a0870aa74367cf15eadc024e_prof);

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
