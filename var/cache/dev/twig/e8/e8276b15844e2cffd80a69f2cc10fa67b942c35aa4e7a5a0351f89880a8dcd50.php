<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_da1e8ef377c1f6eb2fafdb4ed5e75569401d9a366ed3f6f44d233ebcfbd71b87 extends Twig_Template
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
        $__internal_9d2a4864f0c35620b8e770fc018694cf46b663e71af21164bcb0d088ba902320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d2a4864f0c35620b8e770fc018694cf46b663e71af21164bcb0d088ba902320->enter($__internal_9d2a4864f0c35620b8e770fc018694cf46b663e71af21164bcb0d088ba902320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_85a77a29585d31abcaadf5bc41116bbbf7ec8ca5d136b0b8811478d2c7a56af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85a77a29585d31abcaadf5bc41116bbbf7ec8ca5d136b0b8811478d2c7a56af3->enter($__internal_85a77a29585d31abcaadf5bc41116bbbf7ec8ca5d136b0b8811478d2c7a56af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_9d2a4864f0c35620b8e770fc018694cf46b663e71af21164bcb0d088ba902320->leave($__internal_9d2a4864f0c35620b8e770fc018694cf46b663e71af21164bcb0d088ba902320_prof);

        
        $__internal_85a77a29585d31abcaadf5bc41116bbbf7ec8ca5d136b0b8811478d2c7a56af3->leave($__internal_85a77a29585d31abcaadf5bc41116bbbf7ec8ca5d136b0b8811478d2c7a56af3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
