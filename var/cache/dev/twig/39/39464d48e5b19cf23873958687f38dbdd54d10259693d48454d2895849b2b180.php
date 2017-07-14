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
        $__internal_c14932ddfdb54a28cce11e031458223703b31d35f1de237f51f6ad9a1feba570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c14932ddfdb54a28cce11e031458223703b31d35f1de237f51f6ad9a1feba570->enter($__internal_c14932ddfdb54a28cce11e031458223703b31d35f1de237f51f6ad9a1feba570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_60e8589413816eb42d92896995e00735bdc6ebf4d3312f6468a2c619cd0b4d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60e8589413816eb42d92896995e00735bdc6ebf4d3312f6468a2c619cd0b4d6a->enter($__internal_60e8589413816eb42d92896995e00735bdc6ebf4d3312f6468a2c619cd0b4d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_c14932ddfdb54a28cce11e031458223703b31d35f1de237f51f6ad9a1feba570->leave($__internal_c14932ddfdb54a28cce11e031458223703b31d35f1de237f51f6ad9a1feba570_prof);

        
        $__internal_60e8589413816eb42d92896995e00735bdc6ebf4d3312f6468a2c619cd0b4d6a->leave($__internal_60e8589413816eb42d92896995e00735bdc6ebf4d3312f6468a2c619cd0b4d6a_prof);

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
