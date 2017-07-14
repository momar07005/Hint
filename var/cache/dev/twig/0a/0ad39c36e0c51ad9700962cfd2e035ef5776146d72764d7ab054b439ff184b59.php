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
        $__internal_bf03c626297455800e34f8884495d7c881609e035fc4caac5528d4f517d3d469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf03c626297455800e34f8884495d7c881609e035fc4caac5528d4f517d3d469->enter($__internal_bf03c626297455800e34f8884495d7c881609e035fc4caac5528d4f517d3d469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_1f0da1ef14f3d854697b6b66511639ba5dc06c0df7eff6970c3717928507e111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f0da1ef14f3d854697b6b66511639ba5dc06c0df7eff6970c3717928507e111->enter($__internal_1f0da1ef14f3d854697b6b66511639ba5dc06c0df7eff6970c3717928507e111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_bf03c626297455800e34f8884495d7c881609e035fc4caac5528d4f517d3d469->leave($__internal_bf03c626297455800e34f8884495d7c881609e035fc4caac5528d4f517d3d469_prof);

        
        $__internal_1f0da1ef14f3d854697b6b66511639ba5dc06c0df7eff6970c3717928507e111->leave($__internal_1f0da1ef14f3d854697b6b66511639ba5dc06c0df7eff6970c3717928507e111_prof);

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
