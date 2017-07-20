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
        $__internal_1d817c8f9732476b98de5f0daf5e7a6c2f9c2132495ac41a7b4a436ba051f95b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d817c8f9732476b98de5f0daf5e7a6c2f9c2132495ac41a7b4a436ba051f95b->enter($__internal_1d817c8f9732476b98de5f0daf5e7a6c2f9c2132495ac41a7b4a436ba051f95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_e8f53b36852f2c2cbe797e3a4f9b5cf282153b49afc25e2d8ec6668031d4ab32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f53b36852f2c2cbe797e3a4f9b5cf282153b49afc25e2d8ec6668031d4ab32->enter($__internal_e8f53b36852f2c2cbe797e3a4f9b5cf282153b49afc25e2d8ec6668031d4ab32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_1d817c8f9732476b98de5f0daf5e7a6c2f9c2132495ac41a7b4a436ba051f95b->leave($__internal_1d817c8f9732476b98de5f0daf5e7a6c2f9c2132495ac41a7b4a436ba051f95b_prof);

        
        $__internal_e8f53b36852f2c2cbe797e3a4f9b5cf282153b49afc25e2d8ec6668031d4ab32->leave($__internal_e8f53b36852f2c2cbe797e3a4f9b5cf282153b49afc25e2d8ec6668031d4ab32_prof);

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
