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
        $__internal_a39f298d27e5e9d5b8c88184e372bd76413e38daea7a7a9f4cb04bb77a48ed71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a39f298d27e5e9d5b8c88184e372bd76413e38daea7a7a9f4cb04bb77a48ed71->enter($__internal_a39f298d27e5e9d5b8c88184e372bd76413e38daea7a7a9f4cb04bb77a48ed71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_72c5f5d475f71fadf2ccf9ce1e1234ff88c739c68a8790aea5e664b805677615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72c5f5d475f71fadf2ccf9ce1e1234ff88c739c68a8790aea5e664b805677615->enter($__internal_72c5f5d475f71fadf2ccf9ce1e1234ff88c739c68a8790aea5e664b805677615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a39f298d27e5e9d5b8c88184e372bd76413e38daea7a7a9f4cb04bb77a48ed71->leave($__internal_a39f298d27e5e9d5b8c88184e372bd76413e38daea7a7a9f4cb04bb77a48ed71_prof);

        
        $__internal_72c5f5d475f71fadf2ccf9ce1e1234ff88c739c68a8790aea5e664b805677615->leave($__internal_72c5f5d475f71fadf2ccf9ce1e1234ff88c739c68a8790aea5e664b805677615_prof);

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
