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
        $__internal_ca53c33b0c9d6d7c40189e346c43ebacd0b1a676d082075050ea183989d10a04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca53c33b0c9d6d7c40189e346c43ebacd0b1a676d082075050ea183989d10a04->enter($__internal_ca53c33b0c9d6d7c40189e346c43ebacd0b1a676d082075050ea183989d10a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_3dc7cebcf0449c68c7967d5595ade7f60bdb963a2274713054990818f0986674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc7cebcf0449c68c7967d5595ade7f60bdb963a2274713054990818f0986674->enter($__internal_3dc7cebcf0449c68c7967d5595ade7f60bdb963a2274713054990818f0986674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ca53c33b0c9d6d7c40189e346c43ebacd0b1a676d082075050ea183989d10a04->leave($__internal_ca53c33b0c9d6d7c40189e346c43ebacd0b1a676d082075050ea183989d10a04_prof);

        
        $__internal_3dc7cebcf0449c68c7967d5595ade7f60bdb963a2274713054990818f0986674->leave($__internal_3dc7cebcf0449c68c7967d5595ade7f60bdb963a2274713054990818f0986674_prof);

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
