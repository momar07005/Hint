<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_846847d59d535ab819e48078664df382e03400bb78737d2b3772e17e2c859283 extends Twig_Template
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
        $__internal_91834861f88617554f08867decfc315f6312477d8d952a617a0fb9c9ff2006a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91834861f88617554f08867decfc315f6312477d8d952a617a0fb9c9ff2006a5->enter($__internal_91834861f88617554f08867decfc315f6312477d8d952a617a0fb9c9ff2006a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_f81b1a222b7bb309d2f94f666c52a17ccdc2dfca4e337c8fba3048b2778e7b28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81b1a222b7bb309d2f94f666c52a17ccdc2dfca4e337c8fba3048b2778e7b28->enter($__internal_f81b1a222b7bb309d2f94f666c52a17ccdc2dfca4e337c8fba3048b2778e7b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_91834861f88617554f08867decfc315f6312477d8d952a617a0fb9c9ff2006a5->leave($__internal_91834861f88617554f08867decfc315f6312477d8d952a617a0fb9c9ff2006a5_prof);

        
        $__internal_f81b1a222b7bb309d2f94f666c52a17ccdc2dfca4e337c8fba3048b2778e7b28->leave($__internal_f81b1a222b7bb309d2f94f666c52a17ccdc2dfca4e337c8fba3048b2778e7b28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
