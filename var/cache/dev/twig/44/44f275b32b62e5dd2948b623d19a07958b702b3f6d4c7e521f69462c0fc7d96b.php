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
        $__internal_451ab37da59da3b2425cd50f372390a92ee9979ae9c83e1b1f3ca9b9ff2379d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_451ab37da59da3b2425cd50f372390a92ee9979ae9c83e1b1f3ca9b9ff2379d7->enter($__internal_451ab37da59da3b2425cd50f372390a92ee9979ae9c83e1b1f3ca9b9ff2379d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_ee8070783509abcb9706a26003808377cc3492b24a8c85700466dcf4ef424238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee8070783509abcb9706a26003808377cc3492b24a8c85700466dcf4ef424238->enter($__internal_ee8070783509abcb9706a26003808377cc3492b24a8c85700466dcf4ef424238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_451ab37da59da3b2425cd50f372390a92ee9979ae9c83e1b1f3ca9b9ff2379d7->leave($__internal_451ab37da59da3b2425cd50f372390a92ee9979ae9c83e1b1f3ca9b9ff2379d7_prof);

        
        $__internal_ee8070783509abcb9706a26003808377cc3492b24a8c85700466dcf4ef424238->leave($__internal_ee8070783509abcb9706a26003808377cc3492b24a8c85700466dcf4ef424238_prof);

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
