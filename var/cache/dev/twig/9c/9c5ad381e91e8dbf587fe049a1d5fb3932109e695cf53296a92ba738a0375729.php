<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_cee88366ee8a37e50698f5f33334e5876a30ba52bf82ec6a1265f94bd0374298 extends Twig_Template
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
        $__internal_2f1ada4328fb16c07ada2533d9bd65ca858888f17038f0891520f2fe446c4073 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f1ada4328fb16c07ada2533d9bd65ca858888f17038f0891520f2fe446c4073->enter($__internal_2f1ada4328fb16c07ada2533d9bd65ca858888f17038f0891520f2fe446c4073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_5e2779aeacb16a359eccc129603f75f213c5e9775362dfd2ca9da59569c9dfe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e2779aeacb16a359eccc129603f75f213c5e9775362dfd2ca9da59569c9dfe1->enter($__internal_5e2779aeacb16a359eccc129603f75f213c5e9775362dfd2ca9da59569c9dfe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_2f1ada4328fb16c07ada2533d9bd65ca858888f17038f0891520f2fe446c4073->leave($__internal_2f1ada4328fb16c07ada2533d9bd65ca858888f17038f0891520f2fe446c4073_prof);

        
        $__internal_5e2779aeacb16a359eccc129603f75f213c5e9775362dfd2ca9da59569c9dfe1->leave($__internal_5e2779aeacb16a359eccc129603f75f213c5e9775362dfd2ca9da59569c9dfe1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
