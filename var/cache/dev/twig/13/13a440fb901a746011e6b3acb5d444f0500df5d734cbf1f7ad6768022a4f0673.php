<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_95eda341faab5cb2d88262f92795662f7246eb4847c62e7f91e77325ba43be29 extends Twig_Template
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
        $__internal_3798d20011dcf3e962ef31b1eb4d547172009b4ac0c127a5dc619e59af54629b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3798d20011dcf3e962ef31b1eb4d547172009b4ac0c127a5dc619e59af54629b->enter($__internal_3798d20011dcf3e962ef31b1eb4d547172009b4ac0c127a5dc619e59af54629b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_188ae512df08f34586307ee9444a6a80b3b3fcb705e5d1a5baa38d471767b1e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_188ae512df08f34586307ee9444a6a80b3b3fcb705e5d1a5baa38d471767b1e9->enter($__internal_188ae512df08f34586307ee9444a6a80b3b3fcb705e5d1a5baa38d471767b1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3798d20011dcf3e962ef31b1eb4d547172009b4ac0c127a5dc619e59af54629b->leave($__internal_3798d20011dcf3e962ef31b1eb4d547172009b4ac0c127a5dc619e59af54629b_prof);

        
        $__internal_188ae512df08f34586307ee9444a6a80b3b3fcb705e5d1a5baa38d471767b1e9->leave($__internal_188ae512df08f34586307ee9444a6a80b3b3fcb705e5d1a5baa38d471767b1e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
