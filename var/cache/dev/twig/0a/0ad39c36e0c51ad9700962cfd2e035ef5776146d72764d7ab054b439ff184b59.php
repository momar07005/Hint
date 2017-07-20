<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_cae6b3cea0fece49c96461d6ecde8522e12a7df157a879a4ce97607fc348194f extends Twig_Template
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
        $__internal_dd43536375d6d9c5bfdcf2876cf23c51cc56fa56ff5e5dbb7c7657dff199de83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd43536375d6d9c5bfdcf2876cf23c51cc56fa56ff5e5dbb7c7657dff199de83->enter($__internal_dd43536375d6d9c5bfdcf2876cf23c51cc56fa56ff5e5dbb7c7657dff199de83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_95cf294b8bd85ca03191a5ed15d41bb687c618d7f4727e36962d7ddb2b59202d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95cf294b8bd85ca03191a5ed15d41bb687c618d7f4727e36962d7ddb2b59202d->enter($__internal_95cf294b8bd85ca03191a5ed15d41bb687c618d7f4727e36962d7ddb2b59202d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_dd43536375d6d9c5bfdcf2876cf23c51cc56fa56ff5e5dbb7c7657dff199de83->leave($__internal_dd43536375d6d9c5bfdcf2876cf23c51cc56fa56ff5e5dbb7c7657dff199de83_prof);

        
        $__internal_95cf294b8bd85ca03191a5ed15d41bb687c618d7f4727e36962d7ddb2b59202d->leave($__internal_95cf294b8bd85ca03191a5ed15d41bb687c618d7f4727e36962d7ddb2b59202d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
