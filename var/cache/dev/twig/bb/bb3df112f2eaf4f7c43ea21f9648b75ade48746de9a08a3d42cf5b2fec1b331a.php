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
        $__internal_608eababaaabbceee70ca9d3af4d269b957777afd5bd4065506192bf59af32f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_608eababaaabbceee70ca9d3af4d269b957777afd5bd4065506192bf59af32f9->enter($__internal_608eababaaabbceee70ca9d3af4d269b957777afd5bd4065506192bf59af32f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_3ba1ca02372de2ab5b857fbd9b6907e624905dc0d7bf22f46b79f24851aeef0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba1ca02372de2ab5b857fbd9b6907e624905dc0d7bf22f46b79f24851aeef0e->enter($__internal_3ba1ca02372de2ab5b857fbd9b6907e624905dc0d7bf22f46b79f24851aeef0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_608eababaaabbceee70ca9d3af4d269b957777afd5bd4065506192bf59af32f9->leave($__internal_608eababaaabbceee70ca9d3af4d269b957777afd5bd4065506192bf59af32f9_prof);

        
        $__internal_3ba1ca02372de2ab5b857fbd9b6907e624905dc0d7bf22f46b79f24851aeef0e->leave($__internal_3ba1ca02372de2ab5b857fbd9b6907e624905dc0d7bf22f46b79f24851aeef0e_prof);

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
