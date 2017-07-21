<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_e15e5bfac28303e122dffebfb2b36d479c45a2db3b4b9f6c677e91f0681f9f08 extends Twig_Template
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
        $__internal_0f236b8218132f63cb9d56c1d0f7e55ad3d7b29a7dfc0a0ea1a24ed16de2a597 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f236b8218132f63cb9d56c1d0f7e55ad3d7b29a7dfc0a0ea1a24ed16de2a597->enter($__internal_0f236b8218132f63cb9d56c1d0f7e55ad3d7b29a7dfc0a0ea1a24ed16de2a597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_360335cfa65650cbc5044879e6082f2d247cebb8da42d5f7332d02754ab0d348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_360335cfa65650cbc5044879e6082f2d247cebb8da42d5f7332d02754ab0d348->enter($__internal_360335cfa65650cbc5044879e6082f2d247cebb8da42d5f7332d02754ab0d348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_0f236b8218132f63cb9d56c1d0f7e55ad3d7b29a7dfc0a0ea1a24ed16de2a597->leave($__internal_0f236b8218132f63cb9d56c1d0f7e55ad3d7b29a7dfc0a0ea1a24ed16de2a597_prof);

        
        $__internal_360335cfa65650cbc5044879e6082f2d247cebb8da42d5f7332d02754ab0d348->leave($__internal_360335cfa65650cbc5044879e6082f2d247cebb8da42d5f7332d02754ab0d348_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
