<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_97d85ca10ebf31168253ee67d9dcbcf26b7ee153f124ec2f83a1e73f952dd6d5 extends Twig_Template
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
        $__internal_da76813d4181305f683e48c2dc33c213f43cb7de22adfdaf10e7be84bb48b5bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da76813d4181305f683e48c2dc33c213f43cb7de22adfdaf10e7be84bb48b5bb->enter($__internal_da76813d4181305f683e48c2dc33c213f43cb7de22adfdaf10e7be84bb48b5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_391b4bffe97b48fea25120be8dae9a4df1a809b5f8e75f27514269a782da59ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_391b4bffe97b48fea25120be8dae9a4df1a809b5f8e75f27514269a782da59ab->enter($__internal_391b4bffe97b48fea25120be8dae9a4df1a809b5f8e75f27514269a782da59ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_da76813d4181305f683e48c2dc33c213f43cb7de22adfdaf10e7be84bb48b5bb->leave($__internal_da76813d4181305f683e48c2dc33c213f43cb7de22adfdaf10e7be84bb48b5bb_prof);

        
        $__internal_391b4bffe97b48fea25120be8dae9a4df1a809b5f8e75f27514269a782da59ab->leave($__internal_391b4bffe97b48fea25120be8dae9a4df1a809b5f8e75f27514269a782da59ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
