<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_989c83de36f18a95870d39b60b5baabcebeef6da491026b3db53117dad33b771 extends Twig_Template
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
        $__internal_c30fe7a87f66881c6cf861333f25e40d2e9bcd8fd590b3d0b3c034dbb6f04110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c30fe7a87f66881c6cf861333f25e40d2e9bcd8fd590b3d0b3c034dbb6f04110->enter($__internal_c30fe7a87f66881c6cf861333f25e40d2e9bcd8fd590b3d0b3c034dbb6f04110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_06858189a36afd507bc8ca230b7cdc2576fa33eb546dc4d709714be2029456f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06858189a36afd507bc8ca230b7cdc2576fa33eb546dc4d709714be2029456f5->enter($__internal_06858189a36afd507bc8ca230b7cdc2576fa33eb546dc4d709714be2029456f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_c30fe7a87f66881c6cf861333f25e40d2e9bcd8fd590b3d0b3c034dbb6f04110->leave($__internal_c30fe7a87f66881c6cf861333f25e40d2e9bcd8fd590b3d0b3c034dbb6f04110_prof);

        
        $__internal_06858189a36afd507bc8ca230b7cdc2576fa33eb546dc4d709714be2029456f5->leave($__internal_06858189a36afd507bc8ca230b7cdc2576fa33eb546dc4d709714be2029456f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
