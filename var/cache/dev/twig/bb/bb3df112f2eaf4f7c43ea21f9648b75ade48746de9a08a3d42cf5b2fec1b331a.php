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
        $__internal_d6f88770f0916c9d954aaedb9cbfa0397b37f3f2ae45535575051e7690d7c789 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6f88770f0916c9d954aaedb9cbfa0397b37f3f2ae45535575051e7690d7c789->enter($__internal_d6f88770f0916c9d954aaedb9cbfa0397b37f3f2ae45535575051e7690d7c789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_0899845f44680ef48acf45fc15f3eb500ae6f9ed9fa9b18a975662c87f82b07d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0899845f44680ef48acf45fc15f3eb500ae6f9ed9fa9b18a975662c87f82b07d->enter($__internal_0899845f44680ef48acf45fc15f3eb500ae6f9ed9fa9b18a975662c87f82b07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_d6f88770f0916c9d954aaedb9cbfa0397b37f3f2ae45535575051e7690d7c789->leave($__internal_d6f88770f0916c9d954aaedb9cbfa0397b37f3f2ae45535575051e7690d7c789_prof);

        
        $__internal_0899845f44680ef48acf45fc15f3eb500ae6f9ed9fa9b18a975662c87f82b07d->leave($__internal_0899845f44680ef48acf45fc15f3eb500ae6f9ed9fa9b18a975662c87f82b07d_prof);

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
