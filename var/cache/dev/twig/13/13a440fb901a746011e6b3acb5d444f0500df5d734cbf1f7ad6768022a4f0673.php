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
        $__internal_a2e57aab1dd2ca0e6f047a1617c04bfad98a8e082ad1baff11cc4c30fed6d3dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2e57aab1dd2ca0e6f047a1617c04bfad98a8e082ad1baff11cc4c30fed6d3dd->enter($__internal_a2e57aab1dd2ca0e6f047a1617c04bfad98a8e082ad1baff11cc4c30fed6d3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_4adb7182cdfe475a8e8488f7ee336b8534ba8117cda82882326d2361abfa2b69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4adb7182cdfe475a8e8488f7ee336b8534ba8117cda82882326d2361abfa2b69->enter($__internal_4adb7182cdfe475a8e8488f7ee336b8534ba8117cda82882326d2361abfa2b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a2e57aab1dd2ca0e6f047a1617c04bfad98a8e082ad1baff11cc4c30fed6d3dd->leave($__internal_a2e57aab1dd2ca0e6f047a1617c04bfad98a8e082ad1baff11cc4c30fed6d3dd_prof);

        
        $__internal_4adb7182cdfe475a8e8488f7ee336b8534ba8117cda82882326d2361abfa2b69->leave($__internal_4adb7182cdfe475a8e8488f7ee336b8534ba8117cda82882326d2361abfa2b69_prof);

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
