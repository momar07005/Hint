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
        $__internal_1d1d10d3130db55570b3deea3d8809ef4c0a1b4dc5be1f8d517d65204339309c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d1d10d3130db55570b3deea3d8809ef4c0a1b4dc5be1f8d517d65204339309c->enter($__internal_1d1d10d3130db55570b3deea3d8809ef4c0a1b4dc5be1f8d517d65204339309c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_8e33f676c3be68ff56ba1c5f1807978385345c46a8ddb52d4672c479960b7553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e33f676c3be68ff56ba1c5f1807978385345c46a8ddb52d4672c479960b7553->enter($__internal_8e33f676c3be68ff56ba1c5f1807978385345c46a8ddb52d4672c479960b7553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_1d1d10d3130db55570b3deea3d8809ef4c0a1b4dc5be1f8d517d65204339309c->leave($__internal_1d1d10d3130db55570b3deea3d8809ef4c0a1b4dc5be1f8d517d65204339309c_prof);

        
        $__internal_8e33f676c3be68ff56ba1c5f1807978385345c46a8ddb52d4672c479960b7553->leave($__internal_8e33f676c3be68ff56ba1c5f1807978385345c46a8ddb52d4672c479960b7553_prof);

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
